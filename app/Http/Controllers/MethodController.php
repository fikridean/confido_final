<?php

namespace App\Http\Controllers;

use App\Models\Method;
use Illuminate\Http\Request;

class MethodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.method.index', [
            'methods' => Method::all()
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
            'method' => ['required', 'min:3', 'max:50'],
            'target_account' => ['required', 'min:3', 'max:50']
        ]);

        $check = Method::where('method', $request['method'])->first();

        if ($check) {
            return redirect('/methods')->with('sameMethod', 'Metode Pembayaran tersebut sudah ada di database!');
        }

        Method::create($validatedData);

        return redirect('/methods')->with('update', 'Metode Pembayaran tersebut berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function show(Method $method)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function edit(Method $method)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Method $method)
    {
        $validatedData = $request->validate([
            'target_account' => ['required', 'min:3', 'max:50']
        ]);

        $check = Method::where('id', '!=', $method->id)->where('method', $request['method'])->first();

        if ($check) {
            return redirect('/methods')->with('sameMethod', 'Metode pembayaran tersebut sudah ada di database!');
        }

        $method->update($validatedData);

        return redirect('/methods')->with('update', 'Metode Pembayaran tersebut berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Method  $method
     * @return \Illuminate\Http\Response
     */
    public function destroy(Method $method)
    {
        $method->delete();
        return redirect('/methods')->with('delete', 'Metode Pembayaran tersebut berhasil dihapus!');
    }
}
