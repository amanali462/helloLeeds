<?php
// Get the current page number
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Custom query to get trending events or posts
$args = array(
    'post_type'      => 'outer-attractions', // Adjust post type accordingly
    'posts_per_page' => 3, // Number of items to display
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'paged'          => $paged, // Add pagination parameter
);
$query = new WP_Query($args);



if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();

        ?>
     
        <!-- Atrraction #1 -->
        <div class="max-w w-full mx-auto lg:max-w-full lg:flex mb-24 lg:mb-36 drop-shadow-lg">

            <!-- Attraction image -->
            <div class="h-48 lg:h-auto lg:w-[60%] flex-none bg-cover bg-center lg:rounded-tl-xl lg:rounded-bl-xl lg:border-r-0 border-b-0 border-black border-[0.5px] border-solid overflow-hidden relative" style="background-image: url(<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>)">
                <!-- Date Tag -->
                <div class="absolute bottom-6 left-6 inline-flex items-center space-x-2 bg-black bg-opacity-60 rounded-full px-2 py-2 text-paragraph font-semibold text-white">
                    <span class="text-center text-white text-md px-4 py-1"><?php echo get_field('image_tag'); ?></span>
                </div>
            </div>

            <!-- Event detail container -->
            <div class="bg-white flex-col lg:rounded-tr-xl lg:rounded-br-xl border-black border-[0.5px] border-solid px-12 py-12 items-center leading-normal">
                <!-- Favourite button -->
                <div class="flex justify-between mb-6 hover:cursor-pointer">
                    <div class="flex"></div>
                    <div id="favouriteButton" class="flex border-solid border-black border-[0.5px] rounded-full p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="notFavourited w-8 h-8 hover:animate-jump">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="#FF0000" viewBox="0 0 24 24" stroke-width="1.5" stroke="none" class="favourited hidden w-8 h-8 hover:animate-jump">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                        </svg>
                    </div>
                </div>

                <!-- Event details -->
                <div class="text-gray-900 font-bold text-4xl w-full lg:w-3/4"><?php the_title(); ?></div>
                <hr class="border-black border-2 mt-2 rounded-full w-1/4">
                <p class="text-gray-700 pt-6 pb-24 w-full lg:w-5/6"><?php echo get_the_excerpt(); ?></p>

                <!-- Seperator line -->
                <hr class="border-black w-full">

                <!-- Explore button -->
                <a href="<?php echo get_permalink(get_field('related_post')); ?>" class="flex items-center justify-between pt-4">
                    <div class="flex items-center">
                        <div class="text-left text-xl font-semibold hover:animate-jump">Explore</div>
                    </div>
                    <!-- Arrow -->
                    <div class="flex items-center hover:animate-jump">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="5" stroke="black" class="w-3 h-3">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/>
                        </svg>
                    </div>
                </a>

            </div>
        </div>

    <?php endwhile;
    // Output pagination links
    $big = 999999999; // need an unlikely integer
    echo paginate_links(array(
        'base'    => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'  => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total'   => $query->max_num_pages,
    ));

    wp_reset_postdata();
else :
    echo '<p>No events found.</p>';
endif;
?>
<div class="flex justify-between mb-6 hover:cursor-pointer">
    <div class="flex"></div>
    <a href="#" class="text-white font-semibold inline-block py-6 after:content-[''] after:block after:w-0 after:h-0.5 after:bg-white after:transition-width after:duration-300 hover:after:w-12">View more</a>
</div>
