<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Account_helper;
use App\Helpers\Utility_helper;
use App\Helpers\Message_helper;

class Login extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'LOGIN';
    private string $view = 'login/login';
    private string $assestFile = 'login/login';

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

    public function index(): string|object
    {
        return $this->renderPage();
    }

    public function accountLogin(): void
    {
        $post = $this->getRequestPost();
        $account = new AccountModel();
        $account->setProperty('email', $post['email']);
        $data = Account_helper::getAccountLoginData($account);

        if (
            $data
            && $data['active'] === '1'
            && $data['softDeleted'] === '0'
            && Utility_helper::validatePassword($post['password'], $data['password'])
        ) {
            $this->setSession($data);
            $this->setResponse(status: true, data: ['redirect' => 'admin/dashboard']);
        } elseif (empty($data)) {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$UNKNOWN_ACCOUNT_EMAIL);
        } elseif ($data['softDeleted'] === '1') {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$NOT_ALLOWED);
        } elseif ($data['active'] === '0') {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$ACCOUNT_NOT_ACTIVE_LOGIN);
            // $this->sendActivationEmail($data); TO DO
        }  else {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$CHECK_PASSWORD_LOGIN);
        }

        echo $this->encodeResponse([$account]);
        return;
    }

    private function setSession(array $data): void
    {
        $_SESSION['accountId'] = $data['id'];
        $_SESSION['account'] = $data['account'];
        $_SESSION['firstName'] = $data['firstName'];
        $_SESSION['secondName'] = $data['secondName'];

        return;
    }

}
