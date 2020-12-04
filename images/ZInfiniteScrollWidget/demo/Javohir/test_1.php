<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

<script type="text/javascript">
    $(document).ready(function() {
        


            $.ajax({
                url: '/core/product/getByScroll.aspx',
                type: 'GET',
                data: {
                    page_num: 4,
                    range: 2,
                },
                success: function (data) {
                    console.log(data)
                },
                dataType:"json"
            });




    });


</script>
</body>
</html>
