<!DOCTYPE html>
<html>
<head>

    <title>mmenu.js playground</title>
    <meta charset="utf-8" />

    <!-- Include mmenu files -->
    <link href="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.5/dist/mmenu.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/mmenu-js@8.5.5/dist/mmenu.js"></script>



</head>
<body>
<!-- The menu -->
<nav id="menu">
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/work">Our work</a></li>
        <li><span>About us</span>
            <ul>
                <li><a href="/about/history">History</a></li>
                <li><span>The team</span>
                    <ul>
                        <li><a href="/about/team/management">Management</a></li>
                        <li><a href="/about/team/sales">Sales</a></li>
                        <li><a href="/about/team/development">Development</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><span>Services</span>
            <ul>
                <li><a href="/services/design">Design</a></li>
                <li><a href="/services/development">Development</a></li>
                <li><a href="/services/marketing">Marketing</a></li>
            </ul>
        </li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>


<!-- The page -->
<div class="page" style="background: #7c7c7c; height: 100vh">
    <div class="header">
        <a href="#menu">Demo open menu</a>
    </div>
    <div class="content">
        <p><strong>This is a demo.</strong><br />
            Click the menu icon to open the menu.</p>
    </div>
</div>




<!-- Fire the plugin -->
<script>
    // document.addEventListener(
    //     "DOMContentLoaded", () => {
    //         new Mmenu( "#menu" );
    //     }
    // );

    var menu = new Mmenu('#menu')
</script>
</body>
</html>
