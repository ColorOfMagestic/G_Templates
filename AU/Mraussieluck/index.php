<?php include "header.php"; ?>
<main>

  <section id="lottery-section" class="bg-[#FAF8F0] py-14 px-4 md:px-6 font-['Inter']">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">

      <div class="lg:col-span-2 space-y-8">
        <h2 class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] uppercase tracking-wide">
          Latest Lottery Results
        </h2>
        <!-- CART -->
        <div class="space-y-8">

          <!-- PowerBall -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/powerball-icon.webp" alt="PowerBall" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">PowerBall</span>
                <span class="text-sm text-[#4B4B4B]">Thu 01/08/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span
                  class="w-9 h-9 bg-[#E0E0E0] text-[#1E1E1E] font-bold rounded-full flex items-center justify-center">7</span>
                <span
                  class="w-9 h-9 bg-[#E0E0E0] text-[#1E1E1E] font-bold rounded-full flex items-center justify-center">19</span>
                <span
                  class="w-9 h-9 bg-[#E0E0E0] text-[#1E1E1E] font-bold rounded-full flex items-center justify-center">28</span>
                <span
                  class="w-9 h-9 bg-[#E0E0E0] text-[#1E1E1E] font-bold rounded-full flex items-center justify-center">35</span>
                <span
                  class="w-9 h-9 bg-[#E0E0E0] text-[#1E1E1E] font-bold rounded-full flex items-center justify-center">42</span>
                <span
                  class="w-9 h-9 bg-[#228B22] text-white font-bold rounded-full flex items-center justify-center">9</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>3</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More PowerBall results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Next Estimated Jackpot</div>
              <div class="text-lg font-bold text-[#DC143C]">AUD 120M</div>
              <div class="jackpot-timer" data-deadline="2025-08-08T09:00:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>

          <!-- Oz Lotto -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/ozlotto-icon.webp" alt="Oz Lotto" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">Oz Lotto</span>
                <span class="text-sm text-[#4B4B4B]">Tue 30/07/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-9 h-9">5</span><span class="w-9 h-9">16</span><span class="w-9 h-9">23</span><span
                  class="w-9 h-9">29</span><span class="w-9 h-9">38</span><span
                  class="w-9 h-9 bg-[#228B22] text-white font-bold flex items-center justify-center rounded-full">4</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>2</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More Oz Lotto results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Next Estimated Jackpot</div>
              <div class="text-lg font-bold text-[#DC143C]">AUD 50M</div>
              <div class="jackpot-timer" data-deadline="2025-08-06T20:00:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>

          <!-- Saturday Lotto -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/saturday-lotto-icon.webp" alt="Saturday Lotto" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">Saturday Lotto</span>
                <span class="text-sm text-[#4B4B4B]">Sat 03/08/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-9 h-9">3</span><span class="w-9 h-9">15</span><span class="w-9 h-9">21</span><span
                  class="w-9 h-9">32</span><span class="w-9 h-9">36</span><span
                  class="w-9 h-9 bg-[#228B22] text-white rounded-full flex items-center justify-center font-bold">7</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>0</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More Saturday Lotto results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Next Jackpot</div>
              <div class="text-lg font-bold text-[#DC143C]">AUD 5M</div>
              <div class="jackpot-timer" data-deadline="2025-08-10T18:00:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>
          <!-- Monday Lotto -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/monday-lotto-icon.webp" alt="Monday Lotto" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">Monday Lotto</span>
                <span class="text-sm text-[#4B4B4B]">Mon 29/07/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-9 h-9">2</span><span class="w-9 h-9">11</span><span class="w-9 h-9">25</span><span
                  class="w-9 h-9">30</span><span class="w-9 h-9">44</span><span
                  class="w-9 h-9 bg-[#228B22] text-white rounded-full flex items-center justify-center font-bold">8</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>1</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More Monday Lotto results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Next Jackpot</div>
              <div class="text-lg font-bold text-[#DC143C]">AUD 1M</div>
              <div class="jackpot-timer" data-deadline="2025-08-05T19:30:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>

          <!-- Set for Life -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/setforlife-icon.webp" alt="Set for Life" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">Set for Life</span>
                <span class="text-sm text-[#4B4B4B]">Wed 31/07/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-9 h-9">6</span><span class="w-9 h-9">13</span><span class="w-9 h-9">17</span><span
                  class="w-9 h-9">22</span><span class="w-9 h-9">35</span><span
                  class="w-9 h-9 bg-[#228B22] text-white font-bold flex items-center justify-center rounded-full">10</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>0</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More Set for Life results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Prize</div>
              <div class="text-lg font-bold text-[#DC143C]">$20K x 20 Years</div>
              <div class="jackpot-timer" data-deadline="2025-08-06T20:30:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>

          <!-- Lotto Strike -->
          <div
            class="flex flex-col md:flex-row justify-between items-start md:items-center bg-white border border-[#E0E0E0] rounded-xl shadow-md p-6 gap-6">
            <div class="flex-1 space-y-3">
              <div class="flex items-center gap-3">
                <img src="img/lottostrike-icon.webp" alt="Lotto Strike" class="h-12 w-12">
                <span class="text-lg font-semibold text-[#1E1E1E]">Lotto Strike</span>
                <span class="text-sm text-[#4B4B4B]">Wed 31/07/2025</span>
              </div>
              <div class="flex flex-wrap gap-2">
                <span class="w-9 h-9">14</span><span class="w-9 h-9">27</span><span class="w-9 h-9">31</span><span
                  class="w-9 h-9">41</span><span class="w-9 h-9">44</span><span
                  class="w-9 h-9 bg-[#228B22] text-white rounded-full flex items-center justify-center font-bold">12</span>
              </div>
              <div class="text-sm text-[#4B4B4B]">🔁 Rollover: <strong>5</strong></div>
              <div class="flex gap-6 text-sm font-medium">
                <a href="/result" class="text-[#228B22] hover:underline">More Lotto Strike results →</a>
                <a href="/result" class="text-[#DC143C] hover:underline">Draw details →</a>
              </div>
            </div>
            <div class="w-full md:w-64 text-center border border-[#E0E0E0] bg-white rounded-xl p-4 space-y-3 shadow">
              <div class="text-xs font-medium uppercase text-[#1E1E1E] tracking-wider">Jackpot</div>
              <div class="text-lg font-bold text-[#DC143C]">AUD 1.7M</div>
              <div class="jackpot-timer" data-deadline="2025-08-07T20:00:00+10:00">
                <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                  <div><span class="days">0</span>
                    <div class="text-xs">DAY</div>
                  </div>
                  <div><span class="hours">0</span>
                    <div class="text-xs">HRS</div>
                  </div>
                  <div><span class="minutes">0</span>
                    <div class="text-xs">MINS</div>
                  </div>
                  <div><span class="seconds">0</span>
                    <div class="text-xs">SECS</div>
                  </div>
                </div>
              </div>
              <a href="/result"
                class="inline-block bg-[#228B22] text-white text-sm font-semibold px-5 py-2 rounded-full hover:bg-[#1A6F1A] transition">Buy
                Tickets →</a>
            </div>
          </div>


        </div>

      </div>

      <div class="space-y-6">


        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-md overflow-hidden">
          <div class="flex items-center justify-between px-4 pt-4">
            <img src="img/eurojackpot-logo.webp" alt="EuroJackpot" class="h-12 w-12">
            <a href="/result" class="text-[#228B22] text-sm font-medium hover:underline">Find out more →</a>
          </div>
          <div class="relative mt-4">
            <img src="img/eu-flag.webp" alt="Europe" class="w-full h-28 object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-white/60 to-white/90 backdrop-blur-sm"></div>
          </div>
          <div class="p-4 space-y-3 text-center">
            <p class="text-xs font-medium uppercase text-[#1E1E1E]">Estimated Jackpot:</p>
            <p class="text-xl font-extrabold text-[#1E1E1E]">€34,000,000</p>
            <div class="jackpot-timer" data-deadline="2025-08-08T18:00:00Z">
              <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                <div><span class="days">0</span>
                  <div class="text-xs">DAY</div>
                </div>
                <div><span class="hours">0</span>
                  <div class="text-xs">HRS</div>
                </div>
                <div><span class="minutes">0</span>
                  <div class="text-xs">MINS</div>
                </div>
                <div><span class="seconds">0</span>
                  <div class="text-xs">SECS</div>
                </div>
              </div>
            </div>
            <a href="/result"
              class="inline-block bg-[#228B22] text-white text-sm font-semibold px-4 py-2 mt-2 rounded-full hover:bg-[#1A6F1A] transition">
              Buy EuroJackpot Tickets →
            </a>
          </div>
        </div>

        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-md overflow-hidden">
          <div class="flex items-center justify-between px-4 pt-4">
            <img src="img/euromillions-logo.webp" alt="EuroMillions" class="h-12 w-12">
            <a href="/result" class="text-[#228B22] text-sm font-medium hover:underline">Find out more →</a>
          </div>
          <div class="relative mt-4">
            <img src="img/france-flag.webp" alt="France" class="w-full h-28 object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-white/60 to-white/90 backdrop-blur-sm"></div>
          </div>
          <div class="p-4 space-y-3 text-center">
            <p class="text-xs font-medium uppercase text-[#1E1E1E]">Estimated Jackpot:</p>
            <p class="text-xl font-extrabold text-[#1E1E1E]">€77,000,000</p>
            <div class="jackpot-timer" data-deadline="2025-08-09T20:30:00Z">
              <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                <div><span class="days">0</span>
                  <div class="text-xs">DAY</div>
                </div>
                <div><span class="hours">0</span>
                  <div class="text-xs">HRS</div>
                </div>
                <div><span class="minutes">0</span>
                  <div class="text-xs">MINS</div>
                </div>
                <div><span class="seconds">0</span>
                  <div class="text-xs">SECS</div>
                </div>
              </div>
            </div>
            <a href="/result"
              class="inline-block bg-[#228B22] text-white text-sm font-semibold px-4 py-2 mt-2 rounded-full hover:bg-[#1A6F1A] transition">
              Buy EuroMillions Tickets →
            </a>
          </div>
        </div>

        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-md overflow-hidden">
          <div class="flex items-center justify-between px-4 pt-4">
            <img src="img/lotto-germany-logo.webp" alt="Lotto Germany" class="h-12 w-12">
            <a href="/result" class="text-[#228B22] text-sm font-medium hover:underline">Find out more →</a>
          </div>
          <div class="relative mt-4">
            <img src="img/germany-flag.webp" alt="Germany" class="w-full h-28 object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-white/60 to-white/90 backdrop-blur-sm"></div>
          </div>
          <div class="p-4 space-y-3 text-center">
            <p class="text-xs font-medium uppercase text-[#1E1E1E]">Estimated Jackpot:</p>
            <p class="text-xl font-extrabold text-[#1E1E1E]">€10,000,000</p>
            <div class="jackpot-timer" data-deadline="2025-08-07T17:00:00Z">
              <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                <div><span class="days">0</span>
                  <div class="text-xs">DAY</div>
                </div>
                <div><span class="hours">0</span>
                  <div class="text-xs">HRS</div>
                </div>
                <div><span class="minutes">0</span>
                  <div class="text-xs">MINS</div>
                </div>
                <div><span class="seconds">0</span>
                  <div class="text-xs">SECS</div>
                </div>
              </div>
            </div>
            <a href="/result"
              class="inline-block bg-[#228B22] text-white text-sm font-semibold px-4 py-2 mt-2 rounded-full hover:bg-[#1A6F1A] transition">
              Buy German Lotto Tickets →
            </a>
          </div>
        </div>

        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-md overflow-hidden">
          <div class="flex items-center justify-between px-4 pt-4">
            <img src="img/superenalotto-logo.webp" alt="SuperEnalotto" class="h-12 w-12">
            <a href="/result" class="text-[#228B22] text-sm font-medium hover:underline">Find out more →</a>
          </div>
          <div class="relative mt-4">
            <img src="img/italy-flag.webp" alt="Italy" class="w-full h-28 object-cover">
            <div class="absolute inset-0 bg-gradient-to-b from-white/60 to-white/90 backdrop-blur-sm"></div>
          </div>
          <div class="p-4 space-y-3 text-center">
            <p class="text-xs font-medium uppercase text-[#1E1E1E]">Estimated Jackpot:</p>
            <p class="text-xl font-extrabold text-[#1E1E1E]">€31,800,000</p>
            <div class="jackpot-timer" data-deadline="2025-08-08T19:45:00Z">
              <div class="flex justify-center gap-3 text-sm text-[#1E1E1E] font-semibold">
                <div><span class="days">0</span>
                  <div class="text-xs">DAY</div>
                </div>
                <div><span class="hours">0</span>
                  <div class="text-xs">HRS</div>
                </div>
                <div><span class="minutes">0</span>
                  <div class="text-xs">MINS</div>
                </div>
                <div><span class="seconds">0</span>
                  <div class="text-xs">SECS</div>
                </div>
              </div>
            </div>
            <a href="/result"
              class="inline-block bg-[#228B22] text-white text-sm font-semibold px-4 py-2 mt-2 rounded-full hover:bg-[#1A6F1A] transition">
              Buy SuperEnalotto Tickets →
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="howto" class="bg-[#FAF8F0] py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto space-y-12">
      <h2 class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] uppercase text-center">
        How to Buy Tickets
      </h2>
      <div class="grid md:grid-cols-2 gap-8 text-[#1E1E1E] font-['Inter']">
        <div class="flex items-start gap-5 bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-sm">
          <div class="flex items-center justify-center w-10 h-10 bg-[#228B22] text-white font-bold rounded-full">1</div>
          <div>
            <p class="font-semibold mb-1">Pick your lottery and select your numbers.</p>
            <img src="img/howto-step1.webp" alt="Pick numbers" class="w-14 mt-2" />
          </div>
        </div>
        <div class="flex items-start gap-5 bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-sm">
          <div class="flex items-center justify-center w-10 h-10 bg-[#228B22] text-white font-bold rounded-full">2</div>
          <div>
            <p class="font-semibold mb-1">Professional agent buys your tickets.</p>
            <img src="img/howto-step2.webp" alt="Agent buys tickets" class="w-14 mt-2" />
          </div>
        </div>
        <div class="flex items-start gap-5 bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-sm">
          <div class="flex items-center justify-center w-10 h-10 bg-[#228B22] text-white font-bold rounded-full">3</div>
          <div>
            <p class="font-semibold mb-1">Confirmation of your purchase is sent to you.</p>
            <img src="img/howto-step3.webp" alt="Confirmation on phone" class="w-14 mt-2" />
          </div>
        </div>
        <div class="flex items-start gap-5 bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-sm">
          <div class="flex items-center justify-center w-10 h-10 bg-[#228B22] text-white font-bold rounded-full">4</div>
          <div>
            <p class="font-semibold mb-1">Winnings are transferred to your account.</p>
            <img src="img/howto-step4.webp" alt="Transfer winnings" class="w-14 mt-2" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="tools" class="bg-[#FAF8F0] py-16 px-4 md:px-6">
    <div class="max-w-7xl mx-auto space-y-12">
      <h2 class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] uppercase text-center">
        The Lottery Tools
      </h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 text-[#1E1E1E] font-['Inter']">
        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-sm p-6 space-y-4">
          <div class="flex items-start gap-4">
            <img src="img/icon-generator.webp" alt="Number Generator" class="w-12 h-12">
            <div>
              <h3 class="font-bold text-lg">Number Generator</h3>
              <p class="text-sm">Can't think of your lucky numbers? Allow our PowerBall and Lotto number generators to
                do the work for you.</p>
            </div>
          </div>
          <div class="flex gap-6 text-sm font-medium border-t border-[#E0E0E0] pt-4">
            <a href="/result" class="text-[#228B22] hover:underline">PowerBall Tool →</a>
            <a href="/result" class="text-[#228B22] hover:underline">Lotto Tool →</a>
          </div>
        </div>
        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-sm p-6 space-y-4">
          <div class="flex items-start gap-4">
            <img src="img/icon-pairs.webp" alt="Common Pairs" class="w-12 h-12">
            <div>
              <h3 class="font-bold text-lg">Common Pairs</h3>
              <p class="text-sm">Easy to use tool that shows the frequency of numbers that have been drawn together in
                Lotto and PowerBall.</p>
            </div>
          </div>
          <div class="flex gap-6 text-sm font-medium border-t border-[#E0E0E0] pt-4">
            <a href="/result" class="text-[#228B22] hover:underline">PowerBall Tool →</a>
            <a href="/result" class="text-[#228B22] hover:underline">Lotto Tool →</a>
          </div>
        </div>
        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-sm p-6 space-y-4">
          <div class="flex items-start gap-4">
            <img src="img/icon-triplets.webp" alt="Common Triplets" class="w-12 h-12">
            <div>
              <h3 class="font-bold text-lg">Common Triplets</h3>
              <p class="text-sm">This tool tells you the frequency of the most commonly drawn triplets in either the
                Lotto or PowerBall games.</p>
            </div>
          </div>
          <div class="flex gap-6 text-sm font-medium border-t border-[#E0E0E0] pt-4">
            <a href="/result" class="text-[#228B22] hover:underline">PowerBall Tool →</a>
            <a href="/result" class="text-[#228B22] hover:underline">Lotto Tool →</a>
          </div>
        </div>
        <div class="bg-white border border-[#E0E0E0] rounded-xl shadow-sm p-6 space-y-4">
          <div class="flex items-start gap-4">
            <img src="img/icon-skiphit.webp" alt="Skip and Hit" class="w-12 h-12">
            <div>
              <h3 class="font-bold text-lg">Skip and Hit</h3>
              <p class="text-sm">Examines past Lotto and PowerBall draw results and displays when any number is due to
                appear.</p>
            </div>
          </div>
          <div class="flex gap-6 text-sm font-medium border-t border-[#E0E0E0] pt-4">
            <a href="/result" class="text-[#228B22] hover:underline">PowerBall Tool →</a>
            <a href="/result" class="text-[#228B22] hover:underline">Lotto Tool →</a>
          </div>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <a href="/tools"
          class="text-center max-w-48   bg-[#228B22] text-white font-semibold text-sm py-3 rounded-full hover:bg-[#1A6F1A] transition">
          See All PowerBall Tools →
        </a>
        <a href="/tools"
          class="text-center max-w-48  bg-[#228B22] text-white font-semibold text-sm py-3 rounded-full hover:bg-[#1A6F1A] transition">
          See All Lotto Tools →
        </a>
      </div>
    </div>
  </section>

  <section id="about" class="bg-[#FFFFFF] py-16 px-4 md:px-6">
  <div class="max-w-4xl mx-auto space-y-6 text-[#1E1E1E] font-['Inter'] text-base md:text-lg leading-relaxed">
    <h2 class="text-2xl md:text-3xl font-bold text-[#FFD700] font-['Playfair_Display'] uppercase">
      About Us
    </h2>
    <p>
      At <strong>[CURRENT_DOMAIN_NO_TLD]</strong>, we provide fast, accurate, and transparent lottery results for Australia’s biggest games — including Powerball, Oz Lotto, Saturday Lotto, and more. Our mission is simple: to help Aussies access real-time data, verify outcomes, and stay informed with ease.
    </p>
    <p>
      From casual players to serious number crunchers, our platform is designed to offer value to all. We host a full archive of verified draws, winner statistics, prize distributions, and easy-to-use tools for spotting trends — all available on mobile, tablet, or desktop.
    </p>
    <p>
      Since day one, we've aimed to remove the guesswork. No confusing jargon, no delays, no hidden catches. Just reliable lottery data, refreshed around the clock, and independently maintained for clarity and trust.
    </p>
    <p>
      We proudly support responsible gaming. Our content is strictly informational, and we do not offer or promote ticket purchases. Users must be 18+ and located in Australia to access our services.
    </p>
    <p>
      Whether you’re double-checking last night’s numbers or digging into draw history, <strong>[CURRENT_DOMAIN_NO_TLD]</strong> is your go-to hub for clean, unbiased, and legally compliant lottery insights.
    </p>
  </div>
</section>

</main>
<?php include "footer.php"; ?>