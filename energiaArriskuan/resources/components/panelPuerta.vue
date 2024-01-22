<template>
    <div class="flex items-center justify-center mb-8">
        <p class="text-3xl md:w-auto mx-10 px-20 p-6 text-white" id="atekoPapera">
            {{ testua }}
        </p>
        <img
            id="close-img"
            @click="closeGame"
            src="../../public/images/cerrar.png"
            alt="Cerrar"
            class="close-img"
        />
    </div>
</template>

<script>
    export default {
        name: "panelPuerta",
        props: {
            testua: String,
        },
        methods: {
            closeGame() {
                document.getElementById("atekoPaperaDiv").classList.remove("block");
                document.getElementById("atekoPaperaDiv").classList.add("hidden");
            },
        },
    };
</script>
