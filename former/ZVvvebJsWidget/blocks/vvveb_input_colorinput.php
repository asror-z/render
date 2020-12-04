<script id="vvveb-input-colorinput" type="text/html">

<div>
  <input name="{%=key%}" type="color" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}"
  {% } %} pattern="#[a-f0-9]{6}" class="form-control"/>
</div>

</script>