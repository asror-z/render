$(document).ready(function () {
  //if url has #no-right-panel set one panel demo
  if (window.location.hash.indexOf('no-right-panel') != -1) {
    $('#vvveb-builder').addClass('no-right-panel');
    $('.component-properties-tab').show();
    Vvveb.Components.componentPropertiesElement = '#left-panel .component-properties';
  } else {
    $('.component-properties-tab').hide();
  }

  Vvveb.Builder.init('/render/former/ZBootstrapModalWidget/demo/clean.html', function () {
    //run code after page/iframe is loaded
  });

  Vvveb.Gui.init();
  Vvveb.FileManager.init();
  Vvveb.Sections.init();
  Vvveb.FileManager.addPages(
    [
      {
        name: 'narrow-jumbotron',
        title: 'Jumbotron',
        url: '/render/former/ZBootstrapModalWidget/demo/clean.html',
        file: '/render/former/ZBootstrapModalWidget/demo/clean.html',
        assets: ['demo/narrow-jumbotron/narrow-jumbotron.css'],
      },

      //uncomment php code below and rename file to .php extension to load saved html files in the editor
      /*
<?php
        $htmlFiles = glob("*.html");
        foreach ($htmlFiles as $file) {
        if (in_array($file, array('new-page-blank-template.html', 'editor.html'))) continue;//skip template files
        $pathInfo = pathinfo($file);
        ?>
		{name:"<?php echo ucfirst($pathInfo['filename']);?>", title:"<?php echo ucfirst($pathInfo['filename']);?>",  url: "<?php echo $pathInfo['basename'];?>"},
		<?php } ?>
		*/
    ]);

  Vvveb.FileManager.loadPage('narrow-jumbotron');
});