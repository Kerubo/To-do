@extends('layouts.master')
@section('content')
{{ Form::open(array('route'=>'todo.store')) }}
<div class="form_group">
	{{Form::label('Names')}}
	{{ Form::text('task', null ,array('class'=>'form-control')) }}
	{{Form::submit('Sign Up', ['class' => 'btn btn-success'])}}
	{{Form::close()}}
	</div>
	
@stop