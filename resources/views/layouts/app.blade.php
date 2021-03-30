<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>SMIS</title>
    @yield('head')
</head>
<body>
<div class="container">
<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="{{ route('welcome') }}">
        SMIS
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav5" aria-controls="navbarNav5" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav5">
        <ul class="navbar-nav mr-auto">
  
        </ul>

        <ul class="navbar-nav justify-content-end ml-auto">
        <li class="nav-item active">
            <a class="nav-link" href="{{ route('welcome') }}">Home <span class="sr-only">(current)</span></a>
          </li>
         @guest
         <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">Register</a>
          </li>
         @endguest
        </ul>

        @guest
        <a class="btn btn-primary ml-md-3" href="{{ route('login') }}">Login</a>
         @else
     
            <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
       
        <form method="POST" action="{{ route('logout') }}">
         @csrf
        <button type="submit" class="btn btn-danger ml-md-3" > Logout</button>
        </form>
        @endguest
      </div>
    </nav>
  </div>
</header>
<main>
 @yield('main-content')
</main>
<br> <br>

<footer class="fdb-block footer-small">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6">
        <ul class="nav justify-content-center justify-content-md-start">
          <li class="nav-item">
            <a class="nav-link active" href="https://www.froala.com">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.froala.com">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.froala.com">Terms</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.froala.com">About</a>
          </li>
        </ul>
      </div>

      <div class="col-12 col-md-6 mt-4 mt-md-0 text-center text-md-right">
        <a href="https://www.froala.com" class="mx-2"><i class="fab fa-twitter" aria-hidden="true"></i></a>
        <a href="https://www.froala.com" class="mx-2"><i class="fab fa-facebook" aria-hidden="true"></i></a>
        <a href="https://www.froala.com" class="mx-2"><i class="fab fa-instagram" aria-hidden="true"></i></a>
        <a href="https://www.froala.com" class="mx-2"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
        <a href="https://www.froala.com" class="mx-2"><i class="fab fa-google" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
</footer>
</div>
</body>
</html>