<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zachary Hughes Wordpress Theme</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/css/bootstrap.css';?>">
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/jquery-3.2.1.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/bootstrap.js';?>"></script>

    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
</head>

<body>

<div class="container">
    <header>
        <ul class="nav">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_stylesheet_directory_uri().'/assets/me.png'?>" width="125" height="125" style="margin: 10px;">
            </a>
            <li class="nav-item">
                <a class="btn btn-lg nav-link" href="http://localhost:8888/wordpress/about/" role="button">About</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg nav-link" href="http://localhost:8888/wordpress/projects/" role="button">Projects</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-lg nav-link" href="http://localhost:8888/wordpress/resume/"" role="button">Resume</a>
            </li>
        </ul>

    </header>

