<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Payment;
use App\Models\PageLayout;

class PaymentController extends Controller
{
    public function index()
    {
        return view('admin', [
            'content' => PageLayout::admin('payment'),
        ]);
    }
}
