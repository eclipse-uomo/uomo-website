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

	$pageTitle 		= "UOMo - Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>
<br>
<br>
<br>
<br>
</p>

<h3>Documents</h3>
<p>
<a href="/uomo/documents/uomo-0.6.pdf">UOMo 0.6 Reference</a> (PDF: 471 kB)</p>

<a href="/uomo/documents/EclipseUOMoTutorial.pdf">Eclipse UOMo Tutorial</a> (PDF: 2 MB)</p>

<h3>Presentations</h3>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/oaN7Bu57Ssrs2g" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/how-jsr-385-could-have-saved-the-mars-climate-orbiter-jfokus-2020" title="How JSR 385 could have Saved the Mars Climate Orbiter - JFokus 2020" target="_blank">How JSR 385 could have Saved the Mars Climate Orbiter - JFokus 2020</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/7Vz8LGBtx32w3L" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/how-jsr-385-could-have-saved-the-mars-climate-orbiter-adoptajsr-day" title="How JSR 385 could have Saved the Mars Climate Orbiter - Adopt-a-JSR Day" target="_blank">How JSR 385 could have Saved the Mars Climate Orbiter - Adopt-a-JSR Day</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/CXmgcYpD2OOq2r" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/physikal-using-kotlin-for-clean-energy-kug-munich" title="Physikal - Using Kotlin for Clean Energy - KUG Munich" target="_blank">Physikal - Using Kotlin for Clean Energy - KUG Munich</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/37436238" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="https://de.slideshare.net/keilw/eclipse-democamp-vienna-iot-und-science-wg" title="Eclipse DemoCamp Vienna: IoT, M2M fuer Fitness, Gesundheit und Wissenschaft" target="_blank">Eclipse DemoCamp Vienna: IoT, M2M fuer Fitness, Gesundheit und Wissenschaft</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/27347037" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="https://de.slideshare.net/keilw/m4m-2-the-rescue-of-m2m-nordic-edition" title="M4M 2 the Rescue of M2M (Eclipse DemoCamp Trondheim)" target="_blank">M4M 2 the Rescue of M2M (Eclipse DemoCamp Trondheim)</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/21949160" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://de.slideshare.net/keilw/geecon-2013-standards-for-the-future-of-java-embedded" title="geecon 2013 - Standards for the Future of Java Embedded" target="_blank">geecon 2013 - Standards for the Future of Java Embedded</a> </strong> from <strong><a href="http://de.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<p>
<p>
<a href="documentation2.php">Earlier presentations</a>

<p>All documents are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>