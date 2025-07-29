<!-- resources/js/Pages/Carrieres/Index.vue -->
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
            {{ openPositions.length }} postes ouverts • Rejoignez l'aventure
          </div>

          <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
            Construisez l'<span class="text-orange-400">Afrique Digitale</span> avec Nous
          </h1>

          <p class="text-xl mb-8 opacity-90 leading-relaxed">
            Rejoignez une équipe de 28 experts passionnés qui transforment la société africaine avec des projets d'envergure nationale touchant plus de 20 millions de vies.
          </p>

          <!-- Statistiques RH -->
          <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
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
            <a
              href="#postes-ouverts"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center"
            >
              Voir les postes ouverts
            </a>
            <a
              href="#culture"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 text-center backdrop-blur-sm"
            >
              Notre culture
            </a>
          </div>
        </div>
      </div>

      <!-- Scroll indicator -->
      <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <ChevronDownIcon class="w-6 h-6 text-white" />
      </div>
    </section>

    <!-- Départements qui Recrutent -->
    <section class="py-16 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Départements qui Recrutent</h2>
          <p class="text-gray-600">Découvrez les équipes en expansion</p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
          <div
            v-for="dept in departments"
            :key="dept.name"
            class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 text-center border border-gray-100"
          >
            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
              <DynamicIcon :name="dept.icon" class="w-8 h-8 text-blue-600" />
            </div>

            <h3 class="font-bold text-gray-900 mb-2">{{ dept.name }}</h3>
            <p class="text-sm text-gray-600 mb-3">{{ dept.description }}</p>

            <div class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-semibold">
              {{ dept.open_positions }} poste{{ dept.open_positions > 1 ? 's' : '' }} ouvert{{ dept.open_positions > 1 ? 's' : '' }}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Postes Ouverts -->
    <section id="postes-ouverts" class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Nos Postes Ouverts</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Rejoignez des projets d'envergure nationale avec des technologies de pointe et une équipe exceptionnelle
          </p>
        </div>

        <!-- Filtres -->
        <div class="flex flex-wrap justify-center gap-4 mb-12">
          <button
            v-for="category in ['Tous', 'Conseil & Stratégie', 'Développement', 'Solutions Spécialisées', 'Transport & Mobilité']"
            :key="category"
            @click="selectedCategory = category"
            :class="[
              'px-4 py-2 rounded-lg font-medium transition-all duration-300 text-sm',
              selectedCategory === category
                ? 'bg-blue-600 text-white shadow-lg'
                : 'bg-gray-100 text-gray-600 hover:bg-blue-50'
            ]"
          >
            {{ category }}
          </button>
        </div>

        <!-- Grille des postes -->
        <div class="grid lg:grid-cols-2 gap-8">
          <div
            v-for="position in filteredPositions"
            :key="position.id"
            class="bg-white rounded-xl border border-gray-200 hover:border-blue-300 shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden"
          >
            <!-- Header -->
            <div class="p-6 border-b border-gray-100">
              <div class="flex items-start justify-between mb-4">
                <div class="flex items-center space-x-3">
                  <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center">
                    <DynamicIcon :name="position.icon" class="w-6 h-6 text-blue-600" />
                  </div>
                  <div>
                    <h3 class="text-xl font-bold text-gray-900">{{ position.title }}</h3>
                    <p class="text-blue-600 font-semibold">{{ position.department }}</p>
                  </div>
                </div>

                <!-- Badges -->
                <div class="flex flex-col items-end space-y-2">
                  <span v-if="position.featured" class="bg-orange-100 text-orange-800 px-2 py-1 rounded-full text-xs font-semibold">
                    ⭐ Prioritaire
                  </span>
                  <span class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-xs font-semibold">
                    {{ position.positions_available }} poste{{ position.positions_available > 1 ? 's' : '' }}
                  </span>
                </div>
              </div>

              <!-- Infos clés -->
              <div class="grid grid-cols-2 gap-4 text-sm">
                <div class="flex items-center space-x-2">
                  <DynamicIcon name="BuildingOfficeIcon" class="w-4 h-4 text-gray-400" />
                  <span class="text-gray-600">{{ position.location }}</span>
                </div>
                <div class="flex items-center space-x-2">
                  <DynamicIcon name="ClockIcon" class="w-4 h-4 text-gray-400" />
                  <span class="text-gray-600">{{ position.experience }}</span>
                </div>
                <div class="flex items-center space-x-2">
                  <DynamicIcon name="TrophyIcon" class="w-4 h-4 text-gray-400" />
                  <span class="text-gray-600">{{ position.type }}</span>
                </div>
                <div class="flex items-center space-x-2">
                  <DynamicIcon name="SparklesIcon" class="w-4 h-4 text-gray-400" />
                  <span class="text-green-600 font-semibold">{{ position.salary_range }}</span>
                </div>
              </div>
            </div>

            <!-- Contenu -->
            <div class="p-6">
              <!-- Description -->
              <p class="text-gray-600 mb-4 leading-relaxed">{{ position.description }}</p>

              <!-- Compétences requises -->
              <div class="mb-4">
                <h4 class="font-semibold text-gray-900 mb-2">Compétences clés :</h4>
                <div class="flex flex-wrap gap-2">
                  <span
                    v-for="skill in position.skills.slice(0, 4)"
                    :key="skill"
                    class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full font-medium"
                  >
                    {{ skill }}
                  </span>
                  <span
                    v-if="position.skills.length > 4"
                    class="px-2 py-1 bg-gray-100 text-gray-600 text-xs rounded-full"
                  >
                    +{{ position.skills.length - 4 }}
                  </span>
                </div>
              </div>

              <!-- Avantages -->
              <div class="mb-6">
                <h4 class="font-semibold text-gray-900 mb-2">Avantages :</h4>
                <ul class="space-y-1">
                  <li
                    v-for="benefit in position.benefits.slice(0, 3)"
                    :key="benefit"
                    class="flex items-center space-x-2 text-sm text-gray-600"
                  >
                    <CheckIcon class="w-3 h-3 text-green-500 flex-shrink-0" />
                    <span>{{ benefit }}</span>
                  </li>
                </ul>
              </div>

              <!-- Date limite -->
              <div class="flex items-center justify-between">
                <div class="text-sm text-gray-500">
                  Candidatures jusqu'au {{ formatDate(position.deadline) }}
                </div>
                <Link
                  :href="`/carrieres/${position.id}`"
                  class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-300"
                >
                  Postuler
                </Link>
              </div>
            </div>
          </div>
        </div>

        <!-- Message si aucun poste -->
        <div v-if="filteredPositions.length === 0" class="text-center py-12">
          <div class="text-gray-400 mb-4">
            <DynamicIcon name="UsersIcon" class="w-16 h-16 mx-auto" />
          </div>
          <h3 class="text-xl font-semibold text-gray-900 mb-2">Aucun poste dans cette catégorie</h3>
          <p class="text-gray-600">Essayez une autre catégorie ou revenez bientôt pour de nouvelles opportunités.</p>
        </div>
      </div>
    </section>

    <!-- Avantages Employés -->
    <section class="py-20 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Pourquoi Nous Rejoindre ?</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Des avantages exceptionnels pour attirer et fidéliser les meilleurs talents
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            v-for="benefit in benefits"
            :key="benefit.title"
            class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100"
          >
            <!-- Icône -->
            <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mb-6">
              <DynamicIcon :name="benefit.icon" class="w-8 h-8 text-orange-600" />
            </div>

            <h3 class="text-xl font-bold text-gray-900 mb-3">{{ benefit.title }}</h3>
            <p class="text-gray-600 mb-4 leading-relaxed">{{ benefit.description }}</p>

            <!-- Features -->
            <ul class="space-y-2">
              <li
                v-for="feature in benefit.features"
                :key="feature"
                class="flex items-start space-x-2 text-sm text-gray-600"
              >
                <CheckIcon class="w-4 h-4 text-green-500 mt-0.5 flex-shrink-0" />
                <span>{{ feature }}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Processus de Recrutement -->
    <section class="py-20 bg-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Processus de Recrutement</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Un processus transparent et équitable en 6 étapes pour vous permettre de donner le meilleur de vous-même
          </p>
        </div>

        <div class="grid lg:grid-cols-6 gap-6">
          <div
            v-for="(step, index) in recruitmentProcess"
            :key="step.step"
            class="relative"
          >
            <!-- Connector line -->
            <div
              v-if="index < recruitmentProcess.length - 1"
              class="hidden lg:block absolute top-8 left-20 w-full h-0.5 bg-blue-200 transform translate-x-4"
            ></div>

            <!-- Step -->
            <div class="text-center relative z-10">
              <!-- Step number -->
              <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg">
                {{ step.step }}
              </div>

              <!-- Icon -->
              <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                <DynamicIcon :name="step.icon" class="w-6 h-6 text-blue-600" />
              </div>

              <h3 class="font-bold text-gray-900 mb-2">{{ step.title }}</h3>
              <p class="text-sm text-gray-600 mb-2">{{ step.description }}</p>
              <div class="text-xs text-orange-600 font-semibold">{{ step.duration }}</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Témoignages Employés -->
    <section class="py-20 bg-blue-600 text-white">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold mb-6">Ce que disent nos Collaborateurs</h2>
          <p class="text-xl opacity-90 max-w-3xl mx-auto">
            Découvrez l'expérience de nos talents qui façonnent l'avenir digital de l'Afrique
          </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8">
          <div
            v-for="testimonial in testimonials"
            :key="testimonial.name"
            class="bg-white/10 rounded-xl p-6 backdrop-blur-sm border border-white/20"
          >
            <!-- Stars -->
            <div class="flex items-center mb-4">
              <div class="flex">
                <svg
                  v-for="i in 5"
                  :key="i"
                  :class="[
                    'w-4 h-4',
                    i <= testimonial.rating ? 'text-yellow-400' : 'text-white/30'
                  ]"
                  fill="currentColor"
                  viewBox="0 0 20 20"
                >
                  <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                </svg>
              </div>
            </div>

            <!-- Content -->
            <blockquote class="text-white/90 mb-6 leading-relaxed">
              "{{ testimonial.content }}"
            </blockquote>

            <!-- Author -->
            <div class="flex items-center">
              <div class="w-12 h-12 bg-white/20 rounded-full flex items-center justify-center">
                <span class="text-white font-semibold">{{ testimonial.name.charAt(0) }}</span>
              </div>
              <div class="ml-4">
                <div class="font-semibold text-white">{{ testimonial.name }}</div>
                <div class="text-sm text-white/70">{{ testimonial.role }}</div>
                <div class="text-xs text-white/50">{{ testimonial.experience }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Culture d'Entreprise -->
    <section id="culture" class="py-20 bg-gray-50">
      <div class="container mx-auto px-6">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Culture d'Entreprise</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Les valeurs qui nous unissent et nous poussent à exceller ensemble
          </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div
            v-for="value in culture"
            :key="value.title"
            class="text-center bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300"
          >
            <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
              <DynamicIcon :name="value.icon" class="w-8 h-8 text-blue-600" />
            </div>

            <h3 class="text-xl font-bold text-gray-900 mb-4">{{ value.title }}</h3>
            <p class="text-gray-600 leading-relaxed">{{ value.description }}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gray-900 text-white">
      <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-6">Prêt à Transformer l'Afrique avec Nous ?</h2>
        <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
          Rejoignez une équipe passionnée qui façonne l'avenir digital du continent africain avec des projets d'envergure exceptionnelle.
        </p>

        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <a
            href="#postes-ouverts"
            class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
          >
            Consulter nos offres
          </a>
          <Link
            href="/contact"
            class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
          >
            Candidature spontanée
          </Link>
        </div>

        <div class="mt-8 text-gray-400">
          <p>rh@technchange.net | (+225) 27 21 32 42 47</p>
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
import DynamicIcon from '@/Components/UI/DynamicIcon.vue'

// Props
const props = defineProps({
  openPositions: Array,
  stats: Array,
  benefits: Array,
  recruitmentProcess: Array,
  testimonials: Array,
  culture: Array,
  departments: Array,
  meta: Object
})

// État local
const isVisible = ref(false)
const selectedCategory = ref('Tous')

// Postes filtrés
const filteredPositions = computed(() => {
  if (selectedCategory.value === 'Tous') {
    return props.openPositions
  }
  return props.openPositions.filter(position => position.department === selectedCategory.value)
})

// Helper pour formater les dates
const formatDate = (dateString) => {
  return new Date(dateString).toLocaleDateString('fr-FR', {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
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
/* Styles identiques aux autres pages */
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

/* Smooth scroll pour les ancres */
html {
  scroll-behavior: smooth;
}

/* Responsive improvements */
@media (max-width: 768px) {
  .animate-slide-in-right {
    animation: fade-in-up 0.8s ease-out;
  }
}
</style>
