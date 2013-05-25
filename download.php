<?php                                                                                                                       require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php");   require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php");  $App    = new App();    $Nav    = new Nav();    $Menu   = new Menu();       include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009, 2013 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Werner Keil
 *******************************************************************************/

    $pageTitle      = "UOMo - Download";

    $html  = <<<EOHTML
<div id="bigbuttons">
</div>

<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3>Eclipse UOMo 0.6 (Incubation)</h3>
<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/0.6/repository/<br/>

<p><b>Repository Archive for Offline installation:&nbsp</b><a href="http://download.eclipse.org/uomo/0.6/eclipse-repository-0.6.0-SNAPSHOT.zip">eclipse-repository-0.6.0-SNAPSHOT.zip</a><br/>

<h3>Eclipse UOMo 0.6 for Kepler (Incubation)</h3>
<p><b>Update site:&nbsp</b> http://download.eclipse.org/uomo/0.6/kepler/repository/<br/>

<!-- h3>Indigo - Eclipse 3.7 (unreleased)</h3>
<p><b>Update site:</b> http://download.eclipse.org/myproject/<br/>
<b>ZIP file: </b><a href="/downloads/download.php?file=/myproject/file.zip">file.zip</a> (10 MiB)</p -->


</div>

<div id="rightcolumn">

  <div>
  <h3>Incubation</h3>
  <center>
    <a href="http://www.eclipse.org/projects/what-is-incubation.php">
      <img src="http://www.eclipse.org/images/egg-incubation.png" border="0" alt="Incubation"/>
    </a>
  </center>
  <p>UOMo is in the <a href="http://www.eclipse.org/projects/dev_process/incubation-phase.php">Incubation Phase</a>.</p>
  </div>
  
</div>

EOHTML;
    # Generate the web page
    $App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>