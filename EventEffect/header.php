<!DOCTYPE html>
<html lang="ru">

<head>

	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta property="og:image" content="<?php the_field('preview', 'option'); ?>">

	<?php wp_head(); ?>
</head>

<body>

	<?php get_template_part( 'parts/header' ); ?>


