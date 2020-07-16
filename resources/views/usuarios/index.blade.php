@extends('admin.index2')

@section('crear')
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item"><a href="{{ route('usuarios.create') }}">Crear Usuario</a></li>
    
  </ol>
</div><!-- /.col -->
@endsection


@section('title')
<h3>Lista de usuarios</h3>
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
        <th scope="col">Nombre</th>
        <th scope="col">correo</th>
        <th scope="col">Opciones</th>
      
      </tr>
    </thead>
    <tbody>
       @foreach ($users as $user)
        <tr>
          <th scope="row">{{$user->id}}</th>
          <td><a href="{{ route('usuarios.show', $user->id)}}">{{$user->name}}</td></a>
          <td>{{$user->email}}</td>
          <td>
      
          {!! Form::open(['route' => ['usuarios.destroy', $user->id],
          'method' =>'DELETE','onsubmit' => 'return confirm("¿Desea eliminar el usuario")']) !!}
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