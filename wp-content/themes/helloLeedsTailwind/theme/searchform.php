   <!-- Search bar -->
    <form role="search" method="get" class="search-form" action="/">
        <div class="flex justify-between bg-white drop-shadow-xl rounded-full py-4 px-8">
            <input type="text" class="focus:outline-none rounded-full text-lg px-8 py-2 text-black" placeholder="Keywords" style="background-color:white; width: 100%;" name="s" value="<?php the_search_query()?>"
                required>
            <button type="submit" class="bg-veniceBlue rounded-full text-lg px-8 py-2 text-white bg-imperialRed hover:animate-jump">Search</button>
        </div>
    </form>

