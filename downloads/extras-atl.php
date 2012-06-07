<?php

$oldrels = array(
	"3.2.0" => array("2011/06/08","http://archive.eclipse.org/mmt/atl/downloads/drops/3.2.0/R201106080518/m2m-atl-Update-3.2.0.zip"),
	"3.1.1" => array("2010/09/14","http://archive.eclipse.org/mmt/atl/downloads/drops/3.1.1/R201009141132/m2m-atl-Update-3.1.1.zip"),
	"3.1.0" => array("2010/06/15","http://archive.eclipse.org/mmt/atl/downloads/drops/3.1.0/R201006150240/m2m-atl-Update-3.1.0.zip"),
	"3.0.2" => array("2010/03/15","http://archive.eclipse.org/mmt/atl/downloads/drops/3.0.2/R201003150627/m2m-atl-Update-3.0.2.zip"),
	"3.0.1" => array("2009/09/22","http://archive.eclipse.org/mmt/atl/downloads/drops/3.0.1/R200909220532/m2m-atl-Update-3.0.1.zip"),
	"3.0.0" => array("2009/06/22","http://archive.eclipse.org/mmt/atl/downloads/drops/3.0.0/R200906220943/m2m-atl-Update-3.0.0.zip"),
	"2.0.2" => array("2008/12/19","http://archive.eclipse.org/mmt/atl/downloads/drops/2.0.2/R200812191010/m2m-atl-Update-2.0.2.zip"),
	"2.0.1" => array("2008/09/17","http://archive.eclipse.org/mmt/atl/downloads/drops/2.0.1/R200809170426/m2m-atl-Update-2.0.1.zip"),
	"2.0.0" => array("2008/06/10","http://archive.eclipse.org/mmt/atl/downloads/drops/2.0.0/R200806101117/m2m-atl-Update-2.0.0.zip")
);

function showNotes()
{
?>
        <div class="homeitem3col">
                <h3>Questions?</h3>
                <p>If you have problems downloading the drops, contact the <a href="mailto:webmaster@eclipse.org">webmaster</a>.</p>
                <p>These are the minimum required downloads for using ATL:</p>
                <ul>
                        <li>To use ATL, you require both the ATL &amp; <a href="/modeling/emf/downloads/?project=emf">EMF</a> Runtimes.</li>
                </ul>
                <p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
        </div>
<?php
}
