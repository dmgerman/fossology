<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
   <link rel="stylesheet" type="text/css" href="project.css" />
   <title>FOSSology</title>
</head>

<body>
<!-- top bar -->
<?php include "topnav.inc"; ?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr><td class="sidebar-width" valign="top">
<!-- Main body-->

<!-- left nav-->
<?php include 'leftnav.inc'; ?>

<!-- gutter -->
<td class="sidebar-gutter-width"></td>

<!-- content area -->
<td colspan="2" valign="top">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">

<!-- Mission Statement -->
      <tr><td colspan=2 align="center" height="30">
        <table border=0 cellpadding=1 cellspacing=0 width="100%" bgcolor="#336699">
          <tr><td valign="top">
            <table cellpadding="5" cellspacing="0" border="0" bgcolor="#cccccc" width="100%">
              <tr><td valign="top" align="center">
	        <strong>FOSSology Mission</strong>
              </td></tr>
            </table>
          </td></tr>
        </table>
      </td></tr>
      <tr><td colspan=2>
        <table cellpadding="10" cellspacing="0">
          <tr><td>
	    <p>
	    <img src="fossology_flowchart.png" align="right" alt="FOSSology system flow chart" />
	    <p>Our mission is to build a community to facilitate the study of Free and Open Source Software by providing free data analysis tools.</p>
          </td></tr>
          <tr><td>
           For a quick look, check out <b><a href=http://fossology.org/docs/videos>these short videos</a></b>
          </td></tr>
        </table>
      </td></tr> <!-- end body right bottom right -->

<!-- Features -->
      <tr><td colspan=2 align="center" height="30">
        <table border=0 cellpadding=1 cellspacing=0 width="100%" bgcolor="#336699">
          <tr><td valign="top">
            <table cellpadding="5" cellspacing="0" border="0" bgcolor="#cccccc" width="100%">
              <tr><td valign="top" align="center">
	        <strong>FOSSology RELEASE: Version 0.6.1</strong>
              </td></tr>
            </table>
          </td></tr>
        </table>
      </td></tr>
      <tr><td colspan=2>
        <table cellpadding="10" cellspacing="0">
          <tr><td>
	    <p>
            New in version 0.6.1:
            <br>  * Tons of bug fixes.
            <br>  * New delagent added to improve UI response time.
            <br>  * Added a check for corrupt bsam file during install.
            <br>  * Tweaks to vacuum and analyze in an effort to eliminate SQL timeouts.
            <br>  * Major debugging of bsam-engine.
	    <p>
	    Future Features - Coming Soon:
	    <br>  Code Re-Use Detection
          </td></tr>
        </table>
      </td></tr> <!-- end body right bottom right -->

    </table>
  </td></tr>	<!-- end body right -->
</table>	<!-- end body -->
<br />

<small>
<center>
<strong>
Copyright &copy; 2007-2008 Hewlett-Packard Development Company, L.P.
</strong>
<br />
<i>
Last updated
<?php include "timestamp"; ?>
</i>
</center>
</small>
</div>
</body>
</html>
