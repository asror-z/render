
<!doctype html>
<head>
    <title>Starrr, for jQuery</title>
    <meta name="description" content="">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">
    <style type='text/css'>
        
        input {
            width: 30px;
            margin: 10px 0;
        }
        .starrr {
            display: inline-block; }
        .starrr a {
            font-size: 16px;
            padding: 0 1px;
            cursor: pointer;
            color: #FFD119;
            text-decoration: none; }
    </style>
</head>
<body>



    <h5>Click to rate:</h5>
    <div class='starrr' id='star1'></div>
    <div>&nbsp;
        <span class='your-choice-was' style='display: none;'>
        Your rating was <span class='choice'></span>.
      </span>
    </div>

    <h5>Advanced:</h5>
    <div class='starrr' id='star2'></div>
    <br />
    <input type='text' name='rating' value='3' id='star2_input' />

<script src="/render/market/ZStarDobtco/assets/js/main1.js"></script>
<script>
    $('#star1').starrr({
        change: function(e, value){
            if (value) {
                $('.your-choice-was').show();
                $('.choice').text(value);
            } else {
                $('.your-choice-was').hide();
            }
        }
    });

    var $s2input = $('#star2_input');
    $('#star2').starrr({
        max: 10,
        rating: $s2input.val(),
        change: function(e, value){
            $s2input.val(value).trigger('input');
        }
    });
</script>

</body>
</html>
