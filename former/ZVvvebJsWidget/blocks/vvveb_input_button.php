<script id="vvveb-input-button" type="text/html">
<div>
  <button class="btn btn-sm btn-primary">
    <i class="la  {% if (typeof icon !== 'undefined') { %} {%=icon%} {% } else { %} la-plus {% } %} la-lg"></i>
    {%=text%}
  </button>
</div>
</script>