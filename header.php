<?php 
/** 
* @package WordPress 
*@subpackage Default_Theme 
*/ 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

  <!--
    Use device width on iPhone, no scaling; maximum-scale keeps things cool on orientation changes. *Referenced Karlstolley.com
  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  
	<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>


	<meta name="author" content="Aaron Samardzich" />
	<meta name="description" content="Website for Aspire Brewing." />
	<link rel=”pingback” href=”<?php bloginfo(‘pingback_url’); ?>” />


	<link rel="stylesheet" href="screen.css" />

	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	


</head>


