document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const mainMenu = document.getElementById('main-menu');
    const dropdownItem = document.querySelector('.dropdown-lis');

      if (menuToggle && mainMenu) {
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active'); // Cambia icono
            mainMenu.classList.toggle('is-open'); // Abre/Cierra menú
        });
    }

    if (dropdownItem) {
        dropdownItem.addEventListener('click', (e) => {
            // Evitar que el enlace navegue
            e.preventDefault();

            // Toggle submenú
            dropdownItem.classList.toggle('show-dropdown');
        });
    }

     document.addEventListener('click', (e) => {
        if (!mainMenu.contains(e.target) && !menuToggle.contains(e.target)) {
            mainMenu.classList.remove('is-open');
            menuToggle.classList.remove('active');

            if (dropdownItem) {
                dropdownItem.classList.remove('show-dropdown');
            }
        }
    });
});