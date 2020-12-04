/*
 * textarea_MaxCharacterLimit()
 * Version: 1.0.2
 * License: MIT license
 * Copyright: 4CM Network
 * https://github.com/4cm/textarea_MaxCharacterLimit/
*/
function textarea_MaxCharacterLimit(totalCharsAllowed, textareaIdentifier, spanId) {
    //
    $('#' + spanId).text(totalCharsAllowed + ' (0% used :: 0 characters used)');
    //
    $('#' + textareaIdentifier).keyup(function() {
        //
        let content = $(this).val();
        //
        let contentCharCount = content.replace(/\b(?:https?|ftp):\/\/[a-z0-9-+&@#\/%?=~_|!:,.;]*[a-z0-9-+&@#\/%=~_|]/gim, '').replace(/(^|[^\/])(www\.[\S]+(\b|$))/gim, '').replace(/[\w.]+@[a-zA-Z_-]+?(?:\.[a-zA-Z]{2,6})+/gim, '').replace(/(?<!\w)@([^\s]+)/, '').length;
        //
        if( contentCharCount > totalCharsAllowed ) {
            //
            $('#' + textareaIdentifier).val(content.substring(0,content.length-(contentCharCount-totalCharsAllowed)));
            //
        } else {
            //
            let percentageValue = Math.round(Math.ceil((contentCharCount*100/totalCharsAllowed)*20)/20);
            //
            $('#' + spanId).text(totalCharsAllowed-contentCharCount + ' (' + percentageValue + '% used :: ' + contentCharCount + ' characters used)');
            //
        }
    });
    //
}
