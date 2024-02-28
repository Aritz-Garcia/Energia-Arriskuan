<template>
    <div>
        <div class="flex items-center">
            <Probak :probak="probak" id="probakSemaforo"></Probak>
            <div
            class="ms-2 mt-2 px-5 p-3"
            @click.prevent="confirmacion = true">
                <img src="../../public/images/pista.png" alt="Irten" class="w-12" id="pistak" />
            </div>
        </div>

      <div v-if="confirmacion" id="modal" class="fixed bg-gray-900 p-5 text-center">
          <h2 class="text-white p-10 text-xl mb-5">Ziur zaude pista erabili nahi duzula?</h2>
          <div id="botonesc" class="flex justify-center">
              <button class="font-semibold testu-kolore-oinarria atzekaldeko-kolore-nagusia hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none" @click.prevent="enseñarPista">Bai</button>
              <button class="font-semibold testu-kolore-oinarria bg-[#d90404] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none" @click.prevent="confirmacion = false">Ez</button>
          </div>
      </div>

      <!-- Denbora itzatekotan testua -->
        <Teleport to="body">
            <div v-if="abierto" id="modal" class="fixed bg-gray-900 p-5 text-center">
                <p class="text-white p-10 text-xl">{{this.mensaje}}</p>
                <button @click.prevent="quitartiempo" class="font-semibold testu-kolore-oinarria bg-[#d90404] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">Itxi</button>
            </div>
        </Teleport>

        <!-- Denbora gabe testua -->
        <Teleport to="body">
            <div v-if="abierto2" id="modal" class="fixed bg-gray-900 p-5 text-center">
                <p class="text-white p-10 text-xl">Ez daukazu denbora nahiko pista bat ikusteko</p>
                <button @click.prevent="abierto2 = false" class="font-semibold testu-kolore-oinarria bg-[#d90404] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">Itxi</button>
            </div>
        </Teleport>

        <!-- Denbora gabe testua -->
        <Teleport to="body">
            <div v-if="abierto3" id="modal" class="fixed bg-gray-900 p-5 text-center">
                <p class="text-white p-10 text-xl">Ez daukazu pista gehiagorik leku honetan</p>
                <button @click.prevent="abierto3 = false" class="font-semibold testu-kolore-oinarria bg-[#d90404] hover:bg-white hover:text-[#010440] py-2 px-4 rounded-full focus:outline-none">Itxi</button>
            </div>
        </Teleport>

    </div>




</template>
<style>

#modal {
  z-index: 999;
  top: 50%;
  left: 50%;
  width: 300px;
  border: 3px solid #0BD904;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  transform: translate(-50%, -50%);
}

#botonesc{
  gap: 20px;
}


</style>
<script>
    import Probak from "./probak.vue";
    import Denbora from "./denbora.vue";
    import route from "../../vendor/tightenco/ziggy/src/js";
    import axios from 'axios';

    export default {
        name: "pistak",
        props: {
            partida: Number,
            probak: Array,
            lugar: String
        },
        data() {
            return {
            actual:0,
            pistak: [
                {
                hasiera :[
                {pista:"Begiratu eskumaldeko koadroa"}
                ]
                },
                {
                juego1:[
                    {pista:"Eguzki-Energiarekin, elektrizitatea sortzen du eta bonbila bati elektrizitatea ematen dugunean sortzen duena da."}
                ]},
                {
                juego2:[
                    {pista:"ALFA eta BETA dira kodea sortzeko hitzak"}
                ]},
                {
                juego3:[
                    {pista:"Abatza - Konoa - Palak"}
                ]},
                {
                juego4:[
                    {pista:"Kodea iparra eta ekialde hartean dago"}
                ]},{
                patioa:[
                    {pista:"Lurrean begiratu duzu ?"}
                ]},
                {
                    klasea:[
                        {pista:"Ordenagailuan klikatu, eta lotu kolore berdina duten piezak zirkuitua osatzeko"}
                    ]
                }
            ],
            mensaje: "",
            abierto: false,
            abierto2: false,
            abierto3: false,
            confirmacion: false
            }
        },
        components: {
            Probak,
            Denbora
        },
        methods: {
            enseñarPista(){

                if (this.$cookies.get("denbora") < 300){
                    this.abierto2 = true;
                    this.confirmacion = false;
                } else {
                    this.confirmacion = false;

                    switch (this.lugar) {
                        case "hasiera":
                            for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba3") {
                                    if (this.probak[i].bukatuta) {
                                for (let i = 0; i < this.probak.length; i++) {
                                        if (this.probak[i].izena == "prueba2") {
                                    if (this.probak[i].bukatuta) {
                                        this.abierto = false;
                                        this.abierto3 = true;
                                    } else {
                                        this.mensaje = this.pistak[0].hasiera[this.actual].pista;
                                        this.abierto = true;
                                        this.abierto3 = false;
                                    }
                                }}
                                    } else {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[3].juego3[this.actual].pista;
                                    }
                                    return;
                                }
                            }
                            break;

                        case "patioa":
                            for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba2") {
                                    if (this.probak[i].bukatuta) {
                                        this.abierto = false;
                                        this.abierto3 = true;
                                    } else {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[5].patioa[this.actual].pista;
                                    }
                                    return;
                                }
                            }
                            break;

                        case "juego1":
                        for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba1") {
                                    if (this.probak[i].bukatuta) {
                                        this.abierto = false;
                                        this.abierto3 = true;
                                    } else {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[1].juego1[this.actual].pista;
                                    }
                                    return;
                                }
                            }
                            break;

                        case "juego2":
                        for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba2") {
                                    if (this.probak[i].bukatuta) {
                                        this.abierto = false;
                                        this.abierto3 = true;
                                    } else {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[2].juego2[this.actual].pista;
                                    }
                                    return;
                                }
                            }
                            break;

                        case "juego4":
                        for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba4") {
                                    if (this.probak[i].bukatuta) {
                                        this.abierto = false;
                                        this.abierto3 = true;
                                    } else {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[4].juego4[this.actual].pista;
                                    }
                                    return;
                                }
                            }
                            break;

                        case "klasea":
                        for (let i = 0; i < this.probak.length; i++) {
                                if (this.probak[i].izena == "prueba5") {
                                        this.abierto = true;
                                        this.abierto3 = false;
                                        this.mensaje = this.pistak[6].klasea[this.actual].pista;
                                    return;
                                }
                            }
                            break;
                        default:
                            break;
                    }
                }
            },
            async quitartiempo(){
                this.abierto = false;
                let denbora = this.$cookies.get("denbora");
                let denboraAldatuta = denbora - 300;
                this.$cookies.set("denbora", denboraAldatuta, '365d');
                axios.post('../denbora-gorde-pista', {
                    valor: denboraAldatuta,
                    partidaId: this.partida,
                }).then(response => {
                    if (response.status == 200) {
                        console.log("barruan");
                        console.log(denboraAldatuta);
                        window.location.href = route('pista', [this.partida, this.lugar, denboraAldatuta]);
                    }
                });
            },
        },
    };
</script>
