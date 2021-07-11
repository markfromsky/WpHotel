<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?></title>
	<meta charset = "<?php bloginfo('charset') ?>">
	<meta name = 'viewport' content = 'width=device-width'>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header>
		<h1><a href="<?php echo home_url() ?>"><?php bloginfo('name')?></a></h1>
		<h5><?php bloginfo('description'); ?></h5>
	</header>
	<nav class = 'nav'>
		<?php wp_nav_menu(); ?>
	</nav>
	<hr>
