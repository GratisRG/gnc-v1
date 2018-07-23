@extends('layouts.dashbord_app')

@section('content')
<div class=" ">
	<div class="row justify-content-center">
		<div class="col-md-12 bg-pulpe text-white">
			Special title treatment

		</div>

	</div>

    <div class="row justify-content-center  ">
        
    	<div class="col-md-2 ">
        	<div class="card rounded-circle text-center bg-success text-white shadow p-3 mb-5 ">
			 <h3> <i class="fas fa-check-circle"></i></h3> You are at <h3>Level: </h3>
			</div>
    	</div>
    	<div class="col-md-2 ">
        	<div class="card text-center rounded-circle shadow p-3 mb-5 ">
			 <h3> <i class="fas fa-calculator"></i></h3> Calculate<h3>Bonus</h3>
			</div>
    	</div>
    	<div class="col-md-2">
        	<div class="card text-center text-white  rounded-circle bg-danger shadow p-3 mb-5 ">
			  <h3> <i class="fas fa-undo-alt"></i></h3> Check<h3>Wallet</h3>
			</div>
    	</div>
    </div>
    <div class="jumbotron bg-light shadow p-3 mb-5 rounded-0 ">
	  <div class="container">
	    <h1 class="display-4">What in coming level . </h1>
	    <p class="lead">
			Just expand your network by encouraging your friends to sponsor future members.</p>
	  </div>
	</div>

	<div class=" row justify-content-center">
		<div class="col-md-4 ">			
			<div class="card mb-3 shadow p-3 ">
			  <img class="card-img-top" src="{{URL::asset('/img/b1.jpeg')}}" alt="Car">
			  <div class="card-body">
			    <h5 class="card-title">Bonus Car</h5>
			    <p class="card-text"> Make your trips easier and safer</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4 ">			
			<div class="card mb-3 shadow p-3 ">
			  <img class="card-img-top" src="{{URL::asset('/img/b5.jpeg')}}" alt="Flight" style="height: 150px;">
			  <div class="card-body">
			    <h5 class="card-title">Bonus Flight </h5>
			    <p class="card-text"> Journey to discover other peoples and cultures</p>
			  </div>
			</div>
		</div>	
		<div class="col-md-4 ">			
			<div class="card mb-3 shadow p-3 ">
			  <img class="card-img-top" src="{{URL::asset('/img/b2.jpeg')}}" alt="food" style="height: 175px;" >
			  <div class="card-body">
			    <h5 class="card-title">Bonus Food</h5>
			    <p class="card-text"> Choose the best for your body</p>
			  </div>
			</div>
		</div>
		<div class="col-md-4 ">			
			<div class="card mb-3 shadow p-3 ">
			  <img class="card-img-top" src="{{URL::asset('/img/b3.jpg')}}" alt="TV" style="height: 160px;">
			  <div class="card-body">
			    <h5 class="card-title">Bonus smart TV</h5>
			    <p class="card-text">Share good times in front of a smart tv </p>
			  </div>
			</div>
		</div>
		<div class="col-md-4 ">			
			<div class="card mb-3 shadow p-3 ">
			  <img class="card-img-top" src="{{URL::asset('/img/b4.jpg')}}" alt="Car">
			  <div class="card-body">
			    <h5 class="card-title">Bonus Gasoline</h5>
			    <p class="card-text">Fill up your car with tranquility</p>
			  </div>
			</div>
		</div>
		

	</div>
</div>
@endsection
