<template>
    <div class="flex items-center">
        <Probak :probak="probak" id="probakSemaforo"></Probak>
        <div
        class="ms-2 mt-2 px-5 p-3"
        >
            <img src="../../public/images/pista.png" alt="Irten" class="w-12" id="pistak" />
        </div>
    </div>

</template>

<script>
import Probak from "./probak.vue";
export default {
  name: "pistak",
  props: {
    probak: Array,
  },data(){
    return {
      lugar: "",
      actual:0,
      pistak: [
        hasiera[
          {pista:"pista1"},
          {pista:"pista2"}
        ],
        juego1[
          {pista:"pista1"},
          {pista:"pista2"}
        ],
        juego2[
          {pista:"pista1"},
          {pista:"pista2"},
          {pista:"pista3"}
        ],
        juego3[
          {pista:"pista1"},
          {pista:"pista2"}
        ],
        juego4[
          {pista:"pista1"},
          {pista:"pista2"}
        ],
      ]
    }
  },
  components: {
    Probak,
  },
  methods: {
    enseñarPista(){
      
    },
    siguientePista(){

    },
    anteriorPista(){

  }
  },
};
</script>
