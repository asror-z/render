function inputchange(){
    var newValue = $(this).val();
    var price =  $(this).data('price');

    $('#total'+$(this).data('id')).html(newValue*price);

    var catalog_id = $(this).data('catalogid');
    var total = 0;
    $.each($(".totals"), function( key, value ) {
        var newTotal = String(value.innerHTML).split(" ");
        sum = '';
        $.each(newTotal,function(key,value) {
            sum+=value;
        });

        total += parseFloat(sum);
    });


    let parsed = parseFloat(total);

    $("#subtotals").html(parsed);
    $("#totalsum").html(Number($("#shipping").html())+Number($("#subtotals").html()));

    $.ajax({
        method: "GET",
        url: "/core/kernel/product/setToCart.aspx",
        data: {
            catalog_id: catalog_id,
            amount    : newValue,
        },
        success: function(data){
            $(".wishCount").html(data);
        },
        error:  function() {
            alert('error');
        }
    });
};
