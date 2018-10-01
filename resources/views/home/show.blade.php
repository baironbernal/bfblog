@extends('layouts.app')
@section('content')
	
	@include('home.partials.nav')
	<br>
	<div class="row">
		<div class="col-4">
			<img class="img-responsive" src="{{url('storage/posts/'.$post->file)}}" alt="Card image cap" style="width: 300px;">
		</div>
		<div id="test" class="col-8">
			<blockquote class="blockquote">
			  <p class="mb-0"><h1>{{ $post->title }}</h1></p>
			  <input type="hidden" name="" id="post_id" value="{{ $post->id }}">
			  <footer class="blockquote-footer"><cite title="Source Title">{{ $post->author }}</cite></footer>
			</blockquote>
			
			<p>{{ $post->description }}</p>
			<p>
				<span class="badge badge-primary" v-on:click="setComments()">Establecer comentarios</span>
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
			  
				<div id="comments_article">
					<comments-article article:{{$post->id}}></comments-article>
			</div>
			@else
			
			<div>No, debes loguearte</div>			  	

			@endauth 

		</div>

	</div>
@endsection