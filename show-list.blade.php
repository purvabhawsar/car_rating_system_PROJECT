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
            <div class="card">
                
                <h4 class="text-center">THIS IS ADMIN CAR LIST PAGE</h4>

                <!--<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in !  ') }}

                   <right> <a href="#" role="button" class="btn btn-success btn-right">Show Car List</a></right>
                </div>
                <form action="{{route('save')}}" method="post">
                @if(Session::has('show'))
<span>{{Session::get('show')}}</span>
@endif-->

            
                
                <div class="form-group">
    <table class="table table-striped text-center">
    <tr>
        <th>ID</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Detail</th>
        <th>Mileage</th>
        <th>Seat</th>
        <th>Image</th>
        <th>Delete</th>


    </tr>
    @foreach($posts as $post)
    <tr>
    <td>{{$post->id}}</td>
    <td>{{$post->brand}}</td>
    <td>{{$post->price}}</td>
    <td>{{$post->description}}</td>
    <td>{{$post->mileage}}</td>
    <td>{{$post->seats}}</td>
    <td><img src="{{asset('uploads/images/' . $post->image)}}" height="100px" width="100px"></td>
    <td><a href="/delete-field/{{$post->id}}" role="button" class="btn btn-danger">Delete</a></td>
    
        
    </tr>
    @endforeach
    </table>
        </div>
    
            
            
            
            
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
