@extends('admin.index2')
@section('title')
<h3>Modificando Expediente</h3>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                
                        <form method="POST"
                        {!! Form::model($estudiante, ['route' => ['estudiantes.update', $estudiante->id],
                        'method' =>'PUT', 'files' => true])  !!}
                        <enctype="multipart/form-data">
                       
                        
                        <img width="150" src={{ Storage::url($estudiante->avatar) }}>
                        @include('estudiantes.form')
                       {!! Form::close() !!}
                </div>
            </div>
            <div class="card-footer">
               
        </div>
        </div>
    </div>
</div>
@endsection
