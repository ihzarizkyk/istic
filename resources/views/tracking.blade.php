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

                    </div>
 <br>


@foreach($result as $rs)
<div class="card w-50 ml-3">
	<div class="card-header">
		Hasil Tracking Resi:
	</div>
	<div class="card-body">
		<p class="text-justify">
			<b>Status:</b> <br>
			{{$rs->status}}
		</p>
		<p class="text-justify">
			<b>Barang:</b> <br>
			{{$rs->name}}
		</p>
		<p class="text-justify">
			<b>Tujuan:</b> <br>
			{{$rs->kota_tujuan}}
		</p>
		<p class="text-justify">
			<b>Pengirim:</b> <br>
			{{$rs->pengirim}}
		</p>
		<p class="text-justify">
			<b>Harga:</b> <br>
			{{$rs->price}}
		</p>
	</div>
</div>
@endforeach

@endsection