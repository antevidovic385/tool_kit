<?php
declare(strict_types=1);

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{

    private string $area = ADMIN_AREA;
    private string $title = 'Dashboard';
    private string $view = 'dashboard/dashboard';

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

    public function index(): string
    {
        return $this->renderPage();
    }

}

