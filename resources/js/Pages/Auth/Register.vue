<script setup>
import { reactive, ref  } from "vue"
import { useForm } from "@inertiajs/vue3";
import  TextInput  from "../Components/TextInput.vue"


const form = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
})

const submit = () =>{
    console.log('form submitted')
    console.log('form', form)
    form.post(route('register.store'), {

        onError : () => form.reset('password', 'password_confirmation')



    });

}
</script>


<template>
    <Head title=" - Register" />

    <h3 class="title">Register Page</h3>

    <form @submit.prevent="submit">
        <div class="w-2/4 mx-auto">

            <TextInput
                name="name"
                type="text"
                v-model="form.name"
                :message="form.errors.name"
            />

            <TextInput
                name="Email"
                type="email"
                v-model="form.email"
                :message="form.errors.email"
            />

            <TextInput
                name="Password"
                type="password"
                v-model="form.password"
                :message="form.errors.password"
            />

            <TextInput
                name="Confirm Password"
                type="password"
                v-model="form.password_confirmation"
            />


            <div class="mb-6">
                <p class="text-slate-600 mb-2">Already have a account? <a href="#" class="text-link"> Login</a></p>

                <button class="primary-btn">Register</button>
            </div>
        </div>
    </form>

</template>
