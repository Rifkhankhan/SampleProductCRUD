<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"  crossorigin="anonymous">

    <style>
         .navbar-brand
      {
          border-radius:15px;
      }

      li a,button
      {
        font-weight:1000;
      }
    </style>
    <script>
        var options = document.getElementByTag("ul");
        var btns = options.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++)
         {
            btns[i].addEventListener("click", function() {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
            });
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" " crossorigin="anonymous"></script>
    <title>Product CRUD</title>
</head>

<body class=" bg-light  p-0 mb-0 mt-0">

    <h2 class="text-center text-light bg-dark  pt-2 pb-2 rounded">PRODUCT CRUD </h2>
    <div>
        @if (Route::has('login'))
                @auth
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                        <a class="navbar-brand bg-dark text-light pl-3 pr-3" id='btn' href="{{ route('profile.show') }}">{{Auth::user()->name}}</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto" >
                                <li class="nav-item  btn">
                                    <strong>
                                        <a class="nav-link" href="{{route('product.index')}}">Home</a>
                                    </strong>
                                </li>
                                <li class="nav-item  btn">
                                    <strong>
                                        <a class="nav-link "  href="{{route('product.create')}}" >New Product</a>
                                    </strong>
                                </li>

                                <li class="nav-item  btn">
                                    <strong>
                                        <a class="nav-link "   href="{{route('logout')}}" >logout</a>
                                    </strong>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    </div>
                @endauth
        @endif


    </div>

    <div class="container-fluid   p-3 pl-0">
         @yield('product')
    </div>




</body>
</html>
