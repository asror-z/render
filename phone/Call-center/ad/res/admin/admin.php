<?php
    include("../../config.php");
    $result = $mysqli->query("select * from admin");

    $users = array();
    while($row = $result-->fetch_array(MYSQL_ASSOC)){
    $users[] = $row;
    }

    $users = json_encode($users);

    $mysqli --> close();
    $result --> close();
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Asterisk RealTime Interface">
    <meta name="author" content="info@asterisk-pbx.ru">

    <link rel="icon" href="../../img/favicon.ico">
    <title>Admin</title>
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/dashboard.css" rel="stylesheet">


</head>
<body>
<div id="users-template" type="text/x-handlebars-template">
    <?php include "../../nav.html"; ?>
    <div class="col-lg-6 col-lg-offset-3 main">
        <div class="alert alert-black"><h2>Administrator</h2></div>
        <div class="container-fluid">
            <div class="row">

                <div class="table table-list-search">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Admin</th>
                            <th>Pass (sha1)</th>
                        </tr>
                        </thead>
                        <tbody>
                        {{#each users}}
                        <tr>
                            <td>{{username}}</td>
                            <td>{{password_sha1}}</td>
                            <td>
                                <a class="btn btn-default btn-sm glyphicon glyphicon-edit"
                                   href="edit_admin.html?useredit={{username}}">
                                    {{l10n "edit"}}</a>&nbsp;
                            </td>
                        </tr>
                        {{/each}}
                        </tbody>
                    </table>

                    <div class="users-placeholder"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="../../jquery/dist/jquery.min.js"></script>
<script src="../../bootstrap/dist/js/bootstrap.min.js"></script>
<script src ="../../js/handlebars.js" ></script>
<script src="../../js/func.js"></script>
<script src="../../js/locale.js"></script>
<script src="../../js/helpers.js"></script>

<script>
    $(function () {
        var theTemplateScript = $("#users-template").html();
        var theTemplate = Handlebars.compile(theTemplateScript);
        var context = {users: '$users'};


        var count = Object.keys(context).length;
        console.log(context['users'][0]['username']);
        var theCompiledHtml = theTemplate(context);
        $('.users-placeholder').html(theCompiledHtml);
    });
</script>
<?php echo $users?>
</body>
</html>
