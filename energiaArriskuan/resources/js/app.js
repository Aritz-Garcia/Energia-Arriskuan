import Alpine from 'alpinejs';
import './bootstrap';
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { ZiggyVue } from 'ziggy-js';
import Denbora from "../components/denbora.vue";
import Hasiera from "../components/hasieraClick.vue";
import HasieraTutorial from "../components/hasieraTutorial.vue";
import Biltegia from "../components/biltegiaClick.vue";
import Sotoa from "../components/sotoaClick.vue";
import Teilatua from "../components/teilatuaClick.vue";
import Patioa from "../components/patioaClick.vue";


window.Alpine = Alpine;

Alpine.start();

// * Komponenteak
const app = createApp({
    components: {
        Denbora,
        Hasiera,
        HasieraTutorial,
        Biltegia,
        Sotoa,
        Teilatua,
        Patioa,
    }
});
app.use(createPinia());
app.use(ZiggyVue);
app.mount('#app');

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
