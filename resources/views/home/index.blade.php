@extends('layouts.admin')
	@section('form')
		{!! Form::open(['route' => 'posts.store']) !!}
			<div class="form-row">
				 <div class="form-group col-md-6">
			    	{!! Form::label('inputEmail4', 'Titulo'); !!}
			    	{!! Form::text('title','', 
			    		$attributes = [
				    		'placeholder' => 'Titulo del post',
				    	 	'id' => 'inputEmail4', 
				    	 	'class' => 'form-control'
			    	 	]); 
			    	 !!}
			    </div>
			    <div class="form-group col-md-6">
			    	{!! Form::label('inputEmail4', 'Autor'); !!}
			    	{!! Form::text('author','', 
			    		$attributes = [
				    		'placeholder' => 'Autor',
				    	 	'id' => 'inputEmail4', 
				    	 	'class' => 'form-control'
			    	 	]); 
			    	 !!}
			    </div>
			</div>
			<div class="form-row">
				 <div class="form-group col-md-12">
			    	{!! Form::label('inputEmail4', 'Imagen'); !!}
			    	{!! Form::file('file', 
			    		$attributes = [
				    	 	'class' => 'form-control',
			    	 	]); 
			    	 !!}
			    </div>
			</div>
			<div class="form-row">
				 <div class="form-group col-md-12">
			    	{!! Form::label('exampleFormControlTextarea1', 'Descripcion'); !!}
			    	{!! Form::textarea('description','', 
			    		$attributes = [
				    		'placeholder' => 'Descripcion',
				    	 	'id' => 'inputEmail4', 
				    	 	'class' => 'form-control'
			    	 	]); 
			    	 !!}
			    </div>
			</div>
			<div class="form-row">
				 <div class="form-group col-md-12">
			    	{!! Form::label('exampleFormControlTextarea1', 'Categoria'); !!}
			    	{!! Form::select('category_id', $categories, 'S',
			    	 	$attributes = [
				    	 	'class' => 'form-control',
				    	 	
			    	 	]);!!}
			    	 	 
			    </div>
			</div>
			{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
			

		{!! Form::close() !!}
@endsection