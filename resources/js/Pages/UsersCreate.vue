<script setup>
import {reactive} from "vue";
import {router} from "@inertiajs/vue3";

let form = reactive({
    name: '',
    email: '',
    password: ''
});

function submit() {
    router.post('/users', form);
}
</script>

<template>
    <Head title="Create User"/>
    <h1>Create User</h1>

    <form @submit.prevent="submit">
        <div>
            <label for="name">Name</label>
            <input id="name" v-model="form.name" name="name" type="text">
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" v-model="form.email" name="email" type="email">
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" v-model="form.password" name="password" type="password">
        </div>
        <button type="submit">Submit</button>
    </form>
</template>

<style scoped>
div {
    margin: 1rem 0;
}
</style>
