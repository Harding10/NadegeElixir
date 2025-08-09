<!DOCTYPE html>
<html lang="fr" class="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="icon" href="photo/icon.png" type="image/png" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: {
              500: '#8b5cf6',
              600: '#7c3aed',
              700: '#6d28d9',
            },
            secondary: {
              500: '#a78bfa',
              600: '#8b5cf6',
              700: '#7c3aed',
            },
            accent: {
              500: '#f472b6',
              600: '#ec4899',
              700: '#db2777',
            }
          }
        }
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body class="bg-gradient-to-br from-purple-100 via-indigo-100 to-blue-100 dark:from-gray-900 dark:via-gray-800 dark:to-gray-900 min-h-screen flex flex-col transition-colors duration-300">

  <!-- Header -->
  <header class="bg-white/90 dark:bg-gray-900/90 shadow-md backdrop-blur-sm sticky top-0 z-50 transition-colors duration-300">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <i class="fas fa-spray-can text-2xl text-primary-600 dark:text-primary-400 transition-colors"></i>
        <h1 class="text-xl font-bold text-gray-800 dark:text-white transition-colors">Luxe Parfums</h1>
      </div>
      <button id="theme-toggle" type="button" class="text-gray-800 dark:text-white transition-colors">
        <i id="theme-icon" class="fas fa-moon"></i>
      </button>
    </div>
  </header> 


  <div>
    @yield('contente')
  </div>


  <script>
    // Fonction pour basculer la visibilité du mot de passe
    function togglePassword() {
      const passwordInput = document.getElementById("password");
      const icon = document.getElementById("toggleIcon");
      if (passwordInput.type === "password") {
        passwordInput.type = "text";
        icon.classList.remove("fa-eye");
        icon.classList.add("fa-eye-slash");
      } else {
        passwordInput.type = "password";
        icon.classList.remove("fa-eye-slash");
        icon.classList.add("fa-eye");
      }
    }

    // Gestion du thème sombre/clair
    document.addEventListener('DOMContentLoaded', function() {
      const themeToggle = document.getElementById('theme-toggle');
      const themeIcon = document.getElementById('theme-icon');
      const html = document.documentElement;

      // Vérifie le thème stocké ou les préférences système
      const savedTheme = localStorage.getItem('theme');
      const systemPrefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;

      if (savedTheme === 'dark' || (!savedTheme && systemPrefersDark)) {
        html.classList.add('dark');
        themeIcon.classList.replace('fa-moon', 'fa-sun');
      } else {
        html.classList.remove('dark');
        themeIcon.classList.replace('fa-sun', 'fa-moon');
      }

      // Gestion du clic sur le bouton de thème
      themeToggle.addEventListener('click', function() {
        if (html.classList.contains('dark')) {
          html.classList.remove('dark');
          localStorage.setItem('theme', 'light');
          themeIcon.classList.replace('fa-sun', 'fa-moon');
        } else {
          html.classList.add('dark');
          localStorage.setItem('theme', 'dark');
          themeIcon.classList.replace('fa-moon', 'fa-sun');
        }
      });
    });
  </script>

  <style>
    @keyframes fade-in {
      from {
        opacity: 0;
        transform: translateY(20px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .animate-fade-in {
      animation: fade-in 0.6s ease-out;
    }
  </style>

</body>

</html>