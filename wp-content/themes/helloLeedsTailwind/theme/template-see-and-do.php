<?php
/*
Template Name: See and do
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package helloLeedsTailwind
 */

get_header();
?>

<!-- Hero Section -->
<div class="bg-blend-overlay bg-black/75 bg-fixed/75 bg-no-repeat bg-center bg-cover" id="background-container-see-and-do">
    <div class="container mx-auto flex flex-col space-y-36 items-center min-h-screen pt-16 md:pt-32 justify-center">
    <div class="w-3/4 text-center text-white animate-fade-up">
        <h4 class="text-[1rem] md:text-[1.25rem] font-regular md:mt-4 uppercase tracking-[0.5em] md:tracking-[0.75em]">Find what to</h4>
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

<main class="container mx-auto px-6 pt-36 pb-12">
    <!-- Search things to do -->
    <div>
    <div class="text-center">
        <div class="text-black text-header font-semibold inline-block text-left">Search things to do
        <hr class="border-black border-2 w-3/6 rounded-full">
        </div>
    </div>

    <p class="pt-24 text-sub font-regular pb-6 text-center">Refine your search below:</p>
    <?php get_search_form();?> 

    <!-- Or divider -->
    <div class="flex flex-row justify-center items-center pt-36">
    <hr class="border-veniceBlue border-solid border-[0.5px] mt-3 rounded-full w-full">
    <div class="text-center text-5xl text-veniceBlue font-semibold px-12">OR</div>
    <hr class="border-veniceBlue border-solid border-[0.5px] mt-3 rounded-full w-full">
    </div>

    <div class="text-center text-header text-black font-semibold pt-32">Explore by category</div>

    <!-- A grid of things to do -->
    <section class="grid md:grid-cols-2 lg:grid-cols-3 sm:grid-rows-12 lg:grid-rows-6 gap-5 text-center text-3xl text-white uppercase text-header font-semibold min-h-screen py-12">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('/see-and-do/attractions'))); ?>" class="py-36 md:py-0 col-span-1 row-span-2 rounded-3xl bg-cover bg-center bg-no-repeat drop-shadow-2xl" style="background-image: url(<?php echo get_theme_file_uri('/img/kirkstall_abbey.jpg')?>); display: flex; flex-direction: column; justify-content: center; align-items: center;">
            <h3 class="z-10">Attractions</h3>
            <div class="see-and-do-overlay rounded-3xl"></div>
        </a>


        <a href="#" class="py-36 md:py-0 col-span-1 row-span-2 md:row-span-4 rounded-3xl bg-blend-overlay bg-mysticBlue/40 bg-cover bg-center bg-no-repeat drop-shadow-2xl hover:bg-mysticBlue" style="background-image: url(<?php echo get_theme_file_uri('/img/roundhay-park-lake.jpg')?>); display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h3 class="z-10">Outdoors</h3>
        <div class="see-and-do-overlay rounded-3xl"></div>
        </a>

        <a href="#" class="py-36 md:py-0 col-span-1 row-span-2 md:row-span-4 lg:row-span-3 rounded-3xl bg-blend-overlay bg-mysticBlue/40 bg-cover bg-center bg-no-repeat drop-shadow-2xl hover:bg-mysticBlue" style="background-image: url(<?php echo get_theme_file_uri('/img/gokart.png')?>); display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h3 class="z-10">Activities</h3>
        <div class="see-and-do-overlay rounded-3xl"></div>
        </a>

        <a href="#" class="py-36 md:py-0 col-span-1 row-span-2 md:row-span-4 rounded-3xl bg-blend-overlay bg-mysticBlue/40 bg-cover bg-center bg-no-repeat drop-shadow-2xl hover:bg-mysticBlue" style="background-image: url(<?php echo get_theme_file_uri('/img/first_direct_arena.jpg')?>); display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h3 class="z-10">Events</h3>
        <div class="see-and-do-overlay rounded-3xl"></div>
        </a>

        <a href="#" class="py-36 md:py-0 col-span-1 row-span-2 lg:row-span-3 rounded-3xl bg-blend-overlay bg-mysticBlue/40 bg-cover bg-center bg-no-repeat drop-shadow-2xl hover:bg-mysticBlue" style="background-image: url(<?php echo get_theme_file_uri('/img/temple_newsam.jpg')?>); display: flex; flex-direction: column; justify-content: center; align-items: center;">
        <h3 class="z-10">Museum</h3>
        <div class="see-and-do-overlay rounded-3xl"></div>
        </a>
        
        <a href="#" class="py-36 md:py-0 col-span-1 md:col-span-2 lg:col-span-1 row-span-2 rounded-3xl bg-blend-overlay bg-mysticBlue/40 bg-cover bg-center bg-no-repeat drop-shadow-2xl hover:bg-mysticBlue" style="background-image: url(<?php echo get_theme_file_uri('/img/leeds-playhouse.jpg')?>); display:flex; flex-direction: column; justify-content: center; align-items: center;">
        <h3 class="z-10">Shows</h3>
        <div class="see-and-do-overlay rounded-3xl"></div>
        </a>
    </section>

</main>

<?php
get_footer();