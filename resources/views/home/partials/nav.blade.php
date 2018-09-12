@php 
	$categories = (new \App\Helpers\GlobalApp)->getCategories();
@endphp

<div class="container">
	<div class="row">
		<ul class="nav justify-content-center">
			@foreach ($categories as $category)
			   <form class="form-inline my-2 my-lg-0" action="{{url('/' .$category->id)}}" method="GET">
			      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">{{$category->name}}</button>
			    </form>
			@endforeach
		</ul>
	</div>
</div>


 