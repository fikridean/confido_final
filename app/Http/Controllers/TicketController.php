<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Airline;
use App\Models\Type;
use App\Models\Track;
use App\Models\Price;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Gate;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $this->authorize('isAdmin');

        // if (Gate::allows('isAdmin')) {
        return view('dashboard.ticket.index', [
            'tickets' => Ticket::all()->load('price'),
            'airlines' => Airline::all(),
            'types' => Type::all(),
            'tracks' => Track::all()
        ]);
        // } else {
        //     // akses logic untuk user selain role admin
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.dashboard.ticket.index', [
        //     'airlines' => Airline::all(),
        //     'types' => Type::all(),
        //     'tracks' => Track::all()
        // ]);
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
            'airline_id' => ['required'],
            'type_id' => ['required'],
            'track_id' => ['required'],
            'price' => ['required']
        ]);

        $validateSameTicket = Ticket::where('airline_id', $validatedData['airline_id'])->where('type_id', $validatedData['type_id'])->where('track_id',  $validatedData['track_id'])->first();

        if ($validateSameTicket) {
            return redirect('/tickets')->with('sameTicket', 'Ticket dengan data tersebut sudah ada di database! jika ingin mengubah harga, masuk ke bagian harga!')->withInput();
        }

        Ticket::create($validatedData);

        $currentTicket = Ticket::where('airline_id', $validatedData['airline_id'])->where('type_id', $validatedData['type_id'])->where('track_id',  $validatedData['track_id'])->first()->id;

        $validatedPrice['ticket_id'] = $currentTicket;
        $validatedPrice['price'] = $validatedData['price'];
        Price::create($validatedPrice);

        return redirect('/tickets')->with('success', 'Tiket berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->destroy($ticket->id);
        return redirect('/tickets')->with('delete', "Tiket berhasil dihapus!");
    }
}
