/*
 * Author - Hariharan
 * Version - 1.0.1
 * Release - 23th November 2017
 * Copyright (c) GNU(Free License)
 */



(function ($) {

    $.fn.textareaCounter = function (options) {
        return this.each(function () {
            showTextArea($(this), options);
        });
    };

    /*---Definition of private function showTextArea.---*/
    function showTextArea($this, options) {
        var opts = $.extend({}, $.fn.textareaCounter.defaults, options);
        var $this = $this;

        var txtElem = "";
        var charElem = "";
        var lineElem = "";
        var progElem = "";
        var progPerc = "";
        var txtCount = "";
        var lineCount = "";
        var perLine = "";

        var textOrig = "";
        var textFormat = "";
        var textOrigLen = "";
        var textFormatLen = "";
        var textRemain = "";
        var percent = "";
        var pValue = "";
        var lCount= 1;

        txtElem = opts.txtElem;
        charElem = opts.charElem;
        lineElem = opts.lineElem;
        progElem = opts.progElem;
        progPerc = opts.progPerc;
        chars= perLine;
        txtCount = parseInt(opts.txtCount) - 1;
        lineCount = parseInt(opts.lineCount) - 1;
        perLine = parseInt(opts.charPerLine);

        if(txtElem != undefined && txtCount != 0){

            $('#'+txtElem).on('input focus keyup keydown',function(e) {

                textFormat = $('#'+txtElem).val();
                textFormat = $.trim(textFormat.replace(/[\t\n]+/g, ''));
                textFormatLen = textFormat.length;
                textRemain = txtCount - textFormatLen;
                
                if((textFormatLen >= 0)){

                    if((textRemain > 0)){

                        if(progElem != undefined || progPerc != undefined){
                            pValue = parseInt(textFormatLen) / parseInt(txtCount);
                            percent = pValue * 100;
                            percent = parseInt(percent);
                        }

                        if(progElem != undefined){
                            $('#'+progElem).css('width', percent + '%');
                        }

                        if(progPerc != undefined){
                            $('#'+progPerc).html(percent + '%');
                        }

                        if(charElem != undefined){
                            $("#"+charElem).html(textFormatLen);
                        }

                        if(lineElem != undefined){
                            var content = $('#'+txtElem).val();
                            var line_count = content.split('\n').length;
                            $("#"+lineElem).html(parseInt(line_count));
                        }

                        if(lineElem != undefined && lineCount != 0 && perLine != 0){

                            textOrig = $('#'+txtElem).val();
                            textOrigLen = textOrig.replace(/(\r\n|\n|\r)/gm,"").length;
                            lCount = textOrig.split('\n').length;

                            /*---Prevent Enter Key---*/
                            if((e.which == 13 && lCount > lineCount)){
                                return false;
                            }

                            /*---Prevent Copy Paste---*/
                            if (e.ctrlKey==true && (e.which == '118' || e.which == '86')) {
                                return false;
                            }

                            /*---Add New Line---*/
                            if(lCount <= lineCount){
                                if ((parseInt(textOrigLen/lCount) == perLine) && (textOrigLen != txtCount) && e.which != 46 && e.which != 8) {
                                    $('#'+txtElem).val(textOrig + '\n');
                                }
                            }
                        }

                    }else{
                        $this.val($this.val().substring(0,txtCount));
                        return false;
                    }

                }
            
            });
            
        }
        
    };

    /*---Giving default value for options.---*/
    $.fn.textareaCounter.defaults = {
        txtElem:'textarea',
        charElem:'charCount',
        lineElem:'lineCount',
        progElem:'progress-percent',
        progPerc:'progPercentage',
        txtCount:'100',
        lineCount:'10',
        charPerLine:'20',
    };

}(jQuery));
jQuery(document).ready(function() {

    $("#textarea").textareaCounter({
        txtElem:'textarea',
        charElem:'charCount',
        lineElem:'lineCount',
        progElem:'progress-percent',
        progPerc:'progPercentage',
        txtCount:'100',
        lineCount:'10',
        charPerLine:'20',
    });
});
