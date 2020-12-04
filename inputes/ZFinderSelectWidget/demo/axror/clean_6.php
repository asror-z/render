
<!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
<link href="https://cdn.jsdelivr.net/npm/font-awesome.css@4.7.2/css/font-awesome.css">

<style>

    tr.selected {
        background-color: #3875d7;
        color: #FFF;
    }
    table.table-sm th, table.table th, table > thead > th, table > tbody > tr > td:first-child, tr th a{
    opacity: 1;
    }

</style>



<div class="col-lg-12">
    <h2>Extending</h2>
    <p>finderSelect was design to be easily extended. See the example below to see how the highlighting functions can be overridden to provide new functionality.</p>
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
        <tr class="stateSelected un-selected selected-current" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td>Unsafe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateUnSelected selected-last un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td>Unsafe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateSelected un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateSelected un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateSelected un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td>hello.png</td>
            <td>Portable Networks Graphic image</td>
            <td>Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateSelected un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td class="safezone">hello.png</td>
            <td class="safezone">Portable Networks Graphic image</td>
            <td class="safezone">Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
        </tr>
        <tr class="stateSelected un-selected" style="cursor: pointer;">
            <td><input type="checkbox"></td>
            <td class="safezone">hello.png</td>
            <td class="safezone">Portable Networks Graphic image</td>
            <td class="safezone">Friday, 24 July 2013 4:59PM</td>
            <td class="safezone">Click Safe Zone. <a href="./demo_2_files/Hello.png" target="_blank"><i class="icon-edit"></i></a></td>
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


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>
<script src="//oss.maxcdn.com/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>
