@extends('layout.app')

@section('content')
<div class="bodi">
<h1 class="text-center mt-5 p-5" style="font-size: 2rem; color:white">FoodPairing ajoute de nouvelles associations de saveurs tous les jours!</h1>
<div class="text-center mt-5">
  @include('partials.search')
</div>
  <div class="nav-scroller py-1 mb-2 mt-5">
    <nav class="nav d-flex justify-content-evenly"> 
        @foreach ( App\Models\Category::all() as $category )
          <a class="p-2 link-secondary mt-3" style="border:1px solid darkorange; color:white" href="{{route('produits', ['categorie' => $category->slug])}}">{{$category->name}}</a>
        @endforeach
    </nav>
  </div>
  <br><br>
    <div style="text-align: center;">
        <div class="container">
            <div class="row justify-content-evenly">
                
                @foreach ( $products  as $product )
                        <div class="card mt-5" style="width: 300px;">
                            <div class="card-body">
                               <strong><h4 class="card-title text-success" style="font-weight: bold">{{ $product->title }}</h4></strong>
                              @foreach ( $product->categories as $category )
                                <div>{{ $category->name }}</div>
                              @endforeach
                                    <div class="m-3 d-flex justify-content-center">
                                  <img class="card-img-bottom imgprod" src={{ asset('storage/' . $product->image) }} alt="Card image"/>
                            </div>   
                                <p class="card-text">{{ $product->subtitle }}</p>
                                <a href="{{ route('produits.show', $product->slug)}}" class="btn btnprod">Détails</a>
                            </div>
                        </div>
                   
                @endforeach  
            </div>
            <div class="d-flex justify-content-center mt-5">{{ $products->appends(request()->input())->links() }}</div>
        </div>  
    </div>
    </div>
    @endsection