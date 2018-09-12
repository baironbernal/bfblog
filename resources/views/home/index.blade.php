@extends('layouts.app')
@section('content')
	
	@include('home.partials.nav')
	<div class="row justify-content-between">
	@foreach ($posts as $post)
		<div class="col">
			<div class="card" style="width: 18rem; height: 600px !important;">
			  <img class="card-img-top" src="{{url('storage/posts/'.$post->file)}}" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title"><b>{{$post->title}}</b></h5>
			    <h6 class="card-title">{{$post->author}}</h6>
			    <p class="card-text">{{str_limit($post->description , 250 )}}</p>
			    <a href="#" class="btn btn-primary">Ver noticia</a>
			  </div>
			</div>
		</div>
	@endforeach
	</div>
	<div class="row justify-content-md-center">
		<div class="col-12">
			{{$posts->links()}}
		</div>
	</div>


@endsection