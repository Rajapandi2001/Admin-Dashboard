<!doctype html>
<html lang="en">

<?php require_once("includes/head.php");  ?>
<?php require_once("includes/media-helper.php"); ?>

<body class="font-body text-base font-light lg:text-md text-secondary antialiased">

    <a href="#content" role="button" aria-label="Skip to content"></a>

    <?php require_once("includes/header.php");  ?>


    <main class="" id="content">
        <section class="h-screen-d bg-secondary text-white flex items-center gs-section-intro c-intro"
            data-gs-type="intro">
            <div class="relative w-full mb-24">
                <center>
                    <?php require_once("includes/main-svg.php");  ?>
                </center>

                <!--<div id="lottieIntro" class="c-intro-lottie mx-auto js-intro-lottie">
        </div>-->


                <div style="margin-top:55px;"
                    class="c-intro-line-wrap js-intro-line-wrap absolute inset-x-0 top-[90%] w-screen h-[50vh] z-10">
                    <span class="absolute inset-x-0 top-0 mx-auto c-intro-line js-intro-line"></span>
                    <span class="absolute inset-x-0 top-0 w-full h-full origin-top js-intro-line-scroll c-intro-line-bg"
                        style="opacity: 0; visibility: hidden;"></span>
                </div>
            </div>
            <br>
            <br>
            <div class="absolute left-1/2 bottom-4 -translate-x-1/2 flex flex-col gap-y-2 items-center">
                <span class="h5 block text-center">scroll<br>down</span>
                <span class="block w-10 h-16 border-2 border-primary rounded-full p-2">
                    <span class="block mx-auto w-4 h-4 rounded-full bg-white/20 animate-mouse ease-nice"
                        style="--travel: 1.75rem;--duration: 1000ms;"></span>

                </span>
            </div>
        </section>
        <div class="relative bg-primary md:pb-48 text-white gs-section" data-gs-type="items">
            <div class="absolute right-full top-0 w-32 md:w-64 z-10 rotate-[30deg] gs-animate" data-anim-x="150"
                data-anim-y="-120" data-anim-rotate="0" data-anim-scrub="1" data-anim-type="to">
                <img src="<?= getMediaPath('home_decorations_hand') ?>" data-media-key="home_decorations_hand" alt="hand Logo" class="w-full js-lottie-dragonfly"
                    style="width:100px;height:auto;">
                <!--<div id="lottieDragonfly" class="w-full js-lottie-dragonfly"></div>-->
            </div>
            <div class="relative">
                <div class="absolute right-12 md:right-[45%] top-0 w-32 md:w-64 z-10 scale-0 rotate-[-30deg] gs-animate"
                    data-anim-scale="1" data-anim-rotate="0" data-anim-scrub="1" data-anim-y="-50" data-anim-type="to">
                    <img src="<?= getMediaPath('home_decorations_lotus') ?>" data-media-key="home_decorations_lotus" alt="Lotus Logo" class="w-full h-full object-contain"
                        loading="lazy">
                </div>

                <div class="absolute left-0 top-12 w-1/4 z-10 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 333 65" role="none">
                        <path stroke="#fff" stroke-linecap="round" stroke-width="6"
                            d="M129.74 61.088c-80.922 0-250.924-3.701-165.155-9.683 85.77-5.982 294.688-23.162 253.019-24.84-41.669-1.68-193.82-10.493-253.019-10.493-59.198 0 238.831-14.164 364.442-12.905">
                    </svg>
                </div>
                <div
                    class="absolute right-4 md:right-[52%] top-72 md:top-auto md:bottom-12 xl:bottom-6 2xl:bottom-0 w-1/5 max-w-[320px] z-10 pointer-events-none">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 385 109">
                        <path stroke="#fff" stroke-linecap="round" stroke-width="6"
                            d="M193.654 22.118C273.912 11.776 442.993-6.28 358.691 10.614 274.389 27.508 69.38 71.247 110.922 67.587c41.542-3.66 193.572-14.364 252.285-21.93 58.712-7.565-235.063 44.571-359.805 59.375">
                    </svg>
                </div>
                <div class="absolute right-4 top-0 w-20 z-10">
                    <img src="<?= getMediaPath('home_decorations_yoga') ?>" data-media-key="home_decorations_yoga" alt="yoga logo" class="w-full h-auto" loading="lazy" width="80"
                        height="93">
                </div>


                <section data-block="signpost" class="relative overflow-hidden bg-primary text-white py-12 lg:py-16 ">
                    <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                        <div class="relative order-2  pt-12 mb:pb-12 md:mb-24  ">
                            <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150"
                                data-anim-scrub="1" data-anim-start="top bottom">

                                <h3 class="h2 text-line">Another year of memories</h3>
                                <div class="mt-4 prose text-base font-normal">
                                    <p></p>
                                    <p>Celebrating another year of growth, learning and memories... Smiles, laughter and
                                        memories to last a lifetime..</p>
                                    <p></p>
                                </div>
                                <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                    <a href="<?= getVideoLink('home_hero_youtube') ?>"
                                        class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                        aria-label="opens new tab" x-data="{}"
                                        @click.prevent="$dispatch('open-lightbox', '<iframe src=\'<?= getVideoLink("home_hero_youtube", "embed") ?>\' class=\'block aspect-video\' width=\'100%\' allowfullscreen></iframe>')">

                                        <span class="c-button c-button--icon group">
                                            <i class="w-4 text-primary fill-current group-hover:text-white transition-colors duration-300"
                                                role="presentation">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z">
                                                    </path>
                                                </svg>
                                            </i>
                                            Watch this video
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <figure
                                class="hidden md:block absolute right-0 bottom-0 md:translate-y-full lg:translate-y-3/4 md:translate-x-1/2 w-28 xl:w-auto"
                                role="none">


                                <img src="<?= getMediaPath('home_decorations_flower') ?>" data-media-key="home_decorations_flower" class="w-full h-full object-contain object-left-bottom"
                                    alt="flower" style="width:150px;height:auto;" loading="lazy">
                            </figure>
                        </div>

                        <div class="order-1 gs-animate" data-anim-x="-150" data-anim-scrub="1"
                            data-anim-start="top bottom">
                            <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                                <div class="-rotate-6  ">
                                    <div class="relative u-mask-image" x-data="{playing: true}">
                                        <span
                                            class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                        <?= renderMedia('home_hero_c1357', 'w-full h-full object-cover aspect-video relative js-video-scroll', ['autoplay' => true, 'muted' => true, 'loop' => true, 'playsinline' => true, 'x-ref' => 'video']) ?>
                                        <button
                                            class="absolute bottom-4 right-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                            @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                            aria-label="Pause video">
                                            <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                    class="shwcpmpyeh-fill-current">
                                                    <path d="M0 0h2.571v13.712H0z" data-name="Rectangle 77"></path>
                                                    <path d="M7 0h2.571v13.712H7z" data-name="Rectangle 78"></path>
                                                </svg>
                                            </i>
                                            <i x-show="!playing" class="block w-2.5 ml-1 fill-current"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14">
                                                    <path d="M12 7 0 14V0Z" data-name="Polygon 2"></path>
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                    <a href="<?= getMediaPath('home_hero_c1357') ?>"
                                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                        target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                        @click.prevent="$dispatch('open-lightbox', `<video controls class='block aspect-video' width='100%'><source src='<?= getMediaPath('home_hero_c1357') ?>' type='video/mp4'></video>`)">
                                        <span class="c-button-play"></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <h2 class="h0 my-12 md:my-32 container-full text-center overflow-hidden group">
                <div class="relative">
                    <span
                        class="whitespace-nowrap block group-hover:opacity-50 transition-opacity duration-500 gs-animate"
                        data-anim-x="-100" data-anim-scrub="1" data-anim-start="top bottom"
                        data-anim-end="top 15%">Empowering young leaders</span>
                    <!-- <span class="whitespace-nowrap block group-hover:opacity-50 transition-opacity duration-500 gs-animate" data-anim-x="100"  data-anim-scrub="1" data-anim-start="top bottom" data-anim-end="top 15%">book here</span>-->
                    <a href="#admissions/open-weeks" class="absolute inset-0" title="View Open Week"></a>
                </div>
            </h2>
            <div class="relative overflow-hidden">
                <div class="hidden md:block absolute right-[55%] bottom-8 w-40 z-10 origin-left gs-animate"
                    data-anim-scale="0" data-anim-start="top bottom" data-anim-scrub="1">
                    <img src="images/home/arrow.svg?id=9bcf6bf6f15196a9eecb13f92d11f715" alt="Arrow" class="w-full"
                        loading="lazy">
                </div>
                <div class="absolute -right-1 top-0 w-16 z-10 gs-animate" data-anim-scale="0" data-anim-delay="1"
                    data-anim-scrub="1">
                    <img src="images/home/star.svg?id=04b824df38de2fc66d76cd671ef278a9" alt="Star" class="w-full"
                        loading="lazy">
                </div>


                <section data-block="signpost" class="relative overflow-hidden bg-primary text-white py-12 lg:py-16 ">
                    <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                        <div class="relative order-2   pb-20 md:order-first">
                            <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="-150"
                                data-anim-scrub="1" data-anim-start="top bottom">
                                <figure class="w-44 h-32 md:-mt-16 mb-2" role="none">


                                    <img src="<?= getMediaPath('home_decorations_chariot') ?>" data-media-key="home_decorations_chariot"
                                        class="w-full h-full object-contain object-left-bottom " alt="chariot"
                                        width="200" height="200" loading="lazy">
                                </figure>

                                <h3 class="h2 text-line">Explore with us</h3>
                                <div class="mt-4 prose text-base font-normal">
                                    <p></p>
                                    <p>It is a long established fact that a reader will be distracted by the readable
                                        content of a page when looking at its layout.</p>
                                    <p></p>
                                </div>
                                <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                    <a href="<?= getVideoLink('home_explore_youtube') ?>"
                                        class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                        aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getVideoLink('home_explore_youtube', 'embed') ?>&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0'
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin'
        allowfullscreen
        class='w-full aspect-video'>
      </iframe>
    `)">
                                        <span class="c-button c-button--icon group">
                                            <i class="w-4 text-primary fill-current group-hover:text-white transition-colors duration-300"
                                                role="presentation">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                    fill="currentColor">
                                                    <path
                                                        d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z">
                                                    </path>
                                                </svg>
                                            </i>
                                            Watch this video
                                        </span>
                                    </a>

                                </div>
                            </div>
                        </div>

                        <div class="order-1 gs-animate" data-anim-x="150" data-anim-scrub="1"
                            data-anim-start="top bottom">
                            <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:translate-x-0">

                                <div class="rotate-6  u-mask-border">
                                    <div class="relative u-mask-image" x-data="{playing: true}">
                                        <span
                                            class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                        <?= renderMedia('home_explore_5', 'w-full h-full object-cover aspect-video relative js-video-scroll', ['autoplay' => true, 'muted' => true, 'loop' => true, 'playsinline' => true, 'x-ref' => 'video']) ?>
                                        <button
                                            class="absolute bottom-4 left-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                            @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                            aria-label="Pause video">
                                            <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                    class="tamipygpil-fill-current">
                                                    <path d="M0 0h2.571v13.712H0z" data-name="Rectangle 77"></path>
                                                    <path d="M7 0h2.571v13.712H7z" data-name="Rectangle 78"></path>
                                                </svg>
                                            </i>
                                            <i x-show="!playing" class="block w-2.5 ml-1 fill-current"><svg
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14">
                                                    <path d="M12 7 0 14V0Z" data-name="Polygon 2"></path>
                                                </svg>
                                            </i>
                                        </button>
                                    </div>
                                    <a href="<?= getVideoLink('home_head_carousel_youtube') ?>"
                                        class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                        target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                        @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getVideoLink('home_head_carousel_youtube', 'embed') ?>&amp;autoplay=1'
        class='block aspect-video w-full h-full'
        title='YouTube video player'
        frameborder='0'
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin'
        allowfullscreen>
      </iframe>
    `)">
                                        <span class="c-button-play"></span>
                                    </a>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="relative">
            <span class="absolute inset-x-0 top-px -translate-y-full h-6 u-mask-footer bg-white z-10"></span>
            <section class="relative gs-section-carousel md:overflow-x-hidden !top-0" data-gs-type="carousel">
                <div class="absolute inset-x-4 -top-4 md:left-24 md:right-8 md:top-8 flex justify-between z-20">
                    <img src="images/svg/diamond.svg?id=24efb395cf46b541cd68e3c679219937" alt="Diamond"
                        class="w-12 h-auto md:w-20 rotate-12" loading="lazy" width="62" height="82">
                    <img src="images/svg/heart.svg?id=b0ec6bcf6f0f0d0f03c76d83c2561ba1" alt="Heart"
                        class="w-12 h-auto md:w-20 mt-8 md:mt-24 -rotate-45" loading="lazy" width="64" height="64">

                </div>
                <div class="hidden md:block absolute inset-x-0 top-20 md:top-12 z-10">
                    <div class="container gs-heading">
                        <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                            <h2 class="h2 text-line grow-0">Why choose us?</h2>
                            <div class="prose text-base font-normal max-w-2xl mx-auto">
                                <p>There’s so many things that make our school unique. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-screen md:w-[400%] flex flex-nowrap">
                    <div class="relative z-0 w-full h-screen flex flex-wrap md:items-center py-24 md:pt-32 gs-carousel  "
                        data-key="values">
                        <div class="px-6 md:px-4 md:w-1/2 z-10">
                            <div class="space-y-4 md:max-w-[32rem] md:mx-auto">
                                <h3 class="h1 text-primary text-balance">Our values</h3>
                                <div class="prose text-base font-normal md:max-w-md">
                                    <p>At Midas Touch School of Excellence, our values form the foundation of everything
                                        we do. We are committed to nurturing students in an environment that encourages
                                        integrity, respect, responsibility, and a passion
                                        for learning. Our approach to education goes beyond textbooks, promoting
                                        critical thinking, creativity, and holistic development.</p>
                                </div>
                                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                                    <a class="c-button" href="#why-choose-us/our-values">Discover more</a>
                                </div>
                            </div>
                        </div>
                        <figure role="none"
                            class="absolute top-1/2 bottom-0 inset-x-0 md:right-auto md:left-[45%] md:bottom-0 md:top-44 u-mask-image bg-grey -rotate-0 gs-animate">


                            <picture>
                                <source srcset="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" type="image/webp">
                                <source srcset="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_carousel_6') ?>" data-media-key="home_carousel_6" class="w-full h-full object-cover object-left-top "
                                    alt="Poster" width="400" height="800" loading="lazy">
                            </picture>
                        </figure>
                    </div>
                    <div class="relative z-0 w-full h-screen flex flex-wrap md:items-center py-24 md:pt-32 gs-carousel  hidden md:flex"
                        data-key="head">
                        <div class="px-6 md:px-4 md:w-1/2 z-10">
                            <div class="space-y-4 md:max-w-[32rem] md:mx-auto">
                                <h3 class="h1 text-primary text-balance">Head&#039;s Welcome</h3>
                                <div class="prose text-base font-normal md:max-w-md">
                                    <p>Find out the magic ingredient which our headteacher believes gives MidasTouch its
                                        special atmosphere.</p>
                                </div>
                                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                                    <a class="c-button" href="#why-choose-us/heads-welcome">Read more</a>
                                    <a href="https://www.instagram.com/midastouchschoolofexcellence/"
                                        class="c-button c-button--icon group" target="_blank" rel="noopener">
                                        <i class="w-4 text-primary fill-current group-hover:text-white transition-colors duration-300"
                                            role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 30.17 30.17">
                                                <g transform="translate(0 0)">
                                                    <path
                                                        d="M19.164,6.8c4.028,0,4.5.015,6.1.088a8.348,8.348,0,0,1,2.8.519,4.995,4.995,0,0,1,2.863,2.863,8.346,8.346,0,0,1,.519,2.8c.073,1.591.088,2.068.088,6.1s-.015,4.5-.088,6.1a8.347,8.347,0,0,1-.519,2.8,5,5,0,0,1-2.863,2.863,8.349,8.349,0,0,1-2.8.519c-1.59.073-2.067.088-6.1.088s-4.505-.015-6.1-.088a8.349,8.349,0,0,1-2.8-.519A5,5,0,0,1,7.4,28.06a8.349,8.349,0,0,1-.519-2.8c-.073-1.591-.088-2.068-.088-6.1s.015-4.5.088-6.1a8.348,8.348,0,0,1,.519-2.8A5,5,0,0,1,10.267,7.4a8.347,8.347,0,0,1,2.8-.519c1.591-.073,2.068-.088,6.1-.088m0-2.718c-4.1,0-4.611.017-6.219.091a11.072,11.072,0,0,0-3.662.7A7.714,7.714,0,0,0,4.871,9.283a11.072,11.072,0,0,0-.7,3.662c-.073,1.609-.091,2.123-.091,6.219s.017,4.61.091,6.219a11.072,11.072,0,0,0,.7,3.662,7.714,7.714,0,0,0,4.412,4.412,11.073,11.073,0,0,0,3.662.7c1.609.073,2.123.091,6.219.091s4.61-.017,6.219-.091a11.073,11.073,0,0,0,3.662-.7,7.714,7.714,0,0,0,4.412-4.412,11.073,11.073,0,0,0,.7-3.662c.073-1.609.091-2.123.091-6.219s-.017-4.611-.091-6.219a11.073,11.073,0,0,0-.7-3.662,7.714,7.714,0,0,0-4.412-4.412,11.072,11.072,0,0,0-3.662-.7c-1.609-.073-2.123-.091-6.219-.091Z"
                                                        transform="translate(-4.079 -4.079)"></path>
                                                    <path
                                                        d="M134.381,126.635a7.746,7.746,0,1,0,7.746,7.746A7.746,7.746,0,0,0,134.381,126.635Zm0,12.775a5.028,5.028,0,1,1,5.028-5.028A5.028,5.028,0,0,1,134.381,139.41Z"
                                                        transform="translate(-119.296 -119.296)"></path>
                                                    <circle cx="1.81" cy="1.81" r="1.81"
                                                        transform="translate(20.577 7.033) rotate(-45)"></circle>
                                                </g>
                                            </svg>
                                        </i> Follow on Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="hidden md:block absolute inset-0 bg-primary/10"></div>
                        <div
                            class="hidden md:flex absolute left-[45%] w-1/2 max-w-3xl top-1/2 -translate-y-1/2 flex-col">
                            <figure role="none"
                                class="w-1/2 ml-24 z-10 mr-12 p-2 u-mask-image bg-white -rotate-6 z-10 gs-animate"
                                data-anim-rotate="-20" data-anim-start="left right">


                                <picture>
                                    <source srcset="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" media="(min-width: 1024px)" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" media="(min-width: 768px)" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" media="(min-width: 1024px)">
                                    <source srcset="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" media="(min-width: 768px)">
                                    <img src="<?= getMediaPath('home_carousel_7') ?>" data-media-key="home_carousel_7" class="w-full h-full object-contain "
                                        alt="Headmobile" width="200" height="200" loading="lazy">
                                </picture>
                            </figure>
                            <div class="w-3/5 mx-auto -mt-6 -mb-24 gs-animate" data-anim-x="50"
                                data-anim-start="left right">
                                <div class="p-1 u-mask-image bg-white rotate-[10deg]">

                                    <div class="  ">
                                        <figure role="presentation" class="">


                                            <picture>
                                                <source srcset="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8" media="(min-width: 1024px)"
                                                    type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8" media="(min-width: 768px)"
                                                    type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8" type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8" media="(min-width: 1024px)">
                                                <source srcset="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8" media="(min-width: 768px)">
                                                <img src="<?= getMediaPath('home_carousel_8') ?>" data-media-key="home_carousel_8"
                                                    class="w-full h-full object-cover aspect-[8/5] u-mask-image "
                                                    alt="FAQs Chris2" width="420" height="236" loading="lazy">
                                            </picture>
                                        </figure>
                                        <a href="" role="button" class="absolute inset-0 grid place-content-center"
                                            x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getVideoLink('home_head_carousel_youtube', 'embed') ?>&amp;autoplay=1' 
        class='block aspect-video w-full h-full'
        title='YouTube video player'
        frameborder='0'
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin'
        allowfullscreen>
      </iframe>
    `)">
                                            <span class="c-button-play-sm"></span>
                                        </a>


                                    </div>
                                </div>
                            </div>
                            <figure role="none"
                                class="w-1/3 ml-auto mr-12 p-1 u-mask-image bg-white -rotate-6 z-10 gs-animate"
                                data-anim-x="80" data-anim-start="left right+=100px">


                                <picture>
                                    <source srcset="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" media="(min-width: 1024px)" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" media="(min-width: 768px)" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" type="image/webp">
                                    <source srcset="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" media="(min-width: 1024px)">
                                    <source srcset="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" media="(min-width: 768px)">
                                    <img src="<?= getMediaPath('home_carousel_9') ?>" data-media-key="home_carousel_9" class="w-full h-full object-contain u-mask-image "
                                        alt="Additional sign pic" width="200" height="200" loading="lazy">
                                </picture>
                            </figure>
                        </div>
                    </div>
                    <div class="relative z-0 w-full h-screen flex flex-wrap md:items-center py-24 md:pt-32 gs-carousel text-white bg-black hidden md:flex"
                        data-key="seven">
                        <div class="px-6 md:px-4 md:w-1/2 z-10">
                            <div class="space-y-4 md:max-w-[32rem] md:mx-auto">
                                <h3 class="h2 text-white text-balance">Guided by the Panchakoshas</h3>
                                <div class="prose text-base font-normal md:max-w-md">
                                    <p>It’s our job as teachers to cultivate the innate curiosity and creativity in our
                                        children. Our learning compass – the Panchakoshas – guide us.</p>
                                </div>
                                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                                    <a class="c-button" href="#why-choose-us/our-ethos">Read more</a>
                                </div>
                            </div>
                        </div>


                        <picture>
                            <source srcset="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10" media="(min-width: 1024px)" type="image/webp">
                            <source srcset="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10" media="(min-width: 768px)" type="image/webp">
                            <source srcset="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10" type="image/webp">
                            <source srcset="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10" media="(min-width: 1024px)">
                            <source srcset="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10" media="(min-width: 768px)">
                            <img src="<?= getMediaPath('home_carousel_10') ?>" data-media-key="home_carousel_10"
                                class="absolute inset-0 w-full h-full object-cover opacity-50 " alt="Image background"
                                width="400" height="800" loading="lazy">
                        </picture>
                        <div
                            class="hidden md:flex absolute left-1/2 w-1/2 pr-8 max-w-xl top-1/2 -translate-y-1/2 flex-col gap-12">
                            <div class="flex flex-wrap gap-4 lg:gap-6">
                                <div class="w-20 lg:w-40 shrink-0 grow-0 mr-12 p-1 u-mask-image bg-white -rotate-6 z-10 gs-animate"
                                    data-anim-x="100" data-anim-start="left right">


                                    <picture>
                                        <source srcset="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" media="(min-width: 1024px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" media="(min-width: 768px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" media="(min-width: 1024px)">
                                        <source srcset="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" media="(min-width: 768px)">
                                        <img src="<?= getMediaPath('home_carousel_11') ?>" data-media-key="home_carousel_11" class="w-full " alt="Learningcompass"
                                            width="150" height="150" loading="lazy">
                                    </picture>
                                </div>
                                <div class="flex-1 grid grid-cols-4 gap-4 lg:gap-6 gs-animate" data-anim-x="100"
                                    data-anim-start="left right">
                                    <!--
  <img
    src="assets/images/decorations/badges/Asset-16.svg"
    class="w-full "
    alt="Asset 16"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-11.svg"
    class="w-full "
    alt="Asset 11"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-13.svg"
    class="w-full "
    alt="Asset 13"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-14.svg"
    class="w-full "
    alt="Asset 14"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-17.svg"
    class="w-full "
    alt="Asset 17"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-18.svg"
    class="w-full "
    alt="Asset 18"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-19.svg"
    class="w-full "
    alt="Asset 19"
    width="80"
    height="80"
    loading="lazy"    >
	<img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 10"
    width="80"
    height="80"
    loading="lazy">
                                            

  <img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 4"
    width="80"
    height="80"
    loading="lazy">
                                            

  <img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 6"
    width="80"
    height="80"
    loading="lazy">
                                            

  <img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 5"
    width="80"
    height="80"
    loading="lazy">
                                            

  <img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 7"
    width="80"
    height="80"
    loading="lazy">
                                            

  <img
    src="<?= getMediaPath('home_decoration_svg_6') ?>" data-media-key="home_decoration_svg_6"
    class="w-full "
    alt="Asset 8"
    width="80"
    height="80"
    loading="lazy">-->
                                </div>
                            </div>
                            <div class="flex flex-wrap gap-4 lg:gap-6">
                                <div class="w-20 lg:w-40 shrink-0 grow-0 mr-12 p-1 u-mask-image bg-white -rotate-6 z-10 gs-animate"
                                    data-anim-x="100" data-anim-start="left right">


                                    <picture>
                                        <source srcset="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" media="(min-width: 1024px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" media="(min-width: 768px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" media="(min-width: 1024px)">
                                        <source srcset="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" media="(min-width: 768px)">
                                        <img src="<?= getMediaPath('home_carousel_12') ?>" data-media-key="home_carousel_12" class="w-full " alt="Learningpowers" width="150"
                                            height="150" loading="lazy">
                                    </picture>
                                </div>
                                <div class="flex-1 grid grid-cols-4 gap-4 lg:gap-6 gs-animate" data-anim-x="100"
                                    data-anim-start="left right">


                                    <!-- <img
    src="assets/images/decorations/badges/Asset-10.svg"
    class="w-full "
    alt="Asset 10"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-4.svg"
    class="w-full "
    alt="Asset 4"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-6.svg"
    class="w-full "
    alt="Asset 6"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-5.svg"
    class="w-full "
    alt="Asset 5"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-7.svg"
    class="w-full "
    alt="Asset 7"
    width="80"
    height="80"
    loading="lazy"    >
                                            

  <img
    src="assets/images/decorations/badges/Asset-8.svg"
    class="w-full "
    alt="Asset 8"
    width="80"
    height="80"
    loading="lazy"    >-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="relative z-0 w-full h-screen flex flex-wrap md:items-center py-24 md:pt-32 gs-carousel  hidden md:flex"
                        data-key="default">
                        <div class="px-6 md:px-4 md:w-1/2 z-10">
                            <div class="space-y-4 md:max-w-[32rem] md:mx-auto">
                                <h3 class="h1 text-primary text-balance">The Year 7&amp;8 experience</h3>
                                <div class="prose text-base font-normal md:max-w-md">
                                    <p>Building dens, experimenting in science labs, and discovering passions are all
                                        part of the Year 7 &amp; 8 experience at Midas touch School.</p>
                                </div>
                                <div class="flex flex-wrap items-center gap-4 lg:gap-6">
                                    <a class="c-button" href="#our-school/main-school/years-7-8-2">Read more</a>
                                </div>
                            </div>
                        </div>
                        <div
                            class="hidden md:flex absolute left-[40%] w-1/2 max-w-3xl top-1/2 -translate-y-1/2 flex-col">
                            <figure role="none"
                                class="w-3/4 ml-auto mr-8 p-0.5 u-mask-image bg-grey rotate-6 -mb-24 gs-animate"
                                data-anim-x="80" data-anim-rotate="-6" data-anim-start="left right">
                                <div class="bg-white p-1 u-mask-image">

                                    <div class="  ">
                                        <figure role="presentation" class="">


                                            <picture>
                                                <source srcset="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13" media="(min-width: 1024px)"
                                                    type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13" media="(min-width: 768px)"
                                                    type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13" type="image/webp">
                                                <source srcset="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13" media="(min-width: 1024px)">
                                                <source srcset="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13" media="(min-width: 768px)">
                                                <img src="<?= getMediaPath('home_carousel_13') ?>" data-media-key="home_carousel_13"
                                                    class="w-full h-full object-cover aspect-[8/5] u-mask-image "
                                                    alt="Home78 1" width="420" height="236" loading="lazy">
                                            </picture>
                                        </figure>
                                        <a href="https://vimeo.com/1032255523"
                                            class="absolute top-1/2 -translate-y-1/2 left-1/2 -translate-x-1/2  grid place-content-center z-20"
                                            target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                            @click.prevent="$dispatch('open-lightbox', '<iframe src=\'<?= getVideoLink('home_hero_youtube', 'embed') ?>\' class=\'block aspect-video\' width=\'100%\' allowfullscreen></iframe>')">
                                            <span class="c-button-play-sm"></span>
                                        </a>
                                    </div>

                                </div>
                            </figure>
                            <figure role="none" class="w-1/2 ml-auto p-0.5 u-mask-image bg-grey -rotate-6 gs-animate"
                                data-anim-x="80" data-anim-rotate="6" data-anim-start="left right">
                                <div class="bg-white p-1 u-mask-image">


                                    <picture>
                                        <source srcset="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14" media="(min-width: 1024px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14" media="(min-width: 768px)"
                                            type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14" type="image/webp">
                                        <source srcset="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14" media="(min-width: 1024px)">
                                        <source srcset="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14" media="(min-width: 768px)">
                                        <img src="<?= getMediaPath('home_carousel_14') ?>" data-media-key="home_carousel_14"
                                            class="w-full h-full object-contain u-mask-image " alt="Home78 2"
                                            width="200" height="200" loading="lazy">
                                    </picture>
                                </div>
                            </figure>
                        </div>
                    </div>
                </div>
                <span
                    class="block w-full h-[40px] md:h-[130px] bg-secondary u-mask-clip-1 absolute inset-x-0 -bottom-px"></span>
            </section>
        </div>
        <section data-block="homeArticles" class="relative gs-section" data-gs-type="items" x-data="swiper()"
            data-slides="2" data-slides-sm="1" data-slides-md="1" data-slides-group="2" data-space="44">
            <div class="bg-secondary text-white relative pt-12 pb-16 lg:pb-32">
                <span
                    class="hidden md:block bg-secondary absolute left-0 w-1/2 top-0 bottom-12 z-10 pointer-events-none"></span>
                <div class="container relative">
                    <div class="gap-y-4 text-center flex flex-col w-full items-center relative z-10">
                        <h2 class="h2 text-line grow-0">Announcements</h2>
                        <div class="prose text-base font-normal max-w-2xl mx-auto">
                            <p>MidasTouch is about so much more than simply what happens inside the classroom, and this
                                is the perfect place to discover just what else we get up to.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-20 overflow-hidden">
                    <div class="container space-y-12">
                        <div class="flex flex-wrap gap-y-12">
                            <div class="bg-secondary z-10 relative flex-1 md:pr-16 gs-animate" data-anim-x="-50"
                                data-anim-scrub="1" data-anim-start="top bottom">
                                <a href="#articles/navigating-changes-to-vat-on-school-fees"
                                    class="block relative lg:aspect-square bg-secondary p-8 pb-12">
                                    <figure role="none" class="absolute inset-0 rotate-2">


                                        <picture>
                                            <source srcset="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4" media="(min-width: 1024px)"
                                                type="image/webp">
                                            <source srcset="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4" media="(min-width: 768px)"
                                                type="image/webp">
                                            <source srcset="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4" type="image/webp">
                                            <source srcset="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4" media="(min-width: 1024px)">
                                            <source srcset="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4" media="(min-width: 768px)">
                                            <img src="<?= getMediaPath('home_announcements_4') ?>" data-media-key="home_announcements_4"
                                                class="w-full h-full object-cover opacity-40 u-mask-image "
                                                alt="Walstead230321 133" width="400" height="400" loading="lazy">
                                        </picture>
                                    </figure>
                                    <div class="relative flex flex-col justify-end items-start h-full">
                                        <p class="h5 mb-4">Main school</p>
                                        <h3 class="h2 mb-6">Gazing at the cosmos</h3>
                                        <p class="text-base font-normal mb-4">Enhances understanding of scientific
                                            concepts</p>
                                        <span class="inline-block c-button-text">Find out more</span>
                                    </div>
                                </a>
                            </div>
                            <div class="w-full md:w-1/2 swiper overflow-visible z-0 gs-animate" data-anim-x="50"
                                data-anim-scrub="1" data-anim-start="top bottom">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/robyns-nest" class="block group -rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_15') ?>" data-media-key="home_announcements_15" class="w-full u-mask-image "
                                                        alt="Walstead270924 0004" width="411" height="262"
                                                        loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Main school</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a href="#articles/robyns-nest">Where
                                                        curiosity meets discovery</a></h3>
                                                <p class="text-base font-normal mb-4">practical learning in our lab
                                                    helps student develop critical thinking, problem solving and
                                                    collaboration skills. prepares students for real world application
                                                </p>
                                                <a href="#" class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/we-are-joining-ardingly-college-2"
                                                class="block group rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_33') ?>" data-media-key="home_announcements_33" class="w-full u-mask-image "
                                                        alt="Laura Lamont ACPS Ben Figgis AC Chris Calvey GW"
                                                        width="411" height="262" loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Main school</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/we-are-joining-ardingly-college-2">The Midas touch school of excellence</a></h3>
                                                <p class="text-base font-normal mb-4">Midas Touch School of excellence
                                                    </p>
                                                <a href="#"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#" class="block group -rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_17') ?>" data-media-key="home_announcements_17" class="w-full u-mask-image "
                                                        alt="Explorer" width="411" height="262" loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">The Explorer</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/explorer-summer-term-2024">The Explorer
                                                        newsletter Summer 24</a></h3>
                                                <p class="text-base font-normal mb-4">Read all about it! News from the
                                                    Summer term 2024</p>
                                                <a href="#articles/explorer-summer-term-2024" class="c-button-text">Find
                                                    out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/the-value-of-a-prep-school-education"
                                                class="block group rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_18') ?>" data-media-key="home_announcements_18" class="w-full u-mask-image "
                                                        alt="Greatwalstead060722 00121" width="411" height="262"
                                                        loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Main school</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/the-value-of-a-prep-school-education">UNLOCKING
                                                        POTENTIAL</a></h3>
                                                <p class="text-base font-normal mb-4">Learn by doing not just listening.
                                                    Experience is the best teacher. "Hands on learning : where
                                                    theory meets reality"</p>
                                                <a href="#articles/the-value-of-a-prep-school-education"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/navigating-the-college-admissions-progress-a-guide-for-parents-and-students"
                                                class="block group -rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_19') ?>" data-media-key="home_announcements_19" class="w-full u-mask-image "
                                                        alt="Walstead groups 5" width="411" height="262" loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Main school</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/navigating-the-college-admissions-progress-a-guide-for-parents-and-students">navigating
                                                        school admissions</a></h3>
                                                <p class="text-base font-normal mb-4">"where every child
                                                    finds their place" your childs journey begins here Take a first step
                                                    towards a brighter future : Schedule a TOUR or APPLY  ONLINE</p>
                                                <a href="#articles/navigating-the-college-admissions-progress-a-guide-for-parents-and-students"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/nurturing-future-leaders-leadership-development-programmes-at-great-walstead-school"
                                                class="block group rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_20') ?>" data-media-key="home_announcements_20" class="w-full u-mask-image "
                                                        alt="Walstead270521 edit1 111" width="411" height="262"
                                                        loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Main school</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/nurturing-future-leaders-leadership-development-programmes-at-great-walstead-school">Nurturing
                                                        future leaders</a></h3>
                                                <p class="text-base font-normal mb-4">Page by Page ,Story by Story
                                                    Reading is the ultimate superpower for young minds!!</p>
                                                <a href="#articles/nurturing-future-leaders-leadership-development-programmes-at-great-walstead-school"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#"
                                                class="block group -rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_21') ?>" data-media-key="home_announcements_21" class="w-full u-mask-image "
                                                        alt="Greatwalstead060722 00122" width="411" height="262"
                                                        loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">Pre-prep</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/messages-from-our-reception-team-at-great-walstead-school">Messages
                                                        from our Reception Team</a></h3>
                                                <p class="text-base font-normal mb-4">schedule a tour or meeting with
                                                    our team to learn more about our school, we look forward to
                                                    welcoming your child to our school community</p>
                                                <a href="#"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/explorer-spring-term-2024" class="block group rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_22') ?>" data-media-key="home_announcements_22" class="w-full u-mask-image "
                                                        alt="Explorer" width="411" height="262" loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">The Explorer</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/explorer-spring-term-2024">INNOVATIVE
                                                        APPROACH</a></h3>
                                                <p class="text-base font-normal mb-4">Learning that's interactive,
                                                    immersive , and fun. Innovative education for a changing world
                                                    through real-world applications</p>
                                                <a href="#articles/explorer-spring-term-2024" class="c-button-text">Find
                                                    out more</a>
                                            </div>
                                        </article>
                                    </div>
                                    <div class="swiper-slide">

                                        <article class="">
                                            <a href="#articles/explorer-autumn-term-2023-2"
                                                class="block group -rotate-2">


                                                <picture>
                                                    <source srcset="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" media="(min-width: 1024px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" media="(min-width: 768px)"
                                                        type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" type="image/webp">
                                                    <source srcset="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" media="(min-width: 1024px)">
                                                    <source srcset="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" media="(min-width: 768px)">
                                                    <img src="<?= getMediaPath('home_announcements_23') ?>" data-media-key="home_announcements_23" class="w-full u-mask-image "
                                                        alt="Explorer" width="411" height="262" loading="lazy">
                                                </picture>
                                            </a>
                                            <div class="px-1 2xl:px-2 mt-8">
                                                <p class="h5 mb-4">The Explorer</p>
                                                <h3 class="h2 mb-3 md:mb-6"><a
                                                        href="#articles/explorer-autumn-term-2023-2">Math magic </a>
                                                </h3>
                                                <p class="text-base font-normal mb-4">Our kids conquer the
                                                    multiplication table and unlock a world of problem solving !!</p>
                                                <a href="#articles/explorer-autumn-term-2023-2"
                                                    class="c-button-text">Find out more</a>
                                            </div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center md:grid md:grid-cols-3 gap-4 items-center relative z-10">
                            <div class="flex gap-4 items-center">
                                <button role="button"
                                    class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                    aria-label="Previous item" data-swiper-navigation-prev>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 37 33">
                                        <path id="xkboyzqtac-Vector" fill="currentColor"
                                            d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                        </path>
                                        <path id="xkboyzqtac-Vector_2" fill="currentColor"
                                            d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                        </path>
                                    </svg>

                                </button>
                                <button role="button"
                                    class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                    aria-label="Next item" data-swiper-navigation-next>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 37 33">
                                        <path id="lprsfbfqoo-Vector" fill="currentColor"
                                            d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                        </path>
                                        <path id="lprsfbfqoo-Vector_2" fill="currentColor"
                                            d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                        </path>
                                    </svg>

                                </button>
                            </div>
                            <div class="hidden md:flex col-span-2 md:col-span-1 carousel-pagination justify-center"
                                data-swiper-pagination></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="relative gs-section" data-gs-type="items">
            <span class="absolute inset-x-0 top-0 -translate-y-full h-6 u-mask-footer bg-primary"></span>
            <img src="images/svg/drum.svg" alt="decoration"
                class="hidden md:block w-48 h-56 object-contain absolute right-20 -top-48 z-10" loading="lazy">
            <div class="absolute -left-12 -top-6 w-1/4 z-10">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 382 130">
                    <path stroke="#fff" stroke-linecap="round" stroke-width="6"
                        d="M191.716 108.038c-80.145 11.186-249.205 29.74-165.374 9.893 83.831-19.848 287.539-71.68 245.957-68.163-41.582 3.517-193.916 12.773-252.546 20.956-58.63 8.183 233.897-51.937 358.537-67.618">
                </svg>
            </div>
            <div class="hidden md:block absolute left-[50%] bottom-12 w-40 z-10 origin-right gs-animate"
                data-anim-scale="0" data-anim-start="top bottom" data-anim-scrub="1">
                <img src="images/home/arrow-left.svg?id=6f0249ffedae4b028e35113567404535" alt="Arrow" class="w-full"
                    loading="lazy">
            </div>


            <section data-block="signpost" class="relative overflow-hidden bg-primary text-white py-16 lg:py-32 ">
                <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                    <div class="relative order-2   pb-20 ">
                        <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150" data-anim-scrub="1"
                            data-anim-start="top bottom">
                            <figure class="w-44 h-32 md:-mt-16 mb-2" role="none">


                                <img src="images/svg/pot.svg" class="w-full h-full object-contain object-left-bottom "
                                    alt="GWS reading girl" width="200" height="200" loading="lazy">
                            </figure>

                            <h3 class="h2 text-line">Hear from our Midas Touch families</h3>
                            <div class="mt-4 prose text-base font-normal">
                                <p>children enjoy coming to school and learn, grow and explore</p>
                            </div>
                            <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                <a href="<?= getVideoLink('home_hero_youtube') ?>"
                                    class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                    aria-label="opens new tab" x-data="{}"
                                    @click.prevent="$dispatch('open-lightbox', '<iframe src=\'<?= getVideoLink('home_hero_youtube', 'embed') ?>\' class=\'block aspect-video\' width=\'100%\' allowfullscreen></iframe>')">

                                    <span class="c-button c-button--icon group">
                                        <i class="w-4 text-primary fill-current group-hover:text-white transition-colors duration-300"
                                            role="presentation">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                fill="currentColor">
                                                <path
                                                    d="M4.5 4.5a3 3 0 00-3 3v9a3 3 0 003 3h8.25a3 3 0 003-3v-9a3 3 0 00-3-3H4.5zM19.94 18.75l-2.69-2.69V7.94l2.69-2.69c.944-.945 2.56-.276 2.56 1.06v11.38c0 1.336-1.616 2.005-2.56 1.06z">
                                                </path>
                                            </svg>
                                        </i>
                                        Watch this video
                                    </span>
                                </a>

                                <a class="c-button" href="#why-choose-us">Why choose us</a>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 gs-animate" data-anim-x="-150" data-anim-scrub="1" data-anim-start="top bottom">
                        <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                            <div class="-rotate-6  u-mask-border">
                                <div class="relative u-mask-image" x-data="{playing: true}">
                                    <span
                                        class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                    <video x-ref="video" data-src="<?= getMediaPath('home_video_6') ?>" data-media-key="home_video_6" muted loop
                                        role="presentation"
                                        class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                    <button
                                        class="absolute bottom-4 right-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                        @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                        aria-label="Pause video">
                                        <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                class="clvvsljotx-fill-current">
                                                <path d="M0 0h2.571v13.712H0z" data-name="Rectangle 77"></path>
                                                <path d="M7 0h2.571v13.712H7z" data-name="Rectangle 78"></path>
                                            </svg>
                                        </i>
                                        <i x-show="!playing" class="block w-2.5 ml-1 fill-current"><svg
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14">
                                                <path d="M12 7 0 14V0Z" data-name="Polygon 2"></path>
                                            </svg>
                                        </i>
                                    </button>
                                </div>
                                <a href="<?= getVideoLink('home_head_carousel_youtube') ?>"
                                    class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                    target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                    @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getVideoLink('home_head_carousel_youtube', 'embed') ?>&amp;autoplay=1'
        class='block aspect-video w-full h-full'
        title='YouTube video player'
        frameborder='0'
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin'
        allowfullscreen>
      </iframe>
    `)">
                                    <span class="c-button-play"></span>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="relative">
            <span class="absolute inset-x-0 top-px -translate-y-full h-6 u-mask-footer bg-white"></span>
            <div class="absolute left-2 md:left-12 -top-2 md:top-4 w-10 md:w-20 -rotate-12 z-10">
                <img src="images/svg/diamond.svg?id=24efb395cf46b541cd68e3c679219937" alt="Diamond"
                    class="w-full h-auto" loading="lazy" width="48" height="53">
            </div>
            <div class="absolute right-2 md:right-12 top-2 md:top-16 w-10 md:w-20 z-10">
                <img src="images/svg/heart.svg?id=b0ec6bcf6f0f0d0f03c76d83c2561ba1" alt="Heart" class="w-full h-auto"
                    loading="lazy" width="40" height="35">
            </div>
            <section data-block="instagram" data-slides="4" data-slides-group="4" data-slides-md="3" data-slides-sm="2"
                data-space="32" class="py-16 lg:py-32">

                <div class="container space-y-12">
                    <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                        <h2 class="h2 text-line grow-0">Follow us</h2>
                        <div class="prose text-base font-normal max-w-2xl mx-auto">
                            <p></p>
                            <p>From Silambam to poetry and everything in between, get the latest scoop from our
                                Instagram.</p>
                            <p>
                                <a href="#" target="_blank" rel="noreferrer noopener"></a>
                            </p>
                            <p></p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 gap-x-4 gap-y-8 items-center">
                        <div class="order-last md:order-2 flex justify-center">
                            <a href="https://www.instagram.com/midastouchschoolofexcellence/"
                                class="c-button c-button--icon group" target="_blank" rel="noopener">
                                <i class="w-4 text-primary fill-current group-hover:text-white transition-colors duration-300"
                                    role="presentation"><svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 30.17 30.17">
                                        <g transform="translate(0 0)">
                                            <path
                                                d="M19.164,6.8c4.028,0,4.5.015,6.1.088a8.348,8.348,0,0,1,2.8.519,4.995,4.995,0,0,1,2.863,2.863,8.346,8.346,0,0,1,.519,2.8c.073,1.591.088,2.068.088,6.1s-.015,4.5-.088,6.1a8.347,8.347,0,0,1-.519,2.8,5,5,0,0,1-2.863,2.863,8.349,8.349,0,0,1-2.8.519c-1.59.073-2.067.088-6.1.088s-4.505-.015-6.1-.088a8.349,8.349,0,0,1-2.8-.519A5,5,0,0,1,7.4,28.06a8.349,8.349,0,0,1-.519-2.8c-.073-1.591-.088-2.068-.088-6.1s.015-4.5.088-6.1a8.348,8.348,0,0,1,.519-2.8A5,5,0,0,1,10.267,7.4a8.347,8.347,0,0,1,2.8-.519c1.591-.073,2.068-.088,6.1-.088m0-2.718c-4.1,0-4.611.017-6.219.091a11.072,11.072,0,0,0-3.662.7A7.714,7.714,0,0,0,4.871,9.283a11.072,11.072,0,0,0-.7,3.662c-.073,1.609-.091,2.123-.091,6.219s.017,4.61.091,6.219a11.072,11.072,0,0,0,.7,3.662,7.714,7.714,0,0,0,4.412,4.412,11.073,11.073,0,0,0,3.662.7c1.609.073,2.123.091,6.219.091s4.61-.017,6.219-.091a11.073,11.073,0,0,0,3.662-.7,7.714,7.714,0,0,0,4.412-4.412,11.073,11.073,0,0,0,.7-3.662c.073-1.609.091-2.123.091-6.219s-.017-4.611-.091-6.219a11.073,11.073,0,0,0-.7-3.662,7.714,7.714,0,0,0-4.412-4.412,11.072,11.072,0,0,0-3.662-.7c-1.609-.073-2.123-.091-6.219-.091Z"
                                                transform="translate(-4.079 -4.079)"></path>
                                            <path
                                                d="M134.381,126.635a7.746,7.746,0,1,0,7.746,7.746A7.746,7.746,0,0,0,134.381,126.635Zm0,12.775a5.028,5.028,0,1,1,5.028-5.028A5.028,5.028,0,0,1,134.381,139.41Z"
                                                transform="translate(-119.296 -119.296)"></path>
                                            <circle cx="1.81" cy="1.81" r="1.81"
                                                transform="translate(20.577 7.033) rotate(-45)"></circle>
                                        </g>
                                    </svg>
                                </i> Follow on Instagram
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <section data-block="divide" class="overflow-hidden">
            <figure class="min-w-full w-screen-2xl">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1320 20">
                    <path fill="none" fill-rule="evenodd" stroke="#DDD"
                        d="M1319.749 17.595c-.737-.65-1.455-1.3-2.192-1.943-2.382-2.384-5.249-2.846-8.361-2.306-9.055-4.97-18.656-3.424-28.19-2.579-13.88-2.911-27.84-2.04-41.806-1.079-3.327.156-6.7-.962-9.982.37-12.21-1.079-24.433-2.151-36.686-.806-.9.188-1.811.383-2.707.578-1.1-.474-2.216-1.4-3.284-1.351-19.386.949-38.816-2.053-58.178.7l-7.25-1.033c-3.886-.169-7.815-1.215-11.615.52-.933.006-1.878.019-2.805.026-12.578-3.352-25.335-.942-38.006-1.4a5.675 5.675 0 0 0-5.783.689l-1.486.078c-1.283-.247-2.578-.487-3.861-.734-.571-.442-1.191-1.325-1.719-1.26-18.527 2.267-36.938-1.9-55.372-1.338-14.709.455-29.417-2.248-44.071.435l-3.782.117c-9.288-3.794-18.92-2.365-28.472-2.157-.872 0-1.756 0-2.634-.006a7.409 7.409 0 0 0-6.028.474c-.694-.019-1.381-.032-2.081-.052a109.752 109.752 0 0 0-30.044-.559c-.951-.149-1.915-.305-2.873-.455-3.383-1.7-6.771-.877-10.16-.032-5.255.3-10.559-1.429-15.783.416a7.6 7.6 0 0 0-6.034.351c-1.412-.052-2.842-.1-4.26-.162-8.772-2.04-17.606-1.709-26.465-.8h-5.857c-10.688-1.2-21.363-2.164-32.057 0h-2.99c-10.663-2.807-21.326-.227-31.99.039-2.346-1.263-4.785-.905-7.238-.464a126.639 126.639 0 0 0-32.014.624c-1.424.052-2.861.1-4.279.143-3.953.11-7.888.214-11.836.318-3.376-1.559-6.642-.832-9.9.455a8.635 8.635 0 0 0-7.5.221c-1.222-.006-2.437-.006-3.653-.013-2.185-2.2-5-1.735-7.557-1.683-8.404.169-16.808.502-25.212 1-14.046.825-28.147-1.247-42.162.988-1.449.026-2.893.05-4.334.071a7.324 7.324 0 0 0-7.342.143c-1.455.117-2.9.24-4.359.357-3.855 1.813-7.839-2.034-11.682.279-.774-.026-1.547-.045-2.327-.065-1.7-1.949-3.4-2.579-5.108-.006-.657.078-1.308.156-1.964.24-4.484-3.441-9.291-1.341-14.005-.941a3.877 3.877 0 0 0-4.027.24l-9.1.234a6.532 6.532 0 0 0-5.66-1.1c-1.541-1.092-3.045-.682-4.537.149a6.056 6.056 0 0 0-5.562.286 4.05 4.05 0 0 0-4.549.11 75.885 75.885 0 0 0-20.228.559c-19.45-2.414-38.93-1.205-58.408-.406-1.921 0-3.843-.006-5.771-.006-3-1.2-5.906-.429-8.809.461-1.909.006-3.818.006-5.728.013a1.913 1.913 0 0 0-3.063.1c-1.393.032-2.8.065-4.193.1-9.755-2.293-19.571-1.319-29.387-.637l-4.119.117a6.566 6.566 0 0 0-6.028.481l-7.373-.253c-3.812-2.125-7.631-1.54-11.431.032-2.431-.039-4.862-.071-7.293-.11-3.468-.539-6.931-1.033-10.375.143-1.682-.942-3.315-.409-4.954.169-4.985-3.164-10.3-.871-15.47-1.072-.97-.143-1.94-.292-2.91-.435-3.818-2.228-7.8-.565-11.7-.526l-8.742-.1c-.933-1.39-1.811-1.338-2.658.084-3.413.013-6.876-.422-10.166.981-8.22.273-16.649-2.04-24.568 2.157-1.166.11-2.333.214-3.5.318-4.168-2.69-8.57-.91-12.892-.767l-2.769.156c-1.179-.793-2.155-.682-2.861.708-.945.247-1.9.487-2.848.734-8.146-.741-16.262-1.377-23.911 2.7a122 122 0 0 0-22.9.24c-1.08-.442-2.161-1.28-3.235-1.267-13.462.175-26.937.305-39.964 4.678-2.977-.2-5.961-.63-8.834.65-8.815-1.793-17.655-1.26-26.5-.331a8.714 8.714 0 0 0-7.017.273c-3.475-.214-6.968-.858-10.393.383-5.279-.448-10.583-1.241-15.8.6-2.726-.533-5.046.9-7.5 1.709-4.819-1.91-9.669-1.28-14.525-.188-.915-1.117-1.829-1.286-2.769-.045-4.3.78-8.809-.572-12.99 1.423l-10.454.39a14.728 14.728 0 0 0-9.914.39 2 2 0 0 0-1.663-.25 2.065 2.065 0 0 0-1.28 1.108">
                    </path>
                </svg>

            </figure>
        </section>


        <section data-block="gallery" class=" py-12 lg:py-16 u-mask-bg" x-data="swiper()" data-slides="3"
            data-slides-group="3" data-space="32">
            <div class="container space-y-12">
                <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                    <h2 class="h2 text-line grow-0">Year in numbers</h2>
                    <div class="prose text-base font-normal max-w-2xl mx-auto">
                        <p>We’ll let the numbers tell the story.</p>
                    </div>
                </div>
                <div class="swiper ">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_24') ?>" data-media-key="home_gallery_24" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 10" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_25') ?>" data-media-key="home_gallery_25" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 09" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_26') ?>" data-media-key="home_gallery_26" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 04" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_27') ?>" data-media-key="home_gallery_27" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 05" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_28') ?>" data-media-key="home_gallery_28" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_29') ?>" data-media-key="home_gallery_29" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 06" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_30') ?>" data-media-key="home_gallery_30" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 07" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_31') ?>" data-media-key="home_gallery_31" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 02" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                        <div class="swiper-slide h-auto">


                            <picture>
                                <source srcset="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" media="(min-width: 1024px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" media="(min-width: 768px)" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" type="image/webp">
                                <source srcset="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" media="(min-width: 1024px)">
                                <source srcset="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" media="(min-width: 768px)">
                                <img src="<?= getMediaPath('home_gallery_32') ?>" data-media-key="home_gallery_32" class="w-full h-full object-cover u-mask-image "
                                    alt="Vector Smart Object 08" width="400" height="" loading="lazy">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 items-center">
                    <div class="order-last md:order-first flex justify-center md:block">
                    </div>
                    <div class="hidden md:flex carousel-pagination md:justify-center" data-swiper-pagination></div>
                    <div class="flex justify-center md:justify-end md:pr-8">
                        <div class="flex gap-4 items-center">
                            <button role="button"
                                class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                aria-label="Previous item" data-swiper-navigation-prev>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 37 33">
                                    <path id="ovwgwkecmt-Vector" fill="currentColor"
                                        d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                    </path>
                                    <path id="ovwgwkecmt-Vector_2" fill="currentColor"
                                        d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                    </path>
                                </svg>

                            </button>
                            <button role="button"
                                class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                aria-label="Next item" data-swiper-navigation-next>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 37 33">
                                    <path id="hhhjahydoq-Vector" fill="currentColor"
                                        d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                    </path>
                                    <path id="hhhjahydoq-Vector_2" fill="currentColor"
                                        d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                    </path>
                                </svg>

                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php require_once("includes/enquiry.php"); ?>
    <?php require_once("includes/footer.php"); ?>
    <div class="c-button-chat origin-right animate-scale-bounce js-chat-btn hidden"
        style="--delay: 2s; --duration: 2s;">
        <a href="javascript:void(Tawk_API.toggle())"><span class="sr-only">Live Chat</span></a>
    </div>
    <div class="c-button-visit origin-right animate-scale-bounce" style="--delay: 1.5s; --duration: 2s;">
        <a href="#">
            <span class="sr-only">Book a visit</span>
        </a>
    </div>

    <div class="fixed inset-0 bg-white bg-opacity-90 p-10 md:px-24 flex items-center justify-center z-50"
        x-data="{open: false, content: ''}" @open-lightbox.window="open = true; content = $event.detail" x-show="open"
        x-cloak x-transition.opacity.duration.300ms>
        <div x-html="content" class="w-full"></div>
        <button class="appearance-none absolute right-5 top-5" @click="open = false; content = ''">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <?php require_once("includes/scripts.php"); ?>