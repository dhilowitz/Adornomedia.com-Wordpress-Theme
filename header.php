<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_get_archives('type=monthly&format=link'); ?>
	<?php wp_head(); ?>
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="master">
<!--<div id="header"><div id="logo">Adorno<div style="display:inline;width:80px;font-size:20pt;">&nbsp;</div>Media<div id="tm">&#8482</div></div></div>-->
<div id="header"><div id="logo"><a href="/"><img src="http://www.adornomedia.com/wp-content/uploads/2009/06/company_logo_3.png" width="470" height="46"></a></div></div>
<div id="leftMenu"><?php get_sidebar(); ?></div>


<div id="mainContent">
<!-- end header -->