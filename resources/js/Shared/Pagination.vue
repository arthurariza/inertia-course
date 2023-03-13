<script setup>
defineProps({links: Object});
</script>

<template>
    <Component
        :is="link.url ? 'Link' : 'span'"
        v-for="link in links"
        :href="link.url"
        preserve-scroll
        v-html="link.label"
    />
</template>

<style scoped>

</style>
