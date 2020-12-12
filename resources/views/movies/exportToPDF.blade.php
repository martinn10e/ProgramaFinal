@extends('layout.layout')

@section('content')

<div>
   <center><h1>Vista de peliculas</h1></center> 
   <br>
</div>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><center>Pelicula</center></th>
        <th scope="col"><center>Director</center></th>
        <th scope="col"><center>Duración</center></th>
        <th scope="col"><center>Sinopsis</center></th>
        </tr>
    </thead>
    @foreach ($movies as $movie)
    <tbody>
    <tr>

   
        <th scope="row"> <center>{{ $movie->name }}</center></th>
        <th>{{ $movie->director }}</th>
        <th><center>{{ $movie->duration }}</center></th>
        <th>{{ $movie->synopsis }}</th>
    </tr>
    </tbody>
    @endforeach
</table>

@endsection