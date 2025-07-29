<template>
    <div class="min-h-screen bg-gray-50">
      <!-- SEO Meta -->
      <Head>
        <title>{{ meta.title }}</title>
        <meta name="description" :content="meta.description">
        <meta name="keywords" :content="meta.keywords">
      </Head>

      <!-- Navigation -->
      <Navigation />

      <!-- Hero Section -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-pink-600">

        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
            <div class="absolute bottom-40 right-32 w-24 h-24 bg-orange-400 rounded-full animate-bounce"></div>
            <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-4xl mx-auto text-center" :class="{ 'animate-fade-in-up': isVisible }">

            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                <span class="text-orange-400">Contactez</span><span style="color: #FFF;">-nous</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8">
              Démarrons ensemble votre projet de transformation digitale. Notre équipe d'experts vous accompagne dans tous vos défis technologiques.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <a
                href="#formulaire"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
              >
                Nous écrire
              </a>
              <a
                :href="`tel:${contactInfo.company.phones[0].replace(/\s/g, '')}`"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
              >
                Nous appeler
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- Contact Information -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="max-w-6xl mx-auto">
            <div class="text-center mb-16" :class="{ 'animate-slide-in-up': isVisible }">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Nos Coordonnées
              </h2>
              <p class="text-xl text-gray-600">
                Plusieurs moyens de nous joindre selon vos préférences
              </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 mb-16">
              <!-- Adresse -->
              <div class="text-center p-8 bg-gray-50 rounded-2xl" :class="{ 'animate-slide-in-up delay-300': isVisible }">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Adresse</h3>
                <p class="text-gray-600">{{ contactInfo.company.address }}</p>
                <p class="text-gray-600">{{ contactInfo.company.postal }}</p>
              </div>

              <!-- Téléphone -->
              <div class="text-center p-8 bg-gray-50 rounded-2xl" :class="{ 'animate-slide-in-up delay-500': isVisible }">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Téléphone</h3>
                <p v-for="phone in contactInfo.company.phones" :key="phone" class="text-gray-600 mb-1">
                  <a :href="`tel:${phone.replace(/\s/g, '')}`" class="hover:text-blue-600 transition-colors">
                    {{ phone }}
                  </a>
                </p>
              </div>

              <!-- Email -->
              <div class="text-center p-8 bg-gray-50 rounded-2xl" :class="{ 'animate-slide-in-up delay-700': isVisible }">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                  </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Email</h3>
                <a :href="`mailto:${contactInfo.company.email}`" class="text-gray-600 hover:text-blue-600 transition-colors">
                  {{ contactInfo.company.email }}
                </a>
              </div>
            </div>

            <!-- Horaires -->
            <div class="bg-blue-50 rounded-2xl p-8 text-center" :class="{ 'animate-slide-in-up delay-1000': isVisible }">
              <h3 class="text-2xl font-semibold text-gray-900 mb-6">Horaires d'ouverture</h3>
              <div class="grid md:grid-cols-3 gap-6">
                <div>
                  <h4 class="font-semibold text-gray-900 mb-2">Lundi - Vendredi</h4>
                  <p class="text-gray-600">{{ contactInfo.office_hours.monday_friday }}</p>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 mb-2">Samedi</h4>
                  <p class="text-gray-600">{{ contactInfo.office_hours.saturday }}</p>
                </div>
                <div>
                  <h4 class="font-semibold text-gray-900 mb-2">Dimanche</h4>
                  <p class="text-gray-600">{{ contactInfo.office_hours.sunday }}</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Formulaire de contact -->
      <section id="formulaire" class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" :class="{ 'animate-slide-in-up': isVisible }">
              <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Envoyez-nous un message
              </h2>
              <p class="text-xl text-gray-600">
                Décrivez-nous votre projet et nous vous recontacterons rapidement
              </p>
            </div>

            <!-- Messages de feedback -->
            <div v-if="$page.props.flash?.success" class="mb-8 p-4 bg-green-50 border border-green-200 rounded-lg">
              <div class="flex items-center">
                <CheckCircleIcon class="w-6 h-6 text-green-600 mr-3" />
                <div>
                  <h3 class="text-green-800 font-semibold">{{ $page.props.flash.success.title }}</h3>
                  <p class="text-green-700">{{ $page.props.flash.success.message }}</p>
                </div>
              </div>
            </div>

            <div class="bg-white rounded-2xl shadow-xl p-8" :class="{ 'animate-slide-in-up delay-300': isVisible }">
              <form @submit.prevent="submitForm">
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                  <!-- Prénom -->
                  <div>
                    <label for="prenom" class="block text-sm font-semibold text-gray-700 mb-2">
                      Prénom *
                    </label>
                    <input
                      id="prenom"
                      v-model="form.prenom"
                      type="text"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      :class="{ 'border-red-500': errors.prenom }"
                      placeholder="Votre prénom"
                    >
                    <p v-if="errors.prenom" class="text-red-500 text-sm mt-1">{{ errors.prenom }}</p>
                  </div>

                  <!-- Nom -->
                  <div>
                    <label for="nom" class="block text-sm font-semibold text-gray-700 mb-2">
                      Nom *
                    </label>
                    <input
                      id="nom"
                      v-model="form.nom"
                      type="text"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      :class="{ 'border-red-500': errors.nom }"
                      placeholder="Votre nom"
                    >
                    <p v-if="errors.nom" class="text-red-500 text-sm mt-1">{{ errors.nom }}</p>
                  </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                  <!-- Email -->
                  <div>
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                      Email *
                    </label>
                    <input
                      id="email"
                      v-model="form.email"
                      type="email"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      :class="{ 'border-red-500': errors.email }"
                      placeholder="votre.email@exemple.com"
                    >
                    <p v-if="errors.email" class="text-red-500 text-sm mt-1">{{ errors.email }}</p>
                  </div>

                  <!-- Téléphone -->
                  <div>
                    <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-2">
                      Téléphone
                    </label>
                    <input
                      id="telephone"
                      v-model="form.telephone"
                      type="tel"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      placeholder="+225 XX XX XX XX XX"
                    >
                  </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                  <!-- Entreprise -->
                  <div>
                    <label for="entreprise" class="block text-sm font-semibold text-gray-700 mb-2">
                      Entreprise
                    </label>
                    <input
                      id="entreprise"
                      v-model="form.entreprise"
                      type="text"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      placeholder="Nom de votre entreprise"
                    >
                  </div>

                  <!-- Poste -->
                  <div>
                    <label for="poste" class="block text-sm font-semibold text-gray-700 mb-2">
                      Poste
                    </label>
                    <input
                      id="poste"
                      v-model="form.poste"
                      type="text"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      placeholder="Votre fonction"
                    >
                  </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                  <!-- Sujet -->
                  <div>
                    <label for="sujet" class="block text-sm font-semibold text-gray-700 mb-2">
                      Sujet de votre demande *
                    </label>
                    <select
                      id="sujet"
                      v-model="form.sujet"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                      :class="{ 'border-red-500': errors.sujet }"
                    >
                      <option value="">Sélectionnez un sujet</option>
                      <option v-for="subject in contactSubjects" :key="subject.value" :value="subject.value">
                        {{ subject.label }}
                      </option>
                    </select>
                    <p v-if="errors.sujet" class="text-red-500 text-sm mt-1">{{ errors.sujet }}</p>
                  </div>

                  <!-- Type de service -->
                  <div>
                    <label for="service_type" class="block text-sm font-semibold text-gray-700 mb-2">
                      Type de service recherché
                    </label>
                    <select
                      id="service_type"
                      v-model="form.service_type"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    >
                      <option value="">Sélectionnez un service</option>
                      <option v-for="service in serviceTypes" :key="service.value" :value="service.value">
                        {{ service.label }}
                      </option>
                    </select>
                  </div>
                </div>

                <!-- Message -->
                <div class="mb-6">
                  <label for="message" class="block text-sm font-semibold text-gray-700 mb-2">
                    Message *
                  </label>
                  <textarea
                    id="message"
                    v-model="form.message"
                    rows="6"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    :class="{ 'border-red-500': errors.message }"
                    placeholder="Décrivez votre projet, vos besoins ou votre question en détail..."
                  ></textarea>
                  <p v-if="errors.message" class="text-red-500 text-sm mt-1">{{ errors.message }}</p>
                  <p class="text-gray-500 text-sm mt-1">{{ form.message?.length || 0 }}/2000 caractères</p>
                </div>

                <div class="grid md:grid-cols-2 gap-6 mb-6">
                  <!-- Budget estimé -->
                  <div>
                    <label for="budget_estime" class="block text-sm font-semibold text-gray-700 mb-2">
                      Budget estimé
                    </label>
                    <select
                      id="budget_estime"
                      v-model="form.budget_estime"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    >
                      <option value="">Sélectionnez une fourchette</option>
                      <option value="< 5M FCFA">Moins de 5 millions FCFA</option>
                      <option value="5M - 15M FCFA">5 à 15 millions FCFA</option>
                      <option value="15M - 50M FCFA">15 à 50 millions FCFA</option>
                      <option value="50M - 100M FCFA">50 à 100 millions FCFA</option>
                      <option value="> 100M FCFA">Plus de 100 millions FCFA</option>
                      <option value="À définir">À définir</option>
                    </select>
                  </div>

                  <!-- Délai souhaité -->
                  <div>
                    <label for="delai_souhaite" class="block text-sm font-semibold text-gray-700 mb-2">
                      Délai souhaité
                    </label>
                    <select
                      id="delai_souhaite"
                      v-model="form.delai_souhaite"
                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200"
                    >
                      <option value="">Sélectionnez un délai</option>
                      <option value="Urgent (< 1 mois)">Urgent (moins d'1 mois)</option>
                      <option value="Court terme (1-3 mois)">Court terme (1 à 3 mois)</option>
                      <option value="Moyen terme (3-6 mois)">Moyen terme (3 à 6 mois)</option>
                      <option value="Long terme (6+ mois)">Long terme (6 mois et plus)</option>
                      <option value="À définir">À définir</option>
                    </select>
                  </div>
                </div>

                <!-- RGPD -->
                <div class="mb-8">
                  <label class="flex items-start space-x-3">
                    <input
                      v-model="form.accepte_rgpd"
                      type="checkbox"
                      class="mt-1 w-5 h-5 text-blue-600 border-gray-300 rounded focus:ring-blue-500"
                      :class="{ 'border-red-500': errors.accepte_rgpd }"
                    >
                    <span class="text-sm text-gray-700">
                      J'accepte que mes données personnelles soient collectées et traitées par TECH N'CHANGE dans le cadre de cette demande de contact, conformément à notre
                      <a href="/politique-confidentialite" class="text-blue-600 hover:underline">politique de confidentialité</a>. *
                    </span>
                  </label>
                  <p v-if="errors.accepte_rgpd" class="text-red-500 text-sm mt-1">{{ errors.accepte_rgpd }}</p>
                </div>

                <!-- Bouton d'envoi -->
                <div class="text-center">
                  <button
                    type="submit"
                    :disabled="processing"
                    class="bg-blue-600 hover:bg-blue-700 disabled:bg-blue-400 text-white px-12 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg disabled:transform-none disabled:shadow-none"
                  >
                    <span v-if="processing" class="flex items-center justify-center">
                      <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                      </svg>
                      Envoi en cours...
                    </span>
                    <span v-else>Envoyer le message</span>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Call to Action -->
      <section class="py-20 bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white">
        <div class="container mx-auto px-6">
          <div class="max-w-4xl mx-auto text-center" :class="{ 'animate-fade-in-up delay-1000': isVisible }">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">
              Prêt à transformer votre vision en réalité ?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
              Rejoignez les entreprises qui nous font confiance pour leur transformation digitale
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <Link
                href="/projets"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
              >
                Voir nos réalisations
              </Link>
              <Link
                href="/services"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
              >
                Découvrir nos services
              </Link>
            </div>

            <div class="mt-8 text-gray-400">
              <p>{{ contactInfo.company.email }} | {{ contactInfo.company.phones.join(' / ') }}</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue'
  import { Head, Link, useForm } from '@inertiajs/vue3'
  import { CheckCircleIcon } from '@heroicons/vue/24/outline'

  // Components
  import Navigation from '@/Components/Layout/Navigation.vue'
  import Footer from '@/Components/Layout/Footer.vue'

  // Props
  const props = defineProps({
    contactInfo: Object,
    serviceTypes: Array,
    contactSubjects: Array,
    meta: Object
  })

  // État local
  const isVisible = ref(false)
  const processing = ref(false)

  // Formulaire Inertia
  const { data: form, post, errors, reset } = useForm({
    nom: '',
    prenom: '',
    email: '',
    telephone: '',
    entreprise: '',
    poste: '',
    sujet: '',
    service_type: '',
    message: '',
    budget_estime: '',
    delai_souhaite: '',
    accepte_rgpd: false
  })

  // Méthodes
  const submitForm = () => {
    processing.value = true

    post(route('contact.store'), {
      onSuccess: () => {
        reset()
        processing.value = false
        // Scroll vers le haut pour voir le message de succès
        window.scrollTo({ top: 0, behavior: 'smooth' })
      },
      onError: () => {
        processing.value = false
      }
    })
  }

  // Lifecycle
  onMounted(() => {
    setTimeout(() => {
      isVisible.value = true
    }, 100)
  })
  </script>

  <style scoped>
  /* Animations identiques aux autres pages */
  @keyframes fade-in-up {
    from {
      opacity: 0;
      transform: translateY(30px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes slide-in-up {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .animate-fade-in-up {
    animation: fade-in-up 0.8s ease-out;
  }

  .animate-slide-in-up {
    animation: slide-in-up 0.6s ease-out;
  }

  .delay-300 {
    animation-delay: 300ms;
  }

  .delay-500 {
    animation-delay: 500ms;
  }

  .delay-700 {
    animation-delay: 700ms;
  }

  .delay-1000 {
    animation-delay: 1000ms;
  }

  /* Smooth scroll */
  html {
    scroll-behavior: smooth;
  }

  /* Focus states améliorés */
  input:focus, select:focus, textarea:focus {
    outline: none;
    transform: translateY(-1px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  /* Responsive improvements */
  @media (max-width: 768px) {
    .animate-slide-in-right {
      animation: fade-in-up 0.8s ease-out;
    }
  }
  </style>
