@extends('layouts.index')
@section('title', 'Online Shop Website')
@section('style')
    <link rel="stylesheet" href="{{ asset('public/css/register.css') }}">
@endsection
@section('content')
<div class="login">

    <span>Register</span>
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
            <label>Name : </label>
            <input type="text" class="form-control" name="name">
        </section>
        <section class="form-group">
            <label>Username : </label>
            <input type="text" class="form-control" name="username">
        </section>
        <section class="form-group">
            <label>Password : </label>
            <input type="password" class="form-control" name="password" min="6">
        </section>
        <section class="form-group">
            <label>Mobile number : </label>
            <input type="text" class="form-control" name="mobile">
        </section>
        <section class="form-group">
            <label>Address : </label>
            <input type="text" class="form-control" name="address">
        </section>
        <section class="form-group">
            <input type="submit" class="btn btn-success btn-login" value="Sign Up">
            <input type="reset" class="btn btn-danger btn-login" value="Reset">
        </section>
    </form>

</div>
@endsection
