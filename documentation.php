<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009, 2013
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
<p>All documents are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<iframe src="http://www.slideshare.net/slideshow/embed_code/21248130" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://de.slideshare.net/keilw/m4m-2-the-rescue-of-m2m" title="M4M 2 the Rescue of M2M" target="_blank">M4M 2 the Rescue of M2M</a> </strong> from <strong><a href="http://de.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/20131503" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://de.slideshare.net/keilw/standards-for-the-future-of-java-embedded-169" title="Standards for the Future of Java Embedded (16:9)" target="_blank">Standards for the Future of Java Embedded (16:9)</a> </strong> from <strong><a href="http://de.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/15329470" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen webkitallowfullscreen mozallowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://www.slideshare.net/keilw/the-eclipse-m2m-iwg-and-standards-for-the-internet-of-things" title="The Eclipse M2M IWG and Standards for the Internet of Things" target="_blank">The Eclipse M2M IWG and Standards for the Internet of Things</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/14605795" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://www.slideshare.net/keilw/standards-for-the-future-of-java-embedded" title="Standards for the Future of Java Embedded" target="_blank">Standards for the Future of Java Embedded</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/14436908" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://www.slideshare.net/keilw/the-ohf-legacy" title="The OHF Legacy" target="_blank">The OHF Legacy</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

<iframe src="http://www.slideshare.net/slideshow/embed_code/13360361" width="597" height="486" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" style="border:1px solid #CCC;border-width:1px 1px 0;margin-bottom:5px" allowfullscreen> </iframe> <div style="margin-bottom:5px"> <strong> <a href="http://www.slideshare.net/keilw/typesafe-dsls" title="Type-safe DSLs" target="_blank">Type-safe DSLs</a> </strong> from <strong><a href="http://www.slideshare.net/keilw" target="_blank">Werner Keil</a></strong> </div>

Also available in <b>German</b>: <a href="http://de.slideshare.net/keilw/typsichere-dsls">Typ-sichere DSLs</a>
<p>
<p>
<a href="documentation2.php">Earlier documentation</a>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>