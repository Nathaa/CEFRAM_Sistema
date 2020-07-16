@extends('admin.index2')




@section('title')
<h3>Nuevo Expediente</h3>
@endsection


@section('content')
@if(count($errors)>0)
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-2">
            <div class="panel panel-default">
        
                 {!! Form::open(['route' => 'estudiantes.store','files'=> true]) !!}
                 <enctype="multipart/form-data">
                 @include('estudiantes.form')

                 {!! Form::close() !!}
            
            </div>
        </div>
    </div>
 </div>
@endsection