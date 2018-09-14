@extends('layouts.admin')

@section('content')

<div class="container">
@forelse($posts as $post) 
	<div class="row justify-content-md-center">
	
		<div class="col-auto">
			<img src="{{asset('storage/posts/'. $post->file)}}" alt="--" class="rounded float-left" width="100px" height="100px">
		</div>
		<div class="col-lg-4">
			<p class="font-weight-bold">{{$post->title}}</p>
			<p>{{$post->created_at}}</p>
		</div>
		<div class="col-lg-2">
			@if ($post->status === 0 )
				<button type="button" class="btn btn-outline-dark" value="{{$post->id}}">
					Publicar
				</button>
			@else
			<button type="button" class="btn btn-success" value="{{$post->id}}" disabled="disabled">
					AL AIRE
				</button>
			@endif
			
		</div>
		<div class="col-lg-2">
				<button type="button" class="btn btn-danger" value="{{$post->id}}">
					Eliminar
				</button>
		</div>
		@empty
		<div class="col-12">
			<div class="alert alert-warning" role="alert">
			¡No has registrado posts!
			</div>
			
		</div>
	</div>
	<br>
	@endforelse


</div>
@endsection