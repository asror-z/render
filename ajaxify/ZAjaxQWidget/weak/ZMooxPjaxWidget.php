<!doctype html>
<html lang="en">
<head>
    <link href="../bootstrap.css" rel="stylesheet">
    <style>

        .node {
            height: 40px;
            line-height: 40px;
            opacity: .3;
            width: 80%;
            border-radius: 5px;
            margin: 3px auto;
            text-align: center;
            position: relative;
        }

        .node strong {
            position: absolute;
            top: 0;
            left: 6px;
        }

        .node b {
            position: absolute;
            left: 30px;
            top: 0;
            color: red;
        }

        .node i {
            position: absolute;
            top: 0;
            right: 30px;
        }

        .node.beforesend b {
            color: yellow;
        }

        .node.complete b {
            color: green;
        }

        .node.error.complete b {
            color: red;
        }

        .node.beforesend {
            opacity: .6;
        }

        .node.complete {
            opacity: 1;
        }

        #q1-container .node.error, #q2-container .node.error {
            background: #f99;
        }

        #q1-container .node {
            background: #9fd;
        }

        #q2-container .node {
            background: #99d;
        }

    </style>
</head>

<body>

<div class='scriptload'>

    <div class="row">

        <div class="span6 queue">

            <p class='buttons'>
                <button class='btn q1' data-delay='1'>Add 1 Sec Request</button>
                <button class='btn q1' data-delay='3'>3 Sec</button>
                <button class='btn q1' data-delay='8'>8 Sec</button>
                <button class='btn btn-danger q1' data-delay='1'>Error</button>
                <button class='btn q1 clear'>Clear</button>
                <button class='btn q1 abort'>Abort</button>
            </p>

            <div class="queue-container" id='q1-container'>

            </div>
        </div>
        <div class="span6 queue">
            <p class='buttons'>
                <button class='btn q2' data-delay='1'>Add 1 Sec Request</button>
                <button class='btn q2' data-delay='3'>3 Sec</button>
                <button class='btn q2' data-delay='8'>8 Sec</button>
                <button class='btn btn-danger q2' data-delay='1'>Error</button>
                <button class='btn q2 clear'>Clear</button>
                <button class='btn q2 abort'>Abort</button>
            </p>
            <div class="queue-container" id='q2-container'>

            </div>
        </div>
    </div>

    <hr/>
    <div class='row'>
        <div class='span12'>
            <button class='btn' id='isQueueRunning'>Are Any Requests Running?</button>
            <strong id='isQueueRunningLabel'></strong>
        </div>
    </div>
</div>

<?

use zetsoft\widgets\former\ZAjaxqWidget;


?>

<script>
    $(function () {

        $(".queue").on("click", ".btn", function (ev) {
            var target = $(ev.target);
            var container = target.closest(".queue").find(".queue-container");
            var ix = container.data('qindex') || 1;
            var qname = target.is('.q1') ? 'queue1' : 'queue2';

            if (target.is('.clear')) {
                $.ajaxq.clear(qname);
                container.find(".node:not('.beforesend')").slideUp("slow");
            } else if (target.is('.abort')) {
                $.ajaxq.abort(qname);
                container.find(".node:not('.beforesend')").slideUp("slow");
            } else {
                addRequest(qname, target.data("delay"), container, ix, target.is(".btn-danger"));
                container.data('qindex', ix + 1);
            }
        });

        $("#isQueueRunning").click(function () {
            $("#isQueueRunningLabel").text($.ajaxq.isRunning() ? "Yes" : "No");
        });

        setTimeout(function () {
            $(".q1:eq(0)").click().click();
            $(".q2:eq(1)").click();
        }, 1000);

    });


    function addRequest(name, delay, container, num, error) {

        var node = $("<div class='node' />").appendTo(container);

        node.html("<strong>#" + num + "</strong><b>&#x25CF</b>" + delay + " second delay<i />");

        var data = {
            date: (new Date()).getTime(),
            delay: delay
        };
        <?
        echo ZAjaxqWidget::widget([
            'config' => [
                'url' => 'https://jsfiddle.net/echo/jsonp/',
                'type' => ZAjaxqWidget::type['post'],
                'dataType' => 'jsonp',
                'data' => <<<JS
        {
           date: (new Date()).getTime(),
           delay: delay
       } 
JS,
            ],
            'event' => [
                'beforeSend' => <<<JS
        function() {
                node.addClass("beforesend");
                var date = new Date().getTime();
                interval = setInterval(function () {
                var numSeconds = Math.round((((new Date().getTime())-date) / 1000));
                node.find("i").text(numSeconds + " seconds");
        }, 1000);
}
JS,

                'complete' => <<<JS
        function() {
                clearInterval(interval);
                node.addClass("complete").find("b").html("&#x2713");
                }
JS,

                'error' => <<<JS
         function() {
            node.addClass("error");
            }
JS,

            ]
        ]);
        ?>
    }
</script>
</body>
</html>

