import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { ZiggyVue } from 'ziggy-js';
import router from './router'
import Klasifikazioa from "../components/klasifikazioa/klasifikazioa.vue";

// * Klasifikazioa
const app = createApp({
    components: {
        Klasifikazioa,
    }
});
app.use(createPinia());
app.use(ZiggyVue);
app.use(router);
app.mount('#klasifikazioa');
