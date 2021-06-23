<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Assessment3'
        ];
        return view('pages/home', $data);
    }

    public function arsitek()
    {
        $data = [
            'title' => 'ARTNOW'
        ];
        return view('arsitek/index', $data);
    }
}
