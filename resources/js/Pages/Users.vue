<script setup>
defineProps({
    time: String,
    users: Array
});

</script>

<template>
    <Head title="Users"/>
    <h1>Users</h1>

    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.name"/>
    </ul>

    <p style="margin-top: 2rem">The current time is {{ time }}</p>

    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<style scoped>

</style>
