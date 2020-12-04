
<?php

    $isLoasding=true;
    $color='green';

?>

    <style>
        .round {
            border: 4px solid #f3f3f3;
            border-radius: 50%;
            border-top: 4px solid  <?=$color?> /*#53b929*/;
            width: 45px;
            height: 45px;
            -webkit-animation: spin 2s linear infinite; /* Safari */
            animation: spin 1s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% { -webkit-transform: rotate(0deg); }
            100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>

    <div class="round" id="loader_infinity"></div>

