{!! csrf_field() !!}
<div class="row">
<div class="col">
        <label>Imagen</label>
        <input type="file" name="imagen" class="form-control-file" class="text-center">
         </div>
         <div class="form-group">
          
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
                <a href="{{ route('estudiantes.index') }}" class="btn btn-sm btn-dark pull-right" > Regresar atras</a>
    </div>
</div>
<hr>
         <br>
<div class="alert alert-primary" role="alert">
        Datos Personales Alumnas
      </div>

<form>
        <div class="row">
           <div class="col">
             {{ Form::label('nombre', 'Nombre')}}
              {{ Form::text('nombre',null,['class' => 'form-control']) }}

             </div>     
               <div class="col">
                {{ Form::label('apellido', 'Apellidos')}}
                {{ Form::text('apellido',null,['class' => 'form-control']) }}
                </div>
                <div class="col">
                        {{ Form::label('fecha_nacimiento', 'Fecha Nacimiento')}}
                        {{ Form::date('fecha_nacimiento',null,['class' => 'form-control']) }}
              </div>
        </div>

        <div class="row">
                   <div class="col">
                        {{ Form::label('edad', 'Edad')}}
                        {{ Form::text('edad',null,['class' => 'form-control']) }}
                  </div>     
                    <div class="col">
                        {{ Form::label('direccion', 'Direccion')}}
                        {{ Form::text('direccion',null,['class' => 'form-control']) }}
                   </div>
                     
             
        </div>
     <hr>
     <div class="alert alert-primary" role="alert">
        Datos Personales del Responsable
      </div>
        <div class="row">
                <div class="col">
                        {{ Form::label('encargado', 'Encargado')}}
                        {{ Form::text('encargado',null,['class' => 'form-control']) }}
                
               </div>     
                 <div class="col">
                        {{ Form::label('parentesco', 'Parentesco')}}
                        {{ Form::text('parentesco',null,['class' => 'form-control']) }}
                </div>
                <div class="col">
                        {{ Form::label('telefono_emergencia', 'Telefono de encargado')}}
                        {{ Form::text('telefono_emergencia',null,['class' => 'form-control']) }}
                </div>
          
     </div>
     <hr>
     <div class="alert alert-primary" role="alert">
        Enfermedades
      </div>
    
     <div class="row">
        <div class="col">
                {{ Form::label('padecimientos', 'Padecimientos')}}
        {{ Form::text('padecimientos',null,['class' => 'form-control']) }}
        
       </div>     
         <div class="col">
                {{ Form::label('parentesco', 'Descripcion Padecimiento')}}
                {{ Form::text('parentesco',null,['class' => 'form-control']) }}
        </div>
        <div class="col">
                {{ Form::label('alergia_medicamento', 'Alergias del algun medicamento')}}
                {{ Form::text('alergia_medicamento',null,['class' => 'form-control']) }}
        </div>
  
</div>

<hr>
     <div class="alert alert-primary" role="alert">
        Datos Personales de Padres
      </div>
    
<div class="row">
        <div class="col">
                {{ Form::label('nombre_padre', 'Nombre padre')}}
        {{ Form::text('nombre_padre',null,['class' => 'form-control']) }}
        
       </div>     
         <div class="col">
                {{ Form::label('profesion_padre', 'Profesion padre')}}
                {{ Form::text('profesion_padre',null,['class' => 'form-control']) }}
        </div>
        <div class="col">
                {{ Form::label('telefono_padre', 'Telefono padre')}}
                {{ Form::text('telefono_padre',null,['class' => 'form-control']) }}
        </div>
</div>
<div class="row">
        <div class="col">
                {{ Form::label('nombre_madre', 'Nombre madre')}}
                {{ Form::text('nombre_madre',null,['class' => 'form-control']) }}
        </div>
            
         <div class="col">
                {{ Form::label('profesion_madre', 'Profesion Madre')}}
                {{ Form::text('profesion_madre',null,['class' => 'form-control']) }}
        </div>
        <div class="col">
                {{ Form::label('telefono_madre', 'Telefono madre')}}
                {{ Form::text('telefono_madre',null,['class' => 'form-control']) }}
        </div>
  
</div>


 
  

<div class="form-group">
        {{ Form::label('fecha_creacion', 'Fecha creacion')}}
        {{ Form::date('fecha_creacion',null,['class' => 'form-control']) }}
</div>


</form>