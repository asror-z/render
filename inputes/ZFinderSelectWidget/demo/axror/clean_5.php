

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="./demo_2_files/bootstrap.min.css">
    <link href="./demo_2_files/font-awesome.css" rel="stylesheet">
    <link href="./demo_2_files/prettify.css" rel="stylesheet">
    <style>
       
        tr.selected {
            background-color: #3875d7;
            color: #FFF;
        }

    </style>
</head>

<body>
<div class="container">

    <!--<div class="col-lg-12">

        <table class="table table-condensed" id="demo1">
            <tbody><tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" class="un-selected" >
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" class="un-selected">
            </tr>

            </tbody>
            </table>
        <span><span class="demo1-count">0</span> File(s) Selected &nbsp;</span><br>
        <br>
        <button class="btn btn-primary btn-mini demo1-trash">Send Selected to Trash</button>
        <br>
        <br>

    </div>-->
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
    <div class="col-lg-12">
        <h2>TBODY Only</h2>
        <p>To enable selecting on only tbody rows simply call</p>
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
            <tr class="un-selected" style="cursor: pointer;">
                <td>1</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>2</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected selected-current" style="cursor: pointer;">
                <td>3</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>4</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>5</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            </tbody>
        </table>
        <pre class="prettyprint lang-js prettyprinted" style=""><span class="pln">$</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    $</span><span class="pun">(</span><span class="str">'#demo2'</span><span class="pun">).</span><span class="pln">find</span><span class="pun">(</span><span class="str">'tbody'</span><span class="pun">).</span><span class="pln">finderSelect</span><span class="pun">();</span><span class="pln">
</span><span class="pun">});</span></pre>
    </div>
    <div class="col-lg-12">
        <h2>Custom Class</h2>
        <p>If you want to use a custom class for highlighting such as using Twitter Bootstrap</p>
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
            <tr class="un-selected" style="cursor: pointer;">
                <td>1</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>2</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>3</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected" style="cursor: pointer;">
                <td>4</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            <tr class="un-selected selected-current" style="cursor: pointer;">
                <td>5</td>
                <td>Test</td>
                <td>Data</td>
                <td>Set</td>
            </tr>
            </tbody>
        </table>
        <pre class="prettyprint lang-js prettyprinted" style=""><span class="pln">$</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
    $</span><span class="pun">(</span><span class="str">'#demo3'</span><span class="pun">).</span><span class="pln">find</span><span class="pun">(</span><span class="str">'tbody'</span><span class="pun">).</span><span class="pln">finderSelect</span><span class="pun">({</span><span class="pln">selectClass</span><span class="pun">:</span><span class="str">'danger'</span><span class="pun">});</span><span class="pln">
</span><span class="pun">});</span></pre>
    </div>
    <div class="col-lg-12">
        <h2>Other Elements</h2>
        <p>This plugin works on all nested elements. The example below shows span tags within a parent div.</p>
        <div id="demo4"> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> <span class="label un-selected" style="cursor: pointer;">Label</span> </div>
        <p></p>
        <pre class="prettyprint lang-js prettyprinted" style=""><span class="pln">$</span><span class="pun">(</span><span class="kwd">function</span><span class="pun">()</span><span class="pln"> </span><span class="pun">{</span><span class="pln">
     $</span><span class="pun">(</span><span class="str">'#demo4'</span><span class="pun">).</span><span class="pln">finderSelect</span><span class="pun">({</span><span class="pln">selectClass</span><span class="pun">:</span><span class="str">'label-success'</span><span class="pun">});</span><span class="pln">
</span><span class="pun">});</span></pre>
    </div>





    
</div>
<!-- /container -->
<ul class="dropdown-menu" id="demo1-menu" style="display: none;">
    <li><a class="demo1-preview">Preview <span class="demo1-count">0</span> File(s)</a></li>
    <li><a class="demo1-edit">Edit <span class="demo1-count">0</span> File(s)</a></li>
    <li><a class="demo1-trash">Trash <span class="demo1-count">0</span> File(s)</a></li>
</ul>
<div id="Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body"> <img src="./demo_2_files/Hello.png"> </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript" async="" src="./demo_2_files/ga.js.download"></script><script src="./demo_2_files/jquery.js.download"></script>
<!--<script src="//cdnjs.cloudflare.com/ajax/libs/zepto/1.0/zepto.min.js"></script>-->
<script src="./demo_2_files/prettify.js.download"></script>
<script src="./demo_2_files/jquery.colorbox-min.js.download"></script>
<script src="./demo_2_files/jquery.finderselect.min.js.download"></script>
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
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>



<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>
<script src="//oss.maxcdn.com/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>

</body>
</html>
