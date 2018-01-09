@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6">
    <img src="images/hospital.jpg" alt="Docs" style="height: 100%; width: 100%; background-size: cover">
  </div>
  <div class="col-md-6 text-content">
    <h2> <strong>Lorem ipsum dolor</strong> </h2>
    <h2>Morbi tincidunt ornare</h2>
    <div style="border-bottom:2px solid #56B0D2;width:70px"></div>
    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra.</h4>
  </div>
</div>

<div class="row pads containerB">
  <div class="col-md-10">
    <h1> <strong>Cras ligula augue?</strong> </h1>
    <div style="border-bottom:2px solid #56B0D2;width:70px"></div>
    <h4 style="line-height:1.50em;text-align: justify;">Integer ultricies pulvinar tempus. Cras scelerisque pulvinar quam in lacinia. Duis gravida eu enim in fermentum. Aenean tempor iaculis commodo. Integer nec sem sit amet felis vulputate rhoncus. Sed ante nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h4>
  <div class="row">
    <div class="col-xs-6 pads text-center">
      <img class="about-pic" src="images/au1.png" alt="">
      <h3>Amet</h3>
      <p>Pharetra et ultrices neque ornare aenean euismod elementum nisi. Augue eget arcu dictum varius duis.</p>

    </div>
    <div class="col-xs-6 pads text-center">
      <img class="about-pic" src="images/au2.png" alt="">
      <h3>Lorem</h3>
     <p>Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc.</p>
    </div>
  </div>
  <div class="row">
    <div class="col-xs-6 pads text-center">
      <img class="about-pic" src="images/au3.png" alt="">
      <h3>Ipsum</h3>
      <p>Posuere lorem ipsum dolor sit amet consectetur. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam.</p>
    </div>
    <div class="col-xs-6 pads text-center">
      <img class="about-pic" src="images/au4.png" alt="">
      <h3>Dolor</h3>
      <p> Eget nunc lobortis mattis aliquam faucibus purus in massa tempor.</p>
    </div>
  </div>
  </div>
  <div class="col-md-2 well" style="border-top: 5px solid #56B0D2">
  <h3 class="text-center">Departments</h3>
    <ul>
      <li>Neurology</li>
      <li>Traumatology</li>
      <li>Gynaecology</li>
      <li>Nephrology</li>
      <li>Cardiology</li>
      <li>Births</li>
      <li>Xray</li>
      <li>Dental</li>
      <li>Pulmonary</li>
      <li>Surgery</li>
    </ul>
  </div>
</div>

<div class="row pads">
  <div class="col-md-9">
    <img style="width:100%;height:100%" src="images/about.jpg" alt="">
  </div>
  <div class="col-md-3 tableShadow" >

    <div style="border-top: 5px solid #56B0D2">
      <h3 style="color:#0588ba ">Opening Hours</h3>
      <p> <strong>Monday-Friday</strong> 8:00 - 18:00</p>
      <hr>
      <p> <strong>Saturday</strong> 9:00 - 17:00</p>
      <hr>
      <p> <strong>Sunday</strong> 9:00 - 15:00</p>
    </div>

    <div style="border-top: 5px solid #56B0D2">
      <h3 style="color:#0588ba ">Emergency Cases</h3>
      <h2><i class="fa fa-volume-control-phone" aria-hidden="true"></i> <strong>123 456 78 90</strong> </h2>
      <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
    </div>


  </div>
</div>
@endsection
