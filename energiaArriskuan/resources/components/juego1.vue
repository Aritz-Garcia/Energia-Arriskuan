<template>
    <div class="fondoj1 rounded-xl">
    <div>
    <div class="flex items-center justify-center">
        <p class="text-3xl md:w-auto mx-9 pl-20 p-4 my-5" id="text">
          <!-- Los paneles fotovoltaicos de la instalación del centro han sufrido daños, necesitamos repararlo. -->
          Zentroko instalazioko eguzki-panelak kalteak izan dituzte eta sistema osoa berriz instalatu behar dugu.
        </p>
        <img
            @click="closeGame"
            src="../../public/images/cerrar.png"
            alt="Cerrar"
            id="close-img"
            class="m-5 p-2"
        />
    </div>
      <div>
        <!-- ... (tu código HTML anterior) ... -->

        <main id="carta-slot">
          <div
            class="carta-box"
            v-for="objeto in cartaRandom"
            :key="objeto.id"
            @click="moverCarta(objeto)"
          >
            <div class="carta">
              <div class="cara">
                <img :src="objeto.ImagenF" class="caras" width="150px" height="200px">
              </div>
              <div class="cara detras">
                <img :src="objeto.ImagenT" class="caras" width="150px" height="200px">
              </div>
            </div>
          </div>
        </main>

        <!-- Contenedor para las cartas clickeadas -->
        <div id="cartas-grid" class="cartasC"></div>
      </div>
    </div>
  </div>
    </template>

    <script>
import datos from '../js/objetos.json';
import route from '../../vendor/tightenco/ziggy/src/js';

export default {
  name: "juego1",
  props: {
    partida: Number,
  },
  data() {
    return {
      carta: [],
      cartaRandom: [],
      cartasOrden: []
    };
  },
  methods: {
    random(array) {
      let IndexA = array.length, randomIndex;

      while (IndexA > 0) {
        randomIndex = Math.floor(Math.random() * IndexA);
        IndexA--;

        [array[IndexA], array[randomIndex]] = [
          array[randomIndex], array[IndexA]
        ];
      }

      return array;
    },
   moverCarta(objeto) {
    // Obtén el elemento de la carta clickeada
    const cartaElement = event.currentTarget;
    const textoElement = document.getElementById("text");
    // Comprueba si la carta clickeada está en el orden específico
    const cartaId = objeto.id; // Asegúrate de que tengas una propiedad id en tus objetos de carta

    // Verifica si la carta ya está en cartasOrden
    if (!this.cartasOrden.find(carta => carta.id === cartaId)) {
      // Añade la carta a cartasOrden y cartaRandom solo si no está presente
      this.cartasOrden.push(objeto);
    }

    console.log(this.cartasOrden);

    if (this.cartasOrden.length >= 5) {
      // Verificar si las cartas están en el orden deseado (1, 7, 5, 6, 8)
      const ordenCorrecto = this.cartasOrden.every((carta, index) => carta.id === [1, 7, 5, 6, 8][index]);

      // Mostrar mensaje correspondiente
      this.mensaje = ordenCorrecto ? '¡Has ganado!' : 'Esta no es la palabra';
      console.log(this.mensaje);


      // Si ganaste, realiza alguna acción adicional si es necesario
      if (ordenCorrecto) {
          // Limpiar cartas-grid después de verificar
        while (document.getElementById('cartas-grid').firstChild) {
        const originalCartaElement = document.getElementById('cartas-grid').firstChild;
        document.getElementById('cartas-grid').removeChild(originalCartaElement);
      }
        // Lógica adicional para después de ganar
        textoElement.innerHTML = "Eguzki panelak konpondu dira!";
        document.getElementById("close-img").classList.add("hidden");

        let denbora = this.$cookies.get("denbora");

        setTimeout(() => {
            window.location.href = route("prueba1.update", [this.partida, denbora]);
        }, 2000);
      } else {
        // Limpiar cartas-grid después de verificar
      while (document.getElementById('cartas-grid').firstChild) {
        const originalCartaElement = document.getElementById('cartas-grid').firstChild;
        document.getElementById('cartas-grid').removeChild(originalCartaElement);
      }
        for( let i = 0; i < this.cartasOrden.length; i++){
          this.cartaRandom.push(this.cartasOrden[i]);
        }
        // Reiniciar la lógica de verificación y la lista de cartas
        this.cartasOrden = [];
        this.cartaRandom.pop();
      }
    } else {
      // Si aún no tienes suficientes cartas, simplemente añade la carta a cartas-grid
      document.getElementById('cartas-grid').appendChild(cartaElement);
    }
  },closeGame() {
            document.getElementById("juego1div").classList.remove("block");
            document.getElementById("juego1div").classList.add("hidden");
        }
  },
  computed: {
    cargarpersonas() {
      // Realiza el mapeo directamente en el array 'carta'
      this.carta = datos.map((objeto) => {
        return objeto;
      });

      // Aplica la función random y devuelve el array resultante
      return this.random([...this.carta]); // Clonar el array antes de aplicar random si no deseas modificar el array original
    }
  },
  created() {
    // Realiza el mapeo directamente en el array 'carta'
    this.carta = datos.map((objeto) => {
      return objeto;
    });

    // Inicializa cartaRandom con cartas aleatorias al inicio
    this.cartaRandom = this.random([...this.carta]);
  }
};
</script>
