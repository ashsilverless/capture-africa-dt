<?php /** Header @package captureafrica */ ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php $blog_title = get_bloginfo(); ?></title>

<link rel="stylesheet" href="https://use.typekit.net/ecw2sdp.css"><!--TYPEKIT INJECT-->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="page" class="site-wrapper">

		<!-- Components shared on all pages -->

		<div class="component__app-bar">
		  <div class="page__grid component__app-bar__container">
		    <div class="grid__location--wide-content component__app-bar__wrapper">
		      <a class="component__app-bar__menu-icon-container" href="#"
		        ><div class="component__app-bar__menu-open-icon">
		          <svg
		            class=""
		            xmlns="http://www.w3.org/2000/svg"
		            width="31.266"
		            height="41.25"
		          >
		            <defs></defs>
		            <path
		              class="a"
		              d="M0 40.5h31.266M0 19.5h31.266M0 29.5h31.266"
		              stroke="currentColor"
		            ></path>
		            <text
		              transform="translate(0 9)"
		              fill="currentColor"
		              font-size="10"
		              font-family="CormorantGaramond-Bold,Cormorant Garamond"
		              font-weight="700"
		              letter-spacing=".05em"
		            >
		              <tspan x="0" y="0">MENU</tspan>
		            </text>
		          </svg>
		        </div>
		        <div class="component__app-bar__menu-close-icon">
		          <svg
		            class=""
		            xmlns="http://www.w3.org/2000/svg"
		            width="33"
		            height="41.228"
		          >
		            <defs></defs>
		            <path
		              class="a"
		              d="M4 16.302l24.395 24.395M28.395 16.302L4 40.697"
		              stroke="currentColor"
		            ></path>
		            <text
		              transform="translate(0 9)"
		              fill="currentColor"
		              font-size="10"
		              font-family="CormorantGaramond-Bold,Cormorant Garamond"
		              font-weight="700"
		              letter-spacing=".05em"
		            >
		              <tspan x="0" y="0">CLOSE</tspan>
		            </text>
		          </svg>
		        </div></a
		      ><a class="component__app-bar__logo-container" href="#"
		        >
				<?php get_template_part('inc/img/capture-africa-logo');?>
			</a>
		    </div>
		  </div>
		  <div class="component__menu">
		    <div class="page__grid component__menu__container">
		      <div class="grid__location--wide-content component__menu__content">

				<p class="component__menu__title">
					<?php
					if ( is_front_page() ) {
					    echo 'Home';
					} else {
					    the_title();
					};
					?>
				</p>
					<?php
					wp_nav_menu(array(
						'theme_location'  => 'main-menu',
						'menu_class' => 'component__menu__list',
						'container_class' => ''
					));
					?>
		        <div class="component__menu__social-container">
		          <p>Connect With Us</p>
		          <ul class="component__menu__social-list">
		            <li class="component__menu__social-item">
		              <a href="#"
		                ><svg
		                  class=""
		                  xmlns="http://www.w3.org/2000/svg"
		                  width="30"
		                  height="31"
		                >
		                  <defs></defs>
		                  <g stroke="currentColor" stroke-width="1.7" fill="none">
		                    <ellipse
		                      cx="15"
		                      cy="15.5"
		                      rx="15"
		                      ry="15.5"
		                      stroke="none"
		                    ></ellipse>
		                    <ellipse cx="15" cy="15.5" rx="14.15" ry="14.65"></ellipse>
		                  </g>
		                  <path
		                    class="b"
		                    d="M18.432 7.352h-6.948a4.284 4.284 0 00-4.278 4.279v6.947a4.283 4.283 0 004.279 4.279h6.948a4.284 4.284 0 004.279-4.279v-6.947a4.284 4.284 0 00-4.28-4.279zm2.9 11.226a2.906 2.906 0 01-2.9 2.9h-6.948a2.906 2.906 0 01-2.9-2.9v-6.947a2.906 2.906 0 012.9-2.9h6.948a2.906 2.906 0 012.9 2.9zm0 0"
		                    fill="currentColor"
		                  ></path>
		                  <path
		                    class="b"
		                    d="M14.958 11.11a4 4 0 104 3.995 4 4 0 00-4-3.995zm0 6.614a2.619 2.619 0 112.62-2.619 2.622 2.622 0 01-2.62 2.619zm0 0M19.122 9.941a1.008 1.008 0 10.713.3 1.012 1.012 0 00-.713-.3zm0 0"
		                    fill="currentColor"
		                  ></path></svg
		              ></a>
		            </li>
		            <li class="component__menu__social-item">
		              <a href="#"
		                ><svg
		                  class=""
		                  xmlns="http://www.w3.org/2000/svg"
		                  width="30"
		                  height="30"
		                >
		                  <g stroke="currentColor" stroke-width="1.7" fill="none">
		                    <circle cx="15" cy="15" r="15" stroke="none"></circle>
		                    <circle cx="15" cy="15" r="14.15"></circle>
		                  </g>
		                  <path
		                    d="M18.246 14.618h-2.122v7.754h-2.9v-7.754h-1.94v-2.665l1.94-.008-.008-1.569c0-2.177.591-3.509 3.164-3.509h2.138V9.54h-1.343c-.993 0-1.048.378-1.048 1.072v1.333h2.4z"
		                    fill="currentColor"
		                  ></path></svg
		              ></a>
		            </li>
		          </ul>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>

		<main>



<!--<header>
    <nav id="nav">
        <div class="container cols-3-18 mobile-nav align-vert-c">
            <div class="col">
                <a class="menu-trigger" href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
            <div class="col align-center">
                <a href="#top">
                    <?php get_template_part("template-parts/logo"); ?>
                </a>
            </div>
        </div>


        <div class="container cols-6-18 align-vert-c desktop-nav">
            <div class="col" id="logo">
                <a href="#top">
                    <?php get_template_part("template-parts/logo"); ?>
                </a>
            </div>
            <div class="col">
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'main-menu',
                    'container_class' => 'mainMenu'
                ));
                ?>
            </div>
        </div>
    </nav>
</header>

<div class="offscreen-nav">
    <div class="close menu-trigger"><i class="fas fa-times"></i></div>
    <?php get_template_part("template-parts/logo"); ?>
    <?php
    wp_nav_menu(array(
        'theme_location'  => 'main-menu',
        'container_class' => 'mainMenu'
    ));
    ?>
</div>-->

		<main><!--closes in footer.php-->
