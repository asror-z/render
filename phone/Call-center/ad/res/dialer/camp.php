<?php
include("../../config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Asterisk RealTime Interface">
    <meta name="author" content="info@asterisk-pbx.ru">
    <link rel="icon" href="../../img/favicon.ico">
    <title id="title">Camp</title>
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<div id="nav-template" type="text/x-handlebars-template">
    <?php include("../../nav.html");?>
</div>
<div class="nav-placeholder"></div>
<div id="campnames-template" type="text/x-handlebars-template">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{l10n
                                    "ad.campaigns"}}</a>
                                <div class="dropdown-menu" aria-labelledby="Campaign">
                                    {{#each camps}}
                                    <a class="dropdown-item"
                                       href="camp.html?campname={{campname}}">&nbsp;{{campname}}</a>
                                    <br/> {{/each}}
                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{l10n "ad.list"}}
                                </a>
                                <div class="dropdown-menu" aria-labelledby="List">
                                    {{#each camps}}
                                    <a class="dropdown-item"
                                       href="lists.html?campname={{campname}}">&nbsp;{{campname}}</a>
                                    <br/> {{/each}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="alert" id="status"></div>
            <div id="camp-template" type="text/x-handlebars-template">
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <div class="alert alert-info">
                                <h3>{{l10n "ad.campaign"}} {{campname}}</h3>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="col-sm">
                        <h5 class="text-muted">Import CSV</h5>
                        <form class="form-inline" name="csv_form" id="csv_form" action="#"
                              onsubmit="uploadCSV(this.id, 'uploadcsv.php?');" method="post"
                              enctype="multipart/form-data">
                            <fieldset>
                                <label class="btn btn-default btn-file">
                                    <input name="csv_file" id="csv_file" type="file"/>
                                    <input type="hidden" id="campname" name="campname" value="{{campname}}"/>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" id="newline" name="newline" value="\n">unix</label>
                                    </div>
                                    <!--  <div class="radio">
                                        <label>
                                            <input type="radio" id="newline" name="newline" value="\r\n">dos</label>
                                    </div> -->
                                    <div class="radio">
                                        <input type="submit" class="btn btn-success btn-sm glyphicon glyphicon-upload"
                                               name="csv" id="csv" value="upload"/>
                                    </div>
                                </label>
                            </fieldset>
                        </form>

                        <hr/>
                        <div class="col-sm">
                            <h5 class="text-muted">{{l10n "ad.control"}}</h5>
                            <form class="form" action="#" id="startCampForm" name="startCampForm" method="post">
                                <label class="sr-only" for="startcamp">Старт</label>
                                <input type="hidden" id="startcamp" name="startcamp" value="{{campname}}"/>
                                <label><small class="text-muted">{{l10n "ad.retry"}}</small>
                                    <input type="text" class="form-control " id="retry" name="retry" value="{{retry}}"
                                           placeholder="MaxRetries"/>
                                </label>
                                <label>
                                    <small class="text-muted">{{l10n "ad.pause"}}</small>
                                    <input type="text" class="form-control " id="pause" name="pause" value="{{pause}}"
                                           placeholder="RetryTime"/>
                                </label>
                                <br/>
                                <label>
                                    <small class="text-muted">{{l10n "ad.wait"}}</small>
                                    <input type="text" class="form-control " id="timeout" name="timeout"
                                           value="{{timeout}}" placeholder="WaitTime"/>
                                </label>
                                <label>
                                    <small class="text-muted">{{l10n "ad.concurrent"}}</small>
                                    <input type="text" class="form-control " id="concurrent" name="concurrent"
                                           value="{{concurrent}}" placeholder="Concurrent"/>
                                </label>
                                <br/>
                                <label>
                                    <small class="text-muted">{{l10n "ad.chan_context"}}</small>
                                    <input type="text" class="form-control " id="chan_context" name="chan_context"
                                           value="{{chan_context}}" placeholder=""/>
                                </label>
                                <label>
                                    <small class="text-muted">{{l10n "ad.ext_context"}}</small>
                                    <input type="text" class="form-control " id="ext_context" name="ext_context"
                                           value="{{ext_context}}" placeholder=""/>
                                </label>
                                <br/>
                                <label><small class="text-muted">{{l10n "ad.str"}}</small>
                                    <select class="form-control " id="limit" name="limit">
                                        <option value="25000" selected>25000</option>
                                        <option value="100">100</option>
                                        <option value="1000">1000</option>
                                        <option value="10000">10000</option>
                                    </select>
                                </label>
                                <br/>
                                <br/>
                                <label><small class="text-muted">{{l10n "ad.dest"}}</small>
                                    <input type="text" class="form-control " id="exten" name="exten" value="{{exten}}"
                                           placeholder="dest"/>
                                </label>
                                <br/>
                                <label><small class="text-muted">{{l10n "ad.var"}}</small>
                                    <input type="text" class="form-control " id="var" name="var" value="{{var}}"
                                           placeholder="var"/>
                                </label>
                                <br/>
                                <br/>

                            </form>
                            <div id="actionGroup" class="btn-toolbar btn-toolbar-lg">
                                <button type="submit" id="btnStart"
                                        class="btn btn-success btn-sm glyphicon glyphicon-ok-sign"> {{l10n "ad.start"}}
                                </button>
                                <button type="submit" id="btnStop"
                                        class="btn btn-warning btn-sm glyphicon glyphicon-remove-sign"> {{l10n
                                    "ad.stop"}}
                                </button>
                                <button type="submit" id="btnDel"
                                        class="btn btn-danger btn-sm glyphicon glyphicon-remove-circle"> {{l10n
                                    "ad.del"}}
                                </button>
                            </div>
                        </div>
                        <hr/>
                    </div>
                </div>
            </div>
        </div>


        <div class="campnames-placeholder"></div>
        <div class="camp-placeholder"></div>
    </div>
</div>
<script src="../../jquery/dist/jquery.min.js"></script>
<script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../../js/handlebars.js"></script>
<script src="../../js/func.js"></script>
<script src="../../js/locale.js"></script>
<script src="../../js/helpers.js"></script>
<script src="dfg465dhf627shd-ajax.js"></script>
<script>
    var selectcamp = getQueryVariable('campname');
    $("#title").html(selectcamp);
    $(function () {
        $.ajax({
            type: 'POST',
            url: 'getcamp.php',
            data: 'getCamp=' + selectcamp,
            success: function (data) {
                var campaign = JSON.parse(data);
                var theTemplateScript = $("#camp-template").html();
                var theTemplate = Handlebars.compile(theTemplateScript);
                var context = campaign;
                var theCompiledHtml = theTemplate(context);
                $('.camp-placeholder').html(theCompiledHtml);
                $('#btnStart').click(function () {
                    var startcamp = $('#startCampForm').serialize();
                    $.ajax({
                        url: 'getcamp.php',
                        type: 'POST',
                        data: startcamp,
                        success: function (data) {
                            $('#status').html(data);
                        }
                    });
                });
                $('#btnStop').click(function () {
                    $.ajax({
                        url: 'getcamp.php',
                        type: 'POST',
                        data: 'stopcamp=' + selectcamp,
                        success: function (data) {
                            $('#status').html(data);
                        }
                    });
                });

                $('#btnDel').click(function () {
                    $.ajax({
                        url: 'getcamp.php',
                        type: 'POST',
                        data: 'delcamp=' + selectcamp,
                        success: function (data) {
                            $('#status').html(data);
                        }
                    });
                });
            }
        });

    });

    function uploadCSV(id, dst) {
        var getdata = $('#' + id).serialize();
        var file_data = $('#csv_file').prop('files')[0];
        var form_data = new FormData();
        form_data.append('file', file_data);
        $.ajax({
            url: dst + getdata,
            dataType: 'text',
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
            type: 'post',
            success: function (data) {
                alert(data);
            }
        });
    }
</script>
</body>

</html>
