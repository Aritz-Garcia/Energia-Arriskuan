<template>
    <div>
        <nav class="text-white">
            <RouterLink class="me-2" to="/">Generala</RouterLink>
            <RouterLink class="mx-2" to="/proba1">Proba 1</RouterLink>
            <RouterLink class="mx-2" to="/proba2">Proba 2</RouterLink>
            <RouterLink class="mx-2" to="/proba3">Proba 3</RouterLink>
            <RouterLink class="ms-2" to="/proba4">Proba 4</RouterLink>
        </nav>
        <RouterView />
    </div>
</template>

<script setup>
    import { RouterLink, RouterView } from 'vue-router'
</script>
