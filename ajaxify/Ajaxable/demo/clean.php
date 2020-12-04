<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <meta content="_csrf" name="csrf-param" />
    <meta content="4sWPhTlJAmt1IcyNq1FCyivsAVhHqjiDCKRXOgOQock=" name="csrf-token" />
    <script src="https://cdn.jsdelivr.net/npm/ajaxable@0.2.3/dist/ajaxable.min.js"></script>
</head>
<body>
<div class="container"><br><br><br>
    <form id="myform" method="POST" action="/core/tester/ajaxify/ajaxable.aspx">
        <input name="name" placeholder="Name"/> <br> <br>
        <input name="email" placeholder="Email" type="email" required/> <br><br>
        <button class="btn btn-success">Send</button>
    </form>
</div>

<script type="text/javascript">
    ajaxable('#myform');
</script>
</body>
</html>

