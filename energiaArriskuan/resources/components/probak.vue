<template>
    <div class="flex">
        <img v-for="i in ondo" :key="i" src="../../public/images/jolasak/verde.png" alt="Ondo" class="w-12 h-12">
        <img v-for="i in txarto" :key="i" src="../../public/images/jolasak/rojo.png" alt="Ondo" class="w-12 h-12">
    </div>
</template>

<script>
    export default {
        name: "probak",
        props: {
            probak: Array,
        },
        data() {
            return {
                ondoKomp: 0,
                txartoKomp: 0,
            }
        },
        computed: {
            ondo() {
                this.ondoKomp = 0;
                for (let i = 0; i < this.probak.length; i++) {
                    if (this.probak[i].bukatuta == 1) {
                        this.ondoKomp++;
                    }
                }
                return this.ondoKomp;
            },
            txarto() {
                this.txartoKomp = 0;
                for (let i = 0; i < this.probak.length; i++) {
                    if (this.probak[i].bukatuta == 0) {
                        this.txartoKomp++;
                    }
                }
                return this.txartoKomp;
            }
        },
    }
</script>
