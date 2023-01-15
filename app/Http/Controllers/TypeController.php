<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.type.index', [
            'types' => Type::all()
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
            'flight_at' => ['required']
        ]);

        $check = Type::where('name', $validatedData['name'])->where('name', $validatedData['name'])->first();

        if ($check) {
            return redirect('/types')->with('sameType', 'Kelas maskapai tersebut sudah ada di database!');
        }

        Type::create($validatedData);

        return redirect('/types')->with('store', "Kelas Maskapai berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function edit(Type $type)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Type $type)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:3', 'max:50'],
            'flight_at' => ['required']
        ]);

        $check = Type::where('id', '!=', $type->id)->where('name', $validatedData['name'])->first();

        if ($check) {
            return redirect('/types')->with('sameType', 'Kelas maskapai tersebut sudah ada di database!');
        }

        $type->update($validatedData);

        return redirect('/types')->with('update', "Kelas Maskapai berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Type  $type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect('/types')->with('delete', 'Kelas Maskapai berhasil dihapus');
    }
}
