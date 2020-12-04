/**
 *
 * Author:  Asror Zakirov
 * Created: 6/15/2020 6:59 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


$(document).ready(function () {

    let hcards = $('.horizontal-vertical-card');
    hcards.each(function (i,item) {
        let id = $(item).attr('data-product-id');
        let input = $("#input-"+id+" input");
        let cart_amount = $(item).attr('data-cart-amount');

        if (cart_amount>0)
            input.val(cart_amount)
    })
})


/*
*
if(<?= $item->cart_amount?>>0){
        $("#input-<?=$item->id?> input").val(<?= $item->cart_amount?>);
     }
* */
