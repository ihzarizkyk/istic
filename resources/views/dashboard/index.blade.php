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

    <h1>
        {{$product->count()}}
        Products
    </h1>

    <table class="table table-striped table-bordered" id="shipping">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Resi</th>
                <th>Persediaan</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($product as $p)
            <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->resi}}</td>
            <td>{{$p->quantity}}</td>
            <td>{{$p->status}}</td>
            <td>
                @if(Auth::user()->level == 1)
                -
                @elseif(Auth::user()->level == 2)
                <a href="/dashboard/process/{{$sp->id}}" class="btn btn-sm btn-warning">
                    Proses Pengiriman
                </a>
                @elseif(Auth::user()->level == 3)
                <a href="/dashboard/process/{{$sp->id}}" class="btn btn-sm btn-warning">
                    Proses Pengiriman
                </a>
                @elseif(Auth::user()->level == 4)
                <a href="/dashboard/process/{{$sp->id}}" class="btn btn-sm btn-warning">
                    Proses Pengiriman
                </a>
                @elseif(Auth::user()->level == 5)
                <a href="/dashboard/process/{{$sp->id}}" class="btn btn-sm btn-warning">
                    Proses Pengiriman
                </a>
                @endif
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
        $('#shipping').DataTable();
    } );
</script>
</body>
</html>