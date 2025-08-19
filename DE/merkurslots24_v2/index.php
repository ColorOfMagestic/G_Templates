<?php include "header.php"; ?>
<main>
  
<section id="2-new-slots" class="relative min-h-[80vh] flex flex-col justify-center overflow-hidden">
  
  <div class="absolute inset-0 z-0">
    <img src="img/bg-new-slots.webp" alt="Background" class="w-full h-full object-cover opacity-30">
  </div>

  <div class="hidden flex-col gap-3 absolute right-5 top-1/2 -translate-y-1/2 z-20 <?= $isLoggedIn ? 'md:flex' : 'md:hidden' ?>"">

  <a href="#" data-modal="favorites-modal" class="w-12 h-12 rounded-full bg-black/50 border border-white/10 backdrop-blur flex items-center justify-center hover:shadow-[0_0_12px_rgba(255,215,0,.8)] transition">
      <img src="img/ic-star.svg" alt="Star" class="w-6 h-6">
    </a>
    <a href="#" data-modal="offers-modal" class="w-12 h-12 rounded-full bg-black/50 border border-white/10 backdrop-blur flex items-center justify-center hover:shadow-[0_0_12px_rgba(0,229,255,.8)] transition">
      <img src="img/ic-gift.svg" alt="Gift" class="w-6 h-6">
    </a>

    <a href="#" data-modal="profile-modal" class="w-12 h-12 rounded-full bg-black/50 border border-white/10 backdrop-blur flex items-center justify-center hover:shadow-[0_0_12px_rgba(0,229,255,.8)] transition">
      <img src="img/ic-user.svg" alt="Profile" class="w-6 h-6">
    </a>
  </div>
  <div class="relative z-10 max-w-7xl mx-auto px-4">
    <div class="flex items-center justify-between mb-6">
      <h2 class="font-['Bebas_Neue'] text-3xl text-[color:#FFD700] drop-shadow-[0_0_5px_rgba(255,215,0,0.8)] tracking-wide flex items-center gap-3">
        Slots
        <span class="h-1 w-12 bg-[color:#00E5FF] rounded-full"></span>
      </h2>
    </div>

    <div id="slots-grid" class="grid grid-cols-2 sm:grid-cols-4 gap-4"></div>

    
    <div id="iframe-container" class="hidden mt-8 relative rounded-2xl overflow-hidden border border-white/10 bg-black/90 mb-10">
      <button id="close-iframe" class="absolute top-3 right-3 z-10 bg-[color:#FF6B00] text-black font-bold px-3 py-1 rounded hover:brightness-110">
        ✕ Close
      </button>
      <iframe id="game-iframe" src="" class="w-full h-[70vh] border-none"></iframe>
    </div>
  </div>
</section>

<script>
  const slots = [
    {
      title: "Roman legion",
      image: "img/slot-1.webp",
      iframe: "https://bridge.25a2ed4c4e133034c05e38bd08efa2ed.rgs.world/game?casinoId=whow_jackpot_production&gameId=romanlegionflaminglink&token=node-6035c2b8e8c6484efcc576f0&locale=ru_RU&lang=ru&username=Player505050162&sound=1",
      isNew: true
    },
    {
      title: "Mega Wild Fruits",
      image: "img/slot-2.webp",
      iframe: "https://web-api-new.spinomenal.co/GameLauncher/LaunchWhow?gameCode=SlotMachine_MegaWildFruitsChillies&platformId=1&token=node-7d08cca8eb24fbd7ffdbcf95&locale=ru_RU&lang=ru&username=Player505050162&partnerId=jackpot-de&sound=1",
      isNew: true
    },
    {
      title: "Majestic cleopatra",
      image: "img/slot-3.webp",
      iframe: "https://web-api-new.spinomenal.co/GameLauncher/LaunchWhow?gameCode=SlotMachine_MajesticCleopatra&platformId=1&token=node-5b2ab3d5343d7991f62ddc14&locale=ru_RU&lang=ru&username=Player505050162&partnerId=jackpot-de&sound=1",
      isNew: false
    },
    {
      title: "Egypt gold",
      image: "img/slot-4.webp",
      iframe: "https://d3rj3b8qu354ay.cloudfront.net/slot_egyptgold/index.html?token=node-60b26d7278611d269e261c0d&locale=ru_RU&lang=ru&username=Player505050162&sound=1",
      isNew: false
    },
    {
      title: "Wild Mariachi Bros",
      image: "img/slot-5.webp",
      iframe: "https://router.apparatgaming.net/game?casinoId=whow&gameId=apparat_wildmariachibros&token=node-be2fc8c5f09333f8a43bd8a4&locale=ru_RU&lang=ru&username=Player505050162&sound=1",
      isNew: true
    },
    {
      title: "Majestic Zeus",
      image: "img/slot-6.webp",
      iframe: "https://web-api-new.spinomenal.co/GameLauncher/LaunchWhow?gameCode=SlotMachine_MajesticZeus&platformId=1&token=node-2816cdb9d188bfb8b95190a4&locale=ru_RU&lang=ru&username=Player505050162&partnerId=jackpot-de&sound=1",
      isNew: false
    },
    {
      title: "Book of Rampage",
      image: "img/slot-7.webp",
      iframe: "https://web-api-new.spinomenal.co/GameLauncher/LaunchWhow?gameCode=SlotMachine_BookOfRampage&platformId=1&token=node-7cd62d4fdbb9d5a28d572df3&locale=ru_RU&lang=ru&username=Player505050162&partnerId=jackpot-de&sound=1",
      isNew: false
    },
    {
      title: "Totem Extreme",
      image: "img/slot-8.webp",
      iframe: "https://d3rj3b8qu354ay.cloudfront.net/slot_totem/index.html?token=node-d26a9c2c02c7cf402bad91ca&locale=ru_RU&lang=ru&username=Player505050162&sound=1",
      isNew: true
    },
  ];

  const slotsGrid = document.getElementById("slots-grid");
  const iframeContainer = document.getElementById("iframe-container");
  const gameIframe = document.getElementById("game-iframe");
  const closeIframe = document.getElementById("close-iframe");

  slots.forEach(slot => {
    const card = document.createElement("div");
    card.className =
      "group relative rounded-2xl overflow-hidden border border-white/10 bg-black/40 hover:shadow-[0_0_20px_rgba(255,215,0,0.5)] transition cursor-pointer";

    card.innerHTML = `
      <img src="${slot.image}" alt="${slot.title}" class="w-full aspect-[4/3] object-cover">
      ${slot.isNew ? `<span class="absolute top-2 left-2 bg-[color:#FF6B00] text-black text-xs font-bold px-2 py-0.5 rounded">NEW</span>` : ""}
    `;

    card.addEventListener("click", () => {
      gameIframe.src = slot.iframe;
      iframeContainer.classList.remove("hidden");
      iframeContainer.scrollIntoView({ behavior: "smooth" });
    });

    slotsGrid.appendChild(card);
  });

  closeIframe.addEventListener("click", () => {
    gameIframe.src = "";
    iframeContainer.classList.add("hidden");
  });
</script>


</main>
<?php include "footer.php"; ?>