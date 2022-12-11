@extends('plantilla')

@section('contenido')

<div class="container mt-5 col-md-7">
    <h1 class="display-2 text-center mb-5 fw-bold">Editar Contacto</h1>
    
    
    @if($errors->any())
    @foreach($errors->all() as $error)

    @endforeach
    @endif
    
    
    
    <div class="card text-center mb-5">

        <div class="card-body">
            <!--Agregamos un form con dos inputs y un boton uno que sea el titulo y otro el recuerdo-->
            <form method="post" action="{{route('contacto.update',$consultarId->idContacto)}}">
            @csrf

            {!!method_field('PUT')!!}

            <div class="mb-3">
                <label class="form-label"> Nombre: </label>
                <input type="text" class="form-control" name="txtnombre" value="{{$consultarId->Nombre}}">
                <p class="text-primary fst-italic">{{$errors->first('txtnombre')}}</p>
            </div>

            <div class="mb-3">
                <label class="form-label"> Numero: </label>
                <input type="text" class="form-control" name="txtnumero" value="{{$consultarId->Numero}}">
                <p class="text-primary fst-italic">{{$errors->first('txtnumero')}}</p>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-secondary  btn-lg">Actualizar </button>
            <a  href="{{route('contacto.index')}}" class="btn btn-secondary">Cancelar y Regresar</a>

        </form>
        </div>
    </div>
</div>

@stop

        
   
