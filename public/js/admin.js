$( document ).ready(function() {

	var public = $(".btn-outline-dark");
	var delete_button =  $(".btn-danger");

	public.on('click',function()
	{
		publishPost($(this))

	});

	delete_button.on('click',function()
	{
		deletePost($(this))

	});


	//Publish articule for watch suscribers

	function publishPost(button)
	{
		var public_id = button.val();
	  	console.log(public_id);

	  	$.ajax({
		  url: "publish/" +  public_id,
		  method: "GET",
		  dataType: "html"
		});

		button.html('AL AIRE');
		button.removeClass( "btn-outline-dark" );
		button.addClass( "btn-success" );
		button.prop('disabled', true);
	}

	//Delete articule of the app

	function deletePost(button)
	{
		var public_id = delete_button.val();
	  	console.log(public_id);

	  	$.ajax({
		  url: "posts/delete/" +  public_id,
		  method: "GET",
		  dataType: "html"
		});
	}

});