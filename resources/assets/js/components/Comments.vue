<template>
	<div>
		<div class="media" v-if="comments" v-for="item in comments.data">
		  	<img class="mr-3" :src="'/images/user.png'" alt="user" width="64px" height="64px">
			  <div class="media-body">
				    <h5 class="mt-0 font-italic">{{ item.user.name }} </h5>
				     {{ item.text }}
				     <div class="media mt-3" v-if="item.replies" v-for="reply in item.replies">
					      <a class="pr-3" href="#">
					        <img :src="'/images/user-comment.png'" width="64px" height="64px">
					      </a>
					      <div class="media-body">
						        <h5 class="mt-0">{{ reply.user_id }}</h5>
						        {{ reply.text }}
					      </div>
				    </div>
				    <div v-else></div>   	
			  </div>
		</div>
		<div v-else>
			<P>No hay comentarios</P>
		</div>
	</div>
</template>

<script>
import Input from './InputComment'
export default 
{
	  props: ['article'],	  
	  components: {
	    Input
	  },

	  data(props) 
	  {
		  	return {
		  		comments : [],
			}
	  },

	  mounted() 
	  {
	  	 axios.get('/subscriber/comments/'+ this.article).then(
	  	 	response => (this.comments =  response))

	  }
}
</script>