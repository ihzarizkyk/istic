<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product User Order - ISTIC</title>
</head>
<body>
<div class="container">

    <a href="/dashboard/profile" class="btn btn-warning mb-3 mt-3">
        Back
    </a>

    <h1 class="title">
    Product Order List - {{Auth::user()->name}}
    </h1>

    <table class="table table-striped table-bordered" id="product">
        <thead>
            <tr>
                <th>No</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Created_at</th>
            </tr>
        </thead>
        <tbody>
                @foreach($produk as $p)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->name}}</td>
                    <td>Rp{{$p->price}}</td>
                    <td>{{$p->quantity}}</td>
                    <td>{{$p->created_at}}</td>
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
        $('#product').DataTable();
    } );
</script>
</body>
</html>