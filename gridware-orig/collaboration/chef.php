<?php

// 2004-10-27, robinett: created, copied information from Ecosystem-1.6.ppt, slide 84

$title = "Globus: Grid Software - CHEF/Sakai";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

<h1 class="first">CHEF/Sakai</h1>

<p>
<img src='CHEF-1.jpg' alt='CHEF' style='float: right; margin-left: 0.3em;'>
The CompreHensive collaborativE Framework (CHEF) is a flexible environment for supporting distributed learning and collaborative work. CHEF is rapidly evolving into Sakai, with an emphasis on JSR-168 and localization. CHEF is highly extensible, with support for JetSpeed, Velocity, and other portal interfaces.
</p>

<?
$software = "<a href='http://www.chefproject.org'>CHEF</a><br /><a href='http://www.sakaiproject.org'>Sakai</a>";
$developer = "The CHEF and Sakai Project";
$distros = "Download from chefproject.org";
$contact = "<a href='mailto:ctools@umich.edu'>ctools@umich.edu</a>";

app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../collaboration-components.php"><< Components for Grid Collaboration</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>