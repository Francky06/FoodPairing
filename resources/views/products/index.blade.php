@extends('layout.app')

@section('content')
<h1 class="text-center">Produits</h1>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-evenly"> 
        @foreach ( App\Models\Category::all() as $category )
          <a class="p-2 link-secondary" href="{{route('produits', ['categorie' => $category->slug])}}">{{$category->name}}</a>
        @endforeach
    </nav>
  </div>
  <br><br>
    <div style="text-align: center;">
        <div class="container">
            <div class="row justify-content-evenly">
                
                @foreach ( $products  as $product )
                        <div class="card" style="width: 250px">
                            <div class="card-body">
                                <strong><h4 class="card-title text-success">{{ $product->title }}</h4></strong>
                                <p class="card-text">{{ $product->subtitle }}</p>
                                <a href="{{ route('produits.show', $product->slug)}}" class="btn btn-success">Détails</a>
                            </div>
                            <img class="card-img-bottom"
                                src={{ $product->image}}
                                alt="Card image"
                                />
                        </div>
                   
                @endforeach  
            </div>
        </div>   
    </div>

    @endsection