<template>
    <div class="sotoaPanelLetra text-3xl">
        <div>
            {{ denborarenString }}
        </div>
    </div>

</template>

<script>
import axios from 'axios';

export default {
    name: 'denbora',
    props: {
        partida: Number,
        denboraPart: String,
    },
    mounted() {
        this.startDenbora();
    },
    data() {
        return {
            denbora: 0,
            denborarenString: "",
            intervalo: null,
        }
    },
    methods: {
        getDenbora() {
            let denboraString = this.denboraPart;
            let denboraSplit = denboraString.split(":");
            let denboraInt = parseInt(denboraSplit[0]) * 60 + parseInt(denboraSplit[1]);
            this.denbora = denboraInt;
        },
        startDenbora() {
            this.getDenbora();
            this.intervalo = setInterval(() => {

                if (this.denbora == 0) {
                    this.terminarIntervalo();
                } else {
                    this.denbora--;
                    this.denboraStringEgin();
                    this.gorderDb();
                }
            }, 1000);
        },
        denboraStringEgin() {
            let min = Math.floor(this.denbora / 60);
            let seg = this.denbora % 60;
            if (min < 10) {
                min = "0" + min;
            }
            if (seg < 10) {
                seg = "0" + seg;
            }
            this.denborarenString = min + ":" + seg;
        },
        terminarIntervalo() {
            clearInterval(this.intervalo);
        },
        async gorderDb() {
            let cookie = this.denbora;
            axios.post('../denbora-gorde', {
                valor: cookie,
                partidaId: this.partida,
            });
        },
        gameOver() {
            // TODO - Game over
        }
    },
}
</script>

<style>

</style>
