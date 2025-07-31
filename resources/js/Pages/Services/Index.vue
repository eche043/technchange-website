<!-- resources/js/Pages/Services/Index.vue -->
<template>
    <div class="min-h-screen bg-white">
      <!-- Head -->
      <Head>
        <title>{{ meta.title }}</title>
        <meta name="description" :content="meta.description">
        <meta name="keywords" :content="meta.keywords">
        <link rel="canonical" :href="meta.canonical">
      </Head>

      <!-- Navigation -->
      <Navigation />

      <!-- Hero Section -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-pink-600">
      <!-- Background gradient -->


      <!-- Background pattern (identique à Home.vue) -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
        <div class="absolute bottom-40 right-32 w-24 h-24 bg-orange-400 rounded-full animate-bounce"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
      </div>

      <div class="container mx-auto px-6 relative z-10">
        <div class="max-w-4xl mx-auto text-center text-white">
          <div class="inline-flex items-center bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm">
            <span class="animate-pulse w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
            4 pôles d'expertise complémentaires
          </div>

          <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Nos <span class="text-orange-400">Services</span>
          </h1>

          <p class="text-xl mb-8 opacity-90 leading-relaxed">
            Une offre structurée autour de quatre pôles complémentaires pour accompagner votre transformation digitale de l'idée à la mise en production.
          </p>

          <!-- Statistiques rapides (style Home.vue avec couleur orange) -->
          <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 mb-8 justify-center mx-auto">

            <div
              v-for="(stat, index) in [
                /* { label: 'Projets réalisés', value: 250, suffix: '+' }, */
                { label: 'Années d\'expertise', value: 8, suffix: '+' },
                { label: 'Clients satisfaits', value: 50, suffix: '+' },
                { label: 'Experts mobilisés', value: 20, suffix: '+' }
              ]"
              :key="stat.label"
              class="text-center"
              :class="{ 'animate-slide-in-up': isVisible }"
              :style="{ animationDelay: `${index * 200}ms` }"
            >
              <div class="text-3xl font-bold text-orange-400 mb-1">
                <CounterAnimation
                  :target="stat.value"
                  :suffix="stat.suffix"
                  :duration="2000"
                />
              </div>
              <div class="text-sm opacity-75">{{ stat.label }}</div>
            </div>
          </div>

          <!-- CTA Buttons (style Home.vue) -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/contact"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center"
            >
              Démarrer un projet
            </Link>
            <Link
              href="/projets"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 text-center backdrop-blur-sm"
            >
              Nos références
            </Link>
          </div>
        </div>
      </div>

      <!-- Scroll indicator (identique à Home.vue) -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <ChevronDownIcon class="w-6 h-6 text-white" />
      </div>
    </section>

      <!-- Services Grid (style inspiré de Home.vue) -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Offre de Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Une approche structurée autour de cinq pôles complémentaires pour accompagner votre transformation digitale
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
              v-for="(service, index) in services"
              :key="service.id"
              class="group relative"
              :class="{ 'md:col-span-2 lg:col-span-2': service.id === 'amoa' }"
            >
              <!-- Card principale (style Home.vue) -->
              <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 h-full">
                <!-- Badge pourcentage pour AMOA -->
                <div
                  v-if="service.percentage"
                  class="absolute -top-3 -right-3 bg-pink-500 text-white text-sm font-bold px-3 py-1 rounded-full"
                >
                  {{ service.percentage }}%
                </div>

                <!-- Badge spécialisation -->
                <div
                  v-if="service.specialization"
                  class="absolute -top-3 -left-3 bg-orange-500 text-white text-xs font-bold px-2 py-1 rounded-full"
                >
                  EXPERT
                </div>

                <!-- Badge Awards pour digiTRANS -->
                <div
                  v-if="service.awards"
                  class="absolute -top-3 -left-3 bg-yellow-500 text-white text-xs font-bold px-2 py-1 rounded-full"
                >
                  🏆 AWARDS
                </div>

                <!-- Icône (style Home.vue) -->
                <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4 group-hover:bg-blue-600 transition-colors duration-300">
                  <DynamicIcon
                    :name="service.icon"
                    class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-300"
                  />
                </div>

                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ service.title }}</h3>
                <p class="text-sm text-blue-600 font-semibold mb-3">{{ service.subtitle }}</p>
                <p class="text-gray-600 mb-4 leading-relaxed text-sm">{{ service.description }}</p>

                <!-- Features -->
                <ul class="space-y-2 mb-4">
                  <li
                    v-for="feature in service.features.slice(0, service.id === 'amoa' ? 4 : 3)"
                    :key="feature"
                    class="flex items-start space-x-2 text-sm text-gray-600"
                  >
                    <CheckIcon class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" />
                    <span>{{ feature }}</span>
                  </li>
                </ul>

                <!-- Achievements spéciaux pour digiTRANS -->
                <div v-if="service.achievements" class="mb-4">
                  <h4 class="text-sm font-semibold text-gray-900 mb-2">Réalisations :</h4>
                  <div class="grid grid-cols-2 gap-2">
                    <div
                      v-for="achievement in service.achievements.slice(0, 2)"
                      :key="achievement"
                      class="text-center bg-orange-50 rounded p-2"
                    >
                      <div class="text-xs font-bold text-orange-600">{{ achievement.split(' ')[0] }}</div>
                      <div class="text-xs text-gray-600">{{ achievement.split(' ').slice(1).join(' ') }}</div>
                    </div>
                  </div>
                </div>

                <!-- Sites web pour digiTRANS -->
                <div v-if="service.websites" class="mb-4">
                  <div class="flex flex-wrap gap-1">
                    <span
                      v-for="website in service.websites"
                      :key="website"
                      class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full"
                    >
                      {{ website }}
                    </span>
                  </div>
                </div>

                <!-- CTA -->
                <Link
                  :href="service.route"
                  class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition-colors duration-300"
                >
                  En savoir plus
                </Link>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Process Section (style Home.vue) -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Notre Processus d'Innovation</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Une approche agile et structurée pour transformer vos idées en solutions opérationnelles
            </p>
          </div>

          <div class="grid lg:grid-cols-5 gap-8">
            <div
              v-for="(step, index) in workProcess"
              :key="step.step"
              class="relative text-center"
            >
              <!-- Connector line -->
              <div
                v-if="index < workProcess.length - 1"
                class="hidden lg:block absolute top-8 left-full w-full h-0.5 bg-blue-200 transform translate-x-4"
              ></div>

              <!-- Step circle (style Home.vue) -->
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg relative z-10">
                {{ step.step }}
              </div>

              <!-- Icon -->
              <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                <DynamicIcon :name="step.icon" class="w-6 h-6 text-blue-600" />
              </div>

              <h3 class="text-lg font-bold text-gray-900 mb-2">{{ step.title }}</h3>
              <p class="text-gray-600 text-sm mb-3">{{ step.description }}</p>
              <div class="text-center">
                <span class="inline-flex items-center bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                  ⏱️ {{ step.duration }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Sectors Section -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Secteurs d'Expertise</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Une expertise sectorielle approfondie au service de votre transformation digitale
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
              v-for="sector in sectors"
              :key="sector.name"
              class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 text-center"
            >
              <!-- Icône avec couleurs fixes (style Home.vue) -->
              <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4 group-hover:bg-blue-600 transition-colors duration-300">
                <DynamicIcon :name="sector.icon" class="w-8 h-8 text-blue-600 group-hover:text-white transition-colors duration-300" />
              </div>

              <h3 class="text-lg font-bold text-gray-900 mb-2">{{ sector.name }}</h3>
              <p class="text-sm text-gray-600 mb-4">{{ sector.description }}</p>

              <div class="flex flex-wrap justify-center gap-1">
                <span
                  v-for="project in sector.projects"
                  :key="project"
                  class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full font-medium"
                >
                  {{ project }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Technologies Section -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Technologies Maîtrisées</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Un stack technologique moderne et éprouvé pour vos projets les plus ambitieux
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
              v-for="tech in technologies"
              :key="tech.category"
              class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100"
            >
              <div class="flex items-center space-x-3 mb-4">
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                  <DynamicIcon :name="tech.icon" class="w-6 h-6 text-purple-600" />
                </div>
                <h3 class="text-lg font-bold text-gray-900">{{ tech.category }}</h3>
              </div>

              <div class="flex flex-wrap gap-2">
                <span
                  v-for="techName in tech.techs"
                  :key="techName"
                  class="px-3 py-1 bg-purple-50 text-purple-700 rounded-full text-sm font-medium"
                >
                  {{ techName }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section (style Home.vue) -->
      <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-4xl font-bold mb-6">Transformez Votre Vision en Réalité</h2>
          <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
            Contactez-nous pour discuter de votre projet de transformation digitale
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/contact"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              Démarrer un projet
            </Link>
            <a
              href="tel:+22521213247"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
            >
              Nous appeler
            </a>
          </div>

          <div class="mt-8 text-gray-400">
            <p>contact@technchange.net | (+225) 27 21 32 42 47 / (+225) 07 89 97 11 13</p>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script setup>
  import { ref, onMounted } from 'vue'
  import { Head, Link } from '@inertiajs/vue3'
  import {
    ChevronDownIcon,
    CheckIcon,
    FingerPrintIcon,
    TruckIcon,
    UsersIcon
  } from '@heroicons/vue/24/outline'

  // Components - Réutilisation exacte de Home.vue
  import Navigation from '@/Components/Layout/Navigation.vue'
  import Footer from '@/Components/Layout/Footer.vue'
  import CounterAnimation from '@/Components/UI/CounterAnimation.vue'
  import DynamicIcon from '@/Components/UI/DynamicIcon.vue'

  // Props
  const props = defineProps({
    services: Array,
    workProcess: Array,
    sectors: Array,
    technologies: Array,
    meta: Object
  })

  // État local (comme dans Home.vue)
  const isVisible = ref(false)

  // Lifecycle (même pattern que Home.vue)
  onMounted(() => {
    // Animation d'entrée
    setTimeout(() => {
      isVisible.value = true
    }, 100)
  })
  </script>

  <style scoped>
  /* Réutilisation exacte des styles de Home.vue */
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

  @keyframes slide-in-right {
    from {
      opacity: 0;
      transform: translateX(30px);
    }
    to {
      opacity: 1;
      transform: translateX(0);
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

  .animate-slide-in-right {
    animation: slide-in-right 0.8s ease-out;
  }

  .animate-slide-in-up {
    animation: slide-in-up 0.6s ease-out;
  }

  .delay-300 {
    animation-delay: 300ms;
  }

  .delay-1000 {
    animation-delay: 1000ms;
  }

  /* Styles pour les boutons (identiques à Home.vue) */
  .btn-primary {
    @apply bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg;
  }

  .btn-secondary {
    @apply bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm;
  }

  /* Responsive improvements */
  @media (max-width: 768px) {
    .animate-slide-in-right {
      animation: fade-in-up 0.8s ease-out;
    }
  }
  </style>
