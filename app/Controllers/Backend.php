<?php

namespace App\Controllers;

class Backend extends BaseController
{
    public function index()
    {
        return view('admin/home');
    }
}
