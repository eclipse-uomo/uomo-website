<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009, 2023
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
	<h3>Snapshot</h3>
	
	<h4>Eclipse UOMo 1.0 Snapshot (Incubation)</h4>
    <p><b>1. Unit Systems Update Site:&nbsp</b> https://download.eclipse.org/uomo/dependency/uom-systems/2.1b/<br/>
	<p><b>2. UOMo Update site:&nbsp</b> http://download.eclipse.org/uomo/latest/repository/<br/>
	<p><b>&nbsp&nbsp&nbspRepository Archive to install Offline:&nbsp</b><a href="https://download.eclipse.org/uomo/latest/eclipse-repository-1.0.0-SNAPSHOT.zip">eclipse-repository-1.0.0-SNAPSHOT.zip</a><br/>
	</p>
			
	<h3>Stable</h3>
	
	<h4>Eclipse UOMo 0.8 (Incubation)</h4>
	<p><b>1. Unit Systems Update Site:&nbsp</b> https://download.eclipse.org/uomo/dependency/uom-systems/1.3a/<br/>
	<p><b>2. UOMo Update site:&nbsp</b> http://download.eclipse.org/uomo/0.8/repository/<br/>
	<p><b>&nbsp&nbsp&nbspRepository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.8/eclipse-repository-0.8.0.zip">eclipse-repository-0.8.0.zip</a><br/>
	</p>	
	
	<h4>Eclipse UOMo 0.7 (Incubation)</h4>
	<p><b>1. Unit Systems Update Site:&nbsp</b> http://download.eclipse.org/uomo/third-party/repository/<br/>
	<p><b>2. UOMo Update site:&nbsp</b> http://download.eclipse.org/uomo/0.7/repository/<br/>
	<p><b>&nbsp&nbsp&nbspRepository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.7/eclipse-repository-0.7.0.zip">eclipse-repository-0.7.0.zip</a><br/>
	<br/>	
	<p><b>RC2 Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.7/eclipse-repository-0.7.0-RC2.zip">eclipse-repository-0.7.0-RC2.zip</a><br/>
	<p><b>RC1 Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.7/eclipse-repository-0.7.0-RC1.zip">eclipse-repository-0.7.0-RC1.zip</a><br/>
	</p>
	
	
	<h4>Eclipse UOMo 0.6.1 (Incubation)</h4>
	<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/0.6.1/repository/<br/>
	
	<p><b>Repository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.6.1/eclipse-repository-0.6.1.zip">eclipse-repository-0.6.1.zip</a><br/>
	</p>
	
	<h4>Eclipse UOMo 0.6 (Incubation)</h4>
	<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/0.6/repository/<br/>
	<p><b>Repository Archive to install Offline:&nbsp</b><a href="http://download.eclipse.org/uomo/0.6/eclipse-repository-0.6.0.zip">eclipse-repository-0.6.0.zip</a><br/>
		
	<p>
	Use repository archives, if you are behind a <b>firewall</b>, have <b>proxy</b> problems with update sites in your corporate network of face other similar issues.<br/>
	After downloading the archive, select it under "Install New Software" > "Add Repository" > "Archive..." and use as offline repository.
	</p>
		
    <p>
    <p>
    <a href="download2.php">Older downloads</a>
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>