<?php

namespace App\Controllers;


class Home extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'Home pahe account';
    private string $view = 'home/home';
    private string $assestFile = 'home/home';

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
