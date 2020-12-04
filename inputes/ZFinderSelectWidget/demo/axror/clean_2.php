

    <!-- Bootstrap core CSS -->

    <style>
       
        tr.selected {
            background-color: #3875d7;
            color: #FFF;
        }

    </style>
</head>

<body>
<div class="container">


    <table class="table table-condensed" id="demo5">
        <thead>
        <tr>
            <td><input type="checkbox"></td>
            <td>Name</td>
            <td>Type</td>
            <td>Last Accessed</td>
        </tr>
        </thead>
        <tbody>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td>Unsafe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td>Unsafe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td class="safezone">hello.png</td>
            <td class="safezone">Portable Networks Graphic image</td>
            <td class="safezone">Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="un-selected selected-current" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td class="safezone">hello.png</td>
            <td class="safezone">Portable Networks Graphic image</td>
            <td class="safezone">Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        </tbody>

    </table>







    
</div>



<script>
    $(function() {

        // Initialise the Demo with the Ctrl Click Functionality as the Default
        var demo5 = $('#demo5 tbody').finderSelect({enableDesktopCtrlDefault:true});

        // Add a hook to the highlight function so that checkboxes in the selection are also checked.
        demo5.finderSelect('addHook','highlight:before', function (event) {
            el.find('input').prop('checked', true);
        });

        // Add a hook to the unHighlight function so that checkboxes in the selection are also unchecked.
        demo5.finderSelect('addHook','unHighlight:before', function (event) {
            el.find('input').prop('checked', false);
        });

        // Enable Double Click Event.
        demo5.finderSelect("children").dblclick(function() {
            alert( "Double Click detected. Useful for linking to detail page." );
        });

        // Prevent Checkboxes from being triggered twice when click on directly.
        demo5.on("click", ":checkbox", function (event){
            e.preventDefault();
        });

        // Add Select All functionality to the checkbox in the table header row.
        $('#demo5').find("thead input[type='checkbox']").change(function () {
            if ($(this).is(':checked')) {
                demo5.finderSelect('highlightAll');
            } else {
                demo5.finderSelect('unHighlightAll');

            }
        });

        // Add a Safe Zone to show not all child elements have to be active.
        $(".safezone").on("mousedown", function (event){
            return false;
        });

    });

</script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>

</body>
</html>
