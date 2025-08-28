
    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md h-screen sticky top-0">
        <div class="p-4 flex items-center justify-center border-b border-gray-200">
            <h1 class="text-2xl font-bold text-primary-700">E-Shop Admin</h1>
        </div>
        <nav class="mt-6">
            <div class="px-4 py-3 text-gray-600 font-medium">Menu Principal</div>
            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
                <i class="fas fa-tachometer-alt mr-3"></i> Tableau de bord
            </a>
            <a href="#" class="block px-6 py-3 text-primary-700 bg-primary-100 border-r-4 border-primary-500">
                <i class="fas fa-shopping-bag mr-3"></i> Produits
            </a>
            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
                <i class="fas fa-users mr-3"></i> Clients
            </a>
            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
                <i class="fas fa-receipt mr-3"></i> Commandes
            </a>
            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
                <i class="fas fa-chart-line mr-3"></i> Statistiques
            </a>
            <a href="#" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
                <i class="fas fa-cog mr-3"></i> Paramètres
            </a>
        </nav>
    </aside>
  <div>
    @yield('content')
  </div>
