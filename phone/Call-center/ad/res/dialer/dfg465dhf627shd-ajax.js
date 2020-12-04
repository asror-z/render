$(function() {
  var theTemplateScript = $("#nav-template").html();
  var theTemplate = Handlebars.compile(theTemplateScript);
  var theCompiledHtml = theTemplate(window.locale);
  $('.nav-placeholder').html(theCompiledHtml);
});

$(function () {
  $.ajax ({
    type: 'POST',
    url: 'getcamp.php',
    data: 'getcampnames=a487457a',
    success: function(data) {
      var campnames = JSON.parse(data);
      var theTemplateScript = $("#campnames-template").html();
      var theTemplate = Handlebars.compile(theTemplateScript);
      var context = {camps: campnames};
      var theCompiledHtml = theTemplate(context);
      $('.campnames-placeholder').html(theCompiledHtml);
    }
  });
});
