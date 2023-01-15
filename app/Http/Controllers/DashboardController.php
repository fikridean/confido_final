<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\Complaint;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            return view('dashboard.index', [
                'tickets' => Ticket::all(),
                'orders' => Order::all(),
                'transactions' => Transaction::where('status', false),
                'complaints' => Complaint::where('seen', false)
            ]);
        } else {
            return view('dashboard.index', [
                'tickets' => Ticket::all(),
                'orders' => Order::all(),
                'transactions' => Transaction::where('status', false)->whereHas('order', function ($query) {
                    $query->where('user_id', Auth::id());
                })->get(),
                'complaints' => Complaint::where('seenForAdmin', false)->whereHas('order', function ($query) {
                    $query->where('user_id', Auth::id());
                })->get(),
            ]);
        }
    }
}
