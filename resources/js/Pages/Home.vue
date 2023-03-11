<script>
import Layout from "../Shared/Layout.vue";

export default {
    layout: Layout
}
</script>

<script setup>
defineProps({
    'name': String,
    'frameworks': Array
});
</script>

<template>
    <h1>Welcome, {{ name }}</h1>

    <p>Frameworks we will use:</p>
    <ul>
        <li v-for="framework in frameworks" v-text="framework"></li>
    </ul>
</template>

<style scoped>

</style>
