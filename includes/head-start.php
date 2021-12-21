<?php 
$url   = "http://localhost/harisbenzz_website/";
?>
<!DOCTYPE html>

<html lang="en">
<head>
	<script data-ad-client="ca-pub-2031938804495541" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<base href="<?= $url;?>">
	<title><?php if(isset($pageTitle)){ echo $pageTitle;}else{ echo activePage()==='index'?'Home':ucwords(str_ireplace('-',' ',activePage()));}?> | Harisbenzz International</title>
	<link rel="icon" href="<?= $url;?>images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="<?= $url;?>css/font-awesome.min.css" />
	<link href="<?= $url;?>css/style.css" rel="stylesheet">
	<link href="<?= $url;?>css/custom.css" rel="stylesheet">
	<link href="<?= $url;?>css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="<?= $url;?>fonts/stylesheet.css" />
	<link rel="stylesheet" href="<?= $url;?>css/font-awesome.min.css" /> 
</head>
	
	
	
	
	
	