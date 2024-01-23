<template>
    <div>
      <div>
          <div id="denbora" class="text-center absolute top-0 left-1/2 denboraErdian my-3 text-white text-xl z-50">
              <Denbora :denboraPart=partida.denbora :partida=partida.id></Denbora>
          </div>
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

  export default {
      name: "hasieraClick",
      props: {
          urlimg: String,
          partida: Object,
          pruebas: Array,
      },
      components: {
          Denbora,
      }
  };
  </script>
