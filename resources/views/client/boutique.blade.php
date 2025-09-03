

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#5E35B1',
                        secondary: '#FF6B6B',
                        dark: '#1E1E1E',
                        light: '#F5F5F5',
                    }
                }
            }
        }
    </script>
    <style>
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .accordion-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
    <!-- Header -->
    <header class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <i class="fas fa-spray-can text-2xl text-primary"></i>
                <h1 class="text-xl font-bold text-gray-800 dark:text-white">Luxe Parfums</h1>
            </div>
            
            <nav class="hidden md:flex space-x-8">
                <a href="index.html" class="text-gray-800 dark:text-white">Accueil</a>
                <a href="boutique.html" class="text-primary font-semibold">Boutique</a>
                <a href="#" class="text-gray-800 dark:text-white hover:text-primary transition">Marques</a>
                <a href="contact.html" class="text-gray-800 dark:text-white hover:text-primary transition">Contact</a>
            </nav>
            
            <div class="flex items-center space-x-4">
                <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
                    <i class="fas fa-moon text-gray-600 dark:text-yellow-300"></i>
                </button>
                <a href="#" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 relative">
                    <i class="fas fa-shopping-cart text-gray-600 dark:text-white"></i>
                    <span class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </a>
                <button class="md:hidden p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
                    <i class="fas fa-bars text-gray-600 dark:text-white"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8 bg-white dark:bg-gray-800">
        <!-- Breadcrumb -->
        <nav class="text-sm mb-6 " aria-label="Fil d'Ariane">
            <ul class="flex items-center space-x-2 text-gray-600 dark:text-gray-300">
                <li class="flex items-center">
                    <a href="index.html" class="hover:text-primary transition-colors">FEMME</a>
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="flex items-center">
                    <a href="#" class="hover:text-primary transition-colors">HOMME</a>
                    <svg class="w-4 h-4 mx-2 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L11.586 9 7.293 4.707a1 1 0 011.414-1.414l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                    </svg>
                </li>
                <li class="text-primary font-semibold">COFFRE</li>
            </ul>
        </nav>
        
        

        <div class="flex flex-col md:flex-row gap-8">
            <!-- Filters Sidebar -->
            <aside class="w-full md:w-64 flex-shrink-0">
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 mb-6">
                    <h3 class="font-bold text-lg mb-4 text-gray-800 dark:text-white">Filtrer les produits</h3>
                    
                    <!-- Search -->
                    <div class="mb-6">
                        <label class="block text-sm font-medium mb-2 text-gray-700 dark:text-gray-300">Rechercher</label>
                        <div class="relative">
                            <input type="text" placeholder="Nom du parfum..." class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                    </div>
                    
                    <!-- Price Range -->
                    <div class="mb-6">
                        <label class="block text-sm font-semibold mb-3 text-gray-800 dark:text-gray-200 tracking-wide">
                          Prix
                        </label>
                        <div class="flex justify-between text-xs text-gray-500 dark:text-gray-400 mb-3">
                          <span>10€</span>
                          <span>2500€</span>
                        </div>
                      
                        <div class="flex items-center gap-3">
                          <input id="priceRange" type="range" min="10" max="2500" value="120"
                            class="w-full h-2 bg-gradient-to-r from-green-400 to-blue-500 rounded-full appearance-none cursor-pointer transition duration-300 ease-in-out 
                                 [&::-webkit-slider-thumb]:appearance-none 
                                 [&::-webkit-slider-thumb]:h-4 [&::-webkit-slider-thumb]:w-4 
                                 [&::-webkit-slider-thumb]:bg-white [&::-webkit-slider-thumb]:rounded-full 
                                 [&::-webkit-slider-thumb]:shadow-md [&::-webkit-slider-thumb]:hover:scale-110 
                                 [&::-webkit-slider-thumb]:transition-all 
                                 dark:bg-gradient-to-r dark:from-green-600 dark:to-blue-700">
                          <span id="rangeValue" class="text-sm font-medium text-gray-800 dark:text-gray-200 min-w-[40px] text-right">
                            120€
                          </span>
                        </div>
                      </div>
                      
                      <script>
                        const range = document.getElementById('priceRange');
                        const valueDisplay = document.getElementById('rangeValue');
                      
                        range.addEventListener('input', () => {
                          valueDisplay.textContent = `${range.value}€`;
                        });
                      </script>
                      
                    
                    <!-- Gender Filter -->
                    <div class="mb-6">
                        <h4 class="font-medium mb-3 text-gray-700 dark:text-gray-300">Genre</h4>
                        <div class="space-y-2">
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                <span class="ml-2 text-gray-600 dark:text-gray-300">Féminin</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                <span class="ml-2 text-gray-600 dark:text-gray-300">Masculin</span>
                            </label>
                            <label class="flex items-center">
                                <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                <span class="ml-2 text-gray-600 dark:text-gray-300">Unisexe</span>
                            </label>
                        </div>
                    </div>
                    
                    <!-- Fragrance Family -->
                    <div class="mb-6">
                        <button class="accordion-btn flex justify-between items-center w-full text-left font-medium text-gray-700 dark:text-gray-300">
                            <span>Famille olfactive</span>
                            <i class="fas fa-chevron-down text-xs transition-transform"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="pt-2 space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Florale</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Boisée</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Orientale</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Fruitée</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Chyprée</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Brands -->
                    <div class="mb-6">
                        <button class="accordion-btn flex justify-between items-center w-full text-left font-medium text-gray-700 dark:text-gray-300">
                            <span>Marques</span>
                            <i class="fas fa-chevron-down text-xs transition-transform"></i>
                        </button>
                        <div class="accordion-content">
                            <div class="pt-2 space-y-2">
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Chanel</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Dior</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Guerlain</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Tom Ford</span>
                                </label>
                                <label class="flex items-center">
                                    <input type="checkbox" class="rounded text-primary focus:ring-primary dark:bg-gray-700">
                                    <span class="ml-2 text-gray-600 dark:text-gray-300">Jo Malone</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <button class="w-full bg-primary hover:bg-purple-700 text-white py-2 px-4 rounded-lg transition">
                        Appliquer les filtres
                    </button>
                    <button class="w-full mt-2 text-primary hover:text-purple-700 py-2 px-4 rounded-lg transition text-sm">
                        Réinitialiser
                    </button>
                </div>
            </aside>
            
            <!-- Products Grid -->
            <div class="flex-grow">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-bold text-gray-800 dark:text-white">Tous les parfums</h2>
                    <div class="flex items-center">
                        <span class="text-sm text-gray-600 dark:text-gray-300 mr-2">Trier par :</span>
                        <select class="border rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-primary dark:bg-gray-700 dark:border-gray-600">
                            <option>Popularité</option>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                            <option>Nouveautés</option>
                            <option>Meilleures notes</option>
                        </select>
                    </div>
                </div>
                

                                <section>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($articles as $article)
                        <a href="#product-detail" class="product-card block bg-white dark:bg-gray-800 rounded-lg overflow-hidden shadow-md transition-transform duration-300 hover:-translate-y-1 hover:shadow-lg focus:outline-none focus:ring-2 focus:ring-primary">
                            <div class="relative">
                                <img src="{{ $article->image }}" alt="{{ $article->title }}" class="w-full object-cover" />
                                     <div class="absolute top-2 right-2 bg-secondary text-white px-2 py-1 rounded-full text-xs font-semibold">Nouveau</div>
                            </div>
                            <div class="p-4">
                                <h3 class="text-sm font-semibold text-gray-800 dark:text-white mb-1">{{ $article->title }}</h3>
                                <p class="text-gray-600 dark:text-gray-300 text-sm mb-2 line-clamp-3">{{ $article->description }}</p>
                                <div class="flex items-center mb-3">
                                    <div class="flex text-yellow-400 space-x-0.5">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <span class="text-gray-500 text-xs ml-2">(24 avis)</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-lg font-bold text-gray-800 dark:text-white">{{ $article->price ?? '0' }}€</span>
                                    <button class="bg-primary hover:bg-purple-700 text-white px-3 py-1 rounded-full text-sm transition focus:outline-none focus:ring-2 focus:ring-purple-600">
                                        Ajouter
                                    </button>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </section>            
            <!-- Pagination -->
<div class="flex flex-col md:flex-row justify-between items-center mt-10 border-t pt-6 dark:border-gray-700 w-full gap-4">
    <div class="flex items-center space-x-2 text-sm">
      <button id="prevPage" class="px-3 py-1 rounded-lg border text-gray-700 dark:text-gray-300 hover:bg-indigo-500 hover:text-white disabled:opacity-50">
        Préc.
      </button>
      <div id="pageButtons" class="flex space-x-2"></div>
      <button id="nextPage" class="px-3 py-1 rounded-lg border text-gray-700 dark:text-gray-300 hover:bg-indigo-500 hover:text-white">
        Suiv.
      </button>
    </div>
  </div>
  
  <!-- Message si page inconnue -->
  <div id="errorMessage" class="mt-4 text-red-600 text-sm font-semibold text-center hidden">
    Cette page ne fait pas partie de la pagination définie.
  </div>
  
  <script>
    const pageLinks = [
      "boutique.html",         // Page 1
      "boutique2.html",        // Page 2
      "promotions.html",       // Page 3
      "parfums-femme.html",    // Page 4
      "parfums-homme.html",    // Page 5
      "parfums-luxe.html",     // Page 6
      "accessoires.html",      // Page 7
    ];
  
    const totalPages = pageLinks.length;
    const currentUrl = window.location.pathname.split("/").pop();
    let currentPage = pageLinks.findIndex(link => link === currentUrl) + 1;
  
    if (currentPage === 0) {
      document.getElementById("errorMessage").classList.remove("hidden");
      currentPage = 1; // Défaut pour éviter les erreurs
    }
  
    function generatePageButtons() {
      const pageButtonsContainer = document.getElementById("pageButtons");
      pageButtonsContainer.innerHTML = "";
  
      const pageLimit = 5;
      let startPage = Math.max(currentPage - Math.floor(pageLimit / 2), 1);
      let endPage = Math.min(currentPage + Math.floor(pageLimit / 2), totalPages);
  
      if (endPage - startPage < pageLimit - 1) {
        startPage = Math.max(endPage - pageLimit + 1, 1);
      }
  
      for (let i = startPage; i <= endPage; i++) {
        const btn = document.createElement("button");
        btn.textContent = i;
        btn.classList.add(
          "px-3", "py-1", "rounded-lg", "border", "text-sm",
          "text-gray-700", "dark:text-gray-300",
          "hover:bg-indigo-500", "hover:text-white"
        );
        if (i === currentPage) {
          btn.classList.add("bg-indigo-600", "text-white", "font-semibold");
        }
  
        btn.addEventListener("click", () => {
          window.location.href = pageLinks[i - 1];
        });
  
        pageButtonsContainer.appendChild(btn);
      }
  
      document.getElementById("prevPage").disabled = currentPage === 1;
      document.getElementById("nextPage").disabled = currentPage === totalPages;
    }
  
    document.getElementById("prevPage").addEventListener("click", () => {
      if (currentPage > 1) {
        window.location.href = pageLinks[currentPage - 2];
      }
    });
  
    document.getElementById("nextPage").addEventListener("click", () => {
      if (currentPage < totalPages) {
        window.location.href = pageLinks[currentPage];
      }
    });
  
    generatePageButtons();
  </script>
  
                                

@push('scripts')
<script src="{{ asset('js/boutique.js') }}"></script>
@endpush