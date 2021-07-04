<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Log Activity History - ISTIC</title>
</head>
<body>

<div class="container">

	<h1>
		Log Activity History - User ISTIC
	</h1>
	
    <a href="/dashboard/profile" class="btn btn-warning mb-3 mt-3">
        Back
    </a>

 	<table class="table table-striped table-bordered" id="log">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>IP Addres</th>
                <th>Status</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
			@foreach($loghistory as $log)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$log->name}}</td>
				<td>{{$log->ip}}</td>
				@if($log->status == "Login")
				<td><span class="badge badge-success">{{$log->status}}</span></td>
				@elseif($log->status == "Logout")
				<td><span class="badge badge-danger">{{$log->status}}</span></td>
				@endif
				<td>{{$log->created_at}}</td>
			</tr>
			@endforeach
        </tbody>
    </table>

</div>

<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.js"></script>
<script type="text/javascript">
     $(document).ready( function () {
        $('#log').DataTable();
    } );
</script>
</body>
</html>