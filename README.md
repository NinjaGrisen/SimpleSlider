# SimpleSlider
A jQuery plugin slideshow made easy

<h2>Simple Slider</h2>
Simple Slider has been developed to be a simple lightweight plugin for users that want to be able to add there own CSS without breaking the plugin. The plugin can be responsive or static depending on the need, or why not static before a media-query break and then be set at a percent, if you can do it in CSS you can do it in this plugin. Simple Slider does not need to only contain images but can contain what ever kind of HTML-element you desire.</br>
&lt;div id="slider"&gt;</br>
    &lt;div class="slides"&gt;</br>
    &lt;/li class="slide"&gt; &lt;/li&gt; </br>
    &lt;/div&gt;</br>
&lt;/div&gt;</br>

To start the plugin just add:</br>

	$( "#slider" ).simpleSlider();

Sett your personal feel to it in the CSS and change the settings in the JS settings object. 

  var settings = $.extend({ </br>
  
      animationSpeed: 200, 
      animationPause: 5000, 
      nav: 'dot', 
      arrowNav: true, 
      hoverHandler: true 
      
  }, options);
