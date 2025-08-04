<?php include "../header.php"; ?>

<section id="resetPassword" class="py-16 px-4 bg-gray-900">
  <div class="max-w-md mx-auto bg-gray-800 border border-gray-700 rounded-2xl shadow-xl p-8 space-y-6">
    <header class="text-center">
      <h2 class="text-3xl font-extrabold text-orange-500">Reset Your Password</h2>
      <p class="mt-2 text-sm text-gray-400">Available to Ontario residents aged 19 and older. Play responsibly.</p>
    </header>

    <form class="space-y-5">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
        <input type="email" id="email" name="email" required
               class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
               placeholder="you@example.com" />
      </div>

      <button
        class="w-full bg-orange-500 hover:bg-orange-600 text-white font-medium py-2 px-4 rounded-md transition-colors">
        Send Reset Instructions
      </button>
    </form>

    <div class="bg-green-100 border border-green-300 text-green-800 rounded-md px-4 py-3 text-sm" role="alert">
      If the email entered is linked to an account, you’ll receive a secure link to reset your password.
    </div>

    <div class="flex justify-between text-sm text-gray-400">
      <button data-open-login class="hover:underline text-orange-500">Back to Sign In</button>
      <button data-open-sign class="hover:underline text-orange-500">Need an Account?</button>
    </div>
  </div>
</section>

<?php include "../footer.php"; ?>