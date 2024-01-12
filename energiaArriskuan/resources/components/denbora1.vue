<template>
    <div>
        <div>
            {{contador}}
        </div>
        <div>
            <button @click="decrementar">-</button>
            <button @click="incrementar">+</button>
        </div>
        <hr>
        <div>
            EL numero mostrado es: {{parImpar}}
        </div>
  </div>

</template>

<script>

import { mapState, mapActions } from 'pinia'
import {useCounterStore} from '@/pinia/tiempo'

export default {
    computed:{
    //En esta sección se utiliza mapState para mapear las propiedades del estado del store useCounterStore en las propiedades computadas del componente. En este caso, se están mapeando las propiedades contador y parImpar del store al componente.
    ...mapState(useCounterStore, ['contador','parImpar'])
  },
  methods:{
    //En esta sección se utiliza mapActions para mapear las acciones del store useCounterStore en los métodos del componente. Se están mapeando las acciones incrementar y decrementar.
    ...mapActions(useCounterStore,['incrementar', 'decrementar'])
  },
}
</script>

<style>

</style>
