<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php the_title(); ?> - <?php bloginfo('name'); ?></title>
	<link rel="shortcut icon" type="image/x-icon" href="./assets/images/favicon.ico" />

    <script type="module" crossorigin src="<?= get_template_directory_uri() ?>/assets/app23.js"></script>
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/assets/style.css">

    <?php wp_head(); ?>
</head>
<body>