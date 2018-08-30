@extends('layouts.admin')

@section('content')
<div class="container"> 
	<div class="row">
		@forelse($posts as $post)
		<div class="col-2">
			<img src="{{asset('storage/posts/'. $post->file)}}" alt="--" class="img-thumbnail">
		</div>
		<div class="col-6">
			{{$post->title}}
		</div>
		<div class="col-4">
			{{$post->status == 0 ? 'Borrador' : 'Publicado'}}
		</div>
		@empty
		<div class="col-12">
			<h1>NO HAY POST PERROSSSSSSSSSSSSSSSS</h1>
		</div>
		@endforelse
	</div>
</div>
@endsection