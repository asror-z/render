 var number = "";

$(".softphone").on("click","li", function(){
    number += $(this).text();
    $('#number').val(number);
});
$(".softphone").on("click","#backspace", function(){
    number = number.slice(0, -1);
    $('#number').val(number);
});
