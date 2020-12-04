var socket = io('http://'+document.domain+':2020/test');


$('.message').on('change', function(){
    socket.emit('send message', $(this).val());
    $(this).val('');
});

socket.on('new message', function(data){
    $('#chat-messages').append('<p>' + data +'</p>');
});
