@extends('base_sidebar')

@section('title', 'Paramètres')

@section('content')
<main class="flex-1 p-8">
    <header class="flex justify-between items-center mb-8">
        <h2 class="text-2xl font-bold text-primary-700">Paramètres</h2>
        <div class="flex items-center space-x-4">
            <div class="relative">
                <div class="flex items-center space-x-2">
                    <div class="relative">
                        <i class="fas fa-bell text-primary-600 text-xl"></i>
                        <span class="absolute -top-1 -right-1 bg-primary-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">2</span>
                    </div>
                    <img src="https://picsum.photos/40?random=1" alt="Profile" class="rounded-full h-10 w-10">
                </div>
            </div>
        </div>
    </header>

    <div class="bg-white p-6 rounded-xl shadow-sm border border-primary-100">
        <div class="max-w-4xl mx-auto">
            <!-- Section Profil -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-primary-700 mb-4">Profil</h3>
                <div class="flex items-center space-x-4 p-4 bg-surface hover:bg-surface-hover rounded-lg border border-border">
                    <img src="https://picsum.photos/80?random=1" alt="Photo de profil" class="rounded-full h-20 w-20">
                    <div>
                        <p class="font-medium text-text-primary">{{ auth()->user()->name ?? 'Utilisateur' }}</p>
                        <p class="text-text-secondary">{{ auth()->user()->email ?? 'email@exemple.com' }}</p>
                        <button class="mt-2 text-sm text-action-primary hover:text-action-hover">
                            Modifier la photo
                        </button>
                    </div>
                </div>
            </div>

            <!-- Section Sécurité -->
            <div class="mb-8">
                <h3 class="text-xl font-semibold text-primary-700 mb-4">Sécurité</h3>
                <div class="space-y-4">
                    <button class="w-full text-left p-4 bg-surface hover:bg-surface-hover rounded-lg border border-border flex justify-between items-center">
                        <span class="text-text-primary">Changer le mot de passe</span>
                        <i class="fas fa-chevron-right text-text-secondary"></i>
                    </button>
                    <button class="w-full text-left p-4 bg-surface hover:bg-surface-hover rounded-lg border border-border flex justify-between items-center">
                        <span class="text-text-primary">Authentification à deux facteurs</span>
                        <i class="fas fa-chevron-right text-text-secondary"></i>
                    </button>
                </div>
            </div>

            <!-- Section Déconnexion -->
            <div>
                <h3 class="text-xl font-semibold text-primary-700 mb-4">Session</h3>
                <form action="{{ route('logout') }}" method="POST" class="inline-block">
                    @csrf
                    <button type="submit" class="w-full p-4 bg-error-light text-error-dark hover:bg-error-light/80 rounded-lg border border-error flex items-center justify-center space-x-2 transition-colors duration-200">
                        <i class="fas fa-sign-out-alt"></i>
                        <span>Se déconnecter</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
