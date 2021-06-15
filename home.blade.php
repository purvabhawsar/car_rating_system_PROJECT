<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  </style>

</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card-body">
                   <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>-->

            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <br>
                <h4 class="text-center text-success ">LIST OF TRENDING CARS</h4>

                            </div><br>
                            <div class="form-group">
    <table class="table table-hover text-center table-dark">
    <tr>
        <th> CAR ID</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Mileage</th>
        <th>Seat</th>
        <th>Select Image</th>


    </tr>
    @foreach($views as $viewer)
    <tr>
    <td>{{$viewer->id}}</td>
    <td>{{$viewer->brand}}</td>
    <td>{{$viewer->price}}</td>
    <td>{{$viewer->description}}</td>
    <td>{{$viewer->mileage}}</td>
    <td>{{$viewer->seats}}</td>
    <td><a href="/big-image/{{$viewer->id}}"><img src="{{asset('uploads/images/' . $viewer->image)}}" height="100px" width="150px"></a></td>
    
        
    </tr>
    @endforeach
    </table>
        </div>
    
        </div>
    </div>
</div>
@endsection
</body>
</html>
