<template>
    <div>
        <div>
            {{ denborarenString }}
        </div>
  </div>

</template>

<script>
import Cookies from 'js-cookie';
import axios from 'axios';

export default {
    name: 'denbora',
    props: {
        partida: Number,
        denboraPart: String,
    },
    mounted() {
        this.startDenbora();
        this.cookie = Cookies.get('denbora');
    },
    data() {
        return {
            denbora: 0,
            denborarenString: "",
            intervalo: null,
            cookie: null,
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
                    this.setCookie();
                }
            }, 1000);

            setInterval(() => {
                if (this.denbora != 0) {
                    this.gorderDb();
                } else {
                    clearInterval();
                }
            }, 2000);
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
        setCookie() {
            Cookies.set('denbora', this.denbora, { expires: 5256000 });
        },
        async gorderDb() {
            let cookie = Cookies.get('denbora');
            axios.post('../guardar-cookie', {
                valor: cookie,
                partidaId: this.partida,
            });
        }
    },
}
</script>

<style>

</style>
