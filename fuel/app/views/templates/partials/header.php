<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $page_title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo $meta['description']; ?>">
	<meta name="keywords" content="<?php echo $meta['keywords']; ?>">
	<meta name="author" content="<?php echo $meta['author']; ?>">

	<!-- Le styles -->
	<?php echo Asset::css('common.css'); ?>

	<style type="text/css">
		body {
			padding-top:60px;
		}
	</style>

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>