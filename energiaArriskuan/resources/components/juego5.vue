<template>
    <div class="plantillaOsoa">
        <div class="plantillaRow">
            <Piezak
                v-for="pieza in indexRow1[0]"
                :key="pieza.id"
                :pieza="pieza"
            >
            </Piezak>
        </div>
        <div>
            <div class="plantillaCol">
                <Piezak
                    v-for="pieza in indexCol1[0]"
                    :key="pieza.id"
                    :pieza="pieza"
                >
                </Piezak>
            </div>
            <div class="piezas">
                <Piezak
                    v-for="pieza in posiciones1"
                    :key="pieza.id"
                    :pieza="pieza"
                    @click.prevent=handleClickMoverPieza
                />
            </div>
            <div class="plantillaCol">
                <Piezak
                    v-for="pieza in indexCol1[1]"
                    :key="pieza.id"
                    :pieza="pieza"
                >
                </Piezak>
            </div>
        </div>
        <div class="plantillaRow">
            <Piezak
                v-for="pieza in indexRow1[1]"
                :key="pieza.id"
                :pieza="pieza"
            >
            </Piezak>
        </div>
    </div>
</template>

<script>
    import {
                BERDEA_KURBA_GOI_EZKERRA, BERDEA_KURBA_GOI_ESKUMA, BERDEA_KURBA_BEHE_EZKERRA, BERDEA_KURBA_BEHE_ESKUMA,
                BERDEA_BERTIKALA, BERDEA_HORIZONTALA,
                URDINA_KURBA_GOI_EZKERRA, URDINA_KURBA_GOI_ESKUMA, URDINA_KURBA_BEHE_EZKERRA, URDINA_KURBA_BEHE_ESKUMA,
                URDINA_BERTIKALA, URDINA_HORIZONTALA,
                BIKOITZA_1, BIKOITZA_2,
                ZURIA,
                BATERIA_URDINA_GOIAN, BATERIA_URDINA_BEHEAN, BATERIA_URDINA_EZKERRA, BATERIA_URDINA_ESKUMA,
                BATERIA_BERDEA_GOIAN, BATERIA_BERDEA_BEHEAN, BATERIA_BERDEA_EZKERRA, BATERIA_BERDEA_ESKUMA,
                BOMBILLA_URDINA_GOIAN, BOMBILLA_URDINA_BEHEAN, BOMBILLA_URDINA_EZKERRA, BOMBILLA_URDINA_ESKUMA,
                BOMBILLA_BERDEA_GOIAN, BOMBILLA_BERDEA_BEHEAN, BOMBILLA_BERDEA_EZKERRA, BOMBILLA_BERDEA_ESKUMA,
            }
        from "../js/konstanteak_juego5.js";
    import Piezak from "./piezak.vue";
    export default {
        name: "juego5",
        components: {
            Piezak,
        },
        props: {
            partida: Number,
        },
        data() {
            return {
                posiciones1: [],
                objetos1: [
                    { id: 1, name: "URDINA_KURBA_GOI_ESKUMA", argazkia: URDINA_KURBA_GOI_ESKUMA },
                    { id: 2, name: "URDINA_KURBA_BEHE_EZKERRA", argazkia: URDINA_KURBA_BEHE_EZKERRA },
                    { id: 3, name: "ZURIA", argazkia: ZURIA },
                    { id: 4, name: "BERDEA_KURBA_BEHE_ESKUMA", argazkia: BERDEA_KURBA_BEHE_ESKUMA },
                    { id: 5, name: "ZURIA", argazkia: ZURIA },
                    { id: 6, name: "URDINA_BERTIKALA", argazkia: URDINA_BERTIKALA },
                    { id: 7, name: "BERDEA_KURBA_BEHE_ESKUMA", argazkia: BERDEA_KURBA_BEHE_ESKUMA },
                    { id: 8, name: "BERDEA_KURBA_GOI_EZKERRA", argazkia: BERDEA_KURBA_GOI_EZKERRA },
                    { id: 9, name: "BERDEA_HORIZONTALA", argazkia: BERDEA_HORIZONTALA },
                    { id: 10, name: "BIKOITZA_1", argazkia: BIKOITZA_1 },
                    { id: 11, name: "BERDEA_KURBA_GOI_EZKERRA", argazkia: BERDEA_KURBA_GOI_EZKERRA },
                    { id: 12, name: "ZURIA", argazkia: ZURIA },
                    { id: 13, name: "ZURIA", argazkia: ZURIA },
                    { id: 14, name: "URDINA_BERTIKALA", argazkia: URDINA_BERTIKALA },
                    { id: 15, name: "ZURIA", argazkia: ZURIA },
                ],
                solucionesPosible1: [
                    "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_BEHE_EZKERRA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA",
                    "ZURIA", "URDINA_BERTIKALA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_KURBA_GOI_EZKERRA",
                    "BERDEA_HORIZONTALA", "BIKOITZA_1", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                    "ZURIA", "URDINA_BERTIKALA", "ZURIA", "ZURIA"
                ],
                indexCol1: [
                    [
                        { id: 1, name: "BOMBILLA_URDINA_BEHEAN", argazkia: BOMBILLA_URDINA_BEHEAN },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "BATERIA_URDINA_GOIAN", argazkia: BATERIA_URDINA_GOIAN },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
                indexRow1: [
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "BATERIA_BERDEA_ESKUMA", argazkia: BATERIA_BERDEA_ESKUMA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "BOMBILLA_BERDEA_EZKERRA", argazkia: BOMBILLA_BERDEA_EZKERRA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
            }
        },
        mounted() {
            this.iniciarPartida();
        },
        methods: {
            closeGame() {
                document.getElementById("juego5div").classList.remove("block");
                document.getElementById("juego5div").classList.add("hidden");
            },
            iniciarPartida() {
                this.randomArray(1, this.posiciones1, this.objetos1);
            },
            randomArray(numero, posiciones, objetos) {
                posiciones = [];
                for (let i = 0; i < objetos.length; i++) {
                    let random = Math.floor(Math.random() * objetos.length);
                    if (posiciones.indexOf(objetos[random]) === -1) {
                        posiciones.push(objetos[random]);
                    } else {
                        i--;
                    }
                }
                posiciones.push({ id: 16, name: 'ZURIA', argazkia: null });

                if (this.isSolvable(posiciones)) {
                    // EGIN DAITEKE
                    switch (numero) {
                        case 1:
                            this.posiciones1 = posiciones;
                            break;
                    }
                } else {
                    // EZIN DA EGIN
                    this.randomArray(numero, posiciones, objetos);
                }
            },
            countInversions(array) {
                let inversionCount = 0;
                for (let i = 0; i < array.length - 1; i++) {
                    for (let j = i + 1; j < array.length; j++) {
                        if (array[i] > array[j] && array[i] != 16 && array[j] != 16) {
                            inversionCount++;
                        }
                    }
                }
                return inversionCount;
            },
            isSolvable(puzzleCompleto) {
                let puzzle = puzzleCompleto.map((x) => x.id);
                let inversionCount = this.countInversions(puzzle);
                let blankRow = Math.floor(puzzle.indexOf(16) / 4) + 1;
                let gridHeight = 4;
                let rowFromBottom = gridHeight - blankRow + 1;

                if (rowFromBottom % 2 === 0) {
                    return inversionCount % 2 === 1;
                } else {
                    return inversionCount % 2 === 0;
                }
            },
            handleClickMoverPieza(event) {
                if (event.target.style.backgroundColor != "rgb(244, 244, 244)") {
                    let id = event.target.alt.split('_').slice(-1);
                    let cambiarPosiciones = this.posiciones1;
                    let index = -1;
                    for (let i = 0; i < cambiarPosiciones.length; i++) {
                        if (cambiarPosiciones[i].id == id) {
                            index = i;
                        }
                    }

                    if (index != -1) {
                        if (index <= 14) {
                            // ESKUMALDEA
                            if (cambiarPosiciones[index + 1].argazkia == null) {
                                let posicionVacia = cambiarPosiciones[index + 1];
                                cambiarPosiciones[index + 1] = cambiarPosiciones[index];
                                cambiarPosiciones[index] = posicionVacia;
                            }
                        }

                        if (index >= 1) {
                            // EZKERRALDEA
                            if (cambiarPosiciones[index - 1].argazkia == null) {
                                let posicionVacia = cambiarPosiciones[index - 1];
                                cambiarPosiciones[index - 1] = cambiarPosiciones[index];
                                cambiarPosiciones[index] = posicionVacia;
                            }
                        }

                        if (index <= 11) {
                            // BEHEKALDEA
                            if (cambiarPosiciones[index + 4].argazkia == null) {
                                let posicionVacia = cambiarPosiciones[index + 4];
                                cambiarPosiciones[index + 4] = cambiarPosiciones[index];
                                cambiarPosiciones[index] = posicionVacia;
                            }
                        }

                        if (index >= 4) {
                            // GOIKALDEA
                            if (cambiarPosiciones[index - 4].argazkia == null) {
                                let posicionVacia = cambiarPosiciones[index - 4];
                                cambiarPosiciones[index - 4] = cambiarPosiciones[index];
                                cambiarPosiciones[index] = posicionVacia;
                            }
                        }

                        this.posiciones1 = cambiarPosiciones;

                        this.respuesta(this.solucionesPosible1, this.posiciones1);

                    }
                }
            },
            respuesta(resultado, movido) {
                let movidoName = movido.map((x) => x.name);
                resultado = resultado.map((x) => x);
                if (this.comprobarArray(resultado, movidoName)) {
                    console.log('Has ganado');
                }
            },
            comprobarArray(array1, array2) {
                if (array1.length !== array2.length) {
                    return false;
                }

                for (let i = 0; i < array1.length; i++) {
                    if (array1[i] !== array2[i]) {
                        return false;
                    }
                }

                return true;
            },
        },
    }
</script>

<style>
    .piezas {
        display: grid;
        width: 350px;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
    }

    .piezas div, .plantillaCol div, .plantillaRow div {
        background-color: #010440;
        border-radius: 10px;
        width: 80px;
        height: 80px;
        text-align: center;
    }

    .piezas div img, .plantillaCol div img, .plantillaRow div img {
        width: 100%;
        height: 100%;
        border-radius: 10px;
    }

    .plantillaCol {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    .plantillaRow {
        display: grid;
        grid-template-rows: repeat(4, 1fr);
        gap: 10px;
        margin-left: 10px;
        margin-right: 10px;
    }

    .plantillaCol div, .plantillaRow div {
        background-color: grey;
    }

    .plantillaOsoa {
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

