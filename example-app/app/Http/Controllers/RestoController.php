<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class RestoController extends Controller
{
    //

    function index()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        $users = $request->input('users');
        $password = $request->input('password');

        DB::insert('INSERT INTO users (user, password) VALUES (?, ?)', [$users, $password]);


        return redirect('login');
    }
}
