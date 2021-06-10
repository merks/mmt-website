<?php

$oldrels = array(
	"0.23.0" => "202006101844",
	"0.22.0" => "202003090917",
	"0.21.0" => "201912111631",
	"0.20.0" => "201909101018",
	"0.19.0" => "201906050849",
	"0.18.0" => "201903131202",
	"0.17.0" => "201812110908",
	"0.16.0" => "201809110855",
	"0.15.0" => "201806121115",
	"0.14.0" => "201706140228",
	"0.13.0" => "201606071152",
	"0.12.0" => "201506090524",
	"0.11.0" => "201406021254",
	"0.10.0" => "201306081712",
	"0.9.0" => "201206271156",
	"0.8.0" => array("2010/07/10", "http://archive.eclipse.org/mmt/qvtd/downloads/drops/0.8.0/S201007101005/")	// explicit URL to show S
);

function showNotes()
{
?>
        <div class="homeitem3col">
                <h3>Questions?</h3>
                <p>If you have problems downloading the drops, contact the <a href="mailto:webmaster@eclipse.org">webmaster</a>.</p>
                <p>These are the minimum required downloads for using QVTd:</p>
                <ul>
                        <li>To use QVTd, you require both the QVTd &amp; <a href="/modeling/emf/downloads/?project=emf">EMF</a> Runtimes.</li>
                </ul>
                <p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
        </div>
<?php
}
