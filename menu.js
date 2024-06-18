document.addEventListener('DOMContentLoaded', () =>{
    const addToCartButton = document.querySelectorAll('.menu_btn');
    const cartItemCount = document.querySelector('.icon img span');
    const cartItemList = document.querySelector('.cart-item');
    const cartTotal = document.querySelector('.cart-total');
    const cartImg = document.querySelector('.icon img');
    const sidebar= document.getElementById('.sidebar');

    let cartItems = [];
    let totalAmount = 0;

    addToCartButton.forEach((button, index)) => {
        button.addEventListener('click', () => {
            const item = {
                name: document.querySelectorAll('.menu_card .menu_info')[index].textContent,
                price: parseFloat(
                    document.querySelectorAll()
                )
            }
        })
    }
})  