<template>
    <div class="fondo">

        <p class="text-white"></p>

        <div class="input-container">

            <div class="number-input">
                <button class="btn-increment" @click="changeValue(1, 'letterInput1', 'selectedLetter1')">&#8593;</button>
                <input type="text" class="input-field" id="letterInput1" value="" readonly>
                <button class="btn-decrement" @click="changeValue(-1, 'letterInput1', 'selectedLetter1')">&#8595;</button>
            </div>

            <div class="number-input">
                <button class="btn-increment" @click="changeValue(1, 'letterInput2', 'selectedLetter2')">&#8593;</button>
                <input type="text" class="input-field" id="letterInput2" value="" readonly>
                <button class="btn-decrement" @click="changeValue(-1, 'letterInput2', 'selectedLetter2')">&#8595;</button>
            </div>

            <div class="number-input">
                <button class="btn-increment" @click="changeValue(1, 'letterInput3', 'selectedLetter3')">&#8593;</button>
                <input type="text" class="input-field" id="letterInput3" value="" readonly>
                <button class="btn-decrement" @click="changeValue(-1, 'letterInput3', 'selectedLetter3')">&#8595;</button>
            </div>

        </div>

        <div class="containerBoton">
            <button @click="checkResult" class="verify-btn">Verificar Resultado</button>

            <div id="verification-result"></div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {};
    },
    methods: {
        changeValue(delta, inputId, selectedLetterId) {
            var inputField = document.getElementById(inputId);
            var selectedLetterField = document.getElementById(selectedLetterId);
            var currentValue = inputField.value.charCodeAt(0) || 'A'.charCodeAt(0) - 1;
            var newValue = String.fromCharCode(((currentValue - 'A'.charCodeAt(0) + delta + 26) % 26) + 'A'.charCodeAt(0));

            // Establecer el valor en el campo
            inputField.value = newValue;
            selectedLetterField.value = newValue;
        },

        checkResult() {
            var resultElement = document.getElementById('verification-result');
            var result1 = document.getElementById('letterInput1').value;
            var result2 = document.getElementById('letterInput2').value;
            var result3 = document.getElementById('letterInput3').value;

            if (result1 === 'B' && result2 === 'C' && result3 === 'P') {
                resultElement.innerHTML = '¡Correcto! Los valores han sido reiniciados.';
                this.resetValues();
            } else {
                resultElement.innerHTML = 'Incorrecto. Inténtalo de nuevo.';
            }
        },

        resetValues() {
            document.getElementById('letterInput1').value = '';
            document.getElementById('letterInput2').value = '';
            document.getElementById('letterInput3').value = '';
        },
    },
};
</script>
