<ul id="nav">

    <li>Location: Cleveland Cavalier, USA</li>
    <li>Email: awesomarky@gmail.com</li>
    <li style="float:right"> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li style="float:right"> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li style="float:right"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li style="float:right"><i>Make an Appointment Now!</i> <a href="#">Book an Appointment</a></li>
    <li style="float:right"></li>
    <li style="float:right"></li>



</ul>

<ul id="nav-top" class="hoverAnim">
  <li class="nav-top-left" style="width:45%;height:50%;margin-left:4%"><a href="{{ URL::to('/') }}"><img src="images/logo.png" alt=""></a></li>

  <li class="nav-top-right "><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
  <li class="nav-top-right"><a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ URL::to('about-us') }}">About Us</a></li>
  <li class="nav-top-right"><a class="{{ Request::is('doctors') ? 'active' : '' }}" href="{{ URL::to('doctors') }}">Doctors</a></li>
  <li class="nav-top-right"><a class="{{ Request::is('departments') ? 'active' : '' }}" href="{{ URL::to('departments') }}">Departments</a></li>
  <li class=" nav-top-right"><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}">Home</a></li>
</ul>
