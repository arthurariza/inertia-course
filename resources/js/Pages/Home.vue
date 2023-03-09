<template>
    <Nav/>
    
    <h1>Welcome, {{ name }}</h1>

    <p>Frameworks we will use:</p>
    <ul>
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<script setup>
import Nav from "../Shared/Nav.vue";

defineProps({
    'name': String,
    'frameworks': Array
});
</script>

<style scoped>

</style>
