<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
      /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $income = Transaction::where('transaction_status', 'SELESAI')->sum('transaction_total');
        $income1 = Transaction::where('transaction_status', 'SELESAI')->sum('total_keuntungan');

        $sales = Transaction::where('transaction_status', 'SELESAI')->count();
        $sales1 = Transaction::where('transaction_status', 'MASUK')->count();
        $items = Transaction::orderBy('id', 'desc')->take(5)->get();

       
        return view('pages.dashboard')->with([
            'income' => $income,
            'income1' => $income1,
            'sales' => $sales,
            'sales1' => $sales1,
            'items' => $items,
          
            
          
        ]);
    }

   
}


