<script setup>
import Pagination from "../Shared/Pagination.vue";

defineProps({
    time: String,
    users: Object
});

</script>

<template>
    <Head title="Users"/>
    <h1>Users</h1>

    <ul>
        <li v-for="user in users.data" :key="user.id" v-text="user.name"/>
    </ul>

    <Pagination :links="users.links"/>
</template>

<style scoped>

</style>
