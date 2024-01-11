import Alpine from 'alpinejs';
import './bootstrap';
import { createApp } from 'vue'
import denbora from "../components/denbora.vue";
import juego3 from "../components/juego3.vue";

window.Alpine = Alpine;

Alpine.start();

const app = createApp(denbora);
app.mount('#tiempo');

const juego3App = createApp(juego3);
juego3App.mount("#juego3");

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    }
  });
}

// // Importa tu componente
// import EjemploComponente from '../components/juego3.vue';

// // Registra el componente globalmente
// const app = Vue.createApp(EjemploComponente);

// app.mount("#juego3")
