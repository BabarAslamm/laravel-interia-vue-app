<script setup>

</script>

<template>
    <Head :title="` - ${$page.component}`"></Head>
    <h1 class="text-1xl font-bold underline">
        Hello world!
    </h1>

    <br>
    <b>{{ $page.props.data }}</b>



    <Link class="mt-[600px] block" :href="route('home')" preserve-scroll>Refresh</Link>

</template>
