@extends('layouts.index')
@section('title', 'Online Shop Website')
@section('style')
    <link rel="stylesheet" href="{{ asset('public/css/login.css') }}">
@endsection
@section('content')
    <div class="login">
        <span>Sign In</span>
        <br><br>
        @if(session('alert'))
            <section class="alert alert-danger">{{session('alert')}}</section>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        <form method="post">
            @csrf
            <section class="form-group">
                <label>Username : </label>
                <input type="text" class="form-control" name="username">
            </section>
            <section class="form-group">
                <label>Password : </label>
                <input type="password" class="form-control" name="password">
            </section>
            <section class="form-group">
                <input type="submit" class="btn btn-info btn-login" value="Sign In">
            </section>
        </form>
        <a href="{{ url('register') }}">Create new account in here.</a>
    </div>
@endsection
