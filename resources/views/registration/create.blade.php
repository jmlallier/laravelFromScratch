@extends('layout')

@section('content')
    <div class='col-sm-8'>
        <h1>Register</h1>
        <form action='/register' method='POST'>
            {{csrf_field()}}
            <div class='form-group'>
                <label for='name'>Name:</label>
                <input type='text' class='form-control' id='name' name='name' required>
            </div>
            <div class='form-group'>
                <label for='email'>Email:</label>
                <input type='email' class='form-control' id='email' name='email' required>
            </div>
            <div class='form-group'>
                <label for='password'>Password:</label>
                <input type='password' name='password' id='password' class='form-control' required>
            </div>
            <div class='form-group'>
                <label for='password_confirmation'>Confirm Password:</label>
                <input type='password' name='password_confirmation' id='password_confirmation' class='form-control' required>
            </div>
            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Sign up</button>
            </div>
            @include('partials.errors')
        </form>
    </div>
@endsection