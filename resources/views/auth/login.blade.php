@extends('templates.app')
@section('title','Login')

@section('content')

<a class="btn btn-danger mb-3" href="/">
Back
</a>

<div class="card mb-6">
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
                    <b>Password:</b>
                </label>
                <input name="password" type="password" class="form-control">
            </div>
            <br>
            <button class="btn btn-md btn-primary">
            Login
            </button>
        </form>
    </div>
</div>


@endsection