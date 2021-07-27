@extends('layout.app')

@section('content')
<h1>Show</h1>

    <div style="text-align: center;">
        <div class="container">
            <div class="row justify-content-evenly">
        
                        <div class="card" style="width: 250px">
                            <div class="card-body">
                                <h4 class="card-title">{{ $product->title }}</h4>
                                <p class="card-text">{{ $product->description }}</p>
                                <a href="{{ route('produits')}}" class="btn btn-success">Retour</a>
                            </div>
                            <img class="card-img-bottom"
                                src={{ $product->image}}
                                alt="Card image"
                                />
                        </div>
                   
              
            </div>
        </div>   
    </div>

    @endsection