<?php declare( strict_types = 1 );

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php wp_title(); ?></title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php esc_html( site_icon_url() ); ?>" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <h1>Theme success!!</h1>
