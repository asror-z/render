var express = require('express');
var app = express();

app.configure(function () {
    "use strict";
    app.use(express.logger('dev'));
    app.use(express.static(__dirname + '/public'));
});

app.use(function (req, res, next) {
    "use strict";
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, DELETE');
    res.header('Access-Control-Allow-Headers', 'origin, content-type');
    if (req.method == 'OPTIONS') {
        res.send(200);
    }
    else {
        next();
    }
});

var port = process.env.PORT || 4321;

app.listen(port);