document.addEventListener('DOMContentLoaded', function () {
    let botonMenuMovil = document.getElementById('boton-menu-movil');
    let megaMenu = document.getElementById('mega-menu');

    if (botonMenuMovil != null) {
        botonMenuMovil.addEventListener('click', function () {
            megaMenu.classList.toggle('hidden');
        });
    }
});

