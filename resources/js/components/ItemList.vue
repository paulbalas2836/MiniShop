<template>
    <div v-if="user.id == item.user_id">
  <div class="card text-center" style="width: 18rem; border-radius: 10%">
    <div class="card-body">
    <h5 class="card-title">{{item.name}}</h5>
    <p class="card-text">{{item.description}}</p>
    <div class="card-text" id="priceItem">{{item.price}}</div>
    <div v-if=" authentificatedUser != user.id">
      <a href="#" class="btn btn-primary" @click="buy()">Buy</a>
    </div>
    <div>{{user.name}}</div><span>{{item.product}}</span>
  </div>
</div>
    </div>
</template>

<script>
export default {
    props: ['item', 'user'],
    methods:{
        buy()
        {
            axios.delete('/api/item/'+this.item.id).then(response=>{
              alert("item bought");
            })
        }
    },
    computed: {
        authentificatedUser: function() {
       return this.$userId
     }
    }
}
</script>

<style scoped>

#priceItem:after{
     content: " $"; 
}
</style>