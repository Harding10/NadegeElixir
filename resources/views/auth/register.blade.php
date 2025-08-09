@if (session('success'))
<div class="bg-red-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
    <strong class="font-bold">Success !</strong>
    <span class="block sm:inline">{{ session('success') }}</span>
</div>
@endif

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - Luxe Parfums</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: { 500: '#8b5cf6', 600: '#7c3aed', 700: '#6d28d9' },
                        secondary: { 500: '#a78bfa', 600: '#8b5cf6', 700: '#7c3aed' },
                        accent: { 500: '#f472b6', 600: '#ec4899', 700: '#db2777' }
                    }
                }
            }
        }
    </script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        body { font-family: 'Poppins', sans-serif; background: linear-gradient(135deg, #f5f7fa 0%, #e4e7f1 100%); }
        .glass-card { background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(16px) saturate(180%); border: 1px solid rgba(255, 255, 255, 0.3); }
        .gradient-header { background: linear-gradient(90deg, #8b5cf6 0%, #6366f1 100%); }
        .floating { animation: float 8s ease-in-out infinite; }
        .bubble { position: absolute; border-radius: 50%; background: radial-gradient(circle, rgba(255,255,255,0.8) 0%, rgba(139,92,246,0.2) 70%); filter: blur(5px); z-index: -1; }
        @keyframes float { 0% { transform: translateY(0px); } 50% { transform: translateY(-15px); } 100% { transform: translateY(0px); } }
        @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
        .animate-fade-in { animation: fadeIn 0.6s ease-out forwards; }
        input:focus { box-shadow: 0 0 0 3px rgba(139, 92, 246, 0.2); border-color: #8b5cf6; }
        .btn-gradient { background: linear-gradient(90deg, #8b5cf6 0%, #6366f1 100%); transition: all 0.3s ease; }
        .btn-gradient:hover { background: linear-gradient(90deg, #7c3aed 0%, #4f46e5 100%); transform: translateY(-2px); box-shadow: 0 10px 20px rgba(139, 92, 246, 0.3); }
        .btn-gradient:active { transform: translateY(0); }
        .perfume-bottle { position: relative; width: 120px; height: 240px; background: linear-gradient(to bottom, #e0e7ff 0%, #c7d2fe 30%, #a5b4fc 100%); border-radius: 40px 40px 15px 15px; box-shadow: 0 15px 30px rgba(0,0,0,0.1); overflow: hidden; }
        .perfume-bottle::before { content: ''; position: absolute; top: 0; left: 0; width: 100%; height: 20%; background: linear-gradient(to right, #f0abfc 0%, #c084fc 100%); border-radius: 40px 40px 0 0; }
        .perfume-bottle::after { content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 15%; background: linear-gradient(to right, #f0abfc 0%, #c084fc 100%); border-radius: 0 0 15px 15px; }
        .perfume-cap { position: absolute; top: -25px; left: 50%; transform: translateX(-50%); width: 50px; height: 25px; background: linear-gradient(to right, #f0abfc 0%, #c084fc 100%); border-radius: 10px 10px 0 0; }
        .social-icon { transition: all 0.3s ease; }
        .social-icon:hover { transform: translateY(-5px); color: #8b5cf6; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4">
    <div class="absolute top-5 right-5">
        <button id="theme-toggle" class="p-2 rounded-full bg-white shadow-md">
            <i id="theme-icon" class="fas fa-moon text-purple-600"></i>
        </button>
    </div>
    
    <!-- Background bubbles -->
    <div class="bubble w-24 h-24 top-1/4 left-1/4 floating" style="animation-delay: 1s;"></div>
    <div class="bubble w-16 h-16 top-1/3 right-1/3 floating" style="animation-delay: 2s;"></div>
    <div class="bubble w-20 h-20 bottom-1/3 left-1/3 floating" style="animation-delay: 3s;"></div>
    <div class="bubble w-28 h-28 bottom-1/4 right-1/4 floating" style="animation-delay: 4s;"></div>
    
    <div class="w-full max-w-6xl flex flex-col md:flex-row rounded-2xl overflow-hidden shadow-2xl">
        <!-- Left Column - Form -->
        <div class="w-full md:w-1/2 p-8 glass-card flex flex-col justify-center">
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="perfume-bottle floating mx-auto">
                        <div class="perfume-cap"></div>
                    </div>
                </div>
                <h1 class="text-3xl font-bold text-gray-800">Créer un Compte</h1>
                <p class="text-gray-600 mt-2">Rejoignez notre communauté exclusive</p>
            </div>
            
            <form action="{{ route('register') }}" method="POST" class="space-y-5">
                @csrf

                <div class="animate-fade-in" style="animation-delay: 0.1s;">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-700">Nom</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                            <i class="fa fa-user"></i>
                        </div>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required value="{{ old('name') }}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 bg-white placeholder-gray-500 focus:outline-none transition-all duration-300" />
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="animate-fade-in" style="animation-delay: 0.2s;">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Email</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <input type="email" id="email" name="email" placeholder="Votremail@gmail.com" required value="{{ old('email') }}"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 bg-white placeholder-gray-500 focus:outline-none transition-all duration-300" />
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="animate-fade-in" style="animation-delay: 0.3s;">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Mot de passe</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" id="password" name="password" placeholder="*********" required
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 bg-white placeholder-gray-500 focus:outline-none transition-all duration-300" />
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                
                <div class="animate-fade-in" style="animation-delay: 0.4s;">
                    <label for="password_confirmation" class="block mb-2 text-sm font-medium text-gray-700">Confirmation</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-500">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input type="password" id="password_confirmation" name="password_confirmation" required placeholder="••••••••"
                            class="w-full pl-10 pr-4 py-3 rounded-xl border border-gray-300 bg-white placeholder-gray-500 focus:outline-none transition-all duration-300" />
                    </div>
                </div>
                
                <div class="animate-fade-in" style="animation-delay: 0.5s;">
                    <button type="submit"
                        class="btn-gradient w-full text-white font-semibold py-3.5 px-6 rounded-xl shadow-lg transform transition-all duration-300">
                        <span class="drop-shadow-sm">Créer mon compte</span>
                        <i class="fas fa-arrow-right ml-2 text-sm"></i>
                    </button>
                </div>
                
                <div class="animate-fade-in text-center pt-4" style="animation-delay: 0.6s;">
                    <p class="text-gray-600 text-sm">
                        Vous avez déjà un compte ?
                        <a href="{{ route('login') }}" class="text-purple-600 hover:text-purple-800 font-medium transition-colors duration-300">
                            Connectez-vous
                        </a>
                    </p>
                </div>
            </form>
        </div>
        
        <!-- Right Column - Decorative -->
        <div class="w-full md:w-1/2 hidden md:flex flex-col justify-center items-center p-12 text-white relative overflow-hidden" style="background: linear-gradient(135deg, #8b5cf6 0%, #6366f1 100%);">
            <div class="absolute inset-0 opacity-10" style="background-image: url('data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 100 100\'><circle cx=\'25\' cy=\'25\' r=\'15\' fill=\'white\' opacity=\'0.2\'/><circle cx=\'75\' cy=\'75\' r=\'15\' fill=\'white\' opacity=\'0.2\'/><circle cx=\'50\' cy=\'50\' r=\'10\' fill=\'white\' opacity=\'0.2\'/></svg>'); background-size: 150px;"></div>
            
            <div class="text-center relative z-10">
                <h2 class="text-4xl font-bold mb-4">Bienvenue chez Luxe Parfums</h2>
                <p class="text-xl mb-8 opacity-90">Découvrez des fragrances exclusives et des expériences olfactives uniques</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const themeToggle = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const html = document.documentElement;

            themeToggle.addEventListener('click', function() {
                if (html.classList.contains('dark')) {
                    html.classList.remove('dark');
                    themeIcon.classList.replace('fa-sun', 'fa-moon');
                } else {
                    html.classList.add('dark');
                    themeIcon.classList.replace('fa-moon', 'fa-sun');
                }
            });
        });
    </script>
</body>
</html>
