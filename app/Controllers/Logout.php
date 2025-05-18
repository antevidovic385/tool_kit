<?php
declare(strict_types=1);

namespace App\Controllers;

class Logout extends BaseController
{

    private string $area = ADMIN_AREA;
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

    public function index(): object
    {
        session_destroy();

        return redirect()->redirect(base_url() . 'login');
    }

}
