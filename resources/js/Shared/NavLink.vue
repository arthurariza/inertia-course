<script setup>
import {Link} from "@inertiajs/vue3";

defineProps({active: Boolean});
</script>

<template>
    <Link :class="{'active' : active}" href="/">
        <slot/>
    </Link>

</template>

<style scoped>
a, a:visited, a:hover, a:active {
    color: inherit;
    text-decoration: none;
}

.active {
    font-weight: bold;
    text-decoration: underline;
}
</style>
