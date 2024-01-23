<template>
  <!-- <div class="absolute top-1/2 left-1/2">
    <div class="flex items-center justify-center absolute gap-10 text-black rounded ateaItxiaText text-[50px]">

        <p id="text" class="pl-14 pr-10 pt-5 pb-4">{{ textoMostrado }}</p>

        <img
        @click="closeGame"
        id="close-img"
        class="close-img"
        src="../../public/images/cerrar.png"/>

    </div>
  </div> -->
  <div>
    <div>
        <img
        @click="closeGame"
        id="close-img"
        class="close-img ms-5 m-0"
        src="../../public/images/cerrar.png"/>

        <div class="flex">
            <div class="relative">
                <img src="../../public/images/juego2/papelPatio.png" alt="Papera" class="w-72">
                <p class="absolute top-1/2 left-1/2 text-5xl paperaPatio">{{ textoMostrado }}</p>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "papelesPatio",
  props: {
    zenbakia: Number,
  },
  computed: {
    textoMostrado() {
      if (this.zenbakia == 1) {
        return "Φ";
      } else if (this.zenbakia == 2) {
        return "λ";
      } else if (this.zenbakia == 3) {
        return "〆";
      } else if (this.zenbakia == 4) {
        return "Թ";
      }
    },
  },
  methods: {
    closeGame() {
      document.getElementById("simbolosDiv").classList.remove("block");
      document.getElementById("simbolosDiv").classList.add("hidden");
    },

  },
};
</script>
