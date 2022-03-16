<?php

namespace App\Http\Controllers;

use App\Models\Retard;
use Illuminate\Http\Request;

class RetardController extends Controller
{
    public function index()
    {
        $users = Retard::all();
        return view('app', compact('users'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Retard $retard)
    {
        //
    }

    public function edit(Retard $retard)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = Retard::where('id', $id)->first();
        $user->counter = request('counter');
        $user->save();
        return redirect()->route('app.index');
    }

    public function destroy(Retard $retard)
    {
        //
    }
}
