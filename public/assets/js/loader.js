// Loader

document.addEventListener("DOMContentLoaded", () => {
    const loader = document.querySelector("#loader");
    setTimeout(() => {
        loader.style.opacity = "0";
        setTimeout(function () {
            loader.style.display = "none";
        }, 500);
    }, 500);
});




