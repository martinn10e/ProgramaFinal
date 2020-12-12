@extends('layouts.app')
@section('title', 'Funciones')
@section('content')
    <br>
    <div class="row">

      

        <div class="col-sm-2"><a href="{{ route('funtions.create') }}">
                <button class="btn btn-primary">
                    Agregar
                </button>
            </a></div>

            <div class= "col-6">
            <h1>Funciones registradas</h1>
            </div>
            <div>
                        <form class="btn-group col-4" role="group" aria-label="Basic example">
                        <a class="btn btn-danger" href="{{ route('funtions.pdf')}}">PDF</a>
                        <a href="/funtionsXLS" class="btn btn-secondary">XLS</a>
                        <a href="/funtionsCSV" class="btn btn-success">CSV</a>
                        <a href="{{route('funtions.grafica')}}" class="btn btn-warning">Gaficar</a>
                       
                     </form>

            </div>
    </div>

    <br>
    @forelse ($funtions as $funtion)


        <div class="card col-sm bg-light" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Inicio de función:
                        <br>{{$funtion->start}}</h5>
                    <h5 class="card-text">Fin de función:
                        <br>{{$funtion->end}}</h5>
                    <h5 class="card-text">Turno: {{$funtion->type}}</h5>

                    <form action="{{ route('funtions.destroy', $funtion->id)}}" method="POST">
                        <a class="btn btn-primary" href="{{ route('funtions.show', $funtion->id) }}">Ver</a>
                        <a class="btn btn-secondary" href="{{ route('funtions.edit', $funtion->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>

                    </form>

                </div>
            </div>

        <br>
    @empty
        <div>
            <h3>No hay funciones registradas</h3>
        </div>

    @endforelse

    {{$funtions->links()}}
@endsection
