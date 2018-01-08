@extends('layouts.app')

@section('content')
<div class="sliderContainer">
  <div class="sliderDiv" id="slide1"><img src="images/slide1.jpg" /></div>
  <div class="sliderDiv" id="slide2"><img src="images/slide2.jpg" /></div>
  <div class="sliderDiv" id="slide3"><img src="images/slide3.jpg" /></div>

</div>

<script>
var slide = 1;

    function slider(){
        $(".sliderDiv").fadeOut();
        $("#slide" + slide).fadeIn();
        slide = slide + 1;

        if(slide == 5){
            slide = 1;
        }
        setTimeout(function(){ slider(); }, 4000);
    }
    slider();
</script>

<div class="containerA text-content">
  <h1>Welcome</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="containerB text-content">
  <h1>Something here</h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div>

<div class="containerA text-content">
  <div class="row">
    <div class="col-md-4 text-center">
      <div class="icon-wrapper"><i class="custom-icon"><img class="iconImg" src="images/lungs.png" alt=""> <span class="fix-editor"></span></i></div>
      <h2>Lungs</h2>
      <p>Lorem ipsum dolor sit amet, cr adipiing elit. Praesent vestim molestie lacus. Aenonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cciis natoque penatibus et magnis. dis parturient.</p>
      <a href="#">Click here >></a>
    </div>
    <div class="col-md-4 text-center">
      <div class="icon-wrapper"><i class="custom-icon"><img class="iconImg" src="images/heart.png" alt=""><span class="fix-editor">&nbsp;</span></i></div>
      <h2>Heart</h2>
      <p>Lorem ipsum dolor sit amet, cr adipiing elit. Praesent vestim molestie lacus. Aenonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cciis natoque penatibus et magnis. dis parturient.</p>
      <a href="#">Click here >></a>
    </div>
    <div class="col-md-4 text-center">
      <div class="icon-wrapper"><i class="custom-icon"><img class="iconImg" src="images/brain.png" alt=""><span class="fix-editor">&nbsp;</span></i></div>
      <h2>Brain</h2>
      <p>Lorem ipsum dolor sit amet, cr adipiing elit. Praesent vestim molestie lacus. Aenonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cciis natoque penatibus et magnis. dis parturient.</p>
      <a href="#">Click here >></a>
    </div>
  </div>
</div>

<div class="containerB text-content">
  <h2>Testimonials</h2>
  <div class="row">

  </div>
</div>

@endsection
