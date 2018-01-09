<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <!-- make navbar responsive -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#homeid">Logo</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li><a href="#homeid"><span class="glyphicon glyphicon-home"></span> Home</a></li>
                <li><a href="#proj"><span class="glyphicon glyphicon-briefcase"></span> Projects</a></li>
                <li><a href="#info"><span class="glyphicon glyphicon-info-sign"></span> Info</a></li>
                <li><a href="#contact"><i class="fa fa-envelope-o"></i> Contact</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a class="btn" href="https://gr.linkedin.com/in/papadopoulospavlos" target=_blank ><i class="fa fa-linkedin fa-lg"></i></a> </li>
                <li><a class="btn" href="https://twitter.com/Paul_stdio" target=_blank ><i class="fa fa-twitter fa-lg"></i></a> </li>
                <li><a class="btn" href="mailto:ppapad_33@yahoo.gr"><i class="fa fa-envelope-o fa-lg"></i></a> </li>
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
