<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div>
        <header >
            <nav>
                <div class="space-x-6">
                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700' : $page.component === 'Home' }"
                        :href="route('home')">
                        Home
                    </Link>
                </div>

                <div class="space-x-6" v-if=" $page.props.auth.user ">

                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700' : $page.component === 'Dashboard' }"
                        :href="route('dashboard')">
                        Dashboard
                    </Link>

                    <Link
                        class="nav-link"
                        method="post"
                        as="button"
                        type="button"
                        :href="route('logout')">
                        Logout
                    </Link>
                </div>
                <div class="space-x-6" v-else>
                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700' : $page.component === 'Auth/Register' }"
                        :href="route('register')">
                        Register
                    </Link>
                    <Link
                        class="nav-link"
                        :class="{ 'bg-slate-700' : $page.component === 'Auth/Login' }"
                        :href="route('login')">
                        Login
                    </Link>
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
