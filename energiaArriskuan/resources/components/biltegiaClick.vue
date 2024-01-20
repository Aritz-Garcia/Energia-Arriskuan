<template>
  <div>
    <div>
        <div id="denbora" class="text-center absolute top-0 left-1/2 my-3 text-white text-xl">
            <Denbora :denboraPart=partida.denbora :partida=partida.id></Denbora>
        </div>
    </div>

    <img
      :src="urlimg"
      @click.prevent="clickImagen"
      alt="Img"
      style="width: 100%; height: 100vh"
    />

    <!-- estantería 1 dagoela erakusten duen testua -->
    <div id="estanteria1" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Kutxa hutsak baino ez daude</p>
      </div>
    </div>

    <!-- estantería 2 dagoela erakusten duen testua -->
    <div id="estanteria2" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Pieza zaharrak daude</p>
      </div>
    </div>

    <!-- estantería 3 dagoela erakusten duen testua -->
    <div id="estanteria3" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Ez dago ezer interesgarririk</p>
      </div>
    </div>

    <!-- suelo dagoela erakusten duen testua -->
    <div id="suelo" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Zaborra besterik ez dago</p>
      </div>
    </div>

    <!-- exit dagoela erakusten duen testua -->
    <div id="exit" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Exit</p>
      </div>
    </div>

    <div id="erlojuaDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p id="erlojuaPText"></p>
      </div>
    </div>
  </div>
</template>

<script>
import Denbora from "./denbora.vue";
import route from "../../vendor/tightenco/ziggy/src/js";

export default {
  name: "biltegiaClick",
  props: {
    urlimg: String,
    partida: Object,
    pruebas: Array,
  },
  components: {
        Denbora,
    },
  data() {
    return {
      objektuak: [
        // * Mesa
        { areaTop: 59, areaLeft: 34, areaWidth: 18, areaHeight: 16 },
        // * Puerta
        { areaTop: 40, areaLeft: 60, areaWidth: 5.5, areaHeight: 18 },
        // * Estantería 1
        { areaTop: 20, areaLeft: 1, areaWidth: 18, areaHeight: 55 },
        // * Estantería 2
        { areaTop: 35, areaLeft: 25, areaWidth: 30, areaHeight: 23 },
        // * Estantería 3
        { areaTop: 20, areaLeft: 74, areaWidth: 14, areaHeight: 40 },
        // * Suelo
        { areaTop: 76, areaLeft: 34, areaWidth: 35, areaHeight: 15 },
        // * Exit
        { areaTop: 23, areaLeft: 47, areaWidth: 4, areaHeight: 7 },
        // * Erlojua
        { areaTop: 30.5, areaLeft: 60.5, areaWidth: 3.5, areaHeight: 4.5 },
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
            // * Mesa
            console.log("ebjwyfgveu");
          } else if (i == 1) {
            window.location.href = route("hasiera", this.partida.id);
          } else if (i == 2) {
            // * Estantería 1
            estanteria1.classList.remove("hidden");
            estanteria1.classList.add("block");
            estanteria1.classList.add("animate__ateaItxia__text");

            // * Beste testuak kendu
            estanteria2.classList.remove("block");
            estanteria2.classList.add("hidden");

            estanteria3.classList.remove("block");
            estanteria3.classList.add("hidden");

            suelo.classList.remove("block");
            suelo.classList.add("hidden");

            exit.classList.remove("block");
            exit.classList.add("hidden");

            erlojuaDiv.classList.remove("block");
            erlojuaDiv.classList.add("hidden");

            setTimeout(() => {
              estanteria1.classList.remove("block");
              estanteria1.classList.add("hidden");
              estanteria1.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 3) {
            // * Estantería 2
            estanteria2.classList.remove("hidden");
            estanteria2.classList.add("block");
            estanteria2.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            estanteria1.classList.remove("block");
            estanteria1.classList.add("hidden");

            estanteria3.classList.remove("block");
            estanteria3.classList.add("hidden");

            suelo.classList.remove("block");
            suelo.classList.add("hidden");

            exit.classList.remove("block");
            exit.classList.add("hidden");

            erlojuaDiv.classList.remove("block");
            erlojuaDiv.classList.add("hidden");

            setTimeout(() => {
              estanteria2.classList.remove("block");
              estanteria2.classList.add("hidden");
              estanteria2.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 4) {
            // * Estantería 3
            estanteria3.classList.remove("hidden");
            estanteria3.classList.add("block");
            estanteria3.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            estanteria1.classList.remove("block");
            estanteria1.classList.add("hidden");

            estanteria2.classList.remove("block");
            estanteria2.classList.add("hidden");

            suelo.classList.remove("block");
            suelo.classList.add("hidden");

            exit.classList.remove("block");
            exit.classList.add("hidden");

            erlojuaDiv.classList.remove("block");
            erlojuaDiv.classList.add("hidden");

            setTimeout(() => {
              estanteria3.classList.remove("block");
              estanteria3.classList.add("hidden");
              estanteria3.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 5) {
            // * Suelo
            suelo.classList.remove("hidden");
            suelo.classList.add("block");
            suelo.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            estanteria1.classList.remove("block");
            estanteria1.classList.add("hidden");

            estanteria2.classList.remove("block");
            estanteria2.classList.add("hidden");

            estanteria3.classList.remove("block");
            estanteria3.classList.add("hidden");

            exit.classList.remove("block");
            exit.classList.add("hidden");

            erlojuaDiv.classList.remove("block");
            erlojuaDiv.classList.add("hidden");

            setTimeout(() => {
              suelo.classList.remove("block");
              suelo.classList.add("hidden");
              suelo.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 6) {
            // * Exit
            exit.classList.remove("hidden");
            exit.classList.add("block");
            exit.classList.add("animate__ateaItxia__text");

            // Beste testuak kendu
            estanteria1.classList.remove("block");
            estanteria1.classList.add("hidden");

            estanteria2.classList.remove("block");
            estanteria2.classList.add("hidden");

            estanteria3.classList.remove("block");
            estanteria3.classList.add("hidden");

            suelo.classList.remove("block");
            suelo.classList.add("hidden");

            erlojuaDiv.classList.remove("block");
            erlojuaDiv.classList.add("hidden");

            setTimeout(() => {
              exit.classList.remove("block");
              exit.classList.add("hidden");
              exit.classList.remove("animate__ateaItxia__text");
            }, 4900);
          } else if (i == 7) {
            // * Erlojua
            erlojuaDiv.classList.remove("hidden");
            erlojuaDiv.classList.add("block");
            document
              .getElementById("erlojuaDiv")
              .classList.add("animate__ateaItxia__text");
            document.getElementById("erlojuaPText").innerHTML = this.eguna() + "ak dira";

            // Beste testuak kendu
            estanteria1.classList.remove("block");
            estanteria1.classList.add("hidden");

            estanteria2.classList.remove("block");
            estanteria2.classList.add("hidden");

            estanteria3.classList.remove("block");
            estanteria3.classList.add("hidden");

            suelo.classList.remove("block");
            suelo.classList.add("hidden");

            exit.classList.remove("block");
            exit.classList.add("hidden");

            setTimeout(() => {
              erlojuaDiv.classList.remove("block");
              erlojuaDiv.classList.add("hidden");
              erlojuaDiv.classList.remove("animate__ateaItxia__text");
            }, 4900);
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
