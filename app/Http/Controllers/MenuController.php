<?php

namespace App\Http\Controllers;

use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        return view('menu');
    }

    public function get_2021()
    {
        $transaction = Transaction::all();
        // return TransactionResource::collection($transaction);
        return view('tahun2021', compact('transaction'));
    }
}
