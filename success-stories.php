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
          <source
        srcset=
          "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
        media="(min-width: 1024px)"
        type="image/webp">
      <source
        srcset=
          "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
        media="(min-width: 768px)"
        type="image/webp">
      <source
        srcset=
          "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
        type="image/webp">
        <source
      srcset=
        "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
      media="(min-width: 1024px)">
    <source
      srcset=
        "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
      media="(min-width: 768px)">
    <img
      src=
        "<?= getMediaPath('success_hero_26') ?>" data-media-key="success_hero_26"
      class="w-full h-full object-cover "
      alt="Senior School Success"
      width="562"
      height="945"
      loading="lazy">
  </picture>
</section>
    <article
  id="pageContent"
  class="relative animate-slide-up -top-[var(--travel)] -mb-[var(--travel)]"
  style="--delay: 800ms; --travel: 50vh; --hero-bg-h: 20vw;">
          <span class="block h-[var(--hero-bg-h)] bg-no-repeat -mb-px" style="background-image: url(images/hero-top-one.svg?id=883ca72ae699e7ac9c62aa2e2648327e);background-size: 100%;"></span>
        <div class="bg-white pt-8 lg:pt-0">
      <div class="container-sm relative mb-12 md:mb-16 lg:-top-12 2xl:-top-24 lg:mb-8 2xl:mb-0 animate-fade-in" style="--delay: 2s;">
        <nav class="mb-8">
  <ul class="flex gap-4 items-center h5">
                  <li><a href="#">Our school</a></li>
        <li>
          <i class="block w-2.5 text-primary"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M1.5 12c.52-.37 1.035-.824 1.56-1.357a6.367 6.367 0 0 1 1.6-.836 6.19 6.19 0 0 0 1.546-.785c.45-.32.837-.658 1.158-1.01.313-.357.682-.76 1.136-1.083-.334-.315-.676-.67-1.02-.914l-.966-.69a7.973 7.973 0 0 1-.73-.584 16.705 16.705 0 0 0-1.117-.861C3.38 2.961 2.41 2.333 1.762 2"></path>
</svg>
</i>
        </li>
                  <li>
      <span class="">Senior Success</span>
    </li>
  </ul>
</nav>
        <h1 class="h1 text-primary text-balance">Senior Success</h1>
                  <h2 class="h3 text-primary mt-4">Making us proud</h2>
                          <div class="prose mt-12"><p>At <strong>MidasTouch School of Excellence</strong>, we take immense pride in the achievements and progress of our senior students. Our Senior Success reflects our commitment to academic excellence, personal growth, and readiness for the challenges beyond school.</p></div>
              </div>

              
<section
data-block="text"
class="relative bg-secondary-lightest py-12 lg:py-16 u-mask-bg">
  <div class="container-sm space-y-12">
        <div class="prose">
      <p>We provide personalized mentorship, advanced learning tools, and competitive exam preparation strategies to help each student discover and pursue their strengths. Our seniors actively participate in seminars, interschool competitions, career guidance programs, and social responsibility projects—building confidence and essential life skills.</p>
<p>Teachers play the role of facilitators and mentors, fostering critical thinking, time management, and effective communication. Our past graduating batches have consistently achieved academic distinction, gained admissions in reputed institutions, and set inspiring examples for the younger students.</p>
<p>At MidasTouch, Senior Success is not just about marks it's about character, resilience, and readiness for the future.</p>
<h3>Destination schools</h3>
<p> Ideal for a school website section showcasing student placements or success stories:<br /></p>

<ul>
<li>Top Achievers Admitted to Premier Institutions</li>
<li>Proud Placements in Leading CBSE & International Schools</li>
<li>Where Our Stars Shine Next: Future Schools Revealed</li>
<li>Student Success Stories: From MidasTouch to Top Campuses</li>
<li>Continuing Excellence: Schools That Welcomed Our Graduates</li>
<li>Destination Achieved: Prestigious School Admissions</li>
<li>Next Chapter Begins: Our Students’ New Learning Journeys</li>
<li>Shaping Futures: Our Alumni in India’s Best Schools</li>
<li>Pathways to Excellence: Senior Students Moving Forward</li>
<li>From Here to Greatness: Our Graduates' Next Schools</li>
</ul>
    </div>
      </div>
  <div class="clear-both"></div>
</section>          </div>
  </article>
      </main>
	 
	 
	 
	  <?php require_once("includes/enquiry.php"); ?>
<?php require_once("includes/footer.php"); ?>
      <div class="c-button-chat origin-right animate-scale-bounce js-chat-btn hidden" style="--delay: 2s; --duration: 2s;">
        <a href="javascript:void(Tawk_API.toggle())"><span class="sr-only">Live Chat</span></a>
      </div>
      <div class="c-button-visit origin-right animate-scale-bounce" style="--delay: 1.5s; --duration: 2s;">
        <a href="#">
          <span class="sr-only">Book a visit</span>
        </a>
      </div>

 <div
  class="fixed inset-0 bg-white bg-opacity-90 p-10 md:px-24 flex items-center justify-center z-50"
  x-data="{open: false, content: ''}"
  @open-lightbox.window="open = true; content = $event.detail"
  x-show="open" x-cloak
  x-transition.opacity.duration.300ms>
  <div x-html="content" class="w-full"></div>
  <button
    class="appearance-none absolute right-5 top-5"
    @click="open = false; content = ''">
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
    </svg>
  </button>
</div>
    
<?php require_once("includes/scripts.php"); ?>