<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex items-center justify-content-between p-1 max-w-screen-lg mx-auto">
                <div class="space-x-6">
                    <Link :href="route('home')">Home</Link>
                    <Link :href="route('about')">About</Link>
                </div>
            </nav>
        </header>

        <div>
            <main class="p-4">
                <slot></slot>
            </main>
        </div>
    </div>
</template>
