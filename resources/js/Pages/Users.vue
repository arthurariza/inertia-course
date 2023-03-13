<script setup>
import Pagination from "../Shared/Pagination.vue";
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";

const props = defineProps({
    filters: Object,
    users: Object
});

let search = ref(props.filters.search);

watch(search, (value) => {
    router.get('/users',
        {search: value},
        {
            preserveState: true,
            replace: true
        })
});

</script>

<template>
    <Head title="Users"/>

    <h1>Users</h1>

    <input v-model="search" type="text">

    <ul>
        <li v-for="user in users.data" :key="user.id" v-text="user.name"/>
    </ul>

    <Pagination :links="users.links"/>
</template>

<style scoped>

</style>
