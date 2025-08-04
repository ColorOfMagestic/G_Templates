<?php include "../header.php"; ?>
<section class="max-w-6xl mx-auto px-4 py-16 text-gray-800">
  <a href="/" class="text-green-500 hover:underline text-sm mb-4 inline-block">&larr; Back to Home</a>
  <h1 class="text-4xl font-bold text-green-600 mb-2">Help Center</h1>
  <p class="mb-8">Find answers to common questions and learn how to make the most of [CURRENT_DOMAIN_NO_TLD].</p>

  <div class="mb-10">
    <div class="relative">
      <input type="text" placeholder="Search for help articles..." class="w-full pl-4 pr-12 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-300 focus:outline-none">
      <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search h-4 w-4" aria-hidden="true"><path d="m21 21-4.34-4.34"></path><circle cx="11" cy="11" r="8"></circle></svg>Search</button>
    </div>
  </div>

  <h2 class="text-xl font-semibold text-green-700 mb-4">Help Categories</h2>
  <div class="grid md:grid-cols-2 gap-6">
    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-1 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user h-5 w-5" aria-hidden="true"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Account Help</h3>
      <p class="text-sm text-gray-500 mb-3">Registration, login, profile settings, and account security</p>
      <ul class="list-disc ml-4 space-y-1 text-sm text-green-700">
        <li><a href="#" class="hover:underline">How to create an account</a></li>
        <li><a href="#" class="hover:underline">Resetting your password</a></li>
        <li><a href="#" class="hover:underline">Updating your personal information</a></li>
        <li><a href="#" class="hover:underline">Account verification process</a></li>
      </ul>
    </div>

    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-1 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-ticket h-5 w-5" aria-hidden="true"><path d="M2 9a3 3 0 0 1 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 0 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path><path d="M13 5v2"></path><path d="M13 17v2"></path><path d="M13 11v2"></path></svg> Lottery Games</h3>
      <p class="text-sm text-gray-500 mb-3">Game info, rules and draw schedules</p>
      <ul class="list-disc ml-4 space-y-1 text-sm text-green-700">
        <li><a href="#" class="hover:underline">Available lottery games</a></li>
        <li><a href="#" class="hover:underline">How to play each lottery</a></li>
        <li><a href="#" class="hover:underline">Draw schedules and cutoff times</a></li>
        <li><a href="#" class="hover:underline">Understanding odds and prizes</a></li>
      </ul>
    </div>

    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-1 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-5 w-5" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg> Payments & Withdrawals</h3>
      <p class="text-sm text-gray-500 mb-3">Payment methods, deposits, withdrawals, and transaction issues</p>
      <ul class="list-disc ml-4 space-y-1 text-sm text-green-700">
        <li><a href="#" class="hover:underline">Adding a payment method</a></li>
        <li><a href="#" class="hover:underline">Making a deposit</a></li>
        <li><a href="#" class="hover:underline">Withdrawal process and timeframes</a></li>
        <li><a href="#" class="hover:underline">Transaction history and receipts</a></li>
      </ul>
    </div>

    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-1 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help h-5 w-5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg> Responsible Gambling</h3>
      <p class="text-sm text-gray-500 mb-3">Tools and resources for controlling your gambling</p>
      <ul class="list-disc ml-4 space-y-1 text-sm text-green-700">
        <li><a href="#" class="hover:underline">Setting deposit limits</a></li>
        <li><a href="#" class="hover:underline">Self-exclusion options</a></li>
        <li><a href="#" class="hover:underline">Recognizing problem gambling</a></li>
        <li><a href="#" class="hover:underline">Support resources</a></li>
      </ul>
    </div>

    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-1 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text text-brand-600 h-5 w-5" aria-hidden="true"><path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path><path d="M14 2v4a2 2 0 0 0 2 2h4"></path><path d="M10 9H8"></path><path d="M16 13H8"></path><path d="M16 17H8"></path></svg> Popular Articles</h3>
      <ul class="list-disc ml-4 space-y-1 text-sm text-green-700">
        <li><a href="#" class="hover:underline">How to claim lottery winnings</a></li>
        <li><a href="#" class="hover:underline">Understanding lottery odds</a></li>
        <li><a href="#" class="hover:underline">Payment methods accepted</a></li>
        <li><a href="#" class="hover:underline">Account verification process</a></li>
        <li><a href="#" class="hover:underline">Draw schedules for all lotteries</a></li>
        <li><a href="#" class="hover:underline">Recurring ticket purchases</a></li>
      </ul>
    </div>

    <div class="border border-gray-200 p-4 rounded-xl bg-white">
      <h3 class="font-semibold text-green-600 mb-2 flex gap-2 items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail text-brand-600 h-5 w-5" aria-hidden="true"><path d="m22 7-8.991 5.727a2 2 0 0 1-2.009 0L2 7"></path><rect x="2" y="4" width="20" height="16" rx="2"></rect></svg> Can’t Find What You’re Looking For?</h3>
      <p class="text-sm text-gray-600 mb-4">Our support team is here to help with any questions you may have.</p>
      <div class="flex gap-4">
        <a href="../contact" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 text-sm">Contact Support</a>
        <a data-login-button class="border border-green-500 text-green-600 px-4 py-2 rounded hover:bg-green-50 text-sm">Live Chat</a>
      </div>
    </div>
  </div>
</section>
<?php include "../footer.php"; ?>
