@extends('plantilla')

@section('contenido')

    <h1>Editar Contacto</h1>

    <div>
        <form method="POST" action="{{route('contacto.update',$consultarId->idContacto)}}">
            @csrf
            @method('PUT')
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
        
         <button type="submit" class="btn-guardar">Guardar</button>
    </form>
    </div>

@stop

        

 
   
