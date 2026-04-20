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


                     <picture>
                         <source srcset="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" media="(min-width: 1024px)" type="image/webp">
                         <source srcset="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" media="(min-width: 768px)" type="image/webp">
                         <source srcset="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" type="image/webp">
                         <source srcset="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" media="(min-width: 1024px)">
                         <source srcset="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" media="(min-width: 768px)">
                         <img src="<?= getMediaPath('learning_hero_28') ?>" data-media-key="learning_hero_28" class="w-full h-full object-cover " alt="Middles2" width="562"
                             height="945" loading="lazy">
                     </picture>
                 </section>
                 <article id="pageContent" class="relative animate-slide-up -top-[var(--travel)] -mb-[var(--travel)]"
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
                                         <i class="block w-2.5 text-primary"><svg xmlns="http://www.w3.org/2000/svg"
                                                 fill="none" viewBox="0 0 10 14">
                                                 <path stroke="currentColor" stroke-linecap="round"
                                                     stroke-linejoin="round" stroke-width="3"
                                                     d="M1.5 12c.52-.37 1.035-.824 1.56-1.357a6.367 6.367 0 0 1 1.6-.836 6.19 6.19 0 0 0 1.546-.785c.45-.32.837-.658 1.158-1.01.313-.357.682-.76 1.136-1.083-.334-.315-.676-.67-1.02-.914l-.966-.69a7.973 7.973 0 0 1-.73-.584 16.705 16.705 0 0 0-1.117-.861C3.38 2.961 2.41 2.333 1.762 2">
                                                 </path>
                                             </svg>
                                         </i>
                                     </li>
                                     <li>
                                         <span class="">Our Learning Philosophy</span>
                                     </li>
                                 </ul>
                             </nav>
                             <h1 class="h1 text-primary text-balance">Our Learning Philosophy</h1>
                             <h2 class="h3 text-primary mt-4">Our secret recipe for Mud π</h2>
                             <div class="prose mt-12">
                                 <p>At <strong>MidasTouch School of Excellence</strong>, learning is not confined to
                                     classrooms or textbooks. It’s a carefully crafted experience. what we fondly call
                                     our <strong>"secret recipe for Mud π”</strong>. where Minds Understand Deeply and π
                                     (Pi) symbolizes our never-ending pursuit of knowledge, growth, and excellence.</p>
                                 <p class="lead">Our philosophy blends core ingredients that ignite curiosity,
                                     confidence, and character in every child:</p>
                                 <ul>
                                     <li class="h3 mt-4">M – Motivation & Mindfulness</li>
                                     <p>We motivate students to discover their passions and develop a mindful approach
                                         to learning and life.</p>
                                 </ul>
                                 <ul>
                                     <li class="h3 mt-4">U – Understanding Beyond Facts</li>
                                     <p>True learning happens when students go beyond memorization and develop deep
                                         conceptual clarity and real-world connections.</p>
                                 </ul>
                                 <ul>
                                     <li class="h3 mt-4">D – Discovery & Dialogue</li>
                                     <p>We encourage exploration, questioning, and meaningful conversations that nurture
                                         independent thinking and creativity.</p>
                                 </ul>
                                 <ul>
                                     <li class="h3 mt-4">π – Infinite Potential</li>
                                     <p>Just like the endless digits of π, we believe every child has limitless
                                         potential. Our role is to identify, nurture, and elevate their strengths with
                                         personal attention and innovative practices.</p>
                                 </ul>

                             </div>
                         </div>


                         <section data-block="signpost" class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                             <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                                 <div class="relative order-2  pt-12 mb:pb-12 md:mb-24  ">
                                     <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150">

                                         <h3 class="h2 text-line">Empowering Minds, Enriching Lives</h3>
                                         <div class="mt-4 prose text-base font-normal">
                                             <p>At MidasTouch School of Excellence, our learning philosophy is centered
                                                 around the belief that true education goes beyond academic knowledge.
                                                 it is about shaping well-rounded individuals equipped to thrive in a
                                                 rapidly changing world. We focus on cultivating curiosity, creativity,
                                                 and confidence in our students by providing a balanced mix of
                                                 academics, values, and real-life skills.</p>
                                         </div>
                                         <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                             <a href="<?= getMediaPath('learning_youtube_1') ?>"
                                                 class="inline-block flex-shrink-0 flex-grow-0" target="_blank"
                                                 rel="noopener" aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('learning_youtube_1_embed') ?>&amp;autoplay=1' 
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
                                     <figure
                                         class="hidden md:block absolute right-0 bottom-0 md:translate-y-full lg:translate-y-3/4 md:translate-x-1/2 w-28 xl:w-auto"
                                         role="none">


                                         <img src="<?= getMediaPath('learning_gif_1') ?>" data-media-key="learning_gif_1"
                                             class="w-134 h-137 object-contain object-left-bottom " alt="Mudpi logo"
                                             width="200" height="200" loading="lazy">
                                     </figure>
                                 </div>

                                 <div class="order-1 gs-animate" data-anim-x="-150">
                                     <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                                         <div class="-rotate-6  u-mask-border">
                                             <div class="relative u-mask-image" x-data="{playing: true}">
                                                 <span
                                                     class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                                 <video x-ref="video" data-src="<?= getMediaPath('learning_video_6') ?>" data-media-key="learning_video_6"
                                                     muted loop role="presentation"
                                                     class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                                 <button
                                                     class="absolute bottom-4 right-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                                     @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                                     aria-label="Pause video">
                                                     <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                             xmlns="http://www.w3.org/2000/svg"
                                                             viewBox="0 0 9.571 13.713" class="dmnckfgclm-fill-current">
                                                             <path d="M0 0h2.571v13.712H0z" data-name="Rectangle 77">
                                                             </path>
                                                             <path d="M7 0h2.571v13.712H7z" data-name="Rectangle 78">
                                                             </path>
                                                         </svg>
                                                     </i>
                                                     <i x-show="!playing" class="block w-2.5 ml-1 fill-current"><svg
                                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 14">
                                                             <path d="M12 7 0 14V0Z" data-name="Polygon 2"></path>
                                                         </svg>
                                                     </i>
                                                 </button>
                                             </div>
                                             <a href="<?= getMediaPath('learning_youtube_2') ?>"
                                                 class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                                 target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                                 @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('learning_youtube_2_embed') ?>&amp;autoplay=1'
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

                         <section data-block="text" class="relative bg-white pt-16 lg:pt-32 mb-16 lg:mb-32 ">
                             <div class="container-sm space-y-12">
                                 <div class="prose">
                                     <p>we believe learning should inspire curiosity and a love for knowledge.
                                         We aim to spark creativity and independent thinking in every child.
                                         Education here is an engaging journey, not just a destination. </p>

                                     <figure
                                         style="float:right;width:479px;max-width:479px;margin-left:10px;margin-right:10px;">
                                         <img src="<?= getMediaPath('learning_leaf_2') ?>" data-media-key="learning_leaf_2"
                                             style="width:479px;max-width:479px;height:362px;" width="479" height="362"
                                             alt="" />
                                     </figure>
                                     <p>We nurture each student’s unique strengths and abilities through personalized
                                         learning.
                                         Our philosophy centers on building confident, compassionate, and capable
                                         individuals.
                                         Every lesson is an opportunity to grow academically and emotionally.</p>
                                     <p>We blend traditional values with modern teaching methods to prepare students for
                                         the future.<strong>Critical thinking, collaboration, and communication</strong>
                                         are at the heart of our approach.Our classrooms are spaces of
                                         <strong>encouragement, exploration,</strong> and <strong>excellence.</strong>
                                     </p>
                                 </div>
                             </div>
                             <div class="clear-both"></div>
                         </section>
                         <section data-block="signpost" class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                             <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                                 <div class="relative order-2  pt-12 mb:pb-12 md:mb-24  ">
                                     <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150">

                                         <h3 class="h2 text-line">Forest School</h3>
                                         <div class="mt-4 prose text-base font-normal">
                                             <p>From adventure trails to sun-dappled tales, Forest School is a unique
                                                 experience for every child at MidasTouch.</p>
                                         </div>
                                         <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                             <a class="c-button" href="#">Forest School</a>
                                         </div>
                                     </div>
                                     <figure
                                         class="hidden md:block absolute right-0 bottom-0 md:translate-y-full lg:translate-y-3/4 md:translate-x-1/2 w-28 xl:w-auto"
                                         role="none">


                                         <img src="<?= getMediaPath('learning_gif_2') ?>" data-media-key="learning_gif_2"
                                             class="w-140 h-200 object-contain object-left-bottom "
                                             alt="GWS reading boy" width="200" height="200" loading="lazy">
                                     </figure>
                                 </div>

                                 <div class="order-1 gs-animate" data-anim-x="-150">
                                     <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                                         <div class="-rotate-6  ">
                                             <div x-data="swiper()" data-slides="1" data-loop="true">
                                                 <div class="swiper u-mask-image">
                                                     <div class="swiper-wrapper">
                                                         <div class="swiper-slide">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('learning_carousel_1') ?>" data-media-key="learning_carousel_1"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </div>
                                                         <div class="swiper-slide">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('learning_carousel_2') ?>" data-media-key="learning_carousel_2"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </div>
                                                         <div class="swiper-slide">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('learning_carousel_3') ?>" data-media-key="learning_carousel_3"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div
                                                     class="mt-12 px-24 flex gap-4 items-center justify-between rotate-6">
                                                     <div class="carousel-pagination" data-swiper-pagination></div>
                                                     <div class="flex gap-4 items-center">
                                                         <button role="button"
                                                             class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                                             aria-label="Previous item" data-swiper-navigation-prev>
                                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 37 33">
                                                                 <path id="icjcbhqiwi-Vector" fill="currentColor"
                                                                     d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                                 </path>
                                                                 <path id="icjcbhqiwi-Vector_2" fill="currentColor"
                                                                     d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                                 </path>
                                                             </svg>

                                                         </button>
                                                         <button role="button"
                                                             class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                                             aria-label="Next item" data-swiper-navigation-next>
                                                             <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                 viewBox="0 0 37 33">
                                                                 <path id="stfxudrhlj-Vector" fill="currentColor"
                                                                     d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                                 </path>
                                                                 <path id="stfxudrhlj-Vector_2" fill="currentColor"
                                                                     d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                                 </path>
                                                             </svg>

                                                         </button>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </section>
                         <section data-block="grid"
                             class="relative overflow-hidden container space-y-12 bg-white pt-16 lg:pt-32 mb-16 lg:mb-32">


                             <div class="grid grid-cols-1 md:grid-flow-dense items-center gap-y-16 md:grid-cols-2">
                                 <div class="relative " data-sal="slide-right">

                                     <div class="-rotate-2  ">
                                         <figure role="presentation" class="absolute inset-px">


                                             <picture>
                                                 <source srcset="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     media="(min-width: 1024px)" type="image/webp">
                                                 <source srcset="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     media="(min-width: 768px)" type="image/webp">
                                                 <source srcset="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     type="image/webp">
                                                 <source srcset="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     media="(min-width: 1024px)">
                                                 <source srcset="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     media="(min-width: 768px)">
                                                 <img src="<?= getMediaPath('learning_leaf_1') ?>" data-media-key="learning_leaf_1"
                                                     class="w-full h-full object-cover "
                                                     alt="Main school children walking down the path away from School"
                                                     width="420" height="236" loading="lazy">
                                             </picture>
                                         </figure>
                                         <svg class="relative text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 902 583">
                                             <path fill="currentColor" fill-rule="evenodd"
                                                 d="M0 0h902v583H0V0Zm595.181 35.748c-34.348-25.002-101.988.459-163.457 28.458l-.013-.074c-30.734 13.993-40.519 9.435-43.4 7.813-4.632-3.553-3.452-12.37-3.452-12.37 2.21-7.282 2.322-24.285-10.158-34.154-16.094-11.889-43.389-7.331-85.994 14.203-46.804 23.913-75.887 19.876-98.711 16.52-19.111-3.17-37.515-5.932-53.012 14.737L98.762 49.383c-4.322-2.428-11.102-.545-13.536 3.764-2.434 4.31-1.279 10.663 3.775 13.498l37.502 21.102c-9.313 23.194 2.161 38.191 14.778 52.865 14.677 17.746 33.193 40.482 36.868 92.803 2.832 47.106 13.35 73.88 32.287 80.74 14.927 5.548 29.456-3.343 35.689-9.312 1.528-1.028 7.675-5.152 12.406-3.443 2.571.496 11.536 6.49 15.734 41.089 7.761 66.946 21.296 137.136 60.525 153.507 17.807 7.17 38.433 2.662 60.823-15.083l8.084-5.883c9.623-6.922 17.695-12.804 22.712-16.618.216.751.426 1.502.633 2.254 4.396 15.751 13.3 45.41 51.907 81.347 19.82 18.736 35.789 25.82 50.355 23.591 17.957-3.17 27.009-20.83 35.64-37.783 6.606-13.349 13.61-27.417 23.767-30.24 6.358-1.164 14.07.322 24.166 6.006 21.644 12.173 36.658 15.888 49.473 11.715 13.933-4.483 19.409-17.511 23.259-27.677 1.713-4.719 4.246-10.873 6.507-11.505.397-.718 4.098-.532 10.592 3.121 44.717 25.151 82.555-4.756 96.922-25.114l.82-1.437c9.226-21.361 15.336-69.125-29.381-94.276-5.774-3.244-7.848-6.303-8.158-7.43-.634-2.241 3.34-7.59 6.506-11.504 6.321-7.814 15.088-19.95 11.723-34.167-3.465-12.371-14.728-24.395-35.64-36.16-10.095-5.683-16.491-11.181-17.658-17.522-2.819-10.13 5.625-23.38 13.672-35.925 10.071-16.136 20.565-32.989 13.995-49.955-5.613-13.585-19.943-23.541-46.281-30.773-50.814-14.365-80.866-6.613-96.662-2.229-.753.215-1.506.425-2.26.632-.037-6.663.832-16.595 2.521-27.975l.869-9.944c3.639-28.284-3.141-48.222-18.515-59.714Z"
                                                 clip-rule="evenodd"></path>
                                         </svg>

                                     </div>
                                 </div>
                                 <div class="space-y-8 md:pl-16" data-sal="slide-left">
                                     <div class="prose text-base">
                                         <h2>Our Values</h2>
                                         <p>our values are the pillars that guide our mission to nurture well-rounded
                                             individuals. We believe education is not just about academic excellence,
                                             but about shaping responsible, confident, and compassionate human beings.
                                             We uphold integrity, respect, and discipline in everything we do. Our
                                             school fosters a culture of creativity, curiosity, and critical thinking,
                                             encouraging students to explore their potential beyond the classroom.</p>
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
             <div class="c-button-visit origin-right animate-scale-bounce" style="--delay: 1.5s; --duration: 2s;">
                 <a href="#">
                     <span class="sr-only">Book a visit</span>
                 </a>
             </div>

             <div class="fixed inset-0 bg-white bg-opacity-90 p-10 md:px-24 flex items-center justify-center z-50"
                 x-data="{open: false, content: ''}" @open-lightbox.window="open = true; content = $event.detail"
                 x-show="open" x-cloak x-transition.opacity.duration.300ms>
                 <div x-html="content" class="w-full"></div>
                 <button class="appearance-none absolute right-5 top-5" @click="open = false; content = ''">
                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-10 h-10">
                         <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                     </svg>
                 </button>
             </div>

             <?php require_once("includes/scripts.php"); ?>