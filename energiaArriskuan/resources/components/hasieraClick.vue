<template>
    <div>
      <div>
          <div id="denbora" class="text-center absolute top-0 left-1/2 my-3 text-white text-xl z-50">
              <Denbora :denboraPart=partida.denbora :partida=partida.id></Denbora>
          </div>
      </div>
  
      <div id="atekoPaperaDiv" class="hidden">
          <div class="absolute top-1/2 left-1/2 atekoPapera">
              <AtekoPapera :testua=testua />
          </div>
      </div>
  
      <img
        :src="urlimg"
        @click.prevent="clickImagen"
        alt="Img"
        style="width: 100%; height: 100vh"
      />
  
      <div id="juego3div" class="hidden">
        <div id="juego3">
          <Juego3 :partida="partida.id"></Juego3>
        </div>
      </div>
  
      <!-- Erlojua klikatzean erakusten den testua -->
      <div id="erlojuaDiv" class="hidden">
        <div
          class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
        >
          <p id="erlojuaPText"></p>
        </div>
      </div>
  
      <!-- Atea itxita dagoela erakusten duen testua -->
      <div id="ateaItxiakDiv" class="hidden">
        <div
          class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
        >
          <p>Atea itxita dago</p>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Juego3 from "./juego3.vue";
  import Denbora from "./denbora.vue";
  import AtekoPapera from "./panelPuerta.vue";
  import route from "../../vendor/tightenco/ziggy";
  
  export default {
      name: "hasieraClick",
      props: {
          urlimg: String,
          partida: Object,
          pruebas: Array,
      },
      components: {
          Juego3,
          Denbora,
          AtekoPapera,
      },
    data() {
      return {
        objektuak: [
          // * Almacen
          { areaTop: 40, areaLeft: 26, areaWidth: 8, areaHeight: 27 },
          // * Sotoa
          { areaTop: 40, areaLeft: 66, areaWidth: 8, areaHeight: 27 },
          // * Techo
          { areaTop: 35.2, areaLeft: 45.1, areaWidth: 4, areaHeight: 10 },
          // * Jardin
          { areaTop: 43.5, areaLeft: 37, areaWidth: 3, areaHeight: 18 },
          // * Erlojua
          { areaTop: 36, areaLeft: 53.7, areaWidth: 1.7, areaHeight: 2 },
          // * Ate itxiak
          { areaTop: 46.1, areaLeft: 50.1, areaWidth: 7.3, areaHeight: 10 },
          // * Biltegia papera
          { areaTop: 37, areaLeft: 29.2, areaWidth: 2, areaHeight: 2 },
          // * Jardin papera
          { areaTop: 42, areaLeft: 37.7, areaWidth: 1.3, areaHeight: 1.3 },
          // * Sotoa papera
          { areaTop: 36.8, areaLeft: 67.5, areaWidth: 2.4, areaHeight: 2.7 },
          // * Techo papera
          { areaTop: 34, areaLeft: 46.3, areaWidth: 1.8, areaHeight: 1 },
        ],
        testua: "",
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
              // * Almacen
              window.location.href = route("biltegia", this.partida.id);
            } else if (i == 1) {
              // * Sotoa
              for (let i = 0; i < this.pruebas.length; i++) {
                if (this.pruebas[i].izena == "prueba3") {
                  if (this.pruebas[i].bukatuta) {
                    // Jolasa bukatuta
                    window.location.href = route("sotoa", this.partida.id);
                  } else {
                    // Jolasa egin gabe
                    // Beste orrialdeak kendu
                    document.getElementById("ateaItxiakDiv").classList.remove("block");
                    document.getElementById("erlojuaDiv").classList.remove("block");
                    document.getElementById("ateaItxiakDiv").classList.add("hidden");
                    document.getElementById("erlojuaDiv").classList.add("hidden");
  
                    // 3. jolasa egin gabe badago
                    document.getElementById("juego3div").classList.remove("hidden");
                    document.getElementById("juego3div").classList.add("block");
                  }
                  return;
                }
              }
            } else if (i == 2) {
              // * Techo
              window.location.href = route("teilatua", this.partida.id);
            } else if (i == 3) {
              // * Jardin
              window.location.href = route("patio", this.partida.id);
            } else if (i == 4) {
              // * Erlojua
              // Erlojua klikatzean erakusten den testua
              document.getElementById("erlojuaDiv").classList.remove("hidden");
              document.getElementById("erlojuaDiv").classList.add("block");
              document
                .getElementById("erlojuaDiv")
                .classList.add("animate__ateaItxia__text");
              document.getElementById("erlojuaPText").innerHTML = this.eguna() + "ak dira";
  
              // Beste testuak kendu
              document.getElementById("ateaItxiakDiv").classList.remove("block");
              document.getElementById("ateaItxiakDiv").classList.add("hidden");
  
              setTimeout(() => {
                document.getElementById("erlojuaDiv").classList.remove("block");
                document.getElementById("erlojuaDiv").classList.add("hidden");
                document
                  .getElementById("erlojuaDiv")
                  .classList.remove("animate__ateaItxia__text");
              }, 4900);
            } else if (i == 5) {
              // * Ate itxiak
              // Atea itxita dagoela erakusten duen testua
              document.getElementById("ateaItxiakDiv").classList.remove("hidden");
              document.getElementById("ateaItxiakDiv").classList.add("block");
              document
                .getElementById("ateaItxiakDiv")
                .classList.add("animate__ateaItxia__text");
  
              // Beste testuak kendu
              document.getElementById("erlojuaDiv").classList.remove("block");
              document.getElementById("erlojuaDiv").classList.add("hidden");
  
              setTimeout(() => {
                document.getElementById("ateaItxiakDiv").classList.remove("block");
                document.getElementById("ateaItxiakDiv").classList.add("hidden");
                document
                  .getElementById("ateaItxiakDiv")
                  .classList.remove("animate__ateaItxia__text");
              }, 4900);
            } else if (i == 6) {
              // * Biltegia papera
              this.testua = "BILTEGIA";
              document.getElementById("atekoPaperaDiv").classList.remove("hidden");
              document.getElementById("atekoPaperaDiv").classList.add("block");
            } else if (i == 7) {
              // * Jardin papera
              this.testua = "PATIOA";
              document.getElementById("atekoPaperaDiv").classList.remove("hidden");
              document.getElementById("atekoPaperaDiv").classList.add("block");
            } else if (i == 8) {
              // * Sotoa papera
              this.testua = "SOTOA";
              document.getElementById("atekoPaperaDiv").classList.remove("hidden");
              document.getElementById("atekoPaperaDiv").classList.add("block");
            } else if (i == 9) {
              // * Techo papera
              this.testua = "TEILATUA";
              document.getElementById("atekoPaperaDiv").classList.remove("hidden");
              document.getElementById("atekoPaperaDiv").classList.add("block");
            }
  
            return;
          }
        }
      },
      eguna() {
        let eguna = new Date();
        let ordua = eguna.getHours();
        let minutua = eguna.getMinutes();
        if (minutua < 10) {
          minutua = "0" + minutua;
        }
        return ordua + ":" + minutua;
      },
    },
  };
  </script>
  