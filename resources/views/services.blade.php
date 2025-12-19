@extends('layouts.app')

@section('content')
<section class="relative py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white overflow-hidden">
    <!-- Background effects -->
    <div class="absolute inset-0 bg-grid-gray-100 [mask-image:linear-gradient(0deg,white,rgba(255,255,255,0.6))]"></div>
    <div class="absolute top-0 -left-4 w-72 h-72 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob"></div>
    <div class="absolute top-0 -right-4 w-72 h-72 bg-cyan-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000"></div>
    <div class="absolute -bottom-8 left-20 w-72 h-72 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Hero Section -->
        <div class="text-center mb-20" data-aos="fade-up">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-gradient-to-r from-blue-100 to-cyan-100 text-blue-700 font-semibold text-sm mb-6">
                <i class="fa-solid fa-rocket text-blue-600"></i>
                Solutions Digitales Complètes
            </div>
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                Nos
                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    Services
                </span>
                Professionnels
            </h1>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                Nous offrons une gamme complète de services pour transformer vos idées en solutions digitales performantes.
                De la conception au déploiement, nous vous accompagnons à chaque étape.
            </p>
        </div>

        <!-- Stats -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-16" data-aos="fade-up" data-aos-delay="100">
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="text-3xl font-bold text-blue-600 mb-2">24/7</div>
                <div class="text-gray-600 font-medium">Support client</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="text-3xl font-bold text-green-600 mb-2">100%</div>
                <div class="text-gray-600 font-medium">Satisfaction garantie</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="text-3xl font-bold text-purple-600 mb-2">15j</div>
                <div class="text-gray-600 font-medium">Livraison moyenne</div>
            </div>
            <div class="text-center p-6 bg-white rounded-2xl shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                <div class="text-3xl font-bold text-orange-600 mb-2">3+</div>
                <div class="text-gray-600 font-medium">Projets réalisés</div>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1: Développement Web -->
            <div class="group" data-aos="zoom-in">
                <div class="relative bg-gradient-to-br from-white to-blue-50 rounded-2xl p-8 shadow-xl border border-blue-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 h-full">
                    <!-- Badge -->
                    <div class="absolute -top-3 left-1/2 transform -translate-x-1/2">
                        <span class="px-4 py-1 bg-blue-600 text-white text-sm font-bold rounded-full shadow-lg">
                            Populaire
                        </span>
                    </div>
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 bg-blue-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                        <div class="relative w-20 h-20 mx-auto bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <i class="fas fa-code text-3xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-blue-700 transition-colors">
                        Développement Web
                    </h3>
                    
                    <p class="text-gray-600 mb-6 text-center">
                        Sites vitrines, e-commerce et applications web sur mesure. Performance, sécurité et design moderne garantis.
                    </p>
                    
                    <!-- Features -->
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Responsive Design</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">SEO Optimisé</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Maintenance incluse</span>
                        </li>
                    </ul>
                    
                    <!-- CTA -->
                    <a href="/contact" 
                       class="block w-full py-3.5 bg-gradient-to-r from-blue-600 to-blue-700 text-white font-bold rounded-xl hover:from-blue-700 hover:to-blue-800 transition-all duration-300 text-center group/btn">
                        <span class="flex items-center justify-center gap-2">
                            Demander un devis
                            <i class="fa-solid fa-arrow-right group-hover/btn:translate-x-1 transition-transform"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Service 2: Gestion de Projets -->
            <div class="group" data-aos="zoom-in" data-aos-delay="100">
                <div class="relative bg-gradient-to-br from-white to-purple-50 rounded-2xl p-8 shadow-xl border border-purple-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 h-full">
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 bg-purple-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                        <div class="relative w-20 h-20 mx-auto bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-12 transition-transform duration-500">
                            <i class="fas fa-project-diagram text-3xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-purple-700 transition-colors">
                        Gestion de Projets Web
                    </h3>
                    
                    <p class="text-gray-600 mb-6 text-center">
                        Analyse complète, planification stratégique et gestion agile de vos projets digitaux de A à Z.
                    </p>
                    
                    <!-- Features -->
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Analyse des besoins</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Planification agile</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Rapports réguliers</span>
                        </li>
                    </ul>
                    
                    <!-- CTA -->
                    <a href="/contact" 
                       class="block w-full py-3.5 bg-gradient-to-r from-purple-600 to-purple-700 text-white font-bold rounded-xl hover:from-purple-700 hover:to-purple-800 transition-all duration-300 text-center group/btn">
                        <span class="flex items-center justify-center gap-2">
                            Discuter projet
                            <i class="fa-solid fa-comments group-hover/btn:scale-110 transition-transform"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Service 3: Conception de Logo -->
            <div class="group" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative bg-gradient-to-br from-white to-green-50 rounded-2xl p-8 shadow-xl border border-green-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 h-full">
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 bg-green-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                        <div class="relative w-20 h-20 mx-auto bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:-rotate-12 transition-transform duration-500">
                            <i class="fas fa-palette text-3xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-green-700 transition-colors">
                        Identité Visuelle
                    </h3>
                    
                    <p class="text-gray-600 mb-6 text-center">
                        Logos, chartes graphiques et branding complet pour une image de marque forte et cohérente.
                    </p>
                    
                    <!-- Features -->
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Logo unique</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Charte graphique</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Pack branding complet</span>
                        </li>
                    </ul>
                    
                    <!-- CTA -->
                    <a href="/contact" 
                       class="block w-full py-3.5 bg-gradient-to-r from-green-600 to-green-700 text-white font-bold rounded-xl hover:from-green-700 hover:to-green-800 transition-all duration-300 text-center group/btn">
                        <span class="flex items-center justify-center gap-2">
                            Créer mon logo
                            <i class="fa-solid fa-paintbrush group-hover/btn:rotate-90 transition-transform"></i>
                        </span>
                    </a>
                </div>
            </div>

            <!-- Service 4: Devis Personnalisé -->
            <div class="group" data-aos="zoom-in" data-aos-delay="300">
                <div class="relative bg-gradient-to-br from-white to-orange-50 rounded-2xl p-8 shadow-xl border border-orange-100 hover:shadow-2xl transition-all duration-500 hover:-translate-y-3 h-full">
                    
                    <!-- Icon -->
                    <div class="relative mb-6">
                        <div class="absolute inset-0 bg-orange-500/10 rounded-2xl blur-xl group-hover:blur-2xl transition-all"></div>
                        <div class="relative w-20 h-20 mx-auto bg-gradient-to-br from-orange-500 to-orange-600 rounded-2xl flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform duration-500">
                            <i class="fas fa-file-invoice-dollar text-3xl text-white"></i>
                        </div>
                    </div>
                    
                    <!-- Content -->
                    <h3 class="text-xl font-bold text-gray-900 mb-4 text-center group-hover:text-orange-700 transition-colors">
                        Devis Gratuit
                    </h3>
                    
                    <p class="text-gray-600 mb-6 text-center">
                        Évaluation personnalisée de votre projet avec devis détaillé et transparent, sans engagement.
                    </p>
                    
                    <!-- Features -->
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Gratuit & sans engagement</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Délai estimé</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-check text-green-500 text-sm"></i>
                            <span class="text-sm text-gray-600">Transparence totale</span>
                        </li>
                    </ul>
                    
                    <!-- CTA -->
                    <a href="/contact" 
                       class="block w-full py-3.5 bg-gradient-to-r from-orange-600 to-orange-700 text-white font-bold rounded-xl hover:from-orange-700 hover:to-orange-800 transition-all duration-300 text-center group/btn">
                        <span class="flex items-center justify-center gap-2">
                            Obtenir un devis
                            <i class="fa-solid fa-bolt group-hover/btn:animate-pulse"></i>
                        </span>
                    </a>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="mt-20" data-aos="fade-up" data-aos-delay="400">
            <div class="bg-gradient-to-r from-blue-600 to-cyan-500 rounded-3xl p-12 shadow-2xl">
                <div class="max-w-3xl mx-auto text-center">
                    <h2 class="text-3xl font-bold text-white mb-4">
                        Prêt à concrétiser votre projet ?
                    </h2>
                    <p class="text-blue-100 text-lg mb-8">
                        Contactez-nous pour une consultation gratuite et obtenez un devis personnalisé en 24h.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="/contact" 
                           class="px-8 py-4 bg-white text-blue-600 font-bold rounded-xl hover:bg-gray-100 hover:scale-105 transition-all duration-300 shadow-lg">
                            <i class="fa-solid fa-calendar-check mr-2"></i>
                            Prendre rendez-vous
                        </a>
                        <a href="tel:+24166413493" 
                           class="px-8 py-4 bg-transparent border-2 border-white text-white font-bold rounded-xl hover:bg-white/10 hover:scale-105 transition-all duration-300">
                            <i class="fa-solid fa-phone mr-2"></i>
                            Appeler maintenant
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="mt-20" data-aos="fade-up" data-aos-delay="500">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">
                    Questions Fréquentes
                </h2>
                <p class="text-gray-600 max-w-2xl mx-auto">
                    Vous avez des questions ? Nous avons les réponses.
                </p>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-4xl mx-auto">
                <!-- FAQ 1 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                    <h4 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-3">
                        <i class="fa-solid fa-clock text-blue-500"></i>
                        Quel est le délai de réalisation ?
                    </h4>
                    <p class="text-gray-600">
                        Les délais varient selon la complexité du projet. En moyenne : site vitrine (7-15 jours), 
                        , application web (1-3 mois), e-commerce (2-6 mois). Un planning détaillé vous est fourni.
                    </p>
                </div>
                
                <!-- FAQ 2 -->
                <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                    <h4 class="text-lg font-bold text-gray-900 mb-3 flex items-center gap-3">
                        <i class="fa-solid fa-coins text-green-500"></i>
                        Quels sont vos tarifs ?
                    </h4>
                    <p class="text-gray-600">
                        Nos tarifs sont personnalisés selon vos besoins. Nous offrons des packages adaptés 
                        aux startups, PME et grandes entreprises. Demandez un devis gratuit pour connaître le coût exact.
                    </p>
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

.animation-delay-4000 {
    animation-delay: 4s;
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

.bg-grid-gray-100 {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 32 32' width='32' height='32' fill='none' stroke='rgb(249 250 251 / 0.5)'%3e%3cpath d='M0 .5H31.5V32'/%3e%3c/svg%3e");
}
</style>
@endpush
@endsection