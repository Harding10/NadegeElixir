<!DOCTYPE html>
<html lang="fr">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="description" content="Gestion des produits pour site e-commerce">
     <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- La configuration des couleurs est maintenant dans tailwind.config.js -->
</head>
<body class="bg-primary-50 min-h-screen">
    <div class="flex relative">
        <!-- Bouton Menu Mobile -->
        <button id="sidebarToggle" class="lg:hidden fixed top-4 left-4 z-20 p-2 rounded-md bg-white shadow-md">
            <i class="fas fa-bars text-primary-600"></i>
        </button>

        <!-- Sidebar -->
        <aside id="sidebar" class="transform lg:transform-none lg:translate-x-0 -translate-x-full transition-transform duration-300 ease-in-out fixed lg:relative w-64 bg-white shadow-md h-screen z-10">
            <div class="p-4 flex items-center justify-between border-b border-primary-100">
                <h1 class="text-2xl font-bold text-primary-600">E-Shop Admin</h1>
                <button id="closeSidebar" class="lg:hidden p-2 text-gray-600 hover:text-primary-600">
                    <i class="fas fa-times"></i>
                </button>
            </div>
            <nav class="mt-6">
                <div class="px-4 py-3 text-primary-600 font-medium">Menu Principal</div>
                <a href="{{ route('dashboard') }}" class="block px-6 py-3 text-primary-600 hover:bg-primary-50 hover:text-primary-800 transition-colors duration-200">
                    <i class="fas fa-tachometer-alt mr-3"></i> Tableau de bord
                </a>
                <a href="{{ route('produit.dashboard') }}" class="block px-6 py-3 text-primary-700 bg-primary-100 border-r-4 border-primary-500">
                    <i class="fas fa-shopping-bag mr-3"></i> Produits
                </a>
                <a href="#" class="block px-6 py-3 text-primary-600 hover:bg-primary-50 hover:text-primary-800 transition-colors duration-200">
                    <i class="fas fa-users mr-3"></i> Clients
                </a>
                <a href="#" class="block px-6 py-3 text-primary-600 hover:bg-primary-50 hover:text-primary-800 transition-colors duration-200">
                    <i class="fas fa-receipt mr-3"></i> Commandes
                </a>
                <a href="#" class="block px-6 py-3 text-primary-600 hover:bg-primary-50 hover:text-primary-800 transition-colors duration-200">
                    <i class="fas fa-chart-line mr-3"></i> Statistiques
                </a>
                <a href="{{ route('parametres') }}" class="block px-6 py-3 text-primary-600 hover:bg-primary-50 hover:text-primary-800 transition-colors duration-200">
                    <i class="fas fa-cog mr-3"></i> Paramètres
                </a>
            </nav>
        </aside>

       <div>
        @yield('content')
       </div>
    </div>

    <script>
        // Gestion de la sidebar mobile
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebarToggle');
        const closeSidebar = document.getElementById('closeSidebar');

        if (sidebarToggle) {
            sidebarToggle.addEventListener('click', () => {
                sidebar.classList.remove('-translate-x-full');
            });
        }

        if (closeSidebar) {
            closeSidebar.addEventListener('click', () => {
                sidebar.classList.add('-translate-x-full');
            });
        }

        // Fermer la sidebar en cliquant à l'extérieur sur mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 1024) {  // 1024px est le breakpoint lg de Tailwind
                if (!sidebar.contains(e.target) && !sidebarToggle.contains(e.target)) {
                    sidebar.classList.add('-translate-x-full');
                }
            }
        });
    </script>
    <script src="{{ asset('js/product.js') }}"></script>
</body>
</html>