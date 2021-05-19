<?php

namespace App\Http\Controllers;

use Exception;

class HomeController
{
    public function __invoke()
    {
        throw new Exception("Test");

        return view('welcome');
    }
}
