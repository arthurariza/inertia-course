<script setup>
import {Link} from "@inertiajs/vue3";</script>

<template>
    <nav>
        <Link href="/">Home</Link>
        <Link href="/users">Users</Link>
        <Link href="/settings">Settings</Link>
        <Link as="button" href="/logout" method="post">Settings</Link>
    </nav>
</template>

<style scoped>

</style>
