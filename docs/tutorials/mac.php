<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Tutorials - Uni Timetable Manager</title>

<meta name="description" content="" />
<meta name="keywords" content="" />

<link rel="stylesheet" href="../standard.css" type="text/css" />

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12868615-1']);
  _gaq.push(['_setDomainName', 'valmadre.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>

<div id="container">
  <div id="navlinks">
    <div class="linksection"><a href="../">timetable</a></div>
    <ul>
      <li><a href="../download/">Download</a></li>
      <li><a href="../tutorials/">Tutorials</a></li>
      <li><a href="http://code.google.com/p/unitimetable/source/browse/#svn/trunk/UniTimetable">Source Code</a></li>
      <li><a href="http://code.google.com/p/unitimetable/issues/list">File a Bug</a></li>
    </ul>
    <div class="linksection"><a href="http://jack.valmadre.net/">jack.valmadre.net</a></div>
    <ul>
      <li><a href="http://jack.valmadre.net/blog/">Blog</a></li>
      <li><a href="http://jack.valmadre.net/timetable/">Timetable</a></li>
    </ul>
    <div class="linksection"><a href="http://valmadre.net">valmadre.net</a></div>
    <ul>
      <li><a href="http://jack.valmadre.net/">Jack Valmadre</a></li>
      <li><a href="http://www.artsandframes.com/">Arts and Frames</a></li>
    </ul>
  </div>

  <div id="content">
    <h1>Uni Timetable Manager</h1>
    <h3>Mac OS X Tutorial</h3>
    
    <p>While there's definitely a few teething problems, it is possible to run the timetable manager on Mac OS X using the mono project. You can get mono from <a href="http://www.go-mono.com/mono-downloads/download.html" title="Download mono">the project website</a>. Note that the latest stable version at the time of writing (2.8.2) didn't work with the Uni Timetable Manager. The screenshot below was taken using OS X 10.6.6 (Snow Leopard) and mono 2.6.7.</p>
    <p>To run the program after installing mono, open Terminal and navigate the folder where the Windows .exe file is (&ldquo;cd&rdquo; stands for &ldquo;change directory&rdquo;).</p>
    <pre class="code">$ cd Downloads/UTM_2_1_1/</pre>
    <p>Then simply run</p>
    <pre class="code">$ mono UniTimetable.exe</pre>
    <p>It is normal to see lots of errors and warnings about &ldquo;Invalid device windows&rdquo; and &ldquo;non-7 bit chars.&rdquo;</p>
    <p align="center">
      <a href="Mac.png"><img src="MacSmall.png" alt="Running on Mac OS X using mono." /></a>
    </p>
  </div>
  
</div>

</body>
</html>

