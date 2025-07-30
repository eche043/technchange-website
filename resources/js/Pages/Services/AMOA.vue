<template>
    <div class="min-h-screen bg-white">
      <!-- Head -->
      <Head>
        <title>{{ meta.title }}</title>
        <meta name="description" :content="meta.description">
        <meta name="keywords" :content="meta.keywords">
        <link rel="canonical" :href="meta.canonical">
        <meta property="og:image" :content="meta.og_image">
      </Head>

      <!-- Navigation -->
      <Navigation />

      <!-- Hero Section -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-indigo-800">
        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
          <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
          <div class="absolute bottom-40 right-32 w-24 h-24 bg-orange-400 rounded-full animate-bounce"></div>
          <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
        </div>

        <!-- Background percentage -->
        <div class="absolute top-8 right-8 text-9xl font-black opacity-10 select-none text-white">60%</div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-4xl mx-auto text-center text-white">
            <div class="inline-flex items-center bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm">
              <ChartBarIcon class="w-4 h-4 mr-2" />
              Notre cœur de métier • 60% de notre activité
            </div>

            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              <span class="text-orange-400">AMOA</span> & Conseil Stratégique
            </h1>

            <p class="text-xl mb-8 opacity-90 leading-relaxed">
              Assistance à maîtrise d'ouvrage pour vos projets de transformation digitale
              avec une <strong>expertise reconnue depuis 8 ans</strong> et 250+ projets pilotés.
            </p>

            <!-- Statistiques rapides -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
              <div
                v-for="(stat, index) in stats"
                :key="stat.label"
                class="text-center"
              >
                <div class="text-3xl font-bold text-orange-400 mb-1">
                  <CounterAnimation
                    :target="stat.value"
                    :suffix="stat.suffix"
                    :duration="2000"
                  />
                </div>
                <div class="text-sm opacity-75">{{ stat.label }}</div>
                <div class="text-xs opacity-60">{{ stat.description }}</div>
              </div>
            </div>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
              <Link
                href="/contact"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
              >
                Démarrer un projet AMOA
              </Link>
              <a
                href="#projets"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-800 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
              >
                Voir nos projets
              </a>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="w-6 h-6 text-white" />
        </div>
      </section>

      <!-- Expertise Section -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Expertise AMOA</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              4 domaines d'excellence pour pilorer vos transformations digitales les plus complexes
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="area in expertise"
              :key="area.title"
              class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            >
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mr-4">
                  <DynamicIcon :name="area.icon" class="w-6 h-6 text-blue-600" />
                </div>
                <h3 class="text-xl font-bold text-gray-900">{{ area.title }}</h3>
              </div>

              <p class="text-gray-600 mb-6 leading-relaxed">{{ area.description }}</p>

              <ul class="space-y-2">
                <li
                  v-for="feature in area.features"
                  :key="feature"
                  class="flex items-center space-x-3"
                >
                  <CheckIcon class="w-4 h-4 text-green-500 flex-shrink-0" />
                  <span class="text-gray-700">{{ feature }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Projets Phares Section -->
      <section id="projets" class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Projets AMOA de Référence</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Des missions d'envergure nationale qui transforment la société ivoirienne
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="project in featuredProjects"
              :key="project.id"
              class="group bg-gradient-to-br from-gray-50 to-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100"
            >
              <!-- Header -->
              <div class="flex items-start justify-between mb-6">
                <div class="flex-1">
                  <div class="flex items-center space-x-2 mb-2">
                    <span :class="[
                      'px-3 py-1 text-xs font-semibold rounded-full',
                      project.status === 'En cours' ? 'bg-blue-100 text-blue-800' :
                      project.status === 'Réalisé' ? 'bg-green-100 text-green-800' :
                      'bg-orange-100 text-orange-800'
                    ]">
                      {{ project.status }}
                    </span>
                    <span class="text-sm text-gray-500">{{ project.period }}</span>
                  </div>
                  <h3 class="text-xl font-bold text-gray-900 group-hover:text-blue-600 transition-colors mb-1">
                    {{ project.title }}
                  </h3>
                  <p class="text-blue-600 font-semibold text-sm">{{ project.client }}</p>
                </div>
              </div>

              <p class="text-gray-600 mb-6 leading-relaxed">{{ project.description }}</p>

              <!-- Impact metrics -->
              <div class="grid grid-cols-2 gap-3 mb-6">
                <div
                  v-for="impact in project.impact"
                  :key="impact.metric"
                  class="text-center bg-gray-50 rounded-lg p-3"
                >
                  <div class="text-lg font-bold text-blue-600">{{ impact.metric }}</div>
                  <div class="text-xs text-gray-600">{{ impact.description }}</div>
                </div>
              </div>

              <!-- Services AMOA -->
              <div class="mb-6">
                <h4 class="font-semibold text-gray-900 mb-3">Services AMOA :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="service in project.services"
                    :key="service"
                    class="flex items-center space-x-2 text-sm text-gray-600"
                  >
                    <div class="w-1.5 h-1.5 bg-blue-500 rounded-full flex-shrink-0"></div>
                    <span>{{ service }}</span>
                  </li>
                </ul>
              </div>

              <!-- CTA -->
              <!-- <Link
                :href="`/projets/${project.id}`"
                class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-colors duration-300"
              >
                Voir le projet complet
              </Link> -->
            </div>
          </div>
        </div>
      </section>

      <!-- Processus AMOA -->
      <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Notre Processus AMOA</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              Une méthodologie éprouvée en 4 étapes pour garantir le succès de vos projets
            </p>
          </div>

          <div class="grid lg:grid-cols-4 gap-8">
            <div
              v-for="(step, index) in process"
              :key="step.step"
              class="relative text-center"
            >
              <!-- Connector line -->
              <div
                v-if="index < process.length - 1"
                class="hidden lg:block absolute top-8 left-full w-full h-0.5 bg-white/20 transform translate-x-4"
              ></div>

              <!-- Step circle -->
              <div class="w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg relative z-10">
                {{ step.step }}
              </div>

              <h3 class="text-lg font-bold mb-2">{{ step.title }}</h3>
              <p class="text-sm opacity-90 mb-4">{{ step.description }}</p>
              <p class="text-xs bg-white/20 px-2 py-1 rounded-full inline-block mb-4">{{ step.duration }}</p>

              <!-- Deliverables -->
              <div class="text-left">
                <h4 class="text-sm font-semibold mb-2">Livrables :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="deliverable in step.deliverables"
                    :key="deliverable"
                    class="text-xs opacity-80 flex items-center space-x-2"
                  >
                    <CheckIcon class="w-3 h-3 flex-shrink-0" />
                    <span>{{ deliverable }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Secteurs d'intervention -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Secteurs d'Intervention</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Une expertise sectorielle reconnue dans les domaines stratégiques
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
              v-for="sector in sectors"
              :key="sector.name"
              class="text-center bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            >
              <div :class="[
                'w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4',
                sector.color === 'red' ? 'bg-red-100' :
                sector.color === 'orange' ? 'bg-orange-100' :
                sector.color === 'green' ? 'bg-green-100' :
                'bg-blue-100'
              ]">
                <DynamicIcon :name="sector.icon" :class="[
                  'w-8 h-8',
                  sector.color === 'red' ? 'text-red-600' :
                  sector.color === 'orange' ? 'text-orange-600' :
                  sector.color === 'green' ? 'text-green-600' :
                  'text-blue-600'
                ]" />
              </div>

              <h3 class="text-lg font-bold text-gray-900 mb-2">{{ sector.name }}</h3>
              <p class="text-sm text-gray-600 mb-4">{{ sector.description }}</p>

              <div class="text-2xl font-bold text-blue-600 mb-2">{{ sector.projects }}</div>
              <div class="text-xs text-gray-500 mb-4">Projets AMOA</div>

              <!-- Exemples de projets -->
              <div class="flex flex-wrap gap-1 justify-center">
                <span
                  v-for="example in sector.examples.slice(0, 2)"
                  :key="example"
                  class="px-2 py-1 bg-gray-100 text-gray-700 text-xs rounded-full"
                >
                  {{ example }}
                </span>
                <span
                  v-if="sector.examples.length > 2"
                  class="px-2 py-1 bg-gray-100 text-gray-500 text-xs rounded-full"
                >
                  +{{ sector.examples.length - 2 }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Équipe AMOA -->


      <!-- Témoignages -->
      <!-- <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Ce que disent nos clients</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              Témoignages de nos partenaires sur nos missions AMOA
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="testimonial in testimonials"
              :key="testimonial.client"
              class="bg-white/10 rounded-xl p-8 backdrop-blur-sm border border-white/20"
            >
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center mr-4">
                  <UserIcon class="w-6 h-6 text-white" />
                </div>
                <div>
                  <h4 class="font-bold text-lg">{{ testimonial.client }}</h4>
                  <p class="text-sm opacity-75">{{ testimonial.author }} - {{ testimonial.role }}</p>
                </div>
              </div>

              <blockquote class="text-lg leading-relaxed mb-4 opacity-90">
                "{{ testimonial.content }}"
              </blockquote>

              <div class="flex items-center justify-between">
                <span class="text-sm bg-white/20 px-3 py-1 rounded-full">{{ testimonial.project }}</span>
                <div class="flex space-x-1">
                  <StarIcon
                    v-for="i in testimonial.rating"
                    :key="i"
                    class="w-4 h-4 text-yellow-400 fill-current"
                  />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- CTA Final -->
      <section class="py-20 bg-gradient-to-r from-blue-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-4xl font-bold mb-6">Prêt à Lancer Votre Projet ?</h2>
          <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
            Bénéficiez de notre expertise AMOA pour piloter votre transformation digitale avec 99% de taux de satisfaction
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/contact"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105"
            >
              Demander un devis AMOA
            </Link>
            <Link
              href="/projets"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-800 px-8 py-4 rounded-lg font-semibold transition-all duration-300"
            >
              Voir tous nos projets
            </Link>
          </div>
        </div>
      </section>

      <!-- Footer -->
      <Footer />
    </div>
  </template>

  <script setup>
  import { ref } from 'vue'
  import { Head, Link } from '@inertiajs/vue3'
  import {
    ChevronDownIcon,
    CheckIcon,
    ChartBarIcon,
    UserIcon,
    StarIcon
  } from '@heroicons/vue/24/outline'

  // Components
  import Navigation from '@/Components/Layout/Navigation.vue'
  import Footer from '@/Components/Layout/Footer.vue'
  import CounterAnimation from '@/Components/UI/CounterAnimation.vue'
  import DynamicIcon from '@/Components/UI/DynamicIcon.vue'

  // Props
  const props = defineProps({
    stats: Array,
    featuredProjects: Array,
    expertise: Array,
    sectors: Array,
    process: Array,
    team: Array,
    testimonials: Array,
    meta: Object
  })
  </script>
