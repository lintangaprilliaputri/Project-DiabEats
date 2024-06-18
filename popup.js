const startButtons = document.querySelectorAll('.start');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
const confirmDelete = document.getElementById('confirmDelete');
const main = document.querySelector('.mainn');

startButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        event.preventDefault();
        console.log("Delete button clicked"); // Debug log
        const productId = button.getAttribute('data-id');
        console.log("Product ID:", productId); // Debug log
        confirmDelete.setAttribute('href', 'hapusProduk.php?id=${productId}');
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