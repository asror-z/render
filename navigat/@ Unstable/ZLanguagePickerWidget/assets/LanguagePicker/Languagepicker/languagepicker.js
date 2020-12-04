/**
 *
 * Author:  Asror Zakirov
 * Created: 12/3/2019 5:26 PM
 * https://www.linkedin.com/in/asror-zakirov-167961a9
 * https://www.facebook.com/asror.zakirov
 */


function format(state) {
    if(!state.id){
        return state.text;
    } // optgroup
       var  src = "/" +  state.id.toLowerCase() + '.svg';
    return '<img class="flag-size" src="' + src + '"/>' + state.text;
}




