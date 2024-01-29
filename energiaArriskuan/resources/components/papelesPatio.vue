<template>
  <div>
    <div>
        <img
        @click="closeGame"
        id="close-img"
        class="close-img ms-5 m-0"
        src="../../public/images/cerrar.png"/>

        <div class="flex items-center">
            <button class="text-3xl me-4 testu-kolore-nagusia atzekaldeko-kolore-oinarria p-2 px-4 rounded-xl" @click.prevent="kendu">&#129136;</button>
            <div class="relative">
                <img src="../../public/images/juego2/papelPatio.png" alt="Papera" class="w-72">
                <p class="absolute top-1/2 left-1/2 text-7xl paperaPatio">{{ textoMostrado }}</p>
            </div>
            <button class="text-3xl ms-4 testu-kolore-nagusia atzekaldeko-kolore-oinarria p-2 px-4 rounded-xl" @click.prevent="gehitu">&#129138;</button>
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
  data() {
    return {
        berria: false,
        zenb: 0,
    };
  },
  computed: {
    textoMostrado() {
        if (this.berria == false) {
            this.zenb = this.zenbakia;

            if (this.zenbakia == 1) {
                return "Φ";
            } else if (this.zenbakia == 2) {
                return "λ";
            } else if (this.zenbakia == 3) {
                return "〆";
            } else if (this.zenbakia == 4) {
                return "Թ";
            }
        } else {
            if (this.zenb == 1) {
                return "Φ";
            } else if (this.zenb == 2) {
                return "λ";
            } else if (this.zenb == 3) {
                return "〆";
            } else if (this.zenb == 4) {
                return "Թ";
            }
        }

    },
  },
  methods: {
    closeGame() {
        this.berria = false;
        document.getElementById("simbolosDiv").classList.remove("block");
        document.getElementById("simbolosDiv").classList.add("hidden");
    },
    gehitu() {
        if (this.zenb == 4) {
            this.zenb = 1;
        } else {
            this.zenb++;
        }

        this.berria = true;
    },
    kendu() {
        if (this.zenb == 1) {
            this.zenb = 4;
        } else {
            this.zenb--;
        }

        this.berria = true;
    },

  },
};
</script>
