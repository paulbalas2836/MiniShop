<template>
    <!-- Modal -->
    <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addItemModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="addItemModalLabel">Add Items</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
              <div class="form-row">
                    <div class = "text-danger" id="nameDanger"></div>
                    <input type="text" name="name" v-model="item.name" class="form-control" placeholder="name" />
                </div>
                <div class="form-row">
                    <div class = "text-danger" id="descriptionDanger"></div>
                    <input type="text" name="description" v-model="item.description" class="form-control" placeholder="description" />
                </div>
                <div class="form-row">
                    <div class = "text-danger" id="priceDanger"></div>
                    <input type="text" name="price" v-model="item.price" class="form-control" placeholder="price" />
                </div>
                  <div class="form-row">
                    <div class = "text-danger" id="productDanger"></div>
                    <input type="text" name="product" v-model="item.product" class="form-control" placeholder="product" />
                </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" id = "close" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="addItem()">Save changes</button>
        </div>
        </div>
    </div>
    </div>
</template>

<script>
export default {
    data: function(){
        return{
            item:{
                name:'',
                description:'',
                price:'',
                product:''
            }
        }
    },
    methods:{
        addItem(){
            let check = true;
            if(this.item.name == '' ){
                check = false;
                document.getElementById("nameDanger").innerHTML="Name input should not be empty!!";
            }

            if(this.item.description == '' ){
                check = false;
                document.getElementById("descriptionDanger").innerHTML="Description input should not be empty!!";
            }

            if(this.item.price == ''){
                check = false;
                document.getElementById("priceDanger").innerHTML="Price input should not be empty!!";
            }

             if(this.item.product == ''){
                check = false;
                document.getElementById("productDanger").innerHTML="Product input should not be empty!!";
            }

            if(isNaN(this.item.price)){
                check = false;
                document.getElementById("priceDanger").innerHTML="Price input should be a number!!";
            }

            if(check){
            axios.post('api/item/store',{
                item: this.item
            }).then(response =>{
                    this.item.name='';
                    this.item.description='',
                    this.item.price='',
                    this.item.product=''
                var el = document.querySelector("#close");
                el.click();

            }).catch( error => {
                console.log( error );
            })
            }
        },
    }
}
</script>

<style scoped>

.form-row{
    margin-bottom: 15px;
}

</style>