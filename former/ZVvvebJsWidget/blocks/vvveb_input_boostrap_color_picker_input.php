<script id="vvveb-input-bootstrap-color-picker-input" type="text/html">

<div>
  <div id="cp2" class="input-group" title="Using input value">
    <input name="{%=key%}" type="text" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}"
    {% } %} class="form-control"/>
    <span class="input-group-append">
			<span class="input-group-text colorpicker-input-addon"><i></i></span>
		  </span>
  </div>
</div>

</script>