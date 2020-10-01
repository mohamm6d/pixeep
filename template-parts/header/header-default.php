<?php
/**
 *
 * Header Default Layout
 *
 * @author      CodeGearThemes
 * @category    WordPress
 * @package     pixeep
 * @version     1.0.0
 *
 */
?>
<small class="top-bar">30% discount FOR YOUR FIRST ORDER + FREE SHIPPING. Use this code <b> FIRST30</b></small>
<div class="container">
<div class="header--default navbar navbar-sticky navbar-ghost">
	<div class="header-inner">
		<div class="row">
			<div class="col-md-3 free-shipping-bar">
            <form method="get" action="/">
    <input type="text" name="s" placeholder="Search here ...">
        <button><img src="<?php echo get_stylesheet_directory_uri().'/assets/src/search-icon.svg'; ?>"></button>
    </form>    
            </div>
			<div class="col-md-6 col-sm-12 col-xs-12">
				<?php $pixeep_description = get_bloginfo( 'description', 'display' ); ?>
				<div class="text-center site-branding">
			 		 <?php
			 		 the_custom_logo();
			 		 if ( is_front_page() || is_home() ) : ?>
			 		   <h1 class="site-title <?php if( ! $pixeep_description ){ echo 'no-tagline'; } ?>">
			 			 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr( bloginfo( 'name' ) ); ?></a>
			 		   </h1>
			 		 <?php
			 		 else : ?>
			 		   <div class="site-title <?php if( ! $pixeep_description ){ echo 'no-tagline'; } ?>">
			 			 <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php esc_attr( bloginfo( 'name' ) ); ?></a>
			 		   </div>
			 		 <?php
			 		 endif;
			 		 if ( $pixeep_description || is_customize_preview() ) :
			 		   ?>
			 		   <p class="site-description"><?php echo $pixeep_description; /* WPCS: xss ok. */ ?></p>
			 		 <?php endif; ?>
			 	</div><!-- .site-branding -->
			</div>
			<div class="col-md-3 col-sm-12 col-xs-12">
				<div class="header-navigation">
					<!-- #site-navigation -->
					<?php
					   /**
						* Hook: Functions hooked into pixeep_navigation action
						*
						*  @hooked pixeep_woocommerce_header_cart                  - 10
						*/
						do_action( 'pixeep_navigation' );
					?>
				</div>
			</div>
			</div>
			
		
	</div>
</div>
</div>
<!---<div class="nav-menu-header">
<div class="container">
			<nav id="site-navigation" class="main-navigation">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar middle"></span>
							<span class="icon-bar"></span>
							<small class="sr-only"><?php esc_html_e( 'Primary Menu', 'pixeep' ); ?></small>
						</button>
						<div class="navigation--mobile">
							<?php
							wp_nav_menu( array(
							  'theme_location' => 'main-menu',
							  'menu_id'        => 'primary-menu',
							) );
							?>
						</div>
					</nav>
			</div>
            </div>--->
            <header class="">
        <nav role="navigation">
            <a href="javascript:void(0);" class="ic menu" tabindex="1">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </a>
            <a href="javascript:void(0);" class="ic close"></a>
            <ul class="main-nav">


                <li class="top-level-link">
                    <a class="mega-menu"><span>POSTERS</span></a>
                    <div class="sub-menu-block">
                        <div class="row">
                            <div class="col-md-2 col-lg-4 col-sm-4">
                                <h2 class="sub-menu-head">POSTERS</h2>
                                <ul class="sub-menu-lists">
                                    <li><a href="<?=get_site_url()?>/category/all">
                                            All posters</a></li>
                                    <li><a href="<?=get_site_url()?>/category/bestsellers"> Bestsellers</a></li>
                                    <li><a href="<?=get_site_url()?>/category/new">New Arrivals</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Handpicked">Handpicked</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Collaborations"> Collaborations</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Personalized"> Personalized wall art</a></li>
                                    <li><a href="<?=get_site_url()?>/category/gift"> Gift card</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-lg-4 col-sm-4">
                                <h2 class="sub-menu-head">shop By size</h2>
                                <ul class="sub-menu-lists">
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=11x8">13x18cm 5 x 7 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=16x20"> 16 x 20 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=12x16"> 12 X 16 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=12x18"> 12 X 18 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=11x8"> 11 x 8 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=18x24"> 18 x 24 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=24x36"> 24 x 36 in</a></li>
                                    <li><a href="<?=get_site_url()?>/shop/?filter_size=70x100"> 70x100 cm</a></li>
                                </ul>
                            </div>
                            <div class="col-md-3 col-lg-4 col-sm-4">
                                <h2 class="sub-menu-head">categories</h2>
                                <ul class="sub-menu-lists">
                                    <li><a href="<?=get_site_url()?>/category/Photography">
                                            Photography</a></li>
                                    <li><a href="<?=get_site_url()?>/category/black-and-white"> Black and white</a></li>
                                    <li><a href="<?=get_site_url()?>/category/botanical"> Botanical</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Typography"> Typography and quotes</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Nature"> Nature</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Arts"> Art prints</a></li>
                                    <li><a href="<?=get_site_url()?>/category/animals"> Animals</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Graphical"> Graphical</a></li>

                                    <li><a href="<?=get_site_url()?>/category/Fashion"> Fashion</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Maps"> Maps and cities</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Illustrations"> Illustrations</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Calendars">Calendars</a></li>
                                </ul>
                            </div>
                            <div class="col-md-5"></div>
                        </div>


                    </div>
                </li>

                <li class="top-level-link">
                    <a class="mega-menu"><span>Canvas</span></a>
                    <div class="sub-menu-block">
                        <div class="row">
                            <div class="col-md-3 col-lg-4 col-sm-4">
                                <h2 class="sub-menu-head">Canvas</h2>
                                <ul class="sub-menu-lists">
                                    <li><a href="<?=get_site_url()?>/shop">
                                            All Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Golden Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Black metal Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Copper Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Silver Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop">
                             
                                    <li><a href="<?=get_site_url()?>/shop"> Oak Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Poster hangers</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Walnut Canvas</a></li>
                                    <li><a href="<?=get_site_url()?>/shop"> Passepartout</a></li>
                                </ul>
                            </div>
                            <div class="col-md-2 col-lg-4 col-sm-4">
                                <h2 class="sub-menu-head">shop By size</h2>
                                 <ul class="sub-menu-lists">
                                    <li><a href="<?=get_site_url()?>/category/Photography">
                                            Photography</a></li>
                                    <li><a href="<?=get_site_url()?>/category/black-and-white"> Black and white</a></li>
                                    <li><a href="<?=get_site_url()?>/category/botanical"> Botanical</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Typography"> Typography and quotes</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Nature"> Nature</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Arts"> Art prints</a></li>
                                    <li><a href="<?=get_site_url()?>/category/animals"> Animals</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Graphical"> Graphical</a></li>

                                    <li><a href="<?=get_site_url()?>/category/Fashion"> Fashion</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Maps"> Maps and cities</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Illustrations"> Illustrations</a></li>
                                    <li><a href="<?=get_site_url()?>/category/Calendars">Calendars</a></li>
                                </ul>
                            </div>
                            <div class="d-none row banners-area">
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                </div>
                                <div class="col-md-6 col-lg-6 col-sm-6">
                                </div>
                            </div>

                        </div>
                </li>
                <li class="top-level-link">
                    <a href="<?=get_site_url()?>/category/new"><span>new arrivals</span></a>
                </li>
                <li class="top-level-link">
                    <a href="<?=get_site_url()?>/category/bestsellers"><span>best sellers</span></a>
                </li>
                <li class="top-level-link">
                    <a href="<?=get_site_url()?>/pages/gift"><span>gift</span></a>
                </li>
                <li class="top-level-link">
                    <a href="<?=get_site_url()?>/category/accessories"><span>accessories</span></a>
                </li>
            </ul>
        </nav>

    </header>