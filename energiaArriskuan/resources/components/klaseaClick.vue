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
            <Pista :probak=pruebas lugar="klasea" :partida=partida.id></Pista>
        </div>

        <img
        :src="urlimg"
        @click.prevent="clickImagen"
        alt="Img"
        style="width: 100%; height: 100vh"
        />

        <div id="juego5div" class="hidden">
            <div id="juego5">
                <Juego5 :partida="partida.id"></Juego5>
            </div>
        </div>

    </div>
</template>

<script>
import Denbora from "./denbora.vue";
import Irten from "./jolasakIrten.vue";
import route from "../../vendor/tightenco/ziggy/src/js";
import Pista from './pistak.vue';
import Juego5 from './juego5.vue';

export default {
    name: "klaseaClick",
    components: {
        Denbora,
        Irten,
        Pista,
        Juego5,
    },
    props: {
        urlimg: String,
        partida: Object,
        pruebas: Array,
    },
    data() {
        return {
            objektuak: [
                // * Atea
                { areaTop: 13, areaLeft: 89, areaWidth: 11, areaHeight: 49 },
                // * Ordenagailua
                { areaTop: 46, areaLeft: 45, areaWidth: 4, areaHeight: 5 },
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
                    } else if (i == 1) {
                        // * Ordenagailua
                        console.log("Ordenagailua");
                        for (let i = 0; i < this.pruebas.length; i++) {
                            if (this.pruebas[i].izena == "prueba5") {
                                if (this.pruebas[i].bukatuta) {
                                    // Jolasa bukatuta dago
                                    console.log("Jolasa bukatuta dago");
                                } else {
                                    console.log("Jolasa bukatuta ez dago");
                                    // Jolasa bukatuta ez dago
                                    document.getElementById("juego5div").classList.remove("hidden");
                                    document.getElementById("juego5div").classList.add("block");
                                }
                            }
                        }
                    }
                    return;
                }
            }
        },
    },
};
</script>
