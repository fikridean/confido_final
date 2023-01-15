<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;

class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.airline.index', [
            'airlines' => Airline::all()
        ]);
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
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'gate' => ['required', 'min:3', 'max:10'],
        ]);

        $check = Airline::where('name', $validatedData['name'])->first();

        if ($check) {
            return redirect('/airlines')->with('sameAirline', 'Maskapai tersebut sudah ada di database!');
        }

        Airline::create($validatedData);

        return redirect('/airlines')->with('store', 'Data Maskapai Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(Airline $airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit(Airline $airline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airline $airline)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'gate' => ['required', 'min:3', 'max:10'],
        ]);

        $check = Airline::where('id', '!=', $airline->id)->where('name', $validatedData['name'])->where('gate', $validatedData['gate'])->first();

        if ($check) {
            return redirect('/airlines')->with('sameAirline', 'Maskapai tersebut sudah ada di database!');
        }

        $airline->update($validatedData);

        return redirect('/airlines')->with('update', 'Data Maskapai Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airline $airline)
    {
        $airline->delete();
        return redirect('/airlines')->with('delete', 'Data Maskapai Berhasil Dihapus');
    }
}
