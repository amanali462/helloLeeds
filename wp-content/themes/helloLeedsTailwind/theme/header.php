<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page">
        <div id="overlay" class="fixed top-0 left-0 w-full h-full bg-black opacity-60 z-40 pointer-events-none hidden"></div>
        <header class="bg-transparent transition-all duration-300 fixed w-full py-0 lg:py-2 z-50" data-open="false" id="navbar">
            <div class="container relative mx-auto flex items-center justify-between px-6">
                <!-- Logo -->
                <a href="<?php echo esc_url(home_url('/')); ?>">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="122" height="122" viewBox="0 0 122 122">
						<defs>
							<clipPath id="clip-path">
							<rect id="Logo" width="122" height="122" transform="translate(380 51)" fill="white"/>
							</clipPath>
						</defs>
						<g id="Mask_Group_1" data-name="Mask Group 1" transform="translate(-380 -51)" clip-path="url(#clip-path)">
							<g id="Layer_1" data-name="Layer 1" transform="translate(381.564 92.138)">
							<g id="Group_66" data-name="Group 66">
								<path id="Path_47" data-name="Path 47" d="M13.679,39.385H.142V38.112H6.155V33.843H.142V32.569H13.7v1.274H7.122v4.269H13.7v1.274Z" fill="white"/>
								<path id="Path_48" data-name="Path 48" d="M13.679,30.211H.142V25.306h.991v3.608H6.226V25.966H7.17v2.948h5.589V25.258H13.7v4.929Z" fill="white"/>
								<path id="Path_49" data-name="Path 49" d="M13.679,23.537H.142V22.263H12.735V18.419h.943Z" fill="white"/>
								<path id="Path_50" data-name="Path 50" d="M13.679,17.146H.142V15.872H12.735V12.028h.943Z" fill="white"/>
								<path id="Path_51" data-name="Path 51" d="M13.844,7.594a3.722,3.722,0,0,1-.519,2.123,2.672,2.672,0,0,1-1.462,1.061,6.791,6.791,0,0,1-2.17.307H4.056a6.514,6.514,0,0,1-2.146-.33A2.744,2.744,0,0,1,.5,9.669,3.752,3.752,0,0,1,0,7.594,3.807,3.807,0,0,1,.5,5.519,2.628,2.628,0,0,1,1.91,4.434a6.544,6.544,0,0,1,2.146-.307H9.693a6.544,6.544,0,0,1,2.146.307A2.923,2.923,0,0,1,13.3,5.5a3.585,3.585,0,0,1,.542,2.1Zm-1.014,0a2.175,2.175,0,0,0-.354-1.344,1.8,1.8,0,0,0-1.014-.637,5.611,5.611,0,0,0-1.486-.165H3.821a5.611,5.611,0,0,0-1.486.165,1.819,1.819,0,0,0-.991.637A2.175,2.175,0,0,0,.991,7.594a2.381,2.381,0,0,0,.354,1.391,1.853,1.853,0,0,0,.991.66,5.611,5.611,0,0,0,1.486.165H9.952a5.611,5.611,0,0,0,1.486-.165,1.872,1.872,0,0,0,1.014-.66,2.175,2.175,0,0,0,.354-1.391Z" fill="white"/>
							</g>
							<text id="LEEDS" transform="translate(15.872 39.362)" fill="white" font-size="43" font-family="Oswald-SemiBold, Oswald" font-weight="600"><tspan x="0" y="0">LEEDS</tspan></text>
							</g>
						</g>
					</svg>
                </a>

                <!-- Hamburger menu -->
                <button class="lg:hidden" id="toggle">
					<svg id="menuOpen" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 hover:animate-wiggle">
						<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
					</svg>

					<svg id="menuClosed" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6 hidden hover:animate-wiggle">
						<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
					</svg> 
                </button>

                <!-- Navigation bar -->
                <nav id="nav" class="-right-full w-3/6 fixed top-[120px] bottom-0 lg:wd-auto lg:static bg-mysticBlue bg-opacity-90 lg:bg-transparent lg:w-auto transition-all ">
                    <div class="pt-10 text-center space-y-5 lg:flex font-semibold lg:space-y-0 lg:pt-0 text-xl lg:text-lg list-none">
					<a href="#" class="flex flex-col items-center lg:text-white lg:hidden">
						<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 hover:animate-wiggle">
							<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
						</svg>
						<div class= "text-white ">Profile</div> 
						</a>

						<div class="lg:hidden">
						<a href="#" class="text-white block hover:bg-veniceBlue hover:text-white px-4 py-6 text-paragraph" tabindex="-1" id="menu-item-0">Signed in as<br><span class="font-semibold">tom@example.com</span></a>
						<hr>
						<a href="#" class="text-white block hover:bg-veniceBlue hover:text-white px-4 py-2 text-paragraph" tabindex="-1" id="menu-item-1">Account settings</a>
						<a href="#" class="text-white block hover:bg-veniceBlue hover:text-white px-4 py-2 text-paragraph" tabindex="-1" id="menu-item-2">My favourites</a>
						<hr>
						<form method="POST" action="#" role="none">
							<button type="submit" class="text-white block w-full hover:bg-veniceBlue hover:text-white px-4 py-6 text-center text-paragraph"  tabindex="-1" id="menu-item-4">Sign out</button>
						</form>
						</div>
							<!-- Navigation list -->
							<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container'      => 'ul',
								'menu_class'     => 'lg:space-x-10 text-left inline-block lg:flex lg:space-y-0 menu-items text-white',
							) );
							?>

							

                    </div>
                </nav>

                <!-- Profile Dropdown -->
                <div class="hidden lg:flex dropdown relative">
					<div class="flex flex-col items-center text-white">
						<a href="#" class="flex flex-col items-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-10 h-10 hover:animate-jump">
								<path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
							</svg>
							<div class="lg:text-white">Profile</div>
						</a>
                    <div class="hidden dropdown-menu absolute right-0 z-10 mt-10 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" aria-orientation="vertical" role="menu" aria-expanded="false">
						<div class="py-1">
							<a href="#" class="text-gray-700 block hover:bg-veniceBlue hover:text-white px-4 py-2 text-paragraph">Signed in as<br><span class="font-semibold">tom@example.com</span></a>
							<hr>
							<a href="#" class="text-gray-700 block hover:bg-veniceBlue hover:text-white px-4 py-2 text-paragraph">Account settings</a>
							<a href="#" class="text-gray-700 block hover:bg-veniceBlue hover:text-white px-4 py-2 text-paragraph">My favorites</a>
							<hr>
							<form method="POST" action="#">
								<button type="submit" class="text-gray-700 block w-full hover:bg-veniceBlue hover:text-white px-4 py-2 text-left text-paragraph" tabindex="-1" id="menu-item-3">Sign out</button>
							</form>
						</div>
                    </div>
                </div>
            </div>
        </header>
    </div>
</body>
</html>
