<template>
   <Head :title="` - ${$page.component}`"></Head>
    Tell me about your self {{ name }}
    <br>
    <b>{{ $page.props.data }}</b>
</template>

<script setup>
defineProps({
    name: String
})
</script>
