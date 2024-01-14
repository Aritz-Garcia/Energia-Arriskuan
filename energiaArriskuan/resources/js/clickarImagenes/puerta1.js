document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('imagenClickable').addEventListener('click', function(event) {
        // Obtén las coordenadas del clic en relación con la imagen
        var posX = event.clientX - event.target.offsetLeft;
        var posY = event.clientY - event.target.offsetTop;

        // Define las coordenadas de la parte específica que quieres hacer clic
        var areaTopPSotoa = 40;     // 40% del alto de la imagen
        var areaLeftPSotoa = 66;    // 66% del ancho de la imagen
        var areaWidthPSotoa = 8;    // 9% del ancho de la imagen
        var areaHeightPSotoa = 27;  // 27% del alto de la imagen

        // Calcula las coordenadas absolutas de la posición específica
        var areaTopAbsPSotoa = (areaTopPSotoa / 100) * event.target.height;
        var areaLeftAbsPSotoa = (areaLeftPSotoa / 100) * event.target.width;
        var areaWidthAbsPSotoa = (areaWidthPSotoa / 100) * event.target.width;
        var areaHeightAbsPSotoa = (areaHeightPSotoa / 100) * event.target.height;

        var areaTopPAlamacen = 40;     // 40% del alto de la imagen
        var areaLeftPAlamacen = 26;    // 66% del ancho de la imagen
        var areaWidthPAlamacen = 8;    // 9% del ancho de la imagen
        var areaHeightPAlamacen = 27;  // 27% del alto de la imagen

        // Calcula las coordenadas absolutas de la posición específica
        var areaTopAbsPAlamacen = (areaTopPAlamacen / 100) * event.target.height;
        var areaLeftAbsPAlamacen = (areaLeftPAlamacen / 100) * event.target.width;
        var areaWidthAbsPAlamacen = (areaWidthPAlamacen / 100) * event.target.width;
        var areaHeightAbsPAlamacen = (areaHeightPAlamacen / 100) * event.target.height;

        // Verifica si el clic está dentro de la parte específica
        if (posY >= areaTopAbsPSotoa && posY <= areaTopAbsPSotoa + areaHeightAbsPSotoa &&
            posX >= areaLeftAbsPSotoa && posX <= areaLeftAbsPSotoa + areaWidthAbsPSotoa) {
            // Realiza la acción deseada
            
        } else if (posY >= areaTopAbsPAlamacen && posY <= areaTopAbsPAlamacen + areaHeightAbsPAlamacen &&
            posX >= areaLeftAbsPAlamacen && posX <= areaLeftAbsPAlamacen + areaWidthAbsPAlamacen) {
            // Realiza la acción deseada
            console.log("Almacen");
        }
    })
});
