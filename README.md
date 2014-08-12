#vPageScroll.js
Created by [Nico Martin](http://vir2al.ch/)

vPageScroll.js is a simple jQuery plugin that initializes a responsive one page layout.

[![vPageScroll](http://www.vir2al.ch/vpagescroll/src/img/demo.jpg "vPageScroll")](http://vir2al.ch/vpagescroll/)

##About the plugin

vPageScroll.js is a simple jQuery plugin that initializes a responsive one page layout. Perfect for your nex one page design

It has two main functionalities. At first it resizes your container to the width and height of your browser and centers your content, second it creates a navigation to scroll through your page.

## Demo
[View demo](http://vir2al.ch/vpagescroll/)

## Installation
1. Download or clone the vPageScroll directory from GitHub. Unpack it into an appropriate directory on your web sever.
2. Now include the css-files into your head-section:
````html
<head>
    <!-- responsive grid system -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.grid.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- some custom styles for the Demo - can be customized -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.styles.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- important for the functionality -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- font-awesome Icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>
````
3. Next, simply include the JS-files at the end of your footer right before the end of the body:
````html
  <!-- js -->
  <script type="text/javascript" src="vpagescroll/src/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="vpagescroll/src/js/jquery.vpagescroll.js"></script>
  <script type="text/javascript">
  /* initialize */
  </script>
</body>
````
##Setup
###Basic html
````html
<div id="navigation"></div>
<div id="main">
  <section><div class="container-12">
    <div class="inner">
      <div class="grid-12">...</div>
    </div>
  </div></section>
</div>
````
###Basic JS

include the following right before the end of the body and after the JS-files
````html
<script type="text/javascript">
  $(document).ready(function(){
    $(".main").vpagescroll();
  });
</script>
````
###Advanced html
````html
<div id="navigation"></div>
<div id="main">
  <section data-title="Title 1" data-icon="fa-gavel" data-color="#16a085"><div class="container-12">
    <div class="inner">
      <div class="grid-12">...</div>
    </div>
  </div></section>
</div>
````
data-title: Title shown in the navigation
data-icon: Icon for the navigation - FontAwesome
data-color: Container Background-color
###Advanced JS

include the following right before the end of the body and after the JS-files
````html
<script type="text/javascript">
  $(document).ready(function(){
    $(".main").vpagescroll({
      sectionContainer: "section",      //the container
      sectionInner    : ".inner",       //the inner container
      navigation      : "#navigation"   //the navigation container
    });
  });
</script>
````
##Grid System
vPageScroll.js comes with a responsive grid system:
````html
<div class="inner">
  <div class="grid-6"></div>
  <div class="grid-6"></div>
</div>
````
[![vPageScroll Grid](http://www.vir2al.ch/vpagescroll/src/img/demo_grid.png "vPageScroll Grid")](http://vir2al.ch/vpagescroll/)

##Licence
vPageScroll.js is provided under the terms of the GNU General Public License. That means this plugin is entirely free to use.

If you found a bug or if you have some improvements, feel free to [contact me](mailto:nico@vir2al.ch).
