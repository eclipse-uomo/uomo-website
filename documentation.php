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
<h3>Documents</h3>
<p>

<a href="/uomo/documents/EclipseUOMoTutorial.pdf">Eclipse UOMo Tutorial</a> (PDF: 2 MB)</p>

<h3>Presentations</h3>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/oaN7Bu57Ssrs2g" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/how-jsr-385-could-have-saved-the-mars-climate-orbiter-jfokus-2020" title="How JSR 385 could have Saved the Mars Climate Orbiter - JFokus 2020" target="_blank">How JSR 385 could have Saved the Mars Climate Orbiter - JFokus 2020</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/7Vz8LGBtx32w3L" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/how-jsr-385-could-have-saved-the-mars-climate-orbiter-adoptajsr-day" title="How JSR 385 could have Saved the Mars Climate Orbiter - Adopt-a-JSR Day" target="_blank">How JSR 385 could have Saved the Mars Climate Orbiter - Adopt-a-JSR Day</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/CXmgcYpD2OOq2r" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/physikal-using-kotlin-for-clean-energy-kug-munich" title="Physikal - Using Kotlin for Clean Energy - KUG Munich" target="_blank">Physikal - Using Kotlin for Clean Energy - KUG Munich</a> </strong> from <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/ue1CEO33tUdbKr" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/eclipse-science-f2f-2016-jsr-363" title="Eclipse Science F2F 2016 - JSR 363" target="_blank">Eclipse Science F2F 2016 - JSR 363</a> </strong> von <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/8IXccRx9ZjLgY7" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/the-first-iot-jsr-units-of-measurement-devoxx-be-2015" title="The First IoT JSR: Units of Measurement - DevoXX BE 2015" target="_blank">The First IoT JSR: Units of Measurement - DevoXX BE 2015</a> </strong> von <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/iYEUO8aXITB43e" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/social-media-week-2015-quantified-self" title="Social Media Week 2015 - Quantified Self and the Social Internet of Things" target="_blank">Social Media Week 2015 - Quantified Self and the Social Internet of Things</a> </strong> von <strong><a href="//www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="//www.slideshare.net/slideshow/embed_code/key/wGhQBHi7lX2B5B" width="595" height="485" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="//www.slideshare.net/keilw/jsr-363-the-answer-to-life-science-and-the-internet-of-everything" title="JSR 363 - The Answer to Life Science and the Internet of Everything" target="_blank">JSR 363 - The Answer to Life Science and the Internet of Everything</a> </strong> von <strong><a href="https://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<p>
<p>
<a href="documentation2.php">Earlier presentations</a>

<p>All documents are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>