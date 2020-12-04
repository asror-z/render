
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <script>
      var w = window.opener || window.parent || window;
      try {
          var node = '{$node}';
          var bind = '{$bind}';
          var data = {$json};
      }  catch(e) {
          var data = {error: 'errDataNotJSON'};
      }
      try {
          var elf = w.document.getElementById(node).elfinder;
          if (elf) {
              if (data.error) {
                  elf.error(data.error);
              } else {
                  data.warning && elf.error(data.warning);
                  data.removed && data.removed.length && elf.remove(data);
                  data.added   && data.added.length   && elf.add(data);
                  data.changed && data.changed.length && elf.change(data);;
                  if (bind) {
                      elf.trigger(bind, data);
                  }
                  data.sync && elf.sync();
              }
          }
      } catch(e) {
          // for CORS but IE dose not support
          w.postMessage && w.postMessage(JSON.stringify({bind: bind, data: data}), '*');
      };
      window.close();
    </script>
  </head>
  <body>
    <a href="#" onlick="window.close();return false;">Close this window</a>
  </body>
</html>
