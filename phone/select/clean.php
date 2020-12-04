
    <title>finderSelect</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css">
    <link rel="stylesheet" href="">
    
    <link href="https://cdn.statically.io/gh/evulse/finderSelect/master/prettify.css" rel="stylesheet">
    <style>
        [type=checkbox]:checked, [type=checkbox]:not(:checked)  {
            opacity: 1;
        }
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
        .icon-none {
            opacity: 0;
}
    </style>

  

</head>

<body>

<div class="container">
    

    <div class="col-lg-12">
    <h2>Complex</h2>
      <table class="table table-condensed" id="demo11">
            <tr data-path="/Images" class="folder">
                <td colspan="3">
                    <i class="icon-angle-right icon-fixed-width"></i>
                    <i class="icon-folder-close icon-fixed-width"></i>
Images
                </td>
            </tr>
            <tr data-path="/Images/Icons" class="folder">
                <td colspan="3">
                    <i class="icon-angle-right icon-fixed-width"></i>
                    <i class="icon-folder-close icon-fixed-width"></i>
Icons
                </td>
            </tr>
            </tr>
            <tr data-path="/Images/Icons/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/Images/Icons/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/Images/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/Images/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/Images/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-path="/hello.png" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>

        </table>

      
    </div>
    <div class="col-lg-12">

               <h2>hello</h2>
        <table class="table table-condensed" id="demo1">
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>

        </table>

        <span><span class="demo1-count">0</span> File(s) Selected &nbsp;</span><br><br>
        <button class="btn btn-primary btn-mini demo1-trash">Send Selected to Trash</button><br><br>

    </div>
    <div class="col-lg-12">

              <h2>extanding</h2>

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
               <tr>
                <td><input type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td>Unsafe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td>Unsafe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td class="safezone">hello.png</td>
                <td class="safezone">Portable Networks Graphic image</td>
                <td class="safezone">Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td class="safezone">hello.png</td>
                <td class="safezone">Portable Networks Graphic image</td>
                <td class="safezone">Friday, 24 July 2013 4:59PM</td>
                <td class="safezone">Click Safe Zone. <a href='http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png' target="_blank"><i class="icon-edit"></i></a></td>
            </tr>
            </tbody>

        </table>

    </div>
    <div class="col-lg-12">

               <h2>tbody</h2>
        <table class="table" id="demo2">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            </tbody>
        </table>

    </div>
    <div class="col-lg-12">

                           <h2>custom
                           </h2>
        <table class="table" id="demo3">
            <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            </tbody>
        </table>
          
    </div>
  

    <div class="col-lg-12">

        <h2>configuration</h2>
        <div class="panel">
  <div class="panel-body">
<table class="table table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Description</th>
            <th>Default</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>selectClass</td>
            <td>string</td>
            <td>The Class applied to selected elements.</td>
            <td>"selected"</td>
        </tr>
        <tr>
            <td>unSelectClass</td>
            <td>string</td>
            <td>The Class applied to un-selected elements.</td>
            <td>"un-selected"</td>
        </tr>
        <tr>
            <td>currentClass</td>
            <td>string</td>
            <td>The Class applied to the current selected element.</td>
            <td>"selected-current"</td>
        </tr>
        <tr>
            <td>lastClass</td>
            <td>string</td>
            <td>The Class applied to the last selected element.</td>
            <td>"selected-last"</td>
        </tr>
    </tbody>

</table>
  </div>
</div>

    </div>

</div> 




<script src="http://code.jquery.com/jquery.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/prettify/r298/prettify.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.4.3/jquery.colorbox-min.js"></script>

<script src="https://cdn.statically.io/gh/evulse/finderSelect/master/jquery.finderSelect.min.js"></script>

<script>
$(function() {
    var demo1 = $('#demo1').finderSelect({children:"tr",totalSelector:".demo1-count",menuSelector:"#demo1-menu"});

        $(".demo1-trash").click(function(){
            demo1.finderSelect("selected").remove();
            demo1.finderSelect("update");
        });

        $(".demo1-preview").click(function(){
            demo1.finderSelect("selected").each(function(index){
                OpenInNewTab($(this).attr('data-url')+"?rand="+index);
            });
        });

        $(".demo1-edit").click(function(){
            demo1.finderSelect("selected").each(function(){
                OpenInNewTab('http://pixlr.com/editor/?image='+$(this).attr('data-url'));
            });
        });

        // DEMO 11 - Advanced Usage - Folder Structure

        function startsWith(haystack, needle) {
            return haystack.slice(0, needle.length) == needle;
        }

        var demo11 = $('#demo11').finderSelect({children:"tr.expanded"});
        var activeSegments = [""];
        function expandActive(els) {
            els.each(function() {
                var el = $(this);
                var segments = el.attr('data-path').split("/");
                segments.pop();
                var padding = (segments.length - 1) * 20;
                if($.inArray(segments.join("/"), activeSegments)  > -1) {
                    el.find('td').first().css('padding-left',padding);
                    el.removeClass('hidden')
                    el.addClass('expanded');
                } else {
                    el.addClass('hidden');
                    el.removeClass('expanded');
                }
            });

        }

        expandActive($('#demo11').find('tr'));

        $( "#demo11").find("tr.folder").dblclick(function() {
            if($.inArray($(this).attr('data-path'), activeSegments)  > -1) {
                for(var i = activeSegments.length - 1; i >= 0; i--) {
                    if(startsWith(activeSegments[i], $(this).attr('data-path'))) {
                        activeSegments.splice(i, 1);
                    }
                }
                $(this).find('.icon-folder-open').removeClass('icon-folder-open').addClass('icon-folder-close');
                $(this).find('.icon-angle-down').removeClass('icon-angle-down').addClass('icon-angle-right');
            } else {
                activeSegments.push($(this).attr('data-path'));
                $(this).find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
                $(this).find('.icon-angle-right').removeClass('icon-angle-right').addClass('icon-angle-down');
            }

            expandActive($('#demo11').find('tr'));
        });

        // DEMO 10 - Advanced Usage - Folder Structure

        var demo10 = $('#demo10').finderSelect({children:"tr.expanded"});

        var demo10BaseUrl = 'https://api.github.com/repos/jquery/jquery/contents/';
        var baseDir = "/";
        var gitHubLoaded = [""];

        function reloadGithub(els) {
            els.each(function() {
                var el = $(this);
                var segments = el.attr('data-path').split("/");
                segments.pop();
                var padding = (segments.length - 1) * 20;
                if($.inArray(segments.join("/"), gitHubLoaded)  > -1) {
                    el.find('td').first().css('padding-left',padding);
                    el.removeClass('hidden')
                    el.addClass('expanded');
                } else {
                    el.remove();
                }
            });

        }

        $.getJSON(demo10BaseUrl ,function(result){

            $.each(result, function(i, field){

                if(field.type == 'dir') {
                    $('#demo10').append('<tr data-path="'+baseDir + field.path+'" class="folder">' +
                        '<td colspan="3">'+
                        ' <i class="icon-angle-right icon-fixed-width"></i> ' +
                        '<i class="icon-folder-close icon-fixed-width"></i>' +
                        field.name +
                        '</td></tr>');
                } else {
                    $('#demo10').append('<tr data-path="'+baseDir + field.path+'" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">' +
                        '<td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> '+field.name+'</td>' +
                        '<td>'+ field.sha +'</td>' +
                        '<td>'+ field.size + '</td>' +
                        '</tr>');
                }
            });
        });

        reloadGithub($('#demo10').find('tr'));

        $( "#demo10" ).on( "dblclick", "tr.folder", function() {
            var clicked = $(this);
            if($.inArray($(this).attr('data-path'), gitHubLoaded)  > -1) {
                for(var i = gitHubLoaded.length - 1; i >= 0; i--) {
                    if(startsWith(gitHubLoaded[i], $(this).attr('data-path'))) {
                        gitHubLoaded.splice(i, 1);
                    }
                }
                $(this).find('.icon-folder-open').removeClass('icon-folder-open').addClass('icon-folder-close');
                $(this).find('.icon-angle-down').removeClass('icon-angle-down').addClass('icon-angle-right');
                reloadGithub($('#demo10').find('tr'));
            } else {

                $.getJSON(demo10BaseUrl+$(this).attr('data-path') ,function(result){

                    $.each(result, function(i, field){

                        if(field.type == 'dir') {
                            clicked.after('<tr data-path="'+baseDir + field.path+'" class="folder">' +
                                '<td colspan="3">'+
                                ' <i class="icon-angle-right icon-fixed-width"></i> ' +
                                '<i class="icon-folder-close icon-fixed-width"></i>' +
                                field.name +
                                '</td></tr>');
                        } else {
                            clicked.after('<tr data-path="'+baseDir + field.path+'" class="file" data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png">' +
                                '<td><i class="icon-fixed-width icon-none"></i> <i class="icon-file icon-fixed-width"></i> '+field.name+'</td>' +
                                '<td>'+ field.sha +'</td>' +
                                '<td>'+ field.size + '</td>' +
                                '</tr>');
                        }

                    });
                }).success(function() {
                    reloadGithub($('#demo10').find('tr'));
                });
                gitHubLoaded.push($(this).attr('data-path'));
                $(this).find('.icon-folder-close').removeClass('icon-folder-close').addClass('icon-folder-open');
                $(this).find('.icon-angle-right').removeClass('icon-angle-right').addClass('icon-angle-down');
            }


        });

        // DEMO 2

        $('#demo2').find('tbody').finderSelect();
        $('#demo3').find('tbody').finderSelect({selectClass:"danger"});
        $('#demo4').finderSelect({selectClass:'label-success'});

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

        // Add a Safe Zone to show not all child elements have to be active.
        $(".safezone").on("mousedown", function (event){
            return false;
        });

        // Prevent Checkboxes from being triggered twice when click on directly.
        demo5.on("click", "input[type='checkbox']", function (event){
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


        prettyPrint();


    });

    function OpenInNewTab(url )
    {
        var win=window.open(url, '_blank');
        win.focus();
    }

</script>
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
