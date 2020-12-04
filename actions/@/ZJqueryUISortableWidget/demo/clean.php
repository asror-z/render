<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Sortable Animation</title>

  <body>
    
      <ul id="sortable" class="jqui-s-a-container ui-sortable">
        
        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 5</li>

        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 7</li>

        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 3</li>

        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 2</li>
        
        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 4</li>

        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 1</li>
        
        <li class="jqui-s-a-container__item ui-sortable-handle" style="">Item 6</li>
        
      </ul>

  </body>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jqueryui@1.11.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-ui-sortable-animation@1.0.1/jquery.ui.sortable-animation.js"></script>
    <script type="text/javascript">
      $(function () {
        $('#sortable').sortable({
          axis: 'y',
          animation: 300,
        });
      });
    </script>
