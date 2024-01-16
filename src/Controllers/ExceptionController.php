<?php

namespace App\Controllers;

use App\Controllers\Controller;

class ExceptionController extends Controller
{

    public function notFound()
    {
        $this->view('errors/404');
    }

    public function notAllowed()
    {
        $this->view('errors/405');
    }
}
