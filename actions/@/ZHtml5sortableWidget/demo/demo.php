<!DOCTYPE html>
<!-- saved from url=(0041)http://farhadi.ir/projects/html5sortable/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>HTML5 Sortable</title>
	<link rel="alternate" type="application/rss+xml" title="Ali Farhadi » Feed" href="http://farhadi.ir/feed.xml">
	<link rel="stylesheet" href="./html_files/style.css">
  </head>
  <body>
	<header id="header">
		<hgroup>
			<h1><a href="http://farhadi.ir/">Ali Farhadi</a></h1>
			<h2>Yet Another Web Developer</h2>
		</hgroup>
		<nav style="top: 890px;">
			<ul>
				<li><a href="http://farhadi.ir/">Home</a></li>
				<li><a href="http://farhadi.ir/archives/">Archives</a></li>
				<li><a href="http://farhadi.ir/projects/">Projects</a></li>
				<li><a href="http://github.com/farhadi/">Github</a></li>
				<li><a href="http://farhadi.ir/about/">About me</a></li>
				<li id="feed"><a href="http://farhadi.ir/feed.xml" title="RSS Feed">RSS Feed</a></li>
			</ul>
		</nav>
	</header>
	<article id="project" class="main">
	<header>
		<h1>HTML5 Sortable</h1>
<p> <i>HTML5 Sortable</i> is a jQuery plugin to create sortable lists and grids using native HTML5 drag and drop API.
	</p></header>
<section>
	<h1>DEPRECATION NOTICE</h1>
<p>This project is not mantained anymore. I recommend using <a href="https://github.com/RubaXa/Sortable">RubaXa's Sortable</a> or <a href="https://github.com/voidberg/html5sortable">voidberg's fork</a> instead.</p>
</section>

<section>
	<h1>Why another sortable plugin?</h1>
	<p>
	Because it's better.
	</p><p>
	Well, If you want to read the whole story read it <a href="http://farhadi.ir/posts/the-story-behind-html5-sortable">here</a>.
</p></section>

<section>
	<h1>Features</h1>
	<ul id="features">
		<li>Less than 1KB (minified and gzipped).
		</li><li>Built using native HTML5 drag and drop API.
		</li><li>Supports both list and grid style layouts.
		</li><li>Similar API and behaviour to jquery-ui sortable plugin.
		</li><li>Works in IE 5.5+, Firefox 3.5+, Chrome 3+, Safari 3+, and Opera 12+.
	</li></ul>
</section>

<section>
<h1>How to use it?</h1>
<p>
Download it from <a href="http://farhadi.ir/downloads/html5sortable.tar.gz">here</a>.
Then use it like this:
</p><pre><code class="xml"><span class="tag">&lt;<span class="title">ul</span> <span class="attribute">class</span>=<span class="value">"sortable"</span>&gt;</span>
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>Item 1
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>Item 2
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>Item 3
    <span class="tag">&lt;<span class="title">li</span>&gt;</span>Item 4
<span class="tag">&lt;/<span class="title">ul</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span> <span class="attribute">src</span>=<span class="value">"jquery.sortable.js"</span>&gt;</span><span class="javascript"></span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
<span class="tag">&lt;<span class="title">script</span>&gt;</span><span class="javascript">
    $(<span class="string">'.sortable'</span>).sortable();
</span><span class="tag">&lt;/<span class="title">script</span>&gt;</span>
</code></pre>
<p>
Use <code>.sortable-dragging</code> and <code>.sortable-placeholder</code> selectors to change the styles of a dragging item and its placeholder respectively.
</p><p>
Use <code>sortupdate</code> event if you want to do something when the order changes (e.g. storing the new order):
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable().bind(<span class="string">'sortupdate'</span>, <span class="function"><span class="keyword">function</span><span class="params">()</span> {</span>
    <span class="comment">//Triggered when the user stopped sorting and the DOM position has changed.</span>
});
</code></pre>
<p>
Use <code>items</code> option to specifiy which items inside the element should be sortable.
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable({
    items: <span class="string">':not(.disabled)'</span>
});
</code></pre>
<p>
Use <code>handle</code> option to create sortable lists with handles:
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable({
    handle: <span class="string">'.handle'</span>
});
</code></pre>
<p>
Use <code>connectWith</code> option to create connected lists:
</p><pre><code class="javascript">$(<span class="string">'#sortable1, #sortable2'</span>).sortable({
    connectWith: <span class="string">'.connected'</span>
});
</code></pre>
<p>
To remove the sortable functionality completely:
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable(<span class="string">'destroy'</span>);
</code></pre>
<p>
To disable the sortable temporarily:
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable(<span class="string">'disable'</span>);
</code></pre>
<p>
To enable a disabled sortable:
</p><pre><code class="javascript">$(<span class="string">'.sortable'</span>).sortable(<span class="string">'enable'</span>);
</code></pre>
<p>
The API is compatible with jquery-ui. So you can use jquery-ui as a polyfill in older browsers:
</p><pre><code class="javascript">yepnope({
    test: Modernizr.draganddrop,
    yep: <span class="string">'jquery.sortable.js'</span>,
    nope: <span class="string">'jquery-ui.min.js'</span>,
    complete: <span class="function"><span class="keyword">function</span><span class="params">()</span> {</span>
        $(<span class="string">'.sortable'</span>).sortable().bind(<span class="string">'sortupdate'</span>, <span class="function"><span class="keyword">function</span><span class="params">()</span> {</span>
            <span class="comment">//Store the new order.</span>
        }
    }
});
</code></pre>
</section>

<section id="demos">
	<h1>Demos</h1>
	<style>
		#demos section {
			overflow: hidden;
		}
		.sortable {
			width: 310px;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		.sortable.grid {
			overflow: hidden;
		}
		.sortable li {
			list-style: none;
			border: 1px solid #CCC;
			background: #F6F6F6;
			color: #1C94C4;
			margin: 5px;
			padding: 5px;
			height: 22px;
		}
		.sortable.grid li {
			line-height: 80px;
			float: left;
			width: 80px;
			height: 80px;
			text-align: center;
		}
		.handle {
			cursor: move;
		}
		.sortable.connected {
			width: 200px;
			min-height: 100px;
			float: left;
		}
		li.disabled {
			opacity: 0.5;
		}
		li.highlight {
			background: #FEE25F;
		}
		li.sortable-placeholder {
			border: 1px dashed #CCC;
			background: none;
		}
	</style>

	<section>
		<h1>Sortable List</h1>
		<ul id="sortable1" class="sortable list">
			<li draggable="true">Item 1
			</li><li draggable="true">Item 2
			</li><li draggable="true">Item 3
			</li><li draggable="true">Item 4
			</li><li draggable="true">Item 5
			</li><li draggable="true">Item 6
		</li></ul>
	</section>

	<section>
		<h1>Sortable Grid</h1>
		<ul id="sortable2" class="sortable grid">
			<li draggable="true">Item 1
			</li><li draggable="true">Item 2
			</li><li draggable="true">Item 3
			</li><li draggable="true">Item 4
			</li><li draggable="true">Item 5
			</li><li draggable="true">Item 6
		</li></ul>
	</section>
	
	<section>
		<h1>Sortable List With Disabled Items</h1>
		<ul id="sortable3" class="sortable list">
			<li draggable="true">Item 1
			</li><li draggable="true">Item 2
			</li><li draggable="true">Item 3
			</li><li class="disabled">Item 4
			</li><li class="disabled">Item 5
			</li><li class="disabled">Item 6
		</li></ul>
	</section>

	<section>
		<h2>Sortable List With Handles</h2>
		<ul id="sortable-with-handles" class="sortable list">
			<li draggable="true"><span class="handle">::</span> Item 1</li>
			<li draggable="true"><span class="handle">::</span> Item 2</li>
			<li draggable="true"><span class="handle">::</span> Item 3</li>
			<li draggable="true"><span class="handle">::</span> Item 4</li>
			<li draggable="true"><span class="handle">::</span> Item 5</li>
			<li draggable="true"><span class="handle">::</span> Item 6</li>
		</ul>
	</section>

	<section>
		<h1>Connected Sortable Lists</h1>
		<ul id="sortable4" class="connected sortable list">
			<li draggable="true">Item 1
			</li><li draggable="true">Item 2
			</li><li draggable="true">Item 3
			</li><li draggable="true">Item 4
			</li><li draggable="true">Item 5
			</li><li draggable="true">Item 6
		</li></ul>
		<ul id="sortable5" class="connected sortable list">
			<li class="highlight" draggable="true">Item 1
			</li><li class="highlight" draggable="true">Item 2
			</li><li class="highlight" draggable="true">Item 3
			</li><li class="highlight" draggable="true">Item 4
			</li><li class="highlight" draggable="true">Item 5
			</li><li class="highlight" draggable="true">Item 6
		</li></ul>
	</section>

	<script src="./html_files/jquery-1.7.1.min.js.download"></script>
	<script src="./html_files/jquery.sortable.js.download"></script>
	<script>
		$(function() {
			$('#sortable1, #sortable2').sortable();
			$('#sortable3').sortable({
				items: ':not(.disabled)'
			});
			$('#sortable-with-handles').sortable({
				handle: '.handle'
			});
			$('#sortable4, #sortable5').sortable({
				connectWith: '.connected'
			});
		});
	</script>
</section>

<section>
	<h1>License</h1>
	<p>
	<i>HTML5 Sortable</i> is released under the MIT license.
</p></section>
<p></p><footer>
		<a id="fork-me" href="http://github.com/farhadi/html5sortable" title="Fork me on GitHub">Fork me on GitHub</a>
	</footer>
</article><footer id="footer">
		<section>
			<ul>
			<li id="html5">
				<a href="http://www.w3.org/html/logo/" title="HTML5 Powered">HTML5 Powered</a>
			</li>
			<li id="github">
				<a href="http://github.com/farhadi" title="Follow me on github">Follow me on github</a>
			</li>
			<li id="twitter">
				<a href="http://twitter.com/farhadi" title="Follow me on twitter">Follow me on twitter</a>
			</li>
			<li id="ohloh">
				<a href="http://ohloh.com/accounts/farhadi" title="Give me a kudo">Give me a kudo</a>
			</li>
			<li id="flattr">
				<a href="http://flattr.com/thing/593178/Ali-Farhadi" title="Flattr me">Flattr me</a>
			</li>
			</ul>
		</section>
		<section id="license">
			<a id="cc-badge" rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/"><img alt="Creative Commons License" src="./html_files/88x31.png"></a>
			<p>Content of this site is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/">Creative Commons Attribution-NonCommercial-NoDerivs 3.0 Unported License</a>.
			</p>
		</section>
	</footer>
	<link rel="stylesheet" href="./html_files/solarized.css"><script src="./html_files/highlight.min.js.download"></script><script type="text/javascript">
		if (window.hljs) {
			hljs.tabReplace = '    ';
			hljs.initHighlightingOnLoad();
		}
		var _gaq=[['_setAccount','UA-445571-1'],['_trackPageview']];
		(function(d) {
			var g = d.createElement('script');
			g.src = '//www.google-analytics.com/ga.js';
			d.body.appendChild(g);
			window.addEventListener('scroll', function() {
				var nav = d.querySelector('#header nav');
				var scrollTop = window.pageYOffset || d.body.scrollTop;
				nav.style.top = Math.min(d.body.offsetHeight - 280, Math.max(scrollTop, 120)) + 'px';
			}, false);
		}(document));
	</script><script src="./html_files/ga.js.download"></script>
  

<iframe class="searchbar6942228803292021" src="./html_files/saved_resource.html" scrolling="no" style="border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; display: none; position: fixed; z-index: 2147483646; top: 0px; bottom: auto; left: auto; right: 0px; height: 40px; width: 100%;"></iframe><bdi class="searchbar6942228803292021" style="border: 1px solid rgb(176, 176, 176); margin: 0px; padding: 2px; outline: 0px; vertical-align: baseline; display: none; position: fixed; height: auto; width: auto; z-index: 2147483647; background: none rgb(255, 255, 255); max-height: none; max-width: none; min-height: 0px;"><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 0); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi><bdi style="display: block; border: 0px; margin: 0px; padding: 0px; outline: 0px; vertical-align: baseline; position: static; height: auto; width: auto; z-index: 2147483647; font: 20px sans-serif; text-align: left; color: rgb(0, 0, 255); background: none rgb(255, 255, 255); cursor: default; max-height: none; max-width: none; min-height: 0px; min-width: 0px; letter-spacing: normal; text-decoration: none; text-indent: 0px; text-transform: none; word-spacing: normal; overflow-wrap: normal; white-space: pre;"></bdi></bdi><iframe class="searchbar6942228803292021" src="./html_files/saved_resource(1).html" scrolling="no" style="border: 0px; margin: -186px 0px 0px -202px; padding: 0px; outline: 0px; vertical-align: baseline; display: none; position: fixed; top: 50%; left: 50%; z-index: 2147483645; border-radius: 5px;"></iframe></body><style>@media print{.searchbar6942228803292021{display:none!important;}}</style></html>
