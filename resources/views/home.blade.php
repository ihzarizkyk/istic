@extends('templates.app')
@section('title','Home')

@section('content')

    <div class="jumbotron mb-2">
        <h1>
            Information System Logistic
        </h1>
        <a class="btn btn-primary" href="/auth/login">
            Getting Started
        </a>
    </div>


    <div class="row bg-secondary">

        <div class="col-12 col-md-6">
            <div class="card mt-3 mb-1">
                <div class="card-body">
                    <h1>
                        Cek Resimu
                    </h1>
                    <form class="form" action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="search" class="form-control w-50" placeholder="Masukkan Kode Resi" />
                        </div>
                        <input type="submit" name="search" class="btn btn-primary" value="check">
                    </form>            
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6">
            <div class="card mt-3 mb-2">
                <div class="card-body">
                               <h1 class="title">
                        Harga Pengiriman
                    </h1>

                    <form class="form" action="#" method="POST">
                        @csrf
                        <div class="form-group">
                        <label class="label">
                            dari :
                        </label>
                        <select type="select" name="from" class="form-control w-75">
                            <option selected disabled>dari</option>
                            <option>1</option>
                        </select>
                        </div>

                        <div class="form-group">
                        <label class="label">
                            ke :
                        </label>
                        <select type="select" name="from" class="form-control w-75">
                            <option selected disabled>ke</option>
                            <option>1</option>
                        </select>
                    </div>
                    <input class="btn btn-info" type="submit" name="cek" value="cek">
                    </form>
            </div></div>
        </div>

    </div>


        <h1 class="title">
            News
        </h1>

        <div class="row">

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="title">
                        News Two
                        </h1>
                    </div>
                    <div class="card-body">
                    <p class="text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Autem ducimus qui ipsum necessitatibus quia voluptatum. Voluptates a 
                    veniam illum harum maiores praesentium corrupti, 
                    ipsam suscipit culpa minima at. Quos, quae!
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="title">
                        News One
                        </h1>
                    </div>
                    <div class="card-body">
                    <p class="text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Autem ducimus qui ipsum necessitatibus quia voluptatum. Voluptates a 
                    veniam illum harum maiores praesentium corrupti, 
                    ipsam suscipit culpa minima at. Quos, quae!
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="title">
                        News Three
                        </h1>
                    </div>
                    <div class="card-body">
                    <p class="text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Autem ducimus qui ipsum necessitatibus quia voluptatum. Voluptates a 
                    veniam illum harum maiores praesentium corrupti, 
                    ipsam suscipit culpa minima at. Quos, quae!
                    </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card mb-3">
                    <div class="card-header">
                        <h1 class="title">
                        News Four
                        </h1>
                    </div>
                    <div class="card-body">
                    <p class="text-justify">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                    Autem ducimus qui ipsum necessitatibus quia voluptatum. Voluptates a 
                    veniam illum harum maiores praesentium corrupti, 
                    ipsam suscipit culpa minima at. Quos, quae!
                    </p>
                    </div>
                </div>
            </div>
    
        </div>

        <h1>
            About ISTIC
        </h1>

        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Sed officia labore deleniti aperiam quis vel dolores iure ipsum 
            quo eaque culpa officiis, consequatur, 
            atque ullam necessitatibus id quidem perspiciatis ut.

            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
            Sed officia labore deleniti aperiam quis vel dolores iure ipsum 
            quo eaque culpa officiis, consequatur, 
            atque ullam necessitatibus id quidem perspiciatis ut.
        </p>

@endsection