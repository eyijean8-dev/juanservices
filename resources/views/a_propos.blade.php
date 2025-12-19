@extends('layouts.app')

@section('content')
<section class="relative py-16 md:py-24 bg-gradient-to-b from-white via-gray-50 to-white overflow-hidden">
    <!-- Background effects -->
    <div class="absolute inset-0 bg-grid-slate-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))]"></div>
    <div class="absolute top-10 right-10 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute bottom-10 left-10 w-72 h-72 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    
    <div class="relative max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-blue-100 to-cyan-100 text-blue-700 font-semibold text-sm mb-6">
                <i class="fa-solid fa-heart text-red-500"></i>
                Notre Histoire
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                À propos de
                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    JuanServices
                </span>
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto mb-8">
                Plus qu'une simple agence, nous sommes des passionnés qui transforment vos idées 
                en solutions digitales performantes et innovantes.
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-20">
            <!-- Mission -->
            <div class="group" data-aos="fade-right">
                <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-xl border border-blue-100 hover:shadow-2xl transition-all duration-500 h-full">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center mb-6 group-hover:rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-bullseye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Notre Mission</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Offrir des solutions web innovantes, accessibles et sur-mesure qui 
                        répondent parfaitement aux besoins spécifiques de chaque client, 
                        en combinant expertise technique et créativité.
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="h-px w-8 bg-blue-500"></div>
                        <span class="text-sm text-blue-600 font-medium">Excellence & Innovation</span>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="group" data-aos="fade-left">
                <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-xl border border-purple-100 hover:shadow-2xl transition-all duration-500 h-full">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center mb-6 group-hover:-rotate-12 transition-transform duration-500">
                        <i class="fa-solid fa-eye text-2xl text-white"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Notre Vision</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">
                        Devenir le partenaire digital de référence en Afrique francophone, 
                        en démocratisant l'accès aux technologies web avancées et en 
                        accompagnant la transformation digitale des entreprises.
                    </p>
                    <div class="flex items-center gap-2">
                        <div class="h-px w-8 bg-purple-500"></div>
                        <span class="text-sm text-purple-600 font-medium">Leadership & Impact</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Founder Section -->
        <div class="mb-20" data-aos="zoom-in">
            <div class="bg-gradient-to-r from-white to-blue-50 rounded-3xl p-8 md:p-12 shadow-xl border border-blue-100">
                <div class="flex flex-col lg:flex-row items-center gap-8">
                    <!-- Photo -->
                    <div class="relative">
                        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-3xl blur-xl opacity-30"></div>
                        <img src="{{ asset('images/jean.jpg') }}"
                             alt="Jean Eyi - Fondateur"
                             class="relative w-48 h-48 md:w-56 md:h-56 rounded-2xl object-cover shadow-2xl border-4 border-white">
                        
                        <!-- Badge -->
                        <div class="absolute -bottom-3 -right-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white px-4 py-2 rounded-full shadow-lg">
                            <div class="flex items-center gap-2">
                                <i class="fa-solid fa-crown"></i>
                                <span class="font-bold text-sm">Fondateur</span>
                            </div>
                        </div>
                    </div>

                    <!-- Bio -->
                    <div class="flex-1">
                        <div class="mb-4">
                            <h3 class="text-3xl font-bold text-gray-900 mb-2">Jean Eyi</h3>
                            <div class="inline-flex items-center gap-2 px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium">
                                <i class="fa-solid fa-laptop-code"></i>
                                Développeur Full-Stack & Entrepreneur
                            </div>
                        </div>
                        
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Passionné par les technologies web depuis plus de 5 ans, je me spécialise dans 
                            le développement de solutions innovantes avec Laravel. Mon approche combine 
                            expertise technique, simplicité d'utilisation et performance optimale pour 
                            créer des produits qui font la différence.
                        </p>

                        <!-- Stats -->
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8">
                            <div class="text-center p-3 bg-white rounded-xl shadow-sm border">
                                <div class="text-xl font-bold text-blue-600">5+</div>
                                <div class="text-xs text-gray-600">Années d'expérience</div>
                            </div>
                            <div class="text-center p-3 bg-white rounded-xl shadow-sm border">
                                <div class="text-xl font-bold text-purple-600">3+</div>
                                <div class="text-xs text-gray-600">Projets réalisés</div>
                            </div>
                            <div class="text-center p-3 bg-white rounded-xl shadow-sm border">
                                <div class="text-xl font-bold text-green-600">8+</div>
                                <div class="text-xs text-gray-600">Technologies maîtrisées</div>
                            </div>
                            <div class="text-center p-3 bg-white rounded-xl shadow-sm border">
                                <div class="text-xl font-bold text-orange-600">100%</div>
                                <div class="text-xs text-gray-600">Satisfaction client</div>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="flex gap-3">
                            <a href="#" class="w-10 h-10 bg-blue-100 text-blue-600 rounded-lg flex items-center justify-center hover:bg-blue-600 hover:text-white transition-all">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-gray-100 text-gray-600 rounded-lg flex items-center justify-center hover:bg-gray-800 hover:text-white transition-all">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="w-10 h-10 bg-green-100 text-green-600 rounded-lg flex items-center justify-center hover:bg-green-600 hover:text-white transition-all">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="mailto:contact@juanservices.ga" class="w-10 h-10 bg-red-100 text-red-600 rounded-lg flex items-center justify-center hover:bg-red-600 hover:text-white transition-all">
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Values -->
        <div class="mb-20" data-aos="fade-up">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Nos Valeurs
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Les principes qui guident chacune de nos actions et décisions.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Value 1 -->
                <div class="group bg-gradient-to-br from-white to-emerald-50 rounded-2xl p-6 shadow-lg border border-emerald-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-xl flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-medal text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Excellence</h4>
                    <p class="text-gray-600">
                        Nous visons l'excellence dans chaque projet, avec un souci du détail 
                        et une recherche constante de la qualité optimale.
                    </p>
                </div>

                <!-- Value 2 -->
                <div class="group bg-gradient-to-br from-white to-blue-50 rounded-2xl p-6 shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center mb-4 group-hover:-rotate-12 transition-transform">
                        <i class="fa-solid fa-users text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Collaboration</h4>
                    <p class="text-gray-600">
                        Nous travaillons main dans la main avec nos clients, en transparence 
                        totale et avec une communication constante.
                    </p>
                </div>

                <!-- Value 3 -->
                <div class="group bg-gradient-to-br from-white to-purple-50 rounded-2xl p-6 shadow-lg border border-purple-100 hover:shadow-xl transition-all duration-300">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center mb-4 group-hover:rotate-12 transition-transform">
                        <i class="fa-solid fa-lightbulb text-xl text-white"></i>
                    </div>
                    <h4 class="text-xl font-bold text-gray-900 mb-3">Innovation</h4>
                    <p class="text-gray-600">
                        Nous restons à la pointe des technologies et cherchons toujours 
                        des solutions créatives et modernes pour nos clients.
                    </p>
                </div>
            </div>
        </div>

        <!-- Technologies -->
        <div class="mb-20" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Nos Technologies
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Nous maîtrisons les technologies modernes pour créer des solutions robustes et performantes.
                </p>
            </div>

            <div class="flex flex-wrap justify-center gap-4">
                <div class="px-6 py-3 bg-gradient-to-r from-red-50 to-red-100 border border-red-200 rounded-xl flex items-center gap-3">
                    <i class="fab fa-laravel text-2xl text-red-600"></i>
                    <span class="font-semibold text-gray-800">Laravel</span>
                </div>
                <div class="px-6 py-3 bg-gradient-to-r from-blue-50 to-blue-100 border border-blue-200 rounded-xl flex items-center gap-3">
                    <i class="fab fa-php text-2xl text-blue-600"></i>
                    <span class="font-semibold text-gray-800">PHP</span>
                </div>
                <div class="px-6 py-3 bg-gradient-to-r from-yellow-50 to-yellow-100 border border-yellow-200 rounded-xl flex items-center gap-3">
                    <i class="fab fa-js text-2xl text-yellow-600"></i>
                    <span class="font-semibold text-gray-800">JavaScript</span>
                </div>
                <div class="px-6 py-3 bg-gradient-to-r from-green-50 to-green-100 border border-green-200 rounded-xl flex items-center gap-3">
                    <i class="fa-solid fa-database text-2xl text-green-600"></i>
                    <span class="font-semibold text-gray-800">MySQL</span>
                </div>
                <div class="px-6 py-3 bg-gradient-to-r from-sky-50 to-sky-100 border border-sky-200 rounded-xl flex items-center gap-3">
                    <i class="fab fa-css3-alt text-2xl text-sky-600"></i>
                    <span class="font-semibold text-gray-800">Tailwind CSS</span>
                </div>
                <div class="px-6 py-3 bg-gradient-to-r from-purple-50 to-purple-100 border border-purple-200 rounded-xl flex items-center gap-3">
                    <i class="fab fa-git-alt text-2xl text-purple-600"></i>
                    <span class="font-semibold text-gray-800">Git</span>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div data-aos="fade-up" data-aos-delay="200">
            <div class="bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl p-12 shadow-2xl text-center">
                <h2 class="text-3xl font-bold text-white mb-4">
                    Prêt à concrétiser votre projet ?
                </h2>
                <p class="text-blue-100 text-lg mb-8 max-w-2xl mx-auto">
                    Discutons de votre vision et créons ensemble quelque chose d'extraordinaire.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/contact" 
                       class="px-8 py-4 bg-white text-blue-600 font-bold rounded-xl hover:bg-gray-100 hover:scale-105 transition-all duration-300 shadow-lg">
                        <i class="fa-solid fa-calendar-check mr-2"></i>
                        Prendre rendez-vous
                    </a>
                    <a href="/projets" 
                       class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 hover:scale-105 transition-all duration-300">
                        <i class="fa-solid fa-rocket mr-2"></i>
                        Voir nos réalisations
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
    animation: blob 8s infinite;
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