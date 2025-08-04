<footer class="bg-[#0C0A16] text-gray-300 text-sm pt-16 pb-8 px-4">
  <div class="max-w-7xl mx-auto text-center space-y-10">

    <div class="flex items-center justify-center gap-8">
      <p class="text-white font-semibold text-lg">Over 400 games to choose from!</p>
      <button data-open-sign
        class="inline-block px-8 py-4 bg-blue-600 text-white text-lg border border-transparent font-medium rounded-lg shadow hover:bg-blue-700">
        CREATE ACCOUNT
      </button>
    </div>

    <div>
      <h3 class="text-white font-semibold text-base mb-2">Legal</h3>
      <div class="flex justify-center flex-wrap gap-6 text-gray-400">
        <a href="/terms" class="hover:text-blue-500 hover:font-semibold">Terms and Conditions</a>
        <a href="/privacy" class="hover:text-blue-500 hover:font-semibold">Privacy Policy</a>
        <a href="/responsible" class="hover:text-blue-500 hover:font-semibold">Responsible Gaming</a>
      </div>
    </div>

    <div>
      <div class="mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-center space-x-8">
        <p class="text-white font-semibold uppercase tracking-wide">THE OFFICIAL ONLINE CASINO PARTNER OF</p>
        <img class="h-16 w-auto" src="../img/leafs.webp" alt="leafs logo">
        <img class="h-16 w-auto" src="../img/raptor.webp" alt="raptor logo">
      </div>



      <div class="flex flex-wrap justify-center items-center gap-6 mt-6 max-w-6xl">
        <a href="https://www.apricot.co.im/"> <img  src="../img/apricot_274px_white.svg" alt="Visa" class="hover:scale-125 h-24"> </a>
        <a href="https://igamingontario.ca/en/"> <img  src="../img/ONT_logo_igaming_color_invert_en.webp" alt="" class="hover:scale-125 h-16"></a>
        <a > <img  src="../img/visa.webp" alt="" class="hover:scale-125 h-10"></a>
        <a > <img  src="../img/mastercard.webp" alt="" class="hover:scale-125 h-12"></a>
        <a > <img  src="../img/interac.webp" alt="" class="hover:scale-125 h-12"></a>
        <a href="https://www.responsiblegambling.org/"> <img  src="../img/rgcheck-white.svg" alt="" class="hover:scale-125 h-16"></a>
        <a> <img  src="../img/ONT_logo_instadebit.webp" alt="" class="hover:scale-125 h-12"></a>
      </div>


      <div class="bg-white max-w-6xl rounded-xl py-4 px-6 mt-10 flex flex-wrap justify-center items-center gap-6 text-gray-500">
        <a href="https://www.playsmart.ca/finding-help/"><img src="../img/playsmart.webp" alt="PlaySmart" class="hover:scale-125  h-10" /> </a>
        <a href="https://www.camh.ca/"><img src="../img/camh.webp" alt="camh" class="hover:scale-125  h-10" /> </a>
        <a href="https://www.canada.ca/"><img src="../img/canada.webp" alt="canada" class="hover:scale-125  h-10" /> </a>
        <a href="https://www.agco.ca/en"><img src="../img/agco_b.webp" alt="agco_b" class="hover:scale-125  h-10" /> </a>
        <a href="https://connexontario.ca/"><img src="../img/connexontario_b.webp" alt="connexontario_b" class="hover:scale-125  h-8" /> </a>
      </div>


      <div class="my-8 text-xs text-gray-500 space-y-2">
        <div class="flex flex-wrap justify-center items-center gap-8 max-w-6xl mt-8">
        <a><img src="../img/ONT_logo-since98_en.webp" alt="logo-since98_b" class=" hover:scale-125 h-16" /> </a>
        <a href="responsible"><img src="../img/ONT_icn_19logo_en.webp" alt="icn_19logo" class=" hover:scale-125 h-16" /> </a>
        <a href="https://www.connexontario.ca/en-ca/"><img src="../img/ONT_logo_ConnexOnt_Num.webp" alt="ConnexOnt" class=" hover:scale-125 h-12" /> </a>
        <a><img src="../img/alldevices.webp" alt="alldevices" class=" hover:scale-125 h-12" /> </a>

        </div>
        <p class="max-w-3xl mx-auto leading-snug">
          CADTREE LIMITED (operating as [CURRENT_DOMAIN_NO_TLD].com) is a licensed entity regulated by the Alcohol and Gaming
          Commission of Ontario (AGCO), license number OPIG1236392.
          <br />© 2025 
        </p>
      </div>
    </div>
</footer>

<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden"
  aria-labelledby="loginModalTitle" role="dialog" aria-modal="true">
  <div id="loginOverlay" class="absolute inset-0"></div>
  <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full mx-4 sm:mx-0">
    <button id="closeLogin" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 focus:outline-none"
      aria-label="Close login form">
      X
    </button>
    <div class="px-6 py-8">
      <h2 id="loginModalTitle" class="text-2xl font-extrabold text-gray-800 text-center">
        Log In
      </h2>
      <form class="mt-6 space-y-6">
        <div>
          <label for="email" class="block text-sm font-medium text-gray-700">
            Email
          </label>
          <input id="email" name="email" type="email"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="you@example.com" />
        </div>
        <div>
          <label for="password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <input id="password" name="password" type="password"
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="********" />
        </div>
        <div class="flex items-center">
          <input id="remember_me" name="remember_me" type="checkbox"
            class="h-4 w-4 text-blue-600 border-gray-300 rounded focus:ring-blue-400" />
          <label for="remember_me" class="ml-2 block text-sm text-gray-700">
            Remember me
          </label>
        </div>
        <div>
          <button id="LogIn"
            class="w-full flex justify-center px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Log In
          </button>
        </div>
      </form>
      <div id="loginSuccessMessage" class="mt-6 p-6 bg-green-50 border border-green-200 rounded-lg text-center hidden">
        <h3 class="text-xl font-semibold text-green-800">Successfully Logged In!</h3>
        <p class="mt-2 text-green-700">
          Welcome back! You have been logged in.
        </p>
        <div class="mt-4">
          <button id="continueAfterLogin"
            class="px-6 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Continue
          </button>
        </div>
      </div>
      <div class="mt-4 text-center">
        <a href="/forgot" class="text-sm text-blue-600 hover:underline">
          Forgot your password?
        </a>
      </div>
    </div>
  </div>
</div>

<div id="signupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden"
  aria-labelledby="signupModalTitle" role="dialog" aria-modal="true">
  <div id="signupOverlay" class="absolute inset-0"></div>

  <div class="relative bg-white rounded-xl shadow-xl max-w-md w-full mx-4 sm:mx-0">
    <button id="closeSignup" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700 focus:outline-none"
      aria-label="Close sign up form">
      X
    </button>

    <div class="px-6 py-8">
      <h2 id="signupModalTitle" class="text-2xl font-extrabold text-gray-800 text-center">
        Create Account
      </h2>

      <form id="signupForm" class="mt-6 space-y-6">
  
        <div>
          <label for="first_name" class="block text-sm font-medium text-gray-700">
            First Name
          </label>
          <input id="first_name" name="first_name" type="text" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="John" />
        </div>

  
        <div>
          <label for="last_name" class="block text-sm font-medium text-gray-700">
            Last Name
          </label>
          <input id="last_name" name="last_name" type="text" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="Doe" />
        </div>

  
        <div>
          <label for="signup_email" class="block text-sm font-medium text-gray-700">
            Email
          </label>
          <input id="signup_email" name="email" type="email" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="you@example.com" />
        </div>

  
        <div>
          <label for="signup_password" class="block text-sm font-medium text-gray-700">
            Password
          </label>
          <input id="signup_password" name="password" type="password" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="********" />
        </div>

  
        <div>
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">
            Confirm Password
          </label>
          <input id="confirm_password" name="confirm_password" type="password" required
            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-transparent"
            placeholder="********" />
        </div>

        <div>
          <button id="createAcc"
            class="w-full flex justify-center px-4 py-2 bg-blue-600 text-white font-medium rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400">
            Create Account
          </button>
        </div>
      </form>

      <div id="signupSuccessMessage" class="mt-6 p-6 bg-green-50 border border-green-200 rounded-lg text-center hidden">
        <h3 class="text-xl font-semibold text-green-800">Account Created!</h3>
        <p class="mt-2 text-green-700">
          Your account has been successfully created. You can now&nbsp;
          <button id="goToLoginFromSuccess" class="text-blue-600 hover:underline focus:outline-none">
            Log In
          </button>
          .
        </p>
      </div>

      <div class="mt-4 text-center">
        <p class="text-sm text-gray-600">
          Already have an account?
          <button id="switchToLogin" class="text-blue-600 hover:underline focus:outline-none">
            Log In
          </button>
        </p>
      </div>
    </div>
  </div>
</div>


</body>
</html>