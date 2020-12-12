@extends('layouts.app')
@section('title', 'Salas')
@section('content')

    <div class="row">
       

        <div class="col-sm-2"><br>
            <a href="{{ route('rooms.create') }}">
                <button class="btn btn-primary">Agregar</button>
            </a>
        </div>
        
        <div class= "col-6">
        <br>
            <h1>Salas registradas</h1>
            </div>
            <div>
                  <br>  
                      <form class="btn-group col-4" role="group" aria-label="Basic example">
                        
                        <a class="btn btn-danger" href="{{ route('rooms.pdf')}}">PDF</a>
                        <a href="/roomsXLS" class="btn btn-secondary">XLS</a>
                        <a href="/roomsCsv" class="btn btn-success">CSV</a>
                        <a href="{{route('rooms.grafica')}}" class="btn btn-warning">Gaficar</a>
                       
                     </form>

            </div>
            
        
    </div>

<br>

@forelse ($rooms as $room)
    <div class="card col-sm bg-light" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">


    <div class="card-body">
        <h4 class="card-title">Silla: {{$room->chairs}}</h4>
        <h4 class="card-text">Lugar: {{$room->location}}</h4>
        <h4 class="card-text">Capacidad: {{$room->capacity}}</h4>

      <form action="{{ route('rooms.destroy', $room->id)}}" method="POST">
        <a class="btn btn-primary" href="{{ route('rooms.show', $room->id) }}">Ver</a>
       <a class="btn btn-secondary" href="{{ route('rooms.edit', $room->id) }}">Editar</a>
       @csrf
       @method('DELETE')
       <button type="submit" class="btn btn-danger">Eliminar</button>

       </form>


    </div>
  </div>

<br>

@empty
    <div>
      <h3>NO HAY SALAS REGISTRADAS</h3>
    </div>
@endforelse

{{$rooms->links()}}

@endsection
