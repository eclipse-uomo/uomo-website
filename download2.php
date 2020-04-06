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

	$pageTitle 		= "Download";

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
<a href="download.php">Recent downloads</a>
		
	<h3>Older Versions</h3>
	
	<h4>UOMo 0.7 for Kepler (Eclipse 4.3)</h4>
	<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/kepler/0.7/repository/<br/>
	<p><b>Repository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/kepler/0.7/eclipse-repository-0.7.0-SNAPSHOT.zip">eclipse-repository-0.7.0-SNAPSHOT.zip</a><br/>
	</p>
	
	<h4>UOMo 0.6 for Kepler (Eclipse 4.3)</h4>
	<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/kepler/0.6/repository/<br/>
	
	<p><b>Repository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/kepler/0.6/eclipse-repository-0.6.0.zip">eclipse-repository-0.6.0.zip</a><br/>
	</p>

</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>