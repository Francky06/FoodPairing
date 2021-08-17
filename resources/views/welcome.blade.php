@extends('layout.app')


@section('content')



		  <div class="banner">
			<video autoplay muted loop src="{{ asset('videos/Paint.mp4')}}" type="video/mp4"></video>

			<img src="{{ asset('images/fillerose.jpg')}}" class="img-fluid">

			<h1>FoodPairing</h1>
			<div class="titre">
				<div class="text-center" style="font-size:5vw; margin-top:10rem; color:#fb5068">Le Tinder des Saveurs</div>
			</div>	 
		</div> 

 {{-- <div class="intro">
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
<div class="slider"></div>  --}}



    <div class="hero">
		<div class="row text-center">
			<h2>Mais qu'est ce que c'est le Food-pairing ?</h2>
			<p>C’est l’art d’associer parfaitement deux aliments, a priori incompatibles,
				 mais affichant des composantes moléculaires similaires. La combinaison des ingrédients est établie sur la base des combinaisons
				  théoriques des composés odorants et sur leur constitution chimique. </p>
			<p>Le food pairing commence par l'analyse d'un ingrédient. A l’aide d’une chromatographie en phase gazeuse, on peut déterminer 
			avec facilité le parfum dominant d’un ingrédient. Ainsi, il est facile de comparer deux ingrédients différents et de voir s’ils peuvent se marier ensemble.
			Même si la méthodologie semble complexe, elle permet à de nombreux chefs étoilés de faire des recettes que l’on ne retrouve nul part ailleurs. </p>
			<p>Par exemple, le café comprend plus de 700 composés odorants, mais seuls quelques-uns sont importants pour déterminer l'arôme du café 
				car la plupart ne sont pas présents en concentrations suffisantes pour être perceptibles à la sensation humaine. 
				Reste que le fait que deux aliments aient des molécules aromatiques compatibles ne suffit pas. Il faut savoir doser, 
				équilibrer les saveurs, et maîtriser les cuissons.</p>
				<br>
				<h3>Des combinaisons inédites basées sur la science !</h3>
				<p>Donc L'idée: analyser les similitudes entre chaque aliment d'un point de vue moléculaire.
					S'ils ont des molécules communes c'est qu'ils s'associent bien d'un point de vue gustatif. 
				Une approche « qui combine neurogastronomie, c’est-à-dire la façon dont le cerveau perçoit les saveurs,
				 et l’analyse des profils aromatiques dérivés des composants chimiques présents dans les aliments ». </p>
				 <br>
				 <h3>Quand l’intelligence artificiel sublime le mélange des saveurs</h3>
				 <p>On peut s’attendre à ce que l’intelligence artificielle booste la créativité de toutes les cuisines, haut de gamme et fait maison, 
					tout en optimisant la prise en compte de certains paramètres : 
					· Notre santé 
					· Nos engagements éthiques, sociaux, environnementaux 
					· Notre budget. 
					A l’heure où l’on est de plus en plus soucieux de la qualité de nos menus, et où l’alimentation devient pour beaucoup un levier
					pour répondre aux enjeux écologiques, l’intérêt de l’IA pour nous aider dans cette tâche est grandissant. 
					À l'instar de la musique assistée par intelligence artificielle, il existe une combinaison infinie d'ingrédients, 
					et l'IA doit tenir compte aussi de contraintes comme le climat, la saison et les préférences en matière de santé et d'alimentation.
					En fait, ce projet est à deux étages. Il y aura donc une IA pour créer les recettes, mais aussi un robot considéré comme un « assistant pour chef ».</p>
					<br>
					<h4>Association de saveurs, Tinder du poireau vinaigrette, Association d’ingrédients,Fourme d’ambert et ananas? 
					Savoir equilibrer les saveurs, kiwi huitre, poulet maroilles, la science rejoint la gastronomie 
					Canard à l’orange (1945), saumon à l’oseille (1962) 
					</h4>
					<br>
					<h4>Du gingembre sur vos aubergines!
					Le goût poivré de la racine de gingembre fraîche est idéal pour atténuer l’amertume prononcée de l’aubergine. Le gingembre s’incorpore aisément dans vos caviars, sautés et currys d’aubergine. 
					</h4>

			<div class="col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
				<div class="jumb">
					<div class="card">
					<img src="{{ asset('images/fourchette.jpg')}}"  class="card-img-top">	
					
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, placeat....?
					Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?</p>
					
					
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="jumb">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?
				 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?</p>
				<img src="{{ asset('images/melanges.jpg')}}"  class="img-fluid">
				</div>
			</div>
			<div class="col-sm-12 col-md-4 col-lg-4">
				<div class="jumb">
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?
				 Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, dolores?</p>
				<img src="{{ asset('images/piment.jpg')}}"  class="img-fluid">
				</div>
			</div>

			
		</div>
	</div>

		<div class="cache">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		<div class="text-center">
		<img src="{{ asset('images/filleHero.jpg')}}" class="img-fluid">
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