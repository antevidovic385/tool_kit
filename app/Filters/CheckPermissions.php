<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class CheckPermissions implements FilterInterface
{
    public function __construct()
    {

        \Config\Services::session();

    }

    public function before(RequestInterface $request, $arguments = null)
    {

        if (empty($_SESSION['accountId'])) {
            return redirect()->redirect('/logout');
        }

    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }

}
