/**
 *
 * Author:  Asror Zakirov
 * Created: 6/4/2020 10:52 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

$(document).ready(function () {
    $('.add-card').on("click", function () {
        $(this).addClass('d-none');
        var parent = $(this).parent('.footer-main');
        var childTouch = parent.children(".touch-main");
        var second = childTouch.children('.touch-main-children').children('.parent-clear').children('.bootstrap-touchspin').children('.clear-add-btn');
        childTouch.removeClass("d-none");
        second.val(1);
        var catalogId = $(this).attr('data-catalog-id');
        console.log(catalogId);
        console.log(catalogId)

        $.ajax({
            url: '/core/product/setToCart.aspx',
            method: 'GET',
            data: {
                catalog_id: catalogId,
                amount: 1,
            },
            success: function (data) {
                $('#cart_total_amount').html(data);
                console.log(data, $('#cart_total_amount').html(data))
                $('#refreshMessage').click();
            },
            error: function (error) {
                console.log(error);
            }
        })

    });
});


$(document).ready(function () {
    $('.v-card-clear-add').on("click", function () {
        var clear = $(this).parents(".touch-main:first");
        let add_cart = clear.prev('.add-card');
        var zero = $(this).prev('.parent-clear');
        var first = zero.children(".bootstrap-touchspin");
        var second = first.children(".clear-add-btn");
        $(add_cart).removeClass("d-none");
        $(clear).addClass("d-none");
        second.val(0);
        var catalogId = $(this).attr('data-catalog-id');
        console.log(catalogId);
        $.ajax({
            url: '/core/product/setToCart.aspx',
            method: 'GET',
            data: {
                catalog_id: catalogId,
                amount:0,
            },
            beforeSend: function () {
                //$('#refreshMessage').click();
            },
            success: function (data) {
                $('#cart_total_amount').html(data);
                console.log(data, $('#cart_total_amount').html(data))
                $('#refreshMessage').click();
            },
            error: function (error) {
                console.log(error);
            }
        })
    })
})


function spinUp(id,catalogId)
{
    let amount = $("#input-" + id + " input").val();
    console.log('sadsad')

    $.ajax({
        url: '/shop/core/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount: amount,
        },
        success: function (data) {
            $('#cart_total_amount').html(data);
        },
        error: function (error) {
            console.log(error);
        }
    })
}

function spinDown(id,catalogId) {

    let amountMinus = $("#input-" + id + " input").val();
    $.ajax({
        url: '/shop/core/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount: amountMinus --,
        },
        success: function (data) {
            $('#cart_total_amount').html(data);
        },
        error: function (error) {
            console.log(error);
        }
    })

}




/*var basketDelete = function (id) {

    //var card = $('#' + id);
    var catalogId = $('#add-card-' + id).attr('data-catalog-id');
    console.log(catalogId);
    
   /!* var clear = $(id).parent(".parent-clear");
    var first = clear.children(".bootstrap-touchspin");
    var second = first.children(".clear-add-btn");*!/
    $('#add-card-' + id).removeClass("d-none");
    $('#input-' + id).addClass("d-none");
    //second.val("");
    $('#input-' + id + ' input').val(0);
    $.ajax({
        url: '/kernel/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount:0,
},
    success: function (data) {
        $('#cart_total_amount').html(data);
        console.log(data, $('#cart_total_amount').html(data))
    }
,
    error: function (error) {
        console.log(error);
    }
})
}
var addCard = function (id) {


    //var card = $('#' + id);
    //var catalogId = this.data('catalog-id');
    var catalogId = $('#add-card-' + id).attr('data-catalog-id');
    console.log(catalogId);

    $('#add-card-' + id).addClass('d-none');
    var childTouch = $('#input-' + id);
    childTouch.removeClass("d-none");
    $('#input-' + id + 'input').val(1);
    $.ajax({
        url: '/kernel/product/setToCart.aspx',
        method: 'GET',
        data: {
            catalog_id: catalogId,
            amount: 1,
},
    success: function (data) {
        $('#cart_total_amount').html(data);
        console.log(data, $('#cart_total_amount').html(data))
    }
,
    error: function (error) {
        console.log(error);
    }
})
}*/


