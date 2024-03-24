<?php
/*
Template Name: Attractions
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helloLeedsTailwind
 */

get_header();
?>
    
    <!-- Hero Section -->
    <div class="bg-blend-overlay bg-black/75 bg-fixed/75 bg-no-repeat bg-center bg-cover" id="background-container-attractions">
      <div class="container mx-auto flex flex-col space-y-36 items-center min-h-screen pt-16 md:pt-32 justify-center">
        <div class="w-3/4 text-center text-white animate-fade-up">
          <h4 class="text-[1rem] md:text-[1.25rem] font-regular md:mt-4 uppercase tracking-[0.5em] md:tracking-[0.75em]">Take a trip to</h4>
          <h1 class="font-semibold text-[3rem] md:text-[4rem] uppercase tracking-widest"><?php the_title(); ?></h1>
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


  <main class="container mx-auto px-6">
      
      <!-- Page location -->
    <div class="bg-white py-12 text-black text-left">
      <div class="flex items-center space-x-2">
        <!-- page1 -->
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('see-and-do/attractions'))); ?>" class="after:content-[''] after:block after:w-0 after:h-0.5 after:bg-black after:transition-width after:duration-300 hover:after:w-6">See & do</a>
        <!-- Arrow -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="black" class="w-3 h-3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <!-- page2 -->
        <b><a href="<?php echo esc_url(get_permalink(get_page_by_path('see-and-do/attractions'))); ?>" class="after:content-[''] after:block after:w-0 after:h-0.5 after:bg-black after:transition-width after:duration-300 hover:after:w-6">Attractions</a></b>
      </div>
    </div>


    
    <?php get_template_part('/inc/section','outer-attractions');?>




    </main>


    <?php
    get_footer();