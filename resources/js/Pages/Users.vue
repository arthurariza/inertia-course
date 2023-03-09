<script setup>
import Nav from "../Shared/Nav.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    time: String
});

</script>

<template>
    <Nav/>

    <h1>Users</h1>

    <p style="margin-top: 1200px">The current time is {{ time }}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<style scoped>

</style>
