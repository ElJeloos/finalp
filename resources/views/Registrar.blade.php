@extends('plantilla')

@section('contenido')

@if(session()->has('confirmacion'))
    {!!" <script > Swal.fire(
  'Registro Exitoso',
  'Gracias'
)  </script>"!!}
 @endif


 @if(session()->has('Eliminado'))
    {!!" <script > Swal.fire(
  'Registro Eliminado',
  'Gracias'
)  </script>"!!}
 @endif

 

<h1 class="display-5 text-center mb-5 ">Contactos</h1>

<div class=" mt-5 col-3">
  @if($errors->any())
  @foreach($errors->all() as $error)

  @endforeach
  @endif
  
  <div class="card">
    <div class="card-header">
      Registro Contacto
    </div>
    <div class="card-body">
      <form method="post"action ="{{route('contacto.store')}}">
      @csrf

        <label > Nombre: </label>
        <input type="text" class="form-control" name="txtnombre" value="{{old('txtnombre')}}">
        <p class="text-primary fst-italic">{{$errors->first('txtnombre')}}</p>
          

        <label > Numero: </label>
        <input type="text" class="form-control" name="txtnumero" value="{{old('txtnumero')}}">
        <p class="text-primary fst-italic">{{$errors->first('txtnumero')}}</p>

      
      <div class="card-footer">
        <button type="submit" class="btn btn-secondary  btn-lg">Guardar Contacto</button>
        </form>
        </div>
    </div>
  </div>       
</div>

<div class=" mt-5 col-3">
<table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre:</th>
            <th scope="col">Numero:</th>
            <th scope="col">Editar:</th>
            <th scope="col">Eliminar:</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ConsultaContactos as $contactos)
              
          
          <tr>
            <th scope="row">{{$contactos->idContacto}}</th>
            <td>{{$contactos->Nombre}}</td>
            <td>{{$contactos->Numero}}</td>
            <td><div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('contacto.edit',$contactos->idContacto)}}" class="underline text-gray-900 dark:text-white">Editar</a></div></td>
            <td><div class="ml-4 text-lg leading-7 font-semibold"><a href="{{route('contacto.show',$contactos->idContacto)}}" class="underline text-gray-900 dark:text-white">Eliminar</a></div></td>

          </tr>
          
          @endforeach

        </tbody>
      </table>
      </div>


@stop

        

        

     
