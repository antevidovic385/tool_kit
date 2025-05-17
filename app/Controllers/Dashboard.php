<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    private string $area = ADMIN_AREA;
    private string $view = 'dashboard/dashboard';
    private string $assestFile = 'dashboard/dashboard';
    private string $title = 'Dashboard';

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

}
