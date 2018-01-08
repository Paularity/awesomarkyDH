@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-6">
		<img src="images/department.jpg" alt="Docs" style="height: 100%; width: 100%; background-size: cover">
	</div>
	<div class="col-md-6 text-content">
		<h2> <strong>Departments</strong> </h2>
		<div style="border-bottom:2px solid #56B0D2;width:70px"></div>
		<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamcorper morbi tincidunt ornare massa eget egestas purus viverra.</h4>
	</div>
</div>

<div class="containerB text-content">

  <div class="row">
    <div class="col-md-4">
        <img src="images/departments/cardiology.jpg" alt="Docs" class="dept-pic">
    </div>
		<div class="col-md-4">
        <img src="images/departments/gynaecology.jpg" alt="Docs" class="dept-pic">
    </div>
		<div class="col-md-4">
        <img src="images/departments/Nephrology.jpg" alt="Docs" class="dept-pic">
    </div>
  </div>

	<div class="row">
		<div class="col-md-4">
				<img src="images/departments/neurology.jpg" alt="Docs" class="dept-pic">
		</div>
		<div class="col-md-4">
				<img src="images/departments/pulmonary.jpg" alt="Docs" class="dept-pic">
		</div>
		<div class="col-md-4">
				<img src="images/departments/traumotology.jpg" alt="Docs" class="dept-pic">
		</div>
	</div>

</div>

@endsection
