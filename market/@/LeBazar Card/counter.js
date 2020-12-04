var badge = "<div class='badge-counter' style='width: 50px;padding:10px; text-align: center; height: 50px;background-color:green; color: white; border-radius: 50%;position: absolute; top: 2%;right: 5%'>1</div>";
var counts = 0;
$('.addCounter').click(function() {
    var plusButton = $(this);
    var main = plusButton.parents('.card-lb');
    var header = main.children('.card-lb-header');
    var headerChild = header.children('.badge-counter');
    let counters_parent = $(this).siblings('.counters');
    var minusBtn_parent = main.children('.card-lb-footer');
    var minusBtn = minusBtn_parent.children('.card-lb-counter');
    var minBtn = minusBtn.children('.minCounter');
    minBtn.removeAttr('disabled');
    minBtn.css({'opacity':'1', 'cursor':'pointer'});
    counters_parent.text(counts += 1);
    let plusValue = Number(counters_parent.text());
    if (plusValue > 0) {
        let parent_s_footer = plusButton.parent('.card-lb-footer');
        parent_s_header = parent_s_footer.siblings('.card-lb-header');
       // parent_s_header.append(badge_{id});
        $('#basketBadge').html(plusValue);
    }
    headerChild.html(plusValue);

    $('#basketBadge').html(plusValue);

    $.ajax({
        url: 'http://eyuf.zetsoft.uz/kernel/product/setToCart.aspx',
        method: "GET",
        data: {
            amount: plusValue
        },
        success: function (data) {
            var mainParent = $('.cart-box');
            var firstChild = mainParent.children('d-flex');
            var secondChild = firstChild.children('.cart-btn');
            var thirtyChild = secondChild.children('#showCartBtn');
            var spanText = thirtyChild.children('#cart_total_amount');
            var total_products = spanText.html();
            total_products = parseInt(total_products);
            console.log(total_products);
            data = parseInt(data);
            var wish = data;
            console.log(jQuery.type(data),jQuery.type(total_products));
            $('#cart_total_amount').html(wish.toString());
            console.log(total_products);
        },
        error: function (e) {
            console.log(e);
        }
    });


});

