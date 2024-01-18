<template>
    <div class="border-[#0BD904] border-2 rounded-xl p-4 text-white bg-[#010440]">
        <div class="flex">
            <div class="flex flex-col items-center mx-5">
                <div class="relative border-[#0BD904] border-2 rounded-xl p-5">
                    <div class="h-[365px] w-[485px]">
                        <img src="../../public/images/juego4/hierba.jpg" alt="hierba" class="absolute h-[405px] top-0 left-0 rounded-xl">
                        <img id="molinoImg" src="../../public/images/juego4/molino.png" alt="molino" class="absolute left-[147px] w-48">
                        <img src="../../public/images/juego4/pantalla.gif" alt="estatica de pantalla" class="absolute h-[405px] top-0 left-0 rounded-xl opacity-55">
                    </div>
                </div>

                <div class="flex items-center mt-5">
                    <button @click.prevent="decrementarValor" class="border rounded-md border-[#0BD904] px-3 py-1 m-2">&#60;</button>
                    <input type="range" name="brujula" id="brujulaSlider" min="0" max="359" value="0" @input="slideBrujula()">
                    <button @click.prevent="incrementarValor" class="border rounded-md border-[#0BD904] px-3 py-1 m-2">&#62;</button>
                </div>
            </div>

            <div class="flex flex-col items-center mx-5">
                <div class="relative flex justify-between">
                    <div class="border-2 border-[#0BD904] rounded-xl p-5">
                        <div class="relative w-48 h-48">
                            <img id="brujulaImg" src="../../public/images/juego4/brujula_general.png" alt="brujula" class="object-contain">
                            <img src="../../public/images/juego4/brujula_aguja.png" alt="brujula aguja" class="absolute w-8 top-[33.5px] left-[80px]">
                        </div>
                    </div>
                </div>

                <div id="panelNumerico">
                    <Panel :partida="partida"></Panel>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
    import Panel from "./panelNumerico.vue";
    import route from '../../vendor/tightenco/ziggy';

    export default {
        name: "juego4",
        components: {
            Panel,
        },
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
