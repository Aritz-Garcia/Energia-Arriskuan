detectarFullScreen();

function detectarFullScreen() {
    let screenWidth = screen.width;
    let windowWidth = window.innerWidth;
    let screenHeight = screen.height;
    let windowHeight = window.innerHeight;

    if (screenWidth == windowWidth && screenHeight == windowHeight) {
        // La pantalla está en pantalla completa
        document.getElementById('fullScreendivdiv').classList.remove('block');
        document.getElementById('fullScreendivdiv').classList.add('hidden');
        return true;

    } else {
        // La pantalla no está en pantalla completa
        document.getElementById('fullScreendivdiv').classList.remove('hidden');
        document.getElementById('fullScreendivdiv').classList.add('block');
        return false;
    }
}

// Detecta si la pantalla cambia de tamaño
window.addEventListener('resize', function () {
    detectarFullScreen();
});
