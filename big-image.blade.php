<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>

  .black_overlay {
  display: none;
  position: absolute;
  top: 0%;
  left: 0%;
  width: 100%;
  height: 100%;
  background-color: black;
  z-index: 1001;
  -moz-opacity: 0.8;
  opacity: .80;
  filter: alpha(opacity=80);
}
.white_content {
  display: none;
  position: absolute;
  top: 25%;
  left: 25%;
  width: 50%;
  height: 60%;
  padding: 16px;
  border: 2px solid blue;
  background-color: white;
  z-index: 1002;
  overflow: auto;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}


.rates{
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rates:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rates:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rates:not(:checked) > label:before {
    content: '★ ';
}
.rates > input:checked ~ label {
    color: #ffc700;    
}
.rates:not(:checked) > label:hover,
.rates:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rates > input:checked + label:hover,
.rates > input:checked + label:hover ~ label,
.rates > input:checked ~ label:hover,
.rates > input:checked ~ label:hover ~ label,
.rates > label:hover ~ input:checked ~ label {
    color: #c59b08;
}




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
    
                <br>
                <h4 class="text-center text-success ">CAR DETAIL</h4>

                            </div><br>
                            <div class="form-group">
    
    @csrf
    

    
    <p><center><img src="{{asset('uploads/images/' . $big->image)}}" height="400px" width="600px"></center></p>


    









  <p> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'" role="button" class="btn btn-info">Rate This Car</a>
  <div id="light" class="white_content"> <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"role="button" class="btn btn-inline-danger text-danger">Close</a>
  <br>
  <h5>RATE THIS CAR</h5><br>

  <h6>Mileage</h6>

<div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Maintanance</h6>
  <div class="rates">
    <input type="radio" id="star15" name="rate3" value="15" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star14" name="rate3" value="14" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star13" name="rate3" value="13" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star12" name="rate3" value="12" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star11" name="rate3" value="11" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Cost</h6>
  <div class="rate">
    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>
  <h6>Comfort</h6>
  <div class="rate">

    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>
  </div><br><br>

  <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'"role="button" class="btn btn-secondary ">submit</a>








  </div>
  <div id="fade" class="black_overlay">

      









  </div>






     

    <!--<a href="/rating/{{$big->id}}" role="button"class="btn btn-info">Rate This Car</a>-->
    <h6 class="text-center"><b>CAR ID </b>- {{$big->id}}</h6>
    <h5 class="text-center"><b>CAR BRAND </b>- {{$big->brand}}</h5>
    <h5 class="text-center"><b>CAR PRICE </b>- {{$big->price}}</h5>
    <h5 class="text-center"><b>CAR DESCRIPTION </b>- {{$big->description}}</h5>
    <h5 class="text-center"><b>CAR MILEAGE </b>- {{$big->mileage}}</h5>
    <h5 class="text-center"><b>CAR SEATS</b> - {{$big->seats}}</h5>
    
    
        
    
    
    
        </div>
        

    
        </div>
    </div>
</div>
@endsection
</body>
</html>
