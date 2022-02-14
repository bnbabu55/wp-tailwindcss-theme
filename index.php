<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<?php get_header(); ?>

<main class="w-full mx-auto px-3 lg:px-0 lg:w-10/12 flex-1 relative pb-10">
    <h1 class="hidden">Blog Archive</h1>
    <div class="mx-auto my-16 text-gray-600">
        <div>
            <h2 class="text-5xl font-bold tracking-wide text-center font-PTSerif text-themePrimary">Pomares Law Group in the News</h2>
            <p class="my-6 text-lg text-center font-Lato text-themePrimary">Stay current on leading law news and <br>practices by visiting our News posts periodically.</p>
        </div>
        <div class="all-blogs">
            <div class="main-content">
                <?php

                $currentPage = get_query_var('paged');

                $the_query = new WP_Query(array(
                    'post_type' => 'post', // Default or custom post type
                    'posts_per_page' => 5, // Max number of posts per page
                    'paged' => $currentPage
                ));
                if ($the_query->have_posts()) {
                    // Load posts loop.
                    while ($the_query->have_posts()) {
                        $the_query->the_post(); ?>
                        <ul class="flex flex-col lg:flex-row pb-5 items-start">
                            <li class="w-full lg:w-2/5">
                                <?php if (has_post_thumbnail()) { ?>
                                    <img width="330" height="150" sizes="330px" decoding="async" src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" style="object-fit: cover; opacity: 1;">
                                <?php } ?>
                            </li>
                            <li class="w-full lg:w-3/5">
                                <header>
                                    <h2><a href="<?php the_permalink(); ?>"><span class="text-base font-bold leading-none tracking-wider uppercase transition duration-300 ease-in-out delay-150 font-PTSerif text-themeAccent hover:text-themePrimary"><?php the_title(); ?></span></a></h2>
                                    <p class="pb-2 text-sm font-Lato text-themePrimary">Posted by
                                        <span class="font-bold"><?php echo get_the_author_meta('display_name', $author_id); ?>
                                        </span>
                                        on <span class="font-bold"><?php echo get_the_date('F j, Y'); ?></span>
                                    </p>
                                </header>
                                <div class="text-sm font-Lato prose text-themePrimary">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                            </li>
                        </ul>
                    <?php
                    }
                    $total_pages = $the_query->max_num_pages;

                    if ($total_pages > 1) {

                        $current_page = max(1, get_query_var('paged'));

                    ?>
                        <div class="pagination-links mt-5 flex justify-center items-center gap-x-5 text-xl font-bold">
                            <?php
                            echo paginate_links(array(
                                'base' => get_pagenum_link(1) . '%_%',
                                'format' => 'page/%#%',
                                'current' => $current_page,
                                'total' => $total_pages,
                                'prev_text'    => __('« Prev'),
                                'next_text'    => __('Next »'),
                            ));
                            ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>