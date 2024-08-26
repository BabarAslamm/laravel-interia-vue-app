<script setup>
import { useForm } from "@inertiajs/vue3";
import  TextInput  from "../Components/TextInput.vue"


const form = useForm({
    email: null,
    password: null,
    remember: null,
})

const submit = () =>{
    console.log('form submitted')
    console.log('form', form)
    form.post(route('login'), {

        onError : () => form.reset('password', 'remember')

    });

}
</script>


<template>
    <Head title=" - Login" />

    <h3 class="title">Login Page</h3>

    <form @submit.prevent="submit">
        <div class="w-2/4 mx-auto">

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

            <!-- Remember Me Checkbox -->
            <div class="mb-4 flex items-center">
                <input
                    id="remember"
                    type="checkbox"
                    v-model="form.remember"
                    class="form-checkbox h-4 w-4 text-link"
                />
                <label for="remember" class="ml-2 text-sm text-slate-600">Remember Me</label>
            </div>

            <div class="mb-6">
                <p class="text-slate-600 mb-2">Neeed a account? <a :href="route('register')" class="text-link"> Login</a></p>

                <button class="primary-btn">Login</button>
            </div>
        </div>
    </form>

</template>
