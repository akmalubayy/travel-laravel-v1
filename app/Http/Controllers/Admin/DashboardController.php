<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Transaction;
use App\TravelPackage;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $paket_travel = TravelPackage::count();
        $transaksi = Transaction::count();
        $status_success = Transaction::where('transaction_status', 'SUCCESS')->count();
        $status_pending = Transaction::where('transaction_status', 'PENDING')->count();


        return view ('pages.admin.dashboard', compact(['paket_travel','transaksi','status_success','status_pending']));
    }
}
