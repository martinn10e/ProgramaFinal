@extends('layout.layout')

@section('content')

<div>
   <center><h1>Entradas registradas</h1></center> 
   <br>
</div>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><center>Precio</center></th>
        <th scope="col"><center>Hora de entrada</center></th>
        
        </tr>
    </thead>
    @foreach ($entrances as $entrance)
    <tbody>
    <tr>
    <th> <center>{{$entrance->price}}</center></th>
        <th> <center>{{$entrance->hourEntrance}}</center></th>
       
    </tr>
    </tbody>
    @endforeach
</table>

@endsection