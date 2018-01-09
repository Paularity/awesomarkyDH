<nav>
  <ul>
    <li><a href="#">Home </a></li>
    <li><a href="#">About </a></li>
    <li><a href="#">Services </a></li>
    <li><a href="#">Contact </a></li>
    <li><a href="#">Images </a></li>
    <li><a href="#">Test </a></li>
    <li>
      <a href="#">
        <i class="fa fa-bars"></i>
      </a>
    </li>
    <input type="search" />
  </ul>
</nav>

<script>
$(function() {
var ulLi = $('nav ul > li'),
  fa = $('nav ul > li:last-of-type a .fa');

$('nav ul').append('<ol></ol>');

$('nav').each(function() {
 for (var i=0; i <= ulLi.length - 3; i++) {
   $('nav ul > ol').append("<li>"+ i +"</li>");
   $('nav ul > ol > li').eq(i).html(ulLi.eq(i+1).html());
 }
});

$('nav ul > li:last-of-type').on('click', function() {
fa.toggleClass('fa-bars');
fa.toggleClass('fa-times');
$(this).parent().children('ol').slideToggle(500);
});
});

// Em An
// 10/10/2016
// https://codepen.io/anon/pen/qaoxyA
// https://codepen.io/Em-An/pen/LRdjwp
</script>

<!-- <ul id="nav">

    <li>Location: Boston Celtics, USA</li>
    <li>Email: awesomarky@gmail.com</li>
    <li style="float:right"> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    <li style="float:right"> <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li style="float:right"> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
    <li style="float:right"><i>Make an Appointment Now!</i> <a href="#"><strong>Book an Appointment</strong></a></li>
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
</ul> -->
