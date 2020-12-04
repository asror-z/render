<div class="position-relative float-right align-middle h-100">
    <div>
        <div id="sidenavslider">
            <span id="side-menu-slider-right" class="h-100 position-absolute "><i
                        class="rounded-circle pl-1 d-flex align-items-center justify-content-center white-text fas fa-chevron-right fa-lg"></i></span>
            <span id="side-menu-slider-left" class=" h-100 position-absolute d-none"><i
                        class="rounded-circle d-flex align-items-center justify-content-center white-text fas fa-chevron-left fa-lg"></i></span>
        </div>
    </div>
    <ul class="menu-left misopen" id="side-icon-bar">

        <li>
            <a class="font-weight-bold hint--left hint--rounded hint--bounce" aria-label="Купоны" href="#">
                <span class="fas fa-archive"></span>
            </a>
        </li>
        <li>
            <a class="font-weight-bold hint--left hint--bounce" aria-label="Cписок пожеланий" href="#">
                <span class="far fa-heart"></span>
            </a></li>
        <li>
            <a class="font-weight-bold hint--left hint--rounded hint--bounce" aria-label="Панель" href="#">
                <span class="far fa-list-alt"></span>
            </a></li>
        <li>
            <a class="font-weight-bold hint--left hint--rounded" aria-label="История" href="#"><span
                        class="fas fa-history"></span>
            </a></li>

        <li class="mtop">
            <a class="font-weight-bold hint--left hint--rounded hint--bounce" aria-label="Поделиться" href="#">
                <span class="fas fa-share-alt"></span>
            </a>
        </li>
        <li>
            <a class="font-weight-bold hint--left" aria-label="Обратная связь" href="#">
                <span class="fas fa-pen"></span>
            </a>
        </li>
        <li class="scroll_top">
            <a id="" onclick="topFunction()" class="font-weight-bold hint--left hint--rounded hint--bounce"
               aria-label="Вверх" href="#">
                <span class="fas fa-chevron-up"></span>
            </a>
        </li>
    </ul>
</div>

<script>
    var sidenavslider = $('#sidenavslider');
    var sideiconbar = $('#side-icon-bar');
    sidenavslider.find('i').css({'height': '35px', 'width': '35px', 'background-color': 'lightgray'});
    sidenavslider.find('i').mouseover(function(){
        $(this).addClass('z-depth-2');
        sidenavslider.find('i').removeClass('white-text');
        sidenavslider.find('i').addClass('green-text');
        sidenavslider.find('i').css({'background-color': 'white'});
    })
    sidenavslider.find('i').mouseleave(function(){
        $(this).removeClass('z-depth-2');
        sidenavslider.find('i').addClass('white-text');
        sidenavslider.find('i').removeClass('green-text');
        sidenavslider.find('i').css('background-color', 'lightgray');
    })
    sidenavslider.css({
        'background': 'none !important',
        'box-shadow': 'none !important',
        'position': 'absolute',
        'top': '50vh',
        'right': '80px',
        'transition': 'top 100',
        'z-index': '1'
    });

    sidenavslider.click(function (event) {
        if (sideiconbar.hasClass('misopen')) {
            Cookies.set('sideBarStatus','closed');
            sideiconbar.toggle(100);
            sideiconbar.toggleClass('misopen');
            $('#side-menu-slider-right').toggleClass('d-none', 1000);
            $('#side-menu-slider-left').toggleClass('d-none', 1000);
            sidenavslider.css('right', '40px');
        } else {
            Cookies.set('sideBarStatus','open');
            sidenavslider.css('right', '80px');
            sideiconbar.toggle(100);
            sideiconbar.toggleClass('misopen');
            $('#side-menu-slider-right').toggleClass('d-none', 1000);
            $('#side-menu-slider-left').toggleClass('d-none', 1000);
        }
    });


    $(window).scroll(function (event) {
        var height = $(window).scrollTop();
        var lineHeight = $(window).height() / 2;
        sidenavslider.fadeIn().css('top', 'calc(40vh + ' + height + 'px)');
    })

    $('.scroll_top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1000);
    });
    $('.fa-list-alt').click(function () {
        $('.jsPanel').toggle();
    });

</script>
