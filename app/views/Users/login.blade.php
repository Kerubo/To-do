@extends('layouts.master')
@section('content')
<head>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		body
		  { padding-bottom:40px; padding-top:40px; }
	</style>
</head>
<body class="container">
<div class="row">
	<div class="col-sm-8 col-sm-offset-2">
		
		<div class="page-header">
			<h1> Add todos</h1>
		</div>	
{{ Form::open(array('route'=>'users.store')) }}
	<div class="form_group">
	{{Form::label('Names')}}
	{{ Form::text('username', null ,array('class'=>'form-control')) }}
	</div>
	<div class="form-group">
    {{Form::label('Password')}}
    {{Form::password('password', ['class' => 'form-control'])}}
  </div>
{{Form::submit('Submit', ['class' => 'btn btn-success'])}}
{{Form::close()}}


@stop