<?php 
$cssJS = array(
	'/plugins/reveal/css/reveal.css',
	'/plugins/reveal/css/theme/black.css',
	'/plugins/reveal/lib/css/zenburn.css',
	'/plugins/reveal/lib/js/head.min.js',
	'/plugins/reveal/js/reveal.js'
); 

HtmlHelper::registerCssAndScriptsFiles($cssJS, Yii::app()->request->baseUrl);


 ?>
<script>
	var link = document.createElement( 'link' );
	link.rel = 'stylesheet';
	link.type = 'text/css';
	link.href = window.location.search.match( /print-pdf/gi ) ? baseUrl+'/plugins/reveal/css/print/pdf.css' : baseUrl+'/plugins/reveal/css/print/paper.css';
	document.getElementsByTagName( 'head' )[0].appendChild( link );
</script>
<?php /* ?>
<style type="text/css">
	#titleCostum{
		position: relative;
		top: 350px;
		left: 0px;
		background-color: rgba(0,0,0,0.7);
		color:white;
		font-size: 44px;
		font-weight: bolder;
		z-index: 10;
		padding: 10px;
		text-align: center;
	}
</style>
*/?>
<div class="reveal">

	<!-- Any section element inside of this container is displayed as a slide -->
	<div class="slides">
		<section>
			<h2>Reveal dans Communecter</h2>
			<h3>Des Presentations en Markdown </h3>
			<p>
				<small>Et pourquoi pas tout communecter navigable comme un PPT</small>
				<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img3.jpg'>
			</p>
		</section>

		<section>
			<img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/freedom.png'><br>
			of the power point 
		</section>
		
		<section>
			<h2>Hello There</h2>
			<p>
				reveal.js enables you to create beautiful interactive slide decks using HTML. This presentation will show you examples of what it can do.
			</p>
		</section>

		<!-- Example of nested vertical slides -->
		<section>
			<section>
				<h2>Vertical Slides</h2>
				<p>Slides can be nested inside of each other.</p>
				<p>Use the <em>Space</em> key to navigate through all slides.</p>
				<br>
				<a href="#" class="navigate-down">
					<img width="178" height="238" data-src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" alt="Down arrow">
				</a>
			</section>
			<section>
				<h2>Basement Level 1</h2>
				<p>Nested slides are useful for adding additional detail underneath a high level horizontal slide.</p>
			</section>
			<section>
				<h2>Basement Level 2</h2>
				<p>That's it, time to go back up.</p>
				<br>
				<a href="#/2">
					<img width="178" height="238" data-src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" alt="Up arrow" style="transform: rotate(180deg); -webkit-transform: rotate(180deg);">
				</a>
			</section>
		</section>

		<section>
			<h2>Slides</h2>
			<p>
				Not a coder? Not a problem. There's a fully-featured visual editor for authoring these, try it out at <a href="https://slides.com" target="_blank">https://slides.com</a>.
			</p>
		</section>

		<section>
			<h2>Point of View</h2>
			<p>
				Press <strong>ESC</strong> to enter the slide overview.
			</p>
			<p>
				Hold down alt and click on any element to zoom in on it using <a href="http://lab.hakim.se/zoom-js">zoom.js</a>. Alt + click anywhere to zoom back out.
			</p>
		</section>

		<section>
			<h2>Touch Optimized</h2>
			<p>
				Presentations look great on touch devices, like mobile phones and tablets. Simply swipe through your slides.
			</p>
		</section>

		<section data-markdown>
			<script type="text/template">
				## Markdown support

				Write content using inline or external Markdown.
				Instructions and more info available in the [readme](https://github.com/hakimel/reveal.js#markdown).

				```
				<section data-markdown>
				  ## Markdown support

				  Write content using inline or external Markdown.
				  Instructions and more info available in the [readme](https://github.com/hakimel/reveal.js#markdown).
				</section>
				```
			</script>
		</section>

		<section>
			<section id="fragments">
				<h2>Fragments</h2>
				<p>Hit the next arrow...</p>
				<p class="fragment">... to step through ...</p>
				<p><span class="fragment">... a</span> <span class="fragment">fragmented</span> <span class="fragment">slide.</span></p>

				<aside class="notes">
					This slide has fragments which are also stepped through in the notes window.
				</aside>
			</section>
			<section>
				<h2>Fragment Styles</h2>
				<p>There's different types of fragments, like:</p>
				<p class="fragment grow">grow</p>
				<p class="fragment shrink">shrink</p>
				<p class="fragment fade-out">fade-out</p>
				<p>
					<span style="display: inline-block;" class="fragment fade-right">fade-right, </span>
					<span style="display: inline-block;" class="fragment fade-up">up, </span>
					<span style="display: inline-block;" class="fragment fade-down">down, </span>
					<span style="display: inline-block;" class="fragment fade-left">left</span>
				</p>
				<p class="fragment fade-in-then-out">fade-in-then-out</p>
				<p class="fragment fade-in-then-semi-out">fade-in-then-semi-out</p>
				<p>Highlight <span class="fragment highlight-red">red</span> <span class="fragment highlight-blue">blue</span> <span class="fragment highlight-green">green</span></p>
			</section>
		</section>

		<section id="transitions">
			<h2>Transition Styles</h2>
			<p>
				You can select from different transitions, like: <br>
				<a href="?transition=none#/transitions">None</a> -
				<a href="?transition=fade#/transitions">Fade</a> -
				<a href="?transition=slide#/transitions">Slide</a> -
				<a href="?transition=convex#/transitions">Convex</a> -
				<a href="?transition=concave#/transitions">Concave</a> -
				<a href="?transition=zoom#/transitions">Zoom</a>
			</p>
		</section>

		<section id="themes">
			<h2>Themes</h2>
			<p>
				reveal.js comes with a few themes built in: <br>
				<!-- Hacks to swap themes after the page has loaded. Not flexible and only intended for the reveal.js demo deck. -->
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/black.css'); return false;">Black (default)</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/white.css'); return false;">White</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/league.css'); return false;">League</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/sky.css'); return false;">Sky</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/beige.css'); return false;">Beige</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/simple.css'); return false;">Simple</a> <br>
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/serif.css'); return false;">Serif</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/blood.css'); return false;">Blood</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/night.css'); return false;">Night</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/moon.css'); return false;">Moon</a> -
				<a href="#" onclick="document.getElementById('theme').setAttribute('href','css/theme/solarized.css'); return false;">Solarized</a>
			</p>
		</section>

		<section>
			<section data-background="#dddddd">
				<h2>Slide Backgrounds</h2>
				<p>
					Set <code>data-background="#dddddd"</code> on a slide to change the background color. All CSS color formats are supported.
				</p>
				<a href="#" class="navigate-down">
					<img width="178" height="238" data-src="https://s3.amazonaws.com/hakim-static/reveal-js/arrow.png" alt="Down arrow">
				</a>
			</section>
			<section data-background="https://s3.amazonaws.com/hakim-static/reveal-js/image-placeholder.png">
				<h2>Image Backgrounds</h2>
				<pre><code class="hljs">&lt;section data-background="image.png"&gt;</code></pre>
			</section>
			<section data-background="https://s3.amazonaws.com/hakim-static/reveal-js/image-placeholder.png" data-background-repeat="repeat" data-background-size="100px">
				<h2>Tiled Backgrounds</h2>
				<pre><code class="hljs" style="word-wrap: break-word;">&lt;section data-background="image.png" data-background-repeat="repeat" data-background-size="100px"&gt;</code></pre>
			</section>
			<section data-background-video="https://s3.amazonaws.com/static.slid.es/site/homepage/v1/homepage-video-editor.mp4,https://s3.amazonaws.com/static.slid.es/site/homepage/v1/homepage-video-editor.webm" data-background-color="#000000">
				<div style="background-color: rgba(0, 0, 0, 0.9); color: #fff; padding: 20px;">
					<h2>Video Backgrounds</h2>
					<pre><code class="hljs" style="word-wrap: break-word;">&lt;section data-background-video="video.mp4,video.webm"&gt;</code></pre>
				</div>
			</section>
			<section data-background="http://i.giphy.com/90F8aUepslB84.gif">
				<h2>... and GIFs!</h2>
			</section>
		</section>

		<section data-transition="slide" data-background="#4d7e65" data-background-transition="zoom">
			<h2>Background Transitions</h2>
			<p>
				Different background transitions are available via the backgroundTransition option. This one's called "zoom".
			</p>
			<pre><code class="hljs">Reveal.configure({ backgroundTransition: 'zoom' })</code></pre>
		</section>

		<section data-transition="slide" data-background="#b5533c" data-background-transition="zoom">
			<h2>Background Transitions</h2>
			<p>
				You can override background transitions per-slide.
			</p>
			<pre><code class="hljs" style="word-wrap: break-word;">&lt;section data-background-transition="zoom"&gt;</code></pre>
		</section>

		<section>
			<h2>Pretty Code</h2>
			<pre><code class="hljs" data-trim contenteditable>
function linkify( selector ) {
if( supports3DTransforms ) {

var nodes = document.querySelectorAll( selector );

for( var i = 0, len = nodes.length; i &lt; len; i++ ) {
var node = nodes[i];

if( !node.className ) {
node.className += ' roll';
}
}
}
}
			</code></pre>
			<p>Code syntax highlighting courtesy of <a href="http://softwaremaniacs.org/soft/highlight/en/description/">highlight.js</a>.</p>
		</section>

		<section>
			<h2>Marvelous List</h2>
			<ul>
				<li>No order here</li>
				<li>Or here</li>
				<li>Or here</li>
				<li>Or here</li>
			</ul>
		</section>

		<section>
			<h2>Fantastic Ordered List</h2>
			<ol>
				<li>One is smaller than...</li>
				<li>Two is smaller than...</li>
				<li>Three!</li>
			</ol>
		</section>

		<section>
			<h2>Tabular Tables</h2>
			<table>
				<thead>
					<tr>
						<th>Item</th>
						<th>Value</th>
						<th>Quantity</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Apples</td>
						<td>$1</td>
						<td>7</td>
					</tr>
					<tr>
						<td>Lemonade</td>
						<td>$2</td>
						<td>18</td>
					</tr>
					<tr>
						<td>Bread</td>
						<td>$3</td>
						<td>2</td>
					</tr>
				</tbody>
			</table>
		</section>

		<section>
			<h2>Clever Quotes</h2>
			<p>
				These guys come in two forms, inline: <q cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">The nice thing about standards is that there are so many to choose from</q> and block:
			</p>
			<blockquote cite="http://searchservervirtualization.techtarget.com/definition/Our-Favorite-Technology-Quotations">
				&ldquo;For years there has been a theory that millions of monkeys typing at random on millions of typewriters would
				reproduce the entire works of Shakespeare. The Internet has proven this theory to be untrue.&rdquo;
			</blockquote>
		</section>

		<section>
			<h2>Intergalactic Interconnections</h2>
			<p>
				You can link between slides internally,
				<a href="#/2/3">like this</a>.
			</p>
		</section>

		<section>
			<h2>Speaker View</h2>
			<p>There's a <a href="https://github.com/hakimel/reveal.js#speaker-notes">speaker view</a>. It includes a timer, preview of the upcoming slide as well as your speaker notes.</p>
			<p>Press the <em>S</em> key to try it out.</p>

			<aside class="notes">
				Oh hey, these are some notes. They'll be hidden in your presentation, but you can see them if you open the speaker notes window (hit 's' on your keyboard).
			</aside>
		</section>

		<section>
			<h2>Export to PDF</h2>
			<p>Presentations can be <a href="https://github.com/hakimel/reveal.js#pdf-export">exported to PDF</a>, here's an example:</p>
			<iframe data-src="https://www.slideshare.net/slideshow/embed_code/42840540" width="445" height="355" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:3px solid #666; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe>
		</section>

		<section>
			<h2>Global State</h2>
			<p>
				Set <code>data-state="something"</code> on a slide and <code>"something"</code>
				will be added as a class to the document element when the slide is open. This lets you
				apply broader style changes, like switching the page background.
			</p>
		</section>

		<section data-state="customevent">
			<h2>State Events</h2>
			<p>
				Additionally custom events can be triggered on a per slide basis by binding to the <code>data-state</code> name.
			</p>
			<pre><code class="javascript" data-trim contenteditable style="font-size: 18px;">
Reveal.addEventListener( 'customevent', function() {
console.log( '"customevent" has fired' );
} );
			</code></pre>
		</section>

		<section>
			<h2>Take a Moment</h2>
			<p>
				Press B or . on your keyboard to pause the presentation. This is helpful when you're on stage and want to take distracting slides off the screen.
			</p>
		</section>

		<section>
			<h2>Much more</h2>
			<ul>
				<li>Right-to-left support</li>
				<li><a href="https://github.com/hakimel/reveal.js#api">Extensive JavaScript API</a></li>
				<li><a href="https://github.com/hakimel/reveal.js#auto-sliding">Auto-progression</a></li>
				<li><a href="https://github.com/hakimel/reveal.js#parallax-background">Parallax backgrounds</a></li>
				<li><a href="https://github.com/hakimel/reveal.js#keyboard-bindings">Custom keyboard bindings</a></li>
			</ul>
		</section>

		<section style="text-align: left;">
			<h1>THE END</h1>
			<p>
				- <a href="https://slides.com">Try the online editor</a> <br>
				- <a href="https://github.com/hakimel/reveal.js">Source code &amp; documentation</a>
			</p>
		</section>

	</div>

</div>

<script>

jQuery(document).ready(function() { 
      // More info https://github.com/hakimel/reveal.js#configuration
	Reveal.initialize({
		controls: true,
		progress: true,
		history: true,
		center: true,

		transition: 'slide', // none/fade/slide/convex/concave/zoom

		// More info https://github.com/hakimel/reveal.js#dependencies
		dependencies: [
			{ src: 'lib/js/classList.js', condition: function() { return !document.body.classList; } },
			{ src: 'plugin/markdown/marked.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: 'plugin/markdown/markdown.js', condition: function() { return !!document.querySelector( '[data-markdown]' ); } },
			{ src: 'plugin/highlight/highlight.js', async: true, callback: function() { hljs.initHighlightingOnLoad(); } },
			{ src: 'plugin/search/search.js', async: true },
			{ src: 'plugin/zoom-js/zoom.js', async: true },
			{ src: 'plugin/notes/notes.js', async: true }
		]
	});


      
  });

	
</script>


<?php /* ?>==
<div id="titleCostum">ZAD : <?php echo $element["name"] ?></div>
<div class="row margin-top-20  padding-20">

	<div class="col-xs-12 text-center margin-bottom-50">
	<div id="docCarousel" class="carousel slide" data-ride="carousel">
  <!-- Round button indicators -->
  <ol class="carousel-indicators">
    <li data-target="#docCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#docCarousel" data-slide-to="1" class=""></li>
    <li data-target="#docCarousel" data-slide-to="2" class=""></li>
    <li data-target="#docCarousel" data-slide-to="3" class=""></li>
    <li data-target="#docCarousel" data-slide-to="4" class=""></li>
    <li data-target="#docCarousel" data-slide-to="5" class=""></li>
    <li data-target="#docCarousel" data-slide-to="6" class=""></li>
    <li data-target="#docCarousel" data-slide-to="7" class=""></li>
    <li data-target="#docCarousel" data-slide-to="8" class=""></li>
    <li data-target="#docCarousel" data-slide-to="9" class=""></li>
    <li data-target="#docCarousel" data-slide-to="10" class=""></li>
    <li data-target="#docCarousel" data-slide-to="11" class=""></li>
    <li data-target="#docCarousel" data-slide-to="12" class=""></li>
    <li data-target="#docCarousel" data-slide-to="13" class=""></li>
    <li data-target="#docCarousel" data-slide-to="14" class=""></li>
    <li data-target="#docCarousel" data-slide-to="15" class=""></li>
  </ol>

  <!-- Wrapper for slides -->
  <style type="text/css">
  	div.item img{margin:auto;}
  </style>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img3.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img4.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img7.png'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img8.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img9.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img11.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img12.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img14.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img16.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img17.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img18.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img19.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img20.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img24.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img25.jpg'> </div>
    <div class="item"><img class="img-responsive" src='<?php echo Yii::app()->getModule("onepage")->assetsUrl; ?>/images/custom/zad/img29.jpg'> </div>
  </div>
	
</div>
		
	</div>

	<div class="col-xs-12 bgDark">
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">BUILD YOUR PROCESS</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/sample.png'> </div>
		</div>
	</div>

	<div class="col-xs-12 margin-top-20">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/evan-dennis-75563-unsplash.jpg'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">GET ANSWERS TO YOUR QUESTIONS</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>
	
	<div class="col-xs-12">
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">CROWD KNOWLEDGE & COLLECTIVE INTELLIGENCE</h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/edwin-andrade-153753-unsplash.jpg'> </div>
		</div>
	</div>

	<div class="col-xs-12">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/glen-noble-18012-unsplash.jpg'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">PROJECT MUTUALISATION & EVALUATIONS </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>

	<div class="col-xs-12">
		
		<div class="col-xs-6 padding-20">
		<h1 class="text-center"> TOOLS FOR DEMOCRACY </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/my-life-through-a-lens-110632-unsplash.jpg'> </div>
	</div>

	<div class="col-xs-12">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/cody-davis-253928-unsplash.jpg'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">OPEN SOURCE & LIBRE SOFTWARE </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>

	<div class="col-xs-12">
		
		<div class="col-xs-6 padding-20">
		<h1 class="text-center"> BUILD PARTICIPATIVE COMMUNITIES </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("survey")->assetsUrl; ?>/images/home/tim-marshall-114623-unsplash.jpg'> </div>
	</div>

	<div class="col-xs-12">
		<div class="col-xs-6"><img class="img-responsive" src='<?php echo Yii::app()->getModule("co2")->assetsUrl; ?>/images/logoBtn.png'> </div>
		<div class="col-xs-6 padding-20">
		<h1 class="text-center">LOVE & CO </h1>
		<div class="col-xs-6 col-md-offset-2 padding-20">
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div></div>
	</div>




	

</div>

*/?>