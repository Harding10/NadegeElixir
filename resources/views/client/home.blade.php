<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luxe Parfums - Boutique en ligne de parfums premium</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="icon" type="image/png" href="icon.png" />

  <link rel="stylesheet" href="index.css">

  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.47.1/dist/full.css" rel="stylesheet"> <!--linl daisy-->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" /> <!--linl daisy-->
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> <!--linl daisy-->

  <script src="https://cdn.tailwindcss.com"></script>


  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            primary: '#5E35B1',
            secondary: '#FF6B6B',
            dark: '#1E1E1E',
            light: '#F5F5F5',
          }
        }
      }
    }
  </script>
  <style>
    .hero-section {
      background-image: url("https://media2.giphy.com/media/v1.Y2lkPTc5MGI3NjExdWNlcDlscmg5dXdtN2c0anlva2l6aWxuMTN0c3ZzbTZzeXh1cDM0aiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/JQwIT4jaMkH8r6Vt7f/giphy.gif");
      background-size: cover;
      background-position: center;



    }

    .product-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">






  <!-- Header -->
  <header class="bg-white dark:bg-gray-800 shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
      <div class="flex items-center space-x-2">
        <i class="fas fa-spray-can text-2xl text-primary"></i>
        <h1 class="text-xl font-bold text-gray-800 dark:text-white"> Nadège Élixi</h1>
      </div>

      <nav class="hidden md:flex space-x-8">
        <a href="#" class="text-primary font-semibold">Accueil</a>
        <a href="boutique.html" class="text-gray-800 dark:text-white hover:text-primary transition">Boutique</a>
        <a href="Apropos.html" class="text-gray-800 dark:text-white hover:text-primary transition">À propos</a>
        <a href="blog.html" class="text-gray-800 dark:text-white hover:text-primary transition">Blog</a>
        <a href="contact.html" class="text-gray-800 dark:text-white hover:text-primary transition">Contact</a>
      </nav>

      <div class="flex items-center space-x-4">
        <button id="theme-toggle" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
          <i class="fas fa-moon text-gray-600 dark:text-yellow-300"></i>
        </button>
        <a href="panier.html" class="p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700 relative">
          <i class="fas fa-shopping-cart text-gray-600 dark:text-white"></i>
          <span
            class="absolute -top-1 -right-1 bg-secondary text-white text-xs rounded-full h-5 w-5 flex items-center justify-center hidden">
            0
          </span>
        </a>

        <button class="md:hidden p-2 rounded-full hover:bg-gray-200 dark:hover:bg-gray-700">
          <i class="fas fa-bars text-gray-600 dark:text-white"></i>
        </button>
      </div>
    </div>
  </header>

  <!-- Hero Section -->
  <section class="hero-section text-white py-20">
    <div class="container mx-auto px-4 text-center">
      <h1 class="text-4xl md:text-5xl font-bold mb-4">Bienvenue chez Nadege ELIXE</h1>
      <p class="text-xl mb-8">Découvrez l'univers envoûtant des parfums raffinés, où chaque fragrance raconte une
        histoire unique.</p>
      <a href="#"
        class="bg-primary hover:bg-purple-700 text-white font-bold py-3 px-8 rounded-full transition duration-300 inline-block">Explorer
        la collection</a>
    </div>
  </section>













  <!-- Popular Perfumes Section -->
  <section class="py-16 bg-white dark:bg-gray-800  ">
    <div class="container mx-auto px-4">
      <h2 class="text-6xl font-bold text-center mb-12 text-gray-800 dark:text-white ">Découvrez notre collection
        exclusive</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        <!-- Product 1 -->
        <div
          class="product-card bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md transition duration-300">
          <div class="relative">
            <img
              src="https://i0.wp.com/zino.ci/wp-content/uploads/2022/11/MODEL-IMAGE-2022-11-18T144447.722.jpg?fit=1500%2C1500&ssl=1"
              alt="Élégance Noire" class="w-full h-64 object-cover">
            <div class="absolute top-2 right-2 bg-secondary text-white px-2 py-1 rounded-full text-xs font-semibold">
              Best Seller</div>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Élégance Noire</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Chanel - Parfum féminin floral</p>
            <div class="flex items-center mb-3">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <span class="text-gray-500 dark:text-gray-300 text-xs ml-2">(24 avis)</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-lg font-bold text-gray-800 dark:text-white">89€</span>
              <button
                class="bg-primary hover:bg-purple-700 text-white px-3 py-1 rounded-full text-sm transition">Ajouter</button>
            </div>
          </div>
        </div>

        <!-- Product 2 -->
        <div
          class="product-card bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md transition duration-300">
          <div class="relative">
            <img src="https://i0.wp.com/zino.ci/wp-content/uploads/2022/11/MODEL-IMAGE-31-2.jpg?fit=1500%2C1500&ssl=1"
              alt="Royal Oud" class="w-full h-64 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Royal Oud</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Creed - Parfum masculin boisé</p>
            <div class="flex items-center mb-3">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <span class="text-gray-500 dark:text-gray-300 text-xs ml-2">(18 avis)</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-lg font-bold text-gray-800 dark:text-white">115€</span>
              <button
                class="bg-primary hover:bg-purple-700 text-white px-3 py-1 rounded-full text-sm transition">Ajouter</button>
            </div>
          </div>
        </div>

        <!-- Product 3 -->
        <div
          class="product-card bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md transition duration-300">
          <div class="relative">
            <img src="https://www.universcosmetix.com/wp-content/uploads/2024/10/2-2.png" alt="Jardin Secret"
              class="w-full h-64 object-cover">
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Jardin Secret</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Jo Malone - Parfum unisexe frais</p>
            <div class="flex items-center mb-3">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <span class="text-gray-500 dark:text-gray-300 text-xs ml-2">(32 avis)</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-lg font-bold text-gray-800 dark:text-white">95€</span>
              <button
                class="bg-primary hover:bg-purple-700 text-white px-3 py-1 rounded-full text-sm transition">Ajouter</button>
            </div>
          </div>
        </div>

        <!-- Product 4 -->
        <div
          class="product-card bg-white dark:bg-gray-700 rounded-lg overflow-hidden shadow-md transition duration-300">
          <div class="relative">
            <img
              src="https://www.mado.re/wp-content/uploads/2021/11/armani-adgh-profundo-set-mado-parfumerie-reunion.png"
              alt="Ambre Nuit" class="w-full h-64 object-cover">
            <div class="absolute top-2 right-2 bg-primary text-white px-2 py-1 rounded-full text-xs font-semibold">
              Nouveau</div>
          </div>
          <div class="p-4">
            <h3 class="text-lg font-semibold text-gray-800 dark:text-white mb-1">Ambre Nuit</h3>
            <p class="text-gray-600 dark:text-gray-300 text-sm mb-2">Dior - Parfum oriental intense</p>
            <div class="flex items-center mb-3">
              <div class="flex text-yellow-400">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div>
              <span class="text-gray-500 dark:text-gray-300 text-xs ml-2">(27 avis)</span>
            </div>
            <div class="flex justify-between items-center">
              <span class="text-lg font-bold text-gray-800 dark:text-white">120€</span>
              <button
                class="bg-primary hover:bg-purple-700 text-white px-3 py-1 rounded-full text-sm transition">Ajouter</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <div class="relative w-full max-w-6x2 mx-auto overflow-hidden shadow-lg">
    <!-- Slides -->
    <div id="carousel" class="flex transition-transform duration-700 ease-in-out">

      <!-- Slide 1 -->
      <div class="w-full flex-shrink-0 relative">
        <img
          src="https://www.lookfantastic.fr/images?url=https://static.thcdn.com/widgets/95-fr/../../widgets/95-en/11/original-920x600-090511.jpg&format=webp&auto=avif&width=1280&fit=cover"
          class="w-full" alt="Image 1" />
        <div class="absolute top-1/2 left-10 transform -translate-y-1/2 text-left text-white max-w-xs">
          <h2 class="text-2xl font-bold ">PARFUM POUR FEMME</h2>
          <p class="text-sm">Élégants, envoûtants et souvent floraux, les parfums pour femme révèlent la personnalité et
            la sensualité de chaque femme. Des notes légères de jasmin ou de rose aux accords plus intenses de vanille
            ou d’ambre, chaque fragrance est pensée pour séduire et marquer les esprits..</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="w-full flex-shrink-0 relative">
        <img
          src="https://www.lookfantastic.fr/images?url=https://static.thcdn.com/widgets/95-fr/../../widgets/95-ae/01/original-0610_337574_LF_AH_MENA_Remaining_Assets_June_2_1920x600-095001.jpeg&format=webp&auto=avif&width=1280&fit=cover"
          class="w-full" alt="Image 2" />
        <div class="absolute top-1/2 left-10 transform -translate-y-1/2 text-left text-white max-w-xs">
          <h2 class="text-2xl font-bold">PARFUM POUR HOMME</h2>
          <p class="text-sm">Puissants, boisés ou épicés, les parfums pour homme évoquent la force, la confiance et le
            charisme. Qu’il s’agisse d’un sillage frais pour la journée ou d’un parfum plus intense pour les soirées,
            chaque composition reflète une identité masculine affirmée..</p>
        </div>
      </div>

    </div>



    <!-- Bouton Précédent -->
    <button onclick="prevSlide()"
      class="absolute left-0 top-1/2 transform -translate-y-1/2 px-4 py-2 bg-white text-black shadow">
      ‹
    </button>

    <!-- Bouton Suivant -->
    <button onclick="nextSlide()"
      class="absolute right-0 top-1/2 transform -translate-y-1/2 px-4 py-2 bg-white text-black shadow">
      ›
    </button>
  </div>

  <script>
    const carousel = document.getElementById("carousel");
    let currentIndex = 0;
    const totalSlides = 2;

    function updateSlide() {
      carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function nextSlide() {
      currentIndex = (currentIndex + 1) % totalSlides;
      updateSlide();
    }

    function prevSlide() {
      currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
      updateSlide();
    }
  </script>





  <div class="bg-white p-6 dark:bg-gray-800 transition-colors duration-300">
    <div class="badge badge-neutral badge-outline lien dark:text-white btn-xm"><a href="">Outline</a></div>
    <div class="badge badge-neutral badge-dash  dark:bg-white dark:text-black btn-xm"><a href="">Dash</a></div>
  </div>








  <!-- les 3 image de PUBImage  les 3 image de PUBImage les 3 image de PUBImage les 3 image de PUBImage -->

  <section
    class="grid grid-cols-1 md:grid-cols-2 min-h-screen items-center bg-white dark:bg-gray-800 transition-colors duration-300">
    <!-- Image à gauche -->
    <div class="w-full h-full">
      <img src="https://wallpapergod.com/images/hd/dior-3072X4096-wallpaper-rj37m18fxt7bgh9c.jpeg"
        alt="Parfum Love & Joy" class="w-full h-full object-cover" />
    </div>

    <!-- Texte à droite -->
    <div class="p-10">
      <h2 class="text-4xl font-light text-gray-800 dark:text-white mb-4">Soleil d’Été<br></h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
        Soleil d’Été est un parfum lumineux qui capture l'essence des journées ensoleillées. Avec ses notes florales et
        fruitées, il apporte une sensation de bonheur et de légèreté. Idéal pour les chaudes journées d'été.
      </p>
    </div>
  </section>

  <section
    class="grid grid-cols-1 md:grid-cols-2 min-h-screen items-center bg-white dark:bg-gray-800 transition-colors duration-300">
    <!-- Texte à gauche -->
    <div class="order-2 md:order-1 p-10">
      <h2 class="text-4xl font-light text-gray-800 dark:text-white mb-4">Mystère Nocturne<br></h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
        Mystère Nocturne est une fragrance envoûtante qui mélange des notes de vanille et de musc. Parfait pour une
        soirée romantique, ce parfum vous enveloppe d'une aura de mystère et de séduction.

      </p>
    </div>

    <!-- Image à droite -->
    <div class="order-1 md:order-2 w-full h-full">
      <img
        src="https://images.unsplash.com/photo-1598100463823-f363708204c0?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt="Parfum Love & Joy" class="w-full h-full object-cover" />
    </div>
  </section>



  <section
    class="grid grid-cols-1 md:grid-cols-2 min-h-screen items-center  bg-white dark:bg-gray-800 transition-colors duration-300">
    <!-- Image à gauche -->
    <div class="w-full h-full">
      <img
        src="https://fragrancefamilia.com/cdn/shop/articles/Screen_Shot_2023-11-30_at_11.37.53_PM.png?v=1701405858&width=1100"
        alt="Parfum Love & Joy" class="w-full h-full object-cover" />
      <!-- Remplace "ton-image.jpg" par le chemin réel de ton image -->
    </div>

    <!-- Texte à droite -->
    <div class="p-10">
      <h2 class="text-4xl font-light text-gray-800 dark:text-white mb-4"> Éclat de Rose<br></h2>
      <p class="text-lg text-gray-600 dark:text-gray-300 leading-relaxed">
        Éclat de Rose est une ode à la beauté des roses. Ses notes florales délicates sont rehaussées par des touches de
        fruits rouges, créant une expérience olfactive unique et fraîche. Un parfum qui évoque la romance.

      </p>
    </div>
      
  </section>




  <section class="bg-gray-100 py-16  dark:bg-gray-800 transition-colors duration-300 ">
    <div class="max-w-7xl mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-10 dark:text-white">Ce que nos clients disent</h2>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Avis 1 -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
          <div class="flex items-center space-x-4 mb-4">
            <img class="w-12 h-12 rounded-full" src="https://img.daisyui.com/images/profile/demo/1@94.webp"
              alt="Client 1" />
            <div>
              <p class="text-lg font-semibold">Camille A.</p>
              <p class="text-sm text-gray-500">Cliente vérifiée</p>
            </div>
          </div>
          <h3 class="text-sm font-medium uppercase text-pink-600 mb-2">Parfum "Rose Éternelle"</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            J’ai enfin trouvé un parfum qui tient toute la journée. Il sent tellement bon, délicat mais puissant.
          </p>
          <div class="mt-3 text-yellow-400">★★★★★</div>
        </div>

        <!-- Avis 2 -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
          <div class="flex items-center space-x-4 mb-4">
            <img class="w-12 h-12 rounded-full" src="https://img.daisyui.com/images/profile/demo/4@94.webp"
              alt="Client 2" />
            <div>
              <p class="text-lg font-semibold">Ismael K.</p>
              <p class="text-sm text-gray-500">Client régulier</p>
            </div>
          </div>
          <h3 class="text-sm font-medium uppercase text-pink-600 mb-2">Parfum "Bois Sauvage"</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Odeur très masculine et élégante. Je reçois toujours des compliments quand je le porte.
          </p>
          <div class="mt-3 text-yellow-400">★★★★★</div>
        </div>

        <!-- Avis 3 -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
          <div class="flex items-center space-x-4 mb-4">
            <img class="w-12 h-12 rounded-full" src="https://img.daisyui.com/images/profile/demo/3@94.webp"
              alt="Client 3" />
            <div>
              <p class="text-lg font-semibold">Fatou B.</p>
              <p class="text-sm text-gray-500">Cliente fidèle</p>
            </div>
          </div>
          <h3 class="text-sm font-medium uppercase text-pink-600 mb-2">Parfum "Vanille Intense"</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Une fragrance gourmande et chaleureuse. Il me rappelle les souvenirs de mon enfance.
          </p>
          <div class="mt-3 text-yellow-400">★★★★★</div>
        </div>

        <!-- Avis 4 -->
        <div class="bg-white p-6 rounded-xl shadow-lg hover:shadow-2xl transition duration-300">
          <div class="flex items-center space-x-4 mb-4">
            <img class="w-12 h-12 rounded-full" src="https://img.daisyui.com/images/profile/demo/2@94.webp"
              alt="Client 4" />
            <div>
              <p class="text-lg font-semibold">Noé T.</p>
              <p class="text-sm text-gray-500">Nouvel utilisateur</p>
            </div>
          </div>
          <h3 class="text-sm font-medium uppercase text-pink-600 mb-2">Parfum "Océan Bleu"</h3>
          <p class="text-gray-600 text-sm leading-relaxed">
            Frais, discret mais présent. Parfait pour le quotidien au bureau. Livraison rapide en plus !
          </p>
          <div class="mt-3 text-yellow-400">★★★★☆</div>
        </div>

      </div>
    </div>
  </section>












  <div class="card lg:card-side bg-base-100 shadow-sm rounded-none">
    <figure>
      <img
        src="https://www.my-origines.com/on/demandware.static/-/Sites-MyOrigines_HUB-Library/default/dw47937bf7/pageDesigner/Categories-landing-pages/Perfume/BANNER_DESK_PARFUM_940x500.jpg"
        alt="Album" />
    </figure>

    <div class="card-body">
      <h2 class="card-title">PARFUM</h2>
      <p>
        Des grandes Maisons aux marques plus confidentielles..</p>
      <div class="card-actions justify-end">
        <button class="btn btn-primary">Listen</button>
      </div>
    </div>
  </div>




  <figure class="diff aspect-16/9" tabindex="0">
    <div class="diff-item-1" role="img" tabindex="0">
      <div class="bg-primary text-primary-content grid place-content-center text-9xl font-black">
        Nadège Élixi
      </div>
    </div>
    <div class="diff-item-2" role="img">
      <div class="bg-base-200 grid place-content-center text-9xl font-black">Nadège Élixi</div>
    </div>
    <div class="diff-resizer"></div>
  </figure>






  <footer class="footer sm:footer-horizontal bg-base-200 text-base-content p-10">
    <aside>
      <svg width="50" height="50" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
        clip-rule="evenodd" class="fill-current">
        <path
          d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z">
        </path>
      </svg>
      <p>
        Maison Parfumée<br />
        Créateur d’émotions depuis 2024
      </p>
    </aside>
    <nav>
      <h6 class="footer-title">Découvrir</h6>
      <a class="link link-hover">Nouveautés</a>
      <a class="link link-hover">Parfums pour Elle</a>
      <a class="link link-hover">Parfums pour Lui</a>
      <a class="link link-hover">Éditions limitées</a>
    </nav>
    <nav>
      <h6 class="footer-title">À propos</h6>
      <a class="link link-hover">Notre histoire</a>
      <a class="link link-hover">Contact</a>
      <a class="link link-hover">Boutiques</a>
      <a class="link link-hover">Blog</a>
    </nav>
    <nav>
      <h6 class="footer-title">Informations</h6>
      <a class="link link-hover">Conditions générales</a>
      <a class="link link-hover">Politique de confidentialité</a>
      <a class="link link-hover">Cookies</a>
    </nav>
  </footer>

  <script src="script.js"></script>
</body>

</html>