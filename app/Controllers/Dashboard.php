<?php

namespace App\Controllers;


use CodeIgniter\Controller;

class Dashboard extends BaseController
{
    public function index()
    {
        return view('welcome_message--');
    }

    public function hola()
    {
        echo "Hola mundo!!!";

    }


}
