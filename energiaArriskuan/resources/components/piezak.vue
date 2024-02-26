<template>
    <div :style="{'background-color' : pieza.argazkia == null ? '#f4f4f4' : ''}" class="border border-kolore-oinarria">
        <img v-if="pieza.argazkia != null"  :src=pieza.argazkia :alt="pieza.name + '_' + pieza.id">
    </div>
</template>

<script>
    export default {
        name: "piezak",
        props: {
            partida: Number,
            pieza: Object,
        },
    }
</script>
