<?php

namespace App\Http\Controllers;

use Exception;

class HomeController
{
    public function __invoke()
    {
       throw new Exception('Bye world');

        return view('welcome');
    }
}
