<template>
  <div>
    <img
      :src="urlimg"
      @click.prevent="clickImagen"
      alt="Img"
      style="width: 100%; height: 100vh"
    />

    <div id="pelotasDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Saskibaloiko baloiak</p>
      </div>
    </div>

    <div id="pelucheDiv" class="hidden">
      <div
        class="absolute top-1/2 left-1/2 text-white bg-black p-5 rounded text-center ateaItxiaText"
      >
        <p>Hartz panpina</p>
      </div>
    </div>

    <div id="simbolosDiv" class="hidden">
        <Papera :simbolos=simbolo></Papera>
    </div>
  </div>
</template>

<script>
import Papera from "./papelesPatio.vue";
import route from '../../vendor/tightenco/ziggy';

export default {
    name: 'patioaClick',
    components: {
        Papera,
    },
    props: {
        urlimg: String,
        partida: Object,
        pruebas: Array,
    },
    data () {
        return {
            objektuak: [
                // * Atea
                {areaTop: 52, areaLeft: 87, areaWidth: 7, areaHeight: 18},
                // * Saskibaloiko baloiak
                {areaTop: 70, areaLeft: 40.2, areaWidth: 3.5, areaHeight: 5},
                // * Saskibaloiko baloiak
                {areaTop: 63, areaLeft: 51, areaWidth: 2.5, areaHeight: 4},
                // * Saskibaloiko baloiak
                {areaTop: 65, areaLeft: 63, areaWidth: 4, areaHeight: 5},
                // * Peluche
                {areaTop: 65, areaLeft: 53.5, areaWidth: 2.9, areaHeight: 5},
                // * Simbolo1
                {areaTop: 71, areaLeft: 76.5, areaWidth: 6, areaHeight: 6},
                // * Simbolo2
                {areaTop: 79, areaLeft: 82, areaWidth: 5.5, areaHeight: 5},
                // * Simbolo3
                {areaTop: 62, areaLeft: 75, areaWidth: 3.5, areaHeight: 5},
                // * Simbolo4
                {areaTop: 70, areaLeft: 36, areaWidth: 3.5, areaHeight: 5},
            ],
            simbolo: "",
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
                        // * Atea
                        window.location.href = route('hasiera', this.partida.id);

                    } else if (i == 1 || i == 2 || i == 3) {
                        // * Liburutegia
                        // Liburutegiako testua atera
                        pelotasDiv.classList.remove('hidden');
                        pelotasDiv.classList.add('block');
                        pelotasDiv.classList.add('animate__ateaItxia__text');

                        // Beste testuak kendu
                        pelucheDiv.classList.remove('block');
                        pelucheDiv.classList.add('hidden');

                        setTimeout(() => {
                            pelotasDiv.classList.remove('block');
                            pelotasDiv.classList.add('hidden');
                            pelotasDiv.classList.remove('animate__ateaItxia__text');
                        }, 4900);

                    } else if (i == 4) {
                        // * Peluche
                        // Argiaren testua atera
                        pelucheDiv.classList.remove('hidden');
                        pelucheDiv.classList.add('block');
                        pelucheDiv.classList.add('animate__ateaItxia__text');

                        // Beste testuak kendu
                        pelotasDiv.classList.remove('block');
                        pelotasDiv.classList.add('hidden');

                        setTimeout(() => {
                            pelucheDiv.classList.remove('block');
                            pelucheDiv.classList.add('hidden');
                            pelucheDiv.classList.remove('animate__ateaItxia__text');
                        }, 4900);
                    } else if (i == 5) {
                    // * Simbolo 1
                    console.log("Simbolo 1");
                    this.simbolo = "simbolo1";
                    simbolosDiv.classList.remove('hidden');
                    simbolosDiv.classList.add('block');

                    } else if (i == 6) {
                        // * Simbolo 2
                        // Argiaren testua atera
                        // simbolosDiv.classList.remove('hidden');
                        // simbolosDiv.classList.add('block');
                        // simbolosDiv.classList.add('animate__ateaItxia__text');

                        // // Beste testuak kendu
                        // pelotasDiv.classList.remove('block');
                        // pelotasDiv.classList.add('hidden');

                        // pelucheDiv.classList.remove('block');
                        // pelucheDiv.classList.add('hidden');

                        // setTimeout(() => {
                        //     simbolosDiv.classList.remove('block');
                        //     simbolosDiv.classList.add('hidden');
                        //     simbolosDiv.classList.remove('animate__ateaItxia__text');
                        // }, 4900);

                        console.log("Simbolo 2");
                        this.simbolo = "simbolo2";
                        simbolosDiv.classList.remove('hidden');
                        simbolosDiv.classList.add('block');

                    } else if (i == 7) {
                        // * Simbolo 3
                        console.log("Simbolo 3");
                        this.simbolo = "simbolo3";
                        simbolosDiv.classList.remove('hidden');
                        simbolosDiv.classList.add('block');

                    }else if (i == 8) {
                        // * Simbolo 4
                        console.log("Simbolo 4");
                        this.simbolo = "simbolo4";
                        simbolosDiv.classList.remove('hidden');
                        simbolosDiv.classList.add('block');sDiv3.classList.add('hidden');
                    }

                    return;
                }
            }
        },
    },
};
</script>
