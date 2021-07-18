<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Transactioncontroller extends Controller
{
    public function transaction(){
        return view('transaction');
    }

    public function transaction_layout(){
        return view('transaction');
    }
}
