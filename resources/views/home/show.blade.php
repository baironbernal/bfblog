@extends('layouts.app')
@section('content')
	
	@include('home.partials.nav')
	<br>
	<div class="row">
		<div class="col-4">
			<img class="img-responsive" src="{{url('storage/posts/'.$post->file)}}" alt="Card image cap" style="width: 300px;">
		</div>
		<div class="col-8">
			<blockquote class="blockquote">
			  <p class="mb-0"><h1>{{ $post->title }}</h1></p>
			  <footer class="blockquote-footer"><cite title="Source Title">{{ $post->author }}</cite></footer>
			</blockquote>
			
			<p>{{ $post->description }}</p>
			<p>
				<span class="badge badge-primary">Primary</span>
				<span class="badge badge-secondary">Secondary</span>
				<span class="badge badge-success">Success</span>
				<span class="badge badge-danger">Danger</span>
				<span class="badge badge-warning">Warning</span>
				<span class="badge badge-info">Info</span>
				<span class="badge badge-light">Light</span>
				<span class="badge badge-dark">Dark</span>
			</p>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-md-12">
			<h1>Comentarios</h1>
		</div>
		<div class="col-md-8">
			@guest
			  <div class="alert alert-secondary" role="alert">
				  Usted debe estar registrado para poder comentar.
				</div>
			@else
			  	@foreach ($comments as $commentary)
			  	<div class="media">
				  <img class="mr-3" src="{{asset('images/user.png')}}" alt="user" width="64px" height="64px">
				  <div class="media-body">
				    <h5 class="mt-0 font-italic">{{$commentary->user->name}}</h5>
				    
				    {{$commentary->text}}	

				    @foreach ($commentary->replies as $reply)

					   	<div class="media mt-3">
					      <a class="pr-3" href="#">
					        <img src="{{asset('images/user-comment.png')}}" alt="comment" width="34px" height="34px">
					      </a>
					      <div class="media-body">
					        <h5 class="mt-0">Holaaa</h5>
					        {{$reply->text}}
					      </div>
					    </div>
				    @endforeach

				    	
				  </div>
				</div>
				<hr>
			  	@endforeach

			@endauth 

		</div>

	</div>
@endsection