<?php

// 2004-10-20, robinett: created, copied information from www.globus.org/gridware/monitoring/big-brother.html

$title = "Grid Ecosystem - ESG Monitoring System";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>

<div id="main">

<p><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

<h1 class="first">ESG Montoring System</h1>

<p>
<img border="0" src="ESGMon-1.jpg" style="float: right; margin-left: 0.3em;">
The Earth System Grid is a distributed system that collects and manages large quantities of climate data generated by simulation software.  The resulting datasets are made available for download by climate scientists via an easy-to-use Web interface.
</p>

<p>
In order to ensure that the distributed services that comprise the Earth System Grid remain available as much of the time as possible, a variety of tools are employed to monitor the services, to sound alarms if services fail, and to archive the system status data for later analysis. These tools are specifically used to monitor the current status and history of the Grid's Replica Location Services, OGSA-DAI data access services, and Web Portal services
</p>

<p>
The ESG monitoring tools are based on the Globus Toolkit's Index Service with the following additions.
</p>

<p>
<ul>
<li>Archiver Service</li>
<li>Trigger Service</li>
<li>Web-based Service Data Viewer</li>
<li>Email alerts</li>
<li>Python test scripts</li>
</ul>
</p>

<p>Although these tools were developed for the Earth System Grid, they are generalized and flexible and can be reused easily in other Grid applications.
</p>

<?
$software = "Earth System Grid Monitoring Tools";
$developer = "<a href='http://www.earthsystemgrid.org/'>Earth System Grid II Project</a>";
$distros = "This software is not yet part of any known distribution, but it can be made available on request.";
$contact = "<a href='mailto:esg-manage@earthsystemgrid.org'>esg-manage@earthsystemgrid.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p style="clear: left;"><a href="../monitoring-components.php"><< Components for Grid Monitoring and Discovery</a></p>

</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
