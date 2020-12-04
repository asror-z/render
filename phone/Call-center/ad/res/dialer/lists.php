<?php
include("../../config.php");


if(isset($_GET['campname'])) {
  $camp = $_GET['campname'];

$countall = $mysqli->query("SELECT count(status) as alls FROM $camp");

$all = array();
while($row = $countall->fetch_array(MYSQLI_ASSOC)){
$all = $row['alls'];
}

$countnoans = $mysqli->query("SELECT count(status) as noanz FROM $camp WHERE status in ('NOANS', 'BUSY', 'CONGESTION', 'CHANUNAVAIL', 'NOANSWER')");

$noans = array();

while($row = $countnoans->fetch_array(MYSQLI_ASSOC)){
$noans = $row['noanz'];
}

$ans = $all - $noans;

$select = $mysqli->query("SELECT * FROM $camp limit 10000");
$numbers = array();
while($row = $select->fetch_array(MYSQLI_ASSOC)){
$numbers[] = $row;
}
$numbers = json_encode($numbers);

}

$percent = round($ans * 100/$all);

$mysqli->close();
$countall->free();
$countnoans->free();
$select->free();
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Asterisk RealTime Interface">
    <meta name="author" content="info@asterisk-pbx.ru">
    <link rel="icon" href="../../img/favicon.ico">
    <title id="title"></title>
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/jquery.dataTables.css" rel="stylesheet">
</head>
<body>
<div id="nav-template" type="text/x-handlebars-template">
    <?php include("../../nav.html");?>
</div>
<div id="campnames-template" type="text/x-handlebars-template">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{l10n "ad.campaigns"}}
                                </a>
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
            <div id="nums-template" type="text/x-handlebars-template">
                <div class="table-responsive-md">
                    <table id="numTable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Number</th>
                            <th>Name</th>
                            <th>Call date</th>
                            <th>Ans. agent</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{#each num}}
                        <tr>
                            <td>
                                <div id="checkbox-container">
                                    <div>
                                        <input type="checkbox" id="chk{{id}}">
                                    </div>
                                </div>
                            </td>
                            <td>{{number}}</td>
                            <td>{{name}}</td>
                            <td>{{timestamp}}</td>
                            <td>{{agent}}</td>
                            <td>{{status}}</td>
                        </tr>
                        {{/each}}
                        </tbody>
                    </table>
                </div>
                <div class="footer">
                    <br/>
                    <p>
                    <hr/>
                    </p>
                    <br/>
                </div>
            </div>
        </div>


        <div class="nav-placeholder"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="campnames-placeholder"></div>
                    <br/>
                    <h2><?php echo $camp;?></h2>
                    <br/>
                    <div class="table-responsive-md">
                        <table id="statTable" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>All</th>
                                <th>No answer</th>
                                <th>Answer</th>
                                <th>%</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <?php echo $all;?>
                                </td>
                                <td>
                                    <?php echo $noans;?>
                                </td>
                                <td>
                                    <?php echo $ans;?>
                                </td>
                                <td>
                                    <?php echo $percent."%";?>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <br/>
                    <p>
                    <hr/>
                    </p>
                    <a href='#' onclick='downloadCSVnum({ filename: "numbers_<?php echo $camp;?>.csv" });'>
                        <span class="glyphicon glyphicon-export">csv</span>
                    </a>
                    <br/>
                    <div class="nums-placeholder"></div>
                    <div class="footer">
                        <br/>
                        <p>
                        <hr/>
                        </p>
                        <br/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../jquery/dist/jquery.min.js"></script>
    <script src="../../js/jquery.dataTables.cdr.js"></script>
    <script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../../js/handlebars.js"></script>
    <script src="../../js/func.js"></script>
    <script src="../../js/locale.js"></script>
    <script src="../../js/helpers.js"></script>
    <script src="dfg465dhf627shd-ajax.js"></script>
    <script>
        var selectcamp = getQueryVariable('campname');
        var numbers = '$numbers';

        $("#title").html(selectcamp);
        $(function () {
            var theTemplateScript = $("#nums-template").html();
            var theTemplate = Handlebars.compile(theTemplateScript);
            var nomera = {
                num: numbers
            };
            var theCompiledHtml = theTemplate(nomera);
            $('.nums-placeholder').html(theCompiledHtml);

            var checkboxValues = JSON.parse(localStorage.getItem('checkboxValues')) || {},
                $checkboxes = $('table [type="checkbox"]');

            $checkboxes.on("change", function () {
                $checkboxes.each(function () {
                    checkboxValues[this.id] = this.checked;
                });

                localStorage.setItem("checkboxValues", JSON.stringify(checkboxValues));
            });

            $.each(checkboxValues, function (key, value) {
                $("#" + key).prop('checked', value);
            });

        });

        $(document).ready(function () {

            $('#numTable').DataTable({
                "language": dataTablesLocale['en'],
                "iDisplayLength": 100
            });
        });

        function convertArrayOfObjectsToCSVnum(args) {
            var result, ctr, keys, columnDelimiter, lineDelimiter, data;

            data = args.data || null;
            if (data == null || !data.length) {
                return null;
            }

            columnDelimiter = args.columnDelimiter || '|';
            lineDelimiter = args.lineDelimiter || '\n';

            keys = Object.keys(data[0]);

            result = '';
            result += keys.join(columnDelimiter);
            result += lineDelimiter;

            data.forEach(function (item) {
                ctr = 0;
                keys.forEach(function (key) {
                    if (ctr > 0) result += columnDelimiter;

                    result += item[key];
                    ctr++;
                });
                result += lineDelimiter;
            });

            return result;
        }

        function downloadCSVnum(args) {
            var data, filename, link;
            var csv = convertArrayOfObjectsToCSVnum({
                data: numbers
            });
            if (csv == null) return null;

            filename = args.filename || 'export.csv';

            if (!csv.match(/^data:text\/csv/i)) {
                csv = 'data:text/csv;charset=utf-8,' + csv;
            }
            data = encodeURI(csv);

            link = document.createElement('a');
            link.setAttribute('href', data);
            link.setAttribute('download', filename);
            link.click();
        }
    </script>
    <?php echo $numbers;?>;
</body>

</html>
