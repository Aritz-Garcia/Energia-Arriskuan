<template>
    <div>
        <div class="flex flex-row items-center justify-center my-5 sotoaPanelLetra">
            <div class="flex flex-col items-center">
                <button
                    class="btn-increment"
                    @click="changeValue(1, 'letterInput1')"
                    :disabled="inputsBlocked"
                >
                    &#8593;
                </button>
                <input
                    type="text"
                    class="input-field text-black"
                    :style="{ animation: animacion, 'background-color': colorFondo }"
                    id="letterInput1"
                    :value="result1"
                    readonly
                />
                <button
                    class="btn-decrement"
                    @click="changeValue(-1, 'letterInput1')"
                    :disabled="inputsBlocked"
                >
                    &#8595;
                </button>
            </div>

            <div class="flex flex-col items-center">
                <button
                    class="btn-increment"
                    @click="changeValue(1, 'letterInput2')"
                    :disabled="inputsBlocked"
                >
                    &#8593;
                </button>
                <input
                    type="text"
                    class="input-field text-black"
                    :style="{ animation: animacion, 'background-color': colorFondo }"
                    id="letterInput2"
                    :value="result2"
                    readonly
                />
                <button
                    class="btn-decrement"
                    @click="changeValue(-1, 'letterInput2')"
                    :disabled="inputsBlocked"
                >
                    &#8595;
                </button>
            </div>

            <div class="flex flex-col items-center">
                <button
                    class="btn-increment"
                    @click="changeValue(1, 'letterInput3')"
                    :disabled="inputsBlocked"
                >
                    &#8593;
                </button>
                <input
                    type="text"
                    class="input-field text-black"
                    :style="{ animation: animacion, 'background-color': colorFondo }"
                    id="letterInput3"
                    :value="result3"
                    readonly
                />
                <button
                    class="btn-decrement"
                    @click="changeValue(-1, 'letterInput3')"
                    :disabled="inputsBlocked"
                >
                    &#8595;
                </button>
            </div>
        </div>

        <div class="containerBoton">
            <button
                @click.prevent="checkResult"
                class="verify-btn"
                :disabled="verificationButtonBlocked"
            >
                EGIAZTATU
            </button>
        </div>
    </div>
</template>

<script>
    import route from '../../vendor/tightenco/ziggy';

    export default {
        name: "panelNumerico",
        props: {
            partida: String,
        },
        data() {
            return {
                result1: 0,
                result2: 0,
                result3: 0,
                verificationButtonBlocked: false,
                inputsBlocked: false,
                animacion: "",
                colorFondo: "",
            };
        },
        methods: {
            changeValue(value, id) {
                if (!this.inputsBlocked) {
                    let input = document.getElementById(id);
                    let newValue = parseInt(input.value) + value;
                    if (newValue < 0) {
                        newValue = 9;
                    } else if (newValue > 9) {
                        newValue = 0;
                    }
                    input.value = newValue;
                }
            },
            checkResult() {
                let result1 = document.getElementById("letterInput1").value;
                let result2 = document.getElementById("letterInput2").value;
                let result3 = document.getElementById("letterInput3").value;
                if (result1 == 3 && result2 == 1 && result3 == 5) {
                    this.verificationButtonBlocked = true;
                    this.inputsBlocked = true;
                    this.resetValues();
                    this.animacion = "aciertoSotoa 1s";
                    this.colorFondo = "#00ff00"

                    let resultElement = document.getElementById("text");
                    resultElement.innerHTML = "Kodea zuzena da!";

                    document.getElementById("close-img").classList.add("hidden");

                    setTimeout(() => {
                        window.location.href = route("prueba4.update", this.partida);
                    }, 3000);
                } else {
                    this.result1 = result1;
                    this.result2 = result2;
                    this.result3 = result3;
                    this.animacion = "errorSotoa 1s";
                    setTimeout(() => {
                        this.animacion = "";
                    }, 1000);
                }
            },
            resetValues() {
                this.result1 = 3;
                this.result2 = 1;
                this.result3 = 5;
            }

        }
    }
</script>
