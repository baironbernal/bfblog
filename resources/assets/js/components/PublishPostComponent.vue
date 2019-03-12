<template>
        <div class="card" v-bind:style="styleObject">
            <img class="card-img-top" :src="route_image" alt="card-images"/>
            <div class="card-body">
              <h5 class="card-title">{{title_post}}</h5>
              <p class="card-text">{{text.substr(0,100)}}</p>
              <p class="card-text">
                <small class="text-muted">Creado en la fecha: {{created_post}}</small>
              </p>
              <p>
                <button v-if="status_post == 0" type="button" class="btn btn-info" v-on:click="publishPost()" value="id_post">
                    Publicar
                </button>
                <button v-else type="button" class="btn btn-success" v-on:click="publishPost()" value="id_post">
                    AL AIRE
                </button>
                  <button type="button" class="btn btn-danger" value="id_post" @click.prevent="deletePost()">
                    Eliminar
                  </button>
              </p>
            </div>
          </div>
</template>

<script>
    export default {
        props: ['route_image','title_post','created_post', 'status_post','id_post','text'],
        data() {
            return {
                styleObject: {
                    background: '',
                    color: '',
                    marginLeft: '10px'
                },
            }
        },
        computed: {
            changeCss: function () {
                if (this.status_post == 1) {
                    this.styleObject.background = '#283044';
                    this.styleObject.color = 'white';

                    return this.styleObject;
                }
                else {
                    
                    return this.styleObject;
                }
            }
        },
        mounted() {
            
        },

        methods: {
            deletePost() {
                axios.get('../admin/posts/destroy/' + this.id_post)            
                .then(response => {
                    toastr.success('Post se ha eliminado');
                    location.reload();
                }, (error) => {
                    // error callback
                });
            },
            publishPost() {
                axios.get('../admin/publish/' + this.id_post)            
                .then(response => {
                    toastr.success('El post se ha publicado');
                    
                }, (error) => {
                    // error callback
                });
            }
        }
    }
</script>
