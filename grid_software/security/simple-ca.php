<?php

// 2004-10-18, robinett: created, copied information from www.globus.org/gridware/security/voms.html

$title = "Grid Ecosystem - Simple CA";
$section = "section-4";
include_once( "../../include/local.inc" );
include_once( $SITE_PATHS["SERV_INC"].'header.inc' ); 
include_once($SITE_PATHS["SERV_INC"] . "app-info.inc");
?>
<!--
<div id="left">
<?php include($SITE_PATHS["SERV_INC"].'software.inc'); ?>
</div>
-->

<div id="main">


<h1 class="first">Simple CA</h1>

<p>
The Globus Simple CA package provides a convenient method of setting up a certificate authority (CA).  The Certificate Authority can then be used to issue certificates for users and services that work with GSI and WS-Security. Simple CA is intended for operators of small Grid testing environments and users who are not part of a larger Grid.
</p>

<p>
Most production Grids will not accept certificates that are not signed by a well-known CA, so the certificates generated by Simple CA will usually not be sufficient to gain access to production services.
</p>

<p>
<strong>Related solutions:</strong> Simple CA is one of the components that makes up the 
<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]."purse/"; ?>">PURSE</a> (Portal-based User 
Registration Service) solution.  See the 
<a href="<?=$SITE_PATHS["WEB_SOLUTIONS"]; ?>">Solutions</a> section for more information.
</p>

<?
$software = "<a href='http://www.globus.org/security/simple-ca.html'>Simple CA</a>";
$developer = "<a href='http://www.globus.org/'>The Globus Alliance</a>";
$distros = "<a href='http://www-unix.globus.org/toolkit/'>Globus Toolkit 3.2</a><br />
            <a href='http://collab.nsf-middleware.org/Lists/NMIR6/AllItems.aspx'>NMI-R6</a>";
$contact = "<a href='mailto:info@globus.org'>info@globus.org</a>";

// use the function below once problem is discovered, remove the two lines above
app_info($software, $developer, $distros, $contact);

?>

<p></p>


</div>

<?

include($SITE_PATHS["SERV_INC"].'footer.inc');

?>
