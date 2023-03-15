<script setup>
import {Link} from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";</script>

<template>
    <nav>
        <NavLink :active="$page.component === 'Home'" href="/">Home</NavLink>
        <NavLink :active="$page.component === 'Users'" href="/users">Users</NavLink>
        <NavLink :active="$page.component === 'Settings'" href="/settings">Settings</NavLink>
        <Link as="button" href="/logout" method="delete">Log Out</Link>
    </nav>
</template>

<style scoped>

</style>
