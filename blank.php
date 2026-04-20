 <!doctype html>
<html lang="en">

<?php require_once("includes/head.php");  ?>

  <body class="font-body text-base font-light lg:text-md text-secondary antialiased">
        <a href="#content" role="button" aria-label="Skip to content"></a>
	 <?php require_once("includes/header.php");  ?>  
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
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