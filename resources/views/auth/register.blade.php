@extends('templates.app')
@section('title','Register')

@section('content')

<div class="d-flex justify-content-center">  

<div class="card mb-6">
    <div class="card-header">
    Register - ISTIC
    </div>
    <div class="card-body">
            <form action="#" class="form mb-6" method="POST">
            @csrf
            <div class="form-group">
                <label class="label">
                    <b>Email:</b>
                </label>
                <input name="email" type="text" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label class="label">
                    <b>Fullname</b>
                </label>
                <input name="name" type="password" class="form-control">
            </div>
            <br>
            <div class="form-group">
                <label class="label">
                    <b>Password:</b>
                </label>
                <input name="password" type="password" class="form-control">
            </div>

            <button class="btn btn-md btn-primary mb-3">
            Register Now
            </button>
            <p class="text-muted">Already have an account? <a href="/auth/login">Login</a></p>

        </form>
    </div>
</div>

</div> 

@endsection