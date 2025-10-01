(function () {
    const menuToggle = document.querySelector('.menu-toggle');
    const body = document.querySelector('body');

    if (menuToggle) {
        // Uso de addEventListener é a forma CORRETA
        menuToggle.addEventListener('click', function (e) {
            body.classList.toggle('hide-sidebar');
        });
    }
})();