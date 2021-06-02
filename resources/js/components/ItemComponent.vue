<template>
    <div class="itemBox">
        <item-list-view :items="items" :users="users" />
        <font-awesome-icon icon="plus-circle" size="5x" class="addButton"  @click="showModal()"/>
         <modal-component ref="modal"></modal-component>
         <div @keyup.enter="search">
            <font-awesome-icon icon="search-plus" size="3x" class="searchButton"  @click="search()" />
             <input type="text" name="search"  class="searchBar" v-model="item.product" placeholder="Search..">
        </div>
    </div>
</template>

<script>
import ItemListView from './ItemListView.vue'
import ModalComponent from'./ModalComponent.vue'
export default {
  components: { ItemListView, ModalComponent },
    data: function() {
        return{
            items: [],
            users:[],
            item: {
                product: ''
                }
             }
        },
    methods:{
        search(){
            axios.post('api/item/search',{ item: this.item }).then((data) =>{
                this.items = data.data
            })
        },

        getList(){
            axios.get('api/items')
            .then( response => {
                this.items = response.data
            })
            .catch ( error => {
                console.log( error )
            })

        },
       getUser(){
            axios.get('api/users')
            .then( response => { this.users = response.data})
            .catch( error => { console.log( error )})
        },

        showModal(){
             let element = this.$refs.modal.$el
             $(element).modal('show')
        }
    },
    created(){
       this.search();
        this.getList();
        this.getUser();
    }
}
</script>

<style scoped>

.itemBox{
  width: 100%;
  height: 100%;
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}

.addButton{
  position: fixed;
  left: 0;
  bottom: 0;
  color: #4285F4;
}

.searchButton{
     position: absolute;
    top: 16%;
    left: 40%;
    margin-top: -50px;
    margin-left: -50px;
    width: 40px;
    height: 40px;
    color: #4285F4;
}

.searchBar{
    position: absolute;
    top: 16%;
    left: 45%;
    margin-top: -50px;
    margin-left: -50px;
    width: 30px;
    height: 30px;
}

input[type=text] {
  width: 20%;
  height: 40px;
}

</style>
