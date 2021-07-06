<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - ISTIC</title>
</head>
<body>
    <div class="container">
        <a href="/auth/logout" class="btn btn-danger mb-3 mt-3">
        Logout
        </a>

        <a href="/dashboard/profile" class="btn btn-warning mb-3 mt-3">
        Back
        </a>

        @if(Auth::user()->level == 7)
        <a href="/dashboard/usermanage" class="btn btn-info mb-3 mt-3">
        User Management
        </a>
        @endif

    <h1>
        User Management
    </h1>

    <table class="table table-striped table-bordered" id="users">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $usr)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$usr->name}}</td>
            <td>{{$usr->email}}</td>
            <td>{{$usr->level}}</td>
            <td>
                <a class="btn btn-sm btn-danger" href="/dashboard/usermanage/del/{{$usr->id}}">
                    Remove
                </a>
            </td>
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
        $('#users').DataTable();
    } );
</script>
</body>
</html>