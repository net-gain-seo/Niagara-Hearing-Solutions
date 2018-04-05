<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <?php if(get_option('modular_wp_favicon') != ''){ echo '<link rel="icon" type="image/png" href="'.get_option('modular_wp_favicon').'">'; } ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>

    <?php if(get_option('modular_wp_header_js') != ''){ echo '<script>'.get_option('modular_wp_header_js').'</script>'; } ?>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body <?php body_class(array('theme_style'.get_option('phonak_theme_style'),'modular-phonak')); ?>>
<?php
/*--- if boxed open wrapper---*/
if(get_option('modular_wp_site_style') == "Boxed"){ echo '<div id="modular_site_wrap">'; }
?>

<header class="header clear" role="banner">
    <section id="headerTop" class="clearfix">
        <div class="container">
	        <div class="row padding0">
            <div class="col col-lg-6" ><a href="http://www.niagaradentureclinic.com/" target="_blank" class="pull-right"><img src="<?php echo get_template_directory_uri(); ?>/images/denture_logo.png" alt="Niagara Denture Clinic"></a></div>
            <div class="col col-lg-6"><a href="<?php echo get_home_url(); ?>" title="Niagara Hearing Solutions Inc" class="pull-left"><img src="<?php echo get_template_directory_uri(); ?>/images/hearing_logo.png" alt="Niagara Hearing Solutions Inc"></a></div>
	        </div>
          <div id="callToAction">
              <?php dynamic_sidebar('call-to-action'); ?>
          </div>
	     </div>
    </section>

    <section id="headerBottom" class="<?php echo get_theme_mod('get_header_style'); ?>">
        <div class="container">
          <nav class="navbar navbar-inverse navbar-toggleable-lg navbar-light" role="navigation">
  					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
  						<span class="navbar-toggler-icon"></span>
  					</button>

  					<div id="mainMenu" class="collapse navbar-collapse">
  						<div class="closen-responsive-nav hide-screen-lg-min" data-toggle="collapse" data-target="#mainMenu">Close X</div>
  						<?php
  						wp_nav_menu(
  							array(
  								'theme_location'    => 'main-menu',
  								'container'         => 'false',
  								'menu_class'        => 'navbar-nav mr-auto',
  								'walker'			=> new bootstrap_Walker(false)
  							)
  						);
  						?>
  					</div>
  			    </nav>
        </div>
    </section>
</header>
<a id="floatingbutton" class="btn pull-left" href="contact-us/">
    Book your free hearing aid trial now
</a>
<a id="floatingbutton" class="btn" href="contact-us/">
    Book Your Free Hearing Test Now
</a>
