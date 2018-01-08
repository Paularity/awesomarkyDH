@extends('layouts.app')

@section('content')
<div class="row">
  <div class="col-md-6 text-content">
    <h2> <strong>Meet Our Professional Team</strong> </h2>
    <div style="border-bottom:2px solid #56B0D2;width:70px"></div>
    <h4>Ut auctor nulla ac tellus tempor pulvinar. Integer facilisis dapibus ante eu interdum. Cras ligula augue, rutrum at lacus et, viverra porta urna. Curabitur maximus erat mi. Integer ultricies pulvinar tempus. Cras scelerisque pulvinar quam in lacinia. Duis gravida eu enim in fermentum. Aenean tempor iaculis commodo. Integer nec sem sit amet felis vulputate rhoncus. Sed ante nunc, dictum vel libero in.</h4>
  </div>
  <div class="col-md-6">
    <img src="images/slide3.jpg" alt="Docs" style="height: 100%; width: 100%; background-size: cover">
  </div>
</div>

<div class="containerB">
  <div class="row text-content">
    <h2><strong>Medical Specialists</strong></h2>
    <div style="border-bottom:2px solid #56B0D2;width:70px"></div>
  </div>

  <div class="row">
    <div class="col-md-3 hover-doctor" style="padding:3%">
      <div class="row">
        <img src="images/doc1.jpg" alt="Docs" class="doc-pic">
      </div>
      <div class="row text-center">
        <p><small>CARDIAC SURGEON</small></p>
        <h4>Dr. Marco Rossi</h4>
        <p> <span><i class="fa fa-mobile" aria-hidden="true"></i></span> <small>+ 800 123 45 67</small></p>
        <p> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> <small>example@awesmarky.com</small></p>
      </div>
    </div>
    <div class="col-md-3 hover-doctor" style="padding:3%">
      <div class="row">
        <img src="images/doc2.png" alt="Docs" class="doc-pic">
      </div>
      <div class="row text-center">
        <p><small>PEDIATRECIAN</small></p>
        <h4>Dr. Jane Doe</h4>
        <p> <span><i class="fa fa-mobile" aria-hidden="true"></i></span> <small>+ 800 123 45 67</small></p>
        <p> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> <small>example@awesmarky.com</small></p>
      </div>
    </div>
    <div class="col-md-3 hover-doctor" style="padding:3%">
      <div class="row">
        <img src="images/doc3.jpg" alt="Docs" class="doc-pic">
      </div>
      <div class="row text-center">
        <p><small>DENTIST</small></p>
        <h4>Dr. Lee Sin</h4>
        <p> <span><i class="fa fa-mobile" aria-hidden="true"></i></span> <small>+ 800 123 45 67</small></p>
        <p> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> <small>example@awesmarky.com</small></p>
      </div>
    </div>
    <div class="col-md-3 hover-doctor" style="padding:3%">
      <div class="row">
        <img src="images/doc4.jpg" alt="Docs" class="doc-pic">
      </div>
      <div class="row text-center">
        <p><small>MEDICAL DOCTOR</small></p>
        <h4>Dr. Zed Black</h4>
        <p> <span><i class="fa fa-mobile" aria-hidden="true"></i></span> <small>+ 800 123 45 67</small></p>
        <p> <span><i class="fa fa-envelope" aria-hidden="true"></i></span> <small>example@awesmarky.com</small></p>
      </div>
    </div>
  </div>

</div>

@endsection
