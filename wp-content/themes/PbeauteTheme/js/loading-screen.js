document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener("beforeunload", function() {
        document.getElementById("loading-screen").style.display = "flex";
    });
});