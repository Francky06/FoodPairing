<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ route('welcome') }}">FoodPairing</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link active" aria-current="page" href="{{ route('produits') }}">Produits</a>
          <a class="nav-link active" href="#">A propos</a>
          <a class="nav-link active" href="#">Contact</a>
          @include('partials.search')
        </div>
      </div>
    </div>
  </nav>
</header>