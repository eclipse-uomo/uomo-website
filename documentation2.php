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

<h3>The UOMo Code</h3>
<h4>Chennai JUG Meeting</h4>
<p><a href="http://weblogs.java.net/blog/editor/archive/2010/12/15/chennai-jug-meeting-features-presentation-eclipse-uomo-project">Java.net Article about the JUG Meeting and UOMo</a></p>

<h3>UOMo and Embedded Measurement</h3>
<p><b>Wiki site:</b> <a href="http://wiki.eclipse.org/Eclipse_Embedded_Day_Stuttgart_2010">Eclipse_Embedded_Day_Stuttgart_2010</a><br/>
<b>PDF file: </b><a href="http://wiki.eclipse.org/images/6/6a/UOMo_Embedded2010.pdf">UOMo_Embedded2010.pdf</a> (1.15 MB)</p>

<a href="/uomo/documents/uomo-0.6.pdf">UOMo 0.6 Reference</a> (PDF: 471 kB)</p>

<h3>UOMo UCUM</h3>
<div style="width:425px" id="__ss_4619461"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/bebeep66/werner-weil-ucum" title="Werner Weil: UCUM - epicenter 2010">Werner Weil: UCUM - epicenter 2010</a></strong><object id="__sse4619461" width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=wernerkeilucum-100626032608-phpapp01&stripped_title=werner-weil-ucum&userName=bebeep66" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse4619461" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=wernerkeilucum-100626032608-phpapp01&stripped_title=werner-weil-ucum&userName=bebeep66" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">presentations</a> from <a href="http://www.slideshare.net/bebeep66">IrishDev.com</a>.</div></div>
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