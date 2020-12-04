<script id="vvveb-input-cssunitinput" type="text/html">
<div class="input-group" id="cssunit-{%=key%}">
  <input name="number" type="number" {% if (typeof value !== 'undefined' && value != false) { %} value="{%=value%}" {%
  } %}
  {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %}
  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %}
  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %}
  class="form-control"/>
  <div class="input-group-append">
    <select class="form-control custom-select small-arrow" name="unit">
      <option value="em">em</option>
      <option value="px">px</option>
      <option value="%">%</option>
      <option value="rem">rem</option>
      <option value="auto">auto</option>
    </select>
  </div>
</div>

</script>