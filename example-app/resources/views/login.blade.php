@extends('layout')

@section('content')

<h1>Login</h1>
<form method="post" action="login">
    @csrf

    <div class="from-group">
        <label>Uesrname</label>
        <input type="text" name="user" class="from-control" placeholder="Enter uesrname">
    </div>
    <div class="from-group">
        <label>Password</label>
        <input type="password" name="password" class="from-control" placeholder="Enter password">
    </div>
        <button type="submit" class="btm btn-primary">Submit</button>
</form>
<form action="{{ route('register') }}" method="get">
    <button type="submit">Go to Register Page</button>
  </form>
@stop
