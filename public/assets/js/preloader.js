document.addEventListener("DOMContentLoaded", function () {
    // Wait until the page fully loads
    window.onload = function () {
        setTimeout(() => {
            let preloader = document.getElementById("preloader-active");
            if (preloader) {
                preloader.style.opacity = "0"; // Smooth fade out
                setTimeout(() => {
                    preloader.style.display = "none"; // Hide completely
                }, 500); // Delay to match fade-out animation
            }
        }, 1000); // Adjust delay before removing loader
    };
});
