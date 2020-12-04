jQuery(document).ready(function($) {  

  /** Fixed Header **/
  var header = $('.header-container-wrapper');
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      header.removeClass('static').addClass('scroll');
    } else {
      header.removeClass('scroll').addClass('static');
    }
  });
  
  /** Footer Tooltip **/
  $('.footer-tooltip').insertAfter('.footer-container-wrapper').fadeIn().css("display","none");
  
});


window.addEventListener('load', function() {

  /** RSS Feed Setup **/
  $('.feed').fadeIn();
  $('.feed .hs-rss-item').click(function() {
    window.location = $(this).find('a').attr('href'); 
    return false;
  });

  $('.feed .hs-rss-item').each(function () {
    var $this = $(this);
    $('.hs-rss-item-image-wrapper', $this).prependTo($this);
  });


  /** Equal Height Blocks **/
  equalheight = function(container) {
    
    var currentTallest = 0,
        currentRowStart = 0,
      rowDivs = new Array(),
    $el,
    topPosition = 0;

    $(container).each(function() {
    $el = $(this);
    $($el).height('auto')
    topPostion = $el.position().top;
  
    if (currentRowStart != topPostion) {
    for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
      rowDivs[currentDiv].height(currentTallest);
    }
      rowDivs.length = 0; // empty the array
    currentRowStart = topPostion;
    currentTallest = $el.height();
    rowDivs.push($el);
    } else {
    rowDivs.push($el);
    currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
    }
    for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
    rowDivs[currentDiv].height(currentTallest);
    }
  });
  }

  equalheight('.feed .hs-rss-item .hs-rss-description');  
  
  $(window).resize(function(){
    equalheight('.feed .hs-rss-item .hs-rss-description');
  });


  /** Testimonials **/
  $('.testimonials__wrapper .testimonials__inner').slick({
    dots: false,
    autoplay: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    centerMode: true,
    variableWidth: true,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          variableWidth: true
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
          variableWidth: true
        }
      }
    ]
  });
  
}, false);