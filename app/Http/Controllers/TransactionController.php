<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        if (Gate::allows('isAdmin')) {
            return view('dashboard.transaction.index', [
                'transactions' => Transaction::all()
            ]);
        } else {
            return view('dashboard.transaction.index', [
                'transactions' => Transaction::whereHas('order', function ($query) {
                    $query->where('user_id', Auth::id());
                })->get(),
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        return view('transaction.edit', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        if (Gate::allows('isAdmin')) {
            $validatedData = $request->validate([
                'status' => []
            ]);

            if ($request['status']) {
                $validatedData['status'] = true;
            } else {
                $validatedData['status'] = false;
            }

            $transaction->update($validatedData);

            return redirect('/transactions');
        } else {
            $validatedData = $request->validate([
                'image' => ['image', 'file', 'max:4096'],
            ]);

            if ($request->file('image')) {
                $validatedData['image'] = $request->file('image')->store('public_payment');
                $image = $request->file('image');
                $input['imageName'] = $validatedData['image'];
                $destinationPath = public_path('/public_payment');
                $image->move($destinationPath, $input['imageName']);
            }

            $transaction->update($validatedData);

            return redirect('/transactions')->with('update', 'Bukti pembayaran berhasil diunggah');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
