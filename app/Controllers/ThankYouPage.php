<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Jwt_helper;
use App\Helpers\Validate_helper;
use App\Helpers\Account_helper;

class ThankYouPage extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'THANK YOU FOR REGISTRATION';
    private string $view = 'thankYouPage/thankYouPage';
    private string $assestFile = 'thankYouPage/thankYouPage';

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

    public function index($jwtKey): string
    {
        $data = [
            'account' => $this->getAccount($jwtKey)
        ];

        return $this->renderPage($data);
    }

    private function getAccount(string $jwtKey): null|array
    {
        $data = Jwt_helper::decode($jwtKey);

        if (!empty($data['id']) && Validate_helper::validatePositiveInteger($data['id'])) {
            $account = new AccountModel($data['id']);

            return Account_helper::getAccount($account);
        }

        return null;
    }

}

