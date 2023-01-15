<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

use Barryvdh\DomPDF\Facade\Pdf;

class PrintController extends Controller
{
    public function index(Request $request)
    {

        $order = Order::where('order_code', $request['order'])->first();

        if (Gate::allows('isAdmin')) {
            return view('dashboard.order.print', [
                'order' => $order
            ]);
        } else {
            $transactionCompleted = Order::where('order_code', $request['order'])->first()->transaction->status;
            if ($transactionCompleted) {
                if (Auth::id() != $order->user->id) {
                    return redirect('/orders');
                }

                return view('dashboard.order.print', [
                    'order' => $order
                ]);
            } else {
                return redirect('/orders')->with('paymentCheckFailed', 'Dimohon untuk membayar tiket terlebih dahulu!');
            }
        }
    }

    // public function print()
    // {
    //     $pdf = PDF::loadview('customer.order.print')->setPaper('A4', 'potrait');
    //     return $pdf->stream('invoice.pdf');
    // }
}
