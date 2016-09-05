<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
<title>Download - Uni Timetable Manager</title>

<meta name="description" content="Download the latest version of the University Timetable Manager." />
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
    <h2>Download</h2>

    <ul class="main">
      <li>
        <a href="UTM_2_1_1.zip">Version 2.1.1</a> <em>(Current release)</em>
        <ul class="bullet">
          <li>Adopted regex over hardcoded substrings for parsing session names.</li>
        </ul>
      </li>
      <li>
        <a href="UTM_2_1.zip">Version 2.1</a>
        <ul class="bullet">
          <li>UQ timetable parser rewritten using regular expressions to cope with changes to SI-net format (=&amp;quot; ... &amp;quot; removed from data entries).</li>
        </ul>
      </li>
      <li>
        <a href="UTM_2_0_2.zip">Version 2.0.2</a>
        <ul class="bullet">
          <li>Fixed a bug that caused program to crash when trying to render a timetable outside the range of the preview in the import wizard.</li>
          <li>Added license files README.txt and COPYING.txt.</li>
        </ul>
      </li>
      <li>
        <a href="UTM_2_0_1.zip">Version 2.0.1</a>
        <ul class="bullet">
          <li>Prevented improper string parsing which caused crashes in PHRM1010 timetables.</li>
        </ul>
      </li>
      <li>
        <a href="UTM_2_0.zip">Version 2.0</a>
        <ul class="bullet">
          <li>Added drag-drop, sidebar, toolbar, import wizard.</li>
          <li>Probabilistic-based ordering of solution tree.</li>
          <li>Heap plus heap-sort for identifying best solutions.</li>
        </ul>
      </li>
      <li>
        <a href="UQTM_1_0_2.zip">Version 1.0.2</a>
        <ul class="bullet">
          <li>Fixed file-parsing issues which led to crashes for unexpected line-breaks and also leaving &quot;&amp;quot;&quot;s around stream type names.</li>
        </ul>
      </li>
      <li>
        <a href="UQTM_1_0_1.zip">Version 1.0.1</a>
        <ul class="bullet">
          <li>Solution processor no longer stores all results. This means that more frequent recomputing is required, but prevents it from running out of RAM for a complex timetable.</li>
          <li>Minor fix to avoid integer overflow.</li>
        </ul>
      </li>
      <li>
        <a href="UQTM_1_0.zip">Version 1.0</a>
        <ul class="bullet">
          <li>The first ever release!</li>
        </ul>
      </li>
    </ul>

    <h3>Requirements</h3>
    <p>You need the .NET Framework. I reckon you need at least 2.0, but you may as well <a href="http://www.microsoft.com/downloads/details.aspx?familyid=333325fd-ae52-4e35-b531-508d977d32a6&displaylang=en">go here and get 3.5</a>. If you're running Windows XP Service Pack 3, Windows Vista or Windows 7, you already have a version installed. I'd recommend trying it, if it doesn't work, then download the newer version.</p>
  </div>
</div>

</body>
</html>

