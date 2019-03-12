@php 
	$colors = (new \App\Helpers\GlobalApp)->getColorsTags();
@endphp

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
			  <p class="mb-0">
				  <h1>{{ $post->title }}</h1>
			  </p>
			  <input type="hidden" name="" id="post_id" value="{{ $post->id }}">
			  <footer class="blockquote-footer"><cite title="Source Title">{{ $post->author }}</cite></footer>
			</blockquote>
			
			<p>{{ $post->description }}</p>
			<p>
				@foreach($post->tags as $tag)
					<a href="{{url('show-posts/' .$tag->id)}}" class="{{$colors[array_rand($colors)]}}">{{$tag->name}}</a>
				@endforeach
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
				<div>No, debes loguearte</div>	
			@else
			<div id="comments_article">
				<comments-article :article="{{ json_encode($post->id) }}"></comments-article>
			</div>		  	
			@endauth 

		</div>

	</div>
@endsection