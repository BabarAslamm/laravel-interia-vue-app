<script setup>
import { reactive, ref  } from "vue"
import { useForm } from "@inertiajs/vue3";


const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
})

const submit = () =>{
    console.log('form submitted')
    console.log('form', form)
    form.post(route('register.store'));
   onError : form.reset('password', 'password_confirmation')
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
                <small v-if="form.errors.name" style="color: red;">{{ form.errors.name }}</small>
            </div>
            <div class="mb-6">
                <label for="">Email</label>
                <input type="email" v-model="form.email" id="" autocomplete="false">
                <small v-if="form.errors.email" style="color: red;">{{ form.errors.email }}</small>

            </div>
            <div class="col-md-6">
                <label for="">Password</label>
                <input type="password" v-model="form.password" autocomplete="off">
                <small v-if="form.errors.password" class="mb-1" style="color: red;">{{ form.errors.password }}</small>

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
