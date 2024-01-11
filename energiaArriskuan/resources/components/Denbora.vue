<template>

    <p id="denbora"></p>

</template>

<script>

import axios from 'axios';

export default {
    name: 'Denbora',
    data() {
        return {
            denboraString: '20:00',
            denboraInterval: null
        }
    },
    mounted() {
        this.denboraInterval = setInterval(() => {
            this.denbora--;
            this.denboraString = this.getDenboraString();
        }, 1000);
    },
    methods: {
        getDenboraString() {
            let min = Math.floor(this.denbora / 60);
            let seg = this.denbora % 60;
            return (min < 10 ? '0' + min : min) + ':' + (seg < 10 ? '0' + seg : seg);
        },
        getDenbora() {
            var denbora = "http://127.0.0.1:8000/api/partida/";
        }
    }
}
</script>

<style>

</style>
