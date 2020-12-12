@extends('layouts.app')

@section('content')
<br>
<br>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" 
crossorigin="anonymous">

<div class="container">

<!-- Inicia carrucel -->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('slides/1.png') }}" class="d-block w-100" alt="...">
        </div>
      <div class="carousel-item">
        <img src="{{ asset('slides/2.png') }}" class="d-block w-100" alt="...">
    </div>
      <div class="carousel-item">
        <img src="{{ asset('slides/3.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('slides/4.png')}}" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
        <img src="{{ asset('slides/5.png')}}" class="d-block w-100" alt="...">
    </div>
    
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<!-- Finaliza carrucel -->
<br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="text-center">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   Bienvenido
                </div>
                </h1>
        </div>
    </div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" 
crossorigin="anonymous"></script>

@endsection
