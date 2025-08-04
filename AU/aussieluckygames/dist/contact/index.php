<?php include "../header.php"; ?>
<section class="max-w-6xl mx-auto px-4 py-16 text-gray-800">
  <a href="/" class="text-green-500 hover:underline text-sm mb-6 inline-block">&larr; Back to Home</a>

  <h1 class="text-4xl font-bold text-green-600 mb-2">Contact Us</h1>
  <p class="mb-10">Have questions or need assistance? Our team is here to help. Reach out to us using any of the methods below.</p>

  <div class="grid md:grid-cols-2 gap-6">
    <!-- Contact Form -->
    <div class="border border-gray-200 rounded-xl p-6 bg-white">
      <h2 class="text-lg font-semibold text-green-600 mb-2">Get in Touch</h2>
      <p class="text-sm mb-4 text-gray-600">Fill out the form and we'll get back to you as soon as possible.</p>
      <form class="space-y-4">
        <input type="text" placeholder="Your name" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
        <input type="email" placeholder="Your email" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
        <input type="text" placeholder="Subject of your inquiry" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
        <textarea placeholder="Your message" rows="5" class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none"></textarea>
        <button  class="w-full bg-green-500 text-white py-2 px-4 rounded-lg hover:bg-green-600 transition">Send Message</button>
      </form>
    </div>

    <!-- Contact Information -->
    <div class="space-y-6">
      <div class="border border-gray-200 rounded-xl p-6 bg-white">
        <h3 class="text-lg font-semibold text-green-600 mb-4">Contact Information</h3>
        <ul class="space-y-3 text-sm">
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg></div>
            <div>
              <p class="font-medium text-gray-800">Email</p>
              <a href="mailto:support@[CURRENT_DOMAIN_NO_TLD].com" class="text-green-600 underline">support@[CURRENT_DOMAIN_NO_TLD].com</a>
              <p class="text-gray-500">We respond within 24 hours</p>
            </div>
          </li>
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg></div>
            <div>
              <p class="font-medium text-gray-800">Phone</p>
              <p class="text-green-600">1800 123 456</p>
              <p class="text-gray-500">Mon–Fri, 9am–5pm AEST</p>
            </div>
          </li>
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-square text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg></div>
            <div>
              <p class="font-medium text-gray-800">Live Chat</p>
              <p class="text-gray-700">Available on our website</p>
              <p class="text-gray-500">7 days a week, 8am–8pm AEST</p>
            </div>
          </li>
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
            <div>
              <p class="font-medium text-gray-800">Office</p>
              <p class="text-gray-700">322 King William St, Adelaide SA 5000, Australia</p>
            </div>
          </li>
        </ul>
      </div>

      <!-- Responsible Gambling Support -->
      <div class="border border-gray-200 rounded-xl p-6 bg-white">
        <h3 class="text-lg font-semibold text-green-600 mb-2">Responsible Gambling Support</h3>
        <p class="text-sm text-gray-600 mb-4">Need help with gambling-related issues?</p>
        <ul class="space-y-3 text-sm">
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg></div>
            <div>
              <p class="font-medium text-gray-800">Gambling Helpline</p>
              <p class="text-green-600">1800 858 858</p>
              <p class="text-gray-500">24/7 Free and confidential support</p>
            </div>
          </li>
          <li class="flex gap-2 items-start">
            <div class="pt-1 text-green-600"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-brand-600 mt-0.5 h-5 w-5" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg></div>
            <div>
              <p class="font-medium text-gray-800">Online Support</p>
              <a href="https://www.gamblinghelponline.org.au" class="text-green-600 underline">www.gamblinghelponline.org.au</a>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<?php include "../footer.php"; ?>
