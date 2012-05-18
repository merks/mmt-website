<?php

	# set default theme
	$_theme = "Nova";
	$theme = "";
	if(isset($_POST['theme'])) {
		$_theme = $_POST['theme'];
	}
	if($_theme != "" && $App->isValidTheme($_theme)) {
		setcookie("theme", $_theme);
		$theme = $_theme;
	}
	else {
		# Get theme from browser, or none default
		$theme = $App->getUserPreferedTheme();
	}

	$Nav->setLinkList(array());
	$branding = <<<EOBRANDING
	<STYLE TYPE="text/css">
	  .sideitem { border-width: 1px 1px; }
	  body { font-size: small; }
	  #midcolumn { margin-top: 5px; }
	</STYLE>

EOBRANDING;
	$Menu->setProjectBranding($branding);

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->addNavSeparator("Modeling", "/modeling/");
	$Nav->addNavSeparator("M2M", "/m2m/");
#	$Nav->addCustomNav("Download", "/m2m/download/", "_self", 1);
#	$Nav->addCustomNav("Documentation", "/m2m/doc/", "_self", 1);
#	$Nav->addCustomNav("Wiki", "http://wiki.eclipse.org/index.php/M2M", "_self", 1);
	$Nav->addCustomNav("About This Project", "/projects/project_summary.php?projectid=modeling.m2m", "_self", 1);
	$Nav->addCustomNav("Components", "/m2m/", "_self", 1);
	$Nav->addCustomNav("Infrastructure", "/m2m/", "_self", 2);
	$Nav->addCustomNav("ATL", "/modeling/m2m/atl/", "_self", 2);
	$Nav->addCustomNav("Operational QVT", "/m2m/", "_self", 2);
	$Nav->addCustomNav("Declarative QVT", "/m2m/", "_self", 2);
?>
