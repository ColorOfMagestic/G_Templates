<?php include "../header.php"; ?>

<section id="resetPassword" class="py-16 px-4 bg-gradient-to-b from-blue-50 via-white to-blue-50">
  <div class="max-w-md mx-auto bg-white border border-blue-200 rounded-2xl shadow-lg p-8 space-y-6">

    <header class="text-center">
      <h2 class="text-3xl font-extrabold text-blue-700">Reset Your Password</h2>
      <p class="mt-2 text-sm text-gray-600">Licensed for Ontario residents 19+. Play responsibly.</p>
    </header>

    <form class="space-y-5" action="" method="POST">
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
        <input
          type="email"
          id="email"
          name="email"
          required
          class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
          placeholder="you@example.com"
        />
      </div>

      <button
        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-md transition-colors"
      >
        Send Reset Link
      </button>
    </form>

    <div class="bg-green-100 border border-green-300 text-green-800 rounded-md px-4 py-3 text-sm" role="alert">
      If your email exists in our system, you’ll receive a reset link shortly.
    </div>

    <div class="flex justify-between text-sm text-gray-600">
      <button data-open-login class="hover:underline text-blue-600">Back to Login</button>
      <button data-open-sign class="hover:underline text-blue-600">Create an Account</button>
    </div>

  </div>
</section>





<?php include "../footer.php"; ?>