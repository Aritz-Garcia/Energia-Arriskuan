<template>
    <div class="border-black border-2 p-4 text-white">
        <!-- Div con un cuadrado el cual tenga las dos imagenes dentro -->
        <div class="border rounded-xl p-5">
            <img id="molinoImg" src="../../public/images/juego4/molino.png" alt="molino" class="w-48">
        </div>
        <div class="relative flex justify-between">
            <div class="flex items-center mx-5">
                <button @click.prevent="decrementarValor" class="border rounded-sm border-black px-2 m-2">&#60;</button>
                <input type="range" name="brujula" id="brujulaSlider" min="0" max="360" value="0" @input="slideBrujula()">
                <button @click.prevent="incrementarValor" class="border rounded-sm border-black px-2 m-2">&#62;</button>
            </div>
            <div class="border border-white rounded-xl p-5">
                <div class="relative w-48 h-48">
                    <img id="brujulaImg" src="../../public/images/juego4/brujula_general.png" alt="brujula" class="object-contain">
                    <img src="../../public/images/juego4/brujula_aguja.png" alt="brujula aguja" class="absolute w-8 top-[33.5px] left-[80px]">
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "juego4",
        props: {
            partida: String,
        },
        mounted() {
            this.slideBrujula();
        },
        data() {
            return {

            }
        },
        methods: {
            slideBrujula() {
                let value = document.getElementById("brujulaSlider").value;
                document.getElementById("brujulaImg").style.transform = "rotate(" + value + "deg)";
                document.getElementById("molinoImg").style.transform = "rotate(" + value + "deg)";
            },
            incrementarValor() {
                let value = document.getElementById("brujulaSlider").value;
                document.getElementById("brujulaSlider").value = parseInt(value) + 1;
                this.slideBrujula();
            },
            decrementarValor() {
                let value = document.getElementById("brujulaSlider").value;
                document.getElementById("brujulaSlider").value = parseInt(value) - 1;
                this.slideBrujula();
            }
        }
    }
</script>
