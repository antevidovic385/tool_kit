<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\AccountModel;

use App\Helpers\Account_helper;
use App\Helpers\Jwt_helper;
use App\Helpers\Message_helper;

class Activateaccount extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = '';
    private string $view = '';
    private string $assestFile = '';

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

    public function index($jwt): object
    {
        $data = Jwt_helper::decode($jwt);
        $account = new AccountModel($data['id']);

        if (Account_helper::activateAccount($account)) {
            $this->setResponse(status: true, successMsgCode: Message_helper::$ACCOUNT_ACTIVATED);
        } else {
            $this->setResponse(status: false, errorMsgCode: Message_helper::$ACCOUNT_NOT_ACTIVATED);
        }

        $this->setResponseInSession();

        return redirect()->redirect(base_url() . 'login');
    }

}
