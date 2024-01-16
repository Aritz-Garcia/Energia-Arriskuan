import Alpine from 'alpinejs';
import './bootstrap';
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { ZiggyVue } from 'ziggy-js';
import Denbora from "../components/denbora.vue";
import Hasiera from "../components/hasieraClick.vue";
import Biltegia from "../components/biltegiaClick.vue";
import Sotoa from "../components/sotoaClick.vue";
import Teilatua from "../components/teilatuaClick.vue";


window.Alpine = Alpine;

Alpine.start();

// * Denbora component
const app = createApp({
    components: {
        Denbora,
    }
});
app.use(createPinia());
app.mount('#tiempo');

// * Hasiera component
const hasieraApp = createApp({
    components: {
        Hasiera,
    }
});
hasieraApp.use(ZiggyVue);
hasieraApp.mount("#hasieraDiv");

// * Biltegia component
const biltegiaApp = createApp({
    components: {
        Biltegia,
    }
});
biltegiaApp.use(ZiggyVue);
biltegiaApp.mount("#biltegiaDiv");

// * Sotoa component
const sotoaApp = createApp({
    components: {
        Sotoa,
    }
});
sotoaApp.use(ZiggyVue);
sotoaApp.mount("#sotoaDiv");

// * Teilatua component
const teilatuaApp = createApp({
    components: {
        Teilatua,
    }
});
teilatuaApp.use(ZiggyVue);
teilatuaApp.mount("#teilatuaDiv");


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
