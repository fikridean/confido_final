<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Gate::allows('isAdmin')) {
            return view('dashboard.user.index', [
                'users' => User::all()
            ]);
        } else {
            return redirect('users/' . Auth::id());
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
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        if (Gate::allows('isAdmin')) {
            return view('dashboard.profile.index', [
                'user' => $user
            ]);
        } else {
            if (Auth::id() != $user->id) {
                return redirect('/users' . '/' . Auth::id());
            }

            return view('dashboard.profile.index', [
                'user' => $user
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'min:5', 'max:100'],
            'phone_number' => ['required', 'min:10', 'max:100'],
            'gender' => ['required'],
        ]);

        if ($validatedData['gender'] == 1) {
            $validatedData['gender'] = true;
        } else {
            $validatedData['gender'] = false;
        }

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('public_profiles');
            $image = $request->file('image');
            $input['imageName'] = $validatedData['image'];
            $destinationPath = public_path('/public_profiles');
            $image->move($destinationPath, $input['imageName']);
        }

        $user->update($validatedData);

        if (Gate::allows('isAdmin')) {
            return redirect('/users')->with('update', 'Data user berhasil diubah');
        } else {
            return redirect('/users' . '/' . Auth::id());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if (Gate::allows('isAdmin')) {
            $user->delete();
            return redirect('/users')->with('delete', 'Data user berhasil dihapus');
        } else {
            return redirect('/users' . '/' . Auth::id());
        }
    }
}
