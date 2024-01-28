import { defineStore } from 'pinia'

export const useCounterStore = defineStore('bilatzailea', {
  state: () => ({
    testua:"",
  }),
  actions: {
    ezabatu() {
      this.testua = "";
    },
    testuaAldatu(event) {
        this.testua = event.target.value;
    },
  },
})
