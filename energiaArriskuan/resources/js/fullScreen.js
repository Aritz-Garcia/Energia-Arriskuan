// const sleep = ms => new Promise(r => setTimeout(r, ms));

detectarFullScreen();

// document.getElementById('fullScreenBtn').addEventListener('click', function () {
//     toggleFullScreen();
// });

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

// async function toggleFullScreen() {
//     if (!detectarFullScreen()) {
//         document.documentElement.requestFullscreen();
//         document.getElementById('fullScreendivdiv').classList.remove('block');
//         document.getElementById('fullScreendivdiv').classList.add('hidden');
//     } else {
//         if (document.exitFullscreen) {
//             document.exitFullscreen();
//             document.getElementById('fullScreendivdiv').classList.remove('hidden');
//             document.getElementById('fullScreendivdiv').classList.add('block');
//         }
//     }
// }

// document.addEventListener(
//     "keydown",
//     (e) => {
//         if (e.key === 'F11' || e.keyCode == 122) {
//             e.preventDefault();
//         }
//     }
// );

// Detecta si la pantalla cambia de tamaño
window.addEventListener('resize', function () {
    detectarFullScreen();
});
