@extends('base')

@section('title', 'connexion')

@section('contente')
@if ($errors->any())
  <div class="bg-red-50 dark:bg-red-900/20 border-l-4 border-red-500 dark:border-red-800 rounded-lg p-4 mb-6 animate-fade-in" role="alert">
    <div class="flex items-start">
      <div class="flex-shrink-0">
        <i class="fas fa-exclamation-circle text-red-500 dark:text-red-400 text-lg"></i>
      </div>
      <div class="ml-3">
        <div class="font-bold text-red-800 dark:text-red-100">Erreur !</div>
        <div class="mt-1 text-sm text-red-700 dark:text-red-300">{{ $errors->first() }}</div>
      </div>
    </div>
  </div>
@endif


  <!-- Connexion Form -->
  <main class="flex-grow flex items-center justify-center px-4 py-16">
    <div class="w-full max-w-md bg-white/80 dark:bg-gray-800/90 backdrop-blur-lg p-8 rounded-3xl shadow-xl animate-fade-in transition-colors duration-300">
      <h2 class="text-3xl font-bold text-center text-gray-800 dark:text-white mb-8 transition-colors">
        <i class="fas fa-user-circle mr-2 text-primary-600 dark:text-primary-400 transition-colors"></i>
        Connexion
      </h2>

      <form action="{{route('login.submit')}}" method="POST" class="space-y-6">
        @csrf

        <div class="relative">
          <label for="email" class="block text-gray-700 dark:text-gray-300 font-medium mb-1 transition-colors">Adresse e-mail</label>
          <div class="relative">
            <i class="fas fa-envelope absolute left-3 top-3.5 text-gray-400"></i>
            <input type="email" id="email" name="email" required placeholder="exemple@mail.com"
              class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 focus:ring-4 focus:ring-primary-300 outline-none transition-all duration-300" />
          </div>
          @error('email')
          <div class="mt-2 flex items-start text-sm text-red-600 dark:text-red-400">
            <i class="fas fa-info-circle mt-0.5 mr-1.5 flex-shrink-0"></i>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        <div class="relative">
          <label for="password" class="block text-gray-700 dark:text-gray-300 font-medium mb-1 transition-colors">Mot de passe</label>
          <div class="relative">
            <i class="fas fa-lock absolute left-3 top-3.5 text-gray-400"></i>
            <input type="password" id="password" name="password" required placeholder="Votre mot de passe"
              class="w-full pl-10 pr-10 py-2.5 rounded-xl border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-200 focus:ring-4 focus:ring-primary-300 outline-none transition-all duration-300" />
            <button type="button" onclick="togglePassword()"
              class="absolute right-3 top-3.5 text-gray-500 hover:text-gray-700 dark:hover:text-gray-300 transition-colors">
              <i id="toggleIcon" class="fas fa-eye"></i>
            </button>
          </div>
          @error('password')
          <div class="mt-2 flex items-start text-sm text-red-600 dark:text-red-400">
            <i class="fas fa-info-circle mt-0.5 mr-1.5 flex-shrink-0"></i>
            <span>{{ $message }}</span>
          </div>
          @enderror
        </div>

        <div class="flex items-center justify-between">
          <label class="inline-flex items-center text-sm text-gray-600 dark:text-gray-400 transition-colors">
            <input type="checkbox" class="form-checkbox text-primary-500 mr-2 rounded" />
            Se souvenir de moi
          </label>
          <a href="reset_password.php" class="text-sm text-primary-600 dark:text-primary-400 hover:underline transition-colors">Mot de passe oublié ?</a>
        </div>

        <button type="submit"
          class="w-full bg-gradient-to-r from-primary-600 via-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-primary-700 text-white font-semibold py-2.5 rounded-2xl shadow-md transform transition-all hover:scale-[1.02] active:scale-100 focus:outline-none focus:ring-4 focus:ring-primary-300 duration-300">
          Se connecter
        </button>
      </form>

      <p class="mt-6 text-center text-sm text-gray-600 dark:text-gray-400 transition-colors">
        Vous n'avez pas de compte ?
        <a href="{{route('register')}}" class="text-primary-600 dark:text-primary-400 hover:underline transition-colors">Créer un compte</a>
      </p>
    </div>
  </main>

  @endsection