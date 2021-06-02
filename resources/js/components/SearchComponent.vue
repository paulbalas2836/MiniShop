<template>
<div @keyup.enter="search">
    <font-awesome-icon icon="search-plus" size="3x" class="searchButton"  @click="search()" />
    <input type="text" name="search"  class="searchBar" v-model="searching" placeholder="Search..">
</div>
</template>

<script>
export default {
    data: function(){
        return {
            searching: ''
        }
    },
    methods: {
        search(){
            Fire.emit('search');
            }

        }
}
</script>

<style scoped>

.searchButton{
    position: absolute;
    top: 20%;
    left: 40%;
    margin-top: -50px;
    margin-left: -50px;
    width: 40px;
    height: 40px;
    color: #4285F4;
}

.searchBar{
    position: absolute;
    top: 20%;
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