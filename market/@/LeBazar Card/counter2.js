
var counts = 0;
$('.minCounter').click(function() {
    var plusButton = $(this);
    var main = plusButton.parents('.card-lb');
    var header = main.children('.card-lb-header');
    var headerChild = header.children('.badge-counter');
    let counters_parent = $(this).siblings('.counters');
    counters_parent.text(counts -= 1);
    console.log(counters_parent.text());
    let plusValue = Number(counters_parent.text());
    if (plusValue <= 0) {
        $(this).attr('disabled','disabled');
        $('.badge-counter').remove();
    }else {
      
    }
    headerChild.html(plusValue);
    $('#basketBadge').html(plusValue);
    
    $.ajax({
        url: 'http://eyuf.zetsoft.uz/kernel/product/setToCart.aspx',
        method: "GET",
        data: {
            product_id: 1,
            amount: plusValue
        },
        success: function (data) {
            console.log(data);
        },
        error: function (e) {
            console.log(e);
        }
    });


});
