<?php include "header.php"; ?>

<section id="awaiting-results" class="bg-[#FAF8F0] h-[70vh] flex items-center justify-center px-4 md:px-6">
  <div class="max-w-3xl text-center space-y-8 text-[#1E1E1E] font-['Inter']">
    <div class="space-y-4">
      <h1 class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] uppercase">
        Awaiting Official Results
      </h1>
      <p class="text-base md:text-lg leading-relaxed">
        The draw has taken place and the winning numbers are being verified. Please check back shortly — results will be published here as soon as they are confirmed.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        At <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, we only display verified results sourced from official lottery operators across Australia. This ensures accuracy and protects your trust.
      </p>
      <p class="text-base md:text-lg leading-relaxed">
        Refresh this page in a few minutes, or enable notifications to be among the first to see the confirmed numbers for tonight’s draw.
      </p>
    </div>
    <div class="flex justify-center">
      <div class="animate-spin rounded-full h-12 w-12 border-4 border-[#FFD700] border-t-transparent"></div>
    </div>
    <p class="text-sm text-[#4B4B4B]">Last update: <span id="timestamp" class="font-semibold">Just now</span></p>
  </div>
</section>



<?php include "footer.php"; ?>