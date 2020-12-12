@extends('layout.layout')

@section('content')

<div>
   <center><h1>Salas registradas</h1></center> 
   <br>
</div>



<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col"><center>Nombre</center></th>
        <th scope="col"><center>Precio</center></th>
        <th scope="col"><center>Cantidad</center></th>
        
        </tr>
    </thead>
    @foreach ($consumables as $consumable)
    <tbody>
    <tr>
    <th scope="row"><center>{{$consumable->name}}</center></th>
        <th> <center>{{$consumable->price}}</center></th>
        <th> <center>{{$consumable->quantity}}</center></th>
    </tr>
    </tbody>
    @endforeach
</table>

@endsection