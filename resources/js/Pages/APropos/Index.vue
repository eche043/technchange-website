<!-- resources/js/Pages/APropos/Index.vue -->
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
              Depuis {{ companyInfo.legal.creation_year }} • +{{ companyInfo.legal.employees }} collaborateurs
            </div>

            <h1 class="text-5xl lg:text-6xl font-bold mb-6 leading-tight">
              À Propos de <span class="text-orange-400">TECH N'CHANGE</span>
            </h1>

            <p class="text-xl mb-8 opacity-90 leading-relaxed">
              {{ vision.mission }}
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
                href="/carrieres"
                class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg text-center"
              >
                Rejoindre l'équipe
              </Link>
              <Link
                href="/contact"
                class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-blue-600 px-8 py-4 rounded-lg font-semibold transition-all duration-300 text-center backdrop-blur-sm"
              >
                Nous contacter
              </Link>
            </div>
          </div>
        </div>

        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
          <ChevronDownIcon class="w-6 h-6 text-white" />
        </div>
      </section>

      <!-- Histoire & Mission -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Histoire -->
            <div>
              <span class="inline-block px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-semibold mb-6">
                Notre Histoire
              </span>
              <h2 class="text-4xl font-bold text-gray-900 mb-6">
                Fondée en {{ companyInfo.founding_story.year }}
              </h2>
              <p class="text-xl text-gray-600 mb-6 leading-relaxed">
                {{ companyInfo.founding_story.context }}, TECH N'CHANGE accompagne les entreprises et administrations dans leur {{ companyInfo.founding_story.mission_origin.toLowerCase() }}.
              </p>
              <p class="text-gray-600 mb-8 leading-relaxed">
                Notre approche se base sur l'{{ companyInfo.founding_story.approach.toLowerCase() }}, avec un {{ companyInfo.founding_story.methodology.toLowerCase() }}.
              </p>

              <!-- Informations légales -->
              <div class="bg-gray-50 rounded-xl p-6 border border-gray-200">
                <h3 class="font-semibold text-gray-900 mb-4">Informations légales</h3>
                <div class="grid grid-cols-2 gap-4 text-sm">
                  <div>
                    <span class="text-gray-500">Forme juridique :</span>
                    <div class="font-medium">{{ companyInfo.legal.legal_form }}</div>
                  </div>
                  <div>
                    <span class="text-gray-500">Capital :</span>
                    <div class="font-medium">{{ companyInfo.legal.capital }}</div>
                  </div>
                  <div>
                    <span class="text-gray-500">RCCM :</span>
                    <div class="font-medium">{{ companyInfo.legal.rccm }}</div>
                  </div>
                  <div>
                    <span class="text-gray-500">Effectif :</span>
                    <div class="font-medium">{{ companyInfo.legal.employees }} personnes</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Illustration -->
            <div class="relative">
              <div class="w-full h-96 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center text-white">
                <div class="text-center">
                  <div class="text-6xl font-bold mb-4">{{ companyInfo.legal.creation_year }}</div>
                  <p class="text-xl font-semibold">Année de création</p>
                  <p class="text-sm opacity-90 mt-2">{{ new Date().getFullYear() - companyInfo.legal.creation_year }}+ années d'expérience</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Vision & Valeurs -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Vision & Valeurs</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              {{ vision.vision }}
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div
              v-for="value in vision.values"
              :key="value.title"
              class="bg-white rounded-xl p-6 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 border border-gray-100"
            >
              <!-- Icône -->
              <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                <DynamicIcon
                  :name="value.icon"
                  class="w-8 h-8 text-blue-600"
                />
              </div>

              <h3 class="text-xl font-bold text-gray-900 mb-3">{{ value.title }}</h3>
              <p class="text-gray-600 leading-relaxed text-sm">{{ value.description }}</p>
            </div>
          </div>
        </div>
      </section>

      <!-- Leadership -->
      <section class="py-20 bg-blue-600 text-white relative overflow-hidden">
        <!-- Background decoration -->
        <div class="absolute top-8 right-8 text-9xl font-black opacity-10 select-none">CEO</div>

        <div class="container mx-auto px-6 relative z-10">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Profil Directeur -->
            <div class="text-center lg:text-left">
                <div class="w-32 h-32 bg-white/20 rounded-full mx-auto lg:mx-0 mb-6 flex items-center justify-center backdrop-blur-sm overflow-hidden">
                    <img
                    :src="'/images/team/directeur.jpeg' || '/images/team/directeur.jpeg'"
                    :alt="leadership.director.name"
                    class="w-full h-full object-cover rounded-full"
                    @error="handleImageError"
                    />
                </div>

              <h2 class="text-3xl font-bold mb-2">{{ leadership.director.name }}</h2>
              <p class="text-xl text-orange-400 font-semibold mb-4">{{ leadership.director.role }}</p>
              <p class="text-lg opacity-90 mb-6">{{ leadership.director.expertise }}</p>
              <p class="opacity-75 leading-relaxed mb-6">{{ leadership.director.bio }}</p>

              <div class="flex flex-wrap justify-center lg:justify-start gap-4">
                <span class="px-3 py-1 bg-white/20 rounded-full text-sm backdrop-blur-sm">
                  {{ leadership.director.experience }}
                </span>
                <span class="px-3 py-1 bg-white/20 rounded-full text-sm backdrop-blur-sm">
                  {{ leadership.director.education }}
                </span>
              </div>
            </div>

            <!-- Structure organisationnelle -->
            <div>
              <h3 class="text-2xl font-bold mb-6">Structure Organisationnelle</h3>
              <div class="space-y-4">
                <div
                  v-for="(structure, key) in leadership.structure"
                  :key="key"
                  class="bg-white/10 rounded-lg p-4 backdrop-blur-sm"
                >
                  <div class="font-semibold">{{ structure }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Départements & Équipes -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Nos Équipes</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              +{{ companyInfo.legal.employees }} collaborateurs répartis en équipes spécialisées pour vous accompagner
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-8">
            <div
              v-for="department in departments"
              :key="department.name"
              class="bg-white rounded-xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100"
            >
              <!-- Header -->
              <div class="flex items-start justify-between mb-6">
                <div class="flex items-center space-x-4">
                  <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center">
                    <DynamicIcon
                      :name="department.icon"
                      class="w-8 h-8 text-blue-600"
                    />
                  </div>
                  <div>
                    <h3 class="text-xl font-bold text-gray-900">{{ department.name }}</h3>
                    <p class="text-blue-600 font-semibold">
                        {{ department.role }}
                      <!-- {{ department.count ? `${department.count} ${department.role}` : department.leads?.length + ' Chefs de projet' }} -->
                    </p>
                  </div>
                </div>
              </div>

              <!-- Description -->
              <p class="text-gray-600 mb-6 leading-relaxed">{{ department.description }}</p>

              <!-- Expertise -->
              <div class="mb-4">
                <h4 class="font-semibold text-gray-900 mb-2">Expertise :</h4>
                <p class="text-sm text-gray-600">{{ department.expertise }}</p>
              </div>

              <!-- Technologies ou Certifications -->
              <div v-if="department.technologies || department.certifications" class="mb-4">
                <h4 class="font-semibold text-gray-900 mb-2">
                  {{ department.technologies ? 'Technologies :' : 'Certifications :' }}
                </h4>
                <div class="flex flex-wrap gap-2">
                  <span
                    v-for="item in (department.technologies || department.certifications)"
                    :key="item"
                    class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full font-medium"
                  >
                    {{ item }}
                  </span>
                </div>
              </div>

              <!-- Leads pour digiTRANS -->
              <div v-if="department.leads" class="mb-4">
                <h4 class="font-semibold text-gray-900 mb-3">Équipe de direction :</h4>
                <div class="space-y-3">
                  <div
                    v-for="lead in department.leads"
                    :key="lead.name"
                    class="flex items-center space-x-3 bg-gray-50 rounded-lg p-3"
                  >
                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                      <span class="text-blue-600 font-semibold text-sm">{{ lead.name.split(' ').map(n => n[0]).join('') }}</span>
                    </div>
                    <div>
                      <div class="font-semibold text-gray-900">{{ lead.name }}</div>
                      <div class="text-sm text-gray-600">{{ lead.role }}</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Stats spéciales -->
              <div v-if="department.projects || department.achievements" class="mt-4">
                <div class="bg-orange-50 rounded-lg p-3 text-center">
                  <div class="font-semibold text-orange-800">
                    {{ department.projects || department.achievements?.join(' • ') }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Processus d'Innovation -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Processus Design Thinking</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Une méthodologie agile éprouvée pour transformer vos idées en solutions opérationnelles
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

              <!-- Icon -->
              <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center mx-auto mb-4">
                <DynamicIcon :name="step.icon" class="w-6 h-6 text-blue-600" />
              </div>

              <h3 class="text-lg font-bold text-gray-900 mb-2">{{ step.title }}</h3>
              <p class="text-gray-600 text-sm mb-3">{{ step.description }}</p>

              <!-- Durée -->
              <div class="mb-3">
                <span class="inline-flex items-center bg-gray-100 text-gray-600 px-2 py-1 rounded-full text-xs font-medium">
                  ⏱️ {{ step.duration }}
                </span>
              </div>

              <!-- Livrables -->
              <div class="text-xs text-gray-500">
                <div class="font-medium mb-1">Livrables :</div>
                <div v-for="delivrable in step.delivrables" :key="delivrable">
                  • {{ delivrable }}
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Culture d'Entreprise -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Notre Culture d'Entreprise</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
              Un environnement de travail stimulant qui favorise l'épanouissement professionnel
            </p>
          </div>

          <div class="grid lg:grid-cols-3 gap-8">
            <div
              v-for="aspect in culture"
              :key="aspect.title"
              class="text-center bg-gray-50 rounded-xl p-8 hover:bg-gray-100 transition-colors duration-300"
            >
              <div class="w-16 h-16 bg-orange-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                <DynamicIcon name="UsersIcon" class="w-8 h-8 text-orange-600" />
              </div>

              <h3 class="text-xl font-bold text-gray-900 mb-4">{{ aspect.title }}</h3>
              <p class="text-gray-600 mb-6 leading-relaxed">{{ aspect.description }}</p>

              <ul class="space-y-2">
                <li
                  v-for="feature in aspect.features"
                  :key="feature"
                  class="flex items-center justify-center space-x-2 text-sm text-gray-600"
                >
                  <CheckIcon class="w-4 h-4 text-green-500 flex-shrink-0" />
                  <span>{{ feature }}</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <!-- Certifications & Awards -->
      <section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600 text-white">
        <div class="container mx-auto px-6">
          <div class="text-center mb-16">
            <h2 class="text-4xl font-bold mb-6">Nos Certifications & Reconnaissances</h2>
            <p class="text-xl opacity-90 max-w-3xl mx-auto">
              Une expertise reconnue par nos pairs et partenaires internationaux
            </p>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12">
            <div
              v-for="cert in certifications.filter(c => c.priority === 'high')"
              :key="cert.title"
              class="text-center bg-white/10 rounded-lg p-6 backdrop-blur-sm border border-white/20"
            >
              <DynamicIcon :name="cert.icon" class="w-12 h-12 text-yellow-400 mx-auto mb-3" />
              <h4 class="font-bold text-lg mb-2">{{ cert.title }}</h4>
              <p class="text-sm opacity-75 mb-1">{{ cert.description }}</p>
              <span class="text-xs bg-white/20 px-2 py-1 rounded-full">{{ cert.year }}</span>
            </div>

            <!-- Autres certifications -->
            <div class="text-center bg-white/10 rounded-lg p-6 backdrop-blur-sm border border-white/20 lg:col-span-3">
              <h4 class="font-bold text-lg mb-4">Autres Certifications & Memberships</h4>
              <div class="flex flex-wrap justify-center gap-3">
                <span
                  v-for="cert in certifications.filter(c => c.priority !== 'high')"
                  :key="cert.title"
                  class="bg-white/20 px-3 py-1 rounded-full text-sm"
                >
                  {{ cert.title }}
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Ajouter après la section certifications -->
      <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">Attestations de Bonne Exécution</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Preuves tangibles de notre expertise validées par nos clients institutionnels
            </p>
            <div class="mt-4 inline-flex items-center bg-green-50 text-green-700 px-4 py-2 rounded-full text-sm font-medium">
                <DynamicIcon name="DocumentCheckIcon" class="w-4 h-4 mr-2" />
                163M+ FCFA de projets certifiés
            </div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-2 gap-8 max-w-6xl mx-auto">
            <div
                v-for="abe in attestations"
                :key="abe.title"
                class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-8 border border-blue-100 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-1"
            >
                <!-- Header avec statut et montant -->
                <div class="flex items-center justify-between mb-6">
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">
                    {{ abe.status }}
                </span>
                <div class="text-right">
                    <div class="text-2xl font-bold text-blue-600">
                    {{ formatAmount(abe.amount) }}
                    </div>
                    <div class="text-sm text-gray-500">{{ abe.currency }}</div>
                </div>
                </div>

                <!-- Titre et client -->
                <div class="mb-6">
                <h3 class="text-xl font-bold text-gray-900 mb-2">{{ abe.title }}</h3>
                <p class="text-blue-600 font-semibold text-sm mb-2">{{ abe.client_full }}</p>
                <p class="text-gray-600 text-sm leading-relaxed">{{ abe.description }}</p>
                </div>

                <!-- Détails du projet -->
                <div class="space-y-3 mb-6">
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Période:</span>
                    <span class="font-medium text-gray-900">{{ abe.period }}</span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Date ABE:</span>
                    <span class="font-medium text-gray-900">{{ abe.date_emission }}</span>
                </div>
                <div class="flex items-center justify-between text-sm">
                    <span class="text-gray-500">Type:</span>
                    <span class="font-medium text-gray-900">{{ abe.type }}</span>
                </div>
                </div>

                <!-- Résultats (si disponibles) -->
                <div v-if="abe.results" class="mb-6">
                <h4 class="text-sm font-semibold text-gray-900 mb-3">Résultats obtenus :</h4>
                <ul class="space-y-2">
                    <li
                    v-for="result in abe.results"
                    :key="result"
                    class="flex items-start space-x-2 text-sm text-gray-600"
                    >
                    <CheckIcon class="w-4 h-4 text-green-500 flex-shrink-0 mt-0.5" />
                    <span>{{ result }}</span>
                    </li>
                </ul>
                </div>

                <!-- Footer avec référence -->
                <div class="pt-4 border-t border-blue-200">
                <div class="flex items-center justify-between">
                    <div class="text-xs text-gray-500">
                    Réf: {{ abe.reference }}
                    </div>
                    <div class="flex items-center space-x-2">
                    <DynamicIcon name="DocumentIcon" class="w-4 h-4 text-blue-500" />
                    <span class="text-xs text-blue-600 font-medium">ABE Officielle</span>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <!-- Résumé des ABE -->
            <div class="mt-16 bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-8">
            <div class="text-center">
                <h3 class="text-2xl font-bold text-gray-900 mb-4">Bilan des Attestations</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-1">6</div>
                    <div class="text-sm text-gray-600">ABE Délivrées</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-1">413M+</div>
                    <div class="text-sm text-gray-600">FCFA Validés</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-1">100%</div>
                    <div class="text-sm text-gray-600">Projets Réussis</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-1">4</div>
                    <div class="text-sm text-gray-600">Clients Institutionnels</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

      <!-- Localisation -->
      <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-6">
          <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Informations de contact -->
            <div>
              <h2 class="text-4xl font-bold text-gray-900 mb-6">Nous Trouver</h2>
              <div class="space-y-6">
                <!-- Adresse -->
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <DynamicIcon name="BuildingOfficeIcon" class="w-6 h-6 text-blue-600" />
                  </div>
                  <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Siège social</h3>
                    <p class="text-gray-600">{{ location.headquarters.address }}</p>
                    <p class="text-gray-600">{{ location.headquarters.postal }}</p>
                    <p class="text-gray-600">{{ location.headquarters.city }}, {{ location.headquarters.country }}</p>
                  </div>
                </div>

                <!-- Téléphone -->
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <DynamicIcon name="TrophyIcon" class="w-6 h-6 text-green-600" />
                  </div>
                  <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Téléphone</h3>
                    <div v-for="phone in location.contact.phone" :key="phone">
                      <a :href="`tel:${phone.replace(/\s/g, '')}`" class="text-blue-600 hover:text-blue-700">{{ phone }}</a>
                    </div>
                  </div>
                </div>

                <!-- Email -->
                <div class="flex items-start space-x-4">
                  <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                    <DynamicIcon name="GlobeEuropeAfricaIcon" class="w-6 h-6 text-purple-600" />
                  </div>
                  <div>
                    <h3 class="font-semibold text-gray-900 mb-1">Contact</h3>
                    <a :href="`mailto:${location.contact.email}`" class="text-blue-600 hover:text-blue-700">{{ location.contact.email }}</a>
                    <p class="text-gray-600">{{ location.contact.website }}</p>
                  </div>
                </div>
              </div>
            </div>

            <!-- Carte ou illustration -->
            <!-- Google Maps -->
            <div class="relative">
                <div class="w-full h-96 rounded-2xl overflow-hidden shadow-lg">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8947123456789!2d-3.9856294067463947!3d5.370228022616372!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNcKwMjInMTIuOCJOIDPCsDU5JzA4LjMiVw!5e0!3m2!1sfr!2sci!4v1640995200000!5m2!1sfr!2sci"
                    width="100%"
                    height="100%"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="rounded-2xl"
                ></iframe>
                </div>

                <!-- Overlay avec informations -->
                <div class="absolute bottom-4 left-4 bg-white/90 backdrop-blur-sm rounded-lg p-4 shadow-lg">
                <div class="flex items-center space-x-2">
                    <div class="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                    <div>
                    <p class="font-semibold text-gray-900 text-sm">TECH N'CHANGE</p>
                    <p class="text-xs text-gray-600">Cocody, Riviera Attoban</p>
                    </div>
                </div>
                </div>

                <!-- Bouton pour ouvrir dans Google Maps -->
                <div class="absolute top-4 right-4">

                   <a href="https://maps.google.com/?q=Cocody,+Riviera+Attoban,+Abidjan,+Côte+d'Ivoire"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="bg-white/90 hover:bg-white backdrop-blur-sm rounded-lg p-2 shadow-lg transition-all duration-300 group"
                    title="Ouvrir dans Google Maps"
                >
                    <DynamicIcon name="ArrowTopRightOnSquareIcon" class="w-5 h-5 text-gray-600 group-hover:text-blue-600" />
                </a>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="py-20 bg-gray-900 text-white">
        <div class="container mx-auto px-6 text-center">
          <h2 class="text-4xl font-bold mb-6">Rejoignez l'Aventure TECH N'CHANGE</h2>
          <p class="text-xl opacity-90 mb-8 max-w-3xl mx-auto">
            Participez à la transformation digitale de l'Afrique en rejoignant une équipe passionnée et innovante
          </p>

          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <Link
              href="/carrieres"
              class="bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105 hover:shadow-lg"
            >
              Voir les postes ouverts
            </Link>
            <Link
              href="/contact"
              class="bg-white/10 border-2 border-white text-white hover:bg-white hover:text-gray-900 px-8 py-4 rounded-lg font-semibold transition-all duration-300 backdrop-blur-sm"
            >
              Nous contacter
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
import { ref, onMounted } from 'vue'
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
  companyInfo: Object,
  vision: Object,
  leadership: Object,
  departments: Array,
  innovationProcess: Array,
  stats: Array,
  certifications: Array,
  attestations: Array,
  culture: Object,
  location: Object,
  meta: Object
})

// État local
const isVisible = ref(false)

// Méthodes
const formatAmount = (amount) => {
  if (!amount || amount === 'Montant confidentiel') {
    return 'Confidentiel';
  }

  // Convertir en nombre et formater avec espaces
  const numAmount = parseInt(amount.replace(/\s/g, ''));

  if (numAmount >= 1000000) {
    return (numAmount / 1000000).toFixed(1) + 'M';
  } else if (numAmount >= 1000) {
    return (numAmount / 1000).toFixed(0) + 'K';
  }

  return numAmount.toLocaleString('fr-FR');
}

const getStatusBadgeClass = (status) => {
  const statusClasses = {
    'Réalisé': 'bg-green-100 text-green-800',
    'En cours': 'bg-blue-100 text-blue-800',
    'En attente': 'bg-yellow-100 text-yellow-800',
    'Validé': 'bg-green-100 text-green-800'
  };

  return statusClasses[status] || 'bg-gray-100 text-gray-800';
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

  /* Responsive improvements */
  @media (max-width: 768px) {
    .animate-slide-in-right {
      animation: fade-in-up 0.8s ease-out;
    }
  }
  </style>
