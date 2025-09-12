
(function () {
    const navbar = document.getElementById('navbar');
    let lastScrollY = window.scrollY;

    window.addEventListener('scroll', function () {
        if (window.scrollY > lastScrollY && window.scrollY > 60) {
            // Scrolling down
            navbar.style.top = '-100px';
            navbar.style.backgroundColor = "transparent";
            navbar.style.backdropFilter = "none"; // remove blur
        }
        else if (window.scrollY === 0) {
            // At the very top
            navbar.style.top = '0';
            navbar.style.backgroundColor = "transparent";
            navbar.style.backdropFilter = "none"; // remove blur at top
        }
        else {
            // Scrolling up
            navbar.style.top = '0';
            // navbar.style.backgroundColor = "rgba(255, 255, 255, 0.3)";
            navbar.style.backdropFilter = "blur(10px)";
        }
        lastScrollY = window.scrollY;
    });
})();
