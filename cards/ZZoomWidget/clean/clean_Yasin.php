<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */
?>

<style>
    .container-selection {
        width: 200px;
        height: auto;
        display: block;
    }
    .container-selection label{
          width: 100px;
          height: 115px;
    }

    .container-selection img {
        padding: 10px 10px 0 10px;
        width: 100%;
        height: auto;
    }

    #container-all {
        display: flex;
    }

    .container-zoom img {
        height: 200px;
        width: auto;
    }

    .ex-thumbnail-zoom {
        cursor: crosshair;
        position: relative;
        top: 0;
        left: 0;
        width: 100%;
        /*height: 400px;*/
        margin-top: 10px;
    }

    .ex-thumbnail-zoom-img {
        position: relative;
        float: left;
        width: 450px;
        height: 450px;
        overflow: hidden;
    }

    .ex-zoom-photo {
        position: absolute;
        top: 0;
        left: 0;
        width: 450px;
        height: 450px;
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        transition: transform .8s ease-out;
    }

    .thumbnail {
        padding: 0 !important;
    }
    .active{
        border: 1px solid red;
    }


</style>

      <div class="container">
          <div class="row">
              <article class="col-6 d-flex">
                  <div class="thumbnail">
                      <div class="ex-thumbnail-zoom">
                          <div class="ex-thumbnail-zoom-img" data-scale="3"
                               data-image="https://static.wixstatic.com/media/3ad43d_19c2cbed826e472f87aedd1d1753f339~mv2.jpg"></div>
                      </div>
                  </div>
              </article>

              <div class="col-6">
                  <div class="container-selection d-flex flex-wrap">

                      <div class="d-flex">
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H1e4f8cf4141f40c286816a31ef0f1ae65/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H1e4f8cf4141f40c286816a31ef0f1ae65/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/Hf3ffbe42aa254ce79635d65874baff6dK/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/Hf3ffbe42aa254ce79635d65874baff6dK/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H71987220251d47b3a0515eb1cb035dack/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H71987220251d47b3a0515eb1cb035dack/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/Hc7fea1fa01d14d0db8d83effdca516efx/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/Hc7fea1fa01d14d0db8d83effdca516efx/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg_640x640.jpg"></label>
                      </div>
                      <div class="d-flex">
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H560af1f2a332429f9b6df1a6c0c7eb82Y/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H560af1f2a332429f9b6df1a6c0c7eb82Y/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg"></label>
                          <label onclick='changePreviewProduct("https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg")'>
                              <img
                                      src="https://ae01.alicdn.com/kf/H9a3a0304346042ffac9fbba626625aceC/Box-Pack-Men-s-Cotton-Socks-10Pairs-Lot-Black-Business-Men-Socks-Soft-Breathable-Summer-Winter.jpg"></label>
                      </div>

                  </div>
              </div>
          </div>
      </div>


<script>

    
    function changePreviewProduct(img) {
        document.getElementById("img").style.backgroundImage = "url(" + img + ")";
    }

    var elementThumbnailPhoto = 'ex-thumbnail-zoom-img';
    var elementPhoto = 'ex-zoom-photo';

    $('.' + elementThumbnailPhoto)
        // tile mouse actions
        .on('mouseover', function () {
            $(this).children('.' + elementPhoto).css({
                'transform': 'scale(' + $(this).attr('data-scale') + ')' 

            });
        })
        .on('mouseout', function () {
            $(this).children('.' + elementPhoto).css({
                'transform': 'scale(1)',
            });
        })
        .on('mousemove', function (e) {
            $(this).children('.' + elementPhoto).css({
                'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%'
            });
        })
        // tiles set up
        .each(function () {
            $(this)
                // add a photo container
                .append('<div id="img" class="' + elementPhoto + '"></div>')
                // set up a background image for each tile based on data-image attribute
                .children('.' + elementPhoto).css({
                'background-image': 'url(' + $(this).attr('data-image') + ')'
            });
        })
</script>



