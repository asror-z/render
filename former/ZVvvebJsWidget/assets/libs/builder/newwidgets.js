$(document).ready(function () {

  $.ajax({
    url: '/core/grapes/forVveb.aspx',
    method: 'GET',
    success: function (response) {

      if (response) {
        let contain = $(document).find('.components-list');
        $(contain).append(response);
      }

    },

  });

});
