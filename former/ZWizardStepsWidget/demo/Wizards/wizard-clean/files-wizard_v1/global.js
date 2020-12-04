/**
 *
 * Author:  Asror Zakirov
 * Created: 12/23/2019 10:56 AM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */

(function ($) {
    'use strict';
    /*[ Wizard Config ]
        ===========================================================*/

    try {


        $("#js-wizard-form").bootstrapWizard({
            'tabClass' : 'nav-tab',
            'nextSelector': '.btn-next',
            'previousSelector' : '.btn-back',
            'lastSelector': '.btn-last',
            'onNext': function(tab, navigation, index) {
                var progressBar = $('#js-progress').find('.progress-bar');
                var progressVal = $('#js-progress').find('.progress-val');
                var current = index + 1;
                if (current > 1) {
                    var val = parseInt(progressBar.text());
                    val += 30;
                    progressBar.css('width', val+ '%');
                    progressVal.text(val+'%');
                }

            },
            'onNext': function(tab, navigation, index) {
                var tab-content = $('#tab1').find('.tab-pane');
                var progressVal = $('#tab1').find('.tab-pane-val');
                var current = index + 1;
                if (current > 1) {
                    var val = parseInt(progressBar.text());
                    val += 30;
                    progressBar.css('width', val+ '%');
                    progressVal.text(val+'%');
                }

            },
            'onPrevious' : function(tab, navigation, index) {
                var progressBar = $('#js-progress').find('.progress-bar');
                var progressVal = $('#js-progress').find('.progress-val');
                var current = index - 1;
                if (current !== 1) {
                    var val = parseInt(progressBar.text());
                    val -= 30;
                    progressBar.css('width', val+ '%');
                    progressVal.text(val+'%');
                }

            }

        });

    }
    catch (e) {
        console.log(e)
    }

})(jQuery);
