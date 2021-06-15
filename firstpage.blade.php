<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


  <style type="text/css">
  .container
  {
    height: 250px;
    width: 500px;
    background-color: white;
    margin-top: 100px;
    border: 2px solid white;
    box-shadow: 4px 4px 4px 4px grey;

  }


  </style>

</head>
<body>



<div class=" container relative flex items-top justify-center  min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
            <h3 class="text-center text-success p-3">CAR RATING SYSTEM</h3>
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <h3><center><a href="{{ route('login') }}" class="text-sm text-gray-700 btn btn-primary" role="button ">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 btn btn-danger" role="button">Register</a></center></h3>
                        @endif
                    @endauth
                </div>
            @endif
            
            </div>
            </body>
            </html>
