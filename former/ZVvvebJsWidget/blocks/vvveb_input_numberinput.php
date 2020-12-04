<script id="vvveb-input-numberinput" type="text/html">
<div>
  <input name="{%=key%}" type="number" value="{%=value%}"
         {% if (typeof min !== 'undefined' && min != false) { %}min="{%=min%}"{% } %}
  {% if (typeof max !== 'undefined' && max != false) { %}max="{%=max%}"{% } %}
  {% if (typeof step !== 'undefined' && step != false) { %}step="{%=step%}"{% } %}
  class="form-control"/>
</div>
</script>