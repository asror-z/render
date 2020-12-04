
function add_compare_list(data) {
    
    $.ajax({
        url: '/core/product/addToCompare.aspx',
        type: 'GET',
        data: {
            product_id: data,
            option: [],
        },
        success: function (data) {
            
            $('#compare_list').html(data);
            if (!$('#addToCompare').hasClass('active')) {
                $('#addToCompare').addClass('active');
            } else {
                $('#addToCompare').removeClass('active');
            }
        },
        complete: function (data) {

        },
        error: function (res) {
            console.log(res + 'not sent')
        }
    });
};
