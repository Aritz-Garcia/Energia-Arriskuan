<template>
    <div class="sotoaPanelLetra text-4xl bg-black p-3 rounded-xl">
        <div id="denboraStringDiv" :style="{ 'animation' : estilo }">
            {{ denborarenString }}
        </div>
    </div>

</template>

<script>
import axios from 'axios';
import route from '../../vendor/tightenco/ziggy/src/js';

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
            estilo: "",
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
                    this.gameOver();
                } else {
                    if (this.denbora <= 300) {
                        document.getElementById("denboraStringDiv").classList.add("text-red-600");
                        this.estilo = "denborabostmin 1.5s infinite";
                    }
                    this.denbora--;
                    this.denboraStringEgin();
                    this.gorderDb();
                }
                this.$cookies.set("denbora", this.denbora, '365d');
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
            window.location.href = route('gameOver', this.partida);
        }
    },
}
</script>

<style>

</style>
