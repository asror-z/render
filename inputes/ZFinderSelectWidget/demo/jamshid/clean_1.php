<style>
    tr.selected {
        background-color: #3875d7;
        color: #FFF;
    }

    tr.selected td {
        background-color: #3875d7;
        color: #FFF;
    }

    .safezone {
        background-color: #dff0d8;
        border-color: #d6e9c6;
    }

    .checkbox {
        opacity: 1 !important;
    }
</style>

<div class="container">

    <div class="col-lg-12">
        <table class="table table-condensed" id="demo5">
            <thead>
            <tr>
                <td><input class="checkbox" type="checkbox"></td>
                <td>Name</td>
                <td>Type</td>
                <td>Last Accessed</td>
            </tr>
            </thead>
            <tbody>
            <tr class="selected stateSelected selected-current" style="cursor: pointer;">
                <td><input class="checkbox" type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td>Unsafe Zone. <a href="https://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i
                                class="icon-edit"></i></a></td>
            </tr>
            <tr class="selected stateSelected selected-last" style="cursor: pointer;">
                <td><input class="checkbox" type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td>Unsafe Zone. <a href="https://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" target="_blank"><i
                                class="icon-edit"></i></a></td>
            </tr>
            <tr class="un-selected stateUnSelected" style="cursor: pointer;">
                <td><input class="checkbox" type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href="https://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png"
                                                         target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr class="un-selected stateUnSelected" style="cursor: pointer;">
                <td><input class="checkbox" type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href="https://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png"
                                                         target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr class="un-selected stateUnSelected" style="cursor: pointer;">
                <td><input class="checkbox" type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href="https://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png"
                                                        
            </tr>

            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>

<script>
    $(function () {


        var demo5 = $('#demo5 tbody').finderSelect({enableDesktopCtrlDefault: true});


        demo5.finderSelect('addHook', 'highlight:before', function (el) {
            el.find('input').prop('checked', true);
        });


        // Add a hook to the unHighlight function so that checkboxes in the selection are also unchecked.
        demo5.finderSelect('addHook', 'unHighlight:before', function (el) {
            el.find('input').prop('checked', false);
        });

    });
</script>




