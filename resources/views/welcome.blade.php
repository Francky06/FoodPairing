@extends('layout.app')


@section('content')



		  <div class="banner">
			<video autoplay muted loop src="{{ asset('videos/Paint.mp4')}}" type="video/mp4"></video>
			<h1>FoodPairing</h1>
			<div class="titre">
				
				<div class="text-center" style="font-size:5vw; margin-top:10rem; color:#fb5068">Le Tinder des Saveurs</div>
			
			</div>	 
			
			
		</div> 
 <div class="intro">
	<div class="intro-text">
		<h3 class="hide">
			<span class="text" style="color:#00fd33e8">Créez</span>
		</h3>
		<h3 class="hide">
			<span class="text" style="color:#f7ff00">L'arbre des </span>
		</h3>
		<h3 class="hide">
			<span class="text" style="color:#fb5068">Possibles</span>
		</h3>
	</div>
</div>
<div class="slider"></div> 



    <div class="hero">
		<div class="d-flex text-center">
			<div class="col-6">
				<p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, placeat.</p>
			</div>
			<div class="col-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?</div>
		</div>
	</div>

		<div class="cache">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		<div class="text-center">
		<img src="{{ asset('images/filleHero.jpg')}}" style="width: 30%";>
		</div>
		</div>
		<div class="test">
			<h2>TEST</h2>
		</div>

	<section class="about">
		<div class="about-title">
			<h2>About Me</h2>
		</div>
		<div class="about-pages">
			<div>
				<h2>Projet 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div>
				<h2>Projet 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div>
				<h2>Projet 1</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</section>

	<footer>
		    <!-- ROW IMAGE-->

      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-6 p-5">
	<img src="{{ asset('images/fillerose.jpg')}}" style="width: 100%; height:100%" >
        </div>
        <div class="col-sm-12 col-md-6 p-5">
	<img src="{{ asset('images/fillerose.jpg')}}" style="width: 100%; height:100%";>
        </div>
        <div class="col-sm-12 col-md-6 p-5">
	<img src="{{ asset('images/fillerose.jpg')}}" style="width: 100%; height:100%";>
        </div>
      </div>
	</footer>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

@endsection