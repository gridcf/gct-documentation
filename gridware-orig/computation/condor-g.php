<?php

// 2004-10-22, robinett: created, copied information from Ecosystem-1.6.ppt, slide 67

$title = "Globus: Grid Software - Condor-G";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../computation-components.php"><< Components for Grid Computation</a></p>

<h1 class="first">Condor-G and DAGman</h1>

<p>
<font color='#FF0000'>[How is Condor-G and DAGman different from Condor?]</font>
</p>

<?
$software = "<a href='http://www.cs.wisc.edu/condor/'>Condor</a>";
$developer = "The Condor Project";
$distros = "NMI-R5<br />Download from the Condor Project";
$contact = "<a href='mailto:condor-users@cs.wisc.edu'>condor-users@cs.wisc.edu</a><br />(must be <a href='http://lists.cs.wisc.edu/mailman/listinfo/condor-users'>subscribed</a> before posting)";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>

<p style="clear: left;"><a href="../computation-components.php"><< Components for Grid Computation</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>