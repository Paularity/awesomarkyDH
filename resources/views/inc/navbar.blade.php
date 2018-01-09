<nav class="navbar navbar-default ">
    <div class="container">


        <div class="navbar-header">
            <!-- make navbar responsive -->
              <a class = "navbar-brand" href="{{ URL::to('/') }}"><img class = "logo"style="width:15%;position:relative;"src="images/logo.png" alt=""></a>
                </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        <div class="navbar-collapse collapse" id="navbar" >
            <ul class="nav navbar-nav" style="float:right">
                <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="{{ URL::to('/') }}"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a class="{{ Request::is('departments') ? 'active' : '' }}" href="{{ URL::to('departments') }}"><span class="	fa fa-hospital-o"></span> Departments</a></li>
                <li><a class="{{ Request::is('doctors') ? 'active' : '' }}" href="{{ URL::to('doctors') }}"><span class="fa fa-user-md"></span> Doctors</a></li>
                <li><a class="{{ Request::is('about-us') ? 'active' : '' }}" href="{{ URL::to('about-us') }}"></i> About Us</a></li>
            </ul>

        </div>
    </div>
</nav>
<script>
$('#navbar').click('li', function() {
        $('#navbar').collapse('hide');
    });
$("#content a[href^='http://']").attr("target","_blank");
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
