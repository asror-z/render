/**
 *
 * Author:  Asror Zakirov
 * Created: 24.07.2017 14:56
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


$(function () {

    function SimpleLoadingConstructor() {
        if (window.SimpleLoading)
            return window.SimpleLoading;

    }

    SimpleLoadingConstructor.prototype =
    {
        init: function (config) {

        },
        start: function (clazz) {
            if (!clazz)
                clazz = "369";

            $('#asrorz_simple_loading').removeClass().addClass("simple-loading simple-loading-" + clazz)
                .css('display', 'none')
                .show();


        },
        stop: function () {
            $('#asrorz_simple_loading').hide();

        }
    };

    window.SimpleLoading = new SimpleLoadingConstructor();
});
