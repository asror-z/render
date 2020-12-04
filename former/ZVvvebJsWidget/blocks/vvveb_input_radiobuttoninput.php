<script id="vvveb-input-radiobuttoninput" type="text/html">

<div class="btn-group btn-group-toggle  {%if (extraclass) { %}{%=extraclass%}{% } %} clearfix" data-toggle="buttons">

  {% for ( var i = 0; i < options.length; i++ ) { %}

  <label
    class="btn  btn-outline-primary  {%if (options[i].checked) { %}active{% } %}  {%if (options[i].extraclass) { %}{%=options[i].extraclass%}{% } %}"
    for="{%=key%}{%=i%} " title="{%=options[i].title%}">
    <input name="{%=key%}" class="custom-control-input" type="radio" value="{%=options[i].value%}" id="{%=key%}{%=i%}"
           {%if (options[i].checked) { %}checked="{%=options[i].checked%}" {% } %}>
    {%if (options[i].icon) { %}<i class="{%=options[i].icon%}"></i>{% } %}
    {%=options[i].text%}
  </label>

  {% } %}

</div>

</script>