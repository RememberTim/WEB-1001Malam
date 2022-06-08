<?php

namespace App\Http\Controllers\API;

use App\Models\Transaction;

use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class TransactionController extends Controller
{
    public function get(Request $request, $id)
    {
        $product = Transaction::with(['users.details.product'])->find($id);

        if ($product) 
           return ResponseFormatter::success($product,'Transaksi berhasil diambil');
        else
           return ResponseFormatter::error('Transaksi gagal diambil');
            
     
    
    }
}
