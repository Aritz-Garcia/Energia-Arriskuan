// TODO: NO FUNCIONA

function toggleFullScreen() {
    if (!document.fullscreenElement) {
        document.documentElement.requestFullscreen();
        console.log('fullScreen');
        document.getElementById('fullScreendivdiv').classList.remove('block');
        document.getElementById('fullScreendivdiv').classList.add('hidden');
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
            document.getElementById('fullScreendivdiv').classList.remove('hidden');
            document.getElementById('fullScreendivdiv').classList.add('block');
        }
    }
}

if (!document.fullscreenElement) {
    document.getElementById('fullScreendivdiv').classList.remove('hidden');
    document.getElementById('fullScreendivdiv').classList.add('block');
} else {
    document.getElementById('fullScreendivdiv').classList.remove('block');
    document.getElementById('fullScreendivdiv').classList.add('hidden');
}

document.getElementById('fullScreen').addEventListener('click', function () {
    toggleFullScreen();
});

const sleep = ms => new Promise(r => setTimeout(r, ms));

document.addEventListener(
    "keydown",
    function (e) {
      if (e.keyCode == 122) {
        // e.preventDefault();
        toggleFullScreen();
        return false;
        if (!document.fullscreenElement) {
            console.log('fullScreen1');
            document.getElementById('fullScreendivdiv').classList.remove('hidden');
            document.getElementById('fullScreendivdiv').classList.add('block');
        } else {
            document.getElementById('fullScreendivdiv').classList.remove('block');
            document.getElementById('fullScreendivdiv').classList.add('hidden');
        }
      }
    },
    false,
  );
