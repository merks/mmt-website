<?php
if (isset($_GET["project"])) {
  if ($_GET["project"] == "atl") {
    header("Location: https://projects.eclipse.org/projects/modeling.mmt.atl/downloads");
    die();
  } else if ($_GET["project"] == "qvtd") {
    header("Location: https://projects.eclipse.org/projects/modeling.mmt.qvtd/downloads");
    die();
  } else if ($_GET["project"] == "qvto") {
    header("Location: https://projects.eclipse.org/projects/modeling.mmt.qvt-oml/downloads");
    die();
  }
}
require_once ($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());

ob_start();

/* config */

/* zips that are allowed to be absent from the downloads page (eg., new ones added mid-stream) */
$extraZips = array();

/* $project => sections/Project Name => (prettyname => filename) */
/* only required if using something other than the default 4; otherwise will be generated */
$dls = array(
	/*"/newProj" => array(
		"Project Name" => array( # same as value in _projectCommon.php's $projects array
			"<acronym title=\"Click to download archived All-In-One p2 Repo Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
			"SDK (Runtime, Source)" => "SDK",
			"Runtime" => "runtime",
			"Examples" => "examples",
			"Automated Tests" => "automated-tests"
		)
	),*/
	"/qvtd" => array(
		"QVT Declarative" => array(
			"<acronym title=\"Archived Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
#			"SDK (Runtime, Source, Examples)" => "SDK",
#			"Runtime" => "runtime",
#			"Examples" => "examples",
#			"Automated-Tests" => "Automated-Tests" # new Athena version
		)
	),
	"/qvto" => array(
		"QVTOML" => array(
			"<acronym title=\"Archived Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
#			"SDK (Runtime, Source, Examples)" => "SDK",
#			"Runtime" => "runtime",
#			"Examples" => "examples",
#			"Automated-Tests" => "Automated-Tests" # new Athena version
		)
	),
	"/atl" => array(
		"ATL" => array(
			"<acronym title=\"Click to download archived All-In-One p2 Repo Update Site\"><img alt=\"Click to download archived All-In-One p2 Repo Update Site\" src=\"/modeling/images/dl-icon-update-zip.gif\"/> <b style=\"color:green\">All-In-One Update Site</b></acronym>" => "Update",
			"SDK (Runtime, Source, Examples)" => "SDK",
			"Runtime" => "runtime",
			"Examples" => "examples",
			"Automated Tests" => "automated-tests"
		)
	)
);

/* list of valid file prefixes for projects who have been renamed; keys have leading / to match $proj */
/* only required if using something other than the default; otherwise will be generated */
$filePre = array(
	/* "/newproj" => array("mmt-newproj"), */
	"/atl" => array("m2m-atl","mmt-atl"),
	"/qvtd" => array("m2m-qvtd","mmt-qvtd","mmt-qvtd-incubation","qvtd","qvtd-incubation"),
	"/qvto" => array("m2m-qvtoml","mmt-qvtoml","mmt-qvto")
);

/* define showNotes(), $oldrels, doLanguagePacks() in extras-$proj.php (or just extras.php for flat projects) if necessary, downloads-common.php will include them */
/* end config */

if ($isBuildServer) { include_once $_SERVER["DOCUMENT_ROOT"] . "/mmt/build/sideitems-common.php"; }
require_once($_SERVER["DOCUMENT_ROOT"] . "/modeling/includes/downloads-common.php");

$html = ob_get_contents();
ob_end_clean();

$trans = array_flip($projects);
$pageTitle = "Eclipse Modeling - MMT - $trans[$projct] - Downloads";
$pageKeywords = ""; // TODO: add something here
$pageAuthor = "";

# Generate the web page
$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="/modeling/includes/downloads.css"/>' . "\n");
$App->AddExtraHtmlHeader('<script src="/modeling/includes/downloads.js" type="text/javascript"></script>' . "\n"); //ie doesn't understand self closing script tags, and won't even try to render the page if you use one
$App->AddExtraHtmlHeader('<link type="application/rss+xml" rel="alternate" title="MMT '.$trans[$projct].' Build Feed" href="http://www.eclipse.org/modeling/download.php?file=/'.$PR.'/feeds/builds-'.$projct.'.xml"/>' . "\n");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);

?>
