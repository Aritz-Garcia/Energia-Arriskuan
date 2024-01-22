<template>
  <div class="absolute top-1/2 left-1/2">
    <div class="flex items-center justify-center absolute gap-10 text-black rounded ateaItxiaText text-[50px]">

        <p id="text" class="pl-14 pr-10 pt-5 pb-4">{{ textoMostrado }}</p>

        <img
        @click="closeGame"
        id="close-img"
        class="close-img"
        src="../../public/images/cerrar.png"/>

    </div>
  </div>
</template>

<script>
export default {
  name: "papelesPatio",

  props: {
    simbolos: String,
  },

  computed: {
    textoMostrado() {
      if (this.simbolos === "simbolo1") {
        return "Φ";
      } else if (this.simbolos === "simbolo2") {
        return "λ";
      } else if (this.simbolos === "simbolo3") {
        return "〆";
      } else if (this.simbolos === "simbolo4") {
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
