<template>
    <div class="text-white">
        <nav class="text-center my-5">
            <RouterLink class="me-2 hover:testu-kolore-nagusia" to="/">Orokorra</RouterLink>
            <RouterLink class="mx-2 hover:testu-kolore-nagusia" to="/proba1">1. Proba</RouterLink>
            <RouterLink class="mx-2 hover:testu-kolore-nagusia" to="/proba2">2. Proba</RouterLink>
            <RouterLink class="mx-2 hover:testu-kolore-nagusia" to="/proba3">3. Proba</RouterLink>
            <RouterLink class="ms-2 hover:testu-kolore-nagusia" to="/proba4">4. Proba</RouterLink>
        </nav>
        <RouterView :partidak=partidak :erabiltzaileak=erabiltzaileak :probak=probak></RouterView>
    </div>
</template>

<script>
    import { RouterLink, RouterView } from 'vue-router'
    export default {
        name: "klasifikazioa",
        components: {
            RouterLink,
            RouterView
        },
        props: {
            partidak: Array,
            erabiltzaileak: Array,
            probak: Array,
        }
    }
</script>
