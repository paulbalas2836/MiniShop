<template>
    <div class = "container">
        <div class="row mt-4">
            <div class="col-6 offset-3">
            <form action="#" @submit.prevent="handleRegister">
                <h3>Register</h3>
                <div class="form-row">
                     <div class = "text-danger" id="nameDanger"></div>
                    <input type="text" name="name" v-model="FormData.name" class="form-control" placeholder="name" />
                </div>
                <div class="form-row">
                     <div class = "text-danger" id="emailDanger"></div>
                    <input type="email" name="email" v-model="FormData.email" class="form-control" placeholder="email@yahoo.com" />
                </div>
                <div class="form-row">
                     <div class = "text-danger" id="passwordDanger"></div>
                    <input type="password" name="password" v-model="FormData.password" class="form-control" placeholder="password" />
                </div>
                <div class="form-row">
                     <div class = "text-danger" id="password_confirmationDanger"></div>
                    <input type="password" name="password_confirmation" v-model="FormData.password_confirmation" class="form-control" placeholder="password confirmation" />
                </div>
                <div class="form-row">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            FormData: {
                name:'',
                email:'',
                password:'',
                password_confirmation:''
            },
        }
    },
    methods: {
        handleRegister(){
             let check = true;
            if(this.FormData.name == '' ){
                check = false;
                document.getElementById("nameDanger").innerHTML="Name input should not be empty!!";
            }

            if(this.FormData.email == '' ){
                check = false;
                document.getElementById("emailDanger").innerHTML="Email input should not be empty!!";
            }

            if(this.FormData.password == ''){
                check = false;
                document.getElementById("passwordDanger").innerHTML="Password input should not be empty!!";
            }

             if(this.FormData.password_confirmation == ''){
                check = false;
                document.getElementById("password_confirmationDanger").innerHTML="Password confirmation input should not be empty!!";
            }

            if(this.FormData.password != this.FormData.password_confirmation){
                check = false;
                document.getElementById("passwordDanger").innerHTML="Password does not match!!";
            }

            axios.post('api/register', this.FormData).then(response =>{
                axios.post('/login',this.FormData).then ( response => {
                            window.location.href = "/home";
                })
            });
        }
    }
}

</script>

<style scoped>

.form-row{
    margin-bottom: 8px;
}

</style>