<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CalendarController extends Controller
{
    public function store(Request $request)
{
    $appointment = $request->input('appointment');
    $selected_date = $request->input('selected_date');
    $user_id = $request->session()->get('user_id', null);
if (!$user_id) {

    return redirect('login')->withErrors(['User is not logged in']);
}


    DB::insert('INSERT INTO selected_dates (appointment, date,user_id) VALUES (?, ?,?)', [$appointment, $selected_date, $user_id]);


    return redirect('calendar');
}
public function login(Request $request)
{
    $username = $request->input('user');
    $password = $request->input('password');

    $user = DB::table('users')->where('user', $username)->where('password', $password)->first();

    if ($user) {
        $user_id = $user->id;
        $request->session()->put('user_id', $user_id);
        //if($user_id == 1){
           // return redirect('appoint');
       //}
        return redirect('calendar');

    } else {

        return redirect('login')->withErrors(['Wrong username or password']);
    }
}
public function viewappoint()
{
    $appointments = DB::table('selected_dates')->get();
    return view('appoint', ['appointments' => $appointments]);
}
}
