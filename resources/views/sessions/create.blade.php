@extends('layout')

@section('content')
    <div class='col-sm-8'>
        <h1>Sign in</h1>
        <form action='/login' method='POST'>
            {{csrf_field()}}
            <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' id='email' name='email' required>
            </div>
            <div class='form-group'>
                <label for='password'>Password:</label>
                <input type='password' name='password' id='password' class='form-control' required>
            </div>
            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Sign in</button>
            </div>
            @include('partials.errors')
        </form>
    </div>
@endsection