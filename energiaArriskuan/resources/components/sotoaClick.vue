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
      <Pista :probak=pruebas lugar="juego4" :partida=partida.id></Pista>
    </div>
    <img
      :src="urlimg"
      @click.prevent="clickImagen"
      alt="Img"
      style="width: 100%; height: 100vh"
    />

    <div id="juego4div" class="hidden">
      <div id="juego4">
        <Juego4 :partida="partida.id"></Juego4>
      </div>
    </div>

    <div id="liburutegiaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Paper eta liburu zaharrak daude</p>
      </div>
    </div>

    <div id="argiaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Gela hau oso ilun dago, argia behar dut ikusteko</p>
      </div>
    </div>

    <div id="atzekaldekoLiburutegiaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Liburuak zaharrak bakarrik daude</p>
      </div>
    </div>

    <div id="ateaItxiaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Atea itxita dago</p>
      </div>
    </div>

    <div id="paperakDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Paper hauek ez dirudite garrantzitsuak...</p>
      </div>
    </div>

    <div id="jolasaBukatutaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Ordenagiluarekin bukatu duzu</p>
      </div>
    </div>
  </div>
</template>

<script>
import Juego4 from "./juego4.vue";
import Denbora from "./denbora.vue";
import Irten from "./jolasakIrten.vue";
import Pista from "./pistak.vue";
import route from "../../vendor/tightenco/ziggy";

export default {
  name: "sotoaClick",
  props: {
    urlimg: String,
    partida: Object,
    pruebas: Array,
  },
  components: {
    Juego4,
    Denbora,
    Irten,
    Pista,
  },
  data() {
    return {
      objektuak: [
        // * Ordenagailua
        { areaTop: 36, areaLeft: 28.5, areaWidth: 16, areaHeight: 19 },
        // * Irteera
        { areaTop: 32, areaLeft: 56, areaWidth: 4, areaHeight: 15 },
        // * Liburutegia1
        { areaTop: 32.5, areaLeft: 45.1, areaWidth: 9, areaHeight: 10 },
        // * Liburutegia2
        { areaTop: 42.5, areaLeft: 49.1, areaWidth: 5, areaHeight: 8 },
        // * Argia
        { areaTop: 42.5, areaLeft: 45.1, areaWidth: 4, areaHeight: 9 },
        // * Liburutegia Atzekaldea
        { areaTop: 32, areaLeft: 61, areaWidth: 8, areaHeight: 13 },
        // * Ate itxia
        { areaTop: 29, areaLeft: 74, areaWidth: 5, areaHeight: 24 },
        // * Mahaiko paperak
        { areaTop: 58, areaLeft: 28, areaWidth: 14.5, areaHeight: 15 },
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
          // Div-ak lortu
          let liburutegiaDiv = document.getElementById("liburutegiaDiv");
          let argiaDiv = document.getElementById("argiaDiv");
          let atzekaldekoLiburutegiaDiv = document.getElementById(
            "atzekaldekoLiburutegiaDiv"
          );
          let ateaItxiaDiv = document.getElementById("ateaItxiaDiv");
          let paperakDiv = document.getElementById("paperakDiv");
          let jolasaBukatutaDiv = document.getElementById("jolasaBukatutaDiv");

          if (i == 0) {
            // * Ordenagailua
            for (let i = 0; i < this.pruebas.length; i++) {
              if (this.pruebas[i].izena == "prueba4") {
                // Beste testuak kendu
                liburutegiaDiv.classList.remove("block");
                liburutegiaDiv.classList.add("hidden");
                argiaDiv.classList.remove("block");
                argiaDiv.classList.add("hidden");
                atzekaldekoLiburutegiaDiv.classList.remove("block");
                atzekaldekoLiburutegiaDiv.classList.add("hidden");
                ateaItxiaDiv.classList.remove("block");
                ateaItxiaDiv.classList.add("hidden");
                paperakDiv.classList.remove("block");
                paperakDiv.classList.add("hidden");
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
            // * Irteera
            window.location.href = route("hasiera", this.partida.id);
          } else if (i == 2 || i == 3) {
            // * Liburutegia
            // Liburutegiako testua atera
            liburutegiaDiv.classList.remove("hidden");
            liburutegiaDiv.classList.add("block");
            liburutegiaDiv.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            argiaDiv.classList.remove("block");
            argiaDiv.classList.add("hidden");
            atzekaldekoLiburutegiaDiv.classList.remove("block");
            atzekaldekoLiburutegiaDiv.classList.add("hidden");
            ateaItxiaDiv.classList.remove("block");
            ateaItxiaDiv.classList.add("hidden");
            paperakDiv.classList.remove("block");
            paperakDiv.classList.add("hidden");
            jolasaBukatutaDiv.classList.remove("block");
            jolasaBukatutaDiv.classList.add("hidden");

            setTimeout(() => {
              liburutegiaDiv.classList.remove("block");
              liburutegiaDiv.classList.add("hidden");
              liburutegiaDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 4) {
            // * Argia
            // Argiaren testua atera
            argiaDiv.classList.remove("hidden");
            argiaDiv.classList.add("block");
            argiaDiv.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            liburutegiaDiv.classList.remove("block");
            liburutegiaDiv.classList.add("hidden");
            atzekaldekoLiburutegiaDiv.classList.remove("block");
            atzekaldekoLiburutegiaDiv.classList.add("hidden");
            ateaItxiaDiv.classList.remove("block");
            ateaItxiaDiv.classList.add("hidden");
            paperakDiv.classList.remove("block");
            paperakDiv.classList.add("hidden");
            jolasaBukatutaDiv.classList.remove("block");
            jolasaBukatutaDiv.classList.add("hidden");

            setTimeout(() => {
              argiaDiv.classList.remove("block");
              argiaDiv.classList.add("hidden");
              argiaDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 5) {
            // * Liburutegia Atzekaldea
            // Atzekaldeko liburutegiko testua atera
            atzekaldekoLiburutegiaDiv.classList.remove("hidden");
            atzekaldekoLiburutegiaDiv.classList.add("block");
            atzekaldekoLiburutegiaDiv.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            liburutegiaDiv.classList.remove("block");
            liburutegiaDiv.classList.add("hidden");
            argiaDiv.classList.remove("block");
            argiaDiv.classList.add("hidden");
            ateaItxiaDiv.classList.remove("block");
            ateaItxiaDiv.classList.add("hidden");
            paperakDiv.classList.remove("block");
            paperakDiv.classList.add("hidden");
            jolasaBukatutaDiv.classList.remove("block");
            jolasaBukatutaDiv.classList.add("hidden");

            setTimeout(() => {
              atzekaldekoLiburutegiaDiv.classList.remove("block");
              atzekaldekoLiburutegiaDiv.classList.add("hidden");
              atzekaldekoLiburutegiaDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 6) {
            // * Ate itxia
            // Atea itxita dagoela erakusten duen testua
            ateaItxiaDiv.classList.remove("hidden");
            ateaItxiaDiv.classList.add("block");
            ateaItxiaDiv.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            liburutegiaDiv.classList.remove("block");
            liburutegiaDiv.classList.add("hidden");
            argiaDiv.classList.remove("block");
            argiaDiv.classList.add("hidden");
            atzekaldekoLiburutegiaDiv.classList.remove("block");
            atzekaldekoLiburutegiaDiv.classList.add("hidden");
            paperakDiv.classList.remove("block");
            paperakDiv.classList.add("hidden");
            jolasaBukatutaDiv.classList.remove("block");
            jolasaBukatutaDiv.classList.add("hidden");

            setTimeout(() => {
              ateaItxiaDiv.classList.remove("block");
              ateaItxiaDiv.classList.add("hidden");
              ateaItxiaDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 7) {
            // * Mahaiko paperak
            // Paperen testua atera
            paperakDiv.classList.remove("hidden");
            paperakDiv.classList.add("block");
            paperakDiv.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            liburutegiaDiv.classList.remove("block");
            liburutegiaDiv.classList.add("hidden");
            argiaDiv.classList.remove("block");
            argiaDiv.classList.add("hidden");
            atzekaldekoLiburutegiaDiv.classList.remove("block");
            atzekaldekoLiburutegiaDiv.classList.add("hidden");
            ateaItxiaDiv.classList.remove("block");
            ateaItxiaDiv.classList.add("hidden");
            jolasaBukatutaDiv.classList.remove("block");
            jolasaBukatutaDiv.classList.add("hidden");

            setTimeout(() => {
              paperakDiv.classList.remove("block");
              paperakDiv.classList.add("hidden");
              paperakDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
          }
          return;
        }
      }
    },
  },
};
</script>
