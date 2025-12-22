@extends('layouts.app')

@section('content')
<section class="relative py-16 md:py-24 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">
    <!-- Background decoration -->
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))]"></div>
    <div class="absolute top-20 left-10 w-72 h-72 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-20 right-10 w-72 h-72 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header amélioré -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-blue-100 to-cyan-100 text-blue-700 font-semibold text-sm mb-4">
                <i class="fa-solid fa-rocket text-blue-600"></i>
                Nos réalisations
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Des projets qui
                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    transforment
                </span>
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Découvrez nos solutions innovantes qui aident nos clients à atteindre leurs objectifs.
                Chaque projet est une aventure unique que nous construisons ensemble.
            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-blue-600 mb-2">3+</div>
                <div class="text-gray-600 font-medium">Projets livrés</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-purple-600 mb-2">100%</div>
                <div class="text-gray-600 font-medium">Satisfaction client</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-green-600 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Support technique</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100">
                <div class="text-3xl font-bold text-orange-600 mb-2">8+</div>
                <div class="text-gray-600 font-medium">Technologies maîtrisées</div>
            </div>
        </div>

        <!-- Projets -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
            <!-- Projet 1 -->
            <div class="group" data-aos="fade-right" data-aos-delay="200">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Image avec overlay -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/emploi.png') }}" 
                             alt="Gestion emplois du temps" 
                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Badge statut -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-check mr-1"></i> Livré
                            </span>
                        </div>
                        <!-- Catégorie -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-blue-600/90 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-graduation-cap mr-1"></i> Éducation
                            </span>
                        </div>
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                                Gestion des emplois du temps
                            </h3>
                            <i class="fa-solid fa-arrow-up-right-from-square text-gray-400 group-hover:text-blue-500 transition-colors"></i>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Solution intelligente d'optimisation des emplois du temps académiques. 
                            Élimine les conflits horaires, automatise la planification et facilite 
                            la consultation pour étudiants et enseignants.
                        </p>
                        
                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-laravel mr-1"></i> Laravel
                            </span>
                            <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-database mr-1"></i> MySQL
                            </span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-chart-line mr-1"></i> Algorithmes
                            </span>
                        </div>
                        
                        <!-- Résultats -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="text-center p-3 bg-gray-50 rounded-xl">
                                <div class="text-lg font-bold text-gray-900">-70%</div>
                                <div class="text-xs text-gray-600">Conflits horaires</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-xl">
                                <div class="text-lg font-bold text-gray-900">+40%</div>
                                <div class="text-xs text-gray-600">Productivité</div>
                            </div>
                        </div>
                        
                        <!-- CTA -->

                    </div>
                </div>
            </div>

            <!-- Projet 2 -->
            <div class="group" data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Image avec overlay -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/mlo.png') }}" 
                             alt="MLO Conseils – Blog d'articles" 
                             class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Badge statut -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-check mr-1"></i> En ligne
                            </span>
                        </div>
                        <!-- Catégorie -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-purple-600/90 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-newspaper mr-1"></i> Blog
                            </span>
                        </div>
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-purple-600 transition-colors">
                                MLO Conseils – Blog
                            </h3>
                            <i class="fa-solid fa-arrow-up-right-from-square text-gray-400 group-hover:text-purple-500 transition-colors"></i>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Plateforme moderne de publication d'articles avec interface intuitive. 
                            Gestion de contenu avancée, SEO optimisé et expérience utilisateur 
                            fluide pour une audience engagée.
                        </p>
                        
                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-laravel mr-1"></i> Laravel
                            </span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-paintbrush mr-1"></i> UI/UX Design
                            </span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-chart-simple mr-1"></i> SEO
                            </span>
                            <span class="px-3 py-1 bg-orange-50 text-orange-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-bolt mr-1"></i> Performance
                            </span>
                        </div>
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="text-center p-3 bg-gray-50 rounded-xl">
                                <div class="text-lg font-bold text-gray-900">6+</div>
                                <div class="text-xs text-gray-600">Articles publiés</div>
                            </div>
                            <div class="text-center p-3 bg-gray-50 rounded-xl">
                                <div class="text-lg font-bold text-gray-900">95%</div>
                                <div class="text-xs text-gray-600">Score SEO</div>
                            </div>
                        </div>
                        
                        <!-- CTA -->

                    </div>
                </div>
            </div>
            <!-- Projet 3 -->
            <div class="group" data-aos="fade-right" data-aos-delay="300">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Image avec overlay -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/exam.png') }}" 
                            alt="Correction automatique d'examens" 
                            class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Badge statut -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-blue-500 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-flask mr-1"></i> Prototype
                            </span>
                        </div>
                        <!-- Catégorie -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-indigo-600/90 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-robot mr-1"></i> IA & Éducation
                            </span>
                        </div>
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                Correction automatique d'examens
                            </h3>
                            <i class="fa-solid fa-brain text-gray-400 group-hover:text-indigo-500 transition-colors"></i>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Plateforme intelligente de digitalisation des examens avec système de correction automatique. 
                            Réduction du temps de correction de 80%, facilitation d'accès aux résultats et 
                            traçabilité complète du processus d'évaluation.
                        </p>
                        
                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-red-50 text-red-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-laravel mr-1"></i> Laravel
                            </span>
                            <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-database mr-1"></i> SQL
                            </span>
                            <span class="px-3 py-1 bg-green-600/10 text-green-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-node-js mr-1"></i> Node.js
                            </span>
                            <span class="px-3 py-1 bg-purple-50 text-purple-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-microchip mr-1"></i> Algorithmes IA
                            </span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-qrcode mr-1"></i> OCR
                            </span>
                        </div>
                        
                        <!-- Fonctionnalités -->
                        <div class="mb-6">
                            <h4 class="font-bold text-gray-800 mb-3 flex items-center gap-2">
                                <i class="fa-solid fa-bolt text-yellow-500"></i>
                                Fonctionnalités clés
                            </h4>
                            <div class="grid grid-cols-2 gap-3">
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-check text-green-500 text-xs"></i>
                                    <span class="text-sm text-gray-600">Scan intelligent</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-check text-green-500 text-xs"></i>
                                    <span class="text-sm text-gray-600">Correction auto</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-check text-green-500 text-xs"></i>
                                    <span class="text-sm text-gray-600">Analytiques</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fa-solid fa-check text-green-500 text-xs"></i>
                                    <span class="text-sm text-gray-600">Export PDF</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA -->

                    </div>
                </div>
            </div>

            <!-- Projet 4 -->
            <div class="group" data-aos="fade-left" data-aos-delay="300">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-gray-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-2">
                    <!-- Image avec overlay -->
                    <div class="relative overflow-hidden">
                        <img src="{{ asset('images/gas-location.png') }}" 
                            alt="Emplacement bouteilles de gaz" 
                            class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        <!-- Badge statut -->
                        <div class="absolute top-4 left-4">
                            <span class="px-3 py-1 bg-green-500 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-check-circle mr-1"></i> Opérationnel
                            </span>
                        </div>
                        <!-- Catégorie -->
                        <div class="absolute top-4 right-4">
                            <span class="px-3 py-1 bg-orange-600/90 text-white text-xs font-bold rounded-full">
                                <i class="fa-solid fa-map-marked-alt mr-1"></i> Géolocalisation
                            </span>
                        </div>
                    </div>
                    
                    <!-- Contenu -->
                    <div class="p-8">
                        <div class="flex items-center justify-between mb-4">
                            <h3 class="text-2xl font-bold text-gray-900 group-hover:text-orange-600 transition-colors">
                                Localisation bouteilles de gaz
                            </h3>
                            <i class="fa-solid fa-location-dot text-gray-400 group-hover:text-orange-500 transition-colors"></i>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Application web et mobile permettant aux utilisateurs de trouver les points de vente de bouteilles de gaz. 
                            L'administrateur gère les emplacements en temps réel, tandis que les utilisateurs bénéficient 
                            d'une recherche optimisée par proximité.
                        </p>
                        
                        <!-- Technologies -->
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-laravel mr-1"></i> Laravel API
                            </span>
                            <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-database mr-1"></i> MySQL
                            </span>
                            <span class="px-3 py-1 bg-red-50 text-red-700 text-sm font-medium rounded-full">
                                <i class="fa-brands fa-js-square mr-1"></i> JavaScript
                            </span>
                            <span class="px-3 py-1 bg-orange-50 text-orange-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-map mr-1"></i> Maps API
                            </span>
                            <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-sm font-medium rounded-full">
                                <i class="fa-solid fa-mobile-screen mr-1"></i> Responsive
                            </span>
                        </div>
                        
                        <!-- Fonctionnalités -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="text-center p-3 bg-orange-50 rounded-xl">
                                <div class="text-lg font-bold text-orange-700">Admin</div>
                                <div class="text-xs text-orange-600">Gestion des points</div>
                            </div>
                            <div class="text-center p-3 bg-green-50 rounded-xl">
                                <div class="text-lg font-bold text-green-700">Users</div>
                                <div class="text-xs text-green-600">Recherche locale</div>
                            </div>
                        </div>
                        
                        <!-- Caractéristiques -->
                        <div class="mb-6">
                            <div class="flex items-center gap-3 mb-3">
                                <div class="w-8 h-8 bg-orange-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-fire-flame-curved text-orange-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Points de vente</h5>
                                    <p class="text-sm text-gray-600">Géolocalisation précise des revendeurs</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <i class="fa-solid fa-sliders text-blue-600"></i>
                                </div>
                                <div>
                                    <h5 class="font-semibold text-gray-800">Panel admin</h5>
                                    <p class="text-sm text-gray-600">Ajout/Modification des emplacements</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- CTA -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Section CTA -->
        <div class="text-center" data-aos="fade-up" data-aos-delay="300">
            <div class="bg-gradient-to-r from-blue-50 to-cyan-50 rounded-3xl p-12 border border-blue-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Prêt à transformer votre projet ?
                </h2>
                <p class="text-gray-600 text-lg mb-8 max-w-2xl mx-auto">
                    Parlons de votre idée et créons ensemble quelque chose d'extraordinaire.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" 
                       class="px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold rounded-xl hover:shadow-xl hover:scale-105 transition-all duration-300">
                        <i class="fa-solid fa-calendar-check mr-2"></i>
                        Discuter de mon projet
                    </a>
                    <a href="/services" 
                       class="px-8 py-4 bg-white text-blue-600 font-bold rounded-xl border-2 border-blue-200 hover:border-blue-300 hover:bg-blue-50 transition-all duration-300">
                        <i class="fa-solid fa-gear mr-2"></i>
                        Voir nos services
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Styles additionnels -->
@push('styles')
<style>
.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

@keyframes blob {
    0% {
        transform: translate(0px, 0px) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
    100% {
        transform: translate(0px, 0px) scale(1);
    }
}

.bg-grid-slate-100 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(241 245 249 / 0.5)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}
</style>
@endpush
@endsection