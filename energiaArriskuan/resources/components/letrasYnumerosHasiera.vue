<template>
  <div>
    <div class="flex items-center justify-center gap-10 rounded">
      <div class="marron p-3">
        <img class="relative h-48 w-auto" src="../../public/images/letrasYnumeros.png" />
      </div>
      <img
        @click="closeGame"
        id="close-img"
        class="close-img"
        src="../../public/images/cerrar.png"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "letrasYnumerosHasiera",

  props: {},

  computed: {},

  methods: {
    closeGame() {
      document.getElementById("letralYnumerosDiv").classList.remove("block");
      document.getElementById("letralYnumerosDiv").classList.add("hidden");
    },
  },
};
</script>
