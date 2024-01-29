<template>
    <div>
        <div>
            <div id="denbora" class="text-center absolute top-0 left-1/2 denboraErdian my-3 text-white text-xl z-50">
                <Denbora :denboraPart=partida.denbora :partida=partida.id></Denbora>
            </div>
        </div>

        <div class="absolute top-0 right-0 z-50">
            <Pista :probak=pruebas lugar="hasiera"></Pista>
        </div>

        <img
            :src="urlimg"
            @click.prevent="clickImagen"
            alt="Img"
            style="width: 100%; height: 100vh"
        />
    </div>
  </template>

  <script>
  import Denbora from "./denbora.vue";
  import Pista from "./pistak.vue";

  export default {
      name: "hasieraClick",
      props: {
          urlimg: String,
          partida: Object,
          pruebas: Array,
      },
      components: {
          Denbora,
          Pista,
      }
  };
  </script>
