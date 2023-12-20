const vueApp = {
    data() {
        return {
            erabiltzaileak: {
                izena: '',
                abizena: '',
                erabiltzailea: '',
                email: '',
                argazkia: false,
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
            const dialog = document.getElementById('dialog');
            if (!dialog.classList.contains('hidden')) {
                dialog.classList.add('hidden');
                this.erabiltzaileak.argazkia = false;
            }
            this.pausua--;
        },
        dialogAtzera() {
            if (this.erabiltzaileak.argazkia) {
                const dialog = document.getElementById('dialog');
                dialog.classList.remove('hidden');
            } else {
                this.atzera();
            }
        },
        dialogoItxi() {
            const dialog = document.getElementById('dialog');
            dialog.classList.add('hidden');
        },
        argazkiaBarruan(evt) {
            const file = evt.target.files[0];
            if (file != null) {
                this.erabiltzaileak.argazkia = true;
            } else {
                this.erabiltzaileak.argazkia = false;
            }
        }
    }
}

Vue.createApp(vueApp).mount("#registro");
