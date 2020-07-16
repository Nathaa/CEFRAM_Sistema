@extends('admin.index2')

@section('crear')
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="{{ route('usuarios.edit', $user->id)}}">Editar Usuario</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('usuarios.index', $user->id)}}">Regresar atras</a></li>
  </ol>
</div><!-- /.col -->
@endsection
@section('title')
<h3>Informacion del Usuario </h3>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col">
                            <img src="{{ asset('imagenes/'.$user->imagen) }}" alt="{{ $user->imagen }}" height="175px" width="150px">
                        <br>
                    <br></div>

                    <table class="table">
                           <thead class="bg-primary">
                            <tr>
                            <th>Datos Personales Usuarios</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        
                           </thead>
                           
                        <tbody>
                        
            
                          <tr>
                            <th scope="row"></th>
                            <td> <p><strong>Nombre:</strong> {{$user->name}}</p></td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                                <td><p><strong>Apellido: </strong> {{ $user->apellidos }}</p></td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                    <td><p><strong>Email:</strong> {{$user->email}}</p></td>
                          </tr>
                                        <tr>         
                                    <th scope="row"></th>
                                        <td> <p><strong>Contraseña:</strong> {{$user->password}}</p></td>
                          </tr>

                        </tbody>
                    </table>

            </div>
        </div>
    </div>
</div>

@endsection