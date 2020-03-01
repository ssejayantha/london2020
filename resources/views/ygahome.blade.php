<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SLCOG Congress 2020 | Committee</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/jquery.countdown.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    </head>

    <body>
    <header>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark  bg-dark">
<a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo-2.png') }}" class="img-fluid" /></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarCollapse">
<ul class="navbar-nav ml-auto">
<li class="nav-item "><a class="nav-link" href="{{ url('/') }}">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/committee') }}">Committee</a></li>
    
    <li class="nav-item"><a class="nav-link" href="{{ url('/abstract2020') }}">Abstract Submission</a></li>


    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ url('/program') }}"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Program
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
   
     <li class="nav-item"><a class="nav-link" href="{{ url('/yga2020') }}">YGA</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/tours') }}">Tours</a></li>
    <li class="nav-item"><a class="nav-link" href="{{ url('/program') }}">Accomodation</a></li>
     <!-- Authentication Links -->
     @guest
                            <li class="nav-item">
                            
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                                <a href="{{ route('password.change') }}" class="dropdown-item">Change Password</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
  </ul>

</div>
</nav>
</header>
<div class="content-wrapper contentbg ygahome">
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <div class="" >
            <h2>Sir Sabaratnam Arulkumaran - Young Gynaecologist Award     <h2>

            </h2>
            
            <p>Welcome to the online portal of submission of abstracts for the “SIR SABARATHNAM ARULKUMARAN YOUNG GYNAECOLOGIST AWARD 2020”. All Submissions must be made through this portal.

Please follow the guidelines stipulated by the Committee when submitting abstracts.

Downloadable version of the guideline.</p>

<p>Sir Sabaratnam Arulkumaran - Young Gynaecologist Awards were established in 2017 to coincide 
    with the golden jubilee celebrations of the Sri Lanka College of Obstetricians and Gynaecologists 
    with a generous endowment from Sir Sabaratnam Arulkumaran an honorary fellow of the College. 
    <span style="color:#a0218c"><b><i>This is a once in a lifetime award presented to the most 
        promising talented young Gynaecologist of the  SLCOG membmembership.<i> </b></span></p>
            
       
                
                <ul class=" list-unstyled float-right guidline">
  <li class=""> <a href="http://safogslcog2020.com/storage/files/Sir Sabaratnam Arulkumaran - Young Gynaecologist Awards 2020 Guide Line.pdf" target="_blanck">
    YGA Guidelines </a></li>

   

  </ul>
  <hr />
  
  <h2><a href="{{ route('login') }}" class="btn btn-primary">Register  YGA </a></h2>
            </div>
            </div>
        </div>


</div><!-- Container -->
</div>


<!-- Footer begin -->
<footer class="footer mt-auto py-2  ">
  <div class="container">
    <div class="row">

    </div>
  </div>
</footer>
<!-- section begin -->
<section class="footer-top">
    <div class="container  ">
        <div class="row text-center addressDiv">
            <div class="col-md-4">
                <div class="wm-1"></div>
                <i class="fa fa-mobile-phone" style="font-size:48px;color:#800080"></i>
                <h5>Call Us</h5>
                <h4>+94 11 30 91 745 <br /> +94 11 26 89 036 </h4>
            </div>

            <div class="col-md-4">
                <div class="wm-1"></div>
                <i class="fa fa-home" style="font-size:48px;color:#800080"></i>
                <h5>Address</h5>
                <h4>No.112, Model Farm Road,<br />
                   Colombo 08, Sri Lanka</h4>
            </div>

            <div class="col-md-4">

                <div class="wm-1"></div>
                <i class="fa fa-envelope" style="font-size:48px;color:#800080"></i>
                <h5>Email Us</h5>
                <h4><a href="mailto:slcogsessions2020@gmail.com">slcogsessions2020@gmail.com</a></h4>
            </div>
        </div>
    </div>
</section>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
