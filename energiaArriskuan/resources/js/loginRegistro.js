document.addEventListener("DOMContentLoaded", function () {
    let testua = document.getElementById("testuaInfo");
    let info = document.getElementById("infoImg");
    let cerrar = document.getElementById("cerrarInfo");

    info.addEventListener('click', function () {
        testua.classList.remove("hidden");
        testua.classList.add("flex");
        document.body.classList.toggle('overflow-hidden');
    });

    cerrar.addEventListener('click', function () {
        testua.classList.remove("flex");
        testua.classList.add("hidden");
        document.body.classList.remove('overflow-hidden');
    });
});

function closeModal() {
    
}