<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zachary Hughes Wordpress Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css';?>">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.2.1.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(). '/js/events.js';?>"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="http://localhost:8888/wordpress/wp-content/uploads/2018/01/favicon.ico" />
</head>

<body>

<div class="container">
    <header>
        <div class="nav">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <p>ZH</p>
            </a>
            <ul class="flex-container list-inline">
                <li class="nav-item list-inline-item">
                    <a class="btn btn-lg nav-link" href="http://localhost:8888/wordpress/about/" role="button">About</a>
                </li>
                <li class="nav-item list-inline-item">
                    <a class="btn btn-lg nav-link" href="http://localhost:8888/wordpress/projects/" role="button">Projects</a>
                </li>
                <li class="nav-item list-inline-item">
                    <a class="btn btn-lg nav-link" target="_blank" href="<?php echo get_stylesheet_directory_uri().'/assets/hughes_zachary_cv.pdf';?>" role="button">Resume</a>
                </li>
            </ul>

        </div>
    </header>

