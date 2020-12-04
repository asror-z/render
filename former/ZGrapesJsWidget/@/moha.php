<?php

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Platform</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Templates</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Made with U</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

        </ul>
    </div>
    <div class="user-serction d-inline-flex justify-content-around">
        <div class="icon-user mx-4">
            <i class="fas fa-user"></i>
        </div>
        <button class="btn btn-light mx-4">Get Started</button>
    </div>
</nav>

<!-- container -->
<div class="container">

    <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0"> Webiste Tampletes</h1>

    <hr class="mt-2 mb-5">

    <div class="row text-center text-lg-left">

        <div class="img-box col-lg-4 col-md-6 col-sm-10">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
            <div class="info-text">
                <h2>UNION</h2>
                <p> Build a community, educate people on how to use their voice to help end violence, exploitation, and
                    other socio-economic problems.</p>
                <p>Tags: Education, Blog</p>
            </div>
            <div class="info-content">
                <div class="icon-div">
                    <span class="icon icon-click">
                        <i class="fas fa-info-circle"></i>
                    </span>
                </div>
                <div class="info-butotns">
                    <button class="btn btn-primary w-100 px-4 my-2">Select</button>
                    <button class="btn btn-secondary  w-100 px-4">Preview</button>
                </div>
            </div>
        </div>
        <div class="img-box col-lg-4 col-md-6 col-sm-10">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">
            <div class="info-text">
                <h2>UNION</h2>
                <p> Build a community, educate people on how to use their voice to help end violence, exploitation, and
                    other socio-economic problems.</p>
                <p>Tags: Education, Blog</p>
            </div>
            <div class="info-content">
                <div class="icon-div">
                    <span class="icon icon-click">
                        <i class="fas fa-info-circle"></i>
                    </span>
                </div>
                <div class="info-butotns">
                    <button class="btn btn-primary w-100 px-4 my-2">Select</button>
                    <button class="btn btn-secondary  w-100 px-4">Preview</button>
                </div>
            </div>
        </div>


        <div class="img-box col-lg-4 col-md-6 col-sm-10">
            <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/pWkk7iiCoDM/400x300" alt="">


            <div class="info-text">
            
                <h2>UNION</h2>
                <p> Build a community, educate people on how to use their voice to help end violence, exploitation, and
                    other socio-economic problems.</p>
                <p>Tags: Education, Blog</p>
            </div>


            <div class="info-content">
                <div class="icon-div">
                    <span class="icon icon-click">
                        <i class="fas fa-info-circle"></i>
                    </span>
                </div>

                <div class="info-butotns">
                    <button class="btn btn-primary w-100 px-4 my-2">Select</button>
                    <button class="btn btn-secondary  w-100 px-4">Preview</button>
                </div>

            </div>


        </div>

    </div>
</div>


<style>

    .icon-div {
        display: flex;
        justify-content: flex-end;
    }

    img {
        border: none;
    }

    .img-box {
        position: relative;
        padding: 0;
        border: none;
    }


    .info-content {
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
        height: 100%;
    }

    .info-content:hover {
        opacity: 1;
    }

    .info-butotns {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        visibility: visible;
    }

    .hide {
        visibility: hidden;
    }

    button {
        color: #ffffff !important;
    }

    .icon {
        text-align: end;
        font-size: 1.5rem;
        cursor: pointer;
        padding: 1rem;
        position: relative;
    }

    .info-text {
        display: none;
        text-align: start;
        font-size: 1rem;
        background: #fff;
        position: absolute;
        top: 0;
        left: 0;
        padding: 2rem;
        width: 100%;
        height: 100%;
    }

    .show {
        display: block;
    }
</style>


<script>

    var iconClick = $('.icon-click')
    var textContent = $('.info-text')
    var btns = $('.info-butotns')


    iconClick.on('click', (e) => {

        var parent = $(e.target).closest('.img-box')

        parent.find('.info-text').addClass('show')
        parent.find('.info-content').hide()

        $(e.target).show()

    })


</script>

</body>
</html>
