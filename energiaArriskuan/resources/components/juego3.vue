<template>
    <p class="text-[#0bd904] bg-[#000000] p-6 text-2xl md:w-auto mx-10" id="text">
      El código está formado por las iniciales de las 3 partes que forman el rotor de un aerogenerador.
    </p>
  
    <div class="fondo" :class="{ 'vibrating': vibration }">
      <div class="input-container">
        <div class="number-input">
          <button class="btn-increment" @click="changeValue(1, 'letterInput1')" :disabled="inputsBlocked">&#8593;</button>
          <input type="text" class="input-field" id="letterInput1" :value="result1" readonly>
          <button class="btn-decrement" @click="changeValue(-1, 'letterInput1')" :disabled="inputsBlocked">&#8595;</button>
        </div>
  
        <div class="number-input">
          <button class="btn-increment" @click="changeValue(1, 'letterInput2')" :disabled="inputsBlocked">&#8593;</button>
          <input type="text" class="input-field" id="letterInput2" :value="result2" readonly>
          <button class="btn-decrement" @click="changeValue(-1, 'letterInput2')" :disabled="inputsBlocked">&#8595;</button>
        </div>
  
        <div class="number-input">
          <button class="btn-increment" @click="changeValue(1, 'letterInput3')" :disabled="inputsBlocked">&#8593;</button>
          <input type="text" class="input-field" id="letterInput3" :value="result3" readonly>
          <button class="btn-decrement" @click="changeValue(-1, 'letterInput3')" :disabled="inputsBlocked">&#8595;</button>
        </div>
      </div>
  
      <div class="containerBoton">
        <button @click="checkResult" class="verify-btn" :disabled="verificationButtonBlocked">ABRIR</button>
      </div>
    </div>
    <div id="verification-result"></div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        inputsBlocked: false,
        verificationButtonBlocked: false,
        vibration: false,
        result1: 'A',
        result2: 'A',
        result3: 'A',
      };
    },
    methods: {
      changeValue(delta, inputId) {
        if (!this.inputsBlocked) {
          var inputField = document.getElementById(inputId);
  
          if (inputField) {
            var currentValue = inputField.value.charCodeAt(0) || 'A'.charCodeAt(0) - 1;
            var newValue = String.fromCharCode(((currentValue - 'A'.charCodeAt(0) + delta + 26) % 26) + 'A'.charCodeAt(0));
  
            inputField.value = newValue;
          } else {
            console.error("Elemento con ID", inputId, "no encontrado");
          }
        }
      },
  
      checkResult() {
        var resultElement = document.getElementById('verification-result');
        var resultElement2 = document.getElementById('text');
        this.result1 = document.getElementById('letterInput1').value;
        this.result2 = document.getElementById('letterInput2').value;
        this.result3 = document.getElementById('letterInput3').value;
  
        if (this.result1 === 'B' && this.result2 === 'C' && this.result3 === 'P') {
          document.querySelector('.fondo').style.backgroundImage = "url('/T1-2DW3D/energiaArriskuan/public/images/candadoAbierto.png')";
          resultElement2.innerHTML = '¡Correcto! Ahora puedes entrar al Biltegi';
          this.resetValues();
          resultElement.innerHTML = '';
          this.inputsBlocked = true;
          this.verificationButtonBlocked = true;
          setTimeout(() => {
            document.getElementById("juego3div").classList.remove("block");
            document.getElementById("juego3div").classList.add("hidden");
          }, 3000);
        } else {
          this.vibration = true;
          setTimeout(() => {
            this.vibration = false;
          }, 500);
        }
      },
  
      resetValues() {
        this.result1 = 'B';
        this.result2 = 'C';
        this.result3 = 'P';
      },
    },
  };
  </script>
 