<!doctype html>
<html>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	</head>
	<body <?php body_class(); ?>>
    <header class="container-fluid caldera-site-header">
        <div id="mobile-menu">
            <div class="mobile-menu-top">
                <a class="menu-toggle visible-sm visible-xs pull-left" href="#">
                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                </a>
                <a class="logo" href="<?php echo get_bloginfo( 'url' ); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-round_50x50.png'; ?>" alt="WordPress Learn Caldera" />
                    Caldera Learn
                </a>
            </div>
            <nav>
                <ul>
                    <li class="<?php echo ( is_home() ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/learning-wordpress'; ?>">
                            Learn WordPress
                        </a>
                    </li>
                    <li class="<?php echo ( is_archive( 'download' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/courses'; ?>">
                            WordPress Courses
                        </a>
                    </li>
                    <li class="<?php echo ( is_page( 'about' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/about'; ?>">
                            About
                        </a>
                    </li>
                </ul>
                <div class="social">
                    <a class="twitter" href="https://twitter.com/CalderaLearn" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                </div>
            </nav>
        </div>


        <div class="row">
            <div class="col-sm-12 text-center col-md-3">
                <a class="menu-toggle visible-sm visible-xs pull-left" href="#">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </a>
                <a class="logo" href="<?php echo get_bloginfo( 'url' ); ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/logo-round_50x50.png'; ?>" alt="WordPress Learn Caldera" />
                    Caldera Learn
                </a>
            </div>
            <nav class="col-xs-8 hidden-xs hidden-sm">
                <ul>
                    <li class="<?php echo ( is_home() ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/learning-wordpress'; ?>">
                            Learn WordPress
                        </a>
                    </li>
                    <li class="<?php echo ( is_archive( 'download' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/courses'; ?>">
                            WordPress Courses
                        </a>
                    </li>
                    <li class="<?php echo ( is_page( 'about' ) ) ? 'current-menu-item' : ''; ?>">
                        <a href="<?php echo get_bloginfo('url') . '/about'; ?>">
                            About
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="col-sm-1 social hidden-xs hidden-sm">
                <a class="twitter" href="https://twitter.com/CalderaLearn" target="_blank">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </header>
