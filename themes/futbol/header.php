<?php
	global $rdx;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
    <?php wp_head(); ?>
</head>

<body class="tm-isblog">

    <div class="preloader">
        <div class="loader"></div>
    </div>


    <div class="over-wrap">
    	<header>
	        <div class="tm-menu-box">

            <div style="height: 70px;" class="uk-sticky-placeholder">
                <nav style="margin: 0px;" class="tm-navbar uk-navbar" data-uk-sticky="">
                    <div class="uk-container uk-container-center">
                    		<?php if(!empty($rdx['rdx_header__logo']['url'])){?>
                    		
                <a class="tm-logo uk-float-left" href="<?php echo home_url(); ?>">
                    <img src="<?php echo $rdx['rdx_header__logo']['url']; ?>" alt="logo" title="logo"> <span>&nbsp;</span>
                </a>
                       		 <?php } ?>
                       		 
						<?php
						wp_nav_menu( array(
						    'theme_location' => 'header-menu',
						    'menu_class'		=>	'uk-navbar-nav uk-hidden-small',
						) );
						?>
						
                        <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
                    </div>
                </nav>
            </div>

        </div>
		</header>