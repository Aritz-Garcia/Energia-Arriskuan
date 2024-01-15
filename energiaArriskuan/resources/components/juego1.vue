<template>
    <main id="carta-slot">
        <div class="carta-box" v-for="objeto in objetos" :key="objeto.id" @click="moverCarta(objeto)">
            <div class="carta">    
              <div class="cara">
                <img :src="objeto.ImagenF" width="150px" height="200px">
              </div>
              <div class="cara detras">
                <img :src="objeto.ImagenT" width="150px" height="200px">
              </div>    
            </div>
        </div>
    </main>
    
    <!-- Contenedor para las cartas clickeadas -->
    <div id="cartas-grid" class="cartasC"></div>
</template>

<script>
export default {
    data() {
      return {
        objetos: [],
        cartasOrden: []
      };
    },
    methods: {
        cargarpersonas() {
            axios.post("../js/objetos.json")
                .then(respuesta => {
                    console.log(respuesta);
                    this.objetos = respuesta.data;
                    this.random(this.objetos); // Llamada a shuffle después de cargar los datos
                });
        },
        random(array) {
            let IndexA = array.length, randomIndex;

            // Mientras que quedan elementos .
            while (IndexA > 0) {

                // Coge el elemento restante.
                randomIndex = Math.floor(Math.random() * IndexA);
                IndexA--;

                // Ay lo cambia con el elemento actual.
                [array[IndexA], array[randomIndex]] = [
                    array[randomIndex], array[IndexA]
                ];
            }

            return array;
        }, // ...
        moverCarta(objeto) {
          // Obtén el elemento de la carta clickeada
          const cartaElement = event.currentTarget;
        
          // Comprueba si la carta clickeada está en el orden específico
          const cartaId = objeto.id; // Asegúrate de que tengas una propiedad id en tus objetos de carta
          this.cartasOrden.push(objeto);
          this.objetos.push(objeto);
          console.log(this.cartasOrden);
        
          if (this.cartasOrden.length >= 5) {
            // Verificar si las cartas están en el orden deseado (1, 7, 5, 6, 8)
            const ordenCorrecto = this.cartasOrden.every((carta, index) => carta.id === [1, 7, 5, 6, 8][index]);
        
            // Mostrar mensaje correspondiente
            this.mensaje = ordenCorrecto ? '¡Has ganado!' : 'Esta no es la palabra';
            console.log(this.mensaje);
        
            // Limpiar cartas-grid y carta-slot después de verificar
            while (document.getElementById('cartas-grid').firstChild) {
              const originalCartaElement = document.getElementById('cartas-grid').firstChild;
              document.getElementById('cartas-grid').removeChild(originalCartaElement);
            }
            // Reiniciar la lógica de verificación y la lista de cartas
            this.cartasOrden = [];
            this.objetos.pop();
            console.log(this.cartasOrden);
        
            // Si ganaste, realiza alguna acción adicional si es necesario
            if (ordenCorrecto) {
              // Lógica adicional para después de ganar
            }
          } else {
            // Si aún no tienes suficientes cartas, simplemente añade la carta a cartas-grid
            document.getElementById('cartas-grid').appendChild(cartaElement);
          }
        },
        
    },
  };
</script>