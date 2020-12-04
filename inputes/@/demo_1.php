<?php
require '../../../configs/ALL/Boot.php';
$boot = new Boot();
define('Cdn', $boot->urlCdn());
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Checkboxes and radio buttons customization (jQuery and Zepto) plugin</title>
  
  <meta charset="utf-8">
  <meta content="width=device-width" name="viewport">

  
  <link href="https://cdn.jsdelivr.net/npm/icheck@1.0.2/icheck.min.js" rel="stylesheet">
  <script src="/publish/yarner/icheck/demo/js/jquery.js"></script>
  <script src="/publish/yarner/icheck/demo/js/custom.min.js?v=1.0.2"></script>

  <link href="https://cdn.jsdelivr.net/npm/icheck@1.0.2/skins/all.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/icheck@1.0.2/skins/all.css"></script>
</head>
<body>
  <div class="layout clear">
    <div class="header">
      <h1>super customized checkboxes and radio buttons for jQuery &amp; Zepto</h1>
      <h3>iCheck <span>v1.0.2</span></h3>
      <strong>@<a href="http://twitter.com/fronteed/">Fronteed</a></strong>
    </div>
    <div class="features">
      <div class="arrows">
        <div class="bottom" data-to="demo"></div>
      </div>
      <h2>Plugin features</h2>
      <ul>
        <li>
          <strong>Identical inputs across different browsers and devices</strong> &mdash; both <span class="self" data-to="download">desktop and mobile</span>
        </li>
        <li>
          <strong>Touch devices support</strong> &mdash; iOS, Android, BlackBerry, Windows Phone, Amazon Kindle
        </li>
        <li>
          <strong>Keyboard accessible inputs</strong> &mdash; <span class="mark">Tab</span>, <span class="mark">Spacebar</span>, <span class="mark">Arrow up/down</span> and other shortcuts
        </li>
        <li>
          <strong>Screenreader accessible inputs</strong> &mdash; <a href="https://developer.mozilla.org/en-US/docs/Accessibility/ARIA" target="blank">ARIA</a> attributes for VoiceOver and others
        </li>
        <li>
          <strong>Customization freedom</strong> &mdash; use any HTML and CSS to style inputs (try <span class="self" data-to="skins">6 Retina-ready skins</span>)
        </li>
        <li>
          <strong>jQuery and Zepto</strong> JavaScript libraries support from single file
        </li>
        <li>
          <strong>Lightweight size</strong> &mdash; 1 kb gzipped
        </li>
        <li class="offset">
          <strong class="self" data-to="options">32 options</strong> to customize checkboxes and radio buttons
        </li>
        <li>
          <strong class="self" data-to="callbacks">11 callbacks</strong> to handle changes
        </li>
        <li>
          <strong class="self" data-to="methods">9 methods</strong> to make changes programmatically
        </li>
        <li>
          Saves changes to original inputs, <span class="self" data-to="init">works carefully</span> with any selectors
        </li>
      </ul>
    </div>
    <div class="social clear">
      <ul class="left">
        <li>
          <a href="http://github.com/fronteed/iCheck/">Download latest version</a>
        </li>
      </ul>
      <ul class="right local">
        <li>
          <a href="http://twitter.com/fronteed/">Follow @fronteed</a>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?text=Highly customizable checkboxes and radio buttons&amp;url=http://fronteed.com/iCheck/&amp;via=fronteed&amp;hashtags=jQuery,Zepto">Share on Twitter</a>
        </li>
        <li>
          <a href="https://github.com/fronteed/iCheck">Star on GitHub</a>
        </li>
      </ul>
    </div>
    <div class="demo-holder">
      <h2 class="demo-title">Demo</h2>
      <div class="demo">
        <div class="arrows">
          <div class="top" data-to="features"></div>
          <div class="bottom" data-to="skins"></div>
        </div>
        <div class="demo-list clear">
          <ul>
            <li>
              <input tabindex="1" type="checkbox" id="input-1">
              <label for="input-1">Checkbox, <span>#input-1</span></label>
            </li>
            <li>
              <input tabindex="2" type="checkbox" id="input-2" checked>
              <label for="input-2">Checkbox, <span>#input-2</span></label>
            </li>
          </ul>
          <ul>
            <li>
              <input tabindex="3" type="radio" id="input-3" name="demo-radio">
              <label for="input-3">Radio button, <span>#input-3</span></label>
            </li>
            <li>
              <input tabindex="4" type="radio" id="input-4" name="demo-radio" checked>
              <label for="input-4">Radio button, <span>#input-4</span></label>
            </li>
          </ul>
          <script>
          $(document).ready(function(){
            var callbacks_list = $('.demo-callbacks ul');
            $('.demo-list input').on('ifCreated ifClicked ifChanged ifChecked ifUnchecked ifDisabled ifEnabled ifDestroyed', function(event){
              callbacks_list.prepend('<li><span>#' + this.id + '</span> is ' + event.type.replace('if', '').toLowerCase() + '</li>');
            }).iCheck({
              checkboxClass: 'icheckbox_square-blue',
              radioClass: 'iradio_square-blue',
              increaseArea: '20%'
            });
          });
          </script>
        </div>
        <dl class="demo-methods">
          <dt>
            <span class="self do-check">Add <span class="mark">checked</span> state to 1 and 3 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-1, #input-3').iCheck('check');
</pre>
          </dd>
          <dt>
            <span class="self do-uncheck">Remove <span class="mark">checked</span> state from 1 and 3 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-1, #input-3').iCheck('uncheck');
</pre>
          </dd>
          <dt>
            <span class="self do-disable">Add <span class="mark">disabled</span> state to 2 and 4 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-2, #input-4').iCheck('disable');
</pre>
          </dd>
          <dt>
            <span class="self do-enable">Remove <span class="mark">disabled</span> state from 2 and 4 inputs</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('#input-2, #input-4').iCheck('enable');
</pre>
          </dd>
          <dt>
            <span class="self do-destroy">Remove all traces of iCheck</span>
            <span class="code">
              <span class="self">show code</span>
            </span>
          </dt>
          <dd>
<pre class="markup">
$('input').iCheck('destroy');
</pre>
          </dd>
        </dl>
        <div class="demo-callbacks">
          <h2>Callbacks</h2>
          <ul></ul>
        </div>
      </div>
    </div>
    <div class="skins">
      <h2>Skins</h2>
      <div class="skin skin-minimal">
        <div class="arrows">
          <div class="top" data-to="demo"></div>
          <div class="bottom" data-to="skin-square"></div>
        </div>
        <h3>Minimal skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="5" type="checkbox" id="minimal-checkbox-1">
                  <label for="minimal-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="6" type="checkbox" id="minimal-checkbox-2" checked>
                  <label for="minimal-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="minimal-checkbox-disabled" disabled>
                  <label for="minimal-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="minimal-checkbox-disabled-checked" checked disabled>
                  <label for="minimal-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="7" type="radio" id="minimal-radio-1" name="minimal-radio">
                  <label for="minimal-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="8" type="radio" id="minimal-radio-2" name="minimal-radio" checked>
                  <label for="minimal-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="minimal-radio-disabled" disabled>
                  <label for="minimal-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="minimal-radio-disabled-checked" checked disabled>
                  <label for="minimal-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li class="active" title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_minimal"></div>
                  <div class="state iradio_minimal"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_minimal hover"></div>
                  <div class="state iradio_minimal hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_minimal checked"></div>
                  <div class="state iradio_minimal checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_minimal disabled"></div>
                  <div class="state iradio_minimal disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_minimal checked disabled"></div>
                  <div class="state iradio_minimal checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-minimal input').iCheck({
                checkboxClass: 'icheckbox_minimal',
                radioClass: 'iradio_minimal',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; minimal.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/minimal/</span> folder and <span class="mark">icheck.js</span>  file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/minimal/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> color scheme:</p>
<pre class="markup">
&lt;link href="your-path/minimal/red.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="iCheck">
&lt;input type="radio" name="iCheck" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal',
    radioClass: 'iradio_minimal',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_minimal-red',
    radioClass: 'iradio_minimal-red',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-square">
        <div class="arrows">
          <div class="top" data-to="skin-minimal"></div>
          <div class="bottom" data-to="skin-flat"></div>
        </div>
        <h3>Square skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="9" type="checkbox" id="square-checkbox-1">
                  <label for="square-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="10" type="checkbox" id="square-checkbox-2" checked>
                  <label for="square-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="square-checkbox-disabled" disabled>
                  <label for="square-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="square-checkbox-disabled-checked" checked disabled>
                  <label for="square-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="11" type="radio" id="square-radio-1" name="square-radio">
                  <label for="square-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="12" type="radio" id="square-radio-2" name="square-radio" checked>
                  <label for="square-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="square-radio-disabled" disabled>
                  <label for="square-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="square-radio-disabled-checked" checked disabled>
                  <label for="square-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green active" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_square-green"></div>
                  <div class="state iradio_square-green"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_square-green hover"></div>
                  <div class="state iradio_square-green hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_square-green checked"></div>
                  <div class="state iradio_square-green checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_square-green disabled"></div>
                  <div class="state iradio_square-green disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_square-green checked disabled"></div>
                  <div class="state iradio_square-green checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-square input').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; square.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/square/</span> folder and <span class="mark">icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/square/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> color scheme:</p>
<pre class="markup">
&lt;link href="your-path/square/red.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="iCheck">
&lt;input type="radio" name="iCheck" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square',
    radioClass: 'iradio_square',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_square-red',
    radioClass: 'iradio_square-red',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-flat">
        <div class="arrows">
          <div class="top" data-to="skin-square"></div>
          <div class="bottom" data-to="skin-line"></div>
        </div>
        <h3>Flat skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="13" type="checkbox" id="flat-checkbox-1">
                  <label for="flat-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="14" type="checkbox" id="flat-checkbox-2" checked>
                  <label for="flat-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="flat-checkbox-disabled" disabled>
                  <label for="flat-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="flat-checkbox-disabled-checked" checked disabled>
                  <label for="flat-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="15" type="radio" id="flat-radio-1" name="flat-radio">
                  <label for="flat-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="16" type="radio" id="flat-radio-2" name="flat-radio" checked>
                  <label for="flat-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="flat-radio-disabled" disabled>
                  <label for="flat-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="flat-radio-disabled-checked" checked disabled>
                  <label for="flat-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red active" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_flat-red"></div>
                  <div class="state iradio_flat-red"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_flat-red checked"></div>
                  <div class="state iradio_flat-red checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_flat-red disabled"></div>
                  <div class="state iradio_flat-red disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_flat-red checked disabled"></div>
                  <div class="state iradio_flat-red checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-flat input').iCheck({
                checkboxClass: 'icheckbox_flat-red',
                radioClass: 'iradio_flat-red'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; flat.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/flat/</span> folder and <span class="mark">icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/flat/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
                <p>Example for a <strong>Red</strong> color scheme:</p>
<pre class="markup">
&lt;link href="your-path/flat/red.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="iCheck">
&lt;input type="radio" name="iCheck" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat',
    radioClass: 'iradio_flat'
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-red',
    radioClass: 'iradio_flat-red'
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-line">
        <div class="arrows">
          <div class="top" data-to="skin-flat"></div>
          <div class="bottom" data-to="skin-polaris"></div>
        </div>
        <h3>Line skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="17" type="checkbox" id="line-checkbox-1">
                  <label for="line-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="18" type="checkbox" id="line-checkbox-2" checked>
                  <label for="line-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="line-checkbox-disabled" disabled>
                  <label for="line-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="line-checkbox-disabled-checked" checked disabled>
                  <label for="line-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="19" type="radio" id="line-radio-1" name="line-radio">
                  <label for="line-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="20" type="radio" id="line-radio-2" name="line-radio" checked>
                  <label for="line-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="line-radio-disabled" disabled>
                  <label for="line-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="line-radio-disabled-checked" checked disabled>
                  <label for="line-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <div class="colors clear">
                <strong>Color schemes</strong>
                <ul>
                  <li title="Black"></li>
                  <li class="red" title="Red"></li>
                  <li class="green" title="Green"></li>
                  <li class="blue active" title="Blue"></li>
                  <li class="aero" title="Aero"></li>
                  <li class="grey" title="Grey"></li>
                  <li class="orange" title="Orange"></li>
                  <li class="yellow" title="Yellow"></li>
                  <li class="pink" title="Pink"></li>
                  <li class="purple" title="Purple"></li>
                </ul>
              </div>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_line-blue">
                    <div class="icheck_line-icon"></div>
                    Normal
                  </div>
                </li>
                <li>
                  <div class="state icheckbox_line-blue hover">
                    <div class="icheck_line-icon"></div>
                    Hover
                  </div>
                </li>
                <li>
                  <div class="state icheckbox_line-blue checked">
                    <div class="icheck_line-icon"></div>
                    Checked
                  </div>
                </li>
                <li>
                  <div class="state icheckbox_line-blue disabled">
                    <div class="icheck_line-icon"></div>
                    Disabled
                  </div>
                </li>
                <li>
                  <div class="state icheckbox_line-blue checked disabled">
                    <div class="icheck_line-icon"></div>
                    Disabled &amp; checked
                  </div>
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-line input').each(function(){
                var self = $(this),
                  label = self.next(),
                  label_text = label.text();

                label.remove();
                self.iCheck({
                  checkboxClass: 'icheckbox_line-blue',
                  radioClass: 'iradio_line-blue',
                  insert: '<div class="icheck_line-icon"></div>' + label_text
                });
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Choose a color scheme, there are 10 different styles available:
                <div class="schemes clear">
                  <ul>
                    <li><strong>Black</strong> &mdash; line.css</li>
                    <li><strong>Red</strong> &mdash; red.css</li>
                    <li><strong>Green</strong> &mdash; green.css</li>
                    <li><strong>Blue</strong> &mdash; blue.css</li>
                    <li><strong>Aero</strong> &mdash; aero.css</li>
                  </ul>
                  <ul>
                    <li><strong>Grey</strong> &mdash; grey.css</li>
                    <li><strong>Orange</strong> &mdash; orange.css</li>
                    <li><strong>Yellow</strong> &mdash; yellow.css</li>
                    <li><strong>Pink</strong> &mdash; pink.css</li>
                    <li><strong>Purple</strong> &mdash; purple.css</li>
                  </ul>
                </div>
              </li>
              <li>
                Copy <span class="mark">/skins/line/</span> folder and <span class="mark">icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/line/color-scheme.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
                  <p>Example for a <strong>Red</strong> color scheme:</p>
<pre class="markup">
&lt;link href="your-path/line/red.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes, radio buttons and labels to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;label>Checkbox 1&lt;/label>

&lt;input type="checkbox" checked>
&lt;label>Checkbox 2&lt;/label>

&lt;input type="radio" name="iCheck">
&lt;label>Radio button 1&lt;/label>

&lt;input type="radio" name="iCheck" checked>
&lt;label>Radio button 2&lt;/label>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheckbox_line',
      radioClass: 'iradio_line',
      insert: '&lt;div class="icheck_line-icon">&lt;/div>' + label_text
    });
  });
});
&lt;/script>
</pre>
                <p>For different from black color schemes use this code (example for <strong>Red</strong>):</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').each(function(){
    var self = $(this),
      label = self.next(),
      label_text = label.text();

    label.remove();
    self.iCheck({
      checkboxClass: 'icheckbox_line-red',
      radioClass: 'iradio_line-red',
      insert: '&lt;div class="icheck_line-icon">&lt;/div>' + label_text
    });
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-polaris">
        <div class="arrows">
          <div class="top" data-to="skin-line"></div>
          <div class="bottom" data-to="skin-futurico"></div>
        </div>
        <h3>Polaris skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="21" type="checkbox" id="polaris-checkbox-1">
                  <label for="polaris-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="22" type="checkbox" id="polaris-checkbox-2" checked>
                  <label for="polaris-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="polaris-checkbox-disabled" disabled>
                  <label for="polaris-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="polaris-checkbox-disabled-checked" checked disabled>
                  <label for="polaris-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="23" type="radio" id="polaris-radio-1" name="polaris-radio">
                  <label for="polaris-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="24" type="radio" id="polaris-radio-2" name="polaris-radio" checked>
                  <label for="polaris-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="polaris-radio-disabled" disabled>
                  <label for="polaris-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="polaris-radio-disabled-checked" checked disabled>
                  <label for="polaris-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_polaris"></div>
                  <div class="state iradio_polaris"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_polaris hover"></div>
                  <div class="state iradio_polaris hover"></div>
                  Hover
                </li>
                <li>
                  <div class="state icheckbox_polaris checked"></div>
                  <div class="state iradio_polaris checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_polaris disabled"></div>
                  <div class="state iradio_polaris disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_polaris checked disabled"></div>
                  <div class="state iradio_polaris checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-polaris input').iCheck({
                checkboxClass: 'icheckbox_polaris',
                radioClass: 'iradio_polaris',
                increaseArea: '-10%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Copy <span class="mark">/skins/polaris/</span> folder and <span class="mark">icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/polaris/polaris.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="iCheck">
&lt;input type="radio" name="iCheck" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_polaris',
    radioClass: 'iradio_polaris',
    increaseArea: '-10%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skin skin-futurico">
        <div class="arrows">
          <div class="top" data-to="skin-polaris"></div>
          <div class="bottom" data-to="usage"></div>
        </div>
        <h3>Futurico skin</h3>
        <dl class="clear">
          <dd class="selected">
            <div class="skin-section">
              <h4>Live</h4>
              <ul class="list">
                <li>
                  <input tabindex="25" type="checkbox" id="futurico-checkbox-1">
                  <label for="futurico-checkbox-1">Checkbox 1</label>
                </li>
                <li>
                  <input tabindex="26" type="checkbox" id="futurico-checkbox-2" checked>
                  <label for="futurico-checkbox-2">Checkbox 2</label>
                </li>
                <li>
                  <input type="checkbox" id="futurico-checkbox-disabled" disabled>
                  <label for="futurico-checkbox-disabled">Disabled</label>
                </li>
                <li>
                  <input type="checkbox" id="futurico-checkbox-disabled-checked" checked disabled>
                  <label for="futurico-checkbox-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
              <ul class="list">
                <li>
                  <input tabindex="27" type="radio" id="futurico-radio-1" name="futurico-radio">
                  <label for="futurico-radio-1">Radio button 1</label>
                </li>
                <li>
                  <input tabindex="28" type="radio" id="futurico-radio-2" name="futurico-radio" checked>
                  <label for="futurico-radio-2">Radio button 2</label>
                </li>
                <li>
                  <input type="radio" id="futurico-radio-disabled" disabled>
                  <label for="futurico-radio-disabled">Disabled</label>
                </li>
                <li>
                  <input type="radio" id="futurico-radio-disabled-checked" checked disabled>
                  <label for="futurico-radio-disabled-checked">Disabled &amp; checked</label>
                </li>
              </ul>
            </div>
            <div class="skin-section skin-states">
              <h4>States</h4>
              <ul class="list">
                <li>
                  <div class="state icheckbox_futurico"></div>
                  <div class="state iradio_futurico"></div>
                  Normal
                </li>
                <li>
                  <div class="state icheckbox_futurico checked"></div>
                  <div class="state iradio_futurico checked"></div>
                  Checked
                </li>
                <li>
                  <div class="state icheckbox_futurico disabled"></div>
                  <div class="state iradio_futurico disabled"></div>
                  Disabled
                </li>
                <li>
                  <div class="state icheckbox_futurico checked disabled"></div>
                  <div class="state iradio_futurico checked disabled"></div>
                  Disabled &amp; checked
                </li>
              </ul>
            </div>
            <script>
            $(document).ready(function(){
              $('.skin-futurico input').iCheck({
                checkboxClass: 'icheckbox_futurico',
                radioClass: 'iradio_futurico',
                increaseArea: '20%'
              });
            });
            </script>
          </dd>
          <dt class="selected">Demo</dt>
          <dd>
            <div class="skin-pre">
              <p>
                Make sure <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]) is loaded before the <span class="mark">icheck.js</span>.
              </p>
            </div>
            <ol class="skin-usage">
              <li>
                Copy <span class="mark">/skins/futurico/</span> folder and <span class="mark">icheck.js</span> file to your site.
              </li>
              <li>
                <p>Insert before <span class="mark">&lt;/head></span> in your HTML (replace <span class="mark">your-path</span> and <span class="mark">color-scheme</span>):</p>
<pre class="markup">
&lt;link href="your-path/futurico/futurico.css" rel="stylesheet">
&lt;script src="your-path/icheck.js">&lt;/script>
</pre>
              </li>
              <li>
                <p>Add some checkboxes and radio buttons to your HTML:</p>
<pre class="markup">
&lt;input type="checkbox">
&lt;input type="checkbox" checked>
&lt;input type="radio" name="iCheck">
&lt;input type="radio" name="iCheck" checked>
</pre>
              </li>
              <li>
                <p>Add JavaScript to your HTML to launch iCheck plugin:</p>
<pre class="markup">
&lt;script>
$(document).ready(function(){
  $('input').iCheck({
    checkboxClass: 'icheckbox_futurico',
    radioClass: 'iradio_futurico',
    increaseArea: '20%' <span class="comment">// optional</span>
  });
});
&lt;/script>
</pre>
              </li>
              <li>Done.</li>
            </ol>
          </dd>
          <dt>Usage</dt>
        </dl>
      </div>
      <div class="skins-info">
        <p>All skins (except Line) are transparent, you may use them on any background.</p>
        <p><a href="http://designmodo.com/square/?u=718" target="blank">Square</a>, <a href="http://designmodo.com/flat/?u=718" target="blank">Flat</a>, <a href="http://designmodo.com/?u=718" target="blank">Polaris</a> and <a href="http://designmodo.com/futuricopro/?u=718" target="blank">Futurico</a> skins are based on <a href="http://designmodo.com/shop/?u=718" target="blank">Designmodo's UI packs</a>.</p>
        <p class="skins-banner">
          <a href="http://designmodo.com/shop/?u=718" target="blank">Awesome UI packs</a>
        </p>
      </div>
    </div>
    <div class="usage">
      <div class="arrows">
        <div class="top" data-to="skin-futurico"></div>
        <div class="bottom" data-to="comparison"></div>
      </div>
      <h2>Simple usage</h2>
      <div class="usage-inner">
        <p>
          iCheck plugin works with checkboxes and radio buttons like a constructor.
          <br><strong>It wraps each input with a div</strong>, which may be customized by you or using one of the <span class="self" data-to="skins">available skins</span>.
          <br>You may also place inside that div some HTML code or text using <span class="mark">insert</span> option.
        </p>
        <p class="offset">For this HTML:</p>
<pre class="markup">
&lt;label>
  &lt;input type="checkbox" name="quux[1]" disabled>
  Foo
&lt;/label>

&lt;label for="baz[1]">Bar&lt;/label>
&lt;input type="radio" name="quux[2]" id="baz[1]" checked>

&lt;label for="baz[2]">Bar&lt;/label>
&lt;input type="radio" name="quux[2]" id="baz[2]">
</pre>
        <p class="offset">With default options you'll get nearly this:</p>
<pre class="markup">
&lt;label>
  &lt;div class="icheckbox disabled">
    &lt;input type="checkbox" name="quux[1]" disabled>
  &lt;/div>
  Foo
&lt;/label>

&lt;label for="baz[1]">Bar&lt;/label>
&lt;div class="iradio checked">
  &lt;input type="radio" name="quux[2]" id="baz[1]" checked>
&lt;/div>

&lt;label for="baz[2]">Bar&lt;/label>
&lt;div class="iradio">
  &lt;input type="radio" name="quux[2]" id="baz[2]">
&lt;/div>
</pre>
        <p><strong>By default, iCheck doesn't provide any CSS styles for wrapper divs</strong> (if you don't use <span class="self" data-to="skins">skins</span>).</p>
        <h4 class="options">Options</h4>
        <p>These options are default:</p>
<pre class="markup">
{
  <span class="comment">// 'checkbox' or 'radio' to style only checkboxes or radio buttons, both by default</span>
  handle: '',

  <span class="comment">// base class added to customized checkboxes</span>
  checkboxClass: 'icheckbox',

  <span class="comment">// base class added to customized radio buttons</span>
  radioClass: 'iradio',

  <span class="comment">// class added on checked state (input.checked = true)</span>
  checkedClass: 'checked',

    <span class="comment">// if not empty, used instead of 'checkedClass' option (input type specific)</span>
    checkedCheckboxClass: '',
    checkedRadioClass: '',

  <span class="comment">// if not empty, added as class name on unchecked state (input.checked = false)</span>
  uncheckedClass: '',

    <span class="comment">// if not empty, used instead of 'uncheckedClass' option (input type specific)</span>
    uncheckedCheckboxClass: '',
    uncheckedRadioClass: '',

  <span class="comment">// class added on disabled state (input.disabled = true)</span>
  disabledClass: 'disabled',

    <span class="comment">// if not empty, used instead of 'disabledClass' option (input type specific)</span>
    disabledCheckboxClass: '',
    disabledRadioClass: '',

  <span class="comment">// if not empty, added as class name on enabled state (input.disabled = false)</span>
  enabledClass: '',

    <span class="comment">// if not empty, used instead of 'enabledClass' option (input type specific)</span>
    enabledCheckboxClass: '',
    enabledRadioClass: '',

  <span class="comment">// class added on <span class="self" data-to="indeterminate">indeterminate state</span> (input.indeterminate = true)</span>
  indeterminateClass: 'indeterminate',

    <span class="comment">// if not empty, used instead of 'indeterminateClass' option (input type specific)</span>
    indeterminateCheckboxClass: '',
    indeterminateRadioClass: '',

  <span class="comment">// if not empty, added as class name on determinate state (input.indeterminate = false)</span>
  determinateClass: '',

    <span class="comment">// if not empty, used instead of 'determinateClass' option (input type specific)</span>
    determinateCheckboxClass: '',
    determinateRadioClass: '',

  <span class="comment">// class added on hover state (pointer is moved onto input)</span>
  hoverClass: 'hover',

  <span class="comment">// class added on focus state (input has gained focus)</span>
  focuclass: 'focus',

  <span class="comment">// class added on active state (mouse button is pressed on input)</span>
  activeClass: 'active',

  <span class="comment">// adds hoverClass to customized input on label hover and labelHoverClass to label on input hover</span>
  labelHover: true,

    <span class="comment">// class added to label if labelHover set to true</span>
    labelHoverClass: 'hover',

  <span class="comment">// increase clickable area by given % (negative number to decrease)</span>
  increaseArea: '',

  <span class="comment">// true to set 'pointer' CSS cursor over enabled inputs and 'default' over disabled</span>
  cursor: false,

  <span class="comment">// set true to inherit original input's class name</span>
  inheritClass: false,

  <span class="comment">// if set to true, input's id is prefixed with 'iCheck-' and attached</span>
  inheritID: false,

  <span class="comment">// set true to activate ARIA support</span>
  aria: false,

  <span class="comment">// add HTML code or text inside customized input</span>
  insert: ''
}
</pre>
        <p>There's no need to copy and paste all of them, you can just mention the ones you need:</p>
<pre class="markup">
$('input').iCheck({
  labelHover: false,
  cursor: true
});
</pre>
        <p>You can choose any class names and slyle them as you want.</p>
        <h4 class="init">Initialize</h4>
        <p>Just include <span class="mark">icheck.js</span> after <a href="http://jquery.com" target="blank">jQuery v1.7+</a> (or <a href="http://github.com/madrobby/zepto#zepto-modules" target="blank">Zepto</a> [polyfill, event, data]).</p>
        <p>iCheck supports any selectors, but handles only checkboxes and radio buttons:</p>
<pre class="markup">
<span class="comment">// customize all inputs (will search for checkboxes and radio buttons)</span>
$('input').iCheck();

<span class="comment">// handle inputs only inside $('.block')</span>
$('.block input').iCheck();

<span class="comment">// handle only checkboxes inside $('.test')</span>
$('.test input').iCheck({
  handle: 'checkbox'
});

<span class="comment">// handle .vote class elements (will search inside the element, if it's not an input)</span>
$('.vote').iCheck();

<span class="comment">// you can also change options after inputs are customized</span>
$('input.some').iCheck({
  <span class="comment">// different options</span>
});
</pre>
        <h4 class="indeterminate">Indeterminate</h4>
        <p>HTML5 allows specifying <a href="http://css-tricks.com/indeterminate-checkboxes/" target="blank">indeterminate</a> ("partially" checked) state for checkboxes. iCheck supports it for both checkboxes and radio buttons.</p>
        <p>You can make an input indeterminate through HTML using additional attributes (supported by iCheck). Both do the same job, but <span class="mark">indeterminate="true"</span> may not work in some browsers (like IE7):</p>
<pre class="markup">
<span class="comment">&lt;!-- indeterminate="true" --></span>
&lt;input type="checkbox" indeterminate="true">
&lt;input type="radio" indeterminate="true">

<span class="comment">&lt;!-- determinate="false" --></span>
&lt;input type="checkbox" determinate="false">
&lt;input type="radio" determinate="false">
</pre>
        <p><span class="mark">indeterminate</span> and <span class="mark">determinate</span> <span class="self" data-to="methods">methods</span> can be used to toggle indeterminate state.</p>
        <h4 class="callbacks">Callbacks</h4>
        <p class="callbacks-info">iCheck provides plenty callbacks, which may be used to handle changes.</p>
        <table>
          <thead>
            <tr>
              <th>Callback name</th>
              <td>When used</td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th>ifClicked</th>
              <td>user clicked on a customized input or an assigned label</td>
            </tr>
            <tr>
              <th>ifChanged</th>
              <td>input's <span class="mark">checked</span>, <span class="mark">disabled</span> or <span class="mark">indeterminate</span> state is changed</td>
            </tr>
            <tr>
              <th>ifChecked</th>
              <td>input's state is changed to <span class="mark">checked</span></td>
            </tr>
            <tr>
              <th>ifUnchecked</th>
              <td><span class="mark">checked</span> state is removed</td>
            </tr>
            <tr>
              <th>ifToggled</th>
              <td>input's <span class="mark">checked</span> state is changed</td>
            </tr>
            <tr>
              <th>ifDisabled</th>
              <td>input's state is changed to <span class="mark">disabled</span></td>
            </tr>
            <tr>
              <th>ifEnabled</th>
              <td><span class="mark">disabled</span> state is removed</td>
            </tr>
            <tr>
              <th>ifIndeterminate</th>
              <td>input's state is changed to <span class="mark">indeterminate</span></td>
            </tr>
            <tr>
              <th>ifDeterminate</th>
              <td><span class="mark">indeterminate</span> state is removed</td>
            </tr>
            <tr>
              <th>ifCreated</th>
              <td>input is just customized</td>
            </tr>
            <tr>
              <th>ifDestroyed</th>
              <td>customization is just removed</td>
            </tr>
          </tbody>
        </table>
        <p>Use <span class="mark">on()</span> method to bind them to inputs:<p>
<pre class="markup">
$('input').on('ifChecked', function(event){
  alert(event.type + ' callback');
});
</pre>
        <p><span class="mark">ifCreated</span> callback should be binded before plugin init.</p>
        <h4 class="methods">Methods</h4>
        <p class="methods-info">These methods can be used to make changes programmatically (any selectors can be used):</p>
        <p><span class="mark">$('input').iCheck('check');</span> &mdash; change input's state to <span class="mark">checked</span></p>
        <p><span class="mark">$('input').iCheck('uncheck');</span> &mdash; remove <span class="mark">checked</span> state</p>
        <p><span class="mark">$('input').iCheck('toggle');</span> &mdash; toggle <span class="mark">checked</span> state</p>
        <p><span class="mark">$('input').iCheck('disable');</span> &mdash; change input's state to <span class="mark">disabled</span></p>
        <p><span class="mark">$('input').iCheck('enable');</span> &mdash; remove <span class="mark">disabled</span> state</p>
        <p><span class="mark">$('input').iCheck('indeterminate');</span> &mdash; change input's state to <span class="mark">indeterminate</span></p>
        <p><span class="mark">$('input').iCheck('determinate');</span> &mdash; remove <span class="mark">indeterminate</span> state</p>
        <p><span class="mark">$('input').iCheck('update');</span> &mdash; apply input changes, which were done outside the plugin</p>
        <p><span class="mark">$('input').iCheck('destroy');</span> &mdash; remove all traces of iCheck</p>
        <p class="methods-callback">You may also specify some function, that will be executed on each method call:</p>
<pre class="markup">
$('input').iCheck('check', function(){
  alert('Well done, Sir');
});
</pre>
        <p class="issue-tracker">Feel free to <a href="http://github.com/fronteed/iCheck/">fork and submit pull-request</a> or <a href="http://github.com/fronteed/iCheck/issues">submit an issue</a> if you find something not working.</p>
      </div>
    </div>
    <div class="benefits comparison">
      <div class="arrows">
        <div class="top" data-to="usage"></div>
        <div class="bottom" data-to="download"></div>
      </div>
      <h2>Comparison</h2>
      <div class="benefits-inner">
        <p>iCheck is created to avoid routine of reinventing the wheel when working with checkboxes and radio buttons. It provides an expected identical result for the huge number of browsers, devices and their versions. Callbacks and methods can be used to easily handle and make changes at customized inputs.</p>
        <p>There are some CSS3 ways available to style checkboxes and radio buttons, like <a href="http://webdesign.tutsplus.com/tutorials/htmlcss-tutorials/quick-tip-easy-css3-checkboxes-and-radio-buttons/" target="blank">this one</a>. You have to know about some of the disadvantages of similar methods:</p>
        <ul>
          <li>
            &mdash; inputs are keyboard inaccessible, since <span class="mark">display: none</span> or <span class="mark">visibility: hidden</span> used to hide them
          </li>
          <li>
            &mdash; poor browser support
          </li>
          <li>
            &mdash; multiple bugs on mobile devices
          </li>
          <li>
            &mdash; tricky, harder to maintain CSS code
          </li>
          <li>
            &mdash; JavaScript is still needed to fix specific issues
          </li>
        </ul>
        <p>While CSS3 method is quite limited solution, iCheck is made to be an everyday replacement covering most of the tasks.</p>
      </div>
    </div>
    <div class="browsers">
      <h2>Browser support</h2>
      <div class="browsers-inner">
        <p>iCheck is verified to work in Internet Explorer 6+, Firefox 2+, Opera 9+, Google Chrome and Safari browsers. Should also work in many others.</p>
        <p>Mobile browsers (like Opera mini, Chrome mobile, Safari mobile, Android browser, Silk and others) are also supported. Tested on iOS (iPad, iPhone, iPod), Android, BlackBerry and Windows Phone devices.</p>
      </div>
    </div>
    <div class="download">
      <a href="http://github.com/fronteed/iCheck/">Download plugin</a>
    </div>
    <div class="license">iCheck plugin is released under the <a href="http://en.wikipedia.org/wiki/MIT_License" target="blank">MIT License</a>. Feel free to use it in personal and commercial projects.</div>
  </div>
  <div class="footer">
    <div class="footer-inner clear">
      <ul class="local">
        <li>
          <a href="https://github.com/fronteed/iCheck">Star on Github</a>
        </li>
        <li>
          <a href="https://twitter.com/intent/tweet?text=Highly customizable checkboxes and radio buttons&amp;url=http://fronteed.com/iCheck/&amp;via=fronteed&amp;hashtags=jQuery,Zepto">Share on Twitter</a>
        </li>
        <li>
          <a href="http://twitter.com/fronteed/">Follow @fronteed</a>
        </li>
      </ul>
      <div class="code">
        Created by <a href="http://fronteed.com/">Damir Sultanov</a>
      </div>
    </div>
  </div>
  <a href="http://github.com/fronteed/iCheck/" class="fork-me">Fork me on GitHub</a>
</body>
</html>
