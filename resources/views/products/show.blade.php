@extends('layout.app')

@section('content')
        <h1>show</h1>
        <div style="text-align: center;">
            <div class="container">
                <div class="row justify-content-evenly">
                    <h4 class="card-title">{{ $product->title }}</h4>
                    <p class="card-text">{!! $product->description !!}</p>
                    <div><a href="{{ route('produits')}}" class="btn btn-success">Retour</a></div>
                </div> 
            </div>
        </div>
        <div class="m-3 d-flex justify-content-center">
            @if ( $product->images)
                @foreach ( json_decode($product->images, true) as $image )
                    <img src={{ asset('storage/' . $image) }} alt="image descriptive" style="width:70%; height:100%" class="img-thumbnail" id="myImg"/>
                @endforeach
            @endif
        </div>

    <!-- Button trigger modal -->
        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary btn1" data-bs-toggle="modal" data-bs-target="#exampleModal">Agrandir</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div>
                @if ( $product->images)
                    @foreach ( json_decode($product->images, true) as $image )
                        <img src={{ asset('storage/' . $image) }} alt="image descriptive" style="width: 100%; height:300%" class="img-thumbnail" id="myImg"/>
                    @endforeach
                @endif
            </div>
            </div>
        </div>
        </div>


    @endsection
