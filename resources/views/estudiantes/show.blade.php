@extends('admin.index2')

@section('crear')
<div class="col-sm-6">
  <ol class="breadcrumb float-sm-right">
    <li class="breadcrumb-item active"><a href="{{ route('estudiantes.edit', $estudiante->id)}}">Editar Expediente</a></li>
    <li class="breadcrumb-item active"><a href="{{ route('estudiantes.index', $estudiante->id)}}">Regresar atras</a></li>
  </ol>
</div><!-- /.col -->
@endsection
@section('title')
<h3>Informacion del Expediente </h3>
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
                <div class="row">
                    <div class="col">
                            <img src="{{ asset('imagenes/'.$estudiante->imagen) }}" alt="{{ $estudiante->imagen }}" height="175px" width="150px">
                            <br>
                            <br></div>
                    

                    <table class="table">
                           <thead class="thead-dark">
                            <tr>
                            <th>Datos Personales Alumnas</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                        
                           </thead>
                           
                        <tbody>
                        
                                <th scope="row"></th>
                                <p><strong>Fecha de Creacion: </strong> {{ $estudiante->fecha_creacion }}</p>
                              </tr>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Nombre: </strong> {{ $estudiante->nombre }}</p></td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                                <td><p><strong>Apellido: </strong> {{ $estudiante->apellido }}</p></td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                    <td><p><strong>Fecha Nacimiento: </strong> {{ $estudiante->fecha_nacimiento }}</p></td>
                          </tr>
                                        <tr>         
                                    <th scope="row"></th>
                                        <td><p><strong>Edad: </strong> {{ $estudiante->edad }}</p></td>
                          </tr>

                        </tbody>
                    </table>
                    <table class="table">
                        
                          <thead class="thead-dark">
                            <tr>
                              <th>Datos Personales del Responsable</th>
                              <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                          </thead>
                          <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Encargado: </strong> {{ $estudiante->encargado }}</p></td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Parentesco: </strong> {{ $estudiante->parentesco }}</p></td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                <td><p><strong>Telefono Emergencia: </strong> {{ $estudiante->telefono_emergencia }}</p></td>
                          </tr>

                        </tbody>
                      </table>
                      <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th>Datos de Enfermedades</th>
                              <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                          </thead>
                        <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Padecimiento: </strong> {{ $estudiante->padecimientos }}</p></td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Descripcion Padecimiento: </strong> {{ $estudiante->descripcion_padecimiento }}</p></td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                <td><p><strong>Alergia Medicamente: </strong> {{ $estudiante->alergia_medicamento }}</p></td>
                          </tr>
                        </tbody>
                      </table>
                      <table class="table">
                          <thead class="thead-dark">
                            <tr>
                              <th>Datos Personales Padres</th>
                              <th scope="col"></th>
                            <th scope="col"></th>
                            </tr>
                          </thead>
                        <tbody>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Nombre padre: </strong> {{ $estudiante->nombre_padre }}</p><td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Profesion padre: </strong> {{ $estudiante->profesion_padre }}</p></td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                <td><p><strong>Telefono padre: </strong> {{ $estudiante->telefono_padre }}</p></td>
                          </tr>
                          <th scope="row"></th>
                          <td><p><strong>Nombre Madre: </strong> {{ $estudiante->nombre_madre }}</p></td>
                          </tr>
                          <tr>
                            <th scope="row"></th>
                            <td><p><strong>Profesion Madre: </strong> {{ $estudiante->profesion_madre }}</p><td>
                          </tr>   
                          <tr> 
                                <th scope="row"></th>
                                <td><p><strong>Telefono Madre: </strong> {{ $estudiante->telefono_madre }}</p></td>
                          </tr>
                        </tbody>
                        </table>
                  
                    
                </div>
                
                
                   
                
            
                </div>
           
        </div>
    </div>
</div>
@endsection
    