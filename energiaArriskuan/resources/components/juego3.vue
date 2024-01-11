<template>
  <p class="text-[#0bd904] bg-[#000000] p-6 text-2xl md:w-auto mx-10">
    El código está formado por las iniciales de las 3 partes que forman el rotor de un aerogenerador.
  </p>

  <div class="fondo">
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
      <button @click="checkResult" class="verify-btn">Comprobar</button>
    </div>
  </div>
  <div id="verification-result"></div>
</template>

<script>
export default {
  data() {
    return {};
  },
  methods: {
    changeValue(delta, inputId, selectedLetterId) {
      var inputField = document.getElementById(inputId);

      if (inputField) {
        var selectedLetterField = document.getElementById(selectedLetterId);
        var currentValue = inputField.value.charCodeAt(0) || 'A'.charCodeAt(0) - 1;
        var newValue = String.fromCharCode(((currentValue - 'A'.charCodeAt(0) + delta + 26) % 26) + 'A'.charCodeAt(0));

        // Establecer el valor en el campo
        inputField.value = newValue;
        selectedLetterField.value = newValue;
      } else {
        console.error("Elemento con ID", inputId, "no encontrado");
      }
    },

    checkResult() {
      var resultElement = document.getElementById('verification-result');
      var result1 = document.getElementById('letterInput1').value;
      var result2 = document.getElementById('letterInput2').value;
      var result3 = document.getElementById('letterInput3').value;

      if (result1 === 'B' && result2 === 'C' && result3 === 'P') {
        document.querySelector('.fondo').style.backgroundImage = "url('../../public/images/CandadoAbierto.png')";
        resultElement.innerHTML = '¡Correcto! Los valores han sido reiniciados.';
        this.resetValues();
      } else {
        resultElement.innerHTML = '¡Código incorrecto!';
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
