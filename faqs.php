 <!doctype html>
 <html lang="en">

 <?php require_once("includes/head.php");  ?>
 <?php require_once("includes/media-helper.php"); ?>

 <body class="font-body text-base font-light lg:text-md text-secondary antialiased">
     <a href="#content" role="button" aria-label="Skip to content"></a>
     <?php require_once("includes/header.php");  ?>
     <main class="" id="content">
         <section data-block="hero" class="h-screen" data-sal="fade">


             <picture>
                 <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)" type="image/webp">
                 <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)" type="image/webp">
                 <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" type="image/webp">
                 <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)">
                 <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)">
                 <img src="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" class="w-full h-full object-cover " alt="Middles2" width="562"
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
                             <li><a href="admissions.php">Admissions</a></li>
                             <li>
                                 <i class="block w-2.5 text-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                         viewBox="0 0 10 14">
                                         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                             stroke-width="3"
                                             d="M1.5 12c.52-.37 1.035-.824 1.56-1.357a6.367 6.367 0 0 1 1.6-.836 6.19 6.19 0 0 0 1.546-.785c.45-.32.837-.658 1.158-1.01.313-.357.682-.76 1.136-1.083-.334-.315-.676-.67-1.02-.914l-.966-.69a7.973 7.973 0 0 1-.73-.584 16.705 16.705 0 0 0-1.117-.861C3.38 2.961 2.41 2.333 1.762 2">
                                         </path>
                                     </svg>
                                 </i>
                             </li>
                             <li>
                                 <span class="">FAQs &amp; Testimonials</span>
                             </li>
                         </ul>
                     </nav>
                     <h1 class="h1 text-primary text-balance">FAQs &amp; Testimonials</h1>
                     <h2 class="h3 text-primary mt-4">Find out more from our families and teachers</h2>
                     <div class="prose mt-12">
                         <p>Is MidasTouch the right school for your child and you? To help you decide, we asked our
                             current cohort of families and teachers to share their experience and answer some important
                             questions. </p>
                     </div>
                 </div>

                 <section data-block="videoGrid" class="container space-y-12 my-12 lg:my-16">
                     <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                         <h2 class="h2 text-line grow-0">Hear from our MidasTouch families</h2>
                         <div class="prose text-base font-normal max-w-2xl mx-auto">
                             <p>What’s life like at our school? Find out from the people who know best – our wonderful
                                 pupils and their parents.</p>
                         </div>
                     </div>
                     <div class="grid gap-6 md:grid-cols-2 ">
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_testimonial_1') ?>" data-media-key="faqs_testimonial_1" data-media-key="faqs_testimonial_1" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>

                             </div>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_testimonial_2') ?>" data-media-key="faqs_testimonial_2" data-media-key="faqs_testimonial_2" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>

                             </div>
                         </article>
                     </div>
                 </section>
                 <section data-block="videoGrid" class="container space-y-12 my-16 lg:my-32" x-data="{showMore: false}">
                     <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                         <h2 class="h2 text-line grow-0">Frequently asked questions</h2>
                         <div class="prose text-base font-normal max-w-2xl mx-auto">
                             <p>You might find the answer in our FAQ section or from one of our testimonial videos.</p>
                         </div>
                     </div>
                     <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Which senior school do the children go on to?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_1') ?>" data-media-key="faqs_question_1" data-media-key="faqs_question_1" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What is the homework policy throughout the school?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What is the homework policy in the pre-prep?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_3') ?>" data-media-key="faqs_question_3" data-media-key="faqs_question_3" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What are your class sizes?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' height='315'
        src='<?= getVideoLink("faqs_video_testimonial", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share'
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Can you tell me a little bit more about MidasTouch?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_5') ?>" data-media-key="faqs_question_5" data-media-key="faqs_question_5" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What is Mud π?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What awards have you won?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">How do you support the children with pre-testing for senior
                                 school?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_hero_21') ?>" data-media-key="faqs_hero_21" data-media-key="faqs_hero_21" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What is your admissions process?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">Will you help me to find the right senior school for my
                                 child?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', '<iframe src=\'<?= getVideoLink("faqs_video_vimeo", "embed") ?>\' class=\'block aspect-video\' width=\'100%\'></iframe>')">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What sports do MidasTouch play?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_10') ?>" data-media-key="faqs_question_10" data-media-key="faqs_question_10" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">Will my child represent the school in sport?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">How do the Sports Department communicate with parents?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What is your approach to teaching sport?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_13') ?>" data-media-key="faqs_question_13" data-media-key="faqs_question_13" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">Tell us about your charity and community work</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">Who are the Eco-Warriors?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">How do you promote a safe and inclusive environment?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What are Learning Powers?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" type="image/webp">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('faqs_question_16') ?>" data-media-key="faqs_question_16" data-media-key="faqs_question_16" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        width='560' 
        height='315' 
        src='<?= getVideoLink("faqs_video_faq", "embed") ?>&amp;autoplay=1' 
        title='YouTube video player' 
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='block aspect-video w-full h-full'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>


                             </div>
                             <h3 class="h2-sm text-center">What are the school values?</h3>
                         </article>
                     </div>
                     <div class="grid place-content-center">
                         <button role="button" class="c-button" x-show="!showMore" @click="showMore = true">Load
                             more</button>
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