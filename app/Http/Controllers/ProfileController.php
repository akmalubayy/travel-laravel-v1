<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\User;
use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function index()
    {
        $item = auth()->user();
        $data = Transaction::all();

        return view('pages.profile', compact(['item','data']));
    }

    public function edit()
    {
        $item = auth()->user();

        return view('pages.edit-profile', compact(['item']));
    }

    public function update(Request $request)
    {
        $item = Auth::user();

        // dd($item);

        $item->update($request->all());

        $item->save();

        return redirect()->route('profile');
    }
}
