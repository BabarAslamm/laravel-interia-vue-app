<script setup>
import { ref, defineProps } from 'vue';
const model = defineModel({
    type: null,
    required: true,

});

defineProps({
    name: {
        type: String,
        required: true,
    },
    type: {
        type: String,
        default: "text",
    },
    message: String,

})
</script>

<template>
<div class="mb-6">
    <label for="">{{ name}}</label>
    <input :type="type" v-model="model" id="" :class="{ '!ring-red-500' : message}" autofocus>
    <small v-if="message" class="error">{{ message }}</small>
</div>
</template>
