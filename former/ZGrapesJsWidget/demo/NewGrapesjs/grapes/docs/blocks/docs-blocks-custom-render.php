    <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    
    <?

    use zetsoft\assets\testing\GrapeAsset;

    GrapeAsset::register($this);
    ?>
    <style>
        body, html{ height: 100%; margin: 0;}
    </style>
</head>

<body>

<div id="gjs" style="height:0%; overflow:hidden">
    <img style="margin: 18% 0 0 45%" src="http://artf.github.io/grapesjs/img/grapesjs-logo.png" />
</div>


<script type="text/javascript">
    var editor = grapesjs.init({
        height: '500px',
        noticeOnUnload: 0,
        container: '#gjs',
        fromElement: true,
    });
    var blockManager = editor.BlockManager;
    blockManager.add('some-block-id', {
  label: `<div>
      <img src="https://picsum.photos/70/70"/>
      <div class="my-label-block">Label block</div>
    </div>`,
  content: '<div>...</div>',
  render: ({ model, className }) => `<div class="${modelClassName}__my-wrap">
      Before label
      ${model.get('label')}
      After label
    </div>`,
});
</script>
</body>
</html>
