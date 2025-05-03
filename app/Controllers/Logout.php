<?php
declare(strict_types=1);

namespace App\Controllers;

class Logout extends BaseController
{

    private string $area = ADMIN_AREA;
    private string $title = '';
    private string $view = '';

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

    public function index(): string|object
    {
        session_destroy();

        return redirect()->redirect('login');
    }

}
