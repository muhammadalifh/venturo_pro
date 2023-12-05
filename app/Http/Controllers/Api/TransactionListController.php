<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\TransactionResource;
use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionListController extends Controller
{
    public function __invoke(Request $request)
    {
        // return response()->json([
        //     'data' => Menu::all()
        // ]);

        $transaction = Transaction::all();
        return TransactionResource::collection($transaction);
    }
}
