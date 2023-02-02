@extends('layout')

@section('content')

<h1>Register new User</h1>
<form method="post" action="register">
    @csrf
    <div class="from-group">
        <label>User</label>
        <input type = "text" name = "users" placeholder = "username">
    </div>
    <div class="from-group">
        <label>password</label>
        <input type="password" name="password" class="from-control" placeholder="Enter password">
    </div>
        <button type="submit" class="btm btn-primary">Submin</button>
</form>
@stop
