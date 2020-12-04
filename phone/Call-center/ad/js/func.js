function stopCamp() {
    $.ajax({
        url: '../../res/dialer/getcamp.php',
        type: 'POST',
        data: 'stopcamp=1',
        success: function(data) {
            $('#status').html(data);
        }
    });
}

function coreReload() {
    $.ajax({
        type: 'POST',
        url: '../../pbx/status/ajam.php',
        //data: 'coreReload=core%20reload',
        data: 'CliAction=Command&Command=core%20reload',
        success: function(data) {
            if (data.match(/Response: Success/))
            $('#reload').addClass("alert-success").fadeIn().html(data);
              else
                $('#reload').addClass("alert-danger").fadeIn().html(data);
            setTimeout(function() {
                $('#reload').fadeOut("slow");
            }, 5000);
        }
    });
}

function getDb(id, dst) {
    var msg = $('#' + id).serialize();
    $.ajax({
        type: 'POST',
        url: dst,
        data: msg,
        async: true,
        success: function(data) {
            $('#reload').addClass("alert-success").fadeIn().html(data);
            setTimeout(function() {
                $('#reload').fadeOut("slow");
            }, 5000);
        },
        error: function() {
            $('#reload').addClass("alert-danger").fadeIn().html(data);
            setTimeout(function() {
                $('#reload').fadeOut("slow");
            }, 5000);
        }
    });
}

function delDb(id, dst) {
    var sure = confirm("Are you sure?");
    var msg = $('#' + id).serialize();
    if (sure == true)
        $.ajax({
            type: 'POST',
            url: dst,
            data: msg,
            async: true,
            success: function(data) {
                $('#reload').addClass("alert-success").fadeIn().html(data);
                setTimeout(function() {
                    $('#reload').fadeOut("slow");
                }, 5000);
            },
            error: function() {
                $('#reload').addClass("alert-danger").fadeIn().html(data);
                setTimeout(function() {
                    $('#reload').fadeOut("slow");
                }, 5000);
            }
        });
}

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
            return pair[1];
        }
    }
    return (false);
}