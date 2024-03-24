<?php
/*
Template Name: Inner Attractions
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helloLeedsTailwind
 */

get_header();


$args = array(
  'post_type' => 'inner-attractions',
  'posts_per_page' => 1,
  'orderby' => 'meta_value',
  'order' => 'ASC',
);


$related_post_id = isset($_GET['related_post']) ? intval($_GET['related_post']) : 0;

if ($related_post_id) {

  $args['p'] = $related_post_id;
}

$query = new WP_Query($args);

if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();


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
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('see-and-do'))); ?>" class="after:content-[''] after:block after:w-0 after:h-0.5 after:bg-black after:transition-width after:duration-300 hover:after:w-6">See & do</a>
        <!-- Arrow -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="black" class="w-3 h-3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <!-- page2 -->
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('see-and-do/attractions'))); ?>" class="after:content-[''] after:block after:w-0 after:h-0.5 after:bg-black after:transition-width after:duration-300 hover:after:w-6">Attractions</a>
        <!-- Arrow -->
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="black" class="w-3 h-3">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
        </svg>
        <!-- page3 -->
        <b><?php the_title(); ?></b>
      </div>
    </div>

    <div class="grid gap-y-16 lg:gap-y-0 lg:grid-cols-6 lg:grid-rows-2 lg:gap-x-[10%] ">
      <div class="col-span-full lg:row-span-1 lg:col-start-1 lg:col-end-4 xl:col-end-5">
        <div class="text-black text-4xl font-semibold inline-block text-left"><?php the_title(); ?>
          <hr class="border-black border-2 mt-2 md:w-3/6 rounded-full">
        </div>

        <p class="py-6"><?php echo get_the_excerpt(); ?></p>

        <div class="flex space-x-4">
          <a href="<?php echo get_field('external_link'); ?>">
           <div class="border-black border-solid border-2 px-5 py-2 rounded-full hover:bg-veniceBlue hover:text-white">Book Now</div>
          </a>

          <!-- Storing current url to a variable -->
          <?php
          $twitter_share_url = 'https://twitter.com/intent/tweet?url=' . urlencode(get_permalink());
          ?>

          <!-- Displaying the stored url -->
          <a href="<?php echo esc_url($twitter_share_url); ?>" target="_blank">
              <div class="flex space-x-2 items-center border-black border-solid border-2 px-5 py-2 rounded-full hover:bg-veniceBlue hover:text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hover:stroke-white">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                  </svg>
                  <div>Share on Twitter</div>
              </div>
          </a>
        </div>
      </div>



      <div class="col-span-full lg:row-span-2 lg:col-end-7 lg:col-span-3 xl:col-span-2">
        <div class="flex md:flex-wrap flex-col md:flex-row lg:flex-col bg-grayFlash drop-shadow-xl rounded-3xl lg:space-y-6 py-12 pl-20 md:pl-24 lg:pl-24 xl:pl-20">
          
          <!-- Price -->
          <div class="flex space-x-4 px-3 py-6 lg:p-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.121 7.629A3 3 0 009.017 9.43c-.023.212-.002.425.028.636l.506 3.541a4.5 4.5 0 01-.43 2.65L9 16.5l1.539-.513a2.25 2.25 0 011.422 0l.655.218a2.25 2.25 0 001.718-.122L15 15.75M8.25 12H12m9 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
              <div class="flex-col">
                <h4>Price</h4>
                <p class="pb-4"><?php echo get_field('price_range'); ?></p>
                <hr class="border-black border-solid border-[0.5]">
              </div>
          </div>

          <!-- Date -->
          <div class="flex space-x-4 px-3 py-6 lg:p-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>            
              <div class="flex-col">
                <h4>Opening days</h4>
                <p class="pb-4"><?php echo get_field('opening_days'); ?></p>
                <hr class="border-black border-solid border-[0.5]">
              </div>
          </div>

          <!-- Time -->
          <div class="flex space-x-4 px-3 py-6 lg:p-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            
              <div class="flex-col">
                <h4>Time</h4>
                <p class="pb-4"><?php echo get_field('opening_times'); ?></p>
                <hr class="border-black border-solid border-[0.5]">
              </div>
          </div>

          <!-- Category -->
          <div class="flex space-x-4 px-3 py-6 lg:p-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
            </svg>
            
              <div class="flex-col">
                <h4>Category</h4>
                <p class="pb-4"><?php echo get_field('category_name'); ?></p>
                <hr class="border-black border-solid border-[0.5]">
              </div>
          </div>

            <!-- Audience -->
            <div class="flex space-x-4 px-3 py-6 lg:p-0">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
              </svg>
              
                <div class="flex-col">
                  <h4>Audience</h4>
                  <p class="pb-4"><?php echo get_field('target_audience'); ?></p>
                  <hr class="border-black border-solid border-[0.5]">
                </div>
            </div>


            
        </div>
      </div>

      <div class="rounded-lg col-span-full lg:row-span-1 lg:col-start-1 lg:col-end-7 xl:col-end-5 xl:mt-5 text-white">
        <!-- Accordion Wrapper -->
          <div class="accordion bg-veniceBlue rounded-xl">
              <div class="accordion-item">
                  <div class="accordion-title closed flex flex-row justify-between">
                    <h3 class="flex font-semibold"><?php echo get_field('accordion_q1'); ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                  </div>
                  <div class="accordion-content">
                    <?php echo get_field('accordion_a1'); ?>
                  </div>
              </div>

              <div class="accordion-item">
                <div class="accordion-title closed flex flex-row justify-between">
                  <h3 class="flex font-semibold"><?php echo get_field('accordion_q2'); ?></h3>
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                  </svg>
                </div>
                <div class="accordion-content">
                <?php echo get_field('accordion_a2'); ?>
                </div>
            </div>

              <div class="accordion-item">
                  <div class="accordion-title closed flex flex-row justify-between">
                    <h3 class="flex font-semibold"><?php echo get_field('accordion_q3'); ?></h3>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                  </div>
                  <div class="accordion-content">
                    <?php echo get_field('accordion_a3'); ?>
                  </div>
              </div>
          </div>
      </div>

    </div>
    
    <!-- Map Container -->

      <div class="container mx-auto flex flex-col items-center pb-10 pt-32 ">

        <!-- Map Title -->
        <div class="text-black text-header font-semibold inline-block mx-auto">Where to find it?
          <hr class="border-black border-2 w-[125px] rounded-full">
        </div>
        <?php 
      $location = get_field('google_maps');
      if( $location ): ?>
          <div class="acf-map" data-zoom="16">
              <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
          </div>
      <?php endif; ?>

      </div>


        <?php     
        endwhile;
    wp_reset_postdata();
else :
    echo '<p>No related posts found.</p>';
endif;
?>
</main>

<?php
// Get footer
get_footer();