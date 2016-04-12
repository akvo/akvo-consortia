<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta name="google-site-verification" content="1GAPM79U7Y5Cv6W5gZX1rXwkuxgAPkxZhh4kUiC3-gc" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php elegant_titles(); ?></title>
<?php elegant_description(); ?>
<?php elegant_keywords(); ?>
<?php elegant_canonical(); ?>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/iestyle.css" />
	<![endif]-->
    <!--[if IE 8]>
		<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/ie8style.css" />
	<![endif]-->
<!--[if lt IE 7]>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_directory'); ?>/ie6style.css" />
	<![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="iDivCustomWrapper">
<div id="bg">
<!--	<div id="pages">
		<?php $menuClass = 'nav superfish';
		$primaryNav = '';
		if (function_exists('wp_nav_menu')) {
            if ( is_user_logged_in() ) {
                echo 'LOGGED IN';
                $primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
            } else {
                echo 'NOT LOGGED IN';
                $primaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
            }
		};
		if ($primaryNav == '') { ?>
			<ul class="<?php echo $menuClass; ?>">
				<?php if (get_option('quadro_swap_navbar') == 'false') { ?>
					<?php if (get_option('quadro_home_link') == 'on') { ?>
						<li class="page_item"><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','Quadro') ?></a></li>
					<?php }; ?>

					<?php show_page_menu($menuClass,false,false); ?>
				<?php } else { ?>
					<?php show_categories_menu($menuClass,false); ?>
				<?php } ?>
			</ul>  end ul#nav
		<?php }
		else echo($primaryNav); ?>
	</div>  end #pages -->
	<div style="clear: both;"></div>

	<div id="header">
	    <div id="iDivLogo">
		<a class="cAlogo" href="<?php bloginfo('url'); ?>">
			<?php $logo = (get_option('quadro_logo') <> '') ? get_option('quadro_logo') : get_bloginfo('template_directory').'/images/logo.gif'; ?>
			<img src="<?php echo esc_url($logo); ?>" alt="Logo" class="logo"/> <br style="clear:both;" />
		</a>
	    </div>

	    <div id="iDivSocialNw">
		<?php dynamic_sidebar( 'header' ); ?>
	    </div>
	    <br clear="all"/>

	  <div class="search_bg">
                <div id="search">
                    <form method="get" action="<?php echo home_url(); ?>" style="padding:0px 0px 0px 0px; margin:0px 0px 0px 0px">
    <!--<p id="iPSearch">-->
                        <label id="iLblSearchInfield" for="s">Search...</label>
                        <input type="text" id="s" name="s" value="<?php echo esc_attr( get_search_query() ); ?>"/>
                        <input type="image" class="input" src="/wp-content/themes/f4w/images/search-btn.gif" value="submit"/>
    <!--</p>-->
                    </form>
                </div> <!-- end #search -->
            </div> <!-- end #search-bg -->

	</div> <!-- end #header -->
	<div style="clear: both;"></div>

	<div id="wrapper2">
		<div id="categories">
			<?php $menuClass = 'nav superfish';
			$menuID = 'nav2';
			$secondaryNav = '';
			if (function_exists('wp_nav_menu')) {
				$secondaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'menu_id' => $menuID, 'echo' => false ) );
			};
			if ($secondaryNav == '') { ?>
				<ul id="<?php echo $menuID; ?>" class="<?php echo $menuClass; ?>">
					<?php if (get_option('quadro_swap_navbar') == 'false') { ?>
						<?php show_categories_menu($menuClass,false); ?>
					<?php } else { ?>
						<?php if (get_option('quadro_home_link') == 'on') { ?>
							<li class="page_item"><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','Quadro') ?></a></li>
						<?php }; ?>

						<?php show_page_menu($menuClass,false,false); ?>
					<?php } ?>
				</ul> <!-- end ul#nav -->
			<?php }
			else echo($secondaryNav); ?>
			<div style="clear: both;"></div>
		</div> <!-- end #categories -->

	<div id="pages">
		<?php $menuClass = 'nav superfish';
		$primaryNav = '';
		if (function_exists('wp_nav_menu')) {
			if ( is_user_logged_in() ) {
                $primaryNav = wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
            } else {
                $primaryNav = wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => $menuClass, 'echo' => false ) );
            }
		};
		if ($primaryNav == '') { ?>
			<ul class="<?php echo $menuClass; ?>">
				<?php if (get_option('quadro_swap_navbar') == 'false') { ?>
					<?php if (get_option('quadro_home_link') == 'on') { ?>
						<li class="page_item"><a href="<?php bloginfo('url'); ?>"><?php esc_html_e('Home','Quadro') ?></a></li>
					<?php }; ?>

					<?php show_page_menu($menuClass,false,false); ?>
				<?php } else { ?>
					<?php show_categories_menu($menuClass,false); ?>
				<?php } ?>
			</ul> <!-- end ul#nav-->
		<?php }
		else echo($primaryNav); ?>
	</div> <!-- end #pages -->


<div style="clear: both;"></div>
