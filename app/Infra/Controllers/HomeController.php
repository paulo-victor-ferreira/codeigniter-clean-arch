<?php

namespace App\Infra\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
