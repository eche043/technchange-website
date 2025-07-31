<template>
    <Head>
      <title>{{ meta.title }}</title>
      <meta name="description" :content="meta.description">
      <meta name="keywords" :content="meta.keywords">
    </Head>

    <div class="min-h-screen bg-white">
      <!-- Popup d'information conditionnel -->
      <NewsPopup
        v-if="shouldShowPopup"
        :news="newsPopup"
        @close="hidePopup"
      />

      <!-- Navigation -->
      <Navigation />

      <!-- Hero Section -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden">
        <!-- Background gradient -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-600 via-blue-700 to-pink-600"></div>

        <!-- Background pattern -->
        <div class="absolute inset-0 opacity-10">
          <div class="absolute top-20 left-20 w-32 h-32 bg-white rounded-full animate-pulse"></div>
          <div class="absolute bottom-40 right-32 w-24 h-24 bg-orange-400 rounded-full animate-bounce"></div>
          <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-white rounded-full animate-pulse delay-1000"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Contenu principal -->
            <div class="text-white">
              <div class="animate-fade-in-up">
                <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                  Accélérez votre
                  <span class="text-orange-400">transformation numérique</span>
                  avec un partenaire de confiance
                </h1>

                <p class="text-xl mb-8 opacity-90 leading-relaxed">
                  TECH N'CHANGE, cabinet de conseil ivoirien de premier plan, accompagne les entreprises et administrations dans leur transition digitale depuis 2017.
                </p>

                <!-- Statistiques rapides -->
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
                <div class="flex flex-col sm:flex-row gap-4">
                  <Link
                    href="/services"
                    class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center"
                  >
                    Découvrir nos services
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

            <!-- Illustration -->
            <div class="animate-slide-in-right delay-300">
              <div class="relative">
                <div class="w-full h-96 bg-white/10 rounded-2xl backdrop-blur-sm flex items-center justify-center border border-white/20">
                  <div class="text-center text-white">
                    <svg class="w-24 h-24 mx-auto mb-4 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                      <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <p class="text-lg font-semibold">Innovation au service du changement</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="w-6 h-6 text-white" />
        </div>
      </section>

      <!-- Section AMOA - 60% de l'activité -->
      <section class="py-20 bg-blue-600 text-white relative overflow-hidden">
        <!-- Background percentage -->
        <div class="absolute top-8 right-8 text-9xl font-black opacity-10 select-none">60%</div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <span class="inline-block px-4 py-2 bg-white/20 rounded-full text-sm font-semibold mb-6">
                Notre cœur de métier
              </span>
              <h2 class="text-4xl font-bold mb-6">
                AMOA & Conseil Stratégique
              </h2>
              <p class="text-xl mb-8 opacity-90">
                <strong>60% de notre activité</strong> est dédiée à l'assistance à maîtrise d'ouvrage.
                Nous accompagnons les transformations digitales les plus complexes avec une expertise reconnue depuis 8 ans.
              </p>

              <!-- Projets AMOA -->
              <div class="space-y-3 mb-8">
                <h3 class="text-lg font-semibold mb-4">Projets AMOA en cours :</h3>
                <div
                  v-for="project in services[0].projects"
                  :key="project"
                  class="flex items-center space-x-3"
                >
                  <CheckCircleIcon class="w-5 h-5 text-orange-400 flex-shrink-0" />
                  <span>{{ project }}</span>
                </div>
              </div>

              <Link
                href="/services/amoa"
                class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 inline-block"
              >
                Découvrir notre expertise AMOA
              </Link>
            </div>

            <!-- Stats AMOA -->
            <div class="grid grid-cols-2 gap-6">
              <div class="bg-white/10 rounded-xl p-6 backdrop-blur-sm">
                <div class="text-3xl font-bold text-orange-400 mb-2">150+</div>
                <div class="text-sm">Projets AMOA pilotés</div>
              </div>
              <div class="bg-white/10 rounded-xl p-6 backdrop-blur-sm">
                <div class="text-3xl font-bold text-orange-400 mb-2">4</div>
                <div class="text-sm">Consultants AMOA Senior</div>
              </div>
              <div class="bg-white/10 rounded-xl p-6 backdrop-blur-sm">
                <div class="text-3xl font-bold text-orange-400 mb-2">8</div>
                <div class="text-sm">Années d'expertise</div>
              </div>
              <div class="bg-white/10 rounded-xl p-6 backdrop-blur-sm">
                <div class="text-3xl font-bold text-orange-400 mb-2">20M+</div>
                <div class="text-sm">Utilisateurs impactés</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Services -->
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
              <!-- Card principale -->
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

                <!-- Icône -->
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

      <!-- Section digiTRANS - Solutions Transport (NOUVELLE) -->
      <section id="digitrans" class="py-20 bg-gradient-to-r from-orange-500 to-red-600 text-white">
        <div class="container mx-auto px-6">
          <!-- Header avec awards -->
          <div class="text-center mb-16">
            <div class="flex justify-center space-x-4 mb-6">
              <div class="bg-white/20 rounded-full px-4 py-2 backdrop-blur-sm">
                <span class="text-sm font-semibold">🏆 Lauréat France/Afrique 2020</span>
              </div>
              <div class="bg-white/20 rounded-full px-4 py-2 backdrop-blur-sm">
                <span class="text-sm font-semibold">🏆 Awards Mobilité CIV</span>
              </div>
            </div>

            <h2 class="text-4xl font-bold mb-4">{{ digiTransSolutions.title }}</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">{{ digiTransSolutions.description }}</p>
          </div>

          <div class="grid lg:grid-cols-2 gap-12">
            <!-- digiTRANS B2B -->
            <div class="bg-white/10 rounded-2xl p-8 backdrop-blur-sm">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold">digiTRANS B2B</h3>
                <span class="bg-blue-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                  Entreprises
                </span>
              </div>

              <p class="text-lg opacity-90 mb-6">
                {{ digiTransSolutions.solutions[0].description }}
              </p>

              <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">-30%</div>
                  <div class="text-sm opacity-75">Coûts exploitation</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">+40%</div>
                  <div class="text-sm opacity-75">Efficacité flotte</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">12M</div>
                  <div class="text-sm opacity-75">ROI (mois)</div>
                </div>
              </div>

              <div class="space-y-2 mb-6">
                <div
                  v-for="feature in digiTransSolutions.solutions[0].features.slice(0, 3)"
                  :key="feature"
                  class="flex items-center space-x-2"
                >
                  <CheckCircleIcon class="w-5 h-5 text-green-300" />
                  <span class="text-sm">{{ feature }}</span>
                </div>
              </div>

              <a
                href="http://digitransb2b.com"
                target="_blank"
                class="inline-flex items-center bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300"
              >
                Visiter digitransb2b.com
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
              </a>
            </div>

            <!-- digiTRANS B2C -->
            <div class="bg-white/10 rounded-2xl p-8 backdrop-blur-sm">
              <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold">digiTRANS B2C</h3>
                <span class="bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">
                  Particuliers
                </span>
              </div>

              <p class="text-lg opacity-90 mb-6">
                {{ digiTransSolutions.solutions[1].description }}
              </p>

              <div class="grid grid-cols-3 gap-4 mb-6">
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">25K+</div>
                  <div class="text-sm opacity-75">Inscriptions</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">+200%</div>
                  <div class="text-sm opacity-75">Croissance</div>
                </div>
                <div class="text-center">
                  <div class="text-2xl font-bold text-yellow-300">55%</div>
                  <div class="text-sm opacity-75">Femmes</div>
                </div>
              </div>

              <div class="bg-white/10 rounded-lg p-4 mb-6">
                <h4 class="font-semibold mb-2">Démographie utilisateurs :</h4>
                <div class="text-sm space-y-1 opacity-90">
                  <div>• Âge moyen : 25-55 ans</div>
                  <div>• Secteur : Services/Administration</div>
                  <div>• Zone : Grand Abidjan</div>
                  <div>• Budget transport : 25-60k FCFA/mois</div>
                </div>
              </div>

              <a
                href="https://digitrans.com"
                target="_blank"
                class="inline-flex items-center bg-white text-orange-600 px-6 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-300"
              >
                Visiter digitrans.com
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
              </a>
            </div>
          </div>

          <!-- Expansion régionale -->
          <div class="mt-16 text-center">
            <h3 class="text-2xl font-bold mb-8">Expansion Sous-Régionale</h3>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
              <div
                v-for="country in regionalExpansion.countries"
                :key="country.name"
                class="bg-white/10 rounded-lg p-4 backdrop-blur-sm text-center"
              >
                <div class="text-3xl mb-2">{{ country.flag }}</div>
                <h4 class="font-semibold text-lg mb-1">{{ country.name }}</h4>
                <p class="text-sm opacity-75 mb-2">{{ country.partner }}</p>
                <div class="text-xs opacity-60">
                  {{ country.services.join(', ') }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section Identité Numérique - Expertise phare -->
      <section class="py-20 bg-gradient-to-r from-purple-600 to-blue-600 text-white">
        <div class="container mx-auto px-6">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <span class="inline-block px-4 py-2 bg-white/20 rounded-full text-sm font-semibold mb-6">
                Notre expertise phare
              </span>
              <h2 class="text-4xl font-bold mb-6">
                Identité Numérique & Solutions Biométriques
              </h2>
              <p class="text-xl mb-8 opacity-90">
                Spécialistes de l'enrôlement biométrique, du KYC automatisé et des solutions d'identité numérique pour l'inclusion financière.
              </p>

              <!-- Achievements -->
              <div class="grid grid-cols-2 gap-6 mb-8">
                <div class="text-center">
                  <div class="text-3xl font-bold text-orange-400 mb-1">20M+</div>
                  <div class="text-sm opacity-75">Individus enrôlés</div>
                </div>
                <div class="text-center">
                  <div class="text-3xl font-bold text-orange-400 mb-1">99.9%</div>
                  <div class="text-sm opacity-75">Précision déduplication</div>
                </div>
              </div>

              <!-- Technologies -->
              <div class="flex flex-wrap gap-2 mb-8">
                <span
                  v-for="tech in ['KYC/KYB', 'Biométrie', 'PKI', 'Inclusion Financière']"
                  :key="tech"
                  class="px-3 py-1 bg-white/20 rounded-full text-sm backdrop-blur-sm"
                >
                  {{ tech }}
                </span>
              </div>

              <Link
                href="/services/identite-numerique"
                class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 inline-block"
              >
                Découvrir nos solutions
              </Link>
            </div>

            <!-- Illustration biométrique -->
            <div class="relative">
              <div class="w-full h-80 bg-white/10 rounded-2xl backdrop-blur-sm flex items-center justify-center border border-white/20">
                <div class="text-center">
                  <FingerPrintIcon class="w-32 h-32 text-orange-400 mx-auto mb-4" />
                  <p class="text-lg font-semibold">Solutions d'identification sécurisées</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Projets phares -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Nos Réalisations Significatives</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Des projets d'envergure nationale avec un impact mesurable pour attirer les meilleurs talents
            </p>
          </div>

          <div class="grid lg:grid-cols-3 gap-8">
            <div
              v-for="project in featuredProjects"
              :key="project.id"
              class="group relative bg-white rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 overflow-hidden border border-gray-100"
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
                <div class="flex justify-between items-start mb-3">
                  <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors">
                    {{ project.title }}
                  </h3>
                  <span class="text-sm text-gray-500 font-medium">{{ project.period }}</span>
                </div>

                <p class="text-sm text-blue-600 font-semibold mb-2">{{ project.client }}</p>
                <p class="text-gray-600 text-sm mb-4 leading-relaxed">{{ project.description }}</p>

                <!-- Métriques d'impact -->
                <div class="grid grid-cols-2 gap-3 mb-4">
                  <div
                    v-for="impact in project.impact.slice(0, 4)"
                    :key="impact.metric"
                    class="text-center bg-gray-50 rounded-lg p-2"
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
                    class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full"
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

                <Link
                  :href="`/projets/${project.id}`"
                  class="block w-full text-center bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition-colors duration-300"
                >
                  Voir le projet
                </Link>
              </div>
            </div>
          </div>

          <div class="text-center mt-12">
            <Link
              href="/projets"
              class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-colors duration-300"
            >
              Voir tous nos projets
            </Link>
          </div>
        </div>
      </section>

      <!-- Section FIWARE & Gestion du Patrimoine -->
      <section id="firware" class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div>
              <div class="flex items-center mb-6">
                <img src="/images/logos/partners/fiware.png" alt="FIWARE" class="h-12 mr-4">
                <span class="px-3 py-1 bg-orange-500 text-white text-sm font-bold rounded-full">
                  MEMBRE
                </span>
              </div>

              <h2 class="text-4xl font-bold mb-6">
                Gestion du Patrimoine avec FIWARE
              </h2>
              <p class="text-xl mb-8 opacity-90">
                Membre de la fondation FIWARE, nous développons des solutions IoT conformes aux standards européens pour la gestion intelligente du patrimoine.
              </p>

              <div class="space-y-4 mb-8">
                <div class="flex items-start space-x-3">
                  <CheckCircleIcon class="w-6 h-6 text-green-400 mt-1 flex-shrink-0" />
                  <div>
                    <h4 class="font-semibold">Solutions IoT Open Source</h4>
                 <p class="text-gray-300 text-sm">Plateformes interopérables et évolutives</p>
               </div>
             </div>
             <div class="flex items-start space-x-3">
               <CheckCircleIcon class="w-6 h-6 text-green-400 mt-1 flex-shrink-0" />
               <div>
                 <h4 class="font-semibold">Projets financés par l'UE</h4>
                 <p class="text-gray-300 text-sm">Plusieurs Gxof européens</p>
               </div>
             </div>
             <div class="flex items-start space-x-3">
               <CheckCircleIcon class="w-6 h-6 text-green-400 mt-1 flex-shrink-0" />
               <div>
                 <h4 class="font-semibold">Standards européens</h4>
                 <p class="text-gray-300 text-sm">Conformité et interopérabilité</p>
               </div>
             </div>
           </div>

           <Link
             href="/services/patrimoine"
             class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-semibold transition-all duration-300 inline-block"
           >
             Explorer FIWARE
           </Link>
         </div>

         <!-- Visualisation IoT -->
         <div class="relative">
           <div class="grid grid-cols-3 gap-4">
             <div
               v-for="i in 9"
               :key="i"
               class="w-16 h-16 bg-white/10 rounded-full flex items-center justify-center relative backdrop-blur-sm border border-white/20"
               :class="{ 'animate-pulse': i % 3 === 0 }"
             >
               <div class="w-3 h-3 bg-orange-400 rounded-full"></div>
               <div
                 v-if="i % 3 === 0"
                 class="absolute inset-0 border-2 border-orange-400 rounded-full animate-ping"
               ></div>
             </div>
           </div>
           <div class="text-center mt-6">
             <p class="text-lg font-semibold">Réseau IoT Connecté</p>
             <p class="text-gray-300 text-sm">Monitoring temps réel</p>
           </div>
         </div>
       </div>
     </div>
   </section>

   <!-- Carousel des Partenaires -->
   <section class="py-16 bg-gray-50">
     <div class="container mx-auto px-6">
       <div class="text-center mb-12">
         <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Partenaires de Confiance</h2>
         <p class="text-gray-600">Ils nous font confiance pour leurs projets stratégiques</p>
       </div>

       <PartnersCarousel :partners="partners" />
     </div>
   </section>

   <!-- Section Attraction des Talents -->
   <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
     <div class="container mx-auto px-6">
       <div class="text-center mb-16">
         <h2 class="text-4xl font-bold mb-4">Rejoignez une Équipe d'Exception</h2>
         <p class="text-xl opacity-90 max-w-3xl mx-auto">
           Travaillez sur des projets d'envergure nationale et contribuez à la transformation digitale de l'Afrique
         </p>
       </div>

       <div class="grid lg:grid-cols-4 gap-8 mb-12">
        <div
            v-for="highlight in teamHighlights"
            :key="highlight.name || highlight.title"
            class="text-center bg-white/10 rounded-xl p-6 backdrop-blur-sm"
            >
            <div class="w-20 h-20 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 overflow-hidden">
                <!-- Image pour le Directeur Général -->
                <img
                v-if="highlight.role === 'Directeur Général'"
                :src="'/images/team/directeur.jpeg' || '/images/team/directeur.jpeg'"
                :alt="highlight.name"
                class="w-full h-full object-cover rounded-full"
                />
                <!-- Icône par défaut pour les autres rôles -->
                <UsersIcon
                v-else
                class="w-10 h-10 text-orange-400"
                />
            </div>
            <h3 class="text-xl font-bold mb-2">
                {{ highlight.name || highlight.title }}
            </h3>
            <p class="text-orange-400 font-semibold mb-2">
                {{ highlight.role || highlight.count }}
            </p>
            <p class="text-sm opacity-75">{{ highlight.expertise }}</p>
            </div>
       </div>


       <!-- Certifications enrichies -->
       <div class="flex flex-wrap gap-6 mb-12">
        <!-- Certifications priority = high -->
        <div
            v-for="cert in certifications.filter(c => c.priority === 'high')"
            :key="cert.title"
            class="w-full md:w-1/2 lg:w-1/3 text-center bg-white/10 rounded-lg p-6 backdrop-blur-sm border border-white/20"
        >
            <TrophyIcon class="w-12 h-12 text-yellow-400 mx-auto mb-3" />
            <h4 class="font-bold text-lg mb-2">{{ cert.title }}</h4>
            <p class="text-sm opacity-75 mb-1">{{ cert.description }}</p>
            <span class="text-xs bg-white/20 px-2 py-1 rounded-full">{{ cert.year }}</span>
        </div>

        <!-- Certifications & Memberships -->
        <!-- <div class="w-full md:w-1/2 lg:w-1/3 text-center bg-white/10 rounded-lg p-6 backdrop-blur-sm border border-white/20">
            <h4 class="font-bold text-lg mb-4">Certifications & Memberships</h4>
            <div class="flex flex-wrap justify-center gap-3">
            <span
                v-for="cert in certifications.filter(c => c.priority !== 'high')"
                :key="cert.title"
                class="bg-white/20 px-3 py-1 rounded-full text-sm"
            >
                {{ cert.title }}
            </span>
            </div>


            <div class="mt-4 text-sm opacity-75">
            <p>{{ companyInfo.legal.employees }} collaborateurs • Capital {{ companyInfo.legal.capital }}</p>
            <p>RCCM: {{ companyInfo.legal.rccm }}</p>
            </div>
        </div> -->
        </div>


       <div class="text-center">
         <Link
           href="/carrieres"
           class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105"
         >
           Découvrir nos opportunités
         </Link>
       </div>
     </div>
   </section>

   <!-- Processus d'Innovation -->
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
           v-for="(step, index) in innovationProcess"
           :key="step.step"
           class="relative text-center"
         >
           <!-- Connector line -->
           <div
             v-if="index < innovationProcess.length - 1"
             class="hidden lg:block absolute top-8 left-full w-full h-0.5 bg-blue-200 transform translate-x-4"
           ></div>

           <!-- Step circle -->
           <div class="w-16 h-16 bg-blue-600 text-white rounded-full flex items-center justify-center mx-auto mb-4 font-bold text-lg relative z-10">
             {{ step.step }}
           </div>

           <h3 class="text-lg font-bold text-gray-900 mb-2">{{ step.title }}</h3>
           <p class="text-gray-600 text-sm">{{ step.description }}</p>
         </div>
       </div>
     </div>
   </section>

   <!-- Contact/CTA final -->
   <section class="py-20 bg-gray-900 text-white">
     <div class="container mx-auto px-6 text-center">
       <h2 class="text-4xl font-bold mb-6">Transformez Votre Vision en Réalité</h2>
       <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
         Contactez-nous pour discuter de votre projet de transformation digitale
       </p>

       <div class="flex flex-col sm:flex-row gap-4 justify-center">
         <Link
           href="/contact"
           class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300"
         >
           Démarrer un projet
         </Link>
         <a
           href="tel:+22521213242047"
           class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300"
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
import { ref, onMounted, computed } from 'vue'
import { Head, Link } from '@inertiajs/vue3'
import {
 ChevronDownIcon,
 CheckCircleIcon,
 CheckIcon,
 FingerPrintIcon,
 TrophyIcon,
 UsersIcon,
 TruckIcon
} from '@heroicons/vue/24/outline'

// Components
import Navigation from '@/Components/Layout/Navigation.vue'
import Footer from '@/Components/Layout/Footer.vue'
import NewsPopup from '@/Components/Layout/NewsPopup.vue'
import PartnersCarousel from '@/Components/UI/PartnersCarousel.vue'
import CounterAnimation from '@/Components/UI/CounterAnimation.vue'
import DynamicIcon from '@/Components/UI/DynamicIcon.vue'

// Props du contrôleur
const props = defineProps({
 stats: Array,
 services: Array,
 digiTransSolutions: Object,
 regionalExpansion: Object,
 featuredProjects: Array,
 partners: Array,
 teamHighlights: Array,
 innovationProcess: Array,
 newsPopup: Object,
 certifications: Array,
 companyInfo: Object,
 vision: Object,
 meta: Object
})

// État local
const isVisible = ref(false)
const shouldShowPopup = ref(false)

// Méthodes
const hidePopup = () => {
 shouldShowPopup.value = false

 // Marquer le popup comme affiché via API
 if (props.newsPopup?.id) {
   fetch('/api/popup/mark-shown', {
     method: 'POST',
     headers: {
       'Content-Type': 'application/json',
       'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
     },
     body: JSON.stringify({
       popup_id: props.newsPopup.id
     })
   })
 }
}

const checkPopupConditions = () => {
 if (!props.newsPopup?.show) return false

 // Vérifier si déjà affiché récemment (localStorage)
 const lastShown = localStorage.getItem(`popup_${props.newsPopup.id}_last_shown`)
 if (lastShown) {
   const lastShownDate = new Date(lastShown)
   const now = new Date()
   const daysDiff = (now - lastShownDate) / (1000 * 60 * 60 * 24)

   // Afficher selon la fréquence définie
   switch (props.newsPopup.frequency) {
     case 'once_per_day':
       return daysDiff >= 1
     case 'once_per_week':
       return daysDiff >= 7
     case 'always':
       return true
     default:
       return false
   }
 }

 return true // Première fois
}

// Lifecycle
onMounted(() => {
 // Animation d'entrée
 setTimeout(() => {
   isVisible.value = true
 }, 100)

 // Vérifier conditions popup après 2 secondes
 setTimeout(() => {
   shouldShowPopup.value = checkPopupConditions()
 }, 2000)
})
</script>

<style scoped>
/* Animations personnalisées */
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

/* Styles pour les boutons */
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
