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
<div class="content-wrapper contentbg">
<div class="container">
<h3 class="text-center">Organizing committee of the<br />
Silver Jubilee SAFOG Conference in Association with the SLCOG Annual Conference
Hosted by SLCOG
</h3>
<div class="row p-4">
  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. U.D.P. Ratnasiri </h3>
      <h4>Chairman of the Conference </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Ferdousi Begum </h3>
      <h4>Co-Chairman 	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Pradeep De Silva  </h3>
      <h4>Vice Chairmen  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Alokendu Chattergee  </h3>
      <h4>Vice Chairmen  </h4>
    </div>
  </div>
</div>
<div  id="Board" class="row p-4">
  <h4>Board of Advisors - SAFOG         </h4>
</div>

<div class="row ">

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof Rashid Latiff Khan </h3>
      <h4>Board of Advisors - SAFOG  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. T. A. Chowdhury</h3>
      <h4>Board of Advisors - SAFOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof Sudha Sharma  </h3>
      <h4>Board of Advisors - SAFOG	  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Farroukh Zaman </h3>
      <h4>Board of Advisors - SAFOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. A. B. Bhuiyan </h3>
      <h4>Board of Advisors - SAFOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof H. R. Seneviratne</h3>
      <h4>Board of Advisors - SAFOG	 </h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Asma Rana </h3>
      <h4>Board of Advisors - SAFOG	 </h4>
    </div>
  </div>


</div>

<div class="row p-4">
  <h4>Board of Advisors - SLCOG         </h4>
</div>

<div class="row ">

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. W.I Amarasinghe </h3>
      <h4>Board of Advisors - SLCOG  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr.Rohan Perera</h3>
      <h4>Board of Advisors - SLCOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof Jayantha Jayawardena  </h3>
      <h4>Board of Advisors - SLCOG	  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Lakshman Senanayake </h3>
      <h4>Board of Advisors - SLCOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr.Sarath Amarasekara </h3>
      <h4>Board of Advisors - SLCOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Kapila Gunawardena</h3>
      <h4>Board of Advisors - SLCOG	 </h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof Deepal Weerasekara </h3>
      <h4>Board of Advisors - SLCOG	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof Sir Sabaratnam Arulkumaran </h3>
      <h4>Board of Advisors - International	 </h4>
    </div>
  </div>
</div>


<div class="row p-4">
  <h4>Organizing Committee</h4>
</div>

<div class="row ">

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Rohana Haththotuwa </h3>
      <h4>Chairman  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Kanishka Karunarathne 	</h3>
      <h4>Vice Chairman 	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Shyam Desai  </h3>
      <h4>Vice Chairman   </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Harsha Atapattu </h3>
      <h4>General Secretary	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Yusaf Latif  </h3>
      <h4>General Secretary	 </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3> Dr. Janakie Karunasinghe </h3>
      <h4>Asst. Secretaries 	 </h4>
    </div>
  </div>
  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Mangala Dissanayeke</h3>
      <h4>Asst. Secretaries </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. M Marlene Abeyewardene </h3>
      <h4>Treasurers  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Sanath Lanerolle </h3>
      <h4>Treasurers  </h4>
    </div>
  </div>
</div>

<div class="row p-4">
  <h4>Scientific Committee       </h4>
</div>

<div class="row ">

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Rukshan Fernandopulle  </h3>
      <h4>Chairman  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Dr. Hemantha Perera </h3>
      <h4>Co-Chairman  </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Rubina Sohail </h3>
      <h4>Co-Chairman   </h4>
    </div>
  </div>

  <div class="col-md-3">
    <div class="profile">
      <img src="img/prolfile-1.jpg" class="img-fluid" />
      <h3>Prof. Malik Goonewardene  </h3>
      <h4>Editor in Chief 	 </h4>
    </div>
  </div>
</div>




<div class="row ">
<h4 class="p-3">Subcommittees     </h4>
<div class="col-md-12">
<ul class="list-unstyled" >
<li><div class="divwdt">Inauguration 		</div>	- Dr. Mangala Dissanayeke</li>
<li><div class="divwdt">Registration 	</div>			- Dr. Gamini Perera & Dr. Ruwan Silva</li>
<li><div class="divwdt">Audio Visuals 	</div>			- Dr. Sanath Akmeemana & Dr. Mangala Dissanyeke</li>
<li><div class="divwdt">Publications 		</div>		- Prof. A. Kaluarachchi, Prof. Malik Goonewardene, Prof. Ramya Pathiraja</li>
<li><div class="divwdt">Souvenirs 		</div>		- Dr. Samanthi Premarathne & Dr. Darshana Abegunawardene</li>
<li><div class="divwdt">Accommodation & Transport</div>	
- Dr. Ananda Ranathunge, Dr. Prasad Rannoluwa, Dr. Chaminda Kandauda</li>
<li><div class="divwdt">Banquet </div>- Dr. Marlene Abeyewardene, Dr. Janakie Karunasinghe, Dr. Sanath Akmeemana</li>
<li><div class="divwdt">Website 			</div>	- Dr. Chaminda Mathota, Dr. Gayan De Silva.</li>
<li><div class="divwdt">Tours 			</div>		- Dr. Prasad Rannoluwa, Dr. Prabodana Ranaweera</li>
<li><div class="divwdt">Finance 		</div>		- Dr. Sanath Lanerolle, Dr. Ruwan Silva</li>
<li><div class="divwdt">Trade & Exhibition 	</div>		- Dr. Kanishka Krunarathne, Dr. Sanath Lanerolle, Dr. Mangala Dissanayeke</li>
<li><div class="divwdt">Publicity	 		</div>	- Dr. Dewolage, Dr. T. Kadotgajan, Dr. Nilan Rodrigo., Prof Narendra Malhotra </li>

</ul>


</div>
</div>


  
   
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
