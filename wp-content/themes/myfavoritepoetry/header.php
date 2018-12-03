<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <!-- Estilos -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">


    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="general">
        <div class="nav  hidden-xs col-lg-2">

            <div class="logo panel affix">


                <div class="site-branding">

                </div>

                <div class="social-icons">
                    <span class="fas fa-home fa-lg"></span>
                    <span class="fab fa-facebook-f fa-lg"></span>
                    <span class="fab fa-twitter fa-lg"></span>
                    <span class="fab fa-instagram fa-lg"></span>
                    <span class="fab fa-youtube fa-lg"></span>

                </div>

                <div class="menu">
                    <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>

                <div class="logo-image">
                    <img src="http://dev.myblog.com.br/wp-content/uploads/2018/02/pausas-e-versos.png" class="img-responsive" />
                </div>
            </div>

        </div>
</header>

<div class="content col-sm-10 col-md-10 col-xs-12 col-lg-10">
    <?php if ( is_home() && is_front_page() ) : ?>
    <div class="main-banner row">
        <figure>
            <img src="http://dev.myblog.com.br/wp-content/uploads/2017/10/clark-young-160446-1.jpg" class="img-responsive" />
            <figcaption>
                <p>
                    Um verso que abrace
                    todos os homens
                    e que beije ardentemente
                    cada discordância causada
                    <br>
                    <em> -- LS Martins</em>
                </p>
            </figcaption>
        </figure>
    </div>
<?php endif; ?>