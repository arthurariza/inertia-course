<script setup>
import {ref, watch} from "vue";
import {router} from "@inertiajs/vue3";
import debounce from "lodash.debounce"
import Pagination from "@/Shared/Pagination.vue";

const props = defineProps({
    filters: Object,
    users: Object,
    can: Object
});

let search = ref(props.filters.search);

watch(search, debounce((value) => {
    router.get('/users',
        {search: value},
        {
            preserveState: true,
            replace: true
        })
}, 300));

</script>

<template>
    <Head title="Users"/>

    <Link v-if="props.can.createUser" href="/users/create">
        Create User
    </Link>

    <h1>Users</h1>

    <input v-model="search" type="text">

    <ul>
        <li v-for="user in users.data" :key="user.id" v-text="user.name"/>
    </ul>

    <Pagination :links="users.meta.links"/>
</template>

<style scoped>

</style>
