<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product User Order - ISTIC</title>
</head>
<body>
    <div class="container">

    <h1 class="title">
    Product Order List
    </h1>

    <div class="card">
			<div class="card-body">
			<div class="card-text">
				
				<ol>
                Username : {{Auth::user()->name}}
                <br>
				@foreach($produk as $p)
					<li>{{$p->name}}</li>
                    <li>Rp{{$p->price}}</li>
                    <li>{{$p->created_at}}</li>
				@endforeach
				</ol>
			</div>
			</div>
	</div>

    </div>
</body>
</html>