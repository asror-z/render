<!DOCTYPE html>
<!-- saved from url=(0027)https://pjax.herokuapp.com/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title> pjax</title>


    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="apple-touch-icon" href="https://pjax.herokuapp.com/pjax-57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="https://pjax.herokuapp.com/pjax-72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="https://pjax.herokuapp.com/pjax-114.png" sizes="114x114">

    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!--<script src="./pjax_files/jquery.js.download"></script>-->
    <!--<script src="pages.js"></script>-->
    <!--<script src="/render/former/ZJqueryPjaxWidget/demo/pjax_files/pages.js"></script>-->

    <script src="https://raw.github.com/defunkt/jquery-pjax/master/jquery.pjax.js"></script>
    <script type="text/javascript">
        $(function(){
            // pjax
            $(document).pjax('ul a', '#main')
        })
    </script>

    <style>
        pre{
            float:left;
        }
        #main{
            font-family:Helvetica,Arial,sans-serif;
            float:left;
            margin-left:-120px;
            padding-top:80px;
            width:30%;
        }
        ul{padding-left:15px;}
    </style>
</head>

<body><pre>
               ／￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣￣
               |　<b>It's 07:34:45 AM</b>
               ＼＿　 ＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿＿
        .--.     (  )
       /    \   ( )
      ## a  a  .
      (   '._)
       |'-- |
     _.\___/_   ___<label><input type="checkbox" name="pjax">pjax</label>___
   ."\&gt; \Y/|&lt;'.  '._.-'
  /  \ \_\/ /  '-' /
  | --'\_/|/ |   _/
  |___.-' |  |`'`
    |     |  |
    |    / './
   /__./` | |
      \   | |
       \  | |
       ;  | |
       /  | |
 jgs  |___\_.\_
      `-"--'---'

<a href="https://github.com/defunkt/jquery-pjax">github.com/defunkt/jquery-pjax</a>
</pre>
<div id="main">
    
    <ul>
        <li>home</li>
        <li><a href="https://pjax.herokuapp.com/dinosaurs.html">dinosaurs</a></li>
        <li><a href="https://pjax.herokuapp.com/aliens.html">aliens</a></li>
    </ul>

    <p>
        pjax loads html from your server into the current page
        without a full page load. It's ajax with real permalinks,
        page titles, and a working back button that fully degrades.
    </p>

    <p>
        Check the box to toggle pjax.
    </p>

    <p>
        Whenever the time changes, a full page load has happened.
        If the time doesn't change,  no full page load has occurred.
    </p>

    <p>
        The idea is you can't tell the difference between pjax
        page loads and normal page loads. On complicated sites,
        browsing just "feels faster."
    </p>

    <p>
        <a href="https://github.com/defunkt/jquery-pjax/tree/heroku">
            view this example's source code
        </a>
    </p>

</div>


<script>
    $(function() {
        sessionStorage['pjax'] = true;
        $(':checkbox').prop('checked', sessionStorage['pjax'])

        if ( !$(':checkbox').prop('checked') )
            $.pjax.disable()

        $(':checkbox').change(function() {
            if ( !$.support.pjax ) {
                this.checked = false
                return alert( "Sorry, your browser doesn't support pjax :(" )
            }
            if ( $(this).prop('checked') )
                sessionStorage['pjax'] = true
            else
                sessionStorage['pjax'] = ''

            window.location = location.href
        })
    });
</script>

</body></html>
