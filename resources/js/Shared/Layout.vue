<script setup>
import Nav from "./Nav.vue";
import {computed} from "vue";
import {usePage} from "@inertiajs/vue3";

const username = computed(() => usePage().props.auth.user.username);
</script>

<template>
    <header class="layout__header">
        <input type="text" value="My App"/>

        <h2>{{ username }}</h2>

        <Nav/>
    </header>

    <section class="layout__content">
        <slot/>
    </section>
</template>

<style scoped>
.layout__header {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.layout__content, .layout__header {
    max-width: 48rem;
    margin: 0 auto;
    padding: 0 2rem;
}
</style>
