let inputCard = document.querySelector('.input-card');
let cartList = document.querySelector('.cart-list');
let inputPrice = document.querySelector('.input-price');

inputCard.addEventListener('click', () => {
    cartList.style.display = 'block'
});

inputPrice.addEventListener('click', () => {
    cartList.style.display = 'none'
});
//================================== =


let bankLogos = document.querySelectorAll('.bank-logo');

bankLogos.forEach((bankLogo) => {
    bankLogo.addEventListener('click', onCardHandler)
})

    function onCardHandler(e) {
    e.preventDefault();

        this.style.border = '2px solid green';
        this.style.borderRadius = '8px';
        console.log(this.id)
    if(this.id !== id) {
        this.id.style.border = 'none';
    }

}



// let imgBox = document.querySelector('.img-box');
// console.log(bankLogo)
// bankLogo.addEventListener('click', () => {
//     bankLogo.style.border = '2px solid green';
//     bankLogo.style.borderRadius = '8px';
// });

// let items=$('.bank-logo');
// console.log()
//
// items.on('click',function () {
//     let id=$(this)[0].id;
//     $(this).css('border','2px solid green');
//     $(this).css('borderRadius', '8px');
//     items.map(item=>
//         $(item)[0].id==id?
//             $(this).css('border','')
//                 :''
//         console.log($(this)[0].id)
//     )
//
// })

//==============================


//
// let uzcard = document.getElementById('uzCard');
// let vis = document.getElementById('visa');
// let masterCard = document.getElementById('masterCard');
// let bankLogo = document.querySelector('.bank-logo');
//
//
// uzcard.addEventListener('click', onUzcard);
// function onUzcard() {
//     bankLogo.style.border = '2px solid green';
//     bankLogo.style.borderRadius = '8px';
// }
//
// visa.addEventListener('click', () => {
//     this.style.border = '2px solid green';
//
//
// });