/*
   ___      ___   ___     _________
  |  |     |  |  |  |    |   ___   |
  |  |     |  |  |  |    |  |   |  |
  |  |___  |  |  |  |___ |  |___|  |
  |_____|  |__|  |_____| |_________|

  Version: 1.2.0
  Author: Alex Ricioli, Elton Pongilo

*/
;(function($) {
  $.fn.liloAccordion = function(options) {
    var settings = $.extend({
      onlyOneActive: true, // True: Abre um e fecha os outros elementos
      initFirstActive: true, // True: Deixa o primeiro elemento aberto
      destructor: false, // True: Cancela o accordion. Ex. de uso: Accordion funciona no mobile e no desktop não
      hideControl: false, // True: Desaparece com os controles. Obs.: Apenas se o parametro destructor for true
      openNextOnClose: false // True: Ao clicar no controle ativo fecha o conteúdo atual e abre o próximo.
    }, options);

    return this.each(function() {

      var $this = $(this),
        $control = $('> .lilo-accordion-content', $this).prev('.lilo-accordion-control'),
        $content  = $('> .lilo-accordion-content', $this); // mesma coisa que o find

      if (settings.destructor) {
        $control.off('click').removeClass('active');
        if (settings.hideControl) {
          $control.css('display','none');
        }
        $content.css('display','block');
        $this.data('status', false);
        return;
      } else {
        if ($this.data('status') == true) { // Verifica se o plugin já foi rodado
          return;
        }
      }

      $this.data('status', true);

      $control.css('display','block');
      $content.css('display','none');

      if (settings.initFirstActive) {
        $control.filter(':first').addClass('active');
      }

      slideActive();

      $control.on('click', function(e) {
        e.preventDefault();
        $this = $(this);

        if ($this.hasClass('active')) {
          if (settings.openNextOnClose) {
            $this.parent().find('.lilo-accordion-control').each(function() {
              if ($(this).index() > $this.index()) {
                $(this).addClass('active');
                return false;
              }
            });
          }
          $this.removeClass('active');
        } else {
          if (settings.onlyOneActive) {
            $control.removeClass('active');
          }
          $this.addClass('active');
        }

        slideActive();
      });

      function slideActive() {
        $control.filter('.active').next('.lilo-accordion-content').stop(false, true).slideDown();
        $control.filter(':not(.active)').next('.lilo-accordion-content').stop(false, true).slideUp();
      }

    });
  }
})(jQuery);
