<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.track.index', [
            'tracks' => Track::all()
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
            'from_route' => ['required'],
            'to_route' => ['required']
        ]);

        if (Track::where('from_route', $request['from_route'])->where('to_route', $request['to_route'])->first()) {
            return redirect('/tracks')->with('sameRoute', 'Rute tersebut sudah ada di database!');
        }

        Track::create($validatedData);

        return redirect('/tracks')->with('store', 'Rute tersebut berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function show(Track $track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Track $track)
    {
        $validatedData = $request->validate([
            'from_route' => ['required'],
            'to_route' => ['required']
        ]);

        $check = Track::where('id', '!=', $track->id)->where('from_route', $validatedData['from_route'])->where('to_route', $validatedData['to_route'])->first();

        if ($check) {
            return redirect('/tracks')->with('sameRoute', 'Rute tersebut sudah ada di database!');
        }

        $track->update($validatedData);

        return redirect('/tracks')->with('update', 'Rute tersebut berhasil diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Track  $track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Track $track)
    {
        $track->delete();
        return redirect('/tracks')->with('delete', 'Rute tersebut berhasil dihapus');
    }
}
