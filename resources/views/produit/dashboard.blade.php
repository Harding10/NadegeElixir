
@extends('base_sidebar')

@section('title', 'produits')

@section('content')


<div class="max-w-7xl mx-auto px-4">
    @if ($errors->any())
    <div class="mb-4 p-4 bg-red-200 text-red-800 rounded">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    @if (session('success'))
        <div class="mb-4 p-4 bg-green-200 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

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
                @forelse ($articles as $article)
                <!-- Article Card -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="relative">
                        <img src="{{ $article->image ?? 'https://picsum.photos/300/200?random=' . $loop->iteration }}" 
                             alt="{{ $article->title }}" class="w-full h-48 object-cover">
                        <span class="absolute top-3 right-3 bg-primary-100 text-primary-700 text-xs px-2 py-1 rounded-full">
                            Article
                        </span>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-gray-800">{{ $article->title }}</h3>
                        <p class="text-gray-500 text-sm mt-1">{{ $article->description }}</p>
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-bold text-gray-800">{{ $article->price ? number_format($article->price, 2, ',', ' ') : 'N/A' }} €</span>
                            <div class="flex space-x-2">
                                <button class="text-blue-500 hover:text-blue-700" onclick='editArticle({{ json_encode($article) }})'>
                                    <i class="fas fa-edit"></i>
                                </button>
                                <form action="{{ route('produit.destroy', $article) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700" 
                                            onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500">Aucun article disponible</p>
                </div>
                @endforelse

             

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
            <div for="title" class="p-6 border-b border-gray-200">
                <h3 id="modalTitle" class="text-xl font-bold text-gray-800">Ajouter un nouveau produit</h3>
            </div>           
            <form action="{{ route('produit.store') }}" method="POST" enctype="multipart/form-data" id="articleForm" class="p-6">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Titre de l'article</label>
                        <input type="text" id="title" name="title" value="{{ old('title') }}" required 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div>
                        <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Prix (€)</label>
                        <input type="number" id="price" name="price" value="{{ old('price') }}" step="0.01" min="0" required 
                               class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">
                    </div>
                    <div class="md:col-span-2">
                        <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea id="description" name="description" rows="3" 
                                 class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500">{{ old('description') }}</textarea>
                    </div>
                    <div class="md:col-span-2">
                        <label for="image" class="block text-sm font-medium text-gray-700 mb-1">Image de l'article</label>
                        <input type="file" id="image" name="image" accept="image/*" class="block mt-2">
                        <p class="text-xs text-gray-500 mt-1">PNG, JPG, GIF jusqu'à 2MB</p>
                    </div>
                </div>
                <div class="mt-6 flex justify-end space-x-3">
                    <button type="button" id="cancelBtn" class="px-4 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">Annuler</button>
                    <button type="submit" id="submitBtn" class="px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 bg-green-500">Ajouter l'article</button>
                </div>
            </form>
        </div>
  @endsection










