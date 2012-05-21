<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/buildServer-common.php");
require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php"); require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");  require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); $App = new App(); $Nav = new Nav(); $Menu = new Menu(); include($App->getProjectCommon());

$newsgroups = array("MMT (main)" => array("mmt"));
foreach ($projects as $name => $suf) {
	if (!isset($nonewsgroup) || !in_array($suf, $nonewsgroup))
	{
		$newsgroups[$name] = array("mmt.".$suf);
	}
}
#$newsgroups["UML2"][] = "tools.uml2"; /* add old one */
#$newsgroups["XSD"] = array("technology.xsd","tools.emf"); /* override */
#$newsgroups["Papyrus"] = array("papyrus"); /* override */
$newsgroups["ATL"] = array("atl"); /* override */
$newsgroups["QVTd"] = array("qvtd"); /* override */
$newsgroups["QVTo"] = array("qvto"); /* override */

$mailinglists = array("MMT (main)" => array("mmt.dev"));
foreach ($projects as $name => $suf) {
	if (!isset($nomailinglist) || !in_array($suf, $nomailinglist))
	{
		$mailinglists[$name] = array("mmt-".$suf.".dev");
	}
}
#array_unshift($mailinglists["XSD"],"emf-dev"); /* override */

require_once($_SERVER['DOCUMENT_ROOT'] . "/modeling/includes/newsgroup-mailing-list-common.php");

?>