 <!doctype html>
 <html lang="en">

 <?php require_once("includes/head.php");  ?>
 <?php require_once("includes/media-helper.php"); ?>

 <body class="font-body text-base font-light lg:text-md text-secondary antialiased">
     <a href="#content" role="button" aria-label="Skip to content"></a>
     <?php require_once("includes/header.php");  ?>
     <main class="" id="content">
         <section data-block="hero" class="h-screen" data-sal="fade">
             <main class="" id="content">
                 <section data-block="hero" class="h-screen" data-sal="fade">
                     <main class="" id="content">
                         <section data-block="hero" class="h-screen" data-sal="fade">


                             <picture>
                                 <source srcset="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" media="(min-width: 1024px)" type="image/webp">
                                 <source srcset="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" media="(min-width: 768px)" type="image/webp">
                                 <source srcset="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" type="image/webp">
                                 <source srcset="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" media="(min-width: 1024px)">
                                 <source srcset="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" media="(min-width: 768px)">
                                 <img src="<?= getMediaPath('facilities_hero_10') ?>" data-media-key="facilities_hero_10" class="w-full h-full object-cover " alt="Middles2"
                                     width="562" height="945" loading="lazy">
                             </picture>
                         </section>
                         <article id="pageContent"
                             class="relative animate-slide-up -top-[var(--travel)] -mb-[var(--travel)]"
                             style="--delay: 800ms; --travel: 50vh; --hero-bg-h: 20vw;">
                             <span class="block h-[var(--hero-bg-h)] bg-no-repeat -mb-px"
                                 style="background-image: url(images/hero-top-one.svg?id=883ca72ae699e7ac9c62aa2e2648327e);background-size: 100%;"></span>
                             <div class="bg-white pt-8 lg:pt-0">
                                 <div class="container-sm relative mb-12 md:mb-16 lg:-top-12 2xl:-top-24 lg:mb-8 2xl:mb-0 animate-fade-in"
                                     style="--delay: 2s;">
                                     <nav class="mb-8">
                                         <ul class="flex gap-4 items-center h5">
                                             <li><a href="#">Why choose us</a></li>
                                             <li>
                                                 <i class="block w-2.5 text-primary"><svg
                                                         xmlns="http://www.w3.org/2000/svg" fill="none"
                                                         viewBox="0 0 10 14">
                                                         <path stroke="currentColor" stroke-linecap="round"
                                                             stroke-linejoin="round" stroke-width="3"
                                                             d="M1.5 12c.52-.37 1.035-.824 1.56-1.357a6.367 6.367 0 0 1 1.6-.836 6.19 6.19 0 0 0 1.546-.785c.45-.32.837-.658 1.158-1.01.313-.357.682-.76 1.136-1.083-.334-.315-.676-.67-1.02-.914l-.966-.69a7.973 7.973 0 0 1-.73-.584 16.705 16.705 0 0 0-1.117-.861C3.38 2.961 2.41 2.333 1.762 2">
                                                         </path>
                                                     </svg>
                                                 </i>
                                             </li>
                                             <li>
                                                 <span class="">World Class Facilities</span>
                                             </li>
                                         </ul>
                                     </nav>
                                     <h1 class="h1 text-primary text-balance">World Class Facilities</h1>
                                     <div class="prose mt-12">
                                         <p><strong>There’s a lot on offer here at Midas Touch and we want to make sure
                                                 our children get the chance to explore it all. We know that we’re very
                                                 lucky to have this incredible setting so we want to match it with the
                                                 facilities we provide.<br /><br /></strong>Students have access to
                                             state-of-the-art sports facilities, a dedicated performing arts centre,
                                             science and innovation labs and 265 acres of unspoilt woodland grounds.
                                             With all this and so much more, there’s the space and opportunity for every
                                             child to find their passions and flourish.</p>
                                     </div>
                                 </div>


                                 <section data-block="signpost"
                                     class="relative overflow-hidden bg-white py-12 lg:py-16 ">
                                     <div
                                         class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                                         <div class="relative order-2  pt-12 mb:pb-12 md:mb-24  ">
                                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150">

                                                 <h3 class="h2 text-line">Explore with us</h3>
                                                 <div class="mt-4 prose text-base font-normal">
                                                     <p>Come on a secret mission to discover the sparks of magic that
                                                         make Midas Touch so unique.</p>
                                                 </div>
                                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                                     <a href="<?= getMediaPath('facilities_youtube_1') ?>"
                                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank"
                                                         rel="noopener" aria-label="opens new tab" x-data="{}"
                                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('facilities_youtube_1_embed') ?>&amp;autoplay=1' 
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
                                                                 <svg xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 24 24" fill="currentColor">
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


                                                 <img src="<?= getMediaPath('facilities_gif_2') ?>" data-media-key="facilities_gif_2"
                                                     class="w-140 h-200 object-contain object-left-bottom "
                                                     alt="GWS reading boy" width="200" height="200" loading="lazy">
                                             </figure>
                                         </div>

                                         <div class="order-1 gs-animate" data-anim-x="-150">
                                             <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                                                 <div class="-rotate-6  u-mask-border">
                                                     <div class="relative u-mask-image" x-data="{playing: true}">
                                                         <span
                                                             class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                                         <video x-ref="video"
                                                             data-src="<?= getMediaPath('facilities_video_3') ?>" data-media-key="facilities_video_3" muted
                                                             loop role="presentation"
                                                             class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                                         <button
                                                             class="absolute bottom-4 right-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                                             @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                                             aria-label="Pause video">
                                                             <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 9.571 13.713"
                                                                     class="tmjoixkmmn-fill-current">
                                                                     <path d="M0 0h2.571v13.712H0z"
                                                                         data-name="Rectangle 77"></path>
                                                                     <path d="M7 0h2.571v13.712H7z"
                                                                         data-name="Rectangle 78"></path>
                                                                 </svg>
                                                             </i>
                                                             <i x-show="!playing"
                                                                 class="block w-2.5 ml-1 fill-current"><svg
                                                                     xmlns="http://www.w3.org/2000/svg"
                                                                     viewBox="0 0 12 14">
                                                                     <path d="M12 7 0 14V0Z" data-name="Polygon 2">
                                                                     </path>
                                                                 </svg>
                                                             </i>
                                                         </button>
                                                     </div>
                                                     <a href="<?= getMediaPath('facilities_youtube_2') ?>"
                                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                                         target="_blank" rel="noopener" aria-label="opens new tab"
                                                         x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('facilities_youtube_2_embed') ?>&amp;autoplay=1'
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

                                 <section data-block="gallery" class="bg-white my-16 lg:my-32 " x-data="swiper()"
                                     data-slides="1" data-loop="true" data-space="32">
                                     <div class="container space-y-12">
                                         <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                                             <h2 class="h2 text-line grow-0">School Map</h2>
                                             <div class="prose text-base font-normal max-w-2xl mx-auto">
                                                 <p>Make a splash in our swimming pool, cosy up for a story in our tree
                                                     house or play your heart out on court in our state-of-art sports
                                                     hall. Whatever you love, you’ll find the perfect place to practise.
                                                 </p>
                                             </div>
                                         </div>
                                         <div class="swiper u-mask-image">
                                             <div class="swiper-wrapper">
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21"
                                                             media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_21') ?>" data-media-key="facilities_gallery_21"
                                                             class="w-full h-full object-cover  " alt="Bluebell wall 01"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_23') ?>" data-media-key="facilities_gallery_23"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_23') ?>" data-media-key="facilities_gallery_23"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_23') ?>" data-media-key="facilities_gallery_23" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_23') ?>" data-media-key="facilities_gallery_23"
                                                             media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_23') ?>" data-media-key="facilities_gallery_23"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_23') ?>f"
                                                             class="w-full h-full object-cover  " alt="Bluebell wall 02"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 items-center">
                                             <div class="order-last md:order-first flex justify-center md:block">
                                             </div>
                                             <div class="hidden md:flex carousel-pagination md:justify-center"
                                                 data-swiper-pagination></div>
                                             <div class="flex justify-center md:justify-end md:pr-8">
                                                 <div class="flex gap-4 items-center">
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                                         aria-label="Previous item" data-swiper-navigation-prev>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="dviynqrfti-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="dviynqrfti-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                                         aria-label="Next item" data-swiper-navigation-next>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="nrdnluxyeg-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="nrdnluxyeg-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>

                                 <section data-block="gallery" class="bg-white my-16 lg:my-32 " x-data="swiper()"
                                     data-slides="1" data-loop="true" data-space="32">
                                     <div class="container space-y-12">
                                         <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                                             <h2 class="h2 text-line grow-0">Take a look around</h2>
                                             <div class="prose text-base font-normal max-w-2xl mx-auto">
                                                 <p>You’ve got to see it to believe it. Browse our image gallery to get
                                                     a snapshot of what’s on offer.</p>
                                             </div>
                                         </div>
                                         <div class="swiper u-mask-image">
                                             <div class="swiper-wrapper">
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_content_27') ?>" data-media-key="facilities_content_27"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_content_27') ?>" data-media-key="facilities_content_27"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_content_27') ?>" data-media-key="facilities_content_27" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_content_27') ?>" data-media-key="facilities_content_27"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_content_27') ?>" data-media-key="facilities_content_27"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front" width="400"
                                                             height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_28') ?>" data-media-key="facilities_gallery_28"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_28') ?>" data-media-key="facilities_gallery_28"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_28') ?>" data-media-key="facilities_gallery_28" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_28') ?>" data-media-key="facilities_gallery_28"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_28') ?>" data-media-key="facilities_gallery_28"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree "
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_30') ?>" data-media-key="facilities_gallery_30"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_30') ?>" data-media-key="facilities_gallery_30"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_30') ?>" data-media-key="facilities_gallery_30" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_30') ?>" data-media-key="facilities_gallery_30"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_30') ?>" data-media-key="facilities_gallery_30"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_31') ?>" data-media-key="facilities_gallery_31"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_31') ?>" data-media-key="facilities_gallery_31"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_31') ?>" data-media-key="facilities_gallery_31" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_31') ?>" data-media-key="facilities_gallery_31"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_31') ?>" data-media-key="facilities_gallery_31"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree "
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_33') ?>" data-media-key="facilities_gallery_33"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_33') ?>" data-media-key="facilities_gallery_33"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_33') ?>" data-media-key="facilities_gallery_33" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_33') ?>" data-media-key="facilities_gallery_33"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_33') ?>" data-media-key="facilities_gallery_33"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree "
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_16') ?>" data-media-key="facilities_gallery_16"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_16') ?>" data-media-key="facilities_gallery_16"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_16') ?>" data-media-key="facilities_gallery_16" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_16') ?>" data-media-key="facilities_gallery_16"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_16') ?>" data-media-key="facilities_gallery_16"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree "
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_17') ?>" data-media-key="facilities_gallery_17"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_17') ?>" data-media-key="facilities_gallery_17"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_17') ?>" data-media-key="facilities_gallery_17" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_17') ?>" data-media-key="facilities_gallery_17"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_17') ?>" data-media-key="facilities_gallery_17"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree "
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_18') ?>" data-media-key="facilities_gallery_18"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_18') ?>" data-media-key="facilities_gallery_18"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_18') ?>" data-media-key="facilities_gallery_18" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_18') ?>" data-media-key="facilities_gallery_18"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_18') ?>" data-media-key="facilities_gallery_18"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_19') ?>" data-media-key="facilities_gallery_19"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_19') ?>" data-media-key="facilities_gallery_19"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_19') ?>" data-media-key="facilities_gallery_19" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_19') ?>" data-media-key="facilities_gallery_19"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_19') ?>" data-media-key="facilities_gallery_19"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_13') ?>" data-media-key="facilities_gallery_13"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_13') ?>" data-media-key="facilities_gallery_13"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_13') ?>" data-media-key="facilities_gallery_13" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_13') ?>" data-media-key="facilities_gallery_13"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_13') ?>" data-media-key="facilities_gallery_13"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_9') ?>" data-media-key="facilities_gallery_9"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_9') ?>" data-media-key="facilities_gallery_9" media="(min-width: 768px)"
                                                             type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_9') ?>" data-media-key="facilities_gallery_9" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_9') ?>" data-media-key="facilities_gallery_9"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_9') ?>" data-media-key="facilities_gallery_9"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                                 <div class="swiper-slide h-auto">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6" media="(min-width: 768px)"
                                                             type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6" type="image/webp">
                                                         <source srcset="1980x900_" media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             class="w-full h-full object-cover  "
                                                             alt="Children jumping for joy in front of the oak tree"
                                                             width="400" height="" loading="lazy">
                                                     </picture>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 items-center">
                                             <div class="order-last md:order-first flex justify-center md:block">
                                             </div>
                                             <div class="hidden md:flex carousel-pagination md:justify-center"
                                                 data-swiper-pagination></div>
                                             <div class="flex justify-center md:justify-end md:pr-8">
                                                 <div class="flex gap-4 items-center">
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                                         aria-label="Previous item" data-swiper-navigation-prev>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="bfzpztwwqm-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="bfzpztwwqm-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                                         aria-label="Next item" data-swiper-navigation-next>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="tjvijpmdfz-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="tjvijpmdfz-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <section data-block="grid"
                                     class="relative overflow-hidden container space-y-12 bg-white pt-16 lg:pt-32 mb-16 lg:mb-32">


                                     <div
                                         class="grid grid-cols-1 md:grid-flow-dense items-center gap-y-16 md:grid-cols-2">
                                         <div class="relative " data-sal="slide-right">

                                             <div class="-rotate-2  ">
                                                 <figure role="presentation" class="absolute inset-px">


                                                     <picture>
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6" media="(min-width: 768px)"
                                                             type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6" type="image/webp">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('facilities_gallery_6') ?>" data-media-key="facilities_gallery_6"
                                                             class="w-full h-full object-cover " alt="Pre School"
                                                             width="420" height="236" loading="lazy">
                                                     </picture>
                                                 </figure>
                                                 <svg class="relative text-white" xmlns="http://www.w3.org/2000/svg"
                                                     fill="none" viewBox="0 0 902 583">
                                                     <path fill="currentColor" fill-rule="evenodd"
                                                         d="M902 0H0v583h902V0ZM284.218 459.533c4.725 4.614 7.699 8.244 8.989 10.89l-.187.27c7.601 9.103 16.196 18.363 25.649 27.656 9.45 9.227 19.369 16.989 29.749 23.089 4.18 2.465 7.819 2.915 10.992 1.541 3.172-1.375 6.132-3.135 8.747-5.276 2.747-2.146 5.1-4.277 7.26-6.268 2.161-1.992 3.913-2.653 5.329-1.789 3.439 2.036 6.648 4.933 9.619 8.499 3.04 3.627 6.922 6.893 11.774 9.726 4.18 2.466 8.852 4.057 14.016 4.775 5.164.716 10.452 1.232 15.867 1.61 7.004 2.289 13.902 5.239 20.689 8.72 6.788 3.48 13.292 6.446 19.502 8.633 6.079 2.194 11.655 3.355 16.733 3.55 5.01.131 9.001-2.195 11.839-7.041 1.603-2.759 2.329-6.074 2.379-9.823-.216-3.806.826-7.462 2.863-10.896l1.235-2.087c6.633 2.895 15.809 5.165 27.647 6.473a282.607 282.607 0 0 0 36.216 1.665c12.17-.281 23.387-1.38 33.447-3.42 10.061-2.039 15.826-4.435 17.496-7.197 2.037-3.433 2.073-9.22-.03-17.487-2.237-8.327-2.82-13.104-2.017-14.45 2.035-3.5 6.51-5.253 13.621-5.27 6.976-.077 14.76.273 23.153 1.061 8.326.724 16.236.939 23.463.523 7.226-.416 11.89-2.374 13.928-5.808 2.038-3.433 2.089-8.826.23-15.92-1.931-7.221-2.427-11.475-1.624-12.822 1.235-2.086 8.433-3.224 21.664-3.35 13.096-.187 27.646-.234 43.514-.266 15.87.033 30.726-.617 44.509-1.752 13.776-1.331 22.088-4.288 24.926-9.133 1.667-2.827-1.169-9.619-8.24-20.32-7.34-10.822-15.623-22.199-25.255-34.377-9.567-12.182-18.111-23.483-25.5-33.908-7.39-10.426-10.718-16.344-9.915-17.69.8-1.413 3.452-2.635 7.818-3.793 4.5-1.097 7.634-3.456 9.672-6.888 2.47-4.174.466-11.59-6.222-22.57-6.685-10.914-14.303-22.12-22.791-33.685-8.62-11.561-16.521-21.573-23.631-29.906-7.181-8.461-10.282-11.955-9.299-10.416-2.636-3.38-3.523-5.844-2.72-7.191 1.235-2.086 4.85-3.937 10.912-5.491 6.063-1.554 10.044-4.143 12.081-7.576 1.235-2.087.036-5.787-3.736-11.293-3.838-5.503-8.946-11.483-15.329-18.069a185.199 185.199 0 0 0-21.083-18.697c-7.743-6.007-14.713-10.795-20.915-14.43-7.751-4.56-13.461-7.425-17.268-8.788a37.42 37.42 0 0 1-4.881-3.555c-1.905-1.569-2.238-3.33-1.003-5.417 4.618-4.785 7.148-7.449 7.579-8.188 2.841-4.78-.006-10.19-8.606-16.23-6.201-3.635-13.874-7.87-22.685-12.585-8.749-4.784-18.215-9.407-28.2-13.815-9.921-4.474-19.67-7.904-29.041-10.1-9.441-2.324-17.418-2.535-24.001-.83l-2.155-1.23c-2.024-1.235-2.12-3.664-.082-7.098.376-.662.927-1.273 1.612-1.852.776-.656 1.725-1.27 2.785-1.871 1.997-1.13 3.46-2.437 4.263-3.783.8-1.413.907-3.718.525-6.727-.584-3.133-2.192-5.503-4.954-7.103-8.291-4.868-17.741-7.39-28.417-7.626-10.54-.112-21.052.5-31.201 1.95-10.149 1.452-18.978 2.983-26.55 4.662-7.573 1.679-12.642 1.68-15.473.017l-3.034-1.788c-.744-.496-2.188-.374-4.405.174-11.625 2.43-22.157 5.868-31.201 10.301-9.113 4.37-17.223 12.446-24.135 24.224-1.603 2.758-3.685 5.076-6.116 6.88-2.566 1.745-4.454 2.28-5.802 1.478-3.439-2.034-5.738-5.231-6.897-9.59-1.227-4.423-3.124-7.438-5.887-9.039-2.897-1.661-6.927 1.324-12.226 8.897-5.365 7.574-9.166 13.05-11.204 16.482-3.273 5.52-4.361 11.349-3.392 17.557 1.103 6.267.804 12.065-.617 17.775a680.168 680.168 0 0 1-10.453-1.232 285.103 285.103 0 0 1-16.57-2.767c-5.84-1.15-13.066-2.379-21.609-3.62-.803 1.347-1.67 4.404-2.475 9.039-.94 4.573-1.535 9.527-1.85 14.931a130.566 130.566 0 0 0-.36 15.924c.204 5.187.614 8.918 1.228 11.129 3.055 7.375 4.273 14.888 3.513 22.347-.623 7.585-1.442 15.244-2.383 23.104-4.242-.687-9.528-2.846-15.729-6.481-26.29-15.468-52.078-31.612-77.228-48.243-25.152-16.695-47.978-36.179-68.476-58.448-4.966-5.723-10.416-12.017-16.21-18.693-5.862-6.738-11.99-11.887-18.191-15.523-5.595-3.264-9.963-2.172-13.233 3.414-2.038 3.434.99 10.086 9.22 20.15 8.16 9.87 18.602 20.898 31.463 33.147a557.152 557.152 0 0 0 41.367 35.518c14.737 11.386 27.419 20.749 38.103 27.89 7.184 5.174 15.225 10.38 23.852 15.432l24.467 14.356 20.696 12.203c2.833 1.73 4.272 4.828 4.258 9.497.121 4.729-.867 9.765-2.693 15.228-1.829 5.397-3.789 10.8-5.952 16.079-2.165 5.213-4.048 9.232-5.717 11.993-6.914 11.712-14.593 22.402-23.044 31.873-8.382 9.534-15.813 19.82-22.356 30.926-1.606 2.693-3.139 5.58-4.403 8.589a80.544 80.544 0 0 1-4.338 8.586l-.616 1.076c-1.606 2.693-1.123 4.909 1.708 6.573 5.459 3.204 12.31 3.264 20.215-.007 8.038-3.209 12.665-4.442 14.013-3.64 1.483.861 1.894 2.949 1.237 6.328-.591 3.376-1.302 7.086-2.325 11.203-1.025 4.051-1.647 8.349-1.997 12.833-.284 4.481 1.196 8.631 4.572 12.443 1.59 1.909 2.597 5.749 3.022 11.518.168 7.62 3.617 16.623 10.486 27.201 6.867 10.512 12.324 17.003 16.504 19.469 3.438 2.034 7.145 2.546 10.991 1.54 3.845-1.006 7.49-.427 10.928 1.607Z"
                                                         clip-rule="evenodd"></path>
                                                 </svg>

                                             </div>
                                         </div>
                                         <div class="space-y-8 md:pl-16" data-sal="slide-left">
                                             <div class="prose text-base">
                                                 <h2>Open week </h2>
                                                 <p>Come and explore our unique school at our next Open Week</p>
                                             </div>
                                             <a class="c-button-text" href="#">Learn more</a>
                                         </div>
                                     </div>

                                 </section>
                             </div>
                         </article>
                     </main>
                     <?php require_once("includes/enquiry.php"); ?>
                     <?php require_once("includes/footer.php"); ?>
                     <div class="c-button-chat origin-right animate-scale-bounce js-chat-btn hidden"
                         style="--delay: 2s; --duration: 2s;">
                         <a href="javascript:void(Tawk_API.toggle())"><span class="sr-only">Live Chat</span></a>
                     </div>
                     <div class="c-button-visit origin-right animate-scale-bounce"
                         style="--delay: 1.5s; --duration: 2s;">
                         <a href="#">
                             <span class="sr-only">Book a visit</span>
                         </a>
                     </div>

                     <div class="fixed inset-0 bg-white bg-opacity-90 p-10 md:px-24 flex items-center justify-center z-50"
                         x-data="{open: false, content: ''}"
                         @open-lightbox.window="open = true; content = $event.detail" x-show="open" x-cloak
                         x-transition.opacity.duration.300ms>
                         <div x-html="content" class="w-full"></div>
                         <button class="appearance-none absolute right-5 top-5" @click="open = false; content = ''">
                             <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-10 h-10">
                                 <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                             </svg>
                         </button>
                     </div>

                     <?php require_once("includes/scripts.php"); ?>