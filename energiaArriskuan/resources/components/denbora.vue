<template>
    <div>
        <div>
            {{ denborarenString }}
        </div>
  </div>

</template>

<script>

export default {
    name: 'denbora',
    props: {
        partida: String,
    },
    mounted() {
        this.startDenbora();
    },
    data() {
        return {
            denbora: 0,
            denborarenString: "",
        }
    },
    methods: {
        getDenbora() {
            console.log(this.partida);
            let denboraString = this.partida;
            let denboraSplit = denboraString.split(":");
            let denboraInt = parseInt(denboraSplit[0]) * 60 + parseInt(denboraSplit[1]);
            this.denbora = denboraInt;
        },
        startDenbora() {
            this.getDenbora();
            setInterval(() => {
                this.denbora--;
                this.denboraStringEgin();
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
        }
    },
}
</script>

<style>

</style>
