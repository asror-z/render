
    $('.card-lb-btn').hide();
    $('.card-lb').mouseleave(  function() {
        $('.card-lb-btn').hide();
    })

    $('.card-lb').mouseover( function() {
        $('.card-lb-btn').show();
    });

    let counter = "<div class='card-lb-counter d-flex' style='margin-left:10%'>" +
        "<button id='minCount' type='button' disabled class='btn btn-success' style='opacity: 0.2; cursor: no-drop' onclick='minCounter()'>-</button>"+ "<div style='width: 50%; border: 1px solid lightgray' id='cardCounter'>1</div>" +"<button class='btn btn-success' type='button' onclick='countered()' class='addCount'>+</button>"+
        "</div>";

    let shopIcon = "<i id='iconShop' class=\"fas fa-shopping-cart ml-auto\"></i>";

    let badge = "<div id='badgeCounter' style='width: 50px; text-align: center; height: 50px;background-color:green; color: white; border-radius: 50%;position: absolute; top: 2%;right: 5%'>1</div>";




    let cardLengt = $('.card-lb').length;



    $('.card-lb-btn').on('click', function () {
        $('.card-lb-btn').remove();
        $('.card-lb-footer').append(counter);
        if(!$('.card-lb-header').find('#badgeCounter').length ){
            $('.card-lb-header').append(badge);
        }

    });
    let count = 0;

    function countered() {
        $('#cardCounter').html(count +=1);
        let plusValue = $('#cardCounter').html();
        $('#minCount').removeAttr('disabled');
        $('#minCount').css({'opacity':'1', 'cursor':'pointer'});
        if(!$('.card-lb-content--items').find('#iconShop').length ){
            $('.card-lb-content--items').append(shopIcon);
        }
        $('#badgeCounter').html(plusValue);
        $('#basketBadge').html(plusValue);

    }

    function minCounter() {
        $('#cardCounter').html(count -=1);
        $('#badgeCounter').html(count -=0);
        $('#basketBadge').html(count -=0);
    }



    /***** Shopping Cart *****/
    $('.cart-btn').on('click', function(e){
        e.preventDefault();
        $('.cart-overlay').addClass('visible');
        $('.cart-body').addClass('open');
    });
    $('.close-cart, .cart-overlay').on('click', function(e){
        e.preventDefault();
        $('.cart-overlay').removeClass('visible');
        $('.cart-body').removeClass('open');
    });






