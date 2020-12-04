<script id="vvveb-input-checkboxinput" type="text/html">

<div class="custom-control custom-checkbox">
  <input name="{%=key%}" class="custom-control-input" type="checkbox" id="{%=key%}_check">
  <label class="custom-control-label" for="{%=key%}_check">{% if (typeof text !== 'undefined') { %} {%=text%} {% }
    %}</label>
</div>

</script>