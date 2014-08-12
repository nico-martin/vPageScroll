<html lang="en-US">
    <head>
        <title>vPageScroll.js - a simple One Page Scroll JQuery Plugin</title>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="vPageScroll.js is a simple jQuery plugin that initializes a responsive one page layout.">
        <meta name="keywords" content="vPageScroll, jQuery, plugin, one, page, design, scroll, vir2al, websolutions,"/>
        <meta name="title" content="vPageScroll.js - a simple One Page Scroll JQuery Plugin">
        <meta http-equiv="Content-Language" content="en" />
        <meta name="author" content="Nico Martin, nico(at)vir2al.ch"/>

        <link rel="shortcut icon" type="image/x-icon" href="../theme/favicon.ico" />

        <!-- css -->
        <link href="src/css/jquery.vpagescroll.grid.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="src/css/jquery.vpagescroll.styles.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="src/css/jquery.vpagescroll.css" rel="stylesheet" type="text/css" media="screen" />
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    </head>
    <body>
        <div id="navigation"></div>
        <div class="main">
            <section data-title="Home" data-icon="fa-home" data-color="#1abc9c"><div class="container-12">
                <div class="inner">
                    <div class="grid-12">
                        <h1>vPageScroll.js</h1>
                    </div>
                    <div class="grid-6">
                        <h2>About the plugin</h2>
                        <p><b>vPageScroll.js</b> is a simple jQuery plugin that initializes a responsive one page layout. Perfect for your nex one page design</p>
                        <p>It has two main functionalities. At first it resizes your container to the width and height of your browser and centers your content, second it creates a navigation to scroll through your page.</p>
                    </div>
                    <div class="grid-6">
                        <h2>About the author</h2>
                        <p>My name is Nico Martin and I'm an independent web developer from Switzerland. Feel free to <a href="mailto:nico@vir2al.ch">contact me</a> or have a Look at my <a href="http://vir2al.ch" target="_blank">other Projects</a>.</p>
                    </div>
                </div>
                <div style="clear:both"></div>
            </div></section>
            <section data-title="Installation" data-icon="fa-wrench" data-color="#2ecc71"><div class="container-12">
                <div class="inner">
                    <div class="grid-12">
                        <h1>Installation</h1>
                    </div>
                    <div class="grid-12">
                        <p>1. Download or clone the vPageScroll directory from GitHub. Unpack it into an appropriate directory on your web sever.</p>
                        <p>2. Now include the css-files into your head-section:</p>
                        <pre><xmp><head>
    <!-- responsive grid system -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.grid.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- some custom styles for the Demo - can be customized -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.styles.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- important for the functionality -->
    <link href="vpagescroll/src/css/jquery.vpagescroll.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- font-awesome Icons -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head></xmp></pre>
                        <p>3. Next, simply include the JS-files at the end of your footer right before the end of the body:</p>
                        <pre><xmp>
  <!-- js -->
  <script type="text/javascript" src="vpagescroll/src/js/jquery-1.11.1.min.js"></script>
  <script type="text/javascript" src="vpagescroll/src/js/jquery.vpagescroll.js"></script>
  <script type="text/javascript">
  /* initialize */
  </script>
</body></xmp></pre>
                    </div>
                </div>
            </div></section>
            <section data-title="Setup" data-icon="fa-cog" data-color="#3498db"><div class="container-12">
                <div class="inner">
                    <div class="grid-12">
                        <h1>Setup</h1>
                    </div>
                    <div class="grid-6">
                        <h2>Basic html</h2>
<pre><xmp><div id="navigation"></div>
<div id="main">
  <section><div class="container-12">
    <div class="inner">
      <div class="grid-12">...</div>
    </div>
  </div></section>
</div></xmp></pre>
                        <h2>Basic JS</h2>
                        <p>include the following right before the end of the body and after the JS-files</p>
<pre><xmp><script type="text/javascript">
  $(document).ready(function(){
    $(".main").vpagescroll();
  });
</script></xmp></pre>
                    </div>
                    <div class="grid-6">
                        <h2>Advanced html</h2>
<pre><xmp><div id="navigation"></div>
<div id="main">
  <section data-title="Title 1" data-icon="fa-gavel" data-color="#16a085"><div class="container-12">
    <div class="inner">
      <div class="grid-12">...</div>
    </div>
  </div></section>
</div></xmp></pre>
                        <p><b>data-title:</b> Title shown in the navigation<br>
                        <b>data-icon:</b> Icon for the navigation - <a href="http://fontawesome.io/icons/" target="_blank">FontAwesome</a><br>
                        <b>data-color:</b> Container Background-color<br>
                        </p>
                        <h2>Advanced JS</h2>
                        <p>include the following right before the end of the body and after the JS-files</p>
<pre><xmp><script type="text/javascript">
  $(document).ready(function(){
    $(".main").vpagescroll({
      sectionContainer: "section",      //the container
      sectionInner    : ".inner",       //the inner container
      navigation      : "#navigation"   //the navigation container
    });
  });
</script></xmp></pre>
                    </div>
                </div>
            </div></section>
            <section data-title="Grid System" data-icon="fa-table" data-color="#9b59b6"><div class="container-12">
                <div class="inner">
                    <div class="grid-12">
                        <h1>Grid System</h1>
                    </div>
                    <div class="grid-12">
                        <p><b>vPageScroll.js</b> comes with a responsive grid system:</p>
<pre><xmp><div class="inner">
  <div class="grid-6"></div>
  <div class="grid-6"></div>
</div></xmp></pre>
                    </div>
                    <div class="showgrid">
                      <div class="grid-12"><p> grid 12 </p></div>
                      <div class="grid-1"><p> grid 1 </p></div>
                      <div class="grid-11"><p> grid 11 </p></div>
                      <div class="grid-2"><p> grid  2 </p></div>
                      <div class="grid-10"><p> grid 10 </p></div>
                      <div class="grid-3"><p> grid 3 </p></div>
                      <div class="grid-9"><p> grid 9 </p></div>
                      <div class="grid-4"><p> grid 4 </p></div>
                      <div class="grid-8"><p> grid 8 </p></div>
                      <div class="grid-5"><p> grid 5 </p></div>
                      <div class="grid-7"><p> grid 7 </p></div>
                      <div class="grid-6"><p> grid 6 </p></div>
                      <div class="grid-6"><p> grid 6 </p></div>
                    </div>
                </div>
            </div> </section>
            <section data-title="Licence" data-icon="fa-gavel" data-color="#e74c3c"><div class="container-12">
                <div class="inner">
                    <div class="grid-12">
                        <h1>Licence</h1>
                    </div>
                    <div class="grid-12">
                        <p><b>vPageScroll.js</b> is provided under the terms of the <a href="http://www.gnu.org/copyleft/gpl.html" target="_blank">GNU General Public License</a>. That means this plugin is entirely free to use.</p>
                        <p>If you found a bug or if you have some improvements, feel free to <a href="mailto:nico@vir2al.ch">contact me</a>.</p>
                    </div>
                </div>
            </div> </section>
        </div>
        <!-- js -->
        <script type="text/javascript" src="src/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="src/js/jquery.vpagescroll.js"></script>
        <script type="text/javascript">
	    $(document).ready(function(){
             $(".main").vpagescroll();
		});

	</script>
    </body>
</html>