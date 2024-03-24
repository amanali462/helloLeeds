<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no `home.php` file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helloLeedsTailwind
 */

get_header();
?>

		<main id="main">

		<!-- Hero Section -->
		<div class="bg-blend-overlay bg-black/75 bg-fixed/75 bg-no-repeat bg-center bg-cover" id="background-container-home">
			
			<div class="container mx-auto px-6 flex flex-col space-y-36 items-center min-h-screen pt-16 md:pt-32 justify-center">
				<div class="w-3/4 text-center text-white animate-fade-up">
				<h4 class="text-[1rem] md:text-[1.25rem] font-regular md:mt-4 uppercase tracking-[0.5em] md:tracking-[0.42em]">Explore the wonders of</h4>
				<h1 class="font-semibold text-[3.2rem] md:text-[8rem] uppercase tracking-widest">Leeds</h1>
				</div>
				<!-- Downward Arrow -->
				<div class="flex flex-col">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="0.5" stroke="white" class="animate-bounce mx-auto w-1/5 md:w-1/6">
					<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
				</svg>
				<div class="text-white text-center uppercase tracking-[0.1em]">Scroll</div>
				</div>
			</div>
		</div>

    <?php get_template_part('/inc/section','events');?>


		<!-- Harewood Content -->
		<section class="flex flex-col bg-gray-800 text-white bg-center bg-cover bg-fixed bg-mysticBlue/80" style="background-image: url(<?php echo get_theme_file_uri('/img/IMG20220608131412.jpg')?>)">
		<div class="blend-overlay">
			<div class="container mx-auto px-6 flex items-center py-[100px] min-h-screen">
				<div class="text-center">
				<div class="text-white text-header font-semibold inline-block text-left lg:text-center">Enjoy what Leeds has to offer
					<hr class="border-white border-2 mt-2 w-[100px] lg:w-[350px] rounded-full">
				</div>
				<h2 class="text-center text-2xl text-sub font-semibold mt-[100px]">Harewood House</h2>
				<p class="w-full text-center mt-3 text-balance">Harewood House is a magnificent stately home located in the beautiful countryside of Leeds, West Yorkshire, England. This historic mansion, set within 1,000 acres of stunning parkland, is renowned for its exquisite architecture, art collections, and picturesque gardens. Built between 1759 and 1771, Harewood House is a prime example of Georgian architecture, designed by the renowned architects John Carr and Robert Adam.</p>
				<a class="px-10 text-sub font-semibold py-3 inline-block border-solid border-2 border-white rounded-full text-white hover:bg-white hover:animate-fade hover:text-black transition-colors mt-[8rem]" href="">
					Explore
				</a>
				</div>
			</div>
		</div>
		</section>
		</main><!-- #main -->
		<!-- Hidden BG -->
		<div class="bg-veniceBlue h-[100px]"></div>

		<!-- Enjoy our exclusive offers -->
		<aside class="bg-veniceBlue pb-[100px] relative text-white">
			<div class="flex flex-row container mx-auto px-6">
				<div class="flex flex-col pb-">
				<div class="text-white text-header font-semibold inline-block pb-12 w-[100%] md:w-[70%] lg:w-[100%] leading-12">Enjoy our exclusive offers
					<hr class="border-white border-2 mt-2 w-[120px] rounded-full">
				</div> 
				<div class="text-sub font-regular w-[67%] lg:w-[60%]">Get 20% off when you sign up and download the app</div>
				<div class="flex flex-col space-y-3 lg:flex-row lg:space-x-5 lg:space-y-0 pt-6">
					<img src= <?php echo get_theme_file_uri("/img/download-appstore.svg")?> alt="Download on the App Store" class="w-[40%] lg:w-[30%] hover:animate-jump">
					<img src=<?php echo get_theme_file_uri("/img/download-playstore.svg")?> alt="Get it on Google Play" class="w-[40%] lg:w-[30%] hover:animate-jump">        
				</div>
				</div>  
				<div class="absolute left-[63%] lex-1 flex items-center bottom-0">
				<img class="lg:w-[435px] animate-fade" src=<?php echo get_theme_file_uri("/img/iphone-mockup-app-store.png")?> alt="Iphone mockup of the app store showcasing Hello Leeds app">
				</div>
			</div>
		</aside>
			

		<!-- Newsletter Sign Up -->
		<aside class="py-12 md:py-36 lg:bg-grayFlash ">
			<div class="flex flex-col xl:flex-row md:container mx-auto px-6 rounded-3xl justify-center space-y-12 xl:space-y-0 xl:space-x-[15%] lg:bg-white drop-shadow-xl py-12 items-center w-full">
				
				<!-- Subscribe Text -->
				<div class="text-black text-header font-semibold inline-block">Subscribe to our newsletter
					<hr class="border-black lg:border-black border-2 mt-2 w-[120px] rounded-full">
				</div>

        <!-- Newsletter Email -->
        <div class="tnp tnp-subscription">
            <form method="post" action="http://webdevelopmenthelloleeds.test/?na=s">
                <input type="hidden" name="nlang" value="">
                <div class="tnp-field tnp-field-email">
					<div class="flex items-center bg-grayFlash rounded-full py-4 px-8 space-x-0">
						<input class="tnp-email bg-grayFlash focus:outline-none rounded-full text-paragraph px-8 py-2 text-black" style="width: 100%; background-color:#F0EFF5;" type="email" name="ne" id="tnp-1" placeholder="Enter your email" required>
	
						<button type="submit" class="tnp-field tnp-field-button rounded-full text-lg px-8 py-2 text-white bg-veniceBlue hover:animate-jump">Join</button>
					</div>
				</div>
            </form>
        </div>

    </div>
</aside>

<?php


get_footer();

