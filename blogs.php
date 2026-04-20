 <!doctype html>
 <html lang="en">

 <?php require_once("includes/head.php");  ?>
<?php require_once("includes/media-helper.php");  ?>

 <body class="font-body text-base font-light lg:text-md text-secondary antialiased">
     <a href="#content" role="button" aria-label="Skip to content"></a>
     <?php require_once("includes/header.php");  ?>


     <main class="" id="content">
         <section data-block="hero" class="h-screen" data-sal="fade">


             <picture>
                 <source srcset="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" media="(min-width: 1024px)" type="image/webp">
                 <source srcset="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" media="(min-width: 768px)" type="image/webp">
                 <source srcset="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" type="image/webp">
                 <source srcset="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" media="(min-width: 1024px)">
                 <source srcset="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" media="(min-width: 768px)">
                 <img src="<?= getMediaPath('blogs_hero_19') ?>" data-media-key="blogs_hero_19" class="w-full h-full object-cover " alt="Middles2" width="562"
                     height="945" loading="lazy">
             </picture>
         </section>
         <article id="pageContent" class="relative animate-slide-up -top-[var(--travel)] -mb-[var(--travel)]"
             style="--delay: 800ms; --travel: 50vh; --hero-bg-h: 20vw;">
             <span class="block h-[var(--hero-bg-h)] bg-no-repeat -mb-px"
                 style="background-image: url(images/hero-top-two.svg?id=a3cb115018fd816bc223ad291ba83b42);background-size: 100%;"></span>
             <div class="bg-white pt-8 lg:pt-0">
                 <div class="container-sm relative mb-12 md:mb-16 lg:-top-12 2xl:-top-24 lg:mb-8 2xl:mb-0 animate-fade-in"
                     style="--delay: 2s;">
                     <nav class="mb-8">
                         <ul class="flex gap-4 items-center h5">
                             <li><a href="#">Our Community</a></li>
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
                                 <span class="">School Blog & News Updates</span>
                             </li>
                         </ul>
                     </nav>
                     <h1 class="h1 text-primary text-balance">Gallery</h1>
                     <div class="prose mt-12">
                         <p dir="ltr" class="lead">Step into the world of MidasTouch School of Excellence through our
                             gallery. Witness joyful moments, school functions, classroom activities, and student
                             achievements captured in vivid frames. Our gallery reflects the spirit of learning,
                             creativity, and togetherness. Each photo tells a story of passion, dedication, and
                             celebration. Explore and relive our best memories. Experience how we nurture minds and
                             shape futures one smile at a time.</p>
                         <p><br /></p>
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

                                 <h3 class="h2 text-line">Explore with us</h3>
                                 <div class="mt-4 prose text-base font-normal">
                                     <p>Discover a world of knowledge, creativity, and innovation at MidasTouch School
                                         of Excellence.
                                         We provide a vibrant learning environment where every child’s curiosity is
                                         nurtured.
                                         From academics to arts, sports to life skills there’s something for everyone.
                                         Join us on a journey that shapes bright minds and confident futures.</p>
                                 </div>
                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                     <a href="https://youtu.be/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A"
                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                         aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A&amp;autoplay=1' 
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
                                         <video x-ref="video" data-src="<?= getMediaPath('blogs_video_3') ?>" data-media-key="blogs_video_3" muted
                                             loop role="presentation"
                                             class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                         <button
                                             class="absolute bottom-4 left-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                             @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                             aria-label="Pause video">
                                             <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                     class="hsbfgtmnyk-fill-current">
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
                                     <a href="https://youtu.be/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm"
                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                         target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm&amp;autoplay=1' 
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

                 <section data-block="signpost"
                     class="relative overflow-hidden bg-secondary-lightest py-16 lg:py-32 u-mask-bg">
                     <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                         <div class="relative order-2  pt-12 mb:pb-12 md:mb-24  ">
                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="150">

                                 <h3 class="h2 text-line">Our secret recipe for Mud π</h3>
                                 <div class="mt-4 prose text-base font-normal">
                                     <p>At Midas Touch School of Excellence, Mud π is our playful twist on shaping young
                                         minds blending curiosity, creativity, and critical thinking. Like mixing
                                         ingredients in the perfect recipe, we stir in values, discipline, and joyful
                                         learning every day. Our formula nurtures well rounded individuals who love to
                                         explore, experiment, and excel. With every child, we mold potential into
                                         purpose that's our Mud π magic.</p>
                                 </div>
                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                     <a href="https://youtu.be/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A"
                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                         aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A&amp;autoplay=1' 
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


                                 <img src="<?= getMediaPath('blogs_gif_1') ?>" data-media-key="blogs_gif_1"
                                     class="w-134 h-137 object-contain object-left-bottom " alt="Mudpi logo" width="200"
                                     height="200" loading="lazy">
                             </figure>
                         </div>

                         <div class="order-1 gs-animate" data-anim-x="-150">
                             <div class="w-[110%] md:w-[125%] -translate-x-[5%] md:-translate-x-1/4">

                                 <div class="-rotate-6  u-mask-border">
                                     <div class="relative u-mask-image" x-data="{playing: true}">
                                         <span
                                             class="absolute inset-0 flex items-center justify-center h2-sm">Loading...</span>
                                         <video x-ref="video" data-src="<?= getMediaPath('blogs_video_5') ?>" data-media-key="blogs_video_5" muted
                                             loop role="presentation"
                                             class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                         <button
                                             class="absolute bottom-4 right-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                             @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                             aria-label="Pause video">
                                             <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                     class="kpueeakypr-fill-current">
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
                                     <a href="https://youtu.be/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm"
                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                         target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm&amp;autoplay=1' 
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

                 <section data-block="signpost" class="relative overflow-hidden bg-white py-16 lg:py-32 ">
                     <div class="container grid grid-cols-1 gap-8 lg:gap-x-0 items-center md:grid-cols-2">
                         <div class="relative order-2 pt-12 md:pt-0   md:order-first">
                             <div class="relative lg:max-w-sm lg:mx-auto gs-animate" data-anim-x="-150">

                                 <h3 class="h2 text-line">Let’s keep the adventure going</h3>
                                 <div class="mt-4 prose text-base font-normal">
                                     <p>Learning is not a destination it’s a lifelong journey.At MidasTouch School of
                                         Excellence, every day opens a new door of discovery.</p>
                                     <p>We believe education should spark curiosity and courage. Students are encouraged
                                         to explore, question, and grow with confidence.</p>
                                     <p>Together with parents and teachers, we guide each child’s unique path. Let’s
                                         move forward with purpose, passion, and endless possibilities.</p>
                                 </div>
                                 <div class="mt-8 flex flex-wrap lg:flex-nowrap items-center gap-4">
                                     <a href="https://youtu.be/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A"
                                         class="inline-block flex-shrink-0 flex-grow-0" target="_blank" rel="noopener"
                                         aria-label="opens new tab" x-data="{}" @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/IG7NbpsWaFQ?si=OBEBZErjo4tcL31A&amp;autoplay=1' 
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
                                         <video x-ref="video" data-src="<?= getMediaPath('blogs_video_6') ?>" data-media-key="blogs_video_6" muted
                                             loop role="presentation"
                                             class="w-full h-full object-cover aspect-video relative js-video-scroll"></video>
                                         <button
                                             class="absolute bottom-4 left-3 w-8 h-8 rounded-full border-2 border-white text-white flex items-center justify-center"
                                             @click="playing ? $refs.video.pause() : $refs.video.play(); playing = !playing"
                                             aria-label="Pause video">
                                             <i x-show="playing" class="block w-2.5 fill-current"><svg
                                                     xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9.571 13.713"
                                                     class="tbzlnrjtsu-fill-current">
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
                                     <a href="https://youtu.be/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm"
                                         class="absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 grid place-content-center z-20"
                                         target="_blank" rel="noopener" aria-label="opens new tab" x-data="{}"
                                         @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/pBzOk9IqzLg?si=eKhBb3fsWMUApXdm&amp;autoplay=1' 
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
                 <section data-block="divide" class="overflow-hidden">
                     <figure class="min-w-full w-screen-2xl">
                         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1320 20">
                             <path fill="none" fill-rule="evenodd" stroke="#DDD"
                                 d="M1319.749 17.595c-.737-.65-1.455-1.3-2.192-1.943-2.382-2.384-5.249-2.846-8.361-2.306-9.055-4.97-18.656-3.424-28.19-2.579-13.88-2.911-27.84-2.04-41.806-1.079-3.327.156-6.7-.962-9.982.37-12.21-1.079-24.433-2.151-36.686-.806-.9.188-1.811.383-2.707.578-1.1-.474-2.216-1.4-3.284-1.351-19.386.949-38.816-2.053-58.178.7l-7.25-1.033c-3.886-.169-7.815-1.215-11.615.52-.933.006-1.878.019-2.805.026-12.578-3.352-25.335-.942-38.006-1.4a5.675 5.675 0 0 0-5.783.689l-1.486.078c-1.283-.247-2.578-.487-3.861-.734-.571-.442-1.191-1.325-1.719-1.26-18.527 2.267-36.938-1.9-55.372-1.338-14.709.455-29.417-2.248-44.071.435l-3.782.117c-9.288-3.794-18.92-2.365-28.472-2.157-.872 0-1.756 0-2.634-.006a7.409 7.409 0 0 0-6.028.474c-.694-.019-1.381-.032-2.081-.052a109.752 109.752 0 0 0-30.044-.559c-.951-.149-1.915-.305-2.873-.455-3.383-1.7-6.771-.877-10.16-.032-5.255.3-10.559-1.429-15.783.416a7.6 7.6 0 0 0-6.034.351c-1.412-.052-2.842-.1-4.26-.162-8.772-2.04-17.606-1.709-26.465-.8h-5.857c-10.688-1.2-21.363-2.164-32.057 0h-2.99c-10.663-2.807-21.326-.227-31.99.039-2.346-1.263-4.785-.905-7.238-.464a126.639 126.639 0 0 0-32.014.624c-1.424.052-2.861.1-4.279.143-3.953.11-7.888.214-11.836.318-3.376-1.559-6.642-.832-9.9.455a8.635 8.635 0 0 0-7.5.221c-1.222-.006-2.437-.006-3.653-.013-2.185-2.2-5-1.735-7.557-1.683-8.404.169-16.808.502-25.212 1-14.046.825-28.147-1.247-42.162.988-1.449.026-2.893.05-4.334.071a7.324 7.324 0 0 0-7.342.143c-1.455.117-2.9.24-4.359.357-3.855 1.813-7.839-2.034-11.682.279-.774-.026-1.547-.045-2.327-.065-1.7-1.949-3.4-2.579-5.108-.006-.657.078-1.308.156-1.964.24-4.484-3.441-9.291-1.341-14.005-.941a3.877 3.877 0 0 0-4.027.24l-9.1.234a6.532 6.532 0 0 0-5.66-1.1c-1.541-1.092-3.045-.682-4.537.149a6.056 6.056 0 0 0-5.562.286 4.05 4.05 0 0 0-4.549.11 75.885 75.885 0 0 0-20.228.559c-19.45-2.414-38.93-1.205-58.408-.406-1.921 0-3.843-.006-5.771-.006-3-1.2-5.906-.429-8.809.461-1.909.006-3.818.006-5.728.013a1.913 1.913 0 0 0-3.063.1c-1.393.032-2.8.065-4.193.1-9.755-2.293-19.571-1.319-29.387-.637l-4.119.117a6.566 6.566 0 0 0-6.028.481l-7.373-.253c-3.812-2.125-7.631-1.54-11.431.032-2.431-.039-4.862-.071-7.293-.11-3.468-.539-6.931-1.033-10.375.143-1.682-.942-3.315-.409-4.954.169-4.985-3.164-10.3-.871-15.47-1.072-.97-.143-1.94-.292-2.91-.435-3.818-2.228-7.8-.565-11.7-.526l-8.742-.1c-.933-1.39-1.811-1.338-2.658.084-3.413.013-6.876-.422-10.166.981-8.22.273-16.649-2.04-24.568 2.157-1.166.11-2.333.214-3.5.318-4.168-2.69-8.57-.91-12.892-.767l-2.769.156c-1.179-.793-2.155-.682-2.861.708-.945.247-1.9.487-2.848.734-8.146-.741-16.262-1.377-23.911 2.7a122 122 0 0 0-22.9.24c-1.08-.442-2.161-1.28-3.235-1.267-13.462.175-26.937.305-39.964 4.678-2.977-.2-5.961-.63-8.834.65-8.815-1.793-17.655-1.26-26.5-.331a8.714 8.714 0 0 0-7.017.273c-3.475-.214-6.968-.858-10.393.383-5.279-.448-10.583-1.241-15.8.6-2.726-.533-5.046.9-7.5 1.709-4.819-1.91-9.669-1.28-14.525-.188-.915-1.117-1.829-1.286-2.769-.045-4.3.78-8.809-.572-12.99 1.423l-10.454.39a14.728 14.728 0 0 0-9.914.39 2 2 0 0 0-1.663-.25 2.065 2.065 0 0 0-1.28 1.108">
                             </path>
                         </svg>

                     </figure>
                 </section>
                 <section data-block="videoGrid" class="container space-y-12 my-16 lg:my-32">
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
                                     <source srcset="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_testimonial_6') ?>" data-media-key="blogs_testimonial_6" class="w-full u-mask-image "
                                         alt="Screenshot 2023 11 28 at 13 00 03" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
     <iframe 
       src='https://www.youtube.com/embed/0PmsR3B_8xM?si=05pGRK_kf78s_rs6&amp;autoplay=1' 
       title='YouTube video player' 
       frameborder='0' 
       allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
       referrerpolicy='strict-origin-when-cross-origin' 
       allowfullscreen 
       class='w-full aspect-video'>
     </iframe>
   `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" media="(min-width: 1024px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_testimonial_5') ?>" data-media-key="blogs_testimonial_5" class="w-full u-mask-image "
                                         alt="Screenshot 2023 12 01 at 10 38 38" width="410" height="225"
                                         loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
     <iframe 
       src='https://www.youtube.com/embed/0PmsR3B_8xM?si=05pGRK_kf78s_rs6&amp;autoplay=1' 
       title='YouTube video player' 
       frameborder='0' 
       allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
       referrerpolicy='strict-origin-when-cross-origin' 
       allowfullscreen 
       class='w-full aspect-video'>
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
                             <p><br /></p>
                         </div>
                     </div>
                     <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Can you tell me a little bit more about MidasTouch ?</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What sports do MidasTouch play?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_37') ?>" data-media-key="blogs_faq_37" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_36') ?>" data-media-key="blogs_faq_36" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
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
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What are the school values?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What is your best memory of Y7&amp;8?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" type="image/webp">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 1024px)">
                                     <source srcset="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" media="(min-width: 768px)">
                                     <img src="<?= getMediaPath('blogs_faq_38') ?>" data-media-key="blogs_faq_38" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Are you feeling confident about your move to Senior School?
                             </h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/10.jpg" type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/10.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Do you feel MidasTouch have prepared you for senior school?
                             </h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/10.jpg" type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/10.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What&#039;s the advantage of the Y7&amp;8 experience at
                                 MidasTouch?</h3>
                         </article>
                         <article class="space-y-4" x-show="showMore">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/10.jpg" type="image/webp">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/10.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/10.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">What important skill have you developed in Y7&amp;8 in
                                 preparation for Senior School?</h3>
                         </article>
                     </div>
                     <div class="grid place-content-center">
                         <button role="button" class="c-button" x-show="!showMore" @click="showMore = true">Load
                             more</button>
                     </div>
                 </section>
                 <section data-block="videoGrid" class="container space-y-12 my-16 lg:my-32">
                     <div class="gap-y-4 text-center flex flex-col w-full items-center ">
                         <h2 class="h2 text-line grow-0">More from MidasTouch</h2>
                     </div>
                     <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/21.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/21.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/21.jpg" type="image/webp">
                                     <source srcset="images/photos/21.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/21.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/21.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">MidasTouch clubs &amp; activities</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/22.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/22.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/22.jpg" type="image/webp">
                                     <source srcset="images/photos/22.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/22.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/22.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Ask our headmaster anything</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/40.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/40.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/40.jpg" type="image/webp">
                                     <source srcset="images/photos/40.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/40.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/40.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Pre-Prep School Life</h3>
                         </article>
                         <article class="space-y-4">
                             <div class="relative">


                                 <picture>
                                     <source srcset="images/photos/41.jpg" media="(min-width: 1024px)"
                                         type="image/webp">
                                     <source srcset="images/photos/41.jpg" media="(min-width: 768px)" type="image/webp">
                                     <source srcset="images/photos/41.jpg" type="image/webp">
                                     <source srcset="images/photos/41.jpg" media="(min-width: 1024px)">
                                     <source srcset="images/photos/41.jpg" media="(min-width: 768px)">
                                     <img src="images/photos/41.jpg" class="w-full u-mask-image " alt="FAQs Emma"
                                         width="410" height="225" loading="lazy">
                                 </picture>
                                 <a href="" role="button" class="absolute inset-0 grid place-content-center" x-data="{}"
                                     @click.prevent="$dispatch('open-lightbox', `
      <iframe 
        src='https://www.youtube.com/embed/9K9LfwcIA18?si=6E6-X-mA-4TlmwDd&amp;autoplay=1' 
        title='YouTube video player'
        frameborder='0' 
        allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
        referrerpolicy='strict-origin-when-cross-origin' 
        allowfullscreen 
        class='w-full aspect-video'>
      </iframe>
    `)">
                                     <span class="c-button-play-sm"></span>
                                 </a>
                             </div>
                             <h3 class="h2-sm text-center">Prep School Life</h3>
                         </article>
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