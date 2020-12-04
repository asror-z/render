<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="md-form">
    <i class="fas fa-envelope prefix"></i>
    <input type="email" id="inputValidationEx" class="form-control validate">
    <label for="inputValidationEx" data-error="wrong" data-success="right" class="active">Type your email</label>
</div>

<script>
    var label =  $('#label');
    var input =  $('#{$this->id}');

    $(function() {
        if (empty(input.value)) {
            label.addClass('active');
        }
        else {
            label.removeClass('active');
        }
    });
</script>
</body>
</html>
