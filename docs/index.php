<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Uni Timetable Manager</title>

<meta name="description" content="The University Timetable Manager is free open-source software for automatically findinig an optimal timetable." />
<meta name="keywords" content="university timetable manager UTM Jack Valmadre uni free software program solver optimiser UQ brisbane queensland australia classes lecture tutorials C# C sharp" />

<link rel="stylesheet" href="standard.css" type="text/css" />
<!-- Page-specific style. -->
<style type="text/css">
#quote {
  border-top: 1px dotted #999999;
  border-bottom: 1px dotted #999999;
  padding: 1em 0 1em 0;
}

#quote em {
  font-style: italic;
}

#quote p {
  margin-top: 0;
  margin-bottom: 0;
  text-spacing: 1em;
}

#quote .author {
  line-height: 100%;
}

#quote .source {
  margin-top: 0.5em;
  font-size: 0.7em;
}

.date {
  font-style: italic;
}

.update {
  font-weight: bold;
}
</style>

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
    <div class="linksection"><a href="./">timetable</a></div>
    <ul>
      <li><a href="download/">Download</a></li>
      <li><a href="tutorials/">Tutorials</a></li>
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
    
    <?php list($quote, $author, $publication, $date) = get_random_quote(); ?>
    <div id="quote">
    <p><em>&#8220;<?php echo $quote; ?>&#8221;</em></p>
    <p class="author" align="right">&mdash; <?php echo $author; ?></p>
    <p class="source" align="right">random time quotes from <a href="http://en.wikiquote.org/">wikiquote.org</a></p>
    </div>

    <p>The timetable manager calculates the best possible timetable you can choose this semester. You can select which criteria to optimise against, such as the number of days at uni, the average start time, the total time at uni or even the longest block of consecutive classes. There's also a swish drag-drop interface for making manual adjustments.</p>
    
    <p align="center"><a href="Frontpage.png"><img src="FrontpageMedium.png" width="480" height="459" /></a></p>
    
    <p>I'm finally moving all of my websites/blogs for the Uni Timetable Manager (previously the UQ Timetable Manager) to one place - right here! Hope you don't mind a dose of minimalistic web design.</p>
    
    <h2>News</h2>
    <p><span class="date">7 June 2010 &mdash;</span> Version 2.1 fixes the SI-net bug. I'd like to extend a big thanks to Jeremy Herbert, who patched the problem with the SI-net parser and rewrote the whole importer to be much nicer. Welcome to the dev team! </p>
    <p><span class="date">4 June 2010 &mdash;</span> Recent updates to SI-net have caused the importer to fail. Should have a fix ready by next week. Thanks to everyone who emailed me!</p>
    
    <h2>More Info</h2>
    <p>My name's Jack Valmadre, I'm a mechatronic engineering student at the University of Queensland. This program was my personal project to learn C# in first and second year. The source code currently stands at around 11,000 lines, not including auto-generated code. It is available under the GNU General Public License.</p>
    <p>Feel free to contact me with bugs, suggestions, or any other feedback. Fire an e-mail to <a href="mailto:jack.valmadre@gmail.com">jack.valmadre@gmail.com</a> or track me down at uni.</p>

  </div>
</div>

</body>
</html>

<?php

function get_quotes()
{
  $file = "quotes.csv";
  $fh = fopen($file, 'r');
  $quotes = array();
  while ($line = fgets($fh))
  {
    $details = split("\t", $line);
    $quotes[count($quotes)] = $details;
  }
  return $quotes;
}

function random($max)
{
  return rand() % $max;
}

function get_random_quote()
{
  $quotes = get_quotes();
  $random = random(count($quotes));
  return $quotes[$random];
}

?>
