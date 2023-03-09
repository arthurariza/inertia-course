<script setup>
import Layout from "../Shared/Layout.vue";
import {Link} from "@inertiajs/vue3";

defineProps({
    time: String
});

</script>

<template>
    <Layout>
        <h1>Users</h1>

        <p style="margin-top: 1200px">The current time is {{ time }}</p>
        <Link href="/users" preserve-scroll>Refresh</Link>
    </Layout>
</template>

<style scoped>

</style>
