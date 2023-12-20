document.addEventListener('DOMContentLoaded', function () {
    let botonMenuMovil = document.getElementById('boton-menu-movil');
    let megaMenu = document.getElementById('mega-menu');

    botonMenuMovil.addEventListener('click', function () {
        megaMenu.classList.toggle('hidden');
    });
});

