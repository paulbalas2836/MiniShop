<template>
    <div class="container">
        <div class="row mt-4">
            <div class="col-6 offset-3">
            <form action="#" @submit.prevent="handleLogin">
                <h3>Sign In</h3>
                <div class="form-row">
                    <input type="email" name="email" v-model="FormData.email" class="form-control" placeholder="email@yahoo.com" />
                </div>
                <div class="form-row">
                    <input type="password" name="password" v-model="FormData.password" class="form-control" placeholder="password" />
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                    <span class = "SignButton"><a href="#" @click="goToRegister()">Sign Up</a></span>
                </div>
            </form>
        </div>
    </div>
    </div>
</template>
<script>
import Register from './RegisterComponent.vue';
    export default {
        components: {Register},
        data:function() {
            return{
                items:[],
                FormData: {
                    email: '',
                    password: ''
                }
            }
        },
        methods:{
            handleLogin(){
                axios.get('/sanctum/csrf-cookie').then(response => {
                    axios.post('/login', this.FormData).then(response =>{
                        window.location.href = "/home";
                    });
                }); 
            },
            goToRegister(){
                window.location.href = "/register";
        }
        }
    }
</script>

<style scoped>

.form-row{
    margin-bottom: 8px;
}

.SignButton{
    margin-left: 20px;
    font-size: 20px;
}

</style>