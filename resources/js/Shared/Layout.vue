<script setup>
import Nav from "./Nav.vue";</script>

<template>
    <header class="layout__header">
        <h1>My App</h1>

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
