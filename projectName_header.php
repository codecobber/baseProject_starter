<?php

define('SITEROOT','/CraigsResources/BASE/');
define('SEO',$_SERVER['DOCUMENT_ROOT'] . '/Resources/BASE/includes/seo.php');
//echo $_SERVER['DOCUMENT_ROOT'];

?>
<!DOCTYPE html>
<html class="no-js" lang="en" >
	<head>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- META and SEO data-->

	     <?php
	     include_once(SEO);
	     ?>

		  <title><?php echo $title; ?></title>


	<!-- CSS & Javascript-->

		  <link rel="stylesheet" href="<?php echo SITEROOT.'css/foundation.min.css';?>">
	 	  <link rel="stylesheet" media="screen" type="text/css" href="<?php echo SITEROOT.'css/fonts.css';?>" />



		 <link rel="stylesheet" href="<?php echo SITEROOT.'css/default/default.css'; ?>" type="text/css" media="screen" />
	 	 <link href="<?php echo SITEROOT.'css/my.css'; ?>" rel="stylesheet" type="text/css" media="all">
		 <link rel="stylesheet" type="text/css" href="<?php echo SITEROOT.'css/jquery.cookiebar.css'; ?>" />



	<!-- Slider Demo CSS -->
		<link rel="stylesheet" href="<?php echo SITEROOT.'css/flexslider.css'; ?>" type="text/css" media="screen" />


	<!-- JS * You don't need to separately include html5shiv, because Modernizr includes it: -->
		  <script type="text/javascript" src="<?php echo SITEROOT.'js/vendor/modernizr.js'; ?>"></script><!-- required by zurb -->
		  <script type="text/javascript" src="<?php echo SITEROOT.'js/vendor/jquery.js'; ?>"></script>
	     <script type="text/javascript" src="<?php echo SITEROOT.'js/library.js'; ?>"></script><!-- used for the form counter -->

	     <script type="text/javascript" src="<?php echo SITEROOT.'js/jquery.backstretch.js'; ?>"></script>


	    <meta name="description" content="<?php echo $description?>" />
	    <meta name="keywords" lang="en" content="<?php echo $keywords?>" />
	    <meta name="robots" content="all,index,follow" />
	    <meta name="googlebot" content="all,index,follow" />
	 


	<!-- Facebook og settings -->
	    <meta property="og:title" content="<?php echo $title; ?>" />
	    <meta property="og:url" content="http://www.projectName.co.uk" />
	    <meta property="og:image" content="http://www.projectName.co.uk/images/logo.png" />
	    <meta property="og:type" content="company" />

	    <link rel="canonical" href="http://www.projectName.co.uk/" />



	<!-- Google web fonts -->
	    <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>

    <!-- Font Awesome -->
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


	<!-- Google plus code -->


	<!-- ICONS -->
	    <link rel="canonical" href="http://www.projectName.co.uk/" >

      	    <link rel="shortcut icon" type="image/x-icon" href="<?php echo SITEROOT.'img/favicon.ico';?>" >
	    <link rel="icon" type="image/png" href="<?php echo SITEROOT.'img/favicon.png'; ?>" >


	<!-- Google Analytics -->



	<!-- twitter code -->






	    	 <?php
	    	 	include_once($_SERVER['DOCUMENT_ROOT'] . '/WWW_projects/projectName/includes/whatPage.php');
			 ?>

	    	<link rel="stylesheet" href="<?php echo SITEROOT.'css/font-awesome/css/font-awesome.min.css'; ?>">

	</head>

<body>


<!-- Navigation -->


<?php
 $pageCheck = basename($_SERVER['SCRIPT_FILENAME'],".php");


if($pageCheck == "index"){
 include("includes/rotate.php");
}
?>
