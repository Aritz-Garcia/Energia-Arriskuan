<template>
    <div>
        <div class="flex items-center justify-center mb-8">
            <p class="text-3xl md:w-auto mx-10 pl-20 p-6" id="text">
                Aerosorgailua biratu daiteke. Azmatu kokapena kodea lortzeko.
            </p>
            <img
                id="close-img"
                @click="closeGame"
                src="../../public/images/cerrar.png"
                alt="Cerrar"
                class="close-img"
            />
        </div>

        <div class="border-[#0BD904] border-2 rounded-xl p-4 text-white bg-[#010440] w-[880px] mx-auto">
            <div class="flex">

                <div class="flex flex-col items-center mx-5">
                    <div class="relative border-[#0BD904] border-2 rounded-xl p-5">
                        <div class="h-[365px] w-[485px]">
                            <img src="../../public/images/juego2/panelSolar.png" alt="hierba" class="absolute h-[405px] top-0 left-0 rounded-xl">
                        </div>
                    </div>

                    <!-- TODO Poner hover a los botones y un background -->
                    <div class="flex items-center mt-5">
                        <button @click.prevent="decrementarValor" class="border rounded-md border-[#0BD904] px-3 py-1 m-2">&#60;</button>
                        <input type="range" name="brujula" id="brujulaSlider" min="0" max="359" value="0" @input="slideBrujula()" class="accent-[#0BD904]">
                        <button @click.prevent="incrementarValor" class="border rounded-md border-[#0BD904] px-3 py-1 m-2">&#62;</button>
                    </div>
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
                animacion: "",
            }
        },
        methods: {
            slideBrujula() {
                let value = document.getElementById("brujulaSlider").value;
                document.getElementById("brujulaImg").style.transform = "rotate(" + value + "deg)";
                document.getElementById("molinoImg").style.transform = "rotate(" + value + "deg)";
                if (value >= 314 && value <= 316) {
                    this.animacion = "vientoAnim 2s infinite";
                } else {
                    this.animacion = "";
                }
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
            },
            closeGame() {
            document.getElementById("juego4div").classList.remove("block");
            document.getElementById("juego4div").classList.add("hidden");
        },
        }
    }
</script>
