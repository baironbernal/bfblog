<template>
    <div class="form-row">
        <div class="form-group col-md-6">
            <v-select multiple 
                :value.sync="selected"  
                :options="selectOptions"
                v-model="selected" >
            </v-select>

            <input name="taghide" type="hidden" v-model="clearSelected"/>

        </div>
        <div class="form-group col-md-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tagCreate">
              Crear etiqueta
            </button>

            <!-- Modal -->
            <div class="modal fade" id="tagCreate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Etiquetas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                      <div class="modal-body">
                        <input name="tag" id="tag" class="form-control" placeholder="Coloca el nombre de la etiqueta">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-secondary" v-on:click="createTag()">Crear etiqueta</button>
                      </div>
                </div>
              </div>
            </div>
        </div>
        
    </div>
</template>

<script>
    export default {
        data() {
            return {
                selected: [],
                ultimate: [],
                clearSelected: [] 
            }
        },
        mounted() {
                axios.get('../admin/tags')
                .then(response => {this.ultimate = response.data.tags});
        },
        computed: {
            selectOptions: function () {
                return this.ultimate.map(g => ({label: g.name, value: g.id}));  
            },
            modifySelected: function () {
                const selecteds = Object.keys(this.selected).map(i => this.selected[i].value);
                this.clearSelected = selecteds;

                return this.clearSelected;
            }
        },
        methods: {
            createTag() {
                  var valueTag = document.getElementById("tag").value;
                  if (valueTag != null) {
                        axios.get('insert/tags/' + valueTag)
                       .then(response => {this.ultimate = response.data.tags});
                       $('#tagCreate').modal('hide');
                       toastr.success('Nuevo tag creado');
                  }    
            }
            
        }
    }

</script>
