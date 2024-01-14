<template>

    <div>
        <img src="images/hasiera.png" @click.prevent="clickImagen" alt="Img" style="width: 100%; height:100vh">

        <div id="juego3div" class="hidden">
            <div id="juego3">

            </div>
        </div>
    </div>

</template>

<script>
    import { createApp } from 'vue'
    import juego3 from "./juego3.vue";

    document.addEventListener('DOMContentLoaded', function() {
        const juego3App = createApp(juego3);
        juego3App.mount("#juego3");
    });

    export default {
        name: 'hasieraClick',
        data () {
            return {
                objektuak: [
                    // Almacen
                    {areaTop: 40, areaLeft: 26, areaWidth: 8, areaHeight: 27},
                    // Sotoa
                    {areaTop: 40, areaLeft: 66, areaWidth: 8, areaHeight: 27},
                    // Techo
                    {areaTop: 35.2, areaLeft: 45.1, areaWidth: 4, areaHeight: 10},
                    // Jardin
                    {areaTop: 43, areaLeft: 37, areaWidth: 3, areaHeight: 18},
                    // Erlojua
                    {areaTop: 36, areaLeft: 53.7, areaWidth: 1.7, areaHeight: 2},

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
                            // Alamcen
                            console.log("Almacen");
                        } else if (i == 1) {
                            // Sotoa
                            console.log("Sotoa");

                            document.getElementById('juego3div').classList.remove('hidden');
                            document.getElementById('juego3div').classList.add('block');
                        } else if (i == 2) {
                            //Techo
                            console.log("Techo");
                        } else if (i == 3) {
                            // Jardin
                            console.log("Jardin");
                        } else if (i == 4) {
                            // Erlojua
                            console.log("Erlojua");
                        }

                        return;
                    }
                }
            }
        },
    }
</script>
