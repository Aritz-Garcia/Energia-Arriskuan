<template>
    <div>
        <div class="flex items-center justify-center">
            <p class="text-3xl md:w-auto mx-10 pl-20 p-6" id="text">
                Kodea aerosorgailu baten 3 zatien inizialez osatuta dago.
            </p>
            <img
                id="close-img-hasiera"
                @click="closeGame"
                src="../../public/images/cerrar.png"
                alt="Cerrar"
                class="close-img"
            />
        </div>

        <div class="fondo" :class="{ vibrating: vibration }">
            <div class="input-container">
                <div class="number-input">
                    <button
                        class="btn-increment"
                        @click="changeValue(1, 'letterInput1')"
                        :disabled="inputsBlocked"
                    >
                        &#8593;
                    </button>
                    <input
                        type="text"
                        class="input-field"
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

                <div class="number-input">
                    <button
                        class="btn-increment"
                        @click="changeValue(1, 'letterInput2')"
                        :disabled="inputsBlocked"
                    >
                        &#8593;
                    </button>
                    <input
                        type="text"
                        class="input-field"
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

                <div class="number-input">
                    <button
                        class="btn-increment"
                        @click="changeValue(1, 'letterInput3')"
                        :disabled="inputsBlocked"
                    >
                        &#8593;
                    </button>
                    <input
                        type="text"
                        class="input-field"
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
                    @click="checkResult"
                    class="verify-btn"
                    :disabled="verificationButtonBlocked"
                >
                    IREKI
                </button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "juego3",
    props: {
        partida: Number,
    },
    data() {
        return {
            inputsBlocked: false,
            verificationButtonBlocked: false,
            vibration: false,
            result1: "A",
            result2: "A",
            result3: "A",
        };
    },
    methods: {
        changeValue(delta, inputId) {
            if (!this.inputsBlocked) {
                var inputField = document.getElementById(inputId);

                if (inputField) {
                    var currentValue =
                        inputField.value.charCodeAt(0) || "A".charCodeAt(0) - 1;
                    var newValue = String.fromCharCode(
                        ((currentValue - "A".charCodeAt(0) + delta + 26) % 26) +
                            "A".charCodeAt(0)
                    );

                    inputField.value = newValue;
                } else {
                    console.error("Elemento con ID", inputId, "no encontrado");
                }
            }
        },

        checkResult() {
            var resultElement = document.getElementById("text");
            this.result1 = document.getElementById("letterInput1").value;
            this.result2 = document.getElementById("letterInput2").value;
            this.result3 = document.getElementById("letterInput3").value;

            if (
                this.result1 === "A" &&
                this.result2 === "K" &&
                this.result3 === "P"
            ) {
                document.querySelector(".fondo").style.backgroundImage =
                    "url('/T1-2DW3D/energiaArriskuan/public/images/candadoAbierto.png')";
                resultElement.innerHTML = "Zuzen! Sotora sar zaitezke orain.";
                this.resetValues();
                this.inputsBlocked = true;
                this.verificationButtonBlocked = true;

                document.getElementById("close-img-hasiera").classList.add("hidden");

                let denbora = this.$cookies.get("denbora");

                setTimeout(() => {
                    window.location.href = route("prueba3.update", [this.partida, denbora]);
                }, 3000);
            } else {
                this.vibration = true;
                setTimeout(() => {
                    this.vibration = false;
                }, 500);
            }
        },

        closeGame() {
            document.getElementById("juego3div").classList.remove("block");
            document.getElementById("juego3div").classList.add("hidden");
        },

        resetValues() {
            this.result1 = "A";
            this.result2 = "K";
            this.result3 = "P";
        },
    },
};
</script>
