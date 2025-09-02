   @extends('base_sidebar')

@section('title', 'produit_dashbord')

@section('content')


   
   <!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-primary-700 text-red-500 ">Tableau de bord</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <i class="fas fa-search absolute left-3 top-3 text-primary-400"></i>
                    </div>
                    <div class="flex items-center space-x-2">
                        <div class="relative">
                            <i class="fas fa-bell text-gray-600 text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-primary-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                        </div>
                        <img src="https://picsum.photos/40?random=1" alt="Profile" class="rounded-full h-10 w-10">
                    </div>
                </div>
            </header>

            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-primary-600 font-medium">Chiffre d'affaires</p>
                            <h3 class="text-2xl font-bold mt-2 text-primary-800">24,580 €</h3>
                            <p class="text-success-DEFAULT text-sm mt-1 font-medium">+12% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-600">
                            <i class="fas fa-euro-sign text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-primary-600 font-medium">Commandes</p>
                            <h3 class="text-2xl font-bold mt-2 text-primary-800">1,245</h3>
                            <p class="text-success-DEFAULT text-sm mt-1 font-medium">+8% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-600">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-primary-600 font-medium">Clients</p>
                            <h3 class="text-2xl font-bold mt-2 text-primary-800">856</h3>
                            <p class="text-success-DEFAULT text-sm mt-1 font-medium">+5% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-600">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-primary-600 font-medium">Panier moyen</p>
                            <h3 class="text-2xl font-bold mt-2 text-primary-800">45.60 €</h3>
                            <p class="text-error-DEFAULT text-sm mt-1 font-medium">-2% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-600">
                            <i class="fas fa-shopping-basket text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Recent Orders -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Sales Chart -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md lg:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-primary-700">Ventes des 30 derniers jours</h3>
                        <select class="border border-primary-200 rounded-lg px-3 py-1 text-sm text-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-primary-500">
                            <option>30 jours</option>
                            <option>7 jours</option>
                            <option>90 jours</option>
                        </select>
                    </div>
                    <div class="bg-primary-50 p-4 rounded-lg h-64 flex items-center justify-center border border-primary-100">
                        <p class="text-primary-400">Graphique des ventes</p>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-200 hover:border-primary-300 transition-all duration-200 hover:shadow-md">
                    <h3 class="font-bold text-primary-700 mb-6">Produits populaires</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=2" alt="Product" class="rounded-lg h-12 w-12 object-cover">
                            <div class="ml-3">
                                <p class="font-medium text-primary-700">T-shirt basique</p>
                                <p class="text-sm text-primary-500">125 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=3" alt="Product" class="rounded-lg h-12 w-12 object-cover border-2 border-primary-100">
                            <div class="ml-3">
                                <p class="font-medium text-primary-700">Chaussures de sport</p>
                                <p class="text-sm text-primary-500">98 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=4" alt="Product" class="rounded-lg h-12 w-12 object-cover border-2 border-primary-100">
                            <div class="ml-3">
                                <p class="font-medium text-primary-700">Casque audio</p>
                                <p class="text-sm text-primary-500">76 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=5" alt="Product" class="rounded-lg h-12 w-12 object-cover border-2 border-primary-100">
                            <div class="ml-3">
                                <p class="font-medium text-primary-700">Montre connectée</p>
                                <p class="text-sm text-primary-500">64 ventes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-100">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-primary-700">Dernières commandes</h3>
                    <a href="#" class="text-primary-600 hover:text-primary-700 text-sm font-medium">Voir tout</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr class="bg-primary-50">
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">N° Commande</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">Client</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">Montant</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-primary-700 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-primary-100">
                            <tr class="hover:bg-primary-50 transition-colors duration-200">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-primary-700">#ORD-78945</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary-600">Jean Dupont</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary-600">15/06/2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-primary-600">89,90 €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-success-light text-success-dark font-medium">Livré</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm">
                                    <a href="#" class="text-action-primary hover:text-action-hover transition-colors duration-200">Voir</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-78944</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Marie Martin</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14/06/2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">145,50 €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-yellow-100 text-yellow-800">En cours</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="#" class="text-primary-700 hover:text-primary-900">Voir</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-78943</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Pierre Lambert</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">14/06/2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">67,30 €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-blue-100 text-blue-800">Expédié</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="#" class="text-primary-700 hover:text-primary-900">Voir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>

  @endsection
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   
   