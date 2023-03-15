<script>
export default {
    layout: null
}
</script>

<script setup>
import {useForm} from "@inertiajs/vue3";

let form = useForm({
    email: '',
    password: ''
});

</script>

<template>
    <h1>Login</h1>

    <form @submit.prevent="form.post('/login')">
        <div>
            <label for="email">Email</label>
            <input id="email" v-model="form.email" name="email" type="email">
            <div v-if="form.errors.email" class="error">{{ form.errors.email }}</div>
        </div>
        <div>
            <label for="password">Password</label>
            <input id="password" v-model="form.password" name="password" type="password">
            <div v-if="form.errors.password" class="error">{{ form.errors.password }}</div>
        </div>
        <button :disabled="form.processing" type="submit">Submit</button>
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
