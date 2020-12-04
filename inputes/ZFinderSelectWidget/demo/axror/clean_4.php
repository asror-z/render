
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/font-awesome.css@4.7.2/css/font-awesome.css">

    <style>
       
        tr.selected {
            background-color: #3875d7;
            color: #FFF;
        }

    </style>

<div class="container">
    <div class="col-lg-12">
        <table class="table table-condensed" id="demo1">
            <tbody>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" class="un-selected">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" class="un-selected">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            <tr data-url="http://upload.wikimedia.org/wikipedia/en/d/d0/Hello.png" class="un-selected" ">
                <td><i class="icon-file"></i></td>
                <td>hello.png</td>
                <td>Portable Networks Graphic image</td>
                <td>Friday, 24 July 2013 4:59PM</td>
            </tr>
            </tbody></table>
        <span><span class="demo1-count">0</span> File(s) Selected &nbsp;</span><br>
        <br>
        <button class="btn btn-primary btn-mini demo1-trash">
        Send Selected to Trash
        </button>

    </div>
    <div class="col-lg-12 stateSelected">
        <table class="table table-condensed" id="demo5">
            <tr class="stateSelected un-selected">

            </tr>
        </table>
    </div>
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

        var demo5 = $('#demo5 tbody').finderSelect({enableDesktopCtrlDefault:true});
    });
</script>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>
<script src="//oss.maxcdn.com/libs/jquery.finderselect/0.6.0/jquery.finderselect.min.js"></script>
