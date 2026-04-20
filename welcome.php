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
                 <source srcset="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" media="(min-width: 1024px)" type="image/webp">
                 <source srcset="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" media="(min-width: 768px)" type="image/webp">
                 <source srcset="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" type="image/webp">
                 <source srcset="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" media="(min-width: 1024px)">
                 <source srcset="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" media="(min-width: 768px)">
                 <img src="<?= getMediaPath('welcome_hero_12') ?>" data-media-key="welcome_hero_12" class="w-full h-full object-cover " alt="Middles2" width="562"
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
                                 <span class="">Head&#039;s Welcome</span>
                             </li>
                         </ul>
                     </nav>
                     <h1 class="h1 text-primary text-balance">Head&#039;s Welcome</h1>
                     <div class="prose mt-12">
                         <p>Welcome to <strong>MidasTouch School of Excellence</strong>, where education goes beyond
                             books and classrooms. As the Head of this esteemed institution, it gives me immense pride
                             and joy to lead a school that is committed to nurturing young minds with care, purpose, and
                             excellence.</p>
                         <p>At MidasTouch, we believe that true education is not merely about acquiring facts, but about
                             shaping the mind to think, question, and explore. With the strong academic partnership of
                             Next Education India Pvt. Ltd., we aim to deliver a curriculum that is both globally
                             relevant and deeply rooted in values.</p>
                         <p>Our school is a place where every child’s talent is recognized, every voice is heard, and
                             every effort is celebrated. We strive to provide a safe, supportive, and inspiring
                             environment where students are encouraged to discover their strengths and grow into
                             confident, responsible citizens.</p>
                     </div>
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

                 <section data-block="signpost" class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                     <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                         <div class="relative order-2 pt-12 md:pt-0   md:order-first">
                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="-150">

                                 <h3 class="h2 text-line">Hear from our Head</h3>
                                 <div class="mt-4 prose text-base font-normal">
                                     <p>where every child’s potential is nurtured with care and purpose. We believe
                                         education is more than academics. it's about shaping confident, responsible,
                                         and compassionate individuals. Our dedicated team works tirelessly to create a
                                         safe, vibrant, and engaging learning environment. Together with parents, we
                                         empower students to explore, express, and excel. I warmly invite you to be a
                                         part of our inspiring journey.</p>
                                 </div>
                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                     <a href="<?= getMediaPath('welcome_youtube_1') ?>"
                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                         aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('welcome_youtube_1_embed') ?>&amp;autoplay=1' 
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

                         <div class="order-1 gs-animate" data-anim-x="150">
                             <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:translate-x-0">

                                 <div class="rotate-6  u-mask-border">
                                     <div class="relative u-mask-image" x-data="{playing: true}">
                                         <span
                                             class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                         <?= renderMedia('welcome_video_6', 'w-full h-full object-cover aspect-video relative js-video-scroll', ['autoplay' => true, 'muted' => true, 'loop' => true, 'playsinline' => true]) ?>
                                         <button
                                             class="absolute bottom-4 left-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                             @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                             aria-label="Pause video">
                                             <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                     class="eksowolcgc-fill-current">
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
                                     <a href="<?= getMediaPath('welcome_youtube_2') ?>"
                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                         target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('welcome_youtube_2_embed') ?>&amp;autoplay=1'
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
                 <section data-block="grid"
                     class="relative overflow-hidden container space-y-12 bg-white pt-16 lg:pt-32 mb-16 lg:mb-32">


                     <div class="grid grid-cols-1 md:grid-flow-dense items-center gap-y-16 md:grid-cols-2">
                         <div class="relative " data-sal="slide-right">

                             <div class="-rotate-2  ">
                                 <figure role="presentation" class="">


                                     <picture>
                                         <source srcset="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" media="(min-width: 1024px)"
                                             type="image/webp">
                                         <source srcset="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" media="(min-width: 768px)"
                                             type="image/webp">
                                         <source srcset="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" type="image/webp">
                                         <source srcset="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" media="(min-width: 1024px)">
                                         <source srcset="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" media="(min-width: 768px)">
                                         <img src="<?= getMediaPath('welcome_empathy_9') ?>" data-media-key="welcome_empathy_9" class="w-full h-full object-cover u-mask-image"
                                             alt="Middles2" width="562" height="945" loading="lazy">
                                     </picture>
                                 </figure>
                             </div>
                         </div>
                         <div class="space-y-8 md:pl-16" data-sal="slide-left">
                             <div class="prose text-base">
                                 <h2>Our Values – Empathy</h2>
                                 <p>At MidasTouch School of Excellence, empathy is at the heart of our educational
                                     philosophy.We teach students to understand and respect the feelings and
                                     perspectives of others.By nurturing kindness and compassion, we build a caring and
                                     inclusive school community.Empathy helps our students grow into responsible
                                     citizens who uplift those around them.Through daily interactions and structured
                                     programs, we cultivate emotional intelligence alongside academic learning.
                                 </p>
                             </div>
                             <a class="c-button-text" href="#">Find out more</a>
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

                 <section data-block="signpost" class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                     <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                         <div class="relative order-2 pt-12 md:pt-0   md:order-first">
                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="-150">

                                 <h3 class="h2 text-line">Ask our headteacher anything</h3>
                                 <div class="mt-4 prose text-base font-normal">
                                     <p>where education meets inspiration. Our Headteacher is always here to support,
                                         guide, and connect with every parent and student. Whether you have questions
                                         about academics, student wellbeing, or school life, we’re ready to listen. We
                                         believe open communication builds trust and strengthens our school community.
                                         Feel free to reach out your voice matters to us.<strong> </strong></p>
                                 </div>
                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                     <a href="<?= getMediaPath('welcome_youtube_1') ?>"
                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                         aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('welcome_youtube_1_embed') ?>&amp;autoplay=1' 
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

                         <div class="order-1 gs-animate" data-anim-x="150">
                             <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:translate-x-0">

                                 <div class="rotate-6  u-mask-border">
                                     <figure role="presentation" class="">


                                         <picture>
                                             <source srcset="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" media="(min-width: 1024px)"
                                                 type="image/webp">
                                             <source srcset="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" media="(min-width: 768px)"
                                                 type="image/webp">
                                             <source srcset="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" type="image/webp">
                                             <source srcset="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" media="(min-width: 1024px)">
                                             <source srcset="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" media="(min-width: 768px)">
                                             <img src="<?= getMediaPath('welcome_headteacher_21') ?>" data-media-key="welcome_headteacher_21" class="w-full h-full object-cover "
                                                 alt="Middles2" width="562" height="945" loading="lazy">
                                         </picture>
                                     </figure>
                                     <a href="<?= getMediaPath('welcome_youtube_2') ?>"
                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                         target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='<?= getMediaPath('welcome_youtube_2_embed') ?>&amp;autoplay=1'
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

                 <section data-block="form" class="bg-secondary text-white py-16 lg:py-32 u-mask-bg">
                     <div class="container-sm space-y-12">
                         <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                             <h2 class="h2 text-line grow-0">Book a tour with MidasTouch</h2>
                             <div class="prose text-base font-normal max-w-2xl mx-auto">
                                 <p>Book a personal tour with MidasTouch, meet the staff and children and explore the
                                     inspiring grounds and facilities.</p>
                             </div>
                         </div>

                         <div>
                             <form id="fui-bookAVisit-uathbo" method="post" action="process_form.php">
                                 <div>
                                     <div id="fui-bookAVisit-uathbo-p-1338" data-index="0" data-id="1338" data-fui-page>
                                         <div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="yourName" data-field-type="name">
                                                     <fieldset>
                                                         <legend class="block mb-2.5 text-primary h5" data-fui-sr-only>
                                                             Parent/ Carer Full Name</legend>
                                                         <div>
                                                             <div>
                                                                 <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                     data-fui-field-count="2">
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="firstName"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-yourName-firstName">First
                                                                                 Name&nbsp;<span class="text-primary"
                                                                                     aria-hidden="true">*</span></label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-yourName-firstName"
                                                                                     class="c-input"
                                                                                     name="fields[yourName][firstName]"
                                                                                     required autocomplete="given-name"
                                                                                     data-fui-id="bookAVisit-yourName-firstName">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="lastName"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-yourName-lastName">Last
                                                                                 Name&nbsp;<span class="text-primary"
                                                                                     aria-hidden="true">*</span></label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-yourName-lastName"
                                                                                     class="c-input"
                                                                                     name="fields[yourName][lastName]"
                                                                                     required autocomplete="family-name"
                                                                                     data-fui-id="bookAVisit-yourName-lastName">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="emailAddress" data-field-type="email">
                                                     <div>
                                                         <label class="block mb-2.5 text-primary h5"
                                                             for="fui-bookAVisit-uathbo-fields-emailAddress">Email
                                                             Address&nbsp;<span class="text-primary"
                                                                 aria-hidden="true">*</span></label>
                                                         <div>
                                                             <input type="email"
                                                                 id="fui-bookAVisit-uathbo-fields-emailAddress"
                                                                 class="c-input" name="fields[emailAddress]"
                                                                 placeholder="Please enter your email so we can get in touch e.g. MidasTouch@gmail.com"
                                                                 autocomplete="email" required
                                                                 data-fui-id="bookAVisit-emailAddress">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="telephoneNumber" data-field-type="phone">
                                                     <div>
                                                         <label class="block mb-2.5 text-primary h5"
                                                             for="fui-bookAVisit-fevzus-fields-telephoneNumber">Telephone
                                                             number&nbsp;<span class="text-primary"
                                                                 aria-hidden="true">*</span></label>
                                                         <div>
                                                             <input type="tel" name="phone" class="c-input" required>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="requestACallBackFromOurAdmissionsTeam"
                                                     data-field-type="radio">
                                                     <fieldset>
                                                         <legend class="block mb-2.5 text-primary h5">Request a call
                                                             back from our Admissions team&nbsp;<span
                                                                 class="text-primary" aria-hidden="true">*</span>
                                                         </legend>
                                                         <div>
                                                             <div>
                                                                 <div class="flex items-start mb-2">
                                                                     <input type="radio"
                                                                         id="fui-bookAVisit-uathbo-fields-requestACallBackFromOurAdmissionsTeam-yes-0"
                                                                         class="h-4 w-4 mt-1.5 flex-grow-0 flex-shrink-0"
                                                                         name="fields[requestACallBackFromOurAdmissionsTeam]"
                                                                         value="Yes" required
                                                                         data-fui-id="bookAVisit-requestACallBackFromOurAdmissionsTeam-yes-0">
                                                                     <label class="ml-4"
                                                                         for="fui-bookAVisit-uathbo-fields-requestACallBackFromOurAdmissionsTeam-yes-0">Yes</label>
                                                                 </div>
                                                                 <div class="flex items-start mb-2">
                                                                     <input type="radio"
                                                                         id="fui-bookAVisit-uathbo-fields-requestACallBackFromOurAdmissionsTeam-no-1"
                                                                         class="h-4 w-4 mt-1.5 flex-grow-0 flex-shrink-0"
                                                                         name="fields[requestACallBackFromOurAdmissionsTeam]"
                                                                         value="No" required
                                                                         data-fui-id="bookAVisit-requestACallBackFromOurAdmissionsTeam-no-1">
                                                                     <label class="ml-4"
                                                                         for="fui-bookAVisit-uathbo-fields-requestACallBackFromOurAdmissionsTeam-no-1">No</label>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="nameOfChild1" data-field-type="name">
                                                     <fieldset>
                                                         <legend class="block mb-2.5 text-primary h5">Name of 1st Child
                                                         </legend>
                                                         <div id="fui-bookAVisit-uathbo-fields-nameOfChild1-instructions"
                                                             class="mb-1 text-sm">
                                                             <p>Name of 1st Child</p>
                                                         </div>
                                                         <div>
                                                             <div>
                                                                 <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                     data-fui-field-count="2">
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="firstName"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-nameOfChild1-firstName">First
                                                                                 Name</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-nameOfChild1-firstName"
                                                                                     class="c-input"
                                                                                     name="fields[nameOfChild1][firstName]"
                                                                                     autocomplete="given-name"
                                                                                     data-fui-id="bookAVisit-nameOfChild1-firstName">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="lastName"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-nameOfChild1-lastName">Last
                                                                                 Name</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-nameOfChild1-lastName"
                                                                                     class="c-input"
                                                                                     name="fields[nameOfChild1][lastName]"
                                                                                     autocomplete="family-name"
                                                                                     data-fui-id="bookAVisit-nameOfChild1-lastName">
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="dateOfBirth" data-field-type="date"
                                                     data-field-display-type="calendar">
                                                     <div>
                                                         <label class="block mb-2.5 text-primary h5"
                                                             for="fui-bookAVisit-uathbo-fields-dateOfBirth">Date of
                                                             birth</label>
                                                         <div>
                                                             <input type="text"
                                                                 id="fui-bookAVisit-uathbo-fields-dateOfBirth"
                                                                 class="c-input" name="fields[dateOfBirth][datetime]"
                                                                 autocomplete="off"
                                                                 data-fui-id="bookAVisit-dateOfBirth">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal" data-field-handle="year"
                                                     data-field-type="number">
                                                     <div>
                                                         <label class="block mb-2.5 text-primary h5"
                                                             for="fui-bookAVisit-uathbo-fields-year">Year</label>
                                                         <div>
                                                             <input type="number" id="fui-bookAVisit-uathbo-fields-year"
                                                                 class="c-input" name="fields[year]"
                                                                 placeholder="e.g., 2025" data-fui-id="bookAVisit-year">
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="childsInterestsHobbiesOrAreasOfTheScho"
                                                     data-field-type="multi-line-text">
                                                     <div>
                                                         <label class="block mb-2.5 text-primary h5"
                                                             for="fui-bookAVisit-uathbo-fields-childsInterestsHobbiesOrAreasOfTheScho">Child’s
                                                             interests/hobbies or areas of the school you would be
                                                             particularly interested in seeing.</label>
                                                         <div>
                                                             <textarea
                                                                 id="fui-bookAVisit-uathbo-fields-childsInterestsHobbiesOrAreasOfTheScho"
                                                                 class="c-input"
                                                                 name="fields[childsInterestsHobbiesOrAreasOfTheScho]"
                                                                 data-fui-id="bookAVisit-childsInterestsHobbiesOrAreasOfTheScho"></textarea>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="address" data-field-type="address">
                                                     <fieldset>
                                                         <legend class="block mb-2.5 text-primary h5">Address</legend>
                                                         <div>
                                                             <div>
                                                                 <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                     data-fui-field-count="1">
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="address1"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-address-address1">Address
                                                                                 1</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-address-address1"
                                                                                     class="c-input"
                                                                                     name="fields[address][address1]"
                                                                                     autocomplete="address-line1"
                                                                                     data-fui-id="bookAVisit-address-address1"
                                                                                     data-address1>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                     data-fui-field-count="2">
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="city"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-address-city">Town</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-address-city"
                                                                                     class="c-input"
                                                                                     name="fields[address][city]"
                                                                                     autocomplete="address-level2"
                                                                                     data-fui-id="bookAVisit-address-city"
                                                                                     data-city>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="zip"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-address-zip">Post
                                                                                 Code</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-address-zip"
                                                                                     class="c-input"
                                                                                     name="fields[address][zip]"
                                                                                     autocomplete="postal-code"
                                                                                     data-fui-id="bookAVisit-address-zip"
                                                                                     data-zip>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                                 <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                     data-fui-field-count="2">
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="state"
                                                                         data-field-type="single-line-text">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-address-state">STATE</label>
                                                                             <div>
                                                                                 <input type="text"
                                                                                     id="fui-bookAVisit-uathbo-fields-address-state"
                                                                                     class="c-input"
                                                                                     name="fields[address][state]"
                                                                                     autocomplete="address-level1"
                                                                                     data-fui-id="bookAVisit-address-state"
                                                                                     data-state>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                     <div class="px-4 flex-1 text-base font-normal"
                                                                         data-field-handle="country"
                                                                         data-field-type="dropdown">
                                                                         <div>
                                                                             <label class="block mb-2.5 text-primary h5"
                                                                                 for="fui-bookAVisit-uathbo-fields-address-country">Country</label>
                                                                             <div>
                                                                                 <select
                                                                                     id="fui-bookAVisit-uathbo-fields-address-country"
                                                                                     class="c-input"
                                                                                     name="fields[address][country]"
                                                                                     autocomplete="country"
                                                                                     data-fui-id="bookAVisit-address-country">
                                                                                     <option value="">Select Country
                                                                                     </option>
                                                                                     <option value="US">United States
                                                                                     </option>
                                                                                     <option value="IN">India</option>
                                                                                 </select>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                 </div>
                                             </div>
                                             <div class="flex flex-wrap items-end -mx-4 mb-8" data-fui-field-count="1">
                                                 <div class="px-4 flex-1 text-base font-normal"
                                                     data-field-handle="additionalChildren" data-field-type="radio">
                                                     <fieldset>
                                                         <legend class="block mb-2.5 text-primary h5">Additional
                                                             child(ren)</legend>
                                                         <div>
                                                             <div>
                                                                 <div class="flex items-start mb-2">
                                                                     <input type="radio"
                                                                         id="fui-bookAVisit-uathbo-fields-additionalChildren-yes-0"
                                                                         class="h-4 w-4 mt-1.5 flex-grow-0 flex-shrink-0"
                                                                         name="fields[additionalChildren]" value="Yes"
                                                                         data-fui-id="bookAVisit-additionalChildren-yes-0">
                                                                     <label class="ml-4"
                                                                         for="fui-bookAVisit-uathbo-fields-additionalChildren-yes-0">Yes</label>
                                                                 </div>
                                                                 <div class="flex items-start mb-2">
                                                                     <input type="radio"
                                                                         id="fui-bookAVisit-uathbo-fields-additionalChildren-no-1"
                                                                         class="h-4 w-4 mt-1.5 flex-grow-0 flex-shrink-0"
                                                                         name="fields[additionalChildren]" value="No"
                                                                         data-fui-id="bookAVisit-additionalChildren-no-1">
                                                                     <label class="ml-4"
                                                                         for="fui-bookAVisit-uathbo-fields-additionalChildren-no-1">No</label>
                                                                 </div>
                                                             </div>
                                                         </div>
                                                     </fieldset>
                                                 </div>
                                             </div>

                                             <div id="additionalChildrenSection" style="display: none;">
                                                 <div class="flex flex-wrap items-end -mx-4 mb-8"
                                                     data-fui-field-count="1">
                                                     <div class="px-4 flex-1 text-base font-normal"
                                                         data-field-handle="nameOfChild11" data-field-type="name">
                                                         <fieldset>
                                                             <legend class="block mb-2.5 text-primary h5">Name of 2nd
                                                                 Child</legend>
                                                             <div id="fui-bookAVisit-uathbo-fields-nameOfChild11-instructions"
                                                                 class="mb-1 text-sm">
                                                                 <p>Name of 2nd Child</p>
                                                             </div>
                                                             <div>
                                                                 <div>
                                                                     <div class="flex flex-wrap items-end -mx-4 mb-4 last:mb-0"
                                                                         data-fui-field-count="2">
                                                                         <div class="px-4 flex-1 text-base font-normal"
                                                                             data-field-handle="firstName"
                                                                             data-field-type="single-line-text">
                                                                             <div>
                                                                                 <label
                                                                                     class="block mb-2.5 text-primary h5"
                                                                                     for="fui-bookAVisit-uathbo-fields-nameOfChild11-firstName">First
                                                                                     Name</label>
                                                                                 <div>
                                                                                     <input type="text"
                                                                                         id="fui-bookAVisit-uathbo-fields-nameOfChild11-firstName"
                                                                                         class="c-input"
                                                                                         name="fields[nameOfChild11][firstName]"
                                                                                         autocomplete="given-name"
                                                                                         data-fui-id="bookAVisit-nameOfChild11-firstName">
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                         <div class="px-4 flex-1 text-base font-normal"
                                                                             data-field-handle="lastName"
                                                                             data-field-type="single-line-text">
                                                                             <div>
                                                                                 <label
                                                                                     class="block mb-2.5 text-primary h5"
                                                                                     for="fui-bookAVisit-uathbo-fields-nameOfChild11-lastName">Last
                                                                                     Name</label>
                                                                                 <div>
                                                                                     <input type="text"
                                                                                         id="fui-bookAVisit-uathbo-fields-nameOfChild11-lastName"
                                                                                         class="c-input"
                                                                                         name="fields[nameOfChild11][lastName]"
                                                                                         autocomplete="family-name"
                                                                                         data-fui-id="bookAVisit-nameOfChild11-lastName">
                                                                                 </div>
                                                                             </div>
                                                                         </div>
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                         </fieldset>
                                                     </div>
                                                 </div>
                                                 <div class="flex flex-wrap items-end -mx-4 mb-8"
                                                     data-fui-field-count="1">
                                                     <div class="px-4 flex-1 text-base font-normal"
                                                         data-field-handle="dateOfBirth1" data-field-type="date"
                                                         data-field-display-type="calendar">
                                                         <div>
                                                             <label class="block mb-2.5 text-primary h5"
                                                                 for="fui-bookAVisit-uathbo-fields-dateOfBirth1">Date of
                                                                 birth</label>
                                                             <div>
                                                                 <input type="text"
                                                                     id="fui-bookAVisit-uathbo-fields-dateOfBirth1"
                                                                     class="c-input"
                                                                     name="fields[dateOfBirth1][datetime]"
                                                                     autocomplete="off"
                                                                     data-fui-id="bookAVisit-dateOfBirth1">
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="flex flex-wrap items-end -mx-4 mb-8"
                                                     data-fui-field-count="1">
                                                     <div class="px-4 flex-1 text-base font-normal"
                                                         data-field-handle="year1" data-field-type="number">
                                                         <div>
                                                             <label class="block mb-2.5 text-primary h5"
                                                                 for="fui-bookAVisit-uathbo-fields-year1">Year of
                                                                 entry</label>
                                                             <div>
                                                                 <input type="number"
                                                                     id="fui-bookAVisit-uathbo-fields-year1"
                                                                     class="c-input" name="fields[year1]"
                                                                     placeholder="e.g., 2025"
                                                                     data-fui-id="bookAVisit-year1">
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                                 <div class="flex flex-wrap items-end -mx-4 mb-8"
                                                     data-fui-field-count="1">
                                                     <div class="px-4 flex-1 text-base font-normal"
                                                         data-field-handle="secondChildsInterestsHobbiesOrAreasOfT"
                                                         data-field-type="multi-line-text">
                                                         <div>
                                                             <label class="block mb-2.5 text-primary h5"
                                                                 for="fui-bookAVisit-uathbo-fields-secondChildsInterestsHobbiesOrAreasOfT">Second
                                                                 Child’s interests/hobbies or areas of the school you
                                                                 would be particularly interested in seeing.</label>
                                                             <div>
                                                                 <textarea
                                                                     id="fui-bookAVisit-uathbo-fields-secondChildsInterestsHobbiesOrAreasOfT"
                                                                     class="c-input"
                                                                     name="fields[secondChildsInterestsHobbiesOrAreasOfT]"
                                                                     data-fui-id="bookAVisit-secondChildsInterestsHobbiesOrAreasOfT"></textarea>
                                                             </div>
                                                         </div>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>

                                         <div class="flex justify-start items-center gap-x-4 mt-8">
                                             <button type="submit" class="c-button order-10"
                                                 data-submit-action="submit">Book a visit</button>
                                         </div>
                                     </div>
                                 </div>
                             </form>

                             <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                             <script>
                             $(document).ready(function() {
                                 const additionalChildrenSection = $('#additionalChildrenSection');

                                 // Initially hide the section
                                 additionalChildrenSection.hide();

                                 // Listen for changes on the radio buttons
                                 $('input[name="fields[additionalChildren]"]').on('change', function() {
                                     if ($(this).val() === 'Yes') {
                                         additionalChildrenSection
                                             .slideDown(); // Show with a slide effect
                                     } else {
                                         additionalChildrenSection
                                             .slideUp(); // Hide with a slide effect
                                     }
                                 });

                                 $('#fui-bookAVisit-uathbo').on('submit', function(e) {
                                     e.preventDefault();

                                     const form = this;
                                     const formData = new FormData(form);
                                     const submitBtn = $('[data-submit-action="submit"]');

                                     // Show loading state
                                     submitBtn.prop('disabled', true).text('Submitting...');

                                     $.ajax({
                                         url: 'process_form.php',
                                         type: 'POST',
                                         data: formData,
                                         processData: false,
                                         contentType: false,
                                         dataType: 'json', // Expect JSON response
                                         success: function(response) {
                                             if (response.success) {
                                                 alert(response.message);
                                                 form.reset();
                                             } else {
                                                 alert('Error: ' + response.message);
                                             }
                                         },
                                         error: function(xhr, status, error) {
                                             let errorMsg =
                                                 'An unexpected error occurred. Please check the console for details.';

                                             try {
                                                 const response = JSON.parse(xhr
                                                     .responseText);
                                                 if (response.message) {
                                                     errorMsg = response.message;
                                                 } else {
                                                     // If the response is not valid JSON, show the raw server output
                                                     errorMsg = xhr.responseText;
                                                 }
                                             } catch (e) {
                                                 // If parsing the response fails, show the raw server output
                                                 errorMsg = xhr.responseText;
                                             }

                                             alert('Error: ' + errorMsg);
                                             console.error('AJAX Error:', status, error, xhr
                                                 .responseText);
                                         },
                                         complete: function() {
                                             submitBtn.prop('disabled', false).text(
                                                 'Book a visit');
                                         }
                                     });
                                 });
                             });
                             </script>
                         </div>
                 </section>
                 <section data-block="grid"
                     class="relative overflow-hidden container space-y-12 bg-white pt-16 lg:pt-32 mb-16 lg:mb-32">


                     <div class="grid grid-cols-1 md:grid-flow-dense items-center gap-y-16 md:grid-cols-2">
                         <div class="relative " data-sal="slide-right">

                             <div class="-rotate-2  ">
                                 <figure role="presentation" class="absolute inset-px">


                                     <picture>
                                         <source srcset="images/photos/4.jpg" media="(min-width: 1024px)"
                                             type="image/webp">
                                         <source srcset="images/photos/4.jpg" media="(min-width: 768px)"
                                             type="image/webp">
                                         <source srcset="images/photos/4.jpg" type="image/webp">
                                         <source srcset="images/photos/4.jpg" media="(min-width: 1024px)">
                                         <source srcset="images/photos/4.jpg" media="(min-width: 768px)">
                                         <img src="images/photos/4.jpg" class="w-full h-full object-cover "
                                             alt="Middles2" width="562" height="945" loading="lazy">
                                     </picture>
                                 </figure>
                                 <svg class="relative text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 902 583">
                                     <path fill="currentColor" fill-rule="evenodd"
                                         d="M902 0H0v583h902V0ZM284.218 459.533c4.725 4.614 7.699 8.244 8.989 10.89l-.187.27c7.601 9.103 16.196 18.363 25.649 27.656 9.45 9.227 19.369 16.989 29.749 23.089 4.18 2.465 7.819 2.915 10.992 1.541 3.172-1.375 6.132-3.135 8.747-5.276 2.747-2.146 5.1-4.277 7.26-6.268 2.161-1.992 3.913-2.653 5.329-1.789 3.439 2.036 6.648 4.933 9.619 8.499 3.04 3.627 6.922 6.893 11.774 9.726 4.18 2.466 8.852 4.057 14.016 4.775 5.164.716 10.452 1.232 15.867 1.61 7.004 2.289 13.902 5.239 20.689 8.72 6.788 3.48 13.292 6.446 19.502 8.633 6.079 2.194 11.655 3.355 16.733 3.55 5.01.131 9.001-2.195 11.839-7.041 1.603-2.759 2.329-6.074 2.379-9.823-.216-3.806.826-7.462 2.863-10.896l1.235-2.087c6.633 2.895 15.809 5.165 27.647 6.473a282.607 282.607 0 0 0 36.216 1.665c12.17-.281 23.387-1.38 33.447-3.42 10.061-2.039 15.826-4.435 17.496-7.197 2.037-3.433 2.073-9.22-.03-17.487-2.237-8.327-2.82-13.104-2.017-14.45 2.035-3.5 6.51-5.253 13.621-5.27 6.976-.077 14.76.273 23.153 1.061 8.326.724 16.236.939 23.463.523 7.226-.416 11.89-2.374 13.928-5.808 2.038-3.433 2.089-8.826.23-15.92-1.931-7.221-2.427-11.475-1.624-12.822 1.235-2.086 8.433-3.224 21.664-3.35 13.096-.187 27.646-.234 43.514-.266 15.87.033 30.726-.617 44.509-1.752 13.776-1.331 22.088-4.288 24.926-9.133 1.667-2.827-1.169-9.619-8.24-20.32-7.34-10.822-15.623-22.199-25.255-34.377-9.567-12.182-18.111-23.483-25.5-33.908-7.39-10.426-10.718-16.344-9.915-17.69.8-1.413 3.452-2.635 7.818-3.793 4.5-1.097 7.634-3.456 9.672-6.888 2.47-4.174.466-11.59-6.222-22.57-6.685-10.914-14.303-22.12-22.791-33.685-8.62-11.561-16.521-21.573-23.631-29.906-7.181-8.461-10.282-11.955-9.299-10.416-2.636-3.38-3.523-5.844-2.72-7.191 1.235-2.086 4.85-3.937 10.912-5.491 6.063-1.554 10.044-4.143 12.081-7.576 1.235-2.087.036-5.787-3.736-11.293-3.838-5.503-8.946-11.483-15.329-18.069a185.199 185.199 0 0 0-21.083-18.697c-7.743-6.007-14.713-10.795-20.915-14.43-7.751-4.56-13.461-7.425-17.268-8.788a37.42 37.42 0 0 1-4.881-3.555c-1.905-1.569-2.238-3.33-1.003-5.417 4.618-4.785 7.148-7.449 7.579-8.188 2.841-4.78-.006-10.19-8.606-16.23-6.201-3.635-13.874-7.87-22.685-12.585-8.749-4.784-18.215-9.407-28.2-13.815-9.921-4.474-19.67-7.904-29.041-10.1-9.441-2.324-17.418-2.535-24.001-.83l-2.155-1.23c-2.024-1.235-2.12-3.664-.082-7.098.376-.662.927-1.273 1.612-1.852.776-.656 1.725-1.27 2.785-1.871 1.997-1.13 3.46-2.437 4.263-3.783.8-1.413.907-3.718.525-6.727-.584-3.133-2.192-5.503-4.954-7.103-8.291-4.868-17.741-7.39-28.417-7.626-10.54-.112-21.052.5-31.201 1.95-10.149 1.452-18.978 2.983-26.55 4.662-7.573 1.679-12.642 1.68-15.473.017l-3.034-1.788c-.744-.496-2.188-.374-4.405.174-11.625 2.43-22.157 5.868-31.201 10.301-9.113 4.37-17.223 12.446-24.135 24.224-1.603 2.758-3.685 5.076-6.116 6.88-2.566 1.745-4.454 2.28-5.802 1.478-3.439-2.034-5.738-5.231-6.897-9.59-1.227-4.423-3.124-7.438-5.887-9.039-2.897-1.661-6.927 1.324-12.226 8.897-5.365 7.574-9.166 13.05-11.204 16.482-3.273 5.52-4.361 11.349-3.392 17.557 1.103 6.267.804 12.065-.617 17.775a680.168 680.168 0 0 1-10.453-1.232 285.103 285.103 0 0 1-16.57-2.767c-5.84-1.15-13.066-2.379-21.609-3.62-.803 1.347-1.67 4.404-2.475 9.039-.94 4.573-1.535 9.527-1.85 14.931a130.566 130.566 0 0 0-.36 15.924c.204 5.187.614 8.918 1.228 11.129 3.055 7.375 4.273 14.888 3.513 22.347-.623 7.585-1.442 15.244-2.383 23.104-4.242-.687-9.528-2.846-15.729-6.481-26.29-15.468-52.078-31.612-77.228-48.243-25.152-16.695-47.978-36.179-68.476-58.448-4.966-5.723-10.416-12.017-16.21-18.693-5.862-6.738-11.99-11.887-18.191-15.523-5.595-3.264-9.963-2.172-13.233 3.414-2.038 3.434.99 10.086 9.22 20.15 8.16 9.87 18.602 20.898 31.463 33.147a557.152 557.152 0 0 0 41.367 35.518c14.737 11.386 27.419 20.749 38.103 27.89 7.184 5.174 15.225 10.38 23.852 15.432l24.467 14.356 20.696 12.203c2.833 1.73 4.272 4.828 4.258 9.497.121 4.729-.867 9.765-2.693 15.228-1.829 5.397-3.789 10.8-5.952 16.079-2.165 5.213-4.048 9.232-5.717 11.993-6.914 11.712-14.593 22.402-23.044 31.873-8.382 9.534-15.813 19.82-22.356 30.926-1.606 2.693-3.139 5.58-4.403 8.589a80.544 80.544 0 0 1-4.338 8.586l-.616 1.076c-1.606 2.693-1.123 4.909 1.708 6.573 5.459 3.204 12.31 3.264 20.215-.007 8.038-3.209 12.665-4.442 14.013-3.64 1.483.861 1.894 2.949 1.237 6.328-.591 3.376-1.302 7.086-2.325 11.203-1.025 4.051-1.647 8.349-1.997 12.833-.284 4.481 1.196 8.631 4.572 12.443 1.59 1.909 2.597 5.749 3.022 11.518.168 7.62 3.617 16.623 10.486 27.201 6.867 10.512 12.324 17.003 16.504 19.469 3.438 2.034 7.145 2.546 10.991 1.54 3.845-1.006 7.49-.427 10.928 1.607Z"
                                         clip-rule="evenodd"></path>
                                 </svg>

                             </div>
                         </div>
                         <div class="space-y-8 md:pl-16" data-sal="slide-left">
                             <div class="prose text-base">
                                 <h2>Learn about Mud π</h2>
                                 <p>With our Mud π learning philosophy, children learn happily in the classroom because
                                     they have time to play and explore outside.</p>
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