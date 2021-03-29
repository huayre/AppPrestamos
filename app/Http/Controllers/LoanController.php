<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function create()
    {
        return view('loan.new');
    }
}
