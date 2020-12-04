$.ajax({
    url: "module.html",cache: false,success: function(html){
        $( "body" ).append( html );
    }
});
