<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Tutorials - Uni Timetable Manager</title>

<meta name="description" content="How to manually manipulate your timetable using the University Timetable Solver." />
<meta name="keywords" content="university timetable manager UTM Jack Valmadre uni free software program solver optimiser UQ brisbane queensland australia classes lecture tutorials C# C sharp" />

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
    <h3>Tutorial 2: Manual Manipulation</h3>
    
    <p>If you click and drag a class on the timetable, you can move it to an alternative time. In the example below, I'll cleverly avoid a two-hour ELEC2004 practical on Friday afternoon. Alternative options can also be viewed by right-clicking the class and looking under <em>Alternative</em>.</p>
    <p align="center">
      <a href="Drag.png"><img src="DragSmall.png" alt="Selecting a different time using drag-drop." /></a>
    </p>
    <p>It's also possible to remove classes by dragging them back into the <em>Remaining</em> box on the right, or by right clicking and selecting Remove. When only some streams are remaining, running the optimiser will not modify the classes already selected. The drag-drop interface can actually be used to interactively plan the whole timetable without using the optimiser, if you prefer.</p>
    <p align="center">
      <a href="Interactive.png"><img src="InteractiveSmall.png" alt="Interactively designing a timetable." /></a>
    </p>
    <p>You can change whether a type of class is included or ignored in the solution by dragging it from one box to the other. The sidebar can be hidden by toggling the <em>Add by Class</em> button in the toolbar, or by clicking the arrow button between it and the timetable.</p>
    <p>Sometimes there are several equivalent streams at the same time, in different rooms or alternating weeks. To find these, right click on the subject and look for <em>Equivalent</em>.</p>
    <p align="center">
      <a href="Equivalent.png"><img src="EquivalentSmall.png" alt="Equivalent streams." /></a>
    </p>
    <p>Finally, right click can be used to fill an empty time slot. Right click and go to <em>Find Class Here</em>.</p>
    <p align="center">
      <a href="FindClassHere.png"><img src="FindClassHereSmall.png" alt="Fill a gap in your life with right click." /></a>
    </p>
    <p>And let's not forget the most important feature of all, colours!! Timetable > Colours will bring up the dialog you're looking for. You can use a predefined colour scheme or pick your own.</p>
    <p align="center">
      <a href="Colours.png"><img src="ColoursSmall.png" alt="A more sombre looking timetable." /></a>
    </p>
    <p>Ready to move on to the <a href="03.php">next tutorial?</a></p>
  </div>
  
</div>

</body>
</html>

