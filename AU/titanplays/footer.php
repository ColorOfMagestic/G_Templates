<footer class="bg-gray-900 text-gray-300 text-sm py-12 px-4">
  <div class="max-w-7xl mx-auto space-y-12">
    <div class="text-center space-y-4">
      <h3 class="text-xl font-semibold text-orange-500">Legal Information</h3>
      <div class="flex justify-center flex-wrap gap-8">
        <a href="/responsible" class="hover:text-white">Responsible Gambling</a>
        <a href="/terms" class="hover:text-white">Terms of Use</a>
        <a href="/privacy" class="hover:text-white">Privacy Notice</a>
      </div>
    </div>

    <div class="text-center">
      <h3 class="text-xl font-semibold text-orange-500 mb-4">Certified Partners &amp; Payment Options</h3>
      <div class="flex justify-center flex-wrap items-center gap-8">
        <a href="https://igamingontario.ca/en/">
          <img src="../img/ONT_logo_igaming_color_invert_en.webp" alt="iGaming Ontario Authorized Operator" class="h-16 hover:scale-110 transition-transform" />
        </a>
        <img src="../img/visa.webp" alt="Visa Payment Method" class="h-10 hover:scale-110 transition-transform" />
        <img src="../img/mastercard.webp" alt="Mastercard Accepted" class="h-10 hover:scale-110 transition-transform" />
        <img src="../img/interac.webp" alt="Interac Logo" class="h-10 hover:scale-110 transition-transform" />
      </div>
    </div>

    <div class="text-center">
      <h3 class="text-xl font-semibold text-orange-500 mb-4">Support &amp; Gambling Awareness</h3>
      <div class="flex justify-center flex-wrap items-center gap-8">
        <a href="https://www.playsmart.ca/finding-help/">
          <img src="../img/playsmart.webp" alt="PlaySmart Responsible Play" class="h-10 hover:scale-110 transition-transform" />
        </a>
        <a href="https://www.camh.ca/">
          <img src="../img/camh.webp" alt="CAMH Mental Health Services" class="h-10 hover:scale-110 transition-transform" />
        </a>
      </div>
    </div>

    <div class="text-center">
      <p class="text-gray-500 leading-relaxed max-w-3xl mx-auto">
        CADTREE LIMITED, operating the [CURRENT_DOMAIN_NO_TLD].com platform, is registered and regulated by the Alcohol and Gaming Commission of Ontario (AGCO). Licence Number: OPIG1236392.<br />
        © 2025 [CURRENT_DOMAIN_NO_TLD] — All rights reserved. Ontario residents only, 19+.
      </p>
    </div>
  </div>
</footer>




<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" aria-labelledby="loginModalTitle" role="dialog" aria-modal="true">
  <div id="loginOverlay" class="absolute inset-0"></div>
  <div class="relative bg-gray-800 text-white rounded-xl shadow-xl max-w-md w-full mx-4 sm:mx-0">
    <button id="closeLogin" class="absolute top-3 right-3 text-gray-400 hover:text-gray-200 focus:outline-none" aria-label="Close login form">
      X
    </button>

    <div class="px-6 py-8">
      <h2 id="loginModalTitle" class="text-2xl font-extrabold text-center">
        Access Your Ontario Casino Account
      </h2>

      <form class="mt-6 space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-300">Email Address</label>
          <input id="email" name="email" type="email"
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="you@example.com" />
        </div>

        <div>
          <label for="password" class="block text-sm font-medium text-gray-300">Password</label>
          <input id="password" name="password" type="password"
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="Enter your password" />
        </div>

        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox"
            class="h-4 w-4 text-orange-500 border-gray-600 rounded focus:ring-orange-500 bg-gray-700" />
          <label for="remember_me" class="ml-2 block text-sm text-gray-300">Keep me signed in</label>
        </div>

        <div>
          <button id="LogIn"
            class="w-full flex justify-center px-4 py-2 bg-orange-500 text-white font-medium rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
            Sign In
          </button>
        </div>
      </form>

      <div id="loginSuccessMessage" class="mt-6 p-6 bg-green-50 border border-green-200 rounded-lg text-center hidden">
        <h3 class="text-xl font-semibold text-green-800">Login Successful</h3>
        <p class="mt-2 text-green-700">Welcome back! You're securely signed in to your Ontario-based account.</p>
        <div class="mt-4">
          <button id="continueAfterLogin"
            class="px-6 py-2 bg-orange-500 text-white rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
            Continue
          </button>
        </div>
      </div>

      <div class="mt-4 text-center">
        <a href="/forgot" class="text-sm text-orange-500 hover:underline">
          Trouble signing in?
        </a>
      </div>
    </div>
  </div>
</div>



<div id="signupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden" aria-labelledby="signupModalTitle" role="dialog" aria-modal="true">
  <div id="signupOverlay" class="absolute inset-0"></div>

  <div class="relative bg-gray-800 text-white rounded-xl shadow-xl max-w-md w-full mx-4 sm:mx-0">
    <button id="closeSignup" class="absolute top-3 right-3 text-gray-400 hover:text-gray-200 focus:outline-none" aria-label="Close sign up form">
      X
    </button>

    <div class="px-6 py-8">
      <h2 id="signupModalTitle" class="text-2xl font-extrabold text-center">
        Register for Your Ontario Casino Account
      </h2>

      <form id="signupForm" class="mt-6 space-y-6" autocomplete="off">
        <div>
          <label for="first_name" class="block text-sm font-medium text-gray-300">First Name</label>
          <input id="first_name" name="first_name" type="text" required
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="John" />
        </div>

        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-300">Last Name</label>
          <input id="last_name" name="last_name" type="text" required
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="Doe" />
        </div>

        <div>
          <label for="signup_email" class="block text-sm font-medium text-gray-300">Email Address</label>
          <input id="signup_email" name="email" type="email" required
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="you@example.com" />
        </div>

        <div>
          <label for="signup_password" class="block text-sm font-medium text-gray-300">Password</label>
          <input id="signup_password" name="password" type="password" required
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="Create a secure password" />
        </div>

        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-300">Confirm Password</label>
          <input id="confirm_password" name="confirm_password" type="password" required
            class="mt-1 block w-full px-4 py-2 bg-gray-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent"
            placeholder="Repeat your password" />
        </div>

        <div>
          <button id="createAcc"
            class="w-full flex justify-center px-4 py-2 bg-orange-500 text-white font-medium rounded-md hover:bg-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-500">
            Create Account
          </button>
        </div>
      </form>

      <div id="signupSuccessMessage" class="mt-6 p-6 bg-green-50 border border-green-200 rounded-lg text-center hidden">
        <h3 class="text-xl font-semibold text-green-800">You're Registered</h3>
        <p class="mt-2 text-green-700">
          Your Ontario gaming account has been successfully created.
          <button id="goToLoginFromSuccess" class="text-orange-500 hover:underline focus:outline-none">
            Sign in now
          </button>
          to start exploring.
        </p>
      </div>

      <div class="mt-4 text-center">
        <p class="text-sm text-gray-300">
          Already have an account?
          <button id="switchToLogin" class="text-orange-500 hover:underline focus:outline-none">
            Sign In
          </button>
        </p>
      </div>
    </div>
  </div>
</div>



<script src="../scripts/script.js"></script>
</body>

</html>