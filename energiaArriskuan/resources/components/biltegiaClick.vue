<template>

    <div>
        <img :src=urlimg @click.prevent="clickImagen" alt="Img" style="width: 100%; height:100vh">

        

    </div>

</template>

<script>
    import route from '../../vendor/tightenco/ziggy/src/js';

    export default {
        name: 'biltegiaClick',
        props: {
            urlimg: String,
            partida: Object,
            pruebas: Array,
        },
        data () {
            return {
                objektuak: [
                    // * Mesa
                    {areaTop: 59, areaLeft: 34, areaWidth: 18, areaHeight: 16},
                    // * Puerta
                    {areaTop: 40, areaLeft: 60, areaWidth: 5.5, areaHeight: 18},

                ],
            }
        },
        methods: {
            clickImagen(event) {
                let posX = event.clientX - event.target.offsetLeft;
                let posY = event.clientY - event.target.offsetTop;

                for (let i = 0; i < this.objektuak.length; i++) {
                    var areaTopAbs = (this.objektuak[i].areaTop / 100) * event.target.height;
                    var areaLeftAbs = (this.objektuak[i].areaLeft / 100) * event.target.width;
                    var areaWidthAbs = (this.objektuak[i].areaWidth / 100) * event.target.width;
                    var areaHeightAbs = (this.objektuak[i].areaHeight / 100) * event.target.height;

                    if (posY >= areaTopAbs && posY <= areaTopAbs + areaHeightAbs &&
                        posX >= areaLeftAbs && posX <= areaLeftAbs + areaWidthAbs) {
                        if (i == 0) {
                            // * Mesa
                            console.log("ebjwyfgveu");
                        }else if(i == 1){
                            window.location.href=route("hasiera", this.partida.id);
                        }
                        return;
                    }
                }
            },
            eguna() {
                let eguna = new Date();
                let ordua = eguna.getHours();
                let minutua = eguna.getMinutes();
                return ordua + ":" + minutua;
            }
        },
    }
</script>
