@extends('layouts.app')

@section('title', 'JuanServices | Agence Digitale - Développement Web & Mobile Gabon')

@section('content')

<!-- 🚀 HERO SECTION PREMIUM -->
<section class="relative min-h-screen flex items-center justify-center text-white overflow-hidden">

    <!-- Image de fond avec parallax -->
    <div class="absolute inset-0">
        <img src="{{ asset('images/hero.jpg') }}" 
             class="w-full h-full object-cover transform scale-110 animate-zoom-out"
             alt="Agence digitale JuanServices - Développement web et mobile au Gabon"
             data-aos="zoom-out"
             data-aos-duration="2000">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-900/70 via-cyan-900/50 to-blue-900/70"></div>
    </div>

    <!-- Éléments décoratifs -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute top-1/4 left-1/4 w-64 h-64 bg-blue-500/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-1/4 right-1/4 w-96 h-96 bg-cyan-500/10 rounded-full blur-3xl"></div>
    </div>

    <!-- Contenu principal -->
    <div class="relative z-10 text-center px-4 sm:px-6 max-w-6xl mx-auto">
        
        <!-- Badge d'accompagnement -->
        <div class="mb-8" data-aos="fade-down" data-aos-duration="800">
            <span class="inline-block px-6 py-2 bg-white/20 backdrop-blur-sm text-white text-sm font-bold rounded-full border border-white/30 shadow-lg">
                🎯 Solutions Digitales Sur Mesure
            </span>
        </div>

        <!-- Logo animé -->
        <div class="mb-8" data-aos="zoom-in" data-aos-duration="1200">
            <div class="relative inline-block">
                <img src="{{ asset('images/loogo.png') }}" 
                     alt="Logo JuanService - Agence digitale Gabon" 
                     class="w-32 h-32 md:w-40 md:h-40 object-contain drop-shadow-2xl animate-float">
            </div>
        </div>

        <!-- Titre principal -->
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-delay="200">
            <span class="block mb-2 text-white">Transformez votre</span>
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-300 via-cyan-300 to-white">
                Vision Digitale
            </span>
        </h1>

        <!-- Sous-titre animé -->
        <div class="mb-10 max-w-3xl mx-auto" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <p class="text-xl md:text-2xl text-blue-100 leading-relaxed mb-4">
                Agence de développement web & mobile au Gabon
            </p>
            <div class="h-16 flex items-center justify-center">
                <p id="typed-text" class="text-lg md:text-xl text-cyan-200 font-medium"></p>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center"
             data-aos="fade-up"
             data-aos-duration="1000"
             data-aos-delay="600">
            
            <a href="/services"
               class="group px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-xl shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
               <i class="fa-solid fa-code group-hover:rotate-12 transition-transform"></i>
               <span>Découvrir nos services</span>
               <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>

            <a href="/contact"
               class="group px-8 py-4 bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-bold rounded-xl shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 flex items-center gap-3">
               <i class="fa-solid fa-calendar-check group-hover:rotate-12 transition-transform"></i>
               <span>Demander un devis gratuit</span>
               <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>

        </div>


    </div>
</section>

<!-- 🎯 POURQUOI NOUS CHOISIR -->
<section id="pourquoi-nous" class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <!-- Header section -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-cyan-600">
                    Pourquoi Choisir JuanServices ?
                </span>
            </h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Une approche unique alliant expertise technique, créativité et suivi personnalisé 
                pour des résultats qui dépassent vos attentes.
            </p>
        </div>

        <!-- Grid avantages -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            
            <div class="bg-gradient-to-br from-blue-50 to-white rounded-2xl p-8 shadow-lg border border-blue-100 hover:shadow-xl transition-all duration-300 group"
                 data-aos="fade-up">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-rocket text-blue-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Rapidité d'exécution</h3>
                <p class="text-gray-600 leading-relaxed">
                    Livraison rapide sans compromis sur la qualité, avec des méthodologies agiles 
                    pour un développement efficace.
                </p>
            </div>

            <div class="bg-gradient-to-br from-cyan-50 to-white rounded-2xl p-8 shadow-lg border border-cyan-100 hover:shadow-xl transition-all duration-300 group"
                 data-aos="fade-up" data-aos-delay="100">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-cyan-100 to-cyan-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-palette text-cyan-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Design Moderne</h3>
                <p class="text-gray-600 leading-relaxed">
                    Interfaces élégantes, expériences utilisateur fluides et designs responsive 
                    qui captivent votre audience.
                </p>
            </div>

            <div class="bg-gradient-to-br from-green-50 to-white rounded-2xl p-8 shadow-lg border border-green-100 hover:shadow-xl transition-all duration-300 group"
                 data-aos="fade-up" data-aos-delay="200">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-green-100 to-green-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-shield-halved text-green-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Sécurité Maximale</h3>
                <p class="text-gray-600 leading-relaxed">
                    Solutions robustes, sécurisées et évolutives avec les dernières technologies 
                    de protection des données.
                </p>
            </div>

            <div class="bg-gradient-to-br from-purple-50 to-white rounded-2xl p-8 shadow-lg border border-purple-100 hover:shadow-xl transition-all duration-300 group"
                 data-aos="fade-up" data-aos-delay="300">
                <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-purple-100 to-purple-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                    <i class="fa-solid fa-handshake text-purple-600 text-2xl"></i>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">Accompagnement Personnalisé</h3>
                <p class="text-gray-600 leading-relaxed">
                    Un suivi sur mesure du début à la fin de votre projet, avec une communication 
                    transparente et régulière.
                </p>
            </div>

        </div>
    </div>
</section>

<!-- 💼 SERVICES CLÉS -->
<section class="py-20 bg-gradient-to-b from-gray-50 to-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-cyan-600">
                    Nos Services Phares
                </span>
            </h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Des solutions digitales complètes pour booster votre présence en ligne 
                et optimiser vos opérations.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 border border-gray-200/60 group"
                 data-aos="fade-up">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-blue-100 to-blue-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-code text-blue-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Développement Web</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Sites vitrines, e-commerce, plateformes web modernes et performantes (Back-end)
                        optimisées pour le référencement.
                    </p>
                    <a href="/services#web" class="inline-flex items-center gap-2 text-blue-600 font-semibold group-hover:gap-3 transition-all">
                        <span>En savoir plus</span>
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="px-8 pb-8">
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs rounded-full">React</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-xs rounded-full">WordPress</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 border border-gray-200/60 group"
                 data-aos="fade-up" data-aos-delay="100">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-green-100 to-green-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-mobile-screen-button text-green-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Applications Mobiles</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Applications Android, iOS et multiplateformes sur mesure, 
                        intuitives et performantes pour vos utilisateurs.
                    </p>
                    <a href="/services#mobile" class="inline-flex items-center gap-2 text-green-600 font-semibold group-hover:gap-3 transition-all">
                        <span>En savoir plus</span>
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="px-8 pb-8">
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs rounded-full">Flutter</span>
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs rounded-full">React Native</span>
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-xs rounded-full">Kotlin</span>
                    </div>
                </div>
            </div>

            <div class="bg-white rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-500 border border-gray-200/60 group"
                 data-aos="fade-up" data-aos-delay="200">
                <div class="p-8">
                    <div class="w-16 h-16 rounded-xl bg-gradient-to-r from-purple-100 to-purple-200 flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fa-solid fa-pen-nib text-purple-600 text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Design & Branding</h3>
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Identité visuelle complète, UI/UX design, supports graphiques 
                        et chartes graphiques professionnelles.
                    </p>
                    <a href="/services#design" class="inline-flex items-center gap-2 text-purple-600 font-semibold group-hover:gap-3 transition-all">
                        <span>En savoir plus</span>
                        <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
                    </a>
                </div>
                <div class="px-8 pb-8">
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs rounded-full">Figma</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs rounded-full">Adobe</span>
                        <span class="px-3 py-1 bg-purple-50 text-purple-700 text-xs rounded-full">UI/UX</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- CTA Services -->
        <div class="text-center mt-12" data-aos="fade-up">
            <a href="/services"
               class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold rounded-xl shadow-lg hover:shadow-xl hover:scale-105 transition-all duration-300">
               <i class="fa-solid fa-list-check"></i>
               <span>Découvrir tous nos services</span>
               <i class="fa-solid fa-arrow-right group-hover:translate-x-2 transition-transform"></i>
            </a>
        </div>
    </div>
</section>

<!-- 📊 CHIFFRES CLÉS -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-cyan-600 text-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
            
            <div data-aos="fade-up">
                <div class="text-5xl md:text-6xl font-bold mb-4">+5</div>
                <h3 class="text-xl font-bold mb-2">Projets Réalisés</h3>
                <p class="text-blue-100">Sites web, applications et designs réussis</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="100">
                <div class="text-5xl md:text-6xl font-bold mb-4">100%</div>
                <h3 class="text-xl font-bold mb-2">Satisfaction Client</h3>
                <p class="text-blue-100">Retours positifs et recommandations</p>
            </div>
            
            <div data-aos="fade-up" data-aos-delay="200">
                <div class="text-5xl md:text-6xl font-bold mb-4">24/7</div>
                <h3 class="text-xl font-bold mb-2">Support & Maintenance</h3>
                <p class="text-blue-100">Assistance continue après livraison</p>
            </div>

        </div>
    </div>
</section>

<!-- 💬 TÉMOIGNAGES -->
<section class="py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-700 to-cyan-600">
                    Ils Nous Font Confiance
                </span>
            </h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Découvrez les retours d'expérience de nos clients satisfaits.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            
            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300"
                 data-aos="fade-up">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-blue-100 to-cyan-100 flex items-center justify-center">
                        <span class="text-2xl font-bold text-blue-600">RM</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Donald Romarick ROTIMBO</h4>
                        <p class="text-sm text-gray-500">Enseignant chercheur  - Ecole Polytechnique de Masuku</p>
                    </div>
                </div>
                <p class="text-gray-600 italic mb-6">
                    "Service rapide, design professionnel et un excellent accompagnement. 
                    Mon site web a été livré avant la date prévue avec une qualité exceptionnelle."
                </p>
                <div class="flex text-yellow-400">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300"
                 data-aos="fade-up" data-aos-delay="100">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-green-100 to-cyan-100 flex items-center justify-center">
                        <span class="text-2xl font-bold text-green-600">SN</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Sarah N.</h4>
                        <p class="text-sm text-gray-500">PME - Port-Gentil</p>
                    </div>
                </div>
                <p class="text-gray-600 italic mb-6">
                    "Une équipe sérieuse qui comprend parfaitement les besoins clients. 
                    Notre application web a considérablement boosté notre visibilité."
                </p>
                <div class="flex text-yellow-400">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star-half-alt"></i>
                </div>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-200 hover:shadow-xl transition-all duration-300"
                 data-aos="fade-up" data-aos-delay="200">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-16 h-16 rounded-full bg-gradient-to-r from-purple-100 to-cyan-100 flex items-center justify-center">
                        <span class="text-2xl font-bold text-purple-600">ME</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">MBIA ESSABA</h4>
                        <p class="text-sm text-gray-500">Étudiant Entrepreneur - Franceville</p>
                    </div>
                </div>
                <p class="text-gray-600 italic mb-6">
                    "Les conseils sur la planification de mon projet m'ont permis de mieux
                    restructuré mon Projet."
                </p>
                <div class="flex text-yellow-400">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- 🚀 CTA FINAL -->
<section class="py-20 bg-gradient-to-b from-gray-900 to-blue-950 text-white pt-16 pb-8 mt-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center">
        
        <h2 class="text-3xl md:text-4xl font-bold mb-8" data-aos="fade-up">
            Prêt à Donner Vie à Votre Projet Digital ?
        </h2>
        
        <p class="text-xl text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed" 
           data-aos="fade-up" data-aos-delay="100">
            Discutons ensemble de vos besoins et construisons une solution 
            sur mesure qui propulsera votre activité.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center" 
             data-aos="fade-up" data-aos-delay="200">
            
            <a href="/contact"
               class="px-10 py-5 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold rounded-xl shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
               <i class="fa-solid fa-comments"></i>
               <span>Discuter de mon projet</span>
            </a>
            
            <a href="https://wa.me/24166413493" target="_blank"
               class="px-10 py-5 bg-green-500 text-white font-bold rounded-xl shadow-2xl hover:shadow-3xl hover:scale-105 transition-all duration-300 flex items-center justify-center gap-3">
               <i class="fab fa-whatsapp"></i>
               <span>WhatsApp direct</span>
            </a>
            
        </div>
        
        <p class="text-gray-400 text-sm mt-8" data-aos="fade-up" data-aos-delay="300">
            <i class="fa-solid fa-clock text-cyan-400 mr-2"></i>
            Réponse garantie sous 24 heures • Devis gratuit sans engagement
        </p>
        
    </div>
</section>

{{-- ANIMATIONS CSS --}}
<style>
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-20px); }
}

@keyframes zoom-out {
    from { transform: scale(1.1); }
    to { transform: scale(1); }
}

.animate-float {
    animation: float 6s ease-in-out infinite;
}

.animate-zoom-out {
    animation: zoom-out 2s ease-out forwards;
}

.group:hover .group-hover\:scale-110 {
    transform: scale(1.1);
}

[data-aos] {
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
}
</style>

@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var typed = new Typed('#typed-text', {
        strings: [
            "<i class='fa-solid fa-code text-cyan-300'></i> Sites web modernes & performants",
            "<i class='fa-solid fa-mobile-screen-button text-cyan-300'></i> Applications mobiles sur mesure",
            "<i class='fa-solid fa-paintbrush text-cyan-300'></i> Designs élégants & captivants",
            "<i class='fa-solid fa-rocket text-cyan-300'></i> Solutions digitales innovantes",
            "<i class='fa-solid fa-chart-line text-cyan-300'></i> Stratégies digitales gagnantes"
        ],
        typeSpeed: 40,
        backSpeed: 30,
        backDelay: 2000,
        loop: true,
        showCursor: true,
        cursorChar: '|',
        contentType: 'html'
    });
});
</script>
@endsection