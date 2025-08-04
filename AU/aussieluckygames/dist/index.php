<?php include "header.php"; ?>
<main class="text-md md:text-xl">
<section class="intro w-full bg-gradient-to-b from-white to-green-50">
    <div class="mt-10 mx-5 max-w-screen-xl md:mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">
      <!-- Left Block -->
      <div>
        <p class="text-sm px-4 py-2 border-2 border-green-300 text-green-600 rounded-lg text-center">
          Licensed by South Australia Consumer and Business Services
        </p>
        <h1 class="text-4xl mt-4 font-bold md:text-5xl">
          Your <span class="text-purple-500">Lucky</span> <span class="text-green-500">Day</span> Starts with a Ticket
        </h1>
        <p class="my-2 text-gray-700">
          Australia's most trusted platform for official lottery tickets. Play your favorite games securely from anywhere, anytime.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 my-6">
          <button class="w-full sm:w-auto items-center px-6 py-2 text-white rounded-lg hover:bg-green-600 transition bg-green-500" data-login-button>Buy Tickets Now</button>
          <button class="w-full sm:w-auto items-center px-6 py-2 border-2 border-green-500 text-green-500 rounded-lg hover:bg-green-50 transition" data-login-button>Try Your Luck</button>
        </div>

        <div class="flex flex-col gap-3 mt-6 text-sm text-gray-700">
          <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield text-green-500 h-5 w-5" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>Government Licensed</p>
          <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock text-green-500 h-5 w-5" aria-hidden="true"><rect width="18" height="11" x="3" y="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>Secure Payments</p>
          <p class="flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-flag text-green-500 h-5 w-5" aria-hidden="true"><path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z"></path><line x1="4" x2="4" y1="22" y2="15"></line></svg>100% Australian Owned</p>
        </div>

        <p class="text-xs my-6 text-center px-4 py-2 border-2 border-green-300 text-green-600 rounded-lg">
          For Australian residents 18+ only. Please play responsibly.
        </p>
      </div>

      <!-- Right Ticket Block -->
      <div class="bg-white border border-green-300 rounded-2xl p-6 shadow-lg">
        <div class="flex justify-between items-center mb-4">
          <div>
            <h3 class="text-lg font-semibold">Official Lottery</h3>
            <p class="text-sm text-gray-500">Verified & Secure</p>
          </div>
          <div class="bg-green-500 text-white text-xs px-3 py-1 rounded-xl"> $50M Jackpot </div>
        </div>
        <div class="my-4">
          <p class="text-sm mb-2">Your Lucky Numbers</p>
          <div class="flex gap-2 justify-center">
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">7</span>
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">13</span>
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">23</span>
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">26</span>
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">37</span>
            <span class="bg-green-100 text-green-800 w-10 h-10 flex items-center justify-center rounded-full border">42</span>
          </div>
        </div>
        <div class="flex justify-between items-center">
          <div>
            <p class="text-xs text-gray-500">Next Draw</p>
            <p class="text-sm font-medium">Saturday, 22 March</p>
          </div>
          <button class="px-4 py-2 text-xs bg-green-500 text-white rounded-lg hover:bg-green-600" data-login-button>Play Now</button>
        </div>
      </div>
    </div>
  </section>

  <section id="lotteries" class="draws">
    <div class="mt-20 mx-5 max-w-screen-xl md:mx-auto">
      <h2 class="text-3xl my-4 font-bold md:text-4xl"><span class="text-purple-500">Explore Our</span > Most <span class="text-green-500 ">Popular Draws</span></h2>
      <p>Choose from a range of official Australian lotteries with various draw times and prize pools.</p>
      <div class="cards my-8 flex flex-col gap-4 md:flex-row">
        <div
          class="cart  max-w-md mx-auto bg-white rounded-xl shadow-lg border-2 hover:border-green-500 shadow-green-500/50 transition duration-200">
          <div class="p-4">
            <div class="flex justify-between">
              <h4 class="uppercase tracking-wide text-xl text-green-500 font-bold">AussieJackpot Mondays</h4>
              <span
                class="badge rounded-xl bg-green-500 text-[10px] flex items-center  text-white h-8 px-2 hover:bg-green-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-sparkles mr-1 h-3.5 w-3.5" aria-hidden="true">
                  <path
                    d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                  </path>
                  <path d="M20 3v4"></path>
                  <path d="M22 5h-4"></path>
                  <path d="M4 17v2"></path>
                  <path d="M5 18H3"></path>
                </svg> Featured
              </span>

            </div>
            <p class="mt-2 text-gray-600">Big weekly draw, every Monday at 7:30 PM</p>

            <ul class="mt-4 space-y-2">
              <li class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-calendar h-5 w-5 text-green-500" aria-hidden="true">
                  <path d="M8 2v4"></path>
                  <path d="M16 2v4"></path>
                  <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                  <path d="M3 10h18"></path>
                </svg>
                <span class="text-gray-700">Weekly on Mondays</span>
              </li>
              <li class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-clock text-green-500 h-5 w-5" aria-hidden="true">
                  <circle cx="12" cy="12" r="10"></circle>
                  <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <span class="text-gray-700">Draw at 7:30 PM AEST</span>
              </li>
              <li class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-dollar-sign text-green-500 h-5 w-5" aria-hidden="true">
                  <line x1="12" x2="12" y1="2" y2="22"></line>
                  <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                </svg>
                <span class="text-gray-700">Tickets from $5.50</span>
              </li>
              <li class="flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                  class="lucide lucide-trophy text-green-500 h-5 w-5" aria-hidden="true">
                  <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                  <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                  <path d="M4 22h16"></path>
                  <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                  <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                  <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                </svg>
                <span class="text-gray-700">Jackpot: $35M</span>
              </li>
            </ul>

            <button data-login-button
              class="mt-6 items-center px-4 py-2  text-white rounded-lg hover:bg-green-400 transition bg-green-500"">
          Buy Tickets
        </button>
  
    </div>
        </div>
        <div class=" cart max-w-md mx-auto bg-white rounded-xl shadow-lg border-2 hover:border-blue-600
              shadow-blue-600/50 transition duration-200">
              <div class="p-4">
                <div class="flex justify-between">
                  <h4 class="uppercase tracking-wide text-xl text-blue-600 font-bold">Weekend WinLotto</h4>
                  <span
                    class="badge rounded-xl bg-blue-600 text-[10px] flex items-center  text-white h-8 px-2 hover:bg-blue-600">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-sparkles mr-1 h-3.5 w-3.5" aria-hidden="true">
                      <path
                        d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                      </path>
                      <path d="M20 3v4"></path>
                      <path d="M22 5h-4"></path>
                      <path d="M4 17v2"></path>
                      <path d="M5 18H3"></path>
                    </svg> Featured
                  </span>

                </div>
                <p class="mt-2 text-gray-600">A great way to try your luck every Saturday</p>

                <ul class="mt-4 space-y-2">
                  <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-calendar h-5 w-5 text-blue-600" aria-hidden="true">
                      <path d="M8 2v4"></path>
                      <path d="M16 2v4"></path>
                      <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                      <path d="M3 10h18"></path>
                    </svg>
                    <span class="text-gray-700">Weekly on Saturdays</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-clock text-blue-600 h-5 w-5" aria-hidden="true">
                      <circle cx="12" cy="12" r="10"></circle>
                      <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                    <span class="text-gray-700">Draw at 8:30 PM AEST</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-dollar-sign text-blue-600 h-5 w-5" aria-hidden="true">
                      <line x1="12" x2="12" y1="2" y2="22"></line>
                      <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                    <span class="text-gray-700">Tickets from $4.40</span>
                  </li>
                  <li class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                      stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                      class="lucide lucide-trophy text-blue-600 h-5 w-5" aria-hidden="true">
                      <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                      <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                      <path d="M4 22h16"></path>
                      <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                      <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                      <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                    </svg>
                    <span class="text-gray-700">Jackpot: $50M</span>
                  </li>
                </ul>

                <button data-login-button
                  class="mt-6 items-center px-4 py-2  text-white rounded-lg hover:bg-blue-500 transition bg-blue-600"">
          Buy Tickets
        </button>
  
    </div>
        </div>
        <div class=" cart max-w-md mx-auto bg-white rounded-xl shadow-lg border-2 hover:border-yellow-400
                  shadow-yellow-400/50 transition duration-200">
                  <div class="p-4">
                    <div class="flex justify-between">
                      <h4 class="uppercase tracking-wide text-xl text-yellow-400 font-bold">QuickDaily Picks</h4>
                      <span
                        class="badge rounded-xl bg-yellow-600 text-[10px] flex items-center  text-white h-8 px-2 hover:bg-yellow-600">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-sparkles mr-1 h-3.5 w-3.5" aria-hidden="true">
                          <path
                            d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z">
                          </path>
                          <path d="M20 3v4"></path>
                          <path d="M22 5h-4"></path>
                          <path d="M4 17v2"></path>
                          <path d="M5 18H3"></path>
                        </svg> Featured
                      </span>

                    </div>
                    <p class="mt-2 text-gray-600">Affordable daily games with fast results</p>

                    <ul class="mt-4 space-y-2">
                      <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-calendar h-5 w-5 text-yellow-400" aria-hidden="true">
                          <path d="M8 2v4"></path>
                          <path d="M16 2v4"></path>
                          <rect width="18" height="18" x="3" y="4" rx="2"></rect>
                          <path d="M3 10h18"></path>
                        </svg>
                        <span class="text-gray-700">Daily draws</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-clock text-yellow-400 h-5 w-5" aria-hidden="true">
                          <circle cx="12" cy="12" r="10"></circle>
                          <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span class="text-gray-700">Draw at 9:00 PM AEST</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-dollar-sign text-yellow-400 h-5 w-5" aria-hidden="true">
                          <line x1="12" x2="12" y1="2" y2="22"></line>
                          <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                        </svg>
                        <span class="text-gray-700">Tickets from $2.20</span>
                      </li>
                      <li class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                          stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                          class="lucide lucide-trophy text-yellow-400 h-5 w-5" aria-hidden="true">
                          <path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path>
                          <path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path>
                          <path d="M4 22h16"></path>
                          <path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path>
                          <path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path>
                          <path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path>
                        </svg>
                        <span class="text-gray-700">Jackpot: $10M</span>
                      </li>
                    </ul>

                    <button data-login-button
                      class="mt-6 items-center px-4 py-2  text-white rounded-lg hover:bg-yellow-500 transition bg-yellow-600">
                      Buy Tickets
                    </button>

                  </div>
              </div>

          </div>
            <div class=" flex items-center justify-center ">
              <a href="#" class="border-2 border-green-500 rounded-lg px-4 py-2 my-4 flex items-center justify-center hover:bg-green-100" data-login-button>View All Lotteries</a>

            </div>

            <p class="text-sm px-4 py-2 my-6 border-2 border-green-300 rounded-lg text-center">All games are conducted by licensed lottery operators in Australia. Odds vary by game. See game rules for details..</p>
        </div>


  </section>

  <section id="how" class="bg-white py-16">
  <div class="max-w-screen-xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold">
      <span class="text-purple-600">How It</span> <span class="text-green-500">Works</span>
    </h2>
    <p class="mt-2 text-gray-600 text-md md:text-lg">
      Three simple steps to play your favorite lotteries online.
    </p>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Step 1 -->
      <div class="bg-white rounded-2xl shadow-md border p-6 flex flex-col items-center text-left hover:shadow-xl transition">
        <div class="bg-purple-100 text-purple-600 w-12 h-12 flex items-center justify-center rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mouse-pointer-click h-6 w-6" aria-hidden="true"><path d="M14 4.1 12 6"></path><path d="m5.1 8-2.9-.8"></path><path d="m6 12-1.9 2"></path><path d="M7.2 2.2 8 5.1"></path><path d="M9.037 9.69a.498.498 0 0 1 .653-.653l11 4.5a.5.5 0 0 1-.074.949l-4.349 1.041a1 1 0 0 0-.74.739l-1.04 4.35a.5.5 0 0 1-.95.074z"></path></svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Step 1: Select Your Game</h3>
        <p class="text-sm text-gray-600">
          Choose from a range of official Australian lottery games with different draw times and prize pools.
        </p>
      </div>

      <!-- Step 2 -->
      <div class="bg-white rounded-2xl shadow-md border p-6 flex flex-col items-center text-left hover:shadow-xl transition">
        <div class="bg-purple-100 text-purple-600 w-12 h-12 flex items-center justify-center rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-credit-card h-6 w-6" aria-hidden="true"><rect width="20" height="14" x="2" y="5" rx="2"></rect><line x1="2" x2="22" y1="10" y2="10"></line></svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Step 2: Purchase Securely</h3>
        <p class="text-sm text-gray-600">
          Use encrypted payment options and a protected account dashboard to buy your tickets safely.
        </p>
      </div>

      <!-- Step 3 -->
      <div class="bg-white rounded-2xl shadow-md border p-6 flex flex-col items-center text-left hover:shadow-xl transition">
        <div class="bg-purple-100 text-purple-600 w-12 h-12 flex items-center justify-center rounded-full mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bell h-6 w-6" aria-hidden="true"><path d="M10.268 21a2 2 0 0 0 3.464 0"></path><path d="M3.262 15.326A1 1 0 0 0 4 17h16a1 1 0 0 0 .74-1.673C19.41 13.956 18 12.499 18 8A6 6 0 0 0 6 8c0 4.499-1.411 5.956-2.738 7.326"></path></svg>
        </div>
        <h3 class="text-lg font-semibold mb-2">Step 3: Check Results & Get Notified</h3>
        <p class="text-sm text-gray-600">
          You’ll get notified automatically if you win, and your results are saved to your account for easy checking.
        </p>
      </div>
    </div>

    <p class="text-xs text-gray-500 border border-green-100 rounded-lg mt-10 inline-block px-4 py-2 bg-green-50">
      [CURRENT_DOMAIN_NO_TLD] purchases official lottery tickets on your behalf. All tickets are securely stored and linked to your account.
    </p>
  </div>
</section>

<section id="why" class="bg-white py-20">
  <div class="max-w-screen-xl mx-auto px-4 grid md:grid-cols-2 gap-12 items-center">
    
    <!-- LEFT CONTENT -->
    <div>
      <span class="inline-block mb-4 px-4 py-1 text-sm font-medium bg-purple-100 text-purple-700 rounded-full">
        Why Players Trust Us
      </span>

      <h2 class="text-4xl font-bold mb-4">
        Australia's Most <span class="text-purple-600">Trusted</span><span class="text-green-500"> Lottery Platform</span>
      </h2>

      <p class="text-gray-600 mb-8">
        [CURRENT_DOMAIN_NO_TLD] combines security, reliability, and exceptional service to provide the best lottery experience in Australia. Here's why thousands of players choose us:
      </p>

      <div class="space-y-6">
        <!-- Item 1 -->
        <div class="flex gap-4 items-start">
          <div class="bg-purple-100 text-purple-600 rounded-full flex items-center justify-center p-2">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-badge-check h-6 w-6" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"></path><path d="m9 12 2 2 4-4"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Licensed & Regulated</h4>
            <p class="text-sm text-gray-600">
              We operate under approved state lottery laws and regulations in Australia, ensuring a legitimate service you can trust.
            </p>
          </div>
        </div>

        <!-- Item 2 -->
        <div class="flex gap-4 items-start">
          <div class="bg-purple-100 text-purple-600 p-2 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield-check h-6 w-6" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path><path d="m9 12 2 2 4-4"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Real Tickets, Not Betting</h4>
            <p class="text-sm text-gray-600">
              We purchase actual lottery entries on your behalf, not betting on outcomes like some competitors.
            </p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="flex gap-4 items-start">
          <div class="bg-purple-100 text-purple-600 p-2 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-zap h-6 w-6" aria-hidden="true"><path d="M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13 10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Instant Notifications</h4>
            <p class="text-sm text-gray-600">
              Receive immediate alerts about your results and winnings as soon as draws are completed.
            </p>
          </div>
        </div>
      </div>

      <a href="about" class="inline-block mt-8 px-6 py-2 bg-purple-600 text-white rounded-lg hover:bg-purple-700 text-sm">
        Learn More About Us
      </a>
    </div>

    <!-- RIGHT BOX -->
    <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-8 space-y-6 relative z-10">
      <div class="space-y-6">
        <div class="flex gap-4 items-start">
          <div class="bg-green-100 text-green-600 p-2 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-lock-keyhole h-6 w-6" aria-hidden="true"><circle cx="12" cy="16" r="1"></circle><rect x="3" y="10" width="18" height="12" rx="2"></rect><path d="M7 10V7a5 5 0 0 1 10 0v3"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Bank-Level Security</h4>
            <p class="text-sm text-gray-600">
              Your data and transactions are protected with 256-bit SSL encryption and secure payment gateways.
            </p>
          </div>
        </div>

        <div class="flex gap-4 items-start">
          <div class="bg-green-100 text-green-600 p-2 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-headphones h-6 w-6" aria-hidden="true"><path d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Australian Support Team</h4>
            <p class="text-sm text-gray-600">
              Our local team is available 7 days a week to assist you with any questions or concerns.
            </p>
          </div>
        </div>

        <div class="flex gap-4 items-start">
          <div class="bg-green-100 text-green-600 p-2 rounded-full flex items-center justify-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy h-6 w-6" aria-hidden="true"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"></path><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"></path><path d="M4 22h16"></path><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"></path><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"></path><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"></path></svg>
          </div>
          <div>
            <h4 class="text-lg font-semibold">Guaranteed Payouts</h4>
            <p class="text-sm text-gray-600">
              All winnings are securely processed and transferred to you without any hidden fees or delays.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TRUST BADGES BLOCK -->
  <div class="max-w-screen-xl mx-auto px-4 mt-16">
    <div class="bg-white border border-gray-100 shadow-md rounded-xl p-6 text-center">
      <h4 class="font-semibold text-gray-800 mb-1">
        Trusted by thousands of Australians
      </h4>
      <p class="text-sm text-gray-600 mb-4">
        Join our community of satisfied players across the country
      </p>

      <div class="flex flex-wrap justify-center gap-6 text-sm text-gray-800 font-medium">
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-green-500"></span>
          100% Australian Owned
        </div>
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-purple-500"></span>
          Licensed in South Australia
        </div>
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-yellow-500"></span>
          4.8/5 Customer Rating
        </div>
        <div class="flex items-center gap-2">
          <span class="w-2 h-2 rounded-full bg-blue-500"></span>
          Secure Payment Methods
        </div>
      </div>
    </div>
  </div>
</section>

<section id="promote" class="bg-white py-20">
  <div class="max-w-screen-lg mx-auto px-4 text-center">

    <h2 id="promote"  class="text-4xl font-bold mb-4">
      <span class="text-purple-600">We Promote</span> <span class="text-green-500">Responsible Play</span>
    </h2>
    <p class="text-gray-600 max-w-xl mx-auto mb-10">
      [CURRENT_DOMAIN_NO_TLD] encourages balanced, mindful play. Only users 18+ may register and purchase tickets.
    </p>

    <div class="bg-white border border-gray-100 shadow-md rounded-2xl p-6 text-left space-y-6 max-w-3xl mx-auto">

      <!-- Item 1 -->
      <div class="flex gap-4 items-center">
        <div class="text-yellow-500 mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-6 w-6" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        </div>
        <div>
          <h4 class="font-semibold">Play Within Your Means</h4>
          <p class="text-sm text-gray-700">
            Set a budget for lottery play and stick to it. Never spend more than you can afford to lose.
          </p>
        </div>
      </div>

      <!-- Item 2 -->
      <div class="flex gap-4 items-center">
        <div class="text-yellow-500 mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-6 w-6" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        </div>
        <div>
          <h4 class="font-semibold">Gambling Is Not a Financial Solution</h4>
          <p class="text-sm text-gray-700">
            Lottery games should be played for entertainment only, not as a way to solve financial problems.
          </p>
        </div>
      </div>

      <!-- Item 3 -->
      <div class="flex gap-4 items-center">
        <div class="text-yellow-500 mt-1">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-triangle-alert h-6 w-6" aria-hidden="true"><path d="m21.73 18-8-14a2 2 0 0 0-3.48 0l-8 14A2 2 0 0 0 4 21h16a2 2 0 0 0 1.73-3"></path><path d="M12 9v4"></path><path d="M12 17h.01"></path></svg>
        </div>
        <div>
          <h4 class="font-semibold">Take Regular Breaks</h4>
          <p class="text-sm text-gray-700">
            Set time limits for your play and take regular breaks to maintain perspective.
          </p>
        </div>
      </div>

      <hr class="my-4 border-gray-200">

      <div class="flex flex-col sm:flex-row  gap-12 text-sm text-gray-700">
        <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-external-link text-brand-600 h-5 w-5" aria-hidden="true"><path d="M15 3h6v6"></path><path d="M10 14 21 3"></path><path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path></svg>
          <a href="https://www.gamblinghelponline.org.au" target="_blank" class="underline hover:text-purple-700">
            www.gamblinghelponline.org.au
          </a>
        </div>
        <div class="flex items-center gap-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone text-brand-600 h-5 w-5" aria-hidden="true"><path d="M13.832 16.568a1 1 0 0 0 1.213-.303l.355-.465A2 2 0 0 1 17 15h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2A18 18 0 0 1 2 4a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-.8 1.6l-.468.351a1 1 0 0 0-.292 1.233 14 14 0 0 0 6.392 6.384"></path></svg>
          <a href="tel:1800858858" class="underline hover:text-purple-700">1800 858 858</a>
        </div>
      </div>
    </div>

    <div class="mt-10">
      <a href="responsible" class="inline-flex items-center gap-2 px-6 py-2 border border-purple-600 text-purple-600 rounded-full text-sm hover:bg-purple-50 transition">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield mr-2 h-5 w-5" aria-hidden="true"><path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path></svg>
        Learn More About Responsible Gambling
      </a>
    </div>

    <!-- Disclaimer -->
    <p class="mt-6 text-sm text-gray-600 max-w-2xl mx-auto">
      [CURRENT_DOMAIN_NO_TLD] is committed to providing a safe and supportive environment for all our customers. If you have any concerns about your gambling or that of someone you know, please contact our customer support team who can provide guidance and support.
    </p>
  </div>
</section>

<section id="review" class="bg-white py-20">
  <div class="max-w-screen-xl mx-auto px-4 text-center">
    
    <h2 class="text-4xl font-bold mb-2">
      <span class="text-purple-600">Customer</span> <span class="text-green-500">Reviews</span>
    </h2>
    <p class="text-gray-600 mb-10 max-w-2xl mx-auto">
      See what our customers have to say about their experience with [CURRENT_DOMAIN_NO_TLD].
    </p>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      
      <div class="border rounded-xl p-6 text-left shadow-sm hover:shadow-md transition">
        <div class="flex items-center gap-1 text-yellow-400 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
        </div>
        <div class="text-purple-400 text-3xl mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote h-8 w-8 opacity-50" aria-hidden="true"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg></div>
        <p class="text-gray-800 italic mb-6">
          "Simple, transparent, and I love that it’s fully Australian owned."
        </p>
        <div class="flex items-center gap-3">
          <div class="w-14 h-14 bg-purple-200 text-purple-700 font-semibold rounded-full flex items-center justify-center">
            CW
          </div>
          <div>
            <p class="font-semibold text-gray-900">Claire W.</p>
            <p class="text-sm text-gray-500">Melbourne</p>
          </div>
        </div>
      </div>

      <div class="border rounded-xl p-6 text-left shadow-sm hover:shadow-md transition">
        <div class="flex items-center gap-1 text-yellow-400 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
        </div>
        <div class="text-purple-400 text-3xl mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote h-8 w-8 opacity-50" aria-hidden="true"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg></div>
        <p class="text-gray-800 italic mb-6">
          "No spam, no tricks – just a clean way to play official lotteries."
        </p>
        <div class="flex items-center gap-3">
          <div class="w-14 h-14 bg-purple-200 text-purple-700 font-semibold rounded-full flex items-center justify-center">
            DP
          </div>
          <div>
            <p class="font-semibold text-gray-900">David P.</p>
            <p class="text-sm text-gray-500">Perth</p>
          </div>
        </div>
      </div>

      <div class="border rounded-xl p-6 text-left shadow-sm hover:shadow-md transition">
        <div class="flex items-center gap-1 text-yellow-400 mb-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-star fill-yellow-300 h-5 w-5" aria-hidden="true"><path d="M11.525 2.295a.53.53 0 0 1 .95 0l2.31 4.679a2.123 2.123 0 0 0 1.595 1.16l5.166.756a.53.53 0 0 1 .294.904l-3.736 3.638a2.123 2.123 0 0 0-.611 1.878l.882 5.14a.53.53 0 0 1-.771.56l-4.618-2.428a2.122 2.122 0 0 0-1.973 0L6.396 21.01a.53.53 0 0 1-.77-.56l.881-5.139a2.122 2.122 0 0 0-.611-1.879L2.16 9.795a.53.53 0 0 1 .294-.906l5.165-.755a2.122 2.122 0 0 0 1.597-1.16z"></path></svg>
        </div>
        <div class="text-purple-400 text-3xl mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-quote h-8 w-8 opacity-50" aria-hidden="true"><path d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path><path d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z"></path></svg></div>
        <p class="text-gray-800 italic mb-6">
          "The notifications are great - I never miss a draw result now."
        </p>
        <div class="flex items-center gap-3">
          <div class="w-14 h-14 bg-purple-200 text-purple-700 font-semibold rounded-full flex items-center justify-center">
            JS
          </div>
          <div>
            <p class="font-semibold text-gray-900">James S.</p>
            <p class="text-sm text-gray-500">Brisbane</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="faq"  class="bg-purple-50 py-20">
  <div class="max-w-screen-md mx-auto px-4 text-center">

    <h2 class="text-4xl font-bold mb-2">
      <span class="text-purple-600">Frequently Asked</span> <span class="text-green-500">Questions</span>
    </h2>
    <p class="text-gray-600 mb-10">
      Find answers to common questions about our services.
    </p>

    <!-- FAQ Items -->
    <div class="space-y-2 text-left">
      <!-- FAQ 1 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>Is [CURRENT_DOMAIN_NO_TLD] a legal platform?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        Yes. We are a registered Australian lottery ticket provider licensed by the South Australia Consumer and Business Services (CBS). We purchase official lottery tickets on your behalf and comply with all relevant gambling regulations.
        </div>
      </div>

      <!-- FAQ 2 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>How do I know I'm buying a real ticket?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        We purchase official lottery tickets on your behalf and provide you with a verified digital copy. Each ticket is linked to your account and can be viewed at any time in your dashboard.
        </div>
      </div>

      <!-- FAQ 3 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>Is there a subscription option?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        Yes! You can set up recurring purchases for your favorite draws. This ensures you never miss a draw and can be managed or cancelled at any time from your account settings.
        </div>
      </div>

      <!-- FAQ 4 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>How will I get paid if I win?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        Winnings are securely credited to your [CURRENT_DOMAIN_NO_TLD] account or paid via secure transfer. Small prizes are automatically credited to your account. For larger prizes, our team will contact you to arrange payment according to your preferences.
        </div>
      </div>

      <!-- FAQ 5 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>Are my personal and payment details secure?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        Absolutely. We use 256-bit SSL encryption for all data transmission and comply with the highest security standards for payment processing. Your personal information is never shared with third parties except as required to fulfill our services.
        </div>
      </div>

      <!-- FAQ 6 -->
      <div class="faq-item bg-white rounded-lg shadow-sm overflow-hidden">
        <button class="w-full flex justify-between items-center px-6 py-4 font-medium text-left js-faq-toggle">
          <span>What happens if I miss checking my results?</span>
          <span class="js-icon transform transition-transform">+</span>
        </button>
        <div class="px-6 py-4 text-gray-700 hidden js-faq-content">
        You don't need to worry! We automatically check all results for you and notify you of any wins via email and/or SMS. All your tickets and results are also stored in your account for you to check at any time.
        </div>
      </div>
    </div>

    <!-- Contact Support -->
    <div class="mt-10">
      <p class="text-sm text-gray-600 mb-2">Still have questions?</p>
      <a href="contact" class="inline-flex items-center gap-2 px-5 py-2 bg-purple-600 text-white rounded-full text-sm hover:bg-purple-700 transition">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-help mr-2 h-5 w-5" aria-hidden="true"><circle cx="12" cy="12" r="10"></circle><path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path><path d="M12 17h.01"></path></svg>
        Contact Support
      </a>
    </div>
  </div>
</section>

</main>
<?php include "footer.php"; ?>