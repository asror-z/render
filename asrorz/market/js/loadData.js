function loadData() {
    $.ajax({
        url: '/core/product/getCompanyAZ.aspx',
        type: 'GET',
        data: $("#formModal").serialize(),
        success: function (data) {
            $('#market-alert').remove();
            $('.data').html(data);
            $('.market-company').removeClass('d-none');
            $('.data').addClass('d-none');
            $('.data').find('span').addClass('d-block');
            var loading = $('.market-company').parent();
            var spinner = $('.market-company');
            $("#market_list").append(spinner);
            $('#market_list').css({"position": "relative"});
            $("#market_list").children().css({
                "z-index": "-1",
                "top": "10px",
                "right": "0",
                "opacity": "0.3"
            });
            spinner.css({
                "z-index": "9999",
                "position": "absolute",
                "top": "70px",
                "left": "120px",
                "opacity": "1"
            });
            loading.css({"z-index": "999"});
            setTimeout(function () {
                $('.market-company').addClass("d-none");
                $('.data').removeClass('d-none');
                loading.css({"z-index": "0"});
                $('#market_list').css({"opacity": "1", "z-index": "1"});
                $('#market_list').children().css({"opacity": "1", "z-index": "1"});

            }, 3000)
        },
        error: function (e) {
            console.log(e);
        }

    });
}
