  <!-- Trending Container -->
  <div class="bg-greyFlash drop-shadow-2xl mx-auto py-12 overflow-hidden">
    <div class="container mx-auto px-6 flex items-center pb-10">

      <!-- Trending Title -->
      <div class="text-black text-5xl text-header font-semibold inline-block mx-auto">
        Trending
        <hr class="border-black border-2 mt-3 w-[125px] rounded-full">
      </div>
    </div>

    <!-- CAROUSEL -->
    <div class="slider">
      <?php
      // Custom query to get trending events or posts
      $args = array(
        'post_type'      => 'event', // Adjust post type accordingly
        'posts_per_page' => 6, // Number of items to display
        'meta_key'       => 'event_date', // Replace with your custom field for date
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
      );

      $query = new WP_Query($args);

      if ($query->have_posts()) :
    
        while ($query->have_posts()) : $query->the_post();
      ?>
      <!-- ITEM 1 -->
      <div class="mx-3 md:mx-5 lg:mx-12 rounded-lg overflow-hidden shadow-lg my-12 bg-blend-overlay bg-mysticBlue/90 bg-cover bg-center bg-no-repeat drop-shadow-md" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
        <div class="px-6 py-4">
          <div class="text-white text-sub font-semibold mb-2"><?php the_title(); ?></div>
          <p class="text-white text-paragraph font-regular">
              <?php echo get_the_excerpt(); ?>
          </p>

        </div>

        <!-- Tags container -->
        <div class="inline-flex flex-wrap pl-6 pt-4">
          <!-- Location Tag -->
          <div class="inline-flex space-x-2 items-center bg-veniceBlue rounded-full px-2 py-2 text-paragraph font-semibold text-white mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
            </svg>
            <span class="text-left pr-2"><?php echo get_field('location'); ?></span>
          </div>

          <!-- Date Tag -->
          <div class="inline-flex space-x-2 items-center bg-veniceBlue rounded-full px-2 py-2 text-paragraph font-semibold text-white mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
            </svg>
            <span class="text-center pr-2"><?php echo get_field('event_date'); ?></span>
          </div>

          <!-- Time Tag -->
          <div class="inline-flex space-x-2 items-center bg-veniceBlue rounded-full px-2 py-2 text-paragraph font-semibold text-white mr-2 mb-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span class="text-center pr-2"><?php echo get_field('event_time'); ?></span>
          </div>
        </div>

        <!-- CTA -->
        <div class="flex justify-center pt-6">
          <div class="px-6 flex">
            <div class="px-4 text-paragraph font-semibold py-2 inline-block border-solid border-2 border-white rounded-full text-white hover:bg-white hover:animate-fade hover:text-black">
              <a href="<?php the_permalink(); ?>">Book tickets</a>
            </div>
          </div>
        </div>
      </div>

      <?php
      endwhile;
      wp_reset_postdata();
    else :
      echo '<p>No events found.</p>';
    endif;
    ?>


  </div>
</div>