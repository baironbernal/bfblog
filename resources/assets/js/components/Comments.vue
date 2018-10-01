<template>

<div>
	<div class="media" v-if="comments.length > 0" v-for="comment in comments">
	  <img class="mr-3" :src="'/images/user.png'" alt="user" width="64px" height="64px">
	  <div class="media-body">
	    <h5 class="mt-0 font-italic"></h5>
	    	{{comment.name}}
		   	<div class="media mt-3">
		      <a class="pr-3" href="#">
		        <img src="" alt="comment" width="34px" height="34px">
		      </a>
		      <div class="media-body">
		        <h5 class="mt-0">Holaaa</h5>
		      </div>
		    </div>
	  </div>
	</div>

	<div v-else>
		NO hay comentarios
	</div>
	<hr>
</div>

</template>

<script>

export default {
  props: ['article'],
  data(props) {
  	return {
  		comments : [],

	 
	  	}
  },
  mounted() {
  	console.log("fddf")
  	this.comments =  [{
  		"name" : "dsdfs" 
  	}]
  }
}

</script>