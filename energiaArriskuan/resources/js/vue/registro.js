const vueApp = {
    data() {
        return {
            erabiltzaileak: {
                izena: '',
                abizena: '',
                erabiltzailea: '',
                email: '',
            },
            pausua: 1,
            pausuakTotal: 2,
        }
    },
    methods: {
        aurrera() {
            this.pausua++;
        },
        atzera() {
            this.pausua--;
        },
        bidali() {
            this.pausua = 1;
        }
    }
}

Vue.createApp(vueApp).mount("#registro");
