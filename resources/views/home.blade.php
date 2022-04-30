@extends('app')
@section('content')
@auth
<p>Welcome <b>{{ Auth::user()->name }}</b></p>
<a class="btn btn-primary" href="{{ route('password') }}">Chang Password</a>
<a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
<a class="btn btn-success" href="{{ route('web') }}">Web</a>
@endauth
@guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-danger" href="{{ route('register') }}">Register</a>
@endguest
@endsection