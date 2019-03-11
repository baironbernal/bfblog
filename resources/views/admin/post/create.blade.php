@extends('layouts.admin')
	@section('content')

		{!! Form::open(['route' => 'posts.store', 'files' => 'true']) !!}
	
			 @if (session('status'))
	            <div class="alert alert-success" role="alert">
	                {{ session('status') }}
	            </div>
	        @endif

	        @if ($errors->any())
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif
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
							'accept' => 'img/*',
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
			
			 <div id="container-tags">
				 <tags>
				 </tags>
			</div>
				

			
			
			{!! Form::submit('Enviar', ['class' => 'btn btn-primary']) !!}
			

		{!! Form::close() !!}
@endsection
