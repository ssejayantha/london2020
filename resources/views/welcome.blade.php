<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SLCOG Congress 2020</title>
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
                                    {{ Auth::user()->fname }} <span class="caret"></span>
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


<!-- Begin page content -->
<section role="main" class="flex-shrink-0">

    <div class="slider">


      <div class="homeTheme ">
        <h1 class="hometxt1">SILVER JUBILEE SAFOG CONFERENCE </h1>
<p><span>in ASSOCIATION WITH</span></p>
<h2 class="hometxt2">53<sup>rd</sup> ANNUAL CONGRESS OF THE SLCOG</h2>
<p class="slogantxt">
"Woman's Health - Regional and Global Partnership"</p>

<h4>15<sup>th</sup> - 18<sup>th</sup> October 2020<br />

Shangri-La Hotel, Colombo, Sri Lanka</h4>

<p class="p-2"><a href="{{ route('login') }}" class="btn btn-primary">Scientific Program</a>
  | <a href="{{ route('login') }}" class="btn btn-primary">Registration</a> </p>


<p style="color:#22a243d; font-weight:bold;"> Final Date for Abstract Submission  : 15<sup>th</sup> July 2020 |  Early Bird  Registration Before 13<sup>th</sup> July 2020 </p>
    </div>

    <div class="countdown">

      <div class="counter">
          <h2 class="text-center"><span style="color:#ccde53;"> Abstracts Submission End In</span> </h2>
      <div id="demo" style="text-transform:none !important;">
      </div>
      </div>
    </div>
    </div>


</section>
<section class="homewdt1">
  <div class="row no-gutters ">
    <div class="col-md-6 come ">

        <h2 class="text-bottom">Welcome to <br />the  Silver Jubillee Congress</h2>

    </div>
    <div class="col-md-6 ">
      <img src="{{ asset('img/ganagaramaya-1.jpg') }}" class="img-fluid" />
    </div>

  </div>
</section>

<section class="homewdt1">
  <div class="row no-gutters ">

    <div class="col-md-6 ">
      <img src="{{ asset('img/leopard-1.jpg') }}" class="img-fluid"  />
    </div>
    <div class="col-md-6 homeintro ">
<p>Join the world’s leading experts in mapping out the new world of increased longevity
Learn how increased longevity affects you and the people you take care of
Be equipped with the right tools to deal with the challenges of an ageing population
Can the chronic consequences of ageing be prevented?</p>




    </div>


  </div>
</section>


            <!-- section begin -->
            <section id="section-schedules" aria-label="section-services-tab" data-bgcolor="#f5f5f5">
                <div class="container msg">
                    <div class="row">
                        <div class="col-md-12 text-center">

<hr>

                        </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="msgpresidant">
                          <h4 class="text-left">Message from the College President</h4>
                          <p><img src="img/Dr.-U.D.P.-Ratnasiri.jpg" class="pull-left img-fluid img " width="120" />
                          <h5>Dear Freinds,</h5> 
                          <p>It is with great pleasure that I announce the Silver Jubilee of South Asian 
                          Federation of Obstetrics and Gynaecology (SAFOG) will be hosted by Sri Lanka
                           College of Obstetricians & Gynaecologist (SLCOG) from 15th to 17th October 
                           2020 at Shangrila hotel Colombo Sri Lanka. 
                           </p>
                          <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#msg1"> Read More </a></p>

                        </div>
                      </div>

                                           <!-- <div class="col-md-6">
                                              <div class="msgpresidant">
                                                <h3 class="text-left">Message From The World Gestosis Organization </h3>
                                                <p><img src="img/Sanjay-Gupte.jpg" class="pull-left img-responsive img">I bring greetings to you from World Organization Gestosis
                                                   and would like to compliment you for holding this important
                                                    international conference on Gestosis at Colombo with SLCOG.
                                                  </p>

                                                    <p><a href="#" class="btn btn-primary" data-toggle="modal" data-target="#msg2"> Read More </a></p>
                                              </div>
                                            </div>-->

                    



                    </div>
                </div>
            </section>


<!-- section begin -->
<section id="registration" class="no-top no-bottom text-light" data-stellar-background-ratio=".2">
    <div class="block1 ">
        <div class="container register">
          <h3 class="text-center p-4">Congress Registration</h3>
          <div class="row">
              <div class="col-md-7 mx-auto ">


<table class="table table-bordered ml-auto" style="color:#fff;">
  <thead class="black white-text">
    <tr>
      <th scope="col">Registration Fees</th>
      <th scope="col">30-06-2020 [Early Bird]</th>
      <th scope="col">15-10-2020 [Late]</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Foreign Delegate</td>
      <td>$ 200</td>
      <td>$ 250</td>
    </tr>

    <tr>
      <td>Foreign Delegate - Banquet </td>
      <td>$ 50</td>
      <td>$ 50</td>
    </tr>
    <tr class="rowsep" colspan="3">

    </tr>

    <tr>
      <td>Local - Consultants </td>
      <td>LKR 25,000<br /> </td>
      <td>LKR 25,000</td>
    </tr>

    <tr>
      <td>Local - Post Graduate Student </td>
      <td>LKR 10,000 </td>
      <td>LKR 10,000</td>
    </tr>

    <tr>
      <td>Local - Banquet </td>
      <td>LKR 9,000 </td>
      <td>LKR 9,000</td>
    </tr>

  </tbody>
</table>
<p class="text-center"><span>*</span> For Group Registration
 <span style="font-size:12px">[25 Members]</span> - 
<span>10% Discount Avaialable</span>
</p>

<p class="text-center">Please note: Your participation will only be confirmed upon receipt of the payment.<br />
For any queries please contact us at <br />
Tel: +94 11 30 91 745 / +94 11 26 89 036<br />
E-mail : <a href="mailto:slcogsessions2020@gmail.com">slcogsessions2020@gmail.com</a></p>
<!--
<p><a href="https://docs.google.com/forms/d/e/1FAIpQLSezKao8e9STm0I_LBDrSMxiv21N1pKUaBXRvwaSsofKfEEXGQ/viewform"
class="btn btn-primary btnreg">Registration Form</a></p>-->

              </div>





            </div>
        </div>
    </div>
</section>

<!-- section begin -->
<section id="section-events" class="events p-4">
    <div class="container ">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2 class="p-2">Social Events  </h2>

            </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li><h4>Inauguration 16<sup>th</sup> October 2020 <br />@  Shangri-La Hotel</h4></li>
              <li><img src="{{ asset('img/shagrilla-1.jpg') }}" class="img-fluid"></li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="list-unstyled">
              <li><h4>Banquet 17<sup>th</sup> October 2020<br /> @ Waters edges</h4> </li>
              <li><img src="{{ asset('img/banquet-2.jpg') }}" class="img-fluid"></li>
            </ul>
          </div>

        </div>
    </div>
</section>
<!-- section close -->

<!-- section begin -->
<section id="dates" class="text-light no-top no-bottom" data-stellar-background-ratio=".2">
    <div class="divDate">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto d-block ">
                  <div class="divTxt">
                    <h2 class="">Imporatant Dates </h2>
                    <ul class="list-unstyled dateim">
                      <li>Last Date For Abstarct – <span class="id-color">15<sup>th</sup> July 2020</span></li>
                      <li>Pre-Congress - 15<sup>th</sup> October 2020 </li>
                      <li>Innaguration and Prof. D A Ranasinghe Oration -<span class="id-color"> 16<sup>th</sup> October 2020</span></li>
                      <li>Prof. Rashid Latiff Khan Oration - 17<sup>th</sup> October 2020</li>
                      <li>P. Dissanayake Endowment lecture - 18<sup>th</sup> October 2020 </li>
                      <li>Young O & G Forum - 18<sup>th</sup> October 2020</li>
                      
                      <li>Banquet:<span class="id-color"> 17<sup> th</sup> October 2020</span></li>

                    </ul>
                  </div>
                </div>

<div class="col-md-6">
<h2>Location: <span class="id-color">Shangri-La </span> Hotel, Colombo</h2>
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.74032387264!2d79.8446079!3d6.9281946!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7dc13fa1f24d5c16!2sShangri-La%20Hotel!5e0!3m2!1sen!2slk!4v1581784933706!5m2!1sen!2slk" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>

            </div>
        </div>
    </div>
</section>
<!-- section close -->





<footer class="footer mt-auto py-2 footerDiv ">
  <div class="container">
    <div class="row">

   
    </div>
  </div>
</footer>

<!-- Footer begin -->
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

<script>
// Set the date we're counting down to
var countDownDate = new Date("July 15, 2020 08:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);



  //  document.getElementById("demo").innerHTML = "<div style='background:#000;'>"+days+ " Days | </div> " + hours + "  Hours | "
  //  + minutes + "   Minutes | " + seconds + "  Seconds ";

  // Output the result in an element with id="demo"
//  document.getElementById("demo").innerHTML = "<div style='background:#000;'>"+days+ " <br />Days</div>"+" <div style='background:#000;'>"+hours+ " </div>Hours ";
document.getElementById("demo").innerHTML ="<table class='table text-center mx-auto contertb'><tr><td>"+days+"<br />Days </td><td>:</td><td>"+hours+"<br />Hours</td><td>:</td> <td>"+minutes+"</br>Minutes</td><td>:</td> <td>"+seconds+"</br>Seconds</td></tr></table>";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "Congress Has  Expired";
    }
}, 1000);
</script>


  <!-- Modal -->
  <div class="modal fade" id="msg1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Message From the College President</h4>
        </div>
        <div class="modal-body">
        <img src="img/Dr.-U.D.P.-Ratnasiri.jpg" class="pull-left img-fluid img " width="120" />
          Dear Friends, </p>
          <p>It is with great pleasure that I announce the Silver Jubilee of South Asian Federation of Obstetrics and Gynaecology (SAFOG) will be hosted by Sri Lanka College of Obstetricians & Gynaecologist (SLCOG) from 15th to 17th October 2020 at Shangrila hotel Colombo Sri Lanka. It is the 53rd annual congress of the SLCOG and the theme of the conference is “Women’s Health- Regional and global partnership”. I am very proud to be the President in SLCOG this year and also be the treasurer of SAFOG  to have this great opportunity to organize this regional event. I wish to congratulate Dr. Rohana Hattotuwa who will be elected as the President for SAFOG in this silver jubilee congress. The organizing committee has already initiated the groundwork to make it a successful and thorough educational and enjoyable event with inviting the number of leading experts in the world and in the region to participate as a resource person to give away maximum output to the SAFOG region to uplift the women’s health in the region. The congress will be with the keynote address, two orations, several plenaries, symposia, free communications and pre-congress workshops. You all are invited to enjoy Sri Lankan hospitality with organized tours to tourist attractive destinations in and around the island. As the President of SriLanka College of Obstetricians and Gynaecologist, I cordially invite you to participate in this adorable event to support the SAFOG and the regional activities in promoting women’s health.  </p>
          <p>Dr. U.D.P. Ratnasiri <br />
President<br />
Sri Lanka College of Obstetricians and Gynaecologists<br />
</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  <!-- Modal1 -->





</body>
</html>
