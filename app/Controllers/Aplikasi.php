<?php

namespace App\Controllers;

class Aplikasi extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home'
        ];
        return view('page/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        return view('page/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact'
        ];

        return view('page/contact', $data);
    }
}
