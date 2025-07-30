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
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-purple-600 via-indigo-700 to-blue-800">
        <!-- Background biometric pattern -->
        <div class="absolute inset-0 opacity-5">
          <div class="absolute top-20 left-20 w-40 h-40 border-4 border-white rounded-full"></div>
          <div class="absolute top-40 right-40 w-32 h-32 border-2 border-white rounded-full"></div>
          <div class="absolute bottom-40 left-40 w-24 h-24 border-2 border-white rounded-full"></div>
          <div class="absolute bottom-20 right-20 w-36 h-36 border-4 border-white rounded-full"></div>
        </div>

        <!-- Background fingerprint -->
        <div class="absolute top-8 right-8 text-9xl font-black opacity-5 select-none text-white">👤</div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="max-w-4xl mx-auto text-center text-white">
            <div class="inline-flex items-center bg-white/20 text-white px-4 py-2 rounded-full text-sm font-semibold mb-6 backdrop-blur-sm">
              <FingerPrintIcon class="w-4 h-4 mr-2" />
              Notre expertise phare • Record Afrique de l'Ouest
            </div>

            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              Identité Numérique &<br>
              <span class="text-orange-400">Solutions Biométriques</span>
            </h1>

            <p class="text-xl mb-8 opacity-90 leading-relaxed">
              Spécialistes de l'<strong>enrôlement biométrique</strong>, du <strong>KYC automatisé</strong>
              et des solutions d'identité numérique pour l'inclusion financière et la souveraineté technologique.
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
                Démarrer un projet KYC
              </Link>

                <a
                href="#projets"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-purple-800 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
              >
                Voir SIBIS & nos réalisations
              </a>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="w-6 h-6 text-white" />
        </div>
      </section>

      <!-- Avantages Concurrentiels -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Pourquoi Choisir TECH N'CHANGE ?</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Les seuls en Afrique à maîtriser l'ensemble de la chaîne biométrique à cette échelle
            </p>
          </div>

          <div class="grid lg:grid-cols-3 gap-8">
            <div
              v-for="advantage in competitiveAdvantages"
              :key="advantage.title"
              class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            >
              <div class="flex items-center mb-6">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mr-4">
                  <DynamicIcon :name="advantage.icon" class="w-6 h-6 text-purple-600" />
                </div>
                <h3 class="text-xl font-bold text-gray-900">{{ advantage.title }}</h3>
              </div>

              <p class="text-gray-600 mb-6 leading-relaxed">{{ advantage.description }}</p>

              <ul class="space-y-2">
                <li
                  v-for="benefit in advantage.benefits"
                  :key="benefit"
                  class="flex items-center space-x-3"
                >
                  <CheckIcon class="w-4 h-4 text-green-500 flex-shrink-0" />
                  <span class="text-gray-700 text-sm">{{ benefit }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Projets de Référence -->
      <section id="projets" class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Nos Réalisations de Référence</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Des projets d'envergure qui transforment l'identité numérique en Afrique
            </p>
          </div>

          <div class="space-y-12">
            <div
              v-for="(project, index) in featuredProjects"
              :key="project.id"
              :class="[
                'grid lg:grid-cols-2 gap-12 items-center',
                index % 2 === 1 ? 'lg:grid-flow-col-dense' : ''
              ]"
            >
              <!-- Contenu -->
              <div :class="index % 2 === 1 ? 'lg:col-start-2' : ''">
                <div class="flex items-center space-x-2 mb-4">
                  <span :class="[
                    'px-3 py-1 text-xs font-semibold rounded-full',
                    project.status === 'Réalisé' ? 'bg-green-100 text-green-800' :
                    project.status === 'En cours' ? 'bg-blue-100 text-blue-800' :
                    'bg-orange-100 text-orange-800'
                  ]">
                    {{ project.status }}
                  </span>
                  <span class="text-sm text-gray-500">{{ project.period }}</span>
                </div>

                <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ project.title }}</h3>
                <p class="text-purple-600 font-semibold text-sm mb-4">{{ project.client }} • {{ project.scope }}</p>
                <p class="text-gray-600 mb-6 leading-relaxed">{{ project.description }}</p>

                <!-- Impact metrics -->
                <div class="grid grid-cols-2 gap-3 mb-6">
                  <div
                    v-for="impact in project.impact"
                    :key="impact.metric"
                    class="text-center bg-purple-50 rounded-lg p-4"
                  >
                    <div class="text-xl font-bold text-purple-600">{{ impact.metric }}</div>
                    <div class="text-xs text-gray-600">{{ impact.description }}</div>
                  </div>
                </div>

                <!-- Technologies -->
                <div class="mb-6">
                  <h4 class="font-semibold text-gray-900 mb-3">Technologies utilisées :</h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      v-for="tech in project.technologies.slice(0, 3)"
                      :key="tech"
                      class="px-3 py-1 bg-gray-100 text-gray-700 text-sm rounded-full"
                    >
                      {{ tech }}
                    </span>
                    <span
                      v-if="project.technologies.length > 3"
                      class="px-3 py-1 bg-gray-100 text-gray-500 text-sm rounded-full"
                    >
                      +{{ project.technologies.length - 3 }} autres
                    </span>
                  </div>
                </div>

                <Link
                  :href="`/projets/${project.id}`"
                  class="inline-flex items-center bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors duration-300"
                >
                  Découvrir le projet
                  <ArrowRightIcon class="w-4 h-4 ml-2" />
                </Link>
              </div>

              <!-- Image/Visual -->
              <div :class="index % 2 === 1 ? 'lg:col-start-1' : ''">
                <div class="relative">
                  <div class="aspect-w-16 aspect-h-12 rounded-xl overflow-hidden shadow-2xl">
                    <div class="bg-gradient-to-br from-purple-100 to-indigo-100 flex items-center justify-center">
                      <div class="text-center">
                        <FingerPrintIcon class="w-24 h-24 text-purple-400 mx-auto mb-4" />
                        <p class="text-purple-600 font-semibold">{{ project.title }}</p>
                      </div>
                    </div>
                  </div>
                  <!-- Stats overlay -->
                  <div class="absolute -bottom-6 -right-6 bg-white rounded-lg shadow-lg p-4">
                    <div class="text-2xl font-bold text-purple-600">
                      {{ project.impact[0]?.metric }}
                    </div>
                    <div class="text-xs text-gray-600">{{ project.impact[0]?.description }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Technologies & Solutions -->
      <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Technologies & Solutions</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              Une stack technologique complète pour tous vos besoins d'identité numérique
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="tech in technologies"
              :key="tech.category"
              class="bg-white/10 rounded-xl p-8 backdrop-blur-sm border border-white/20 hover:bg-white/20 transition-all duration-300"
            >
              <div class="flex items-center mb-6">
                <div :class="[
                  'w-12 h-12 rounded-lg flex items-center justify-center mr-4',
                  tech.color === 'blue' ? 'bg-blue-500/20' :
                  tech.color === 'purple' ? 'bg-purple-500/20' :
                  tech.color === 'green' ? 'bg-green-500/20' :
                  'bg-orange-500/20'
                ]">
                  <DynamicIcon :name="tech.icon" :class="[
                    'w-6 h-6',
                    tech.color === 'blue' ? 'text-blue-400' :
                    tech.color === 'purple' ? 'text-purple-400' :
                    tech.color === 'green' ? 'text-green-400' :
                    'text-orange-400'
                  ]" />
                </div>
                <h3 class="text-xl font-bold">{{ tech.category }}</h3>
              </div>

              <p class="text-gray-300 mb-6 leading-relaxed">{{ tech.description }}</p>

              <div class="grid md:grid-cols-2 gap-6">
                <!-- Features -->
                <div>
                  <h4 class="font-semibold mb-3 text-sm">Fonctionnalités :</h4>
                  <ul class="space-y-2">
                    <li
                      v-for="feature in tech.features"
                      :key="feature"
                      class="flex items-start space-x-2 text-sm text-gray-300"
                    >
                      <CheckIcon class="w-4 h-4 text-green-400 flex-shrink-0 mt-0.5" />
                      <span>{{ feature }}</span>
                    </li>
                  </ul>
                </div>

                <!-- Use cases -->
                <div>
                  <h4 class="font-semibold mb-3 text-sm">Cas d'usage :</h4>
                  <div class="flex flex-wrap gap-2">
                    <span
                      v-for="useCase in tech.useCases"
                      :key="useCase"
                      class="px-2 py-1 bg-white/20 text-white text-xs rounded-full"
                    >
                      {{ useCase }}
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Secteurs d'Application -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Secteurs d'Application</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Notre expertise identité numérique au service de tous les secteurs stratégiques
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div
              v-for="sector in sectors"
              :key="sector.name"
              class="text-center bg-gray-50 rounded-xl p-6 hover:bg-gray-100 transition-all duration-300 transform hover:-translate-y-2"
            >
              <div :class="[
                'w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4',
                sector.color === 'red' ? 'bg-red-100' :
                sector.color === 'green' ? 'bg-green-100' :
                sector.color === 'blue' ? 'bg-blue-100' :
                'bg-indigo-100'
              ]">
                <DynamicIcon :name="sector.icon" :class="[
                  'w-8 h-8',
                  sector.color === 'red' ? 'text-red-600' :
                  sector.color === 'green' ? 'text-green-600' :
                  sector.color === 'blue' ? 'text-blue-600' :
                  'text-indigo-600'
                ]" />
              </div>

              <h3 class="text-lg font-bold text-gray-900 mb-2">{{ sector.name }}</h3>
              <p class="text-sm text-gray-600 mb-4">{{ sector.description }}</p>

              <div class="text-2xl font-bold text-purple-600 mb-2">{{ sector.stats }}</div>

              <!-- Projets -->
              <div class="mb-4">
                <h4 class="text-xs font-semibold text-gray-900 mb-2">Projets :</h4>
                <div class="flex flex-wrap gap-1 justify-center">
                  <span
                    v-for="project in sector.projects.slice(0, 2)"
                    :key="project"
                    class="px-2 py-1 bg-gray-200 text-gray-700 text-xs rounded-full"
                  >
                    {{ project }}
                  </span>
                </div>
              </div>

              <!-- Bénéfices -->
              <div>
                <h4 class="text-xs font-semibold text-gray-900 mb-2">Bénéfices clés :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="benefit in sector.benefits.slice(0, 2)"
                    :key="benefit"
                    class="text-xs text-gray-600"
                  >
                    {{ benefit }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Processus d'Implémentation -->
      <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Processus d'Implémentation</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              Une méthodologie éprouvée en 5 étapes pour déployer votre solution d'identité numérique
            </p>
          </div>

          <div class="grid lg:grid-cols-5 gap-6">
            <div
              v-for="(step, index) in implementationProcess"
              :key="step.step"
              class="relative text-center"
            >
              <!-- Connector line -->
              <div
                v-if="index < implementationProcess.length - 1"
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
              <div class="text-left bg-white/10 rounded-lg p-3">
                <h4 class="text-xs font-semibold mb-2">Livrables :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="deliverable in step.deliverables.slice(0, 2)"
                    :key="deliverable"
                    class="text-xs opacity-80 flex items-center space-x-2"
                  >
                    <div class="w-1 h-1 bg-orange-400 rounded-full flex-shrink-0"></div>
                    <span>{{ deliverable }}</span>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Équipe d'Experts -->
      <!-- <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Équipe d'Experts</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Des spécialistes reconnus en biométrie, KYC et identité numérique
            </p>
          </div>

          <div class="grid md:grid-cols-3 gap-8">
            <div
              v-for="member in expertTeam"
              :key="member.name"
              class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2"
            >

              <div class="text-center mb-6">
                <div class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                  <UserIcon class="w-10 h-10 text-purple-600" />
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-1">{{ member.name }}</h3>
                <p class="text-purple-600 font-semibold text-sm mb-2">{{ member.role }}</p>
                <p class="text-gray-500 text-xs">{{ member.experience }}</p>
              </div>


              <div class="mb-4">
                <h4 class="text-sm font-semibold text-gray-900 mb-2">Certifications :</h4>
                <div class="flex flex-wrap gap-1">
                  <span
                    v-for="cert in member.certifications"
                    :key="cert"
                    class="px-2 py-1 bg-green-100 text-green-800 text-xs rounded-full font-medium"
                  >
                    {{ cert }}
                  </span>
                </div>
              </div>


              <div class="mb-4">
                <h4 class="text-sm font-semibold text-gray-900 mb-2">Expertise :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="specialty in member.specialties.slice(0, 3)"
                    :key="specialty"
                    class="text-xs text-gray-600 flex items-start space-x-2"
                  >
                    <CheckIcon class="w-3 h-3 text-purple-500 flex-shrink-0 mt-0.5" />
                    <span>{{ specialty }}</span>
                  </li>
                </ul>
              </div>


              <div>
                <h4 class="text-sm font-semibold text-gray-900 mb-2">Projets récents :</h4>
                <div class="flex flex-wrap gap-1">
                  <span
                    v-for="project in member.projects.slice(0, 2)"
                    :key="project"
                    class="px-2 py-1 bg-purple-100 text-purple-800 text-xs rounded-full"
                  >
                    {{ project }}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->

      <!-- Témoignages -->
      <!-- <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Témoignages Clients</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              La confiance de nos clients, notre plus belle récompense
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

              <blockquote class="text-lg leading-relaxed mb-6 opacity-90">
                "{{ testimonial.content }}"
              </blockquote>


              <div class="grid grid-cols-3 gap-3 mb-4">
                <div
                  v-for="result in testimonial.results"
                  :key="result"
                  class="text-center bg-white/20 rounded-lg p-2"
                >
                  <div class="text-sm font-bold text-orange-400">{{ result }}</div>
                </div>
              </div>

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
      <section class="py-20 bg-gradient-to-r from-purple-600 to-indigo-700 text-white">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-4xl font-bold mb-6">Prêt à Révolutionner Votre Identité Numérique ?</h2>
          <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
            Rejoignez les 20M+ d'utilisateurs qui font confiance à notre expertise biométrique et KYC
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/contact"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105"
            >
              Démarrer un projet KYC/Biométrie
            </Link>
            <Link
              href="#projets"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-purple-800 px-8 py-4 rounded-lg font-semibold transition-all duration-300"
            >
              Découvrir SIBIS en détail
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
    UserIcon,
    StarIcon,
    ArrowRightIcon,
    FingerPrintIcon
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
    technologies: Array,
    sectors: Array,
    implementationProcess: Array,
    expertTeam: Array,
    testimonials: Array,
    competitiveAdvantages: Array,
    meta: Object
  })
  </script>
