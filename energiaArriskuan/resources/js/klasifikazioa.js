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

