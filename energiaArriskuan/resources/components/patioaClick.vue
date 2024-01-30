<template>
    <div>
        <div>
            <div
                id="denbora"
                class="text-center absolute top-0 left-1/2 denboraErdian my-3 text-white text-xl z-50"
            >
                <Denbora
                    :denboraPart="partida.denbora"
                    :partida="partida.id"
                ></Denbora>
            </div>
        </div>

        <div class="absolute top-0 left-0 z-50">
            <Irten />
        </div>

    <div class="absolute top-0 right-0 z-50">
        <Pista :probak=pruebas lugar="patioa" :partida=partida.id></Pista>
    </div>

    <img
      :src="urlimg"
      @click.prevent="clickImagen"
      alt="Img"
      style="width: 100%; height: 100vh"
    />

    <div id="pelotasDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Saskibaloiko baloiak</p>
      </div>
    </div>

        <div id="ZaborraDiv" class="hidden">
            <div
                class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
            >
                <p>Zaborra besterik ez dago</p>
            </div>
        </div>

        <div id="JolastuDiv" class="hidden">
            <div
                class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
            >
                <p>Kulunka zahar bat da</p>
            </div>
        </div>

        <div id="pelucheDiv" class="hidden">
            <div
                class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
            >
                <p>Hartz panpina</p>
            </div>
        </div>

        <div id="simbolosDiv" class="hidden">
            <div id="juego2Paperak"><Papera :zenbakia="zenbakia"></Papera></div>
        </div>

        <div id="easter_eggDiv" class="hidden absolute top-[45%] left-[58%] w-[2%] h-[3%]" :style="{ 'animation' : estilo }">
            <img :src="easteregg" alt="Easter_Egg">
        </div>
    </div>
</template>

<script>
import Papera from "./papelesPatio.vue";
import Denbora from "./denbora.vue";
import Irten from "./jolasakIrten.vue";
import route from "../../vendor/tightenco/ziggy";
import Pista from './pistak.vue';

export default {
    name: "patioaClick",
    components: {
        Papera,
        Denbora,
        Irten,
        Pista,
    },
    props: {
        urlimg: String,
        partida: Object,
        pruebas: Array,
        easteregg: String,
    },
    data() {
        return {
            objektuak: [
                // * Atea
                { areaTop: 52, areaLeft: 87, areaWidth: 7, areaHeight: 18 },
                // * Saskibaloiko baloiak
                { areaTop: 70, areaLeft: 40.2, areaWidth: 3.5, areaHeight: 5 },
                // * Saskibaloiko baloiak
                { areaTop: 63, areaLeft: 51, areaWidth: 2.5, areaHeight: 4 },
                // * Saskibaloiko baloiak
                { areaTop: 65, areaLeft: 63, areaWidth: 4, areaHeight: 5 },
                // * Peluche
                { areaTop: 65, areaLeft: 53.5, areaWidth: 2.9, areaHeight: 5 },
                // * Zaborra
                { areaTop: 45, areaLeft: 2, areaWidth: 30, areaHeight: 40 },
                // * Kulunka
                { areaTop: 43, areaLeft: 38, areaWidth: 20, areaHeight: 14 },
                // * Lurreko Sinboloak
                { areaTop: 57, areaLeft: 32, areaWidth: 8.2, areaHeight: 28 },
                { areaTop: 57, areaLeft: 40.2, areaWidth: 10.8, areaHeight: 13 },
                { areaTop: 75, areaLeft: 40.2, areaWidth: 46, areaHeight: 10 },
                { areaTop: 70, areaLeft: 43.7, areaWidth: 42.5, areaHeight: 5 },
                { areaTop: 60, areaLeft: 67, areaWidth: 19.2, areaHeight: 10 },
                // * Easter Egg
                { areaTop: 45, areaLeft: 58, areaWidth: 2, areaHeight: 3 },
            ],
            zenbakia: 0,
            estilo: "",
            contador: 0,
        };
    },
    methods: {
        clickImagen(event) {
            let posX = event.clientX - event.target.offsetLeft;
            let posY = event.clientY - event.target.offsetTop;

            for (let i = 0; i < this.objektuak.length; i++) {
                var areaTopAbs =
                    (this.objektuak[i].areaTop / 100) * event.target.height;
                var areaLeftAbs =
                    (this.objektuak[i].areaLeft / 100) * event.target.width;
                var areaWidthAbs =
                    (this.objektuak[i].areaWidth / 100) * event.target.width;
                var areaHeightAbs =
                    (this.objektuak[i].areaHeight / 100) * event.target.height;

                if (
                    posY >= areaTopAbs &&
                    posY <= areaTopAbs + areaHeightAbs &&
                    posX >= areaLeftAbs &&
                    posX <= areaLeftAbs + areaWidthAbs
                ) {
                    if (i == 0) {
                        // * Atea
                        window.location.href = route(
                            "hasiera",
                            this.partida.id
                        );
                    } else if (i == 1 || i == 2 || i == 3) {
                        // * Pelotas
                        // Liburutegiako testua atera
                        pelotasDiv.classList.remove("hidden");
                        pelotasDiv.classList.add("block");
                        pelotasDiv.classList.add("animate__ateaItxia__text");

                        // Beste testuak kendu
                        pelucheDiv.classList.remove("block");
                        pelucheDiv.classList.add("hidden");

                        ZaborraDiv.classList.remove("block");
                        ZaborraDiv.classList.add("hidden");

                        JolastuDiv.classList.remove("block");
                        JolastuDiv.classList.add("hidden");

                        setTimeout(() => {
                            pelotasDiv.classList.remove("block");
                            pelotasDiv.classList.add("hidden");
                            pelotasDiv.classList.remove(
                                "animate__ateaItxia__text"
                            );
                        }, 4900);
                    } else if (i == 4) {
                        // * Peluche
                        // Argiaren testua atera
                        pelucheDiv.classList.remove("hidden");
                        pelucheDiv.classList.add("block");
                        pelucheDiv.classList.add("animate__ateaItxia__text");

                        // Beste testuak kendu
                        pelotasDiv.classList.remove("block");
                        pelotasDiv.classList.add("hidden");

                        ZaborraDiv.classList.remove("block");
                        ZaborraDiv.classList.add("hidden");

                        JolastuDiv.classList.remove("block");
                        JolastuDiv.classList.add("hidden");

                        setTimeout(() => {
                            pelucheDiv.classList.remove("block");
                            pelucheDiv.classList.add("hidden");
                            pelucheDiv.classList.remove(
                                "animate__ateaItxia__text"
                            );
                        }, 4900);
                    } else if (i == 5) {
                        // * Zaborra
                        ZaborraDiv.classList.remove("hidden");
                        ZaborraDiv.classList.add("block");
                        ZaborraDiv.classList.add("animate__ateaItxia__text");

                        pelotasDiv.classList.remove("block");
                        pelotasDiv.classList.add("hidden");

                        pelucheDiv.classList.remove("block");
                        pelucheDiv.classList.add("hidden");

                        JolastuDiv.classList.remove("block");
                        JolastuDiv.classList.add("hidden");

                        setTimeout(() => {
                            ZaborraDiv.classList.remove("block");
                            ZaborraDiv.classList.add("hidden");
                            ZaborraDiv.classList.remove(
                                "animate__ateaItxia__text"
                            );
                        }, 4900);
                    } else if (i == 6) {
                        // * Kulunka
                        JolastuDiv.classList.remove("hidden");
                        JolastuDiv.classList.add("block");
                        JolastuDiv.classList.add("animate__ateaItxia__text");

                        pelotasDiv.classList.remove("block");
                        pelotasDiv.classList.add("hidden");

                        pelucheDiv.classList.remove("block");
                        pelucheDiv.classList.add("hidden");

                        ZaborraDiv.classList.remove("block");
                        ZaborraDiv.classList.add("hidden");

                        setTimeout(() => {
                            JolastuDiv.classList.remove("block");
                            JolastuDiv.classList.add("hidden");
                            JolastuDiv.classList.remove(
                                "animate__ateaItxia__text"
                            );
                        }, 4900);
                    } else if (i == 7 || i == 8 || i == 9 || i == 10 || i == 11) {
                        // * Lurreko sinboloak

                        JolastuDiv.classList.remove("hidden");
                        JolastuDiv.classList.add("block");
                        JolastuDiv.classList.add("animate__ateaItxia__text");

                        pelotasDiv.classList.remove("block");
                        pelotasDiv.classList.add("hidden");

                        pelucheDiv.classList.remove("block");
                        pelucheDiv.classList.add("hidden");

                        ZaborraDiv.classList.remove("block");
                        ZaborraDiv.classList.add("hidden");

                        JolastuDiv.classList.remove("block");
                        JolastuDiv.classList.add("hidden");

                        easter_eggDiv.classList.remove("block");
                        easter_eggDiv.classList.add("hidden");

                        this.zenbakia = this.randomZenbakia();
                        simbolosDiv.classList.remove("hidden");
                        simbolosDiv.classList.add("block");
                    } else if (i == 12) {
                        // * Easter Egg
                        this.contador++;
                        
                        if (this.contador == 5) {
                            easter_eggDiv.classList.remove("hidden");
                            easter_eggDiv.classList.add("block");
                            this.estilo = "easterEgg 3s";
                            setTimeout(() => {
                                easter_eggDiv.classList.remove("block");
                                easter_eggDiv.classList.add("hidden");
                                this.estilo = "";
                            }, 3000);
                        }
                    }
                    return;
                }
            }
        },
        randomZenbakia() {
            return Math.floor(Math.random() * 4) + 1;
        },
    },
};
</script>
