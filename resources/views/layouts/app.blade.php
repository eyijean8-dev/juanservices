<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- Force HTTPS pour toutes les URLs -->
    <base href="https://juanservices.onrender.com/" />

    {{-- META SEO --}}
    <meta name="description" content="JuanServices - Agence de développement web & mobile. Création de sites web, applications mobiles, design UI/UX et hébergement professionnel.">
    <meta name="keywords" content="développement web, création site web, application mobile, design UI/UX, hébergement web, agence digitale Libreville">
    <meta name="author" content="JuanServices">
    <meta name="robots" content="index, follow">
    
    {{-- OPEN GRAPH --}}
    <meta property="og:title" content="JuanServices | Solutions Numériques Professionnelles">
    <meta property="og:description" content="Agence de développement web & mobile. Transformons vos idées en solutions digitales performantes.">
    <meta property="og:image" content="{{ asset('images/og-image.png') }}">
    <meta property="og:url" content="https://juanservices.onrender.com">
    <meta property="og:type" content="website">
    
    {{-- TWITTER CARD --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="JuanServices | Développement Web & Mobile">
    <meta name="twitter:description" content="Solutions digitales sur mesure pour votre entreprise">
    <!-- Meta pour prévenir mixed content -->
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
   {{-- FAVICON --}}
      <!-- Favicon en HTTPS -->
    <link rel="icon" href="{{ secure_asset('favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">

    <title>@yield('title', 'JuanServices | Agence Digitale')</title>


    {{-- PRELOAD --}}
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" as="style">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    {{-- STYLES --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

    {{-- CUSTOM STYLES --}}
    <style>
        :root {
            --primary-blue: #2563eb;
            --primary-blue-dark: #1d4ed8;
            --accent-cyan: #06b6d4;
            --gradient-primary: linear-gradient(135deg, #2563eb 0%, #06b6d4 100%);
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }
        
        .font-poppins {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Scrollbar personnalisée */
        ::-webkit-scrollbar {
            width: 10px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--gradient-primary);
            border-radius: 5px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(135deg, var(--primary-blue-dark), var(--accent-cyan));
        }
        
        /* Animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .animate-float {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes pulse-glow {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .animate-pulse-glow {
            animation: pulse-glow 2s ease-in-out infinite;
        }
        
        /* Smooth transitions */
        .transition-all {
            transition-property: all;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 300ms;
        }
    </style>
    
    {{-- ANALYTICS --}}
    <!-- Google Analytics / Matomo -->
     <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Q7RTMZ39BD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-Q7RTMZ39BD');
    </script>
    
</head>

<body class="bg-gradient-to-b from-gray-50 to-blue-50/20 min-h-screen flex flex-col">

    {{-- NAVBAR --}}
    <nav class="fixed top-0 left-0 w-full bg-white/80 backdrop-blur-xl z-50 border-b border-white/20 shadow-lg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                
                {{-- LOGO --}}
                <a href="/" class="flex items-center gap-3 group">
                    <div class="relative">
                        <img src="{{ asset('images/logo.png') }}" 
                             alt="Logo JuanService" 
                             class="w-12 h-12 object-contain transition-transform duration-500 group-hover:scale-110 group-hover:rotate-3">
                    </div>
                    <div>
                        <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                            Juan<span class="text-gray-900">Services</span>
                        </span>
                        <p class="text-xs text-gray-500 font-medium tracking-wide">Solutions Digitales</p>
                    </div>
                </a>

                {{-- NAV DESKTOP --}}
                <div class="hidden lg:flex items-center space-x-1">
                    <a href="/" 
                       class="px-5 py-3 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50/50 transition-all group relative">
                       <i class="fa-solid fa-house mr-2 text-blue-500 group-hover:text-cyan-500"></i>
                       Accueil
                       <span class="absolute bottom-0 left-1/4 w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
                    </a>
                    
                    <a href="/services" 
                       class="px-5 py-3 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50/50 transition-all group relative">
                       <i class="fa-solid fa-code mr-2 text-blue-500 group-hover:text-cyan-500"></i>
                       Services
                       <span class="absolute bottom-0 left-1/4 w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
                    </a>
                    
                    <a href="/projets" 
                       class="px-5 py-3 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50/50 transition-all group relative">
                       <i class="fa-solid fa-briefcase mr-2 text-blue-500 group-hover:text-cyan-500"></i>
                       Projets
                       <span class="absolute bottom-0 left-1/4 w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
                    </a>
                    
                    <a href="/a_propos" 
                       class="px-5 py-3 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50/50 transition-all group relative">
                       <i class="fa-solid fa-user mr-2 text-blue-500 group-hover:text-cyan-500"></i>
                       À propos
                       <span class="absolute bottom-0 left-1/4 w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
                    </a>
                    
                    <a href="/contact" 
                       class="px-5 py-3 text-gray-700 hover:text-blue-600 font-medium rounded-xl hover:bg-blue-50/50 transition-all group relative">
                       <i class="fa-solid fa-envelope mr-2 text-blue-500 group-hover:text-cyan-500"></i>
                       Contact
                       <span class="absolute bottom-0 left-1/4 w-1/2 h-0.5 bg-gradient-to-r from-blue-500 to-cyan-500 transform scale-x-0 group-hover:scale-x-100 transition-transform origin-center"></span>
                    </a>
                    
                    {{-- CTA NAV --}}
                    <a href="/contact" 
                       class="ml-4 px-6 py-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all">
                       <i class="fa-solid fa-rocket mr-2"></i>
                       Demander un devis
                    </a>
                </div>

                {{-- BURGER MOBILE --}}
                <button
                    id="burgerBtn"
                    type="button"
                    aria-label="Ouvrir le menu"
                    class="lg:hidden w-12 h-12 rounded-xl bg-gradient-to-r from-blue-50 to-cyan-50 text-blue-600 flex items-center justify-center hover:shadow-lg transition-all relative z-[999]">
                    <i class="fa-solid fa-bars text-xl"></i>
                </button>

            </div>
        </div>

        {{-- MENU MOBILE --}}
        <div id="mobileMenu" 
             class="lg:hidden fixed top-20 left-0 w-full bg-white/95 backdrop-blur-xl shadow-2xl transform -translate-y-full opacity-0 transition-all duration-300 z-40"
             aria-hidden="true">
            <div class="max-w-7xl mx-auto px-4 py-6">
                <nav class="flex flex-col space-y-4">
                    <a href="/" 
                       class="flex items-center gap-4 px-4 py-4 rounded-xl hover:bg-blue-50 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center group-hover:from-blue-200 group-hover:to-cyan-200">
                            <i class="fa-solid fa-house text-blue-600"></i>
                        </div>
                        <span class="text-lg font-medium text-gray-800">Accueil</span>
                    </a>
                    
                    <a href="/services" 
                       class="flex items-center gap-4 px-4 py-4 rounded-xl hover:bg-blue-50 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center group-hover:from-blue-200 group-hover:to-cyan-200">
                            <i class="fa-solid fa-code text-blue-600"></i>
                        </div>
                        <span class="text-lg font-medium text-gray-800">Services</span>
                    </a>
                    
                    <a href="/projets" 
                       class="flex items-center gap-4 px-4 py-4 rounded-xl hover:bg-blue-50 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center group-hover:from-blue-200 group-hover:to-cyan-200">
                            <i class="fa-solid fa-briefcase text-blue-600"></i>
                        </div>
                        <span class="text-lg font-medium text-gray-800">Projets</span>
                    </a>
                    
                    <a href="/a_propos" 
                       class="flex items-center gap-4 px-4 py-4 rounded-xl hover:bg-blue-50 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center group-hover:from-blue-200 group-hover:to-cyan-200">
                            <i class="fa-solid fa-user text-blue-600"></i>
                        </div>
                        <span class="text-lg font-medium text-gray-800">À propos</span>
                    </a>
                    
                    <a href="/contact" 
                       class="flex items-center gap-4 px-4 py-4 rounded-xl hover:bg-blue-50 transition-all group">
                        <div class="w-10 h-10 rounded-lg bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center group-hover:from-blue-200 group-hover:to-cyan-200">
                            <i class="fa-solid fa-envelope text-blue-600"></i>
                        </div>
                        <span class="text-lg font-medium text-gray-800">Contact</span>
                    </a>
                    
                    {{-- CTA MOBILE --}}
                    <a href="/contact" 
                       class="mx-4 px-4 py-4 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-semibold rounded-xl text-center shadow-lg hover:shadow-xl transition-all">
                       <i class="fa-solid fa-rocket mr-2"></i>
                       Demander un devis gratuit
                    </a>
                </nav>
            </div>
        </div>
    </nav>

    {{-- MAIN CONTENT --}}
    <main class="flex-grow pt-20">
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gradient-to-b from-gray-900 to-blue-950 text-white pt-16 pb-8 mt-20"> 
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            {{-- NEWSLETTER --}}
            <div class="bg-gradient-to-r from-blue-600 to-cyan-500 rounded-2xl shadow-2xl p-8 mb-12">
                <div class="max-w-2xl mx-auto text-center">
                    <h3 class="text-2xl font-bold mb-4">🚀 Boostez votre présence digitale</h3>
                    <p class="text-blue-100 mb-6">
                        Recevez nos conseils experts et offres exclusives directement dans votre boîte mail.
                    </p>
                    <form class="flex flex-col sm:flex-row gap-4">
                        <input type="email" 
                               placeholder="Votre email professionnel" 
                               class="flex-grow px-6 py-4 rounded-xl bg-white/10 backdrop-blur-sm border border-white/20 text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-white/30">
                        <button type="submit" 
                                class="px-8 py-4 bg-white text-blue-700 font-bold rounded-xl hover:bg-gray-100 transition-colors shadow-lg">
                            S'inscrire
                        </button>
                    </form>
                </div>
            </div>

            {{-- GRID FOOTER --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
                
                {{-- LOGO + DESCRIPTION --}}
                <div class="space-y-6">
                    <div class="flex items-center gap-3">
                        <img src="{{ asset('images/logo.png') }}" 
                             class="w-12 h-12 object-contain" 
                             alt="JuanService">
                        <div>
                            <h3 class="text-xl font-bold text-white">JuanServices</h3>
                            <p class="text-sm text-cyan-300 font-medium">Agence Digitale</p>
                        </div>
                    </div>
                    <p class="text-gray-300 text-sm leading-relaxed">
                        Spécialistes en développement web & mobile . 
                        Nous transformons vos idées en solutions digitales performantes.
                    </p>
                    <div class="flex gap-3">
                        <span class="px-3 py-1 bg-blue-900/50 text-blue-300 text-xs rounded-full">🌐 Web</span>
                        <span class="px-3 py-1 bg-cyan-900/50 text-cyan-300 text-xs rounded-full">📱 Mobile</span>
                        <span class="px-3 py-1 bg-gray-800 text-gray-300 text-xs rounded-full">🎨 Design</span>
                    </div>
                </div>

                {{-- LIENS RAPIDES HARMONISÉ --}}
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center gap-3">
                        <div class="relative">
                            <i class="fa-solid fa-compass text-cyan-400 text-xl"></i>
                        </div>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            Navigation
                        </span>
                    </h4>
                    
                    <ul class="space-y-4">
                        <li>
                            <a href="/" class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                                <div class="w-8 h-8 rounded-lg bg-cyan-500/10 flex items-center justify-center group-hover:bg-cyan-500/20 transition-colors">
                                    <i class="fa-solid fa-house text-cyan-400 text-sm group-hover:scale-110 transition-transform"></i>
                                </div>
                                <span class="text-gray-200 group-hover:text-white">Accueil</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/services" class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                                <div class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                                    <i class="fa-solid fa-cube text-blue-400 text-sm group-hover:rotate-12 transition-transform duration-300"></i>
                                </div>
                                <span class="text-gray-200 group-hover:text-white">Services</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/projets" class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                                <div class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover:bg-purple-500/20 transition-colors">
                                    <i class="fa-solid fa-rocket text-purple-400 text-sm group-hover:-translate-y-0.5 transition-transform"></i>
                                </div>
                                <span class="text-gray-200 group-hover:text-white">Nos projets</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/a_propos" class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                                <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-colors">
                                    <i class="fa-solid fa-users text-green-400 text-sm group-hover:scale-110 transition-transform"></i>
                                </div>
                                <span class="text-gray-200 group-hover:text-white">Notre équipe</span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="/contact" class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                                <div class="w-8 h-8 rounded-lg bg-red-500/10 flex items-center justify-center group-hover:bg-red-500/20 transition-colors">
                                    <i class="fa-solid fa-envelope text-red-400 text-sm group-hover:animate-pulse"></i>
                                </div>
                                <span class="text-gray-200 group-hover:text-white">Contact & devis</span>
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- SERVICES HARMONISÉ --}}
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center gap-3">
                        <i class="fa-solid fa-gear text-cyan-400 text-xl"></i>
                        <span class="bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            Services
                        </span>
                    </h4>
                    <ul class="space-y-4">
                        <li class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                            <div class="w-8 h-8 rounded-lg bg-green-500/10 flex items-center justify-center group-hover:bg-green-500/20 transition-colors">
                                <i class="fa-solid fa-code text-green-400 text-sm group-hover:rotate-12 transition-transform duration-300"></i>
                            </div>
                            <span class="text-gray-200 group-hover:text-white">Développement Web</span>
                        </li>
                        <li class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                            <div class="w-8 h-8 rounded-lg bg-blue-500/10 flex items-center justify-center group-hover:bg-blue-500/20 transition-colors">
                                <i class="fa-solid fa-mobile-screen text-blue-400 text-sm group-hover:-translate-y-0.5 transition-transform"></i>
                            </div>
                            <span class="text-gray-200 group-hover:text-white">Applications Mobile</span>
                        </li>
                        <li class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                            <div class="w-8 h-8 rounded-lg bg-purple-500/10 flex items-center justify-center group-hover:bg-purple-500/20 transition-colors">
                                <i class="fa-solid fa-paint-brush text-purple-400 text-sm group-hover:scale-110 transition-transform"></i>
                            </div>
                            <span class="text-gray-200 group-hover:text-white">Design UI/UX</span>
                        </li>
                        <li class="group flex items-center gap-3 p-2.5 rounded-lg hover:bg-white/5 transition-all duration-200">
                            <div class="w-8 h-8 rounded-lg bg-orange-500/10 flex items-center justify-center group-hover:bg-orange-500/20 transition-colors">
                                <i class="fa-solid fa-server text-orange-400 text-sm group-hover:animate-pulse"></i>
                            </div>
                            <span class="text-gray-200 group-hover:text-white">Hébergement</span>
                        </li>
                    </ul>
                </div>

                {{-- CONTACT & RÉSEAUX --}}
                <div>
                    <h4 class="text-lg font-bold mb-6 text-white flex items-center gap-2">
                        <i class="fa-solid fa-address-book text-green-400"></i>
                        Contact
                    </h4>
                    <ul class="space-y-4 text-gray-300 mb-6">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-envelope text-blue-400"></i>
                            <span>eyijean1@gmail.com</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-green-400"></i>
                            <span>+241 66 41 34 93</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-location-dot text-red-400"></i>
                            <span>Franceville, Gabon</span>
                        </li>
                    </ul>
                    
                    <h5 class="text-lg font-bold mb-4 text-white">Suivez-nous</h5>
                    <div class="flex gap-4">
                        <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-blue-700 flex items-center justify-center text-xl transition-all hover:scale-110 hover:rotate-6">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://wa.me/24166413493" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-green-600 flex items-center justify-center text-xl transition-all hover:scale-110 hover:-rotate-6">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-lg bg-white/10 hover:bg-gray-700 flex items-center justify-center text-xl transition-all hover:scale-110 hover:rotate-12">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="w-12 h-12 rounded-xl bg-white/10 hover:bg-blue-400 flex items-center justify-center text-xl transition-all hover:scale-110 hover:-rotate-12">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>

            </div>

            {{-- BOTTOM BAR --}}
            <div class="pt-8 border-t border-gray-800">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div class="text-center md:text-left">
                        <p class="text-gray-400 text-sm">
                            © {{ date('Y') }} <span class="font-bold text-cyan-300">JuanServices</span>. Tous droits réservés.
                        </p>
                        <p class="text-gray-500 text-xs mt-1">
                            <i class="fa-solid fa-heart text-red-500 mr-1"></i>
                            Conçu et développé avec passion au Gabon
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap justify-center gap-4 text-sm text-gray-500">
                        <a href="#" class="hover:text-white transition-colors">Mentions légales</a>
                        <span>•</span>
                        <a href="#" class="hover:text-white transition-colors">Confidentialité</a>
                        <span>•</span>
                        <a href="#" class="hover:text-white transition-colors">CGV</a>
                        <span>•</span>
                        <a href="#" class="hover:text-white transition-colors">Cookies</a>
                    </div>
                </div>
            </div>

        </div>
    </footer>

    {{-- SCRIPTS --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialize AOS
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof AOS !== 'undefined') {
                AOS.init({
                    duration: 800,
                    once: true,
                    offset: 100,
                    easing: 'ease-out-cubic'
                });
            }
            
            // Mobile Menu Toggle
            const burgerBtn = document.getElementById('burgerBtn');
            const mobileMenu = document.getElementById('mobileMenu');
            
            if (burgerBtn && mobileMenu) {
                burgerBtn.addEventListener('click', function() {
                    event.stopPropagation(); // 🔥 LIGNE MAGIQUE
                    const isHidden = mobileMenu.classList.contains('-translate-y-full');
                    
                    if (isHidden) {
                        mobileMenu.classList.remove('-translate-y-full', 'opacity-0');
                        mobileMenu.classList.add('translate-y-0', 'opacity-100');
                        mobileMenu.setAttribute('aria-hidden', 'false');
                        document.body.style.overflow = 'hidden';
                    } else {
                        mobileMenu.classList.add('-translate-y-full', 'opacity-0');
                        mobileMenu.classList.remove('translate-y-0', 'opacity-100');
                        mobileMenu.setAttribute('aria-hidden', 'true');
                        document.body.style.overflow = '';
                    }
                });
                
                // Close menu when clicking outside
                document.addEventListener('click', function(event) {
                    if (!mobileMenu.contains(event.target) && !burgerBtn.contains(event.target) && !mobileMenu.classList.contains('-translate-y-full')) {
                        mobileMenu.classList.add('-translate-y-full', 'opacity-0');
                        mobileMenu.classList.remove('translate-y-0', 'opacity-100');
                        mobileMenu.setAttribute('aria-hidden', 'true');
                        document.body.style.overflow = '';
                    }
                });
                
                // Close on escape key
                document.addEventListener('keydown', function(event) {
                    if (event.key === 'Escape' && !mobileMenu.classList.contains('-translate-y-full')) {
                        mobileMenu.classList.add('-translate-y-full', 'opacity-0');
                        mobileMenu.classList.remove('translate-y-0', 'opacity-100');
                        mobileMenu.setAttribute('aria-hidden', 'true');
                        document.body.style.overflow = '';
                    }
                });
            }
            
        });
        
        // Tailwind Config
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                        'pulse-glow': 'pulse-glow 2s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        },
                        'pulse-glow': {
                            '0%, 100%': { opacity: '1' },
                            '50%': { opacity: '0.7' },
                        }
                    }
                }
            }
        }
    </script>
    
    @stack('scripts')
    
</body>
</html>