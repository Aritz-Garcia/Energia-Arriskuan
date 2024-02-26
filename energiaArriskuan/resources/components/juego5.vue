<template>
    <div>
        <div class="flex items-center justify-center mb-8">
            <p class="text-3xl md:w-auto mx-10 pl-20 p-6" id="text">
                Piezak mugitzen zirkuitua osatu behar duzu.
            </p>
            <img
                id="close-img"
                @click="closeGame"
                src="../../public/images/cerrar.png"
                alt="Cerrar"
                class="close-img"
            />
        </div>

        <div class="plantillaOsoa"
            v-if="paso == 1">
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

        <div class="plantillaOsoa"
            v-if="paso == 2">
            <div class="plantillaRow">
                <Piezak
                    v-for="pieza in indexRow2[0]"
                    :key="pieza.id"
                    :pieza="pieza"
                >
                </Piezak>
            </div>
            <div>
                <div class="plantillaCol">
                    <Piezak
                        v-for="pieza in indexCol2[0]"
                        :key="pieza.id"
                        :pieza="pieza"
                    >
                    </Piezak>
                </div>
                <div class="piezas">
                    <Piezak
                        v-for="pieza in posiciones2"
                        :key="pieza.id"
                        :pieza="pieza"
                        @click.prevent=handleClickMoverPieza
                    />
                </div>
                <div class="plantillaCol">
                    <Piezak
                        v-for="pieza in indexCol2[1]"
                        :key="pieza.id"
                        :pieza="pieza"
                    >
                    </Piezak>
                </div>
            </div>
            <div class="plantillaRow">
                <Piezak
                    v-for="pieza in indexRow2[1]"
                    :key="pieza.id"
                    :pieza="pieza"
                >
                </Piezak>
            </div>
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
                KONOA_URDINA_GOIAN, KONOA_URDINA_BEHEAN, KONOA_URDINA_EZKERRA, KONOA_URDINA_ESKUMA,
                KONOA_BERDEA_GOIAN, KONOA_BERDEA_BEHEAN, KONOA_BERDEA_EZKERRA, KONOA_BERDEA_ESKUMA,
                AEROSORGAILUA_URDINA_GOIAN, AEROSORGAILUA_URDINA_BEHEAN, AEROSORGAILUA_URDINA_EZKERRA, AEROSORGAILUA_URDINA_ESKUMA,
                AEROSORGAILUA_BERDEA_GOIAN, AEROSORGAILUA_BERDEA_BEHEAN, AEROSORGAILUA_BERDEA_EZKERRA, AEROSORGAILUA_BERDEA_ESKUMA,
                EGUZKIA_URDINA_GOIAN, EGUZKIA_URDINA_BEHEAN, EGUZKIA_URDINA_EZKERRA, EGUZKIA_URDINA_ESKUMA,
                EGUZKIA_BERDEA_GOIAN, EGUZKIA_BERDEA_BEHEAN, EGUZKIA_BERDEA_EZKERRA, EGUZKIA_BERDEA_ESKUMA,
                PANEL_URDINA_GOIAN, PANEL_URDINA_BEHEAN, PANEL_URDINA_EZKERRA, PANEL_URDINA_ESKUMA,
                PANEL_BERDEA_GOIAN, PANEL_BERDEA_BEHEAN, PANEL_BERDEA_EZKERRA, PANEL_BERDEA_ESKUMA,
            }
        from "../js/konstanteak_juego5.js";
    import Piezak from "./piezak.vue";

    const sleep = ms => new Promise(r => setTimeout(r, ms));

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
                paso: 1,
                posiciones1: [],
                objetos1: [
                    { id: 1, name: "BERDEA_KURBA_BEHE_ESKUMA", argazkia: BERDEA_KURBA_BEHE_ESKUMA },
                    { id: 2, name: "BERDEA_HORIZONTALA", argazkia: BERDEA_HORIZONTALA },
                    { id: 3, name: "BERDEA_HORIZONTALA", argazkia: BERDEA_HORIZONTALA },
                    { id: 4, name: "BERDEA_HORIZONTALA", argazkia: BERDEA_HORIZONTALA },
                    { id: 5, name: "BERDEA_BERTIKALA", argazkia: BERDEA_BERTIKALA },
                    { id: 6, name: "ZURIA", argazkia: ZURIA },
                    { id: 7, name: "ZURIA", argazkia: ZURIA },
                    { id: 8, name: "ZURIA", argazkia: ZURIA },
                    { id: 9, name: "BERDEA_BERTIKALA", argazkia: BERDEA_BERTIKALA },
                    { id: 10, name: "ZURIA", argazkia: ZURIA },
                    { id: 11, name: "ZURIA", argazkia: ZURIA },
                    { id: 12, name: "ZURIA", argazkia: ZURIA },
                    { id: 13, name: "BERDEA_BERTIKALA", argazkia: BERDEA_BERTIKALA },
                    { id: 14, name: "ZURIA", argazkia: ZURIA },
                    { id: 15, name: "ZURIA", argazkia: ZURIA },
                ],
                solucionesPosible1: [
                    [
                        "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_HORIZONTALA", "BERDEA_HORIZONTALA", "BERDEA_HORIZONTALA",
                        "BERDEA_BERTIKALA", "ZURIA", "ZURIA", "ZURIA",
                        "BERDEA_BERTIKALA", "ZURIA", "ZURIA", "ZURIA",
                        "BERDEA_BERTIKALA", "ZURIA", "ZURIA", "ZURIA"
                    ],
                ],
                indexCol1: [
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "KONOA_BERDEA_GOIAN", argazkia: KONOA_BERDEA_GOIAN },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
                indexRow1: [
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "AEROSORGAILUA_BERDEA_EZKERRA", argazkia: AEROSORGAILUA_BERDEA_EZKERRA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
                posiciones2: [],
                objetos2: [
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
                solucionesPosible2: [
                    [
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_BEHE_EZKERRA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA",
                        "ZURIA", "URDINA_BERTIKALA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_KURBA_GOI_EZKERRA",
                        "BERDEA_HORIZONTALA", "BIKOITZA_1", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                        "ZURIA", "URDINA_BERTIKALA", "ZURIA", "ZURIA"
                    ],
                    [
                        "URDINA_BERTIKALA", "ZURIA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA",
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_BEHE_EZKERRA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_KURBA_GOI_EZKERRA",
                        "BERDEA_HORIZONTALA", "BIKOITZA_1", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                        "ZURIA", "URDINA_BERTIKALA", "ZURIA", "ZURIA"
                    ],
                    [
                        "URDINA_BERTIKALA", "ZURIA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA",
                        "URDINA_BERTIKALA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_KURBA_GOI_EZKERRA",
                        "BIKOITZA_1", "BERDEA_HORIZONTALA", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_BEHE_EZKERRA", "ZURIA", "ZURIA"
                    ],
                    [
                        "URDINA_BERTIKALA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_HORIZONTALA",
                        "URDINA_BERTIKALA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                        "BIKOITZA_1", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA", "ZURIA",
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_BEHE_EZKERRA", "ZURIA", "ZURIA"
                    ],
                    [
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_GOI_EZKERRA", "BERDEA_KURBA_BEHE_ESKUMA", "BERDEA_HORIZONTALA",
                        "BERDEA_KURBA_BEHE_ESKUMA", "BIKOITZA_1", "BERDEA_KURBA_GOI_EZKERRA", "ZURIA",
                        "BERDEA_KURBA_GOI_EZKERRA", "URDINA_BERTIKALA", "ZURIA", "ZURIA",
                        "ZURIA", "URDINA_BERTIKALA", "ZURIA", "ZURIA"
                    ],
                    [
                        "URDINA_KURBA_GOI_ESKUMA", "URDINA_KURBA_GOI_EZKERRA", "ZURIA", "BERDEA_KURBA_BEHE_ESKUMA",
                        "BERDEA_KURBA_BEHE_ESKUMA", "BIKOITZA_1", "BERDEA_HORIZONTALA", "BERDEA_KURBA_GOI_EZKERRA",
                        "BERDEA_KURBA_GOI_EZKERRA", "URDINA_BERTIKALA", "ZURIA", "ZURIA",
                        "ZURIA", "URDINA_BERTIKALA", "ZURIA", "ZURIA"
                    ],
                ],
                indexCol2: [
                    [
                        { id: 1, name: "PANEL_URDINA_BEHEAN", argazkia: PANEL_URDINA_BEHEAN },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "EGUZKIA_URDINA_GOIAN", argazkia: EGUZKIA_URDINA_GOIAN },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
                indexRow2: [
                    [
                        { id: 1, name: "ZURIA", argazkia: ZURIA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "KONOA_BERDEA_ESKUMA", argazkia: KONOA_BERDEA_ESKUMA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ],
                    [
                        { id: 1, name: "AEROSORGAILUA_BERDEA_EZKERRA", argazkia: AEROSORGAILUA_BERDEA_EZKERRA },
                        { id: 2, name: "ZURIA", argazkia: ZURIA },
                        { id: 3, name: "ZURIA", argazkia: ZURIA },
                        { id: 4, name: "ZURIA", argazkia: ZURIA },
                    ]
                ],
                resuelto: false,
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
                this.randomArray(this.posiciones1, this.objetos1);
            },
            randomArray(posiciones, objetos) {
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
                    switch (this.paso) {
                        case 1:
                            this.posiciones1 = posiciones;
                            break;
                        case 2:
                            this.posiciones2 = posiciones;
                            break;
                    }
                } else {
                    // EZIN DA EGIN
                    this.randomArray(posiciones, objetos);
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
                if (this.resuelto) return
                if (event.target.style.backgroundColor != "rgb(244, 244, 244)") {
                    let id = event.target.alt.split('_').slice(-1);
                    let cambiarPosiciones;
                    switch (this.paso) {
                        case 1:
                            cambiarPosiciones = this.posiciones1;
                            break;
                        case 2:
                            cambiarPosiciones = this.posiciones2;
                            break;
                    }
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

                        switch (this.paso) {
                            case 1:
                                this.posiciones1 = cambiarPosiciones;
                                this.respuesta(this.solucionesPosible1, this.posiciones1);
                                break;
                            case 2:
                                this.posiciones2 = cambiarPosiciones;
                                this.respuesta(this.solucionesPosible2, this.posiciones2);
                                break;
                        }

                    }
                }
            },
            respuesta(resultado, movido) {
                let movidoName = movido.map((x) => x.name);
                for (let i = 0; i < resultado.length; i++) {
                    let resultadoConcreto = resultado[i].map((x) => x);
                    if (this.comprobarArray(resultadoConcreto, movidoName)) {
                        this.resuelto = true;
                        if (this.paso == 1) {
                            document.getElementById("text").innerHTML = "Zorionak! Lehenengo zirkuitua osatu duzu!";
                            sleep(5000)
                            .then(() =>{
                                this.paso++;
                                this.randomArray(this.posiciones2, this.objetos2);
                                document.getElementById("text").innerHTML = "Orain, bigarren zirkuitua osatu behar duzu.";
                                this.resuelto = false;
                            });

                        } else if (this.paso == 2) {
                            // Bukatuta
                            document.getElementById("text").innerHTML = "Zorionak! Zirkuituak osatu dituzu!";

                            document.getElementById("close-img").classList.add("hidden");

                            let denbora = this.$cookies.get("denbora");

                            setTimeout(() => {
                                window.location.href = route("prueba5.update", [this.partida, denbora]);
                            }, 3000);
                        }
                    }
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

