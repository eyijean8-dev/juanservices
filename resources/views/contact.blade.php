@extends('layouts.app')

@section('content')
<section class="py-12 md:py-20 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- En-tête améliorée -->
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Contactez
                <span class="bg-gradient-to-r from-blue-600 to-cyan-500 bg-clip-text text-transparent">
                    -nous
                </span>
            </h1>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Une question ? Un projet ? Notre équipe est là pour vous répondre rapidement.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

            <!-- Infos de contact améliorées -->
            <div data-aos="fade-right" data-aos-delay="100">
                <div class="bg-white rounded-2xl p-8 shadow-lg h-full">
                    <h2 class="text-2xl font-bold text-gray-800 mb-8">Nos coordonnées</h2>
                    
                    <div class="space-y-8">
                        <!-- WhatsApp avec effet hover -->
                        <a href="https://wa.me/24166413493" 
                           target="_blank"
                           class="flex items-center gap-4 p-4 rounded-xl hover:bg-green-50 transition-all duration-300 group">
                            <div class="bg-green-100 p-3 rounded-lg group-hover:bg-green-200 transition">
                                <i class="fab fa-whatsapp text-2xl text-green-600"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">WhatsApp</p>
                                <p class="text-gray-600">+241 66 41 34 93</p>
                                <p class="text-sm text-green-600 mt-1">Cliquez pour discuter</p>
                            </div>
                        </a>

                        <!-- Téléphone -->
                        <a href="tel:+24166413493"
                           class="flex items-center gap-4 p-4 rounded-xl hover:bg-blue-50 transition-all duration-300 group">
                            <div class="bg-blue-100 p-3 rounded-lg group-hover:bg-blue-200 transition">
                                <i class="fas fa-phone text-2xl text-blue-600"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Téléphone</p>
                                <p class="text-gray-600">+241 66 41 34 93</p>
                                <p class="text-sm text-blue-600 mt-1">Cliquez pour appeler</p>
                            </div>
                        </a>

                        <!-- Email -->
                        <a href="mailto:contact@juanservices.com"
                           class="flex items-center gap-4 p-4 rounded-xl hover:bg-red-50 transition-all duration-300 group">
                            <div class="bg-red-100 p-3 rounded-lg group-hover:bg-red-200 transition">
                                <i class="fas fa-envelope text-2xl text-red-600"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Email</p>
                                <p class="text-gray-600 break-all">contact@juanservices.com</p>
                                <p class="text-sm text-red-600 mt-1">Réponse sous 24h</p>
                            </div>
                        </a>

                        <!-- Localisation -->
                        <div class="flex items-center gap-4 p-4 rounded-xl hover:bg-gray-50 transition-all duration-300">
                            <div class="bg-gray-100 p-3 rounded-lg">
                                <i class="fas fa-map-marker-alt text-2xl text-gray-700"></i>
                            </div>
                            <div>
                                <p class="font-semibold text-gray-900">Localisation</p>
                                <p class="text-gray-600">Franeville, Gabon</p>
                                <p class="text-sm text-gray-500 mt-1">Quartier Maboukou</p>
                            </div>
                        </div>
                    </div>

                    <!-- Horaires -->
                    <div class="mt-12 pt-8 border-t border-gray-200">
                        <h3 class="font-bold text-gray-800 mb-4">Horaires d'ouverture</h3>
                        <div class="space-y-2 text-gray-600">
                            <p class="flex justify-between"><span>Lun - Ven</span> <span class="font-semibold">8h - 18h</span></p>
                            <p class="flex justify-between"><span>Samedi</span> <span class="font-semibold">9h - 13h</span></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Formulaire amélioré -->
            <div data-aos="fade-left" data-aos-delay="200">
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">
                        <i class="fa fa-paper-plane mr-3 text-blue-600"></i>
                        Envoyez-nous un message
                    </h2>
                    <p class="text-gray-600 mb-8">Nous vous répondrons dans les plus brefs délais</p>

                    <form id="contactForm" class="space-y-6">
                        @csrf
                        
                        <!-- Nom -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fa fa-user text-blue-500 text-sm"></i>
                                Votre nom complet
                            </label>
                            <input type="text" 
                                   id="name" 
                                   name="name"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            <div class="text-red-500 text-sm mt-1 hidden" id="nameError"></div>
                        </div>

                        <!-- Email -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fa fa-envelope text-blue-500 text-sm"></i>
                                Adresse email
                            </label>
                            <input type="email" 
                                   id="email" 
                                   name="email"
                                   required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                            <div class="text-red-500 text-sm mt-1 hidden" id="emailError"></div>
                        </div>

                        <!-- Sujet -->
                        <div>
                            <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                                Sujet
                            </label>
                            <select id="subject" 
                                    name="subject"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200">
                                <option value="">Sélectionnez un sujet</option>
                                <option value="general">Question générale</option>
                                <option value="quote">Demande de devis</option>
                                <option value="support">Support technique</option>
                                <option value="partnership">Partenariat</option>
                            </select>
                        </div>

                        <!-- Message -->
                        <div>
                            <label class="block font-semibold text-gray-700 mb-2 flex items-center gap-2">
                                <i class="fa fa-edit text-blue-500 text-sm"></i>
                                Votre message
                            </label>
                            <textarea id="message" 
                                      name="message"
                                      rows="5"
                                      required
                                      class="w-full px-4 py-3 border border-gray-300 rounded-xl focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200"></textarea>
                            <div class="text-red-500 text-sm mt-1 hidden" id="messageError"></div>
                        </div>

                        <!-- Bouton avec loader -->
                        <button type="submit"
                                id="submitBtn"
                                class="w-full bg-gradient-to-r from-blue-600 to-blue-700 text-white py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-blue-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                            <span id="btnText">Envoyer le message</span>
                            <div id="loader" class="hidden">
                                <i class="fas fa-spinner fa-spin"></i> Envoi en cours...
                            </div>
                        </button>

                        <!-- Message de confirmation -->
                        <div id="successMessage" class="hidden bg-green-50 text-green-700 p-4 rounded-xl text-center">
                            <i class="fas fa-check-circle text-xl mb-2"></i>
                            <p class="font-semibold">Message envoyé avec succès !</p>
                            <p class="text-sm">Nous vous répondrons dans les 24h.</p>
                        </div>
                    </form>
                </div>
            </div>

        </div>

        <!-- Carte Google Maps optionnelle -->
        {{-- MAP / LOCALISATION --}}
        <div class="mt-16 bg-white/80 backdrop-blur-sm rounded-2xl shadow-xl p-8 border border-gray-200/60" data-aos="fade-up">
            <div class="flex flex-col md:flex-row items-center justify-between gap-6 mb-6">
                <div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">
                        <i class="fa fa-map-marker-alt mr-3 text-red-500"></i>
                        Notre localisation
                    </h3>
                    <p class="text-gray-600">Basés au Gabon, nous intervenons dans toute l'Afrique et à l'international.</p>
                </div>
                <div class="flex items-center gap-4">
                    <div class="px-4 py-2 bg-blue-50 text-blue-700 rounded-lg font-medium">
                        <i class="fa fa-compass mr-2"></i>
                        Afrique Centrale
                    </div>
                    <div class="px-4 py-2 bg-green-50 text-green-700 rounded-lg font-medium">
                        <i class="fa fa-plane mr-2"></i>
                        International
                    </div>
                </div>
            </div>
            
            {{-- CARTE VISUELLE --}}
            <div class="relative h-64 bg-gradient-to-r from-blue-100 to-gray-100 rounded-xl overflow-hidden border border-gray-300">
                <div class="absolute inset-0 flex items-center justify-center">
                    <div class="text-center">
                        <i class="fa fa-map text-gray-400 text-6xl mb-4"></i>
                        <p class="text-gray-600 font-medium">Carte interactive à venir</p>
                        <p class="text-gray-500 text-sm mt-2">Nous intégrerons prochainement une carte interactive</p>
                    </div>
                </div>
                {{-- POINTEUR SUR LA CARTE --}}
                <div class="absolute top-1/2 left-1/3 transform -translate-x-1/2 -translate-y-1/2">
                    <div class="relative">
                        <div class="w-8 h-8 bg-red-500 rounded-full animate-ping opacity-75"></div>
                        <div class="absolute top-1 left-1 w-6 h-6 bg-red-600 rounded-full"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script JavaScript pour le formulaire -->
@push('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const submitBtn = document.getElementById('submitBtn');
    const btnText = document.getElementById('btnText');
    const loader = document.getElementById('loader');
    const successMessage = document.getElementById('successMessage');
    
    // Reset errors
    document.querySelectorAll('[id$="Error"]').forEach(el => {
        el.classList.add('hidden');
    });
    
    // Show loader
    btnText.classList.add('hidden');
    loader.classList.remove('hidden');
    submitBtn.disabled = true;
    
    try {
        // Simulation d'envoi - À remplacer par fetch() réel
        await new Promise(resolve => setTimeout(resolve, 1500));
        
        // Success
        successMessage.classList.remove('hidden');
        this.reset();
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            successMessage.classList.add('hidden');
        }, 5000);
        
    } catch (error) {
        alert('Erreur lors de l\'envoi. Veuillez réessayer.');
    } finally {
        // Hide loader
        btnText.classList.remove('hidden');
        loader.classList.add('hidden');
        submitBtn.disabled = false;
    }
});
</script>
@endpush

<!-- Styles additionnels -->
@push('styles')
<style>
input:focus, textarea:focus, select:focus {
    outline: none;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

#loader {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
}
</style>
@endpush
@endsection