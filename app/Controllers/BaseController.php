<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

use App\Helpers\Customvalues_helper;
use App\Helpers\Utility_helper;
use App\Traits\Messages as Messages;

/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */
abstract class BaseController extends Controller
{
    use Messages;

    private array $ctrlResponse = [];

    abstract protected function getArea(): string;
    abstract protected function getTitle(): string;
    abstract protected function getView(): string;
    abstract protected function getAssestFile(): string;

    /**
     * Instance of the main Request object.
     *
     * @var CLIRequest|IncomingRequest
     */
    protected $request;

    /**
     * An array of helpers to be loaded automatically upon
     * class instantiation. These helpers will be available
     * to all other controllers that extend BaseController.
     *
     * @var list<string>
     */
    protected $helpers = [];

    /**
     * Be sure to declare properties for any property fetch you initialized.
     * The creation of dynamic property is deprecated in PHP 8.2.
     */
    // protected $session;

    /**
     * @return void
     */
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        // Do Not Edit This Line
        parent::initController($request, $response, $logger);

        // Preload any models, libraries, etc, here.

        // E.g.: $this->session = \Config\Services::session();

        \Config\Services::session();

    }

    private function setCsrfData(): void
    {
        $this->ctrlResponse['csrf'] = [
            'value' => csrf_hash()
        ];

        return;
    }

    protected function setResponse(
        array $models = [],
        array $data = [],
        null|bool $status = null,
        null|int $successMsgCode = null,
        null|int $errorMsgCode = null
    ): void
    {

        if (is_bool($status)) $this->ctrlResponse['status'] = intval($status);
        if (!empty($data)) $this->ctrlResponse['data'] = $data;
        if (!empty($successMsgCode)) $this->pushSuccessMessageId($successMsgCode);
        if (!empty($errorMsgCode)) $this->pushErrorMessageId($errorMsgCode);

        $this->ctrlResponse['messages'] = $this->getMessages($models);

        return;
    }

    protected function encodeResponse(): string
    {
        $this->setCsrfData();

        $response = json_encode($this->ctrlResponse, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_HEX_APOS | JSON_HEX_QUOT);

        return $response ? $response : '';
    }

    protected function getRequestPost(): array
    {
        $post = $this->request->getPost();

        return empty($post) ? [] : Utility_helper::sanitizeData($post);
    }

    protected function renderPage(array $data = []): string
    {
        $data['view'] = $this->getView();
        $data['area'] = $this->getArea();
        $data['title'] = $this->getArea();
        $data['baseUrl'] = base_url();
        $data['assestFile'] = $this->getAssestFile();
        $data['csrfHeader'] = csrf_header();
        $data['sendAjaxRequestClass'] = 'sendAjaxRequestClass';
        $data['formMsgErrorsClass'] = 'formMsgErrorsClass';
        $data['mainMsgContainerId'] = 'mainMsgContainerId';
        $data['language'] = $_SESSION['language'] ?? 'en';
        $data['minPasswordLength'] = Customvalues_helper::$MIN_PASSWORD_LENGTH;

        return (view('includes/head', $data) . view($data['view'], $data) . view('includes/footer', $data));
    }

}
