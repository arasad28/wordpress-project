<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php bloginfo('name'); ?></title>
 








   



	<link rel=" icon" href="<?php echo get_template_directory_uri();  ?>   /img/favicon.png" type="image/png">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri();  ?> /img/favicon.ico" >
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<ul id="social">
	<li><a href="fb.com/asad.realboy"><img src="<?php echo get_template_directory_uri();  ?> /img/facebook.png" alt="img"></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri(); ?> /img/gplus.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?> /img/linkedin.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?> /img/youtube.png" alt=""></a></li>
	<li><a href="#"><img src="<?php echo get_template_directory_uri();  ?> /img/twitter.png" alt=""></a></li>
</ul>






	<div class="main_wrap header_bg">
<div class="wrap">
	<header>
	<div id="header">
		<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
		<p><?php bloginfo('description') ?></p>
	</div>
</header>
</div>

</div>
