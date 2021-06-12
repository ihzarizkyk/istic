@extends('templates.app')
@section('title','Tracking')

@section('content')


<div class="jumbotron">
	<h1>
		Tracking
	</h1>
	<a href="/" class="btn btn-danger">
		Kembali
	</a>
</div>

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
 <br>

<div class="card w-50 ml-3">
	<div class="card-header">
		Resi:
	</div>
	<div class="card-body">
		<b>
			Status: <br>
		</b>
		<b>
			Barang: <br>
		</b>
		<b>
			Lokasi: <br>
		</b>
		<b>
			Pengirim: <br>
		</b>
		<b>
			Harga: <br>
		</b>
	</div>
</div>

@endsection