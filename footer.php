<?php if (!defined('ABSPATH')) {
    exit;
} ?>

</div><!-- Closing of smr-page -->

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3024.637239831019!2d-73.63522828522747!3d40.70398634604379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c27cdf761eb4ab%3A0xfc68f2f7462be7f1!2s95%20Front%20St%2C%20Hempstead%2C%20NY%2011550%2C%20USA!5e0!3m2!1sen!2sin!4v1627453061168!5m2!1sen!2sin" class="min-w-full min-h-[450px] font-Lato" title="Google Map"></iframe>
<footer class="w-full bg-black">
    <div class="grid w-10/12 grid-flow-row grid-cols-1 py-16 mx-auto lg:gap-x-1 lg:grid-flow-col lg:grid-cols-5">
        <ul class="flex flex-col w-full text-white lg:col-span-1">
            <li class="mb-11">
                <h3 class="text-base font-bold uppercase font-Lato">Practice Areas</h3>
            </li>
            <li class="mb-4"><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/practice-areas/workers-compensation/"><span class="pr-3 text-themeAccent">❯</span>Workers' Compensation</a></li>
            <li class="mb-4"><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/practice-areas/disability-law/"><span class="pr-3 text-themeAccent">❯</span>Disability Law</a></li>
            <li class="mb-4"><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/practice-areas/personal-injury/"><span class="pr-3 text-themeAccent">❯</span>Personal Injury</a></li>
            <li class="mb-4"><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/practice-areas/no-fault-collections/"><span class="pr-3 text-themeAccent">❯</span>No Fault Collections</a></li>
        </ul>
        <nav class="w-full text-2xl text-white lg:col-span-1 font-Montserrat">
            <h3 class="text-base font-bold uppercase font-Lato mb-11">Quick Links</h3>
            <div class="grid"><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/firm-overview/"><span class="pr-3 text-themeAccent">❯</span>Firm Overview</a><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/our-team/"><span class="pr-3 text-themeAccent">❯</span>Our Team</a><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/faq/"><span class="pr-3 text-themeAccent">❯</span>FAQ</a><a class="pb-4 text-sm text-white rounded moving-left font-Lato" href="/reviews/"><span class="pr-3 text-themeAccent">❯</span>Reviews</a></div>
        </nav>
        <div class="w-full recentposts lg:col-span-2">
            <h3 class="text-base font-bold text-white uppercase font-Lato mb-11">Latest News</h3>
            <?php

            $the_query = new WP_Query('posts_per_page=2');
            // The Loop
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();

                    //your html here for latest 2 
            ?>
                    <div class="pb-5">
                        <ul class="flex flex-row gap-x-2 gap-y-5">
                            <li><a aria-label="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <img width="120" height="90" data-main-image="" sizes="120px" decoding="async" src="<?php the_post_thumbnail_url('footer_post'); ?>" alt="<?php the_title(); ?>" style="object-fit: cover; opacity: 1;">
                                    <?php } ?>
                                </a></li>
                            <li class="w-3/5 items-center justify-center mb-2 ml-1 -mt-2">
                                <article class="post-list-item" itemscope="" itemtype="http://schema.org/Article">
                                    <div>
                                        <h4><a href="<?php the_permalink(); ?>"><span class="text-xs tracking-wider text-white uppercase transition duration-300 ease-in-out delay-150 font-PTSerif hover:text-themeAccent"><?php the_title(); ?></span></a></h4>
                                        <p class="pb-1 text-xs font-Lato text-themeAccent"><span><?php echo get_the_date('F j, Y'); ?></span></p>
                                    </div>
                                    <div class="text-sm text-white font-Lato line-clamp-2">
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
            <?php
                }
            }
            /* Restore original Post Data */
            wp_reset_postdata();
            ?>
        </div>
        <div class="w-full text-2xl text-white lg:pl-3 lg:col-span-1 font-Montserrat">
            <h3 class="mb-10 text-base font-bold uppercase font-Lato">Contact Us</h3>
            <div>
                <div class="flex items-center pb-4"><span class="pr-5 mt-2 text-themeAccent"><svg width="16" height="16" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                            <path d="M118.27 98.503v-.026s-22.666-22.64-22.68-22.651a4.541 4.541 0 00-6.439.012L78.718 86.314c-4.056 4.057-9.286.457-19.325-7.729-6.642-5.416-14.284-12.699-20.91-20.91-4.65-5.761-8.762-11.811-4.514-16.058.011-.011 10.476-10.449 10.474-10.46l.008-.022c1.878-1.878 1.696-4.755-.019-6.472v-.026L21.098 1.331c-1.797-1.797-4.67-1.757-6.439.012l-10.51 10.51c-4.33 5.419-13.953 31.246 27.302 73.534 43.46 44.551 71.504 35.021 76.332 29.994 0 0 10.499-10.375 10.499-10.385l.009-.021c1.878-1.879 1.693-4.754-.021-6.472z"></path>
                        </svg></span><span><a class="text-sm text-white transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="tel:516-505-0044">516.505.0044</a></span></div>
                <div class="flex items-center pb-4"><span class="pr-5 mt-2 text-themeAccent"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490" height="16" width="16" class="fill-current">
                            <path d="M295.2 257.8L251.4 295c-3.5 2.9-8.6 2.9-12 0l-43.8-37.1L16.7 409.1h456.6L295.2 257.8zM0 92.2v305.6L180.1 245z"></path>
                            <path d="M16.7 80.9L245 274.6 473.3 80.9zM309.9 245L490 397.8V92.2z"></path>
                        </svg></span><span><a class="text-sm text-white transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="mailto:info@pomareslawgroup.com">info@pomareslawgroup.com</a></span></div>
                <div class="flex items-center"><span class="pr-5 text-themeAccent"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 349.661 349.661" width="1rem" height="1rem" class="fill-current">
                            <path d="M174.831 0C102.056 0 42.849 59.207 42.849 131.981c0 30.083 21.156 74.658 62.881 132.485 30.46 42.215 61.363 76.607 61.671 76.95l7.429 8.245 7.429-8.245c.309-.342 31.211-34.734 61.671-76.95 41.725-57.828 62.881-102.402 62.881-132.485C306.812 59.207 247.605 0 174.831 0zm-.001 319.617C137.772 276.925 62.85 180.569 62.85 131.981 62.849 70.235 113.084 20 174.831 20s111.981 50.235 111.981 111.981c0 48.559-74.924 144.934-111.982 187.636z"></path>
                            <circle cx="174.831" cy="131.982" r="49.696"></circle>
                        </svg> </span><span><a class="text-sm text-white transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="/contact/">95 Front St<br>Hempstead, NY 11550</a></span></div>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto">
        <hr class="border-1 border-[#9b9b9b]">
    </div>
    <div class="flex flex-col items-center justify-between w-10/12 py-3 mx-auto text-sm text-white footer-copyright font-Lato gap-y-3 lg:flex-row">
        <div>2022 © <a aria-current="page" class="text-sm text-white transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="/">Pomares Law Group.</a></div>
        <div>Designed and Developed by <a href="https://www.searchmarketingresource.com/" class="text-sm text-white transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent">Search Marketing Resource LLC.</a></div>
    </div><button class=" fixed bottom-20 right-10 z-100" aria-label="Scroll to top button"><svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 group" viewBox="0 0 20 20">
            <circle cx="9" cy="9" fill="#ffffff" r="6"></circle>
            <path d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" fill-rule="evenodd" class="fill-current text-[#3d414e] group-hover:text-themeAccent transition delay-150 duration-300 ease-in-out"></path>
        </svg></button>
</footer>

<?php wp_footer(); ?>
</body>

</html>