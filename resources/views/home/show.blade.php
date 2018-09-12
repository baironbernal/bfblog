@extends('layouts.app')
@section('content')
	
	@include('home.partials.nav')
	<br>
	<div class="row">
		<div class="col-4">
			<img class="img-responsive" src="{{url('storage/posts/'.$post->file)}}" alt="Card image cap" style="width: 300px;">
		</div>
		<div class="col-8">
			<h1>{{ $post->title }}</h1>
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
			<h3>Comentarios</h3>
			@forelse ($comments as $commentary)
				<p>{{commentary->text}}</p>
			@empty

			@forelse
	</div>
@endsection