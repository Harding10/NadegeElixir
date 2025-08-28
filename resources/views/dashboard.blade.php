<!DOCTYPE html>
<html lang="fr">
<head>
    <base target="_self">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord e-commerce</title>
    <meta name="description" content="Tableau de bord administratif pour site e-commerce">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            100: "#f3e8ff",
                            500: "#8b5cf6",
                            600: "#7c3aed",
                            700: "#6d28d9"
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-white shadow-md h-screen sticky top-0">
            <div class="p-4 flex items-center justify-center border-b border-gray-200">
                <h1 class="text-2xl font-bold text-primary-700">E-Shop Admin</h1>
            </div>
            <nav class="mt-6">
                <div class="px-4 py-3 text-gray-600 font-medium">Menu Principal</div>
                <a href="#" class="block px-6 py-3 text-primary-700 bg-primary-100 border-r-4 border-primary-500">
                    <i class="fas fa-tachometer-alt mr-3"></i> Tableau de bord
                </a>
                <a href="{{ route('produit.dashboard') }}" class="block px-6 py-3 text-gray-600 hover:bg-primary-50 hover:text-primary-700">
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

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Tableau de bord</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                        <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
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
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray-500">Chiffre d'affaires</p>
                            <h3 class="text-2xl font-bold mt-2">24,580 €</h3>
                            <p class="text-green-500 text-sm mt-1">+12% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-700">
                            <i class="fas fa-euro-sign text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray-500">Commandes</p>
                            <h3 class="text-2xl font-bold mt-2">1,245</h3>
                            <p class="text-green-500 text-sm mt-1">+8% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-700">
                            <i class="fas fa-shopping-cart text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray-500">Clients</p>
                            <h3 class="text-2xl font-bold mt-2">856</h3>
                            <p class="text-green-500 text-sm mt-1">+5% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-700">
                            <i class="fas fa-users text-xl"></i>
                        </div>
                    </div>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-gray-500">Panier moyen</p>
                            <h3 class="text-2xl font-bold mt-2">45.60 €</h3>
                            <p class="text-red-500 text-sm mt-1">-2% vs mois dernier</p>
                        </div>
                        <div class="bg-primary-100 p-3 rounded-lg text-primary-700">
                            <i class="fas fa-shopping-basket text-xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts and Recent Orders -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
                <!-- Sales Chart -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 lg:col-span-2">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="font-bold text-gray-800">Ventes des 30 derniers jours</h3>
                        <select class="border rounded-lg px-3 py-1 text-sm focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <option>30 jours</option>
                            <option>7 jours</option>
                            <option>90 jours</option>
                        </select>
                    </div>
                    <div class="bg-gray-50 p-4 rounded-lg h-64 flex items-center justify-center">
                        <p class="text-gray-400">Graphique des ventes</p>
                    </div>
                </div>

                <!-- Top Products -->
                <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                    <h3 class="font-bold text-gray-800 mb-6">Produits populaires</h3>
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=2" alt="Product" class="rounded-lg h-12 w-12 object-cover">
                            <div class="ml-3">
                                <p class="font-medium">T-shirt basique</p>
                                <p class="text-sm text-gray-500">125 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=3" alt="Product" class="rounded-lg h-12 w-12 object-cover">
                            <div class="ml-3">
                                <p class="font-medium">Chaussures de sport</p>
                                <p class="text-sm text-gray-500">98 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=4" alt="Product" class="rounded-lg h-12 w-12 object-cover">
                            <div class="ml-3">
                                <p class="font-medium">Casque audio</p>
                                <p class="text-sm text-gray-500">76 ventes</p>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <img src="https://picsum.photos/50?random=5" alt="Product" class="rounded-lg h-12 w-12 object-cover">
                            <div class="ml-3">
                                <p class="font-medium">Montre connectée</p>
                                <p class="text-sm text-gray-500">64 ventes</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Orders -->
            <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="font-bold text-gray-800">Dernières commandes</h3>
                    <a href="#" class="text-primary-700 text-sm font-medium">Voir tout</a>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">N° Commande</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Client</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Montant</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Statut</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">#ORD-78945</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Jean Dupont</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/06/2023</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">89,90 €</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 text-xs rounded-full bg-green-100 text-green-800">Livré</span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    <a href="#" class="text-primary-700 hover:text-primary-900">Voir</a>
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

    <script>
        // Navigation handling
        document.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                console.log(`Navigation vers: ${link.getAttribute('href')}`);
                // Ici vous pourriez ajouter la logique de routage réelle
            });
        });
    </script>
</body>
</html>