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
    <h3>Linux Tutorial</h3>
    
    <p>Here's a quick guide for how to run the program on Linux using mono, the .NET project for Unix-based systems. It's not perfect: the drag-drop cursor disappears and something causes it to render the wrong size. I'll try and work out what causes this! The screenshot below was taking running mono version 2.4.2.3 on Ubuntu 9.10.</p>
    <pre class="code">$ sudo apt-get install mono-runtime
$ mono UniTimetable.exe</pre>
    <p align="center">
      <a href="Ubuntu.png"><img src="UbuntuSmall.png" alt="Running on Ubuntu using mono." /></a>
    </p>
  </div>
  
</div>

</body>
</html>

