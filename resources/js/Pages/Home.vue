<template>
    <Layout>
        <h1>Welcome, {{ name }}</h1>

        <p>Frameworks we will use:</p>
        <ul>
            <li v-for="framework in frameworks" v-text="framework"></li>
        </ul>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";

defineProps({
    'name': String,
    'frameworks': Array
});
</script>

<style scoped>

</style>
