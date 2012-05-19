<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#*****************************************************************************
	# 
	# Author: 		Freddy Allilaire
	# Date:			2007-01-11
	#
	#****************************************************************************
	
	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Model To Model Transformation (MMT)";
	$pageKeywords	= "MMT, Model transformation, Model, Transformation, MDE, MDD, MDA, Modeling";
	$pageAuthor		= "Freddy Allilaire";
	 
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	include('news/scripts/news.php');
	$mmtnews = get_mmtnews(5);
		
	# Paste your HTML content between the EOHTML markers!	
	$html = <<<EOHTML

	<!-- Middle part -->
	<div id="midcolumn">
		<table width="100%">
			<tr>
				<td width="80%">
					<h1>$pageTitle</h1>
					<p align="JUSTIFY">
						Model-to-Model Transformation is a key aspect of Model-Driven Development (MDD).
					</p>
					<p align="JUSTIFY">
						The MMT project hosts Model-to-Model Transformation languages. 
						Transformations are executed by transformation engines that are plugged into the Eclipse Modeling infrastructure.
						MMT is a subproject of the top-level <a href="http://www.eclipse.org/modeling/">Eclipse Modeling Project</a>.
					</p>
					<p align="JUSTIFY">
						The MMT transformation projects and languages are:
						<ul>
							<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=modeling.mmt.atl">ATL Transformation Language</a></li>
							<ul>
								<li>ATL</li>
							</ul>
							<li><a href="http://www.eclipse.org/projects/project.php?id=modeling.mmt.qvt-relations">QVTd (Declarative)</a></li>
							<ul>
								<li>QVTc (Core)</li>
								<li>QVTr (Relational)</li>
							</ul>
							<li><a href="http://www.eclipse.org/projects/project_summary.php?projectid=modeling.mmt.qvt-oml">QVT Operational (Procedural)</a></li>
							<ul>
								<li>QVTo (Operational)</li>
							</ul>
						</ul>
						Other Eclipse Model-to-Model Transformation projects are:
						<ul>
							<li><a href="http://www.eclipse.org/projects/project.php?id=modeling.emft.epsilon">Epsilon</a></li>
							<li><a href="http://www.eclipse.org/projects/project.php?id=modeling.gmt.viatra2">Viatra2</a></li>
							<li>Xtend2</li>
						</ul>
					</p>
		  		</td>
			</tr>
		</table>
		
		<hr/>
		
		<div class="homeitem">
			<h3>Quick links</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="http://www.eclipse.org/mmt/downloads/index.php">Downloads</a></b>
		  					</td>
							<td align="right">
								<a href="http://www.eclipse.org/mmt/downloads/index.php">
								<img align="right" src="resources/images/download.gif" /></a>
							</td>
						</tr>
					</table>
				</li>

				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<b><a href="doc/">Documentation</a></b>,
								<a href="http://wiki.eclipse.org/index.php/MMT">Wiki</a>
		  					</td>
							<td align="right">
								<a href="doc/">
								<img align="right" src="resources/images/reference.gif" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
	                <a href="news://news.eclipse.org/eclipse.mmt"> users newsgroup:</a> users discussions and support
					<a href="http://dev.eclipse.org/newslists/news.eclipse.mmt/maillist.html">[archive]</a>
		            <a href="http://www.eclipse.org/search/search.cgi?form=extended&ul=%2Fnewslists%2Fnews.eclipse.mmt&t=5">[search]</a>
		            <a href="http://www.eclipse.org/newsportal/thread.php?group=eclipse.mmt">[web interface]</a>
				</li>
				<li>
	                <a href="http://dev.eclipse.org/mailman/listinfo/mmt-dev">mmt-dev@eclipse.org:</a> developer discussions
					<a href="http://dev.eclipse.org/mhonarc/lists/mmt-dev/maillist.html">[archive]</a>
	                <br>m2m-dev@eclipse.org: old developer discussions
					<a href="http://dev.eclipse.org/mhonarc/lists/m2m-dev/maillist.html">[archive]</a>
				</li>
				<li>
					<a href="http://dev.eclipse.org/viewcvs/index.cgi/org.eclipse.m2m/?root=Modeling_Project">MMT CVS</a>
   				</li>
			</ul>
		</div>

		<div class="homeitem">
			<h3>MMT components</h3>
			<ul>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<a href="http://www.eclipse.org/projects/what-is-incubation.php">
									<img src="/modeling/images/egg-icon.png" alt="Validation (Incubation) Phase"/>
								</a>
				                <b>Infrastructure</b>
		  					</td>
							<td align="right">
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				                <b><a href="atl/">ATL</a></b>:
   				                <a href="atl/usecases/">Use Cases</a>,
				                <a href="atl/atlTransformations/">ATL Transformations</a>,
				                <a href="atl/doc/">Documentation</a>,
				                <a href="atl/download/">Download</a>
		  					</td>
							<td align="right">
								<a href="atl/"><img align="right" src="atl/resources/atlLogoSmall.png" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
				                <b>Operational QVT</b>:
				                <a href="http://wiki.eclipse.org/M2M/Operational_QVT_Language_%28QVTO%29">Wiki</a>,
				                <a href="qvto/doc">Documentation</a>,
				                <br>
				                <!--  <i><a href="http://download.eclipse.org/modeling/m2m/qvto/downloads/index.php">Archive of Regular Builds</a></i>, -->
				                <a href="http://www.eclipse.org/modeling/m2m/downloads/index.php?project=qvtoml">Download</a>
		  					</td>
							<td align="right">
								<a href="http://wiki.eclipse.org/M2M/Operational_QVT_Language_%28QVTO%29"><img align="right" src="qvto/QVTo.PNG" /></a>
							</td>
						</tr>
					</table>
				</li>
				<li>
					<table width="100%">
						<tr>
							<td width="80%" valign="bottom">
								<a href="http://www.eclipse.org/projects/what-is-incubation.php">
									<img src="/modeling/images/egg-icon.png" alt="Validation (Incubation) Phase"/>
								</a>
				                <b>Declarative QVT</b>:
				                <a href="http://wiki.eclipse.org/MT/QVTd">Wiki</a>
		  					</td>
							<td align="right">
							</td>
						</tr>
					</table>
				</li>
			</ul>
		</div>
		<hr class="clearer" />
	</div>

	<!-- Right Part -->
	<div id="rightcolumn">
<!--
		<div class="sideitem">
			<h6>Getting Started</h6>
			<ul>
				<li><a href="doc/">Documentation</a></li>
				<li><a href="download/">Download</a></li>
				<li><a href="http://wiki.eclipse.org/index.php/M2M">Wiki</a></li>
			</ul>
		</div>
-->
		<div class="sideitem">
			$mmtnews
		</div>
	
		<div class="sideitem">
			<h6>Incubation</h6>
			<p>Some components are currently in their <a href="http://www.eclipse.org/projects/dev_process/validation-phase.php">Validation (Incubation) Phase</a>.</p> 
			<div align="center"><a href="http://www.eclipse.org/projects/what-is-incubation.php">
				<img align="center" src="http://www.eclipse.org/images/egg-incubation.png" border="0" /></a>
			</div>
		</div>

<!--
		<div class="sideitem">
			<h6>Select your theme.</h6>
			<form method="post">
				<input type="radio" name="theme" value="Phoenix" /> Phoenix<br />
				<input type="radio" name="theme" value="Miasma" /> Miasma<br />
				<input type="radio" name="theme" value="Industrial" /> Industrial<br />
				<input type="radio" name="theme" value="Blue" /> Blue<br />
				<input type="radio" name="theme" value="Lazarus" /> Lazarus<br />
				<input type="submit" value="Set" />
			</form>
		</div>
-->
	</div>

EOHTML;


	# Generate the web page
	$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='MMT News' href='news/mmtNewsArchive.rss'>");
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
