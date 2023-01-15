<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Ticket;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('price.create', [
            'tickets' => Ticket::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'ticket_id' => ['required'],
            'price' => ['required']
        ]);

        $validateSamePrice = Price::where('ticket_id', $validatedData['ticket_id'])->first();

        if ($validateSamePrice) {
            return redirect('/prices/create')->with('samePrice', 'Prices dengan data tersebut sudah ada di database!')->withInput();
        }

        Price::create($validatedData);

        return redirect('/prices');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function show(Price $price)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function edit(Price $price)
    {
        return view('price.edit', [
            'price' => $price
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Price $price)
    {
        $validatedData = $request->validate([
            'price' => ['required']
        ]);

        $price->update($validatedData);

        return redirect('/tickets')->with('update', 'Harga tiket berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Price  $price
     * @return \Illuminate\Http\Response
     */
    public function destroy(Price $price)
    {
        //
    }
}
