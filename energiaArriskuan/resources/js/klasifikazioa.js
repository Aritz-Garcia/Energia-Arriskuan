import Alpine from 'alpinejs';
import { createApp } from 'vue'
import { createPinia } from 'pinia'
import router from './router'
import Klasifikazioa from "../components/klasifikazioa/klasifikazioa.vue";

window.Alpine = Alpine;

Alpine.start();


// * Klasifikazioa
const app = createApp({
    components: {
        Klasifikazioa,
    }
});
app.use(createPinia());
app.use(router);
app.mount('#klasifikazioa');

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
