<?php
/**
 * @author   Zoirjon Sobirov
 * https://t.me/zoirjon_sobirov
 */
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap.min.js@3.3.5/bootstrap.min.js"></script>
    <script src="https://rawcdn.githack.com/adtile/Full-Tilt/22a1007af229153e5b897afd1fc903d7d91fe481/dist/fulltilt.min.js"></script>
    <script src="https://rawcdn.githack.com/dorukeker/gyronorm.js/39d5fda182cd8655e32ae0d1e5f58eade3c8c1d2/dist/gyronorm.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style type="text/css">
        .container{
            margin-top: 20px;
        }

        .tab-pane{
            margin-top: 15px;
        }

        .page-header{
            margin-top: 20px;
        }

        .input-group{
            margin-bottom: 20px;

        }

        input[type=text],
        textarea{
            box-shadow: none;
            -webkit-appearance:none;
            -webkit-box-shadow: none !important;
            -moz-box-shadow: none !important;
            box-shadow: none !important;
        }

        #dm .input-group{
            float: left;
            padding-left: 10px;
        }

        #dm .input-group.first{
            padding-left: 0px;
        }

        #dm .col-xs-12{
            padding-left: 0;
        }
        #map {
            height: 95vh;
        }
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
    </style>

</head>
<body onload="init_gn()">
<div id="googleMap"></div>
<div class="container">

    <div role="tabpanel">
        <!-- Nav tabs -->
        <ul class="nav nav-pills" role="tablist">

            <li role="presentation" class="active"><a href="#do" aria-controls="do" role="tab" data-toggle="tab">Orientation</a></li>

            <li role="presentation"><a href="#dm" aria-controls="dm" role="tab" data-toggle="tab">Motion</a></li>

            <li role="presentation"><a href="#logs" aria-controls="logs" role="tab" data-toggle="tab">Logs</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">

            <div role="tabpanel" class="tab-pane active" id="do">

                <div class="input-group col-xs-12">
                    <span class="input-group-addon">alpha</span>
                    <input type="text" class="form-control" id="do_alpha" disabled>
                </div>

                <div class="input-group col-xs-12">
                    <span class="input-group-addon">beta</span>
                    <input type="text" class="form-control" id="do_beta" disabled>
                </div>

                <div class="input-group col-xs-12">
                    <span class="input-group-addon">gamma</span>
                    <input type="text" class="form-control" id="do_gamma" disabled>
                </div>

                <input type="button" onclick="set_head_gn()" value="Set Head Direction" class="col-xs-12 btn-warning btn"/>

            </div>
            <div role="tabpanel" class="tab-pane" id="dm">

                <div class="col-xs-12">
                    Acceleration
                </div>
                <div class="input-group col-xs-4 first">
                    <span class="input-group-addon">x</span>
                    <input type="text" class="form-control" id="dm_x" disabled>
                </div>

                <div class="input-group col-xs-4">
                    <span class="input-group-addon">y</span>
                    <input type="text" class="form-control" id="dm_y" disabled>
                </div>

                <div class="input-group col-xs-4">
                    <span class="input-group-addon">z</span>
                    <input type="text" class="form-control" id="dm_z" disabled>
                </div>

                <div class="col-xs-12">
                    Acceleration including gravity
                </div>

                <div class="input-group col-xs-4 first">
                    <span class="input-group-addon">x</span>
                    <input type="text" class="form-control" id="dm_gx" disabled>
                </div>

                <div class="input-group col-xs-4">
                    <span class="input-group-addon">y</span>
                    <input type="text" class="form-control" id="dm_gy" disabled>
                </div>

                <div class="input-group col-xs-4">
                    <span class="input-group-addon">z</span>
                    <input type="text" class="form-control" id="dm_gz" disabled>
                </div>

                <input type="button" onclick="norm_gn()" value="Normalize" class="col-xs-6 btn-warning btn"/>
                <input type="button" onclick="org_gn()" value="Original" class="col-xs-6 btn-warning btn"/>

                <p>&nbsp;</p>
                <div class="col-xs-12">
                    Rotation rate
                </div>
                <div class="input-group col-xs-12">
                    <span class="input-group-addon">alpha</span>
                    <input type="text" class="form-control" id="dm_alpha" disabled>
                </div>

                <div class="input-group col-xs-12">
                    <span class="input-group-addon">beta</span>
                    <input type="text" class="form-control" id="dm_beta" disabled>
                </div>

                <div class="input-group col-xs-12">
                    <span class="input-group-addon">gamma</span>
                    <input type="text" class="form-control" id="dm_gamma" disabled>
                </div>

            </div>
            <div role="tabpanel" class="tab-pane" id="logs">
                <textarea class="col-xs-12 form-control" id="error-message" style="height:100px" placeholder="Log area..." disabled></textarea>
            </div>
        </div>

    </div>

</div>

<div style="display:none;">
    <input type="button" onclick="start_gn()" value="START" class="col-xs-6 btn-info btn"/>
    <input type="button" onclick="stop_gn()" value="STOP" class="col-xs-6 btn-info btn"/>

</div>

<script type="text/javascript">
    function initMap() {
        var mapProp= {
            center:new google.maps.LatLng(51.508742,-0.120850),
            zoom:5,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    var gn;
    function init_gn() {
        var args = {
            logger: logger
        };

        gn = new GyroNorm();

        gn.init(args).then(function() {
            var isAvailable = gn.isAvailable();
            if(!isAvailable.deviceOrientationAvailable) {
                logger({message:'Device orientation is not available.'});
            }

            if(!isAvailable.accelerationAvailable) {
                logger({message:'Device acceleration is not available.'});
            }

            if(!isAvailable.accelerationIncludingGravityAvailable) {
                logger({message:'Device acceleration incl. gravity is not available.'});
            }

            if(!isAvailable.rotationRateAvailable) {
                logger({message:'Device rotation rate is not available.'});
            }

            start_gn();
        }).catch(function (event){

            console.log(e);

        });
    }

    function logger(data) {
        $('#error-message').append(data.message + "\n");
    }

    function stop_gn() {
        gn.stop();
    }

    function start_gn() {
        gn.start(gnCallBack);
    }

    function gnCallBack(data) {
        $('#do_alpha').val(data.do.alpha);
        $('#do_beta').val(data.do.beta);
        $('#do_gamma').val(data.do.gamma);

        $('#dm_x').val(data.dm.x);
        $('#dm_y').val(data.dm.y);
        $('#dm_z').val(data.dm.z);

        $('#dm_gx').val(data.dm.gx);
        $('#dm_gy').val(data.dm.gy);
        $('#dm_gz').val(data.dm.gz);

        $('#dm_alpha').val(data.dm.alpha);
        $('#dm_beta').val(data.dm.beta);
        $('#dm_gamma').val(data.dm.gamma);
    }

    function norm_gn() {
        gn.normalizeGravity(true);
    }

    function org_gn() {
        gn.normalizeGravity(false);
    }

    function set_head_gn() {
        gn.setHeadDirection();
    }

    function showDO() {
        $('#do').show();
        $('#dm').hide();
        $('#btn-dm').removeClass('selected');
        $('#btn-do').addClass('selected');
    }

    function showDM() {
        $('#dm').show();
        $('#do').hide();
        $('#btn-do').removeClass('selected');
        $('#btn-dm').addClass('selected');
    }
</script>
</body>
</html>
