<?php if (!defined('ABSPATH')) {
    exit;
} ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="<?php bloginfo('charset'); ?>" />

    <?php wp_head(); ?>
    <!-- Load WP objects for head-tag -->
</head>


<body <?php body_class(['bg-white']); ?> id="smr_body">
    <?php if (!defined('ABSPATH')) {
        exit;
    } ?>

    <!DOCTYPE html>
    <html <?php language_attributes(); ?>>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="<?php bloginfo('charset'); ?>" />

        <?php wp_head(); ?>
        <!-- Load WP objects for head-tag -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
    </head>


    <body <?php body_class(['bg-white']); ?> id="smr_body">
        <header>
            <div class="sticky top-0 z-50 w-full pt-0 mt-0 bg-white mobile-menu lg:hidden text-themePrimary font-Lato">
                <div class="flex items-center justify-between w-10/12 mx-auto">
                    <div><button class="hamburger hamburger-arrow-left hamburger-cancel  " aria-label="hamburger menu button"><span class="icon"></span></button></div>
                    <div class="my-1">
                        <a aria-current="page" class="" href="/">
                            <svg width="50" height="60" viewBox="0 0 143 220.3" xmlns="http://www.w3.org/2000/svg">
                                <path d="m4.86 71.606-2.88-.27-1.98-.09 5.76-4.86 14.76-.18q.99-4.14 2.7-10.53 1.71-6.48 4.5-15.66l5.4-20.16 1.53-5.94 1.71-6.84q-6.48.99-10.89 2.79-4.41 1.71-7.74 5.76-1.89 2.34-2.88 4.59-.9 2.16-.9 4.68 0 3.06.18 5.76.27 2.61.9 6.21l-9.27 5.13q-1.35-5.94-1.35-10.62 0-2.07.09-2.97.27-1.17.27-1.71 1.08-6.12 7.02-12.33 8.64-8.1 21.33-10.44 7.11-1.08 14.58-4.14l-.72 2.43q8.73 0 12.33.36 1.8 0 3.51.72 1.8.63 3.87 1.98 3.24 2.16 4.59 5.94.81 2.34.81 4.68 0 1.44-.27 2.97-2.16 11.07-12.33 17.37-5.22 3.15-10.98 4.95-5.67 1.8-11.79 1.8l-6.3 23.22h11.25q1.71 0 4.41-.09t3.6-.09v.9q-5.04 2.34-10.17 3.51t-11.07 1.17H11.52Zm41.4-65.34-8.19 31.5q1.17.09 1.98.18h1.53q13.68 0 18.54-12.87 1.62-4.23 1.62-7.65t-1.89-6.39q-1.89-3.06-5.31-4.05-1.35-.36-3.51-.54-2.16-.18-4.77-.18z" fill="#a16f3f" aria-label="P"></path>
                                <path d="M62.55 133.226q-2.25-.27-9-.99-6.66-.63-10.62-.63-5.4 0-8.28.09-2.88.18-7.65.81l6.12-7.2h2.34q.9-.18 1.26-.18 2.07 0 3.78-.45 1.8-.45 2.79-1.26 1.71-1.44 2.7-3.78 1.08-2.34 1.8-5.31l1.44-5.58 3.78-16.11q2.43-9.9 5.58-15.03 3.24-5.22 11.7-12.15 4.68-3.69 9.45-4.5.63-.09 1.26-.09h1.17q3.78 0 8.37 1.35l-5.31 7.02q-3.42-.54-6.12-.72-2.61-.18-4.68-.18-3.06 0-5.58 3.24-1.98 2.88-3.87 10.44l-3.87 15.39-3.24 11.97q-1.08 3.24-3.6 7.02-2.43 3.78-7.11 8.19h20.52q7.83 0 11.7-.54 3.96-.54 6.48-2.34 2.61-1.62 4.5-4.5 1.98-2.97 6.39-10.53 1.53 2.34 1.53 3.87 0 .72-.18.99l-9.54 19.8q-2.34 1.62-4.23 1.98l-5.49.36H70.29q-1.8 0-3.78-.09-1.89-.09-3.96-.36z" fill="#a16f3f" aria-label="L"></path>
                                <path d="m82.29 218.516 5.31-8.1 6.84.63h2.61q1.26 0 2.52.09 1.8 0 3.42-.27 3.42-.54 5.76-2.7 1.8-1.8 3.33-5.67 1.53-3.78 2.88-9.54l1.62-6.75q-12.6 6.75-22.14 6.75h-1.62q-1.08-.18-1.62-.18-11.43-1.08-13.86-11.25-.9-3.87-.9-8.1 0-6.21 2.25-13.41 6.84-20.79 21.24-30.42 6.12-4.14 11.61-6.21 6.21-2.34 11.97-2.34 7.65 0 12.24 2.25t6.84 7.47l-9.54 9.99q-1.08-6.75-4.14-10.62-3.06-3.96-9.72-3.96t-12.24 3.6q-5.49 3.51-9.72 9.45-4.23 5.94-6.48 12.06-1.89 5.49-2.97 10.53-.99 4.95-.99 9.54 0 4.77 1.53 8.28t5.04 6.21q1.71 1.26 3.78 1.8t4.41.54q4.5-.45 8.55-2.7 4.14-2.25 8.01-5.4l4.05-16.47q-4.41 0-9.27-.09-4.86-.18-7.83-.27l3.96-2.52 4.32-2.43q4.05 0 12.96.36 9 .27 13.05.27l-7.92 4.68-3.42 13.5q-2.52 10.62-4.41 15.93-1.71 5.58-5.4 10.8-3.6 5.22-10.62 10.35-5.22 3.96-11.34 4.77-2.16.27-2.88.27-.72.09-2.43.09-3.87 0-8.64-.81z" fill="#a16f3f" aria-label="G"></path>
                            </svg>
                        </a>
                    </div>
                    <div>
                        <button class="text-black kebab-menu" aria-label="mobile menu button">
                            <svg class="w-6 h-6" viewBox="0 0 60.8 60.8" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Three dots More Icon">
                                <path class="hidden" d="M30 16c4.411 0 8-3.589 8-8s-3.589-8-8-8-8 3.589-8 8 3.589 8 8 8zm0 28c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0-22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path>
                                <path class="block text-black fill-current" d="M30 16c4.411 0 8-3.589 8-8s-3.589-8-8-8-8 3.589-8 8 3.589 8 8 8zm0 28c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0-22c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8z"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="top-bar hidden w-full mx-auto flex-col justify-between items-center my-3">
                    <div class="flex flex-col items-center text-sm font-Lato lg:flex-row gap-x-5">
                        <div class="flex items-center"><span class="pr-3 text-themeAccent"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.592 202.592" width="1rem" height="1rem" class="fill-current">
                                    <path d="M198.048 160.105l-31.286-31.29c-6.231-6.206-16.552-6.016-23.001.433L128 145.009a649.985 649.985 0 01-3.11-1.732c-9.953-5.515-23.577-13.074-37.914-27.421C72.599 101.48 65.03 87.834 59.5 77.874c-.587-1.056-1.145-2.072-1.696-3.038l10.579-10.565 5.2-5.207c6.46-6.46 6.639-16.778.419-23.001L42.715 4.769c-6.216-6.216-16.541-6.027-23.001.433l-8.818 8.868.243.24c-2.956 3.772-5.429 8.124-7.265 12.816-1.696 4.466-2.752 8.729-3.235 12.998-4.13 34.25 11.52 65.55 53.994 108.028 58.711 58.707 106.027 54.273 108.067 54.055 4.449-.53 8.707-1.593 13.038-3.275 4.652-1.818 9.001-4.284 12.769-7.233l.193.168 8.933-8.747c6.446-6.459 6.632-16.777.415-23.015zm-7.365 16.059l-3.937 3.93-1.568 1.507c-2.469 2.387-6.743 5.74-12.984 8.181-3.543 1.364-7.036 2.24-10.59 2.663-.447.043-44.95 3.84-100.029-51.235C14.743 94.38 7.238 67.395 10.384 41.259c.394-3.464 1.263-6.95 2.652-10.593 2.462-6.277 5.812-10.547 8.181-13.02l5.443-5.497c2.623-2.63 6.714-2.831 9.112-.433l31.286 31.286c2.394 2.401 2.205 6.492-.422 9.13L45.507 73.24l1.95 3.282c1.084 1.829 2.23 3.879 3.454 6.106 5.812 10.482 13.764 24.83 29.121 40.173 15.317 15.325 29.644 23.27 40.094 29.067 2.258 1.249 4.32 2.398 6.17 3.5l3.289 1.95 21.115-21.122c2.634-2.623 6.739-2.817 9.137-.426l31.272 31.279c2.391 2.397 2.201 6.488-.426 9.115z"></path>
                                </svg></span><span><a class="text-sm font-Lato" href="tel:516-505-0044">516.505.0044</a></span></div>
                        <div class="flex items-center"><span class="pr-3 mt-1 text-base text-themeAccent"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490" width="1rem" height="1rem" class="fill-current">
                                    <path d="M479.574 78.191H10.425c-.071 0-.141.007-.211.008l.001.003C4.556 78.315 0 82.925 0 88.617v312.766c0 5.762 4.669 10.426 10.425 10.426h469.149c5.758 0 10.426-4.664 10.426-10.426V88.617c0-5.763-4.668-10.426-10.426-10.426zm-25.167 20.852l-138.581 138.58-.006.005L245 308.449l-70.82-70.821-.013-.012L35.594 99.043h418.813zM20.851 113.784l131.215 131.215L20.851 376.215V113.784zm14.743 277.173l131.215-131.216 70.821 70.821c3.629 3.629 9.303 5.439 14.743 0l70.82-70.82 131.215 131.215H35.594zm433.555-14.744L337.935 244.999l131.214-131.214v262.428z"></path>
                                </svg></span><span><a class="text-base font-Lato" href="mailto:info@pomareslawgroup.com">info@pomareslawgroup.com</a></span></div>
                    </div>
                </div>
                <div class="mx-auto">
                    <ul class="w-4/5 main-nav hidden flex-col gap-y-2 pb-5">
                        <li class="flex items-center justify-start w-full my-3 ml-3">
                            <div><a class="request-button font-Lato font-black tracking-wider bg-themeAccent text-white text-sm px-10 py-3 my-3 hover:bg-themeAccentDarker transition delay-150 duration-300 ease-in-out" href="/contact/">Request a Free Consultation</a></div>
                        </li>
                        <li><a class="w-full px-2 mx-1 py-1 font-Lato font-black text-sm text-themePrimary tracking-wide rounded hover:bg-themeAccent hover:text-white focus:bg-themeAccent focus:text-white active:bg-themeAccent active:text-white focus:outline-none" href="/firm-overview/">Firm Overview</a>
                            <ul class="flex mx-2 flex-col bg-black bg-opacity-50 text-white">
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/our-team/">Our Team</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/our-history/">Our History</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/blog/">News</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/faq/">FAQ</a></li>
                            </ul>
                        </li>
                        <li><a class="w-full px-2 mx-1 py-1 font-Lato font-black text-sm text-themePrimary tracking-wide rounded hover:bg-themeAccent hover:text-white focus:bg-themeAccent focus:text-white active:bg-themeAccent active:text-white focus:outline-none" href="/practice-areas/">Practice Areas</a>
                            <ul class="flex mx-2 flex-col bg-black bg-opacity-50 text-white">
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/workers-compensation/">Workers' Compensation</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/disability-law/">Disability Law</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/personal-injury/">Personal Injury</a></li>
                                <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/no-fault-collections/">No Fault Collections</a></li>
                            </ul>
                        </li>
                        <li><a class="w-full px-2 mx-1 py-1 font-Lato font-black text-sm text-themePrimary tracking-wide rounded hover:bg-themeAccent hover:text-white focus:bg-themeAccent focus:text-white active:bg-themeAccent active:text-white focus:outline-none" href="/reviews/">Reviews</a></li>
                        <li><a class="w-full px-2 mx-1 py-1 font-Lato font-black text-sm text-themePrimary tracking-wide rounded hover:bg-themeAccent hover:text-white focus:bg-themeAccent focus:text-white active:bg-themeAccent active:text-white focus:outline-none" href="/contact/">Contact</a></li>
                        <li class="mb-3 self-center lang-sel" data-label="Languages"><a class="flex gap-x-1 justify-between items-center" href="/es">
                                <picture>
                                    <img layout="fixed" title="Español" width="24" height="24" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Spain-flag-circle-48.png' ?>" alt="Spain Flag" style="object-fit: cover; opacity: 1;" />
                                </picture>
                            </a></li>
                    </ul>
                </div>
            </div>

            <div class="desktop-header hidden lg:flex flex-col">
                <div class="flex items-center justify-center w-10/12 mx-auto">
                    <div class="flex items-center justify-center text-sm font-Lato gap-x-5">
                        <div class="flex items-center mt-1">
                            <span class="pr-3 text-themeAccent">
                                <svg width="14" height="14" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg" class="fill-current">
                                    <path d="M118.27 98.503v-.026s-22.666-22.64-22.68-22.651a4.541 4.541 0 00-6.439.012L78.718 86.314c-4.056 4.057-9.286.457-19.325-7.729-6.642-5.416-14.284-12.699-20.91-20.91-4.65-5.761-8.762-11.811-4.514-16.058.011-.011 10.476-10.449 10.474-10.46l.008-.022c1.878-1.878 1.696-4.755-.019-6.472v-.026L21.098 1.331c-1.797-1.797-4.67-1.757-6.439.012l-10.51 10.51c-4.33 5.419-13.953 31.246 27.302 73.534 43.46 44.551 71.504 35.021 76.332 29.994 0 0 10.499-10.375 10.499-10.385l.009-.021c1.878-1.879 1.693-4.754-.021-6.472z" />
                                </svg>
                            </span>
                            <span>
                                <a class="text-sm transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="tel:516-505-0044">
                                    516.505.0044
                                </a>
                            </span>
                        </div>
                        <div class="flex items-center">
                            <span class="pr-3 mt-1 text-base text-themeAccent">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 490 490" height="14" width="14" class="fill-current">
                                    <path d="M295.2 257.8L251.4 295c-3.5 2.9-8.6 2.9-12 0l-43.8-37.1L16.7 409.1h456.6L295.2 257.8zM0 92.2v305.6L180.1 245z" />
                                    <path d="M16.7 80.9L245 274.6 473.3 80.9zM309.9 245L490 397.8V92.2z" />
                                </svg>
                            </span>
                            <span>
                                <a class="text-base transition duration-300 ease-in-out delay-150 font-Lato hover:text-themeAccent" href="mailto:info@pomareslawgroup.com">
                                    info@pomareslawgroup.com
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <hr class="mt-1 border-b border-gray-100" />
                <div class="w-full mx-auto bg-white ">
                    <div class="flex items-center justify-between w-10/12 mx-auto"><a aria-current="page" class="my-1" href="/"><svg width="70" height="90" viewBox="0 0 143 220.3" xmlns="http://www.w3.org/2000/svg">
                                <path d="m4.86 71.606-2.88-.27-1.98-.09 5.76-4.86 14.76-.18q.99-4.14 2.7-10.53 1.71-6.48 4.5-15.66l5.4-20.16 1.53-5.94 1.71-6.84q-6.48.99-10.89 2.79-4.41 1.71-7.74 5.76-1.89 2.34-2.88 4.59-.9 2.16-.9 4.68 0 3.06.18 5.76.27 2.61.9 6.21l-9.27 5.13q-1.35-5.94-1.35-10.62 0-2.07.09-2.97.27-1.17.27-1.71 1.08-6.12 7.02-12.33 8.64-8.1 21.33-10.44 7.11-1.08 14.58-4.14l-.72 2.43q8.73 0 12.33.36 1.8 0 3.51.72 1.8.63 3.87 1.98 3.24 2.16 4.59 5.94.81 2.34.81 4.68 0 1.44-.27 2.97-2.16 11.07-12.33 17.37-5.22 3.15-10.98 4.95-5.67 1.8-11.79 1.8l-6.3 23.22h11.25q1.71 0 4.41-.09t3.6-.09v.9q-5.04 2.34-10.17 3.51t-11.07 1.17H11.52Zm41.4-65.34-8.19 31.5q1.17.09 1.98.18h1.53q13.68 0 18.54-12.87 1.62-4.23 1.62-7.65t-1.89-6.39q-1.89-3.06-5.31-4.05-1.35-.36-3.51-.54-2.16-.18-4.77-.18z" fill="#a16f3f" aria-label="P"></path>
                                <path d="M62.55 133.226q-2.25-.27-9-.99-6.66-.63-10.62-.63-5.4 0-8.28.09-2.88.18-7.65.81l6.12-7.2h2.34q.9-.18 1.26-.18 2.07 0 3.78-.45 1.8-.45 2.79-1.26 1.71-1.44 2.7-3.78 1.08-2.34 1.8-5.31l1.44-5.58 3.78-16.11q2.43-9.9 5.58-15.03 3.24-5.22 11.7-12.15 4.68-3.69 9.45-4.5.63-.09 1.26-.09h1.17q3.78 0 8.37 1.35l-5.31 7.02q-3.42-.54-6.12-.72-2.61-.18-4.68-.18-3.06 0-5.58 3.24-1.98 2.88-3.87 10.44l-3.87 15.39-3.24 11.97q-1.08 3.24-3.6 7.02-2.43 3.78-7.11 8.19h20.52q7.83 0 11.7-.54 3.96-.54 6.48-2.34 2.61-1.62 4.5-4.5 1.98-2.97 6.39-10.53 1.53 2.34 1.53 3.87 0 .72-.18.99l-9.54 19.8q-2.34 1.62-4.23 1.98l-5.49.36H70.29q-1.8 0-3.78-.09-1.89-.09-3.96-.36z" fill="#a16f3f" aria-label="L"></path>
                                <path d="m82.29 218.516 5.31-8.1 6.84.63h2.61q1.26 0 2.52.09 1.8 0 3.42-.27 3.42-.54 5.76-2.7 1.8-1.8 3.33-5.67 1.53-3.78 2.88-9.54l1.62-6.75q-12.6 6.75-22.14 6.75h-1.62q-1.08-.18-1.62-.18-11.43-1.08-13.86-11.25-.9-3.87-.9-8.1 0-6.21 2.25-13.41 6.84-20.79 21.24-30.42 6.12-4.14 11.61-6.21 6.21-2.34 11.97-2.34 7.65 0 12.24 2.25t6.84 7.47l-9.54 9.99q-1.08-6.75-4.14-10.62-3.06-3.96-9.72-3.96t-12.24 3.6q-5.49 3.51-9.72 9.45-4.23 5.94-6.48 12.06-1.89 5.49-2.97 10.53-.99 4.95-.99 9.54 0 4.77 1.53 8.28t5.04 6.21q1.71 1.26 3.78 1.8t4.41.54q4.5-.45 8.55-2.7 4.14-2.25 8.01-5.4l4.05-16.47q-4.41 0-9.27-.09-4.86-.18-7.83-.27l3.96-2.52 4.32-2.43q4.05 0 12.96.36 9 .27 13.05.27l-7.92 4.68-3.42 13.5q-2.52 10.62-4.41 15.93-1.71 5.58-5.4 10.8-3.6 5.22-10.62 10.35-5.22 3.96-11.34 4.77-2.16.27-2.88.27-.72.09-2.43.09-3.87 0-8.64-.81z" fill="#a16f3f" aria-label="G"></path>
                            </svg> </a>
                        <ul class="flex p-0 leading-4 gap-x-8">
                            <li class="mx-1 px-1 my-1 py-5 bg-white text-themePrimary group realtive"><a class="py-1 text-sm font-black tracking-wide font-Lato nav-menu-item" href="/firm-overview/">Firm Overview</a>
                                <ul class="-mx-3 pt-3 mt-3 pb-2 hidden group-hover:flex w-60 absolute z-10 flex-col bg-black bg-opacity-50 text-white">
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/our-team/">Our Team</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/our-history/">Our History</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/blog/">News</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/faq/">FAQ</a></li>
                                </ul>
                            </li>
                            <li class="mx-1 px-1 my-1 py-5 bg-white text-themePrimary group realtive"><a class="py-1 text-sm font-black tracking-wide font-Lato nav-menu-item" href="/practice-areas/">Practice Areas</a>
                                <ul class="-mx-3 pt-3 mt-3 pb-2 hidden group-hover:flex w-60 absolute z-10 flex-col bg-black bg-opacity-50 text-white">
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/workers-compensation/">Workers' Compensation</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/disability-law/">Disability Law</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/personal-injury/">Personal Injury</a></li>
                                    <li class="mx-1 my-1"><a class="p-2 px-2 py-1 text-sm font-black tracking-wide text-white rounded font-Lato hover:bg-themeAccent hover:text-white" href="/practice-areas/no-fault-collections/">No Fault Collections</a></li>
                                </ul>
                            </li>
                            <li class="mx-1 px-1 my-1 py-5 bg-white text-themePrimary "><a class="py-1 text-sm font-black tracking-wide font-Lato nav-menu-item" href="/reviews/">Reviews</a></li>
                            <li class="mx-1 px-1 my-1 py-5 bg-white text-themePrimary "><a class="py-1 text-sm font-black tracking-wide font-Lato nav-menu-item" href="/contact/">Contact</a></li>
                            <li class="flex items-center justify-center">
                                <div><a class="request-button font-Lato font-black tracking-wider bg-themeAccent text-white text-sm px-10 py-3 my-3 hover:bg-themeAccentDarker transition delay-150 duration-300 ease-in-out" href="/contact/">Request a Free Consultation</a></div>
                            </li>
                            <li class="language-selector self-center lang-sel" data-label="Languages">
                                <a class="flex gap-x-1 justify-between items-center" href="/es">
                                    <picture>
                                        <img layout="fixed" title="Español" width="24" height="24" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Spain-flag-circle-24.png' ?>" alt="Spain Flag" style="object-fit: cover; opacity: 1;" />
                                    </picture>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>


        <div class="smr-page">