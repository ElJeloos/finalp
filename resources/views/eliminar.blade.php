@extends('plantilla')

@section('contenido')

<h1 class="text-center">Eliminar </h1>


<div class="container col-md-6 mb-5">
    
    <div class="card">
        <form method="POST" action="{{route('contacto.destroy',$consultarId->idContacto)}}">
        @csrf

        {!!method_field('delete')!!}

        <div class="card-body">
            <h5 class="card-title">{{$consultarId->Nombre}}</h5>
            <p class="card-text">{{$consultarId->Numero}}</p>
        </div>

        <div class="card-footer text-muted">
            
            <button type="submit" class="btn btn-secondary ">Eliminar Recuerdo</button>

            <a  href="{{route('contacto.index')}}" class="btn btn-secondary">Cancelar y Regresar</a>
        </div>

        
    </div>
    </form>

</div>
@stop

        










  






