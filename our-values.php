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
                                 <source srcset="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" media="(min-width: 1024px)" type="image/webp">
                                 <source srcset="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" media="(min-width: 768px)" type="image/webp">
                                 <source srcset="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" type="image/webp">
                                 <source srcset="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" media="(min-width: 1024px)">
                                 <source srcset="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" media="(min-width: 768px)">
                                 <img src="<?= getMediaPath('values_hero_14') ?>" data-media-key="values_hero_14" class="w-full h-full object-cover " alt="Middles2"
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
                                                 <span class="">Our Values</span>
                                             </li>
                                         </ul>
                                     </nav>
                                     <h1 class="h1 text-primary text-balance">Our Values</h1>
                                     <div class="prose mt-12">
                                         <p>At <strong>MidasTouch School of Excellence</strong>, our values are the
                                             pillars that guide our mission to nurture well-rounded individuals. We
                                             believe education is not just about academic excellence, but about shaping
                                             responsible, confident, and compassionate human beings. We uphold
                                             integrity, respect, and discipline in everything we do. Our school fosters
                                             a culture of creativity, curiosity, and critical thinking, encouraging
                                             students to explore their potential beyond the classroom.</p>
                                         <p>We value collaboration between teachers, students, parents and believe that
                                             a child thrives best in a supportive, inclusive environment. Emphasizing
                                             safety, hygiene, and holistic development, we ensure every student feels
                                             secure, respected, and inspired to grow. Through these values, we aim to
                                             empower our students to become future-ready citizens who contribute
                                             positively to society.</p>
                                     </div>
                                 </div>


                                 <section data-block="signpost"
                                     class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                                     <div
                                         class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                                         <div class="relative order-2 pt-12 md:pt-0   md:order-first">
                                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="-150">

                                                 <h3 class="h2 text-line">What are the school values?</h3>
                                                 <div class="mt-4 prose text-base font-normal">
                                                     <p>we believe in nurturing students with values that shape both
                                                         character and intellect. We emphasize respect, responsibility,
                                                         and a strong work ethic in every child. Our school fosters a
                                                         safe, inclusive environment where each student’s uniqueness is
                                                         celebrated. Learning is not just about academics but about
                                                         developing kindness, discipline, and confidence. These values
                                                         prepare our students to thrive as responsible and compassionate
                                                         global citizens.<br /></p>
                                                 </div>
                                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                                     <a href="<?= getMediaPath('values_youtube_1') ?>"
                                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank"
                                                         rel="noopener" aria-label="opens new tab" x-data="{}"
                                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('values_youtube_1_embed') ?>&amp;autoplay=1' 
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
                                         </div>

                                         <div class="order-1 gs-animate" data-anim-x="150">
                                             <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:translate-x-0">

                                                 <div class="rotate-6  u-mask-border">
                                                     <figure role="presentation" class="">


                                                         <picture>
                                                             <source srcset="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                                 media="(min-width: 1024px)" type="image/webp">
                                                             <source srcset="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                                 media="(min-width: 768px)" type="image/webp">
                                                             <source srcset="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2" type="image/webp">
                                                             <source srcset="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                                 media="(min-width: 1024px)">
                                                             <source srcset="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                                 media="(min-width: 768px)">
                                                             <img src="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                                 class="w-full h-full object-cover " alt="Middles2"
                                                                 width="562" height="945" loading="lazy">
                                                         </picture>
                                                     </figure>
                                                     <a href="<?= getMediaPath('values_youtube_2') ?>"
                                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                                         target="_blank" rel="noopener" aria-label="opens new tab"
                                                         x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('values_youtube_2_embed') ?>&amp;autoplay=1'
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

                                 <section data-block="carousel"
                                     class="relative overflow-hidden bg-white my-16 lg:my-32 " x-data="swiper()"
                                     data-slides="2" data-loop="true" data-centered="true" data-space="140"
                                     data-effect="coverflow">
                                     <div class="container space-y-12">
                                         <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                                             <h2 class="h2 text-line grow-0">Our values</h2>
                                             <div class="prose text-base font-normal max-w-2xl mx-auto">
                                                 <p>Here are the principles that run through our school</p>
                                             </div>
                                         </div>
                                         <div class="swiper overflow-visible">
                                             <div class="swiper-wrapper">
                                                 <div class="swiper-slide h-auto">
                                                     <article class="bg-white text-secondary h-full shadow-md">
                                                         <figure
                                                             class="overflow-hidden group w-[calc(100%+3rem)] translate-x-[-1.5rem] rotate-2 u-mask-image">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('values_empathy_21') ?>" data-media-key="values_empathy_21"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </figure>

                                                         <div class="p-5 lg:p-8">
                                                             <h3 class="h2-sm">Empathy</h3>
                                                             <div class="my-4 prose text-base font-normal">
                                                                 <p>Kindness, honesty and respect are deeply rooted in
                                                                     our school. We learn from each another and cherish
                                                                     our differences.</p>
                                                             </div>
                                                         </div>
                                                     </article>
                                                 </div>
                                                 <div class="swiper-slide h-auto">
                                                     <article class="bg-white text-secondary h-full shadow-md">
                                                         <figure
                                                             class="overflow-hidden group w-[calc(100%+3rem)] translate-x-[-1.5rem] -rotate-2 u-mask-image">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('values_vibrancy_22') ?>" data-media-key="values_vibrancy_22"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </figure>

                                                         <div class="p-5 lg:p-8">
                                                             <h3 class="h2-sm">Vibrancy</h3>
                                                             <div class="my-4 prose text-base font-normal">
                                                                 <p>Our approach is dynamic and full of positive energy.
                                                                     We aim to inspire and ignite each child’s love of
                                                                     learning.</p>
                                                             </div>
                                                         </div>
                                                     </article>
                                                 </div>
                                                 <div class="swiper-slide h-auto">
                                                     <article class="bg-white text-secondary h-full shadow-md">
                                                         <figure
                                                             class="overflow-hidden group w-[calc(100%+3rem)] translate-x-[-1.5rem] rotate-2 u-mask-image">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('values_adventure_23') ?>" data-media-key="values_adventure_23"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </figure>

                                                         <div class="p-5 lg:p-8">
                                                             <h3 class="h2-sm">Adventure</h3>
                                                             <div class="my-4 prose text-base font-normal">
                                                                 <p>We’re adventurous to the core. We always embrace new
                                                                     ways of doing things, diversity of thinking and
                                                                     action.</p>
                                                             </div>
                                                         </div>
                                                     </article>
                                                 </div>
                                                 <div class="swiper-slide h-auto">
                                                     <article class="bg-white text-secondary h-full shadow-md">
                                                         <figure
                                                             class="overflow-hidden group w-[calc(100%+3rem)] translate-x-[-1.5rem] -rotate-2 u-mask-image">


                                                             <picture>
                                                                 <source srcset="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     media="(min-width: 1024px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     media="(min-width: 768px)" type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     type="image/webp">
                                                                 <source srcset="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     media="(min-width: 1024px)">
                                                                 <source srcset="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     media="(min-width: 768px)">
                                                                 <img src="<?= getMediaPath('values_determination_24') ?>" data-media-key="values_determination_24"
                                                                     class="w-full h-full object-cover " alt="Middles2"
                                                                     width="562" height="945" loading="lazy">
                                                             </picture>
                                                         </figure>

                                                         <div class="p-5 lg:p-8">
                                                             <h3 class="h2-sm">Determination</h3>
                                                             <div class="my-4 prose text-base font-normal">
                                                                 <p>We don’t give up easily. We work towards our goals
                                                                     with conviction, building resilience, self-belief
                                                                     and a strong work ethic.</p>
                                                             </div>
                                                         </div>
                                                     </article>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid grid-cols-1 md:grid-cols-3 gap-x-4 gap-y-8 items-center">
                                             <div class="order-last md:order-first flex justify-center md:block">
                                             </div>
                                             <div class="hidden md:flex carousel-pagination md:justify-center"
                                                 data-swiper-pagination></div>
                                             <div class=" flex justify-center md:justify-end md:pr-8">
                                                 <div class="flex gap-4 items-center">
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 rotate-180 hover:-translate-x-2"
                                                         aria-label="Previous item" data-swiper-navigation-prev>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="lbxcsgbqvk-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="lbxcsgbqvk-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                     <button role="button"
                                                         class="appearance-none w-8 text-primary fill-current focus:outline-none transition-transform duration-300 hover:translate-x-2"
                                                         aria-label="Next item" data-swiper-navigation-next>
                                                         <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                             viewBox="0 0 37 33">
                                                             <path id="qbiqbdhwvi-Vector" fill="currentColor"
                                                                 d="M4.31 17.957c9.063-.069 18.093-.182 27.157-.25 1.957.004 1.715-2.739-.208-2.698-9.064.068-18.094.182-27.157.25-1.957-.005-1.75 2.693.207 2.698Z">
                                                             </path>
                                                             <path id="qbiqbdhwvi-Vector_2" fill="currentColor"
                                                                 d="M20.052 28.432c5.305-4.215 10.524-8.435 15.829-12.65.714-.577.644-1.694-.228-2.162-4.319-2.377-9.443-8.782-14.138-10.487-1.802-.67-2.71 1.97-.904 2.564 4.488 1.579 9.317 7.93 13.469 10.221-.09-.734-.14-1.428-.229-2.162-5.305 4.215-10.524 8.434-15.829 12.65-1.427 1.153.603 3.18 2.03 2.026Z">
                                                             </path>
                                                         </svg>

                                                     </button>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </section>
                                 <section data-block="divide" class="overflow-hidden">
                                     <figure class="min-w-full w-screen-2xl">
                                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1320 20">
                                             <path fill="none" fill-rule="evenodd" stroke="#DDD"
                                                 d="M1319.749 17.595c-.737-.65-1.455-1.3-2.192-1.943-2.382-2.384-5.249-2.846-8.361-2.306-9.055-4.97-18.656-3.424-28.19-2.579-13.88-2.911-27.84-2.04-41.806-1.079-3.327.156-6.7-.962-9.982.37-12.21-1.079-24.433-2.151-36.686-.806-.9.188-1.811.383-2.707.578-1.1-.474-2.216-1.4-3.284-1.351-19.386.949-38.816-2.053-58.178.7l-7.25-1.033c-3.886-.169-7.815-1.215-11.615.52-.933.006-1.878.019-2.805.026-12.578-3.352-25.335-.942-38.006-1.4a5.675 5.675 0 0 0-5.783.689l-1.486.078c-1.283-.247-2.578-.487-3.861-.734-.571-.442-1.191-1.325-1.719-1.26-18.527 2.267-36.938-1.9-55.372-1.338-14.709.455-29.417-2.248-44.071.435l-3.782.117c-9.288-3.794-18.92-2.365-28.472-2.157-.872 0-1.756 0-2.634-.006a7.409 7.409 0 0 0-6.028.474c-.694-.019-1.381-.032-2.081-.052a109.752 109.752 0 0 0-30.044-.559c-.951-.149-1.915-.305-2.873-.455-3.383-1.7-6.771-.877-10.16-.032-5.255.3-10.559-1.429-15.783.416a7.6 7.6 0 0 0-6.034.351c-1.412-.052-2.842-.1-4.26-.162-8.772-2.04-17.606-1.709-26.465-.8h-5.857c-10.688-1.2-21.363-2.164-32.057 0h-2.99c-10.663-2.807-21.326-.227-31.99.039-2.346-1.263-4.785-.905-7.238-.464a126.639 126.639 0 0 0-32.014.624c-1.424.052-2.861.1-4.279.143-3.953.11-7.888.214-11.836.318-3.376-1.559-6.642-.832-9.9.455a8.635 8.635 0 0 0-7.5.221c-1.222-.006-2.437-.006-3.653-.013-2.185-2.2-5-1.735-7.557-1.683-8.404.169-16.808.502-25.212 1-14.046.825-28.147-1.247-42.162.988-1.449.026-2.893.05-4.334.071a7.324 7.324 0 0 0-7.342.143c-1.455.117-2.9.24-4.359.357-3.855 1.813-7.839-2.034-11.682.279-.774-.026-1.547-.045-2.327-.065-1.7-1.949-3.4-2.579-5.108-.006-.657.078-1.308.156-1.964.24-4.484-3.441-9.291-1.341-14.005-.941a3.877 3.877 0 0 0-4.027.24l-9.1.234a6.532 6.532 0 0 0-5.66-1.1c-1.541-1.092-3.045-.682-4.537.149a6.056 6.056 0 0 0-5.562.286 4.05 4.05 0 0 0-4.549.11 75.885 75.885 0 0 0-20.228.559c-19.45-2.414-38.93-1.205-58.408-.406-1.921 0-3.843-.006-5.771-.006-3-1.2-5.906-.429-8.809.461-1.909.006-3.818.006-5.728.013a1.913 1.913 0 0 0-3.063.1c-1.393.032-2.8.065-4.193.1-9.755-2.293-19.571-1.319-29.387-.637l-4.119.117a6.566 6.566 0 0 0-6.028.481l-7.373-.253c-3.812-2.125-7.631-1.54-11.431.032-2.431-.039-4.862-.071-7.293-.11-3.468-.539-6.931-1.033-10.375.143-1.682-.942-3.315-.409-4.954.169-4.985-3.164-10.3-.871-15.47-1.072-.97-.143-1.94-.292-2.91-.435-3.818-2.228-7.8-.565-11.7-.526l-8.742-.1c-.933-1.39-1.811-1.338-2.658.084-3.413.013-6.876-.422-10.166.981-8.22.273-16.649-2.04-24.568 2.157-1.166.11-2.333.214-3.5.318-4.168-2.69-8.57-.91-12.892-.767l-2.769.156c-1.179-.793-2.155-.682-2.861.708-.945.247-1.9.487-2.848.734-8.146-.741-16.262-1.377-23.911 2.7a122 122 0 0 0-22.9.24c-1.08-.442-2.161-1.28-3.235-1.267-13.462.175-26.937.305-39.964 4.678-2.977-.2-5.961-.63-8.834.65-8.815-1.793-17.655-1.26-26.5-.331a8.714 8.714 0 0 0-7.017.273c-3.475-.214-6.968-.858-10.393.383-5.279-.448-10.583-1.241-15.8.6-2.726-.533-5.046.9-7.5 1.709-4.819-1.91-9.669-1.28-14.525-.188-.915-1.117-1.829-1.286-2.769-.045-4.3.78-8.809-.572-12.99 1.423l-10.454.39a14.728 14.728 0 0 0-9.914.39 2 2 0 0 0-1.663-.25 2.065 2.065 0 0 0-1.28 1.108">
                                             </path>
                                         </svg>

                                     </figure>
                                 </section>
                                 <section data-block="instagramFeed" data-slides="4" data-slides-group="4"
                                     data-slides-md="3" data-slides-sm="2" data-space="32" class="py-16 lg:py-32">

                                     <div class="container space-y-12">
                                         <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                                             <h2 class="h2 text-line grow-0">Follow us</h2>
                                             <div class="prose text-base font-normal max-w-2xl mx-auto">
                                                 <p>From football to poetry and everything in between, get the latest
                                                     scoop from our Instagram.</p>
                                             </div>
                                         </div>

                                         <div class="swiper" data-sal="fade">
                                             <div class="swiper-wrapper grid grid-cols-2 gap-8 md:grid-cols-4">
                                                 <div class="swiper-slide">
                                                     <a href="#"
                                                         class="block relative h-full group aspect-square overflow-hidden u-mask-image -rotate-2"
                                                         target="_blank" rel="noopener" aria-label="opens new tab">

                                                         <img src="<?= getMediaPath('values_instagram_1') ?>" data-media-key="values_instagram_1"
                                                             class="w-full h-full object-center object-cover"
                                                             loading="lazy" />
                                                     </a>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <a href="#"
                                                         class="block relative h-full group aspect-square overflow-hidden u-mask-image rotate-2"
                                                         target="_blank" rel="noopener" aria-label="opens new tab">
                                                         <img src="<?= getMediaPath('values_instagram_2') ?>" data-media-key="values_instagram_2"
                                                             class="w-full h-full object-center object-cover"
                                                             loading="lazy" />
                                                         <div
                                                             class="hidden lg:flex absolute inset-0 bg-secondary text-white bg-opacity-75 p-4 xl:p-6 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-opacity overflow-hidden items-center">
                                                             <p class="text-sm">The sun shone on our Centenary
                                                                 Celebrations as we marked the 100th birthday of
                                                                 MidasTouch School.

                                                                 Our pupils followed a very special timetable giving
                                                                 them a flavour of life back in 1925. From classrooms
                                                                 with…</p>
                                                         </div>
                                                     </a>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <a href="#"
                                                         class="block relative h-full group aspect-square overflow-hidden u-mask-image -rotate-2"
                                                         target="_blank" rel="noopener" aria-label="opens new tab">

                                                         <img src="<?= getMediaPath('values_instagram_3') ?>" data-media-key="values_instagram_3"
                                                             class="w-full h-full object-center object-cover"
                                                             loading="lazy" />

                                                     </a>
                                                 </div>
                                                 <div class="swiper-slide">
                                                     <a href="#"
                                                         class="block relative h-full group aspect-square overflow-hidden u-mask-image rotate-2"
                                                         target="_blank" rel="noopener" aria-label="opens new tab">

                                                         <img src="<?= getMediaPath('values_instagram_4') ?>" data-media-key="values_instagram_4"
                                                             class="w-full h-full object-center object-cover"
                                                             loading="lazy" />
                                                     </a>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="grid grid-cols-1 gap-x-4 gap-y-8 items-center">
                                             <div class="order-last md:order-2 flex justify-center">
                                                 <a href="https://www.instagram.com/midastouchschoolofexcellence/"
                                                     class="c-button c-button--icon group" target="_blank"
                                                     rel="noopener">
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
                                                                     transform="translate(20.577 7.033) rotate(-45)">
                                                                 </circle>
                                                             </g>
                                                         </svg>
                                                     </i>
                                                     Follow on Instagram
                                                 </a>
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
                                                         <source srcset="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10"
                                                             media="(min-width: 1024px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10"
                                                             media="(min-width: 768px)" type="image/webp">
                                                         <source srcset="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10" type="image/webp">
                                                         <source srcset="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10"
                                                             media="(min-width: 1024px)">
                                                         <source srcset="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10"
                                                             media="(min-width: 768px)">
                                                         <img src="<?= getMediaPath('values_bottom_10') ?>" data-media-key="values_bottom_10"
                                                             class="w-full h-full object-cover " alt="Middles2"
                                                             width="562" height="945" loading="lazy">
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
                                                 <h2>What are the Our Values?</h2>
                                                 <p>At<strong> MidasTouch School of Excellence</strong>, our values
                                                     shape the heart of our educational approach.We emphasize respect,
                                                     responsibility, and integrity in every student’s journey.Academic
                                                     excellence is balanced with character development and emotional
                                                     growth.We foster creativity, critical thinking, and a love for
                                                     lifelong learning.Through strong partnerships with parents and a
                                                     caring environment, we nurture confident and compassionate
                                                     individuals.</p>
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