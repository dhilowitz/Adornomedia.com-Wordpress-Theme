<?php
/**
 * @package WordPress
 * @subpackage Adorno_Theme_v1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head profile="http://gmpg.org/xfn/11">
		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>
			<?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?>
		</title>

		<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
		<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php wp_get_archives('type=monthly&format=link'); ?>
		<?php wp_head(); ?>
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>

		<style type="text/css" media="screen">
			@import url( <?php bloginfo('stylesheet_url'); ?> );
		</style>
	</head>

	<body>
		<div id="master" class="container">
			<div id="header" class="row">
				<div id="logo-spacer" class="hidden-xs col-sm-3">&nbsp;</div>
				<div id="logo" class="col-xs-12 col-sm-9">
					<a href="/">
						<img src="http://www.adornomedia.com/wp-content/uploads/2009/06/company_logo_3.png" class="img-responsive" width="470" height="46" align="left">
					</a>
				</div> <!-- /#logo.col-sm-9 -->
			</div> <!-- /#header.row -->
			<div class="row">
				<div id="leftMenu" class="hidden-xs col-sm-3 text-right hidden-print"><?php get_sidebar(); ?></div>
				<div id="mainContent" class="col-xs-12 col-sm-9">
				<!-- end header -->