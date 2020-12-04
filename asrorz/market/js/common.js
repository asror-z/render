/**
 *
 * Author:  Asror Zakirov
 * Created: 6/17/2020 11:37 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

function common() {

    window.onload = () => {
        let temp = "<div class='text-danger text-center' id='market-alert'>Для начала необходимо выбрать свойства продукта</div>";
        $('#market_list').append(temp);
        console.log(temp);
    };

    var radioBtns = $(document).find('input[type="radio"]');
    radioBtns.each(function (key, radio) {
        $(radio).click(function () {
            loadData();
            $('#refreshMarketList').click();
            console.log('sadasdasd')
        })
    });
}
