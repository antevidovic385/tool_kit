<?php
declare(strict_types=1);

namespace Modules\Shop\Controllers;

use App\Controllers\BaseController;

class Categories extends BaseController
{

    private string $area = ADMIN_AREA;
    private string $title = 'Categories';
    private string $view = 'Modules\Shop\Categories\categories';
    private string $assestFile = 'shop/categories/categories';

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
