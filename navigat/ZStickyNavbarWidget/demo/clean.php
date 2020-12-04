
<style>
    #navbar {
        overflow: hidden;
        background-color: #4CAF50;
    }

    #navbar a {
        float: left;
        display: block;
        color: #f2f2f2;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        font-size: 17px;
    }

    #navbar a:hover {
        background-color: #ddd;
        color: black;
    }
</style>
</head>
<body>
<div id="navbar">
    <a class="active" href="#Home">Home</a>
    <a href="#About">About</a>
    <a href="#Services">Services</a>
    <a href="#Contact">Contact</a>
</div>
<script src="https://cdn.jsdelivr.net/npm/stickyNavbar.js@1.3.3/jquery.stickyNavbar.min.js"></script>

<script>
    $(function () {
        $('.header').stickyNavbar({
            activeClass: "active",
            sectionSelector: "scrollto",
            animDuration: 250,
            startAt: 0,
            easing: "linear",
            animateCSS: true,
            animateCSSRepeat: false,
            cssAnimation: "fadeInDown",
            jqueryEffects: false,
            jqueryAnim: "slideDown",
            selector: "a",
            mobile: false,
            mobileWidth: 480,
            zindex: 9999,
            stickyModeClass: "sticky",
            unstickyModeClass: "unsticky"
        });
    });
</script>
