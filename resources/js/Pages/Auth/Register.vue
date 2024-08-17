<script setup>
import { reactive, ref  } from "vue"


const form = reactive({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
})

const submit = () =>{
    console.log('form submitted')
    console.log('form', form)
}
</script>


<template>
    <Head title=" - Register" />

    <h3 class="title">Register Page</h3>
    <form @submit.prevent="submit">
        <div class="w-2/4 mx-auto">
            <div class="mb-6">
                <label for="">Name</label>
                <input type="text" v-model="form.name" id="" autofocus>
            </div>
            <div class="mb-6">
                <label for="">Email</label>
                <input type="email" v-model="form.email" id="" autocomplete="false">
            </div>
            <div class="col-md-6">
                <label for="">Password</label>
                <input type="password" v-model="form.password" autocomplete="off">
            </div>
            <div class="mb-6">
                <label for="">Confirm Password</label>
                <input type="password" v-model="form.password_confirmation">
            </div>
            <div class="mb-6">
                <p class="text-slate-600 mb-2">Already have a account? <a href="#" class="text-link"> Login</a></p>

                <button class="primary-btn">Register</button>
            </div>
        </div>
    </form>

</template>
