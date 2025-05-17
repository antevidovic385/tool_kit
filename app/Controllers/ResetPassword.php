<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Account_helper;
use App\Helpers\Email_helper;
use App\Helpers\Message_helper;
use App\Helpers\Validate_helper;

class ResetPassword extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'RESET PASSWORD';
    private string $view = 'resetPassword/resetPassword';
    private string $assestFile = 'resetPassword/resetPassword';

    protected function getArea(): string
    {
        return $this->area;
    }

    protected function getTitle(): string
    {
        return  $this->title;
    }

    protected function getView(): string
    {
        return $this->view;
    }

    protected function getAssestFile(): string
    {
        return $this->assestFile;
    }

    public function index(): string
    {
        return $this->renderPage();
    }

    public function sendResetPasswordLink(): void
    {
        $post = $this->getRequestPost();

        if ($this->validatePost($post) && $this->sendResetPasswordLinOnEmail($post['email'])) {
            $this->setResponse(status: true, successMsgCode: Message_helper::$RESET_PASSWORD_EMAIL_SENT);
        } else {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$FAILED);
        }

        echo $this->encodeResponse();
        return;
    }

    private function validatePost(array $post): bool
    {
        $errors = 0;

        if (empty($post['email'])) {
            $errors ++;
            $this->pushErrorMessageId(Message_helper::$EMAIL_IS_MANDATORY);
        }

        if (isset($post['email']) && !Validate_helper::validateEmail($post['email'])) {
            $errors++;
            $this->pushErrorMessageId(Message_helper::$INVALID_EMAIL);
        }

        return ($errors === 0);
    }

    private function sendResetPasswordLinOnEmail(string $email): bool
    {

        $account = new AccountModel();
        $account->setProperty('email', $email);
        $data = Account_helper::getAccountDataWithEmail($account);

        if (!$data) {
            $this->pushErrorMessageId(Message_helper::$UNKNOWN_ACCOUNT_EMAIL);
            return false;
        }

        return Email_helper::sendResetPasswordLink($data);
    }

}
