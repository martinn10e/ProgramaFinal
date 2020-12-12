@extends('layout.layout')

@section('content')

<div>
   <center><h1>Funciones registradas</h1></center> 
   <br>
</div>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><center>Inicio</center></th>
        <th scope="col"><center>Final</center></th>
        <th scope="col"><center>Disponible</center></th>
        <th scope="col"><center>Tipo</center></th>
        
        </tr>
    </thead>
    @foreach ($funtions as $funtion)
    <tbody>
    <tr>
    <th scope="row"><center>{{$funtion->start}}</center></th>
        <th> <center>{{$funtion->end}}</center></th>
        <th> <center>{{$funtion->available}}</center></th>
        <th> <center>{{$funtion->type}}</center></th>
    </tr>
    </tbody>
    @endforeach
</table>

@endsection