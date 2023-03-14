<script setup>
import {reactive} from "vue";
import {router} from "@inertiajs/vue3";

defineProps({errors: Object});

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
            <input id="name" v-model="form.name" name="name" required type="text">
            <div v-if="errors.name" class="error">{{ errors.name }}</div>
        </div>
        <div>
            <label for="email">Email</label>
            <input id="email" v-model="form.email" name="email" required type="email">
            <div v-if="errors.email" class="error">{{ errors.email }}</div>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" v-model="form.password" name="password" required type="password">
            <div v-if="errors.password" class="error">{{ errors.password }}</div>
        </div>
        <button type="submit">Submit</button>
    </form>
</template>

<style scoped>
div {
    margin: 1rem 0;
}

.error {
    font-weight: bold;
    font-size: .8rem;
    color: red;
}
</style>
