<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Jwt_helper;
use App\Helpers\Message_helper;
use App\Helpers\Validate_helper;

class SaveNewPassword extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'SET NEW PASSWORD';
    private string $view = 'saveNewPassword/saveNewPassword';
    private string $assestFile = 'saveNewPassword/saveNewPassword';

    private AccountModel $account;

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

    public function index($jwt): string
    {
        if ($this->validateLink($jwt)) {
            return $this->renderPage(['jwt' => $jwt]);
        }

        $this->setResponse(status: false);
        $this->setResponseInSession();

        return $this->renderPage();
    }

    public function saveNewPassword($jwt): void
    {
        $post = $this->getRequestPost();

        if (
            $this->validatePost($post)
            && $this->validateLink($jwt)
            && $this->updatePassword($post['password'])
        ) {
            $message = 'Go to login page and login in to your account';
            $this->setResponse(status: true, successMsgCode: Message_helper::$SAVED, customMessage: $message);
        } else {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$FAILED);
        }

        echo $this->encodeResponse();
        return;
    }

    private function validatePost($post): bool
    {
        $errors = 0;

        if (empty($post['password']) || !Validate_helper::validatePassword($post['password'])) {
            $errors++;
            $this->pushErrorMessageId(Message_helper::$PASSWORD_IS_MANDATORY);
        }

        return ($errors === 0);
    }

    private function validateLink(string $jwt): bool
    {
        if (empty($jwt)) {
            $this->pushErrorMessageId(Message_helper::$NOT_ALLOWED);
            return false;
        }

        $data = Jwt_helper::decode($jwt);

        if (
            empty($data['expire'])
            || empty($data['account'])
            || !Validate_helper::validatePositiveInteger($data['account']['id'])
        ) {
            $this->pushErrorMessageId(Message_helper::$NOT_ALLOWED);
            return false;
        }

        if (($data['expire']) < date('Y-m-d H:i:s')) {
            $this->pushErrorMessageId(Message_helper::$RESET_PASSWORD_LINK_EXPIRED);
            return false;
        }

        $this->account = new AccountModel($data['account']['id']);
        $this->account->set();

        if ($data['account']['password'] !== $this->account->password) {
            $this->pushErrorMessageId(Message_helper::$RESET_PASSWORD_LINK_USED);
            return false;
        }

        return true;
    }

    private function updatePassword(string $password): bool
    {


        return $this->account->save(['password' => $password]);
    }

}
