<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Models\EmailLogModel;

use App\Helpers\EmailLog_helper;

class Imagepixel extends BaseController
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

    public function index($imgPixel): void
    {
        $logModel = new EmailLogModel();
        $logModel->setProperty('imgPixel', $imgPixel);

        EmailLog_helper::updateOppenedEmail($logModel);

        return;
    }

}
