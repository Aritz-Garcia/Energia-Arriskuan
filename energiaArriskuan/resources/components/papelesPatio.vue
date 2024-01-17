<template>
    <div class="absolute text-white top-0">
        <p id="idatziP"></p>
    </div>

</template>

<script>
export default {
    name: "papelesPatio",
    props:{
        simbolos : String,
    },
    data() {
        return {

        }
    },
    mounted: {
        escribir() {
            idatziP.innerHTML = this.simbolos;
        }
    }
  }
</script>
