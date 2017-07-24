<?php

$protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
	$_SESSION['rootdir'] = $rootdir;
	switch($_SERVER['DOCUMENT_ROOT'])
	{
	case  '/'.$_SESSION['rootdir'].'/var/www/sites/sparsatv.in':
			$SITE_NAME						=	'/sparsa/';
			$SITE_ADMIN						=   '/sparsa/admin/';
			$SITE_SHORT_NAME				=	'sparsa.com';
			$APP_FOLDER						=	''; 	
			$ADMIN_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/sparsa/admin/";
			$FRNT_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/sparsa/";

			$APP_PATH 						=	$_SERVER["DOCUMENT_ROOT"]."/sparsa/admin/";
			$ADMIN_APP_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/sparsa/admin/";
			$IMG_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/sparsa/upload/";
			break;
	case  '/'.$_SESSION['rootdir'].'/htmlfivc/public_html/sparsa':
			$SITE_NAME						=	'/';
			$SITE_ADMIN						=   '/admin/';
			$SITE_SHORT_NAME				=	'http://www.sparsa.com/';
			$APP_FOLDER						=	''; 	
			$ADMIN_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/admin/";
			$FRNT_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/";

			$APP_PATH 						=	$_SERVER["DOCUMENT_ROOT"]."/admin/";
			$ADMIN_APP_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/admin/";
			$IMG_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/upload/";
			break;
		
		default:
			$SITE_NAME						=	'/admin/';
			$SITE_ADMIN						=   '/admin/';
			$SITE_SHORT_NAME				=	'sparsatv.in';
			$APP_FOLDER						=	''; 	
			$ADMIN_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/admin/";
			$FRNT_DOMAIN_NAME				=	$protocol."://".$_SERVER['HTTP_HOST']."/";
	
			$APP_PATH 						=	$_SERVER["DOCUMENT_ROOT"]."/admin/";
			$ADMIN_APP_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/admin/";
			$IMG_PATH 				=	$_SERVER["DOCUMENT_ROOT"]."/upload/";
			break;			 
	}
	$IMAGES_PATH					=	$APP_FOLDER	.'images/';
	$STYLES_PATH					=	$APP_FOLDER	.'stylesheet/';
	$DISPLAY_MODELS_PATH			=	$APP_FOLDER .'models/';
	$DISPLAY_CONTROLLERS_PATH		=	$APP_FOLDER .'controllers/';
	
	// $LOCATION	- global array with frequently used paths - to be used in templates 
	global $LOCATION;
	
	$LOCATION['APP_FOLDER'] 				= $APP_FOLDER;
	$LOCATION['APP_PATH'] 					= $APP_PATH;
	$LOCATION['ADMIN_APP_PATH'] 			= $ADMIN_APP_PATH;
	$LOCATION['IMAGES_PATH'] 				= $IMAGES_PATH;
	$LOCATION['STYLES_PATH'] 				= $STYLES_PATH;
	$LOCATION['DISPLAY_MODELS_PATH'] 		= $DISPLAY_MODELS_PATH;
	$LOCATION['DISPLAY_CONTROLLERS_PATH'] 	= $DISPLAY_CONTROLLERS_PATH;
	$LOCATION['ADMIN_DOMAIN_NAME']			= $ADMIN_DOMAIN_NAME;
	
	$LOCATION['FRNT_DOMAIN_NAME']			= $FRNT_DOMAIN_NAME;

	$LOCATION['SITE_NAME']					= $SITE_NAME;
	$LOCATION['SITE_ADMIN']					= $SITE_ADMIN;
	$LOCATION['SITE_SHORT_NAME']			= $SITE_SHORT_NAME;
	$LOCATION['SITE_IMG_PATH']			= $IMG_PATH;

	
	$_SESSION['SITE_NAME']					= $LOCATION['SITE_NAME'];
	$_SESSION['SITE_ADMIN']					= $LOCATION['SITE_ADMIN']; 
	$_SESSION['APP_PATH']					= $LOCATION['APP_PATH']; 
	$_SESSION['ADMIN_DOMAIN_NAME']			= $LOCATION['ADMIN_DOMAIN_NAME'];
	$_SESSION['SITE_IMG_PATH']			= $LOCATION['SITE_IMG_PATH'];
	
	$_SESSION['FRNT_DOMAIN_NAME']			= $LOCATION['FRNT_DOMAIN_NAME'];
	
	$_SESSION['ADMIN_APP_PATH']			= $LOCATION['ADMIN_APP_PATH'];
	$_SESSION['EMAILLINK'] = $EMAILLINK;
	
	//echo $_SESSION['SITE_IMG_PATH'];die();
		
	require_once($LOCATION['DISPLAY_MODELS_PATH'].'db.php');
	$db = new Connection();
?>
