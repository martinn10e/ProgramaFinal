@extends('layout.layout')

@section('content')

<div>
   <center><h1>Vista de salas</h1></center> 
   <br>
</div>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><center>Silla</center></th>
        <th scope="col"><center>Lugar</center></th>
        <th scope="col"><center>Capacidad</center></th>
       
        </tr>
    </thead>
    @foreach ($rooms as $room)
    <tbody>
    <tr>
   
        <th scope="row"><center>{{$room->chairs}}</center></th>
        <th> <center>{{$room->location}}</center></th>
        <th> <center>{{$room->capacity}}</center></th>
        
    </tr>
    </tbody>
    @endforeach
</table>

@endsection