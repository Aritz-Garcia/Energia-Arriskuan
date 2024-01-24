<template>
  <div>
    <div>
      <div
        id="denbora"
        class="text-center absolute top-0 left-1/2 denboraErdian my-3 text-white text-xl z-50"
      >
        <Denbora :denboraPart="partida.denbora" :partida="partida.id"></Denbora>
      </div>
    </div>

    <div class="absolute top-0 left-0 z-50">
      <Irten />
    </div>

    <div class="absolute top-0 right-0 z-50">
      <Pista />
    </div>

    <div id="juego4div" class="hidden">
      <div id="juego4">
        <Juego2 :partida="partida.id"></Juego2>
      </div>
    </div>

    <img
      :src="urlimg"
      @click.prevent="clickImagen"
      alt="Img"
      style="width: 100%; height: 100vh"
    />

    <!-- estantería 1 dagoela erakusten duen testua -->
    <div id="jolasaBukatutaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Bukatu duzu hemen</p>
      </div>
    </div>
  </div>
</template>

<script>

import Juego2 from "./juego2.vue";
import Denbora from "./denbora.vue";
import Irten from "./jolasakIrten.vue";
import Pista from "./pistak.vue";
import route from "../../vendor/tightenco/ziggy/src/js";

export default {
  name: "teilatuaClick",
  props: {
    urlimg: String,
    partida: Object,
    pruebas: Array,
  },
  components: {
    Juego2,
    Denbora,
    Irten,
    Pista,
  },
  data() {
    return {
      objektuak: [
        // * Juego
        { areaTop: 35, areaLeft: 31.5, areaWidth: 12, areaHeight: 32 },
        // * Puerta
        { areaTop: 48, areaLeft: 27.5, areaWidth: 4, areaHeight: 13 },
      ],
    };
  },
  methods: {
    clickImagen(event) {
      let posX = event.clientX - event.target.offsetLeft;
      let posY = event.clientY - event.target.offsetTop;

      for (let i = 0; i < this.objektuak.length; i++) {
        var areaTopAbs = (this.objektuak[i].areaTop / 100) * event.target.height;
        var areaLeftAbs = (this.objektuak[i].areaLeft / 100) * event.target.width;
        var areaWidthAbs = (this.objektuak[i].areaWidth / 100) * event.target.width;
        var areaHeightAbs = (this.objektuak[i].areaHeight / 100) * event.target.height;

        if (
          posY >= areaTopAbs &&
          posY <= areaTopAbs + areaHeightAbs &&
          posX >= areaLeftAbs &&
          posX <= areaLeftAbs + areaWidthAbs
        ) {
          if (i == 0) {
            // * juego
            console.log("ebjwyfgveu");
            for (let i = 0; i < this.pruebas.length; i++) {
              if (this.pruebas[i].izena == "prueba2") {
                // Beste testuak kendu
                // liburutegiaDiv.classList.remove("block");
                // liburutegiaDiv.classList.add("hidden");
                // argiaDiv.classList.remove("block");
                // argiaDiv.classList.add("hidden");
                // atzekaldekoLiburutegiaDiv.classList.remove("block");
                // atzekaldekoLiburutegiaDiv.classList.add("hidden");
                // ateaItxiaDiv.classList.remove("block");
                // ateaItxiaDiv.classList.add("hidden");
                // paperakDiv.classList.remove("block");
                // paperakDiv.classList.add("hidden");
                if (this.pruebas[i].bukatuta) {
                  // Jolasa bukatuta
                  jolasaBukatutaDiv.classList.remove("hidden");
                  jolasaBukatutaDiv.classList.add("block");
                  jolasaBukatutaDiv.classList.add("animate__ateaItxia__text");

                  setTimeout(() => {
                    jolasaBukatutaDiv.classList.remove("block");
                    jolasaBukatutaDiv.classList.add("hidden");
                    jolasaBukatutaDiv.classList.remove("animate__ateaItxia__text");
                  }, 4900);
                } else {
                  // Jolasa egin gabe

                  // 4. jolasa egin gabe badago
                  document.getElementById("juego4div").classList.remove("hidden");
                  document.getElementById("juego4div").classList.add("block");
                }
                return;
              }
            }
          } else if (i == 1) {
            window.location.href = route("hasiera", this.partida.id);
          }
          return;
        }
      }
    },
    eguna() {
      let eguna = new Date();
      let ordua = eguna.getHours();
      let minutua = eguna.getMinutes();
      return ordua + ":" + minutua;
    },
  },
};
</script>
