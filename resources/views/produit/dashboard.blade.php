
@extends('base_sidebar')

@section('title', 'produits')

@section('content')




<!-- Main Content -->
        <main class="flex-1 p-8">
            <header class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-primary-700">Gestion des Produits</h2>
                <div class="flex items-center space-x-4">
                    <div class="relative">
                        <input type="text" placeholder="Rechercher un produit..." class="pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
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

            <!-- Actions Bar -->
            <div class="flex justify-between items-center mb-6">
                <div class="flex space-x-2">
                    <button class="px-4 py-2 bg-white border border-primary-200 rounded-lg text-primary-700 hover:bg-primary-50 hover:border-primary-300 transition-colors duration-200 flex items-center">
                        <i class="fas fa-filter mr-2"></i> Filtrer
                    </button>
                    <button class="px-4 py-2 bg-white border border-primary-200 rounded-lg text-primary-700 hover:bg-primary-50 hover:border-primary-300 transition-colors duration-200 flex items-center">
                        <i class="fas fa-sort mr-2"></i> Trier
                    </button>
                </div>
                <button id="addProductBtn" class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 flex items-center transition-colors duration-200 bg-gradient-to-r from-purple-500 to-indigo-500">
                    <i class="fas fa-plus mr-2"></i> Ajouter un produit
                </button>
            </div>

            <!-- Products Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-8">
                <!-- Product Card 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="relative">
                        <img src="https://picsum.photos/300/200?random=2" alt="Product" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-primary-100 text-primary-700 text-xs px-2 py-1 rounded-full">En stock</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">T-shirt basique</h3>
                        <p class="text-gray-500 text-sm mt-1">T-shirt 100% coton, coupe classique</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-gray-800">24,90 €</span>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="relative">
                        <img src="https://picsum.photos/300/200?random=3" alt="Product" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-red-100 text-red-700 text-xs px-2 py-1 rounded-full">Rupture</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Chaussures de sport</h3>
                        <p class="text-gray-500 text-sm mt-1">Confortables et légères pour le sport</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-gray-800">89,90 €</span>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="relative">
                        <img src="https://picsum.photos/300/200?random=4" alt="Product" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-primary-100 text-primary-700 text-xs px-2 py-1 rounded-full">En stock</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Casque audio</h3>
                        <p class="text-gray-500 text-sm mt-1">Audio immersif avec réduction de bruit</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-gray-800">129,90 €</span>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="relative">
                        <img src="https://picsum.photos/300/200?random=5" alt="Product" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-primary-100 text-primary-700 text-xs px-2 py-1 rounded-full">En stock</span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">Montre connectée</h3>
                        <p class="text-gray-500 text-sm mt-1">Suivi fitness et notifications intelligentes</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-gray-800">199,90 €</span>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="flex justify-center mt-8">
                <nav class="flex items-center space-x-2">
                    <a href="#" class="px-3 py-1 rounded border border-primary-200 text-primary-600 hover:bg-primary-50 transition-colors duration-200">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                    <a href="#" class="px-3 py-1 rounded border bg-primary-600 text-white">1</a>
                    <a href="#" class="px-3 py-1 rounded border border-primary-200 text-primary-600 hover:bg-primary-50 transition-colors duration-200">2</a>
                    <a href="#" class="px-3 py-1 rounded border border-primary-200 text-primary-600 hover:bg-primary-50 transition-colors duration-200">3</a>
                    <span class="px-2 py-1 text-primary-400">...</span>
                    <a href="#" class="px-3 py-1 rounded border border-primary-200 text-primary-600 hover:bg-primary-50 transition-colors duration-200">10</a>
                    <a href="#" class="px-3 py-1 rounded border border-primary-200 text-primary-600 hover:bg-primary-50 transition-colors duration-200">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </nav>
            </div>
        </main>
    </div>

    <!-- Add Product Modal -->
    <div id="addProductModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <div class="bg-white rounded-xl shadow-lg w-full max-w-3xl mx-4 max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-gray-200">
                <h3 class="text-xl font-bold text-gray-800">Ajouter un nouveau produit</h3>
            </div>
            <form id="productForm" class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Nom du produit</label>
                        <input type="text" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Référence SKU</label>
                        <input type="text" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Prix (€)</label>
                        <input type="number" step="0.01" min="0" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Catégorie</label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <option>Vêtements</option>
                            <option>Chaussures</option>
                            <option>Électronique</option>
                            <option>Accessoires</option>
                            <option>Maison</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Stock disponible</label>
                        <input type="number" min="0" required class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Statut</label>
                        <select class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                            <option>En stock</option>
                            <option>Rupture de stock</option>
                            <option>Précommande</option>
                        </select>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea rows="3" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500"></textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium text-gray-700 mb-1">Images du produit</label>
                        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-lg">
                            <div class="space-y-1 text-center">
                                <div class="flex text-sm text-gray-600">
                                    <label class="relative cursor-pointer bg-white rounded-md font-medium text-primary-600 hover:text-primary-500 focus-within:outline-none">
                                        <span>Télécharger des images</span>
                                        <input type="file" class="sr-only" multiple accept="image/*">
                                    </label>
                                </div>
                                <p class="text-xs text-gray-500">PNG, JPG, GIF jusqu'à 10MB</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" id="cancelBtn" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</button>
                    <button type="submit" class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700">Ajouter le produit</button>
                </div>
            </form>
        </div>
  @endsection










