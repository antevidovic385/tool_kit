<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Jwt_helper;
use App\Helpers\Message_helper;
use App\Helpers\Email_helper;

class RegisterAccount extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'Register account';
    private string $view = 'registerAccount/registerAccount';
    private string $assestFile = 'registerAccount/registerAccount';

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

    public function registerAccount(): void
    {
        $data = $this->getRequestPost();
        $account = new AccountModel();

        if ($account->save($data)) {
            $data = [
                'redirect' => 'thank_you/' . Jwt_helper::encode(['id' => $account->id])
            ];
            $this->setResponse(status: true, data: $data);
            $this->sendActivationEmail($account);
        } else {
            $this->setResponse(status: false, models: [$account], errorMsgCode: Message_helper::$NOT_SAVED);
        }

        echo $this->encodeResponse();
        return;
    }

    private function sendActivationEmail(AccountModel $account): void
    {
        $account->set();

        Email_helper::sendActivationLink($account);

        return;
    }

}
