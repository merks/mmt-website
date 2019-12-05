<?php

$oldrels = array(
	"3.9.2" => "201903130834",
	"3.9.1" => "201812101559",
	"3.9.0" => "201809110720",
	"3.8.0" => "201806120940",
	"3.7.0" => "201706041316",
	"3.6.0" => "201606061156",
	"3.5.0" => "201506031058",
	"3.4.1" => "201502011444",
	"3.4.0" => "201406101621",
	"3.3.0" => "201306110213",
	"3.2.2" => "201301281651",
	"3.2.1" => "201209180827",
	"3.2.0a" => array("2012/08/22", "http://archive.eclipse.org/mmt/qvto/downloads/drops/3.2.0/S201208221524/"),	// explicit URL to show S
	"3.2.0RC3" => array("2012/06/04", "http://archive.eclipse.org/mmt/qvto/downloads/drops/3.2.0/S201206041614/"),	// explicit URL to show S
	"3.1.0" => "201106270651",
	"3.0.1" => array("2010/09/03", "http://archive.eclipse.org/mmt/qvto/downloads/drops/3.0.1/M201009301515/"),	// explicit URL to show M
	"3.0.0" => "201006151231",
	"2.0.1a" => array("2010/01/22", "http://archive.eclipse.org/mmt/qvto/downloads/drops/2.0.1/M201001221708/"),	// explicit URL to show M
	"2.0.1" => "200909011247",
	"2.0.0" => "200906161204",
	"1.0.1" => "200811081449",
	"1.0.0" => "200806110744"
);

function showNotes()
{
?>
        <div class="homeitem3col">
                <h3>Questions?</h3>
                <p>If you have problems downloading the drops, contact the <a href="mailto:webmaster@eclipse.org">webmaster</a>.</p>
                <p>These are the minimum required downloads for using QVTo:</p>
                <ul>
                        <li>To use QVTo, you require both the QVTo &amp; <a href="/modeling/emf/downloads/?project=emf">EMF</a> Runtimes.</li>
                </ul>
                <p>All downloads are provided under the terms and conditions of the <a href="http://www.eclipse.org/legal/epl/notice.html">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
        </div>
<?php
}
