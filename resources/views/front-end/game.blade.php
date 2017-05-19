@extends('front-end.main')

@section('content')


<div>
    {{ Form::open(array('url'=>'/game','files'=>true)) }}

    {{ Form::label('file','File',array('id'=>'','class'=>'')) }}
    {{ Form::file('file','',array('id'=>'','class'=>'')) }}

    {!! Form::submit('Upload' , ['class' => 'btn btn-success']) !!}

    {{ Form::close() }}
</div>






{{--<div><--}}
{{--{!! Form::submit('Login' , ['class' => 'btn btn-success']) !!}--}}
{{--<a class="btn btn-primary" href="{{ route('app.' . $tableName . '.index') }}">{{ucfirst($tableName)}} list</a>--}}

{{--</div>--}}

@endsection