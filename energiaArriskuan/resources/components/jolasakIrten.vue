<template>
    <div class="ms-2 mt-2 px-5 p-3 text-center hover:brightness-0 hover:invert" @click.prevent="irtenBotoia">
        <img src="../../public/images/irten-index.png" alt="Irten" class="w-12">
    </div>
</template>

<script>
    import route from "../../vendor/tightenco/ziggy";

    export default {
        name: "jolasakIrten",
        methods: {
            irtenBotoia() {
                window.location.href = route("index");
            },
        },
    }
</script>
