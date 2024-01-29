<template>
    <div class="mt-5">
        <h1  class="text-center text-2xl testu-kolore-nagusia">3. Proba</h1>
        <div class="text-center">
            <input type="text" id="bilatzailea" :value=testua @input="testuaAldatu" class="font-rubik-regular text-left border my-3 atzekaldeko-kolore-oinarria testu-kolore-nagusia me-3 rounded-xl">
            <button @click="ezabatu" class="text-center border my-3 atzekaldeko-kolore-oinarria testu-kolore-nagusia p-2 rounded-xl">Ezabatu</button>
        </div>
        <table class="w-full text-center border my-3 atzekaldeko-kolore-oinarria testu-kolore-nagusia">
            <thead>
                <tr class="border">
                    <th class="border">Postua</th>
                    <th class="border">Erabiltzailea</th>
                    <th class="border">Denbora</th>
                </tr>
            </thead>
            <tbody class="font-rubik-regular">
                <tr v-for="(proba, index) in probaBusqueda" :key="index" class="border">
                    <td class="border">{{ index + 1 }}</td>
                    <td class="border">{{ proba.erabiltzailea }}</td>
                    <td class="border">{{ proba.denbora }}</td>
                </tr>
                <tr v-if="utzik == true">
                    <td class="border" colspan="3">Ez dago emaitzarik</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import { mapState, mapActions } from 'pinia'
    import {useCounterStore} from '@/store/bilatzailea'

    export default {
        name: "general",
        props: {
            partidak: Array,
            erabiltzaileak: Array,
            probak: Array,
        },
        computed: {
            proba3() {
                return this.probak.filter(proba => proba.izena == "prueba3");
            },
            probaBusqueda() {
                return this.proba3Erabiltzaileak().filter(proba => proba.erabiltzailea.includes(this.testua.toLowerCase()));
            },
            utzik() {
                if (this.probaBusqueda.length == 0) {
                    return true;
                } else {
                    return false
                }
            },
            ...mapState(useCounterStore, ['testua']),
        },
        methods: {
            proba3Erabiltzaileak() {
                return this.proba3.map(proba => {
                    const partida = this.partidak.find(p => p.id == proba.id_partida);
                    const erabiltzailea = this.erabiltzaileak.find(e => e.id == partida.id_erabiltzailea);
                    return {
                        ...proba,
                        erabiltzailea: erabiltzailea ? erabiltzailea.erabiltzailea : '',
                        argazkia: erabiltzailea ? erabiltzailea.foto : '',
                    };
                });
            },
            ...mapActions(useCounterStore, ['ezabatu', 'testuaAldatu']),
        }
    }
</script>
