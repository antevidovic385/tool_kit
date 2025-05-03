<?php

namespace App\Controllers;

use App\Helpers\Translate_helper;
use App\Helpers\Customvalues_helper;

class Home extends BaseController
{

    private string $area = PUBLIC_AREA;
    private string $title = 'Home pahe account';
    private string $view = 'home/home';

    protected function getArea(): string
    {
        return $this->area;
    }

    protected function getTitle(): string
    {
        return Translate_helper::translate($this->title);
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
