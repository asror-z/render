                
var t
t = 0
var btn = document.querySelector('#openCall')
btn.addEventListener('click', function() {
    
    if (t == 0){
        t = 1
    document.querySelector('#openCall').classList.add('active')
    document.querySelector('#call_window').classList.add('active')
    }
    else{ t = 0
        document.querySelector('#openCall').classList.remove('active')
    document.querySelector('#call_window').classList.remove('active')
    }
})