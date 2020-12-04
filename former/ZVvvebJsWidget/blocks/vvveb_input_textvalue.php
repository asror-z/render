<script id="vvveb-input-textvalue" type="text/html">

<div class="row">
  <div class="col-6 mb-1">
    <label>Value</label>
    <input name="value" type="text" value="{%=value%}" class="form-control" />
  </div>

  <div class="col-6 mb-1">
    <label>Text</label>
    <input name="text" type="text" value="{%=text%}" class="form-control" />
  </div>

  {% if (typeof hide_remove === 'undefined') { %}
  <div class="col-12">

    <button class="btn btn-sm btn-outline-light text-danger">
      <i class="la la-trash la-lg"></i> Remove
    </button>

  </div>
  {% } %}

</div>

</script>