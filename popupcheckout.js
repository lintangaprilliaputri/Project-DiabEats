const startButtons = document.querySelectorAll('.start');
const popupInfo = document.querySelector('.popup-info');
const confirmDelete = document.getElementById('confirmBack');
const main = document.querySelector('.Home');

startButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        console.log("Product ID:", productId); // Debug log
        confirmDelete.setAttribute('href', 'pelanggan.php?id=${productId}');
        main.classList.add('active');
        popupInfo.classList.add('active');
    });
});

exitBtn.addEventListener('click', (event) => {
    event.preventDefault();
    console.log("Exit button clicked"); // Debug log
    main.classList.remove('active');
    popupInfo.classList.remove('active');
});

let subMenu = document.getElementById("subMenu");

function toggleMenu() {
    subMenu.classList.toggle("open-menu");
}