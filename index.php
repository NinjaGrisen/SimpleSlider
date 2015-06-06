<!DOCTYPE html>
<html lang="en">
<head>
	<title>Simple Slider</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>	<!--<script src="slideshow.js"></script>-->
	<script src="simpleSlider.js"></script>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Simple slider is a small content slider, created for people that want to create there own feel to fit their web page.">
</head>
<body>

<div class="container">
	<h1>Simple slider ... An easy to use slideshow</h1>

	<div id="slider">
		<ul class="slides">
			<li class="slide">
				<p class="slideCaption"><a href="http://www.pexels.com/photo/sea-sky-beach-holiday-1106/">Cali road trip</a></p>
				<img class="slideImage" alt="img2" src="img/beach.jpg"/>
			</li>
			<li class="slide">
				<p class="slideCaption"><a href="http://www.pexels.com/photo/flight-sky-earth-space-2159/">Moon is already visited </a></p>
				<img class="slideImage" alt="img3" src="img/space.jpg"/>
			</li>
			<li class="slide">
				<p class="slideCaption"><a href="http://www.pexels.com/photo/food-healthy-flying-kitchen-1662/">Fruit ninja </a></p>
				<img class="slideImage" alt="img4" src="img/ninja.jpg"/>
			</li>
			<li class="slide">
				<p class="slideCaption"><a href="http://www.pexels.com/photo/eating-animal-carrot-prairie-dog-4245/">Hungry hungry Hippo </a></p>
				<img class="slideImage" alt="img1" src="img/animal.jpg"/>
			</li>
			<li class="slide">
				<p class="slideCaption"><a href="http://www.pexels.com/photo/restaurant-beans-coffee-morning-2065/">Wake up </a></p>
				<img class="slideImage" alt="img5" src="img/coffee.jpg"/>
			</li>
			
		</ul>
	</div>
	<article>
		<h2>Thought behind Simple Slider</h2>
		<div class="codeExemple">
		<p>	There are many, and I mean many, different content sliders. They can have a lot of features and skins
		 	which can make them big, but if you will use these features that might be what you need.
			If you don't need a lot of different settings and want to style it by yourself in CSS Simple Slider might
			be for you. If you can handle CSS, HTML and basic english you can handle this plugin.
		  </p>

		<p>Simple Slider has been developed to be a <span class="eyeCatcher">simple lightweight plugin</span> for users that want to be able to add there own CSS without breaking the plugin. 
		The plugin can be responsive or static depending on the need, or why not static before a media-query break and then be set at a percent, <span class="eyeCatcher">if you can do it in 
		CSS you can do it in this plugin</span>. Simple Slider does not need to only contain images but can contain what ever kind of HTML-element you desire.</p>
		</div>

		<form method="get" action="SimpleSliderExample.zip">
			<button type="sumbit">Download</button>
		</form>
	</article>

	<article class="table">
		<h2>Comparison to other slideshows</h2>
		<div class="codeExemple">
		<p>	Here is a quick comparison to other slideshows out there, I have focused on these components because they are the reason it exists. 
			I have focused on information that is made easy to get for everyone and does not need my opinions.
		</p>
		<table style="width:100%">
		  <tr>
		    <th>Name</th>
		    <th>Size in kB</th>
		    <th>Complexity *</th>
		    <th>Responsive</th>
		    <th>Works without images</th>
		  </tr>
		  <tr>
		    <td>Simple slider</td>
		    <td>7.13</td>
		    <td>5</td>
		    <td>Yes</td>
		    <td>Yes</td>
		  </tr>
		  <tr>
		    <td>Competitor 1</td>
		    <td>52.3</td>
		    <td>81</td>
		    <td>No</td>
		    <td>No</td>
		  </tr>
		  <tr>
		    <td>Competitor 2</td>
		    <td>20.6</td>
		    <td>11</td>
		    <td>Yes</td>
		    <td>Yes</td>
		  </tr>
		  <tr>
		    <td>Competitor 3</td>
		    <td>12.3</td>
		    <td>15</td>
		    <td>Yes</td>
		    <td>No</td>
		  </tr>
		  <tr>
		    <td>Competitor 4</td>
		    <td>4.7</td>
		    <td>7</td>
		    <td>No</td>
		    <td>Yes</td>
		  </tr>
		</table>
		<p> * <a href="http://blogs.msdn.com/b/zainnab/archive/2011/05/17/code-metrics-cyclomatic-complexity.aspx">Cyclomatic complexity number</a> is a number that explains how complex or complicated the code is to understand, the lower value the easier it is.</p>
		</div>
	</article>

	<article>
		<h2>How to get it to your page</h2>
		<div class="codeExemple">
		<p>	To get this plugin to work you first need jQuery connected to your webpage. You also need to connect the provided JS file below the jQuery library. 
			In your HTML body you need the id and classes explaned in the HTML code Example below. And last you need to add <span class="eyeCatcher">$( "#slider" ).simpleSlider();</span> 
			inside of a script tag in the bottom of your body. 
			If this sounds hard take it easy, the zip-file contains an example HTML code on how its structured.
		</p> 
		</div>
	</article>

	<article>
		<h2>HTML code example</h2>
		<div class="codeExemple">
		<p>Here is one basic HTML example, <span class="eyeCatcher">the id slider and the the class names, slides and slide makes the jQuery works</span> but you can add 
		your own classes and other elements to add content and design it as you want. In this example you have a p tag and a image, these are styled with normal CSS.</p> 
		<iframe width="100%" height="205" src="//jsfiddle.net/ninjagrisen/fs58drr4/3/embedded/html" allowfullscreen="allowfullscreen" frameborder="0"></iframe>		</div>
	</article>

	<article>
		<h2>Simple Slider settings</h2>
		<div class="codeExemple">
		<p>If you want to change settings on Simple Slider just open the provided JS file and in the top you will find this object. Here you can set prefered settings as in animation speed or 
		navigation options. </p> 
		<iframe width="100%" height="155" src="//jsfiddle.net/ninjagrisen/fs58drr4/2/embedded/js" allowfullscreen="allowfullscreen" frameborder="0"></iframe>
		</div>
	</article>

</div>

<script>
	$( "#slider" ).simpleSlider();
</script>

</body>
</html>