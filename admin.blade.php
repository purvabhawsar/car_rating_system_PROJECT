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
            <!--<div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h1>THIS IS ADMIN HOME PAGE</h1>-->

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in !  ') }}

                   <right> <a href="{{route('show-list')}}" role="button" class="btn btn-success btn-right">Show Car List</a></right>
                </div>
                <form action="{{route('save')}}" method="post" enctype="multipart/form-data">
                @if(Session::has('show'))
<span>{{Session::get('show')}}</span>
@endif

                <h6 class="text-center m-3">Enter Car Detail</h6>
                @csrf
                <div class="form-group">
                    <input type="text"class="form-control" placeholder="Brand Name" name="brand">
                </div>
                <div class="form-group">
                    <input type="text"class="form-control " placeholder="Enter Price" name="price">
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="description" name="description"></textarea>
                </div>
                <div class="form-group">
                    <input type="text"class="form-control" placeholder="Enter Mileage" name="mileage">
                </div>
                <div class="form-group">
                    <input type="text"class="form-control" placeholder="Enter seats Number" name="seats">
                </div>
                <div class="form-group">
                    <input type="file" name="image">

                </div>
                <center><button class="btn btn-primary">Submit</button></center>
                </form>
            
            
            
            
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
