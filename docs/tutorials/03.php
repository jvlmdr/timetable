<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Tutorials - Uni Timetable Manager</title>

<meta name="description" content="Advanced functionality of the University Timetable Manager." />
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
    <h3>Tutorial 3: Advanced Optimisation</h3>
    
    <p>You can fine-tune the optimiser's criteria to your personal preference. Click <em>Edit Criteria</em> in the main toolbar, or from within the <em>Find Solutions</em> window. Two default configurations are supplied: the default (minimise days at uni, make the earliest start of the week as late as possible, reduce total time at uni, keep the longest break short, etc) and a special option for avoiding early mornings.</p>
    <p align="center">
      <a href="Criteria.png"><img src="CriteriaSmall.png" alt="Edit optimiser criteria." /></a>
    </p>
    <p>You can add, remove, edit and reorder the criteria fields. If you think you've come up with a good combination, let me know and I'll include it in the next release.</p>
    <p>Filters allow you to tell the optimiser to ignore some solutions. For example, you might want to skip all solutions with more than 30 hours of contact time. Filters aren't used very often.</p>
    <p>Another useful feature for the optimiser is the ability to set <em>unavailabilities</em>. Right-click in a whitespace and specify <em>Unavilable here</em>. For the timetable below, I'll try and fit my subjects around tutoring in the morning and some time off on Friday arvo.</p>
    <p align="center">
      <a href="Unavailable.png"><img src="UnavailableSmall.png" alt="Insert unavailibities." /></a>
    </p>
    <p align="center">
      <a href="UnavailableSolved.png"><img src="UnavailableSolvedSmall.png" alt="The optimiser finds only solutions that fit." /></a>
    </p>
    <p>That about does it. Congrats, you can now take advantage of most of the features in the Uni Timetable Manager.</p>
  </div>
  
</div>

</body>
</html>

