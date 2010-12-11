<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "UOMo - Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All documents are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3>UOMo and Embedded Measurement</h3>
<p><b>Wiki site:</b> <a href="http://wiki.eclipse.org/Eclipse_Embedded_Day_Stuttgart_2010">Eclipse_Embedded_Day_Stuttgart_2010</a><br/>
<b>PDF file: </b><a href="http://wiki.eclipse.org/images/6/6a/UOMo_Embedded2010.pdf">UOMo_Embedded2010.pdf</a> (1.15 MB)</p>

<h3>UOMo UCUM</h3>
<p><b>Conference site:</b> <a href="http://epicenter.ie/2010.html?zone_id=20&mode=agenda&session=143#session">UCUM at epicenter 2010</a><br/>
<div style="width:425px" id="__ss_4619461"><strong style="display:block;margin:12px 0 4px"><a href="http://www.slideshare.net/bebeep66/werner-weil-ucum" title="Werner Weil: UCUM - epicenter 2010">Werner Weil: UCUM - epicenter 2010</a></strong><object id="__sse4619461" width="425" height="355"><param name="movie" value="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=wernerkeilucum-100626032608-phpapp01&stripped_title=werner-weil-ucum&userName=bebeep66" /><param name="allowFullScreen" value="true"/><param name="allowScriptAccess" value="always"/><embed name="__sse4619461" src="http://static.slidesharecdn.com/swf/ssplayer2.swf?doc=wernerkeilucum-100626032608-phpapp01&stripped_title=werner-weil-ucum&userName=bebeep66" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="355"></embed></object><div style="padding:5px 0 12px">View more <a href="http://www.slideshare.net/">presentations</a> from <a href="http://www.slideshare.net/bebeep66">IrishDev.com</a>.</div></div>
<b>PDF file: </b><a href="/uomo/presentations/UOMo_UCUM2010.pdf">UOMo_UCUM2010.pdf</a> (1.16 MB)</p>


<h3>JSR-275 (Background)</h3>
<p>
<b>German Article for Java Magazin: </b><a href="http://ikayzo.org/svn/JSR275/trunk/jsr-275/doc/de/keil_jsr-275.doc">Keil_JSR275.doc</a> (102 kB)</p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>