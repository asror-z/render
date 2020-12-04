<script id="vvveb-input-toggle" type="text/html">

<div class="toggle">
  <input
    type="checkbox"
    name="{%=key%}"
    value="{%=on%}"
    {%if (off) { %} data-value-off="{%=off%}" {% } %}
    {%if (on) { %} data-value-on="{%=on%}" {% } %}
    class="toggle-checkbox"
    id="{%=key%}">
  <label class="toggle-label" for="{%=key%}">
    <span class="toggle-inner"></span>
    <span class="toggle-switch"></span>
  </label>
</div>

</script>