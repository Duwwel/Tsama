<?php
/*
** 12 February 2013
**
** The author disclaims copyright to this source code.  In place of
** a legal notice, here is a quote:
**
** If you’re willing to restrict the flexibility of your approach, 
** you can almost always do something better.
** - John Carmack
**
*************************************************************************/

/*
** An Example Tsama PHP implimentation
**/

require_once("globals.php"); require_once("core".DS."tsama.php");

/*Experimental*/
require_once("core".DS."services".DS."customizer".DS."customizer.inc.php");
require_once("core".DS."services".DS."publisher".DS."publisher.inc.php");

//Create Tsama instance
$tsama = new Tsama();

$customizer = new TsamaCustomizer();
$publisher = new TsamaPublisher();

$tsama->AddObserver('OnLoad',$publisher,"LoadSiteInfo");
$tsama->AddObserver('OnLoad',$customizer,"LoadTheme");
$tsama->AddObserver('OnLoad',$customizer,"LoadLayout");
$tsama->AddObserver('OnRun',$publisher,"LoadContent");

$tsama->Run();

?>