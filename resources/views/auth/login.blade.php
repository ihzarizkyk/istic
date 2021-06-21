@extends('templates.app')
@section('title','Login')

@section('content')

<a class="btn btn-danger mb-3" href="/">
Back
</a>

    <div class="d-flex justify-content-center">
            <div class="card mb-6">
            <div class="card-header">
            Login - ISTIC
            </div>
            <div class="card-body">
                    <form action="/auth/postlogin" class="form mb-6" method="POST">
                    @csrf
                    <div class="form-group">
                        <label class="label">
                            <b>Email:</b>
                        </label>
                        <input name="email" type="text" class="form-control">
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="label">
                            <b>Password:</b>
                        </label>
                        <input name="password" type="password" class="form-control">
                        @error('password')
                        {{$message}}
                        @enderror
                    </div>
                    <br>
                    <button name="login" type="submit" class="btn btn-md btn-primary mb-3">
                    Login
                    </button>
                    <p class="text-muted">don't have any account? <a href="/auth/register">Register</a></p>
                </form>
            </div>
        </div>
    </div>


@endsection