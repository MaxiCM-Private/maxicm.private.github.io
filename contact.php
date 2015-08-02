﻿<!DOCTYPE HTML>
<html>
<head>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <meta charset="utf-8">
    <title>MaxiCM - Contacto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Html5TemplatesDreamweaver.com">
    <link href="scripts/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="scripts/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="scripts/icons/general/stylesheets/general_foundicons.css" media="screen" rel="stylesheet" type="text/css" />  
    <link href="scripts/icons/social/stylesheets/social_foundicons.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="styles/custom.css" rel="stylesheet" type="text/css" />	
	<script src="email/validation.js" type="text/javascript"></script>
</head>
<body id="pageBody">
<div id="divBoxed" class="container">
    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>
    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">					
					<div id="divLogo">
                        <a href="index.html" id="divSiteTitle">MaxiCM Team</a><br/>
                        <a href="index.html" id="divTagLine">Un gran equipo, mejor rom</a>
                    </div>
	            </div>
            </div>   
            <div class="row-fluid">
                <div class="span12">				
                    <div class="centered_menu">                      
                    <!--Edit Navigation Menu here-->
					<div class="navbar">
<button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            Navegaci&oacute;n <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                                <li class="dropdown">
                                    <a href="index.html" class="dropdown-toggle">Inicio</a>
                                </li>								
								<li class="dropdown">
                                    <a href="about.html" class="dropdown-toggle">Acerca de</a>
                                </li>
                                <li class="dropdown">
                                    <a href="" class="dropdown-toggle">Roms<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown">
                                        </li>
                                        <li><a href="janice.html">Janice</a></li>
                                        <li><a href="shakira.html">Shakira</a></li>
                                    </ul>
                                </li>
                                <li class="active"><a href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                    </div>                     
                    </div>
	            </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div id="contentInnerSeparator"></div>
                </div>
            </div>
    </div>
    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="breadcrumbs">
                <a href="index.html">Home</a> &nbsp;/&nbsp; <span>Contacto</span>
            </div>
			<!--Edit Main Content Area here-->
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contacto</h1>
                   	<h3 style="color:#FF6633;"><?php echo $_GET[msg];?></h3>
					<hr>
			<!--Start Contact form -->		                                                
<form name="enq" method="post" action="email/" onsubmit="return validation();">
  <fieldset>
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Name" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Comments"></textarea>
    <div class="actions">
	<input type="submit" value="Send Your Message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	</fieldset>
</form>  				 
			<!--End Contact form -->											 
                </div>
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">
                    <div class="sidebox">
                        <h3 class="sidebox-title">Informacion</h3>
                    <p>
                        <address><strong>MaxiCM, Inc.</strong><br />
                        Ubicaci&oacute;n<br />
                        Costa Rica y Argentina<br />
                        <abbr title="Phone"></abbr></address> 
                        <address>  <strong></strong><br />
                        <a href="mailto:#"></a></address>  
                    </p>     
                    </div>
                </div>
			<!--/End Sidebar Content-->
            </div>
            <!--Edit Footer here-->
			<div id="footerInnerSeparator"></div>
        </div>
    </div>
    <div id="footerOuterSeparator"></div>
    <div id="divFooter" class="footerArea shadow">
        <div class="divPanel">
            <div class="row-fluid">
                <div class="span3" id="footerArea1">
                                      <h3>Contacto Rapido</h3>
                  <ul id="contact-info">
                      <li> <em class="general foundicon-mail icon"></em> <span class="field">Correo XperiAMM:</span> <br>
                        andresmora1676@gmail.com </li>
                      <li>&nbsp;</li>
                      <p>
                      <li> <em class="general foundicon-mail icon"></em> <span class="field">Correo Epirex:</span> <br>
                        estebanguzzo@gmail.com</li>
                      <li>&nbsp;</li>
                      </p>
                      <li> <em class="general foundicon-home icon" style="margin-bottom:50px"></em> <span class="field">Ubicacion:</span> <br>
                        Rohrmoser, Costa Rica
                        Catamarca, Argentina<br>
                      </li>
                  </ul>
                </div>
            </div>
            <div class="row-fluid">
            <div class="span12">
            <p class="copyright"> 
            Copyright © 2011 - 2016 MaxiCM Team. All Rights Reserved.
            </p>
            <div class="social_bookmarks">                    
                <a href="#"><div class="icon_twitter"></div></a>
                <a href="#"><div class="icon_facebook"></div></a>
                <a href="#"><div class="icon_google"></div></a>
                <a href="#"><div class="icon_pinterest"></div></a>                   
            </div>
            </div>
            </div>

        </div>
    </div>
</div>
<br /><br /><br />
<script src="scripts/jquery.min.js" type="text/javascript"></script> 
<script src="scripts/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="scripts/default.js" type="text/javascript"></script>

</body>
</html>