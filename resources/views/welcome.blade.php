@extends('layout.app')


@section('content')



		  <div class="banner">
			<video autoplay muted loop src="{{ asset('videos/Paint.mp4')}}" type="video/mp4"></video>

			<img src="{{ asset('images/fillerose.jpg')}}" class="img-fluid">

			<h1>FoodPairing</h1>
			<div class="titre">
				<div class="text-center" style="font-size:6vw; margin-top:10rem; color:#fb5068">Le Tinder des Saveurs</div>
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
		<div class="row text-center">
			<h2>LE FOOD PAIRING C'EST QUOI AU JUSTE?</h2>
			<div class="col-md-12 p-5">
			<p>Le Food Pairing est l’art d’associer parfaitement deux aliments, a priori incompatibles,
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
			</div>
			<div class="col-md-12 ctm">
				<div class="cta">
					<h2>Découvrez le Food Pairing en recherchant un <a href="{{ route('produits') }}">PRODUIT</a></h2>
					<div class="ia">
						<h3>Des combinaisons inédites basées sur la science !</h3>
						<p>Donc l'idée: analyser les similitudes entre chaque aliment d'un point de vue moléculaire.
							S'ils ont des molécules communes c'est qu'ils s'associent bien d'un point de vue gustatif. 
						Une approche « qui combine neurogastronomie, c’est-à-dire la façon dont le cerveau perçoit les saveurs,
						et l’analyse des profils aromatiques dérivés des composants chimiques présents dans les aliments ». </p>
						<br>
					</div>
				</div>
			</div>
			<div class="col-md-12 iactm">
					<h3>Quand l’intelligence artificiel sublime le mélange des saveurs</h3>
					<p>On peut s’attendre à ce que l’intelligence artificielle booste la créativité de toutes les cuisines, haut de gamme et fait maison, 
						tout en optimisant la prise en compte de certains paramètres :</p>
						<ul style="list-style: none">
							<li>Notre santé</li>
							<li>Nos engagements éthiques, sociaux, environnementaux</li>
							<li>Notre budget.</li>
						</ul>
						<p>
						A l’heure où l’on est de plus en plus soucieux de la qualité de nos menus, et où l’alimentation devient pour beaucoup un levier
						pour répondre aux enjeux écologiques, l’intérêt de l’IA pour nous aider dans cette tâche est grandissant. <br>
						À l'instar de la musique assistée par intelligence artificielle, il existe une combinaison infinie d'ingrédients, 
						et l'IA doit tenir compte aussi de contraintes comme le climat, la saison et les préférences en matière de santé et d'alimentation.
						En fait, ce projet est à deux étages. Il y aura donc une IA pour créer les recettes, mais aussi un robot considéré comme un « assistant pour chef ».</p>
						<br>
			</div>				
		</div>
	</div>

		<div class="col-md-12 d-flex justify-content-center">
			<div class="cache">
				<img src="{{ asset('images/colorsmall.png')}}"><br>
			</div>
		</div>
		<div class="test">		
      <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12 text-center">
	<iframe frameborder="0" width="400" height="200" src="https://www.dailymotion.com/embed/video/x7zfoet" allowfullscreen allow="autoplay"></iframe>
        </div>
		<button class="btn mt-5 p-1" style="background-color:white; width:50%; font-weight:bold"><a href="#">Découvrir le café</a></button>
		
      </div>
		</div>

	<section class="about">
		<div class="about-title">
			<h2>Food <br>
				Pairing</h2>
		</div>
		<div class="about-pages">
			<div class="text-center">
				<h2>Food Pairing la RoadMap 2022-2023</h2>
				<p>Développer un plus grand nombre de produits! N'oubliez pas que vous pouvez voter pour vos aliments préferés sur notre instragram.</p>
				<p>Rendre la recherche plus dynamique</p>
				<p>Créer un forum</p>
				<p>Fonder une communauté de passionés</p>
			</div>
			<div class="text-center">
				<h2>Food Pairing, une rencontre plus fun</h2>
				<p>Faire des vidéos recettes insolites sur Youtube</p>
				<p>Faire des recettes flash sur TikTok</p>
				<p>Développer un réseau de chefs professionnels</p>
			</div>
			<div class="text-center">
				<h2>Food Pairing la RoadMap 2024</h2>
				<p>Ecrire un livre de recettes</p>
				<p>Sponsoring sur Top Chef</p>
				<p>Développer une IA sur les saveurs de demain</p>
			</div>
		</div>
	</section>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>

@endsection