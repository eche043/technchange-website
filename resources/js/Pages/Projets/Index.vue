<!-- resources/js/Pages/Projets/Index.vue -->
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

      <!-- Hero Section (style Home.vue) -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-pink-600">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
          <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
          <div class="absolute bottom-40 right-32 w-24 h-24 bg-orange-400 rounded-full animate-bounce"></div>
          <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-4xl mx-auto text-center text-white">
            <div class="inline-flex items-center bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm">
              <span class="animate-pulse w-2 h-2 bg-orange-400 rounded-full mr-2"></span>
              Des projets d'envergure nationale
            </div>

            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              Nos <span class="text-orange-400">Réalisations</span>
            </h1>

            <p class="text-xl mb-8 opacity-90 leading-relaxed">
              Découvrez nos projets phares qui transforment la société ivoirienne et ouest-africaine avec un impact mesurable sur des millions de vies.
            </p>

            <!-- Statistiques rapides -->
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
              <div
                v-for="(stat, index) in stats"
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

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <Link
                href="/contact"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center"
              >
                Discuter de votre projet
              </Link>
              <Link
                href="/services"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 text-center backdrop-blur-sm"
              >
                Nos services
              </Link>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="w-6 h-6 text-white" />
        </div>
      </section>


      <!-- Projets Featured (SIBIS, BOOST CMU, IOC) -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Projets Phares</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Nos réalisations les plus impactantes qui transforment la société ivoirienne
            </p>
          </div>

          <div class="grid lg:grid-cols-3 gap-8 mb-12">
            <div
              v-for="project in featuredProjects.filter(p => p.featured).slice(0, 3)"
              :key="project.id"
              class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100 overflow-hidden"
            >
              <!-- Image du projet -->
              <div class="h-48 relative overflow-hidden">
                <img
                    :src="project.image"
                    :alt="project.title"
                    class="w-full h-full object-cover"
                >
                <div class="absolute inset-0 bg-black/20"></div>
                <div class="absolute bottom-4 left-4 right-4">
                    <span class="inline-block px-3 py-1 bg-white/90 text-gray-900 text-xs font-semibold rounded-full">
                    {{ project.category }}
                    </span>
                    <span class="inline-block px-3 py-1 bg-green-500 text-white text-xs font-semibold rounded-full ml-2">
                    {{ project.status }}
                    </span>
                </div>
              </div>

              <div class="p-6">
                <!-- Header -->
                <div class="flex justify-between items-start mb-3">
                  <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors line-clamp-2">
                    {{ project.title }}
                  </h3>
                  <span class="text-sm text-gray-500 font-medium ml-2">{{ project.period }}</span>
                </div>

                <p class="text-sm text-blue-600 font-semibold mb-2">{{ project.client }}</p>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">{{ project.description }}</p>

                <!-- Awards pour digiTRANS -->
                <div v-if="project.awards" class="mb-4">
                  <div class="flex flex-wrap gap-1">
                    <span
                      v-for="award in project.awards"
                      :key="award"
                      class="px-2 py-1 bg-yellow-100 text-yellow-800 text-xs rounded-full font-medium"
                    >
                      🏆 {{ award }}
                    </span>
                  </div>
                </div>

                <!-- Métriques d'impact -->
                <div class="grid grid-cols-2 gap-3 mb-4">
                  <div
                    v-for="impact in project.impact.slice(0, 4)"
                    :key="impact.metric"
                    class="text-center bg-gray-50 rounded-lg p-3"
                  >
                    <div class="text-lg font-bold text-blue-600">{{ impact.metric }}</div>
                    <div class="text-xs text-gray-600">{{ impact.description }}</div>
                  </div>
                </div>

                <!-- Technologies -->
                <div class="flex flex-wrap gap-1 mb-4">
                  <span
                    v-for="tech in project.technologies.slice(0, 3)"
                    :key="tech"
                    class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full font-medium"
                  >
                    {{ tech }}
                  </span>
                  <span
                    v-if="project.technologies.length > 3"
                    class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full"
                  >
                    +{{ project.technologies.length - 3 }}
                  </span>
                </div>

                <!-- CTA -->
                <!-- <Link
                  :href="`/projets/${project.id}`"
                  class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition-colors duration-300"
                >
                  Voir le projet
                </Link> -->
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Tous les Projets (Grille filtrée) -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Tous Nos Projets</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Portfolio complet de nos réalisations depuis 2017
            </p>
          </div>

          <!-- Grille des projets filtrés -->
          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div
              v-for="project in filteredProjects"
              :key="project.id"
              class="group bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100"
            >
              <!-- Header avec statut -->
              <div class="flex items-start justify-between mb-4">
                <div class="flex-1">
                  <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-1 line-clamp-2">
                    {{ project.title }}
                  </h3>
                  <p class="text-sm text-blue-600 font-semibold">{{ project.client }}</p>
                </div>
                <span :class="[
                  'px-2 py-1 text-xs font-semibold rounded-full',
                  project.status === 'Réalisé' ? 'bg-green-100 text-green-800' :
                  project.status === 'En cours' ? 'bg-blue-100 text-blue-800' :
                  'bg-orange-100 text-orange-800'
                ]">
                  {{ project.status }}
                </span>
              </div>

              <!-- Description -->
              <p class="text-gray-600 text-sm mb-4 leading-relaxed line-clamp-3">{{ project.description }}</p>

              <!-- Impact highlights -->
              <div class="grid grid-cols-2 gap-2 mb-4">
                <div
                  v-for="impact in project.impact.slice(0, 2)"
                  :key="impact.metric"
                  class="text-center bg-blue-50 rounded p-2"
                >
                  <div class="text-sm font-bold text-blue-600">{{ impact.metric }}</div>
                  <div class="text-xs text-gray-600">{{ impact.description }}</div>
                </div>
              </div>

              <!-- Technologies -->
              <div class="flex flex-wrap gap-1 mb-4">
                <span
                  v-for="tech in project.technologies.slice(0, 2)"
                  :key="tech"
                  class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full"
                >
                  {{ tech }}
                </span>
                <span
                  v-if="project.technologies.length > 2"
                  class="px-2 py-1 bg-gray-200 text-gray-600 text-xs rounded-full"
                >
                  +{{ project.technologies.length - 2 }}
                </span>
              </div>

              <!-- Metadata -->
              <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                <span>{{ project.period }}</span>
                <span class="px-2 py-1 bg-gray-100 rounded-full">{{ project.category }}</span>
              </div>

              <!-- CTA -->
              <!-- <Link
                :href="`/projets/${project.id}`"
                class="block w-full text-center bg-gray-800 hover:bg-gray-900 text-white py-2 rounded-lg font-semibold transition-colors duration-300"
              >
                En savoir plus
              </Link> -->
            </div>
          </div>

          <!-- Message si aucun projet -->
          <div v-if="filteredProjects.length === 0" class="text-center py-12">
            <div class="text-gray-400 mb-4">
              <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucun projet trouvé</h3>
            <p class="text-gray-600">Essayez de modifier vos filtres pour voir plus de projets.</p>
          </div>
        </div>
      </section>

      <!-- Section Témoignages -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Ce que disent nos clients</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Retours d'expérience de nos partenaires sur nos projets réalisés
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="testimonial in testimonials"
              :key="testimonial.client"
              class="bg-gray-50 rounded-xl p-8 border border-gray-100"
            >
              <!-- Stars -->
              <div class="flex items-center mb-4">
                <div class="flex">
                  <svg
                    v-for="i in 5"
                    :key="i"
                    :class="[
                      'w-5 h-5',
                      i <= testimonial.rating ? 'text-yellow-400' : 'text-gray-300'
                    ]"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                  </svg>
                </div>
                <span class="ml-2 text-sm text-gray-600">Projet {{ testimonial.project }}</span>
              </div>

              <!-- Content -->
              <blockquote class="text-gray-700 mb-6 leading-relaxed">
                "{{ testimonial.content }}"
              </blockquote>

              <!-- Author -->
              <div class="flex items-center">
                <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center">
                  <span class="text-blue-600 font-semibold">{{ testimonial.client.charAt(0) }}</span>
                </div>
                <div class="ml-4">
                  <div class="font-semibold text-gray-900">{{ testimonial.author }}</div>
                  <div class="text-sm text-gray-600">{{ testimonial.client }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-4xl font-bold mb-6">Votre Projet Sera Notre Prochaine Réussite</h2>
          <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
            Discutons de votre vision et découvrons ensemble comment la transformer en solution concrète avec un impact mesurable.
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/contact"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              Démarrer mon projet
            </Link>
            <Link
              href="/services"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
            >
              Voir nos services
            </Link>
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
  import { ref, onMounted, computed } from 'vue'
  import { Head, Link } from '@inertiajs/vue3'
  import {
    ChevronDownIcon,
    CheckIcon
  } from '@heroicons/vue/24/outline'

  // Components
  import Navigation from '@/Components/Layout/Navigation.vue'
  import Footer from '@/Components/Layout/Footer.vue'
  import CounterAnimation from '@/Components/UI/CounterAnimation.vue'

  // Props
  const props = defineProps({
    featuredProjects: Array,
    stats: Array,
    categories: Object,
    statuses: Object,
    technologies: Array,
    clients: Array,
    testimonials: Array,
    meta: Object
  })

  // État local
  const isVisible = ref(false)
  const selectedCategory = ref('all')
  const selectedStatus = ref('all')

  // Projets filtrés
  const filteredProjects = computed(() => {
    return props.featuredProjects.filter(project => {
      const matchesCategory = selectedCategory.value === 'all' || project.category === selectedCategory.value
      const matchesStatus = selectedStatus.value === 'all' || project.status === selectedStatus.value
      return matchesCategory && matchesStatus
    })
  })

  // Lifecycle
  onMounted(() => {
    setTimeout(() => {
      isVisible.value = true
    }, 100)
  })
  </script>

  <style scoped>
  /* Styles identiques à Home.vue et Services */
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

  .delay-1000 {
    animation-delay: 1000ms;
  }

  /* Utilitaires pour le contenu tronqué */
  .line-clamp-2 {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  .line-clamp-3 {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
  }

  /* Responsive improvements */
  @media (max-width: 768px) {
    .animate-slide-in-right {
      animation: fade-in-up 0.8s ease-out;
    }
  }
  </style>
