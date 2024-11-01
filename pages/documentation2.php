<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009, 2020
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Werner Keil
 *    
 *******************************************************************************/

	$pageTitle 		= "Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>
<br>
<br>
<br>
<br>
</p>
<p>
<br>
<br>
</p>
<a href="documentation.php">Recent documentation</a>

<h3>Earlier presentations</h3>
<p>

<iframe src="//www.slideshare.net/slideshow/embed_code/37436238" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="https://de.slideshare.net/keilw/eclipse-democamp-vienna-iot-und-science-wg" title="Eclipse DemoCamp Vienna: IoT, M2M fuer Fitness, Gesundheit und Wissenschaft" target="_blank">Eclipse DemoCamp Vienna: IoT, M2M fuer Fitness, Gesundheit und Wissenschaft</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/cHxQM853DOkgWd" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/eclipse-uomo" title="Eclipse UOMo" target="_blank">Eclipse UOMo</a> </strong> von <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<h3>UOMo and Embedded Measurement</h3>
<p><b>Wiki site:</b> <a href="http://wiki.eclipse.org/Eclipse_Embedded_Day_Stuttgart_2010">Eclipse_Embedded_Day_Stuttgart_2010</a><br/>
<b>PDF file: </b><a href="http://wiki.eclipse.org/images/6/6a/UOMo_Embedded2010.pdf">UOMo_Embedded2010.pdf</a> (1.15 MB)</p>

<a href="/uomo/documents/uomo-0.6.pdf">UOMo 0.6 Reference</a> (PDF: 471 kB)</p>

<h3>UOMo UCUM</h3>
<a href="http://www.slideshare.net/bebeep66/werner-weil-ucum" title="Werner Keil: UCUM - epicenter 2010">Werner Keil: UCUM - epicenter 2010</a>

<b>PDF file: </b><a href="/uomo/documents/UOMo_UCUM2010.pdf">UOMo_UCUM2010.pdf</a> (1.16 MB)</p>

<h3>JSR-275 (Background)</h3>
<p>
<b>Specification Public Draft: </b><a href="https://github.com/unitsofmeasurement/jsr-275/raw/master/src/doc/JSR-275.odt">JSR-275.odt</a> OpenDocument (234 kB)</p>

<p>All documents are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>