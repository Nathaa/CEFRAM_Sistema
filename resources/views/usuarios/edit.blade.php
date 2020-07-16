@extends('admin.index2')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>Editar Usuario: {{ $user->name }}</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                 {!! Form::model($user, ['route' => ['usuarios.update', $user->id],
                 'method' =>'PUT'])  !!}
                 @include('usuarios.form')
                 {!! Form::close() !!}

                 
                </div>
            </div>

        </div>
    </div>
</div>
@endsection