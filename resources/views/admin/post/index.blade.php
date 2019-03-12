@extends('layouts.admin')
@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div id="container-publish">
	<div class="card-group">
		@forelse($posts as $post) 			
				<publish 
					route_image="{{asset('storage/posts/'. $post->file)}}" 
					title_post="{{$post->title}}"
					created_post="{{$post->created_at}}"
					status_post="{{$post->status}}"
					id_post= "{{$post->id}}"
					text="{{$post->description}}">
				</publish>
			@empty
			<div class="col-12">
				<div class="alert alert-warning" role="alert">
				¡No has registrado posts!
				</div>
			</div>
			@endforelse
	</div>
</div>


		
@endsection