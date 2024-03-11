<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function index(): string
    {
        return view('login');
    }
    public function dashboard(): string
    {
        return view('dashboard');
    }
}
