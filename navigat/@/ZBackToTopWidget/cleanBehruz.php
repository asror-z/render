
    <div id="h1" class="left">  </div>
        <ul>

                <a class="link1" ><i class="fas fa-arrow-up icon"></i></a>
        </ul>

<!-- main-->
<style>


    .left {
        width: 200px;
        padding: 10px;

    }
.icon{
    color: white;
}
    .left ul {
        position: fixed;
        display: block;
        background-color: #F2F2F2;
        height: 65px;
        width: 60px;
        padding: 0px;
        border-radius: 50px;
        background: #30d473 !important;
        /*margin-top:40px;*/
        bottom: 50px;
        right: 150px;
        margin-left: 100px;
        z-index: 9999;
        transition: .6s;

    }
    
    .left ul  a {
        color: #000000;
        display: block;
        padding: 20px;
        text-align: center;
        text-decoration: none;
        list-style: none;


    }
    .scrollTop {
        position: fixed;
        right: 10%;
        bottom: 10px;
        background-color: #be3f48;
        padding: 20px;
        opacity: 0;
        transition: all 0.4s ease-in-out 0s;
    }

    .scrollTop a {
        font-size: 18px;
        color: #fff;
    }
</style>
<script>
    $(document).ready(function() {
        var h1 = $("#h1").position();
        var h2 = $("#h2").position();
        var h3 = $("#h3").position();

        $('.link1').click(function() {
            $('html, body').animate({
                scrollTop: h1.top
            }, 500);
            return false;
        });
    });
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $(".link1").fadeIn();
        } else {
            $(".h1").fadeOut();
        }
    });
    $(".link1").on('click', function () {
        $("html, body").animate({scrollTop: 0}, 700);
    });



    $('.left').css('transition','0.7s ')
    $('.left').hide()


    $('body').scroll(function () {
        let height = $(this).scrollTop();
        if(height>200)
            $('.left').show()

        else
            $('.left').hide()
    })



</script>
