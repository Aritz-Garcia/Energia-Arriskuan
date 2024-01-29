<template>
    <div class="flex items-center">
        <Probak :probak="probak" id="probakSemaforo"></Probak>
        <div
        class="ms-2 mt-2 px-5 p-3"
        @click.prevent="confirmacion = true">
            <img src="../../public/images/pista.png" alt="Irten" class="w-12" id="pistak" />
        </div>
    </div>

  <div v-if="confirmacion" class="confirmation-box">
      <h2>Ziur zaude pista erabili nahi duzula?</h2>
      <div class="botonesc">
          <button id="yes-button" @click.prevent="enseñarPista">Bai</button>
          <button id="no-button" @click.prevent="confirmacion = false">Ez</button>
      </div>
  </div>

    <Teleport to="body">
    <div v-if="abierto" class="modal">
      <p>{{this.mensaje}}</p>
      <button @click="quitartiempo" >Close</button>
    </div>
    </Teleport>

</template>
<style scoped>
.modal {
  position: fixed;
  z-index: 999;
  top: 50%;
  left: 50%;
  width: 300px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  /* z-index: 2; */
  border-radius: 10px;

  /* Añadir estas propiedades para centrar vertical y horizontalmente */
  transform: translate(-50%, -50%);
}
.confirmation-box {
  position: fixed;
  z-index: 999;
  top: 50%;
  left: 50%;
  width: 300px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  /* z-index: 2; */
  border-radius: 10px;

  /* Añadir estas propiedades para centrar vertical y horizontalmente */
  transform: translate(-50%, -50%);
}

.confirmation-box-si {
  display: block;
  width: 300px;
  background-color: #f0f0f0;
  border: 1px solid #ccc;
  padding: 20px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  z-index: 3;
  border-radius: 10px;
  /* filter: blur(10px); */

  /* Añadir estas propiedades para centrar vertical y horizontalmente */
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.botonesc{
  display: flex;
  justify-content: center;
  gap: 20px;
}

#confirmation-box h2 {
  margin-bottom: 20px;

}

#confirmation-box button {
  padding: 10px;
  margin: 0 10px;
  cursor: pointer;
}

#yes-button {
  width: 50px;
  background-color: #4caf50;
  color: white;
  border: none;
  cursor: pointer;
}

#no-button {
  width: 50px;
  height: 30px;
  background-color: #f44336;
  color: white;
  border: none;
  cursor: pointer;

}

</style>
<script>
import Probak from "./probak.vue";
import Denbora from "./denbora.vue";
import route from "../../vendor/tightenco/ziggy/src/js";

export default {
  name: "pistak",
  props: {
    partida: String,
    probak: Array,
    lugar: String
  },data(){
    return {
      actual:0,
      pistak: [{
        hasiera :[
          {pista:"pista1 hasiera"},
          {pista:"pista2"}
        ]
      },
      {
      juego1:[
          {pista:"pista1 juego1"},
          {pista:"pista2"}
      ]},
      {
      juego2:[
          {pista:"pista1 juego2"},
          {pista:"pista2"}
      ]},
      {
      juego3:[
          {pista:"pista1 juego3"},
          {pista:"pista2"}
      ]},
      {
      juego4:[
          {pista:"pista1 juego4"},
          {pista:"pista2"}
      ]},{
      patioa:[
          {pista:"pista1 patioa"},
          {pista:"pista2"}
      ]},
      ],
      mensaje: "",
      abierto: false,
      confirmacion: false
    }
  },
  components: {
    Probak,
    Denbora
  },
  methods: {
    enseñarPista(){
      this.abierto = true;
      this.confirmacion = false;
      console.log(this.lugar);
      switch (this.lugar) {
        case "hasiera":
        for (let i = 0; i < this.probak.length; i++) {
              if (this.probak[i].izena == "prueba3") {
                if (this.probak[i].bukatuta) {
                this.mensaje = this.pistak[0].hasiera[this.actual].pista;
                console.log();
                } else {
                this.mensaje = this.pistak[3].juego3[this.actual].pista;
                }
                return;
              }
            }
          break;
        case "patioa":
        this.mensaje = this.pistak[5].patioa[this.actual].pista;
          break;
        case "juego1":
        this.mensaje = this.pistak[1].juego1[this.actual].pista;
          break;
        case "juego2":
        this.mensaje = this.pistak[2].juego2[this.actual].pista;
          break;
        case "juego4":
        this.mensaje = this.pistak[4].juego4[this.actual].pista;
          break;
        default:
          break;
      }
    },
    siguientePista(){
      if( this.actual < this.pistak[1].juego1.length -1){
            this.actual += 1;
        }
    },
    anteriorPista(){
      if( this.actual > 0){
            this.actual -= 1;
      }
    },
    quitartiempo(){
    this.abierto = false;
    let denbora = this.$cookies.get("denbora");
    denbora = denbora - 60;
    window.location.href = route('pista', [this.partida, this.lugar, denbora]);
  }
  },
};
</script>
