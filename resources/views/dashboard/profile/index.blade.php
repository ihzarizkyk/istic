<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
      rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Profile - ISTIC</title>
</head>
<body>

	<div class="container">

	<a href="/auth/logout" class="btn btn-md btn-danger mb-3 mt-3">
	Logout
	</a>

	<a href="/dashboard" class="btn btn-info mb-3 mt-3">
		Dashboard
	</a>

		<div class="card mt-3 mb-3">
			<div class="card-header">
			<span class="material-icons-outlined">
			account_circle
			</span>
				Profile User - {{Auth::user()->name}}
			</div>
			<div class="card-body">
				<p class="card-text">
				<b>ID:</b> {{Auth::user()->id}}
				<br>
				<b>EMAIL:</b>	{{Auth::user()->email}}
				<br>
				<b>LEVEL:</b>
				@if(Auth::user()->level == 1)
				User
				@elseif(Auth::user()->level == 2)
				Employee
				@elseif(Auth::user()->level == 3)
				Administrator
				@endif
				</p>
			</div>
			<div class="card-footer">
			<a href="/user/product" class="btn btn-md btn-info">
			View Order List
			</a>
			</div>
		</div>

	</div>

</body>
</html>