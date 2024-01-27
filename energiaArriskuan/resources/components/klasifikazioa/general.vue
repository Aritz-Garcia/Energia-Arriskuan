<template>
    <div class="mt-5">
        <h1 class="text-center text-2xl text-[#0BD904]">Orokorra</h1>
        <table class="w-full text-center border my-3 bg-[#010440] text-[#0BD904]">
            <thead>
                <tr class="border">
                    <th class="border">Postua</th>
                    <th class="border">Erabiltzailea</th>
                    <th class="border">Denbora</th>
                </tr>
            </thead>
            <tbody class="font-rubik-regular">
                <tr v-for="(partida, index) in partidakConErabiltzaileak()" :key="index" class="border">
                    <td class="border">{{ index + 1 }}</td>
                    <td class="border">{{ partida.erabiltzailea }}</td>
                    <td class="border">{{ partida.denbora }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "general",
        props: {
            partidak: Array,
            erabiltzaileak: Array,
            probak: Array,
        },
        methods: {
            partidakConErabiltzaileak() {
                return this.partidak.map(partida => {
                    const erabiltzailea = this.erabiltzaileak.find(e => e.id == partida.id_erabiltzailea);
                    return {
                        ...partida,
                        erabiltzailea: erabiltzailea ? erabiltzailea.erabiltzailea : '',
                        argazkia: erabiltzailea ? erabiltzailea.foto : '',
                    };
                });
            }
        }
    }
</script>
