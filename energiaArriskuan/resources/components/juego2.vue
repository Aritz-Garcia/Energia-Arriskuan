<template>
    <div>
        <div class="flex items-center justify-center mb-8">
            <p class="text-3xl md:w-auto mx-10 pl-20 p-6" id="text">
                Jarri ondo panelaren orientazioa eta inklinazioa.
            </p>
            <img
                id="close-img"
                @click="closeGame"
                src="../../public/images/cerrar.png"
                alt="Cerrar"
                class="close-img"
            />
        </div>

        <div class="border-kolore-nagusia border-2 rounded-xl p-4 text-white atzekaldeko-kolore-oinarria w-[1000px] mx-auto">
            <div class="flex justify-center">

                <div class="flex gap-10 items-center mx-5">

                    <div class="flex items-center">
                        <div class="flex flex-col items-center gap-5 justify-center">
                            <p class="text-xl">Inklinazioa:</p>
                            <input :style="{ animation: animacion, 'background-color': colorFondo }" type="text" disabled class="rounded sotoaPanelLetra text-center w-14 text-2xl testu-kolore-oinarria bg-[#fff]" v-model="inclinazioaValue">
                        </div>
                        <div class="flex flex-col">
                            <button @click.prevent="decrementarValor('inclinazioa')" class="botones border rounded-md border-kolore-nagusia px-3 py-1 m-12">⭡</button>
                            <input type="range" name="Inclinazioa" id="Inclinazioa" min="0" max="75" value="0" @input="moverInclinazioa()" class="accent-[#0BD904] transform rotate-90 h-16">
                            <button @click.prevent="incrementarValor('inclinazioa')" class="botones border rounded-md border-kolore-nagusia px-3 py-1 m-12">⭣</button>
                        </div>
                    </div>

                    <div class="relative rounded-xl p-5">

                        <div id="divPanel" class="h-[210px] w-[485px]" style="transform: rotateX(0deg);">
                            <img id="panelSolar" src="../../public/images/juego2/panelSolar.png" alt="hierba" class="absolute h-[250px] w-full top-0 left-0 rounded-xl">
                        </div>

                    </div>


                </div>

            </div>

            <div class="flex justify-center mb-8 mt-8">

                <div class="flex items-center">
                    <p class="text-xl mr-10">Orientazioa:</p>
                    <button @click.prevent="decrementarValor('orientazioa')" class="botones border rounded-md border-kolore-nagusia px-3 py-1 m-2">⭠</button>
                    <input type="range" name="Orientazioa" id="Orientazioa" min="-30" max="30" value="0" @input="moverOrientazioa()" class="accent-[#0BD904]">
                    <button @click.prevent="incrementarValor('orientazioa')" class="botones border rounded-md border-kolore-nagusia px-3 py-1 m-2">⭢</button>

                    <input :style="{ animation: animacion, 'background-color': colorFondo }" type="text" disabled class="ml-10 rounded sotoaPanelLetra text-center w-16 text-2xl testu-kolore-oinarria bg-[#fff]" v-model="orientazioaValue">

                </div>

            </div>

            <button @click.prevent="egiaztatu()" class="hover:bg-[#fff] atzekaldeko-kolore-nagusia text-black p-3 text-2xl font-rubik-regular rounded mb-8 ">EGIAZTATU</button>

        </div>
    </div>
</template>

<script>
    import Panel from "./panelNumerico.vue";
    import route from '../../vendor/tightenco/ziggy';

    export default {
        name: "juego2",
        components: {
            Panel,
        },
        props: {
            partida: Number,
        },

        data() {
            return {
                inclinazioaValue: 0,
                orientazioaValue: 0,
                animacion: "",
                colorFondo: "",

            }
        },
        methods: {

            egiaztatu(){
                var resultElement = document.getElementById("text");

                if(this.inclinazioaValue == 30 && this.orientazioaValue == 15){

                    this.colorFondo = "#00ff00"

                    resultElement.innerHTML = "Panelaren orientazioa eta inklinazioa ondo jarri duzu.";

                    document.getElementById("Inclinazioa").disabled = true;
                    document.getElementById("Orientazioa").disabled = true;

                    var botones = document.getElementsByClassName("botones");
                    for (var i = 0; i < botones.length; i++) {
                        botones[i].disabled = true;
                    }

                    let denbora = this.$cookies.get("denbora");

                    setTimeout(() => {
                        window.location.href = route("prueba2.update", [this.partida, denbora]);
                    }, 3000);

                }else{
                    this.animacion = "errorSotoa 1s";
                    setTimeout(() => {
                        this.animacion = "";
                    }, 1000);
                }
            },

            moverInclinazioa() {
                let inclinazioaInput = document.getElementById("Inclinazioa");
                let value = inclinazioaInput.value;
                this.inclinazioaValue = value;
                document.getElementById("divPanel").style.transform = "rotateX(" + value + "deg)";
            },

            moverOrientazioa() {
                let orientazioaInput = document.getElementById("Orientazioa");
                let value = orientazioaInput.value;
                this.orientazioaValue = value;
                document.getElementById("panelSolar").style.transform = "skewX(" + value + "deg)";
            },

            incrementarValor(valor) {
                if (valor === 'inclinazioa') {
                    let value = document.getElementById("Inclinazioa").value;
                    document.getElementById("Inclinazioa").value = parseInt(value) + 1;
                    this.moverInclinazioa();
                } else if (valor === 'orientazioa') {
                    let value = document.getElementById("Orientazioa").value;
                    document.getElementById("Orientazioa").value = parseInt(value) + 1;
                    this.moverOrientazioa();
                }
            },

            decrementarValor(valor) {
                if (valor === 'inclinazioa') {
                    let value = document.getElementById("Inclinazioa").value;
                    document.getElementById("Inclinazioa").value = parseInt(value) - 1;
                    this.moverInclinazioa();
                } else if (valor === 'orientazioa') {
                    let value = document.getElementById("Orientazioa").value;
                    document.getElementById("Orientazioa").value = parseInt(value) - 1;
                    this.moverOrientazioa();
                }
            },

            closeGame() {
                document.getElementById("juego4div").classList.remove("block");
                document.getElementById("juego4div").classList.add("hidden");
            },
        }
    }
</script>
