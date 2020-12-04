
    <!-- include source files here... -->
    <script type="text/javascript" src="vendor/jquery.2.0.3.min.js"></script>
    <script type="text/javascript" src="barcode-scanner.js"></script>

    <script type="text/javascript">
        jQuery(function(){
            $('form').on('submit', function(e){
                e.preventDefault();
                var $input = $(this).find('input');
                $(this).after("<div class='scan'>"+$input.val()+"</div>");
                $input.val('');
                $input.blur();
                
                console.log(e);
                console.log('hello');
                // if()
            });
            // BarcodeScanner.addAction(id, function(id) {
            //     console.log(this);    // the current input/textarea that is the barcode target
            //     console.log(id);      // 2121232
            //     // console.log(action);  // print
            //     // console.log(amount);  // 2
            // });
        });

    </script>

    <style>
        body {
            background: #EEE;
            padding: 14px;
        }

        table, tr, td {
            width: 100%;
        }

        input {
            border: 1px solid #AAA;
            background: white;
            border-radius: 4px;
            padding: 1%;
            font-size: 26px;
            width: 98%;
        }

        h2 {
            font-family: arial;
            color: black;
        }

        p {
            font-family: arial;
            color: black;
        }

        .scan {
            background: #99F;
            border: 1px solid #77F;
            font-family: arial;
            font-size: 14px;
            padding: 1%;
            width: 98%;
            color: black;
            margin-top: 1px;
            border-radius: 4px;
        }

    </style>

</head>

<body>

<h2>This is a barcode-scanner.js DEMO</h2>
<p>Simply start scanning barcodes using your scanner. Focusing the input field is NOT required.</p>

<table>
    <tr>
        <td>
            <form>
                <input name='scan' type='text' data-barcode-scanner-target/>
            </form>
        </td>
    </tr>
</table>

</body>




<?php

