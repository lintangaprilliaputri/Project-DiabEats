const startBtn = document.querySelectorAll('.start');
const popupInfo = document.querySelector('.popup-info');
const exitBtn = document.querySelector('.exit-btn');
const main = document.querySelector('.mainn');

startBtn.onclick = () => {
    main.classList.add('active');
    popupInfo.classList.add('active');
}
exitBtn.onclick = () => {
    main.classList.remove('active');
    popupInfo.classList.remove('active');
}

let subMenu = document.getElementById("subMenu");

        function toggleMenu(){
            subMenu.classList.toggle("open-menu"); }