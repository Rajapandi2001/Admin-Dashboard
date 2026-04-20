 <!doctype html>
 <html lang="en">

 <?php require_once("includes/head.php");  ?>
<?php require_once("includes/media-helper.php");  ?>

 <body class="font-body text-base font-light lg:text-md text-secondary antialiased">
     <a href="#content" role="button" aria-label="Skip to content"></a>
     <?php require_once("includes/header.php");  ?>
     <main class="" id="content">
         <section data-block="hero" class="h-screen" data-sal="fade">
             <main class="" id="content">
                 <section data-block="hero" class="h-screen" data-sal="fade">
                     <main class="" id="content">
                         <section data-block="hero" class="h-screen" data-sal="fade">
                             <main class="" id="content">
                                 <section data-block="hero" class="h-screen" data-sal="fade">


                                     <picture>
                                         <source srcset="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" media="(min-width: 1024px)"
                                             type="image/webp">
                                         <source srcset="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" media="(min-width: 768px)"
                                             type="image/webp">
                                         <source srcset="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" type="image/webp">
                                         <source srcset="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" media="(min-width: 1024px)">
                                         <source srcset="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" media="(min-width: 768px)">
                                         <img src="<?= getMediaPath('contact_hero_42') ?>" data-media-key="contact_hero_42" class="w-full h-full object-cover "
                                             alt="Middles2" width="562" height="945" loading="lazy">
                                     </picture>
                                 </section>
                                 <article id="pageContent"
                                     class="relative animate-slide-up -top-[var(--travel)] -mb-[var(--travel)]"
                                     style="--delay: 800ms; --travel: 50vh; --hero-bg-h: 20vw;">
                                     <span class="block h-[var(--hero-bg-h)] bg-no-repeat -mb-px"
                                         style="background-image: url(images/hero-top-two.svg?id=a3cb115018fd816bc223ad291ba83b42);background-size: 100%;"></span>
                                     <div class="bg-white pt-8 lg:pt-0">
                                         <div class="container-sm relative mb-12 md:mb-16 lg:-top-12 2xl:-top-24 lg:mb-8 2xl:mb-0 animate-fade-in"
                                             style="--delay: 2s;">
                                             <nav class="mb-8">
                                                 <ul class="flex gap-4 items-center h5">
                                                     <li>
                                                         <a href="index.php">Home</a>
                                                     </li>
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
                                                         <span class="">Contact Us</span>
                                                     </li>
                                                 </ul>
                                             </nav>
                                             <h1 class="h1 text-primary text-balance">Contact Us</h1>
                                             <h2 class="h3 text-primary mt-4">We love to hear from you!</h2>
                                             <div class="prose mt-12">
                                                 <p class="text-base"> MidasTouch School of Excellence<br>
                                                     1024/1, pazhamuthir cholai,<br>
                                                     katoor street,Kalapatti, <br>
                                                     Coimbatore, Tamil Nadu</p>
                                                 <p class="text-base"><strong>Principal</strong><br />M/s .Sharmila
                                                     Ram Anand</p>
                                                 <p class="text-base"><strong>School
                                                         Office/Administration<strong><strong></strong><br />Email : <a
                                                                 href="mailto:enquirymidastouch@gmail.com"
                                                                 class="transition-colors duration-300 hover:text-primary">enquirymidastouch@gmail.com</a><br />Tel
                                                             : <a href="tel:+919976777778"> 99767 77778</a> , <a
                                                                 href="tel:+917373757770"> 73737
                                                                 57770</a></strong></strong></p>
                                                 <p class="text-base"><strong>Admissions</strong><strong><br />Email
                                                     </strong> : <a href="mailto:ask.midastouchse@gmail.com"
                                                         class="transition-colors duration-300 hover:text-primary">ask.midastouchse@gmail.com</a>
                                                 </p>
                                             </div>
                                         </div>

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
                                 <button class="appearance-none absolute right-5 top-5"
                                     @click="open = false; content = ''">
                                     <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                                         <path stroke-linecap="round" stroke-linejoin="round"
                                             d="M6 18L18 6M6 6l12 12" />
                                     </svg>
                                 </button>
                             </div>

                             <?php require_once("includes/scripts.php"); ?>