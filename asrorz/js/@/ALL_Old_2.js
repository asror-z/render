if ($.AsrorZ === undefined) {
    $.AsrorZ = {};
}

$(document).on('click', '[data-toggle=popover-x]', function () {
    $("[data-toggle='popover-x']").popoverButton();
});

$(document).keyup(function (event) {
    if (event.which === 27) {
        $('.popover').popoverX('hide');
    }
});

var pauseBrowser = function (millis) {
    var date = Date.now();
    var curDate = null;
    do {
        curDate = Date.now();
    } while (curDate-date < millis);
}

function post(path, params, method = 'post') {

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    const form = document.createElement('form');
    form.method = method;
    form.action = path;

    for (const key in params) {
        if (params.hasOwnProperty(key)) {
            const hiddenField = document.createElement('input');
            hiddenField.type = 'hidden';
            hiddenField.name = key;
            hiddenField.value = params[key];

            form.appendChild(hiddenField);
        }
    }

    document.body.appendChild(form);
    form.submit();
}

function saveNewPositions(url) {
    var positions = [];
    $('.updated').each(function () {
        positions.push([$(this).attr('data-id'), $(this).attr('data-position')]);
        $(this).removeClass('updated');
    });

    $.ajax({
        url: url,
        method: 'post',
        dataType: 'text',
        data: {
            positions: positions
        }, success: function (response) {
            console.log(response);
        }
    });

}

// todo: Vardumper vd() yopiq turishi uchun  AzimjonToirov
$(document).ready(function () {
    $('samp.sf-dump-expanded').addClass('sf-dump-compact');
    $('samp.sf-dump-expanded').removeClass('sf-dump-expanded');
    $('a.sf-dump-ref').on('click', function () {
        $('samp.sf-dump-expanded').removeClass('sf-dump-compact');
    });

    //todo ZDownloadWidget iconcasi va nomi to'g'ri turishi uchun AzimjonToirov
    $('.kv-editable-value').addClass('w-100');
});

window.ajaxFor = function() {};

/**
 *  todo addToComparega ajax yuvoradi compareListga productni qoshib qoyadi AzimjonToirov
 *  Function add_compare_list
 * @param data
 * @param compare
 * @param is_remove
 * @author AzimjonToirov
 */

function add_compare_list(data, compare, is_remove = false) {
      compare.find('i').toggleClass('text-success');
    $.ajax({
        url: '/core/kernel/product/addToCompare.aspx',
        type: 'GET',
        data: {
            product_id: data,
        },
        success: function (data) {
            $('#compare_list').html(data);
            console.log(data)
            $('#refreshMessage').click();

            if (is_remove)
                location.reload();

        },
        error: function (res) {
            console.log(res + 'not sent')
        }
    });
};


/**
 *  todo addToWishga ajax yuvoradi wishListga productni qoshib qoyadi AzimjonToirov
 *  Function add_wish_list
 * @param data
 * @param heart
 * @author AzimjonToirov
 */
function add_wish_list(data, heart) {
    console.log(heart);
    heart.find('i').toggleClass('text-danger');
    $.ajax({
        url: '/core/kernel/product/addToWish.aspx',
        method: 'GET',
        data: {
            product_id: data,
        },
        success: function (data) {
            $('#wish_list').html(data);

            $('#refreshMessage').click();
        },
        error: function (res) {
            console.log(res + 'not sent')
        }
    });
};


$('.add-card ,.v-card-clear-add').on('click',function () {
    let amount = $('#cart_total_amount');
    if (parseInt(amount.html())>0)
        amount.removeClass('d-none');
    if ($(this).hasClass('.v-card-clear-add') && parseInt(amount.html())===1)
        amount.addClass('d-none');
})

$(document).ready(function () {
    $(window).on('scroll', function () {
        var main = $(this).scrollTop();
        if ($(this).scrollTop() > '100') {
            $('.ilon-mask').addClass('fixed-top');
        } else {
            $('.ilon-mask').removeClass('fixed-top');
        }
    });
});


//catalog olindi

//1
var wishes = document.querySelectorAll('.add_wish_list');
wishes.forEach(function (item) {
    $(item).click(function () {
        let elem_icon = $(this);
        let data = elem_icon.data('elemid');
        $.ajax({
            url: '/kernel/product/addToWish.aspx',
            method: 'GET',
            data: {
                product_id: data,
                option: [],
            },
            success: function (data) {
                $('#wish_list').html(data);
                elem_icon.find('i').toggleClass('wish-active');
            }
        })

    })
});



/*
$(document).ready(function () {
    setTimeout(function () {
        var body = $(document).find("body");
        body.removeClass("mm-wrapper");
    }, 3000);


});
*/




 // region SimpleLoader AzimjonToirov

/*jQuery(document).on('pjax:end', function () {
    SimpleLoading.stop();
});

jQuery(document).ready(function () {
    SimpleLoading.stop();
});

$('iframe').on('load', () => {
    SimpleLoading.stop();
})*/
/**
 * @author AzimjonToirov
 * Agar bosilgan a tagda zLoader classi bolsa loader chiqadi
 * hohlagan a tagga zLoader classi qoshilsa loader chiqadi
 *
 */
/*$(document).ready(() => {
    let allATags = $('a');
    $(allATags).click(function () {
        if ($(this).hasClass('zLoader')) {
            SimpleLoading.start();
            setTimeout(() => {
                SimpleLoading.stop();
            }, 3500);
        }
    });
})*/

// endregion









