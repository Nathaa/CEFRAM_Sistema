@extends('admin.index2')

@section('crear')
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('estudiantes.create') }}">Crear Expediente</a></li>
    
  </ol>
</div><!-- /.col -->
@endsection


@section('title')
<h3>Lista de Expedientes</h3>
@endsection


@section('content')
<div class="container">

  <div class="panel-heading"> 
    <h6>
   @if($search)
  <div class="alert alert-info" role="alert">
    Los resultados de tu busqueda {{ $search }} son
  </div>
  @endif
 </h6>
      <table class="table table-hover">
         <tr>
           <th scope="col">id</th>
           <th scope="col">nombre</th>
           <th scope="col">apellidos</th>
           <th scope="col">Opciones<th>
         
         </tr>
       </thead>
       <tbody>
          @foreach ($estudiantes as $estudiante)
           <tr>
             <th scope="row">{{$estudiante->id}}</th>
             <td><a href="{{ route('estudiantes.show', $estudiante->id)}}">{{$estudiante->nombre}}</td></a>
             <td>{{$estudiante->apellido}}</td>
             <td>
              {!! Form::open(['route' => ['estudiantes.destroy', $estudiante->id],
              'method' =>'DELETE','onsubmit' => 'return confirm("¿Desea eliminar el expediente?")']) !!}
              <button class="btn btn-sm btn-danger">
                  Eliminar
              </button>
            {!! Form::close() !!}
              </td>
           </tr>
           
         @endforeach
         
       </tbody>
      </table>
       
    </div>
</div>
@endsection
