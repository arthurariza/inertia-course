<script setup>
defineProps({
    time: String
});

</script>

<template>
    <Head title="Users"/>
    <h1>Users</h1>

    <p style="margin-top: 1200px">The current time is {{ time }}</p>
    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<style scoped>

</style>
