{!! csrf_field() !!}
<div class="row">
<div class="col">
        <label>Imagen</label>
        <input type="file" name="imagen" class="form-control-file" class="text-center">
         </div>
         <div class="form-group">
          
                {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
                <a href="{{ route('usuarios.index') }}" class="btn btn-sm btn-dark pull-right" > Regresar atras</a>
    </div>
</div>
<hr>
<br>
<div class="alert alert-primary" role="alert">
        Datos del Usuario
      </div>


<form>

  <div class="row">
    <div class="col">
      {{ Form::label('name', 'Nombre')}}
      {{ Form::text('name',null,['class' => 'form-control']) }}
      </div>     
        <div class="col">
         {{ Form::label('apellidos', 'Apellidos')}}
         {{ Form::text('apellidos',null,['class' => 'form-control']) }}
         </div>
      
 </div>
 <div class="row">
  <div class="col">
    {{ Form::label('email', 'E mail')}}
    {{ Form::text('email',null,['class' => 'form-control']) }}
    </div>     
      <div class="col">
        {{ Form::label('password', 'Contraseña')}}
        {{ Form::text('password',null,['class' => 'form-control']) }}
       </div>

</div>

  
 

</div>