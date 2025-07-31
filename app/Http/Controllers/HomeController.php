<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        // Statistiques principales (enrichies)
        $stats = [
            [
                'label' => 'Années d\'expérience',
                'value' => 8,
                'suffix' => '+',
                'description' => 'Depuis 2017'
            ],
            /* [
                'label' => 'Projets réalisés',
                'value' => 250,
                'suffix' => '+',
                'description' => 'Tous secteurs'
            ], */
            [
                'label' => 'Clients satisfaits',
                'value' => 50,
                'suffix' => '+',
                'description' => 'Entreprises & Admin'
            ],
            [
                'label' => 'Experts mobilisés',
                'value' => 20,
                'suffix' => '+',
                'description' => 'Équipe pluridisciplinaire'
            ]
        ];

        // Services principaux avec digiTRANS ajouté
        $services = [
            [
                'id' => 'amoa',
                'title' => 'AMOA & Conseil Stratégique',
                'subtitle' => '60% de notre activité',
                'description' => 'Assistance à maîtrise d\'ouvrage pour vos projets de transformation digitale avec une expertise reconnue depuis 8 ans.',
                'icon' => 'ChartBarIcon',
                'percentage' => 60,
                'color' => 'primary',
                'features' => [
                    'Schémas directeurs SI',
                    'Gouvernance numérique',
                    'Conduite du changement',
                    'Pilotage de projets complexes'
                ],
                'projects' => [
                    'BOOST CMU (2024-2025)',
                    'IOC Santé (2024-2025)',
                    'WURI Identification (2025)',
                    'PBF (2025)'
                ],
                'route' => 'services/amoa',
                'highlight' => true
            ],
            [
                'id' => 'identity',
                'title' => 'Identité Numérique & KYC',
                'subtitle' => 'Notre expertise phare',
                'description' => 'Solutions d\'enrôlement, identification et authentification biométrique pour l\'inclusion financière et la sécurité.',
                'icon' => 'FingerPrintIcon',
                'color' => 'secondary',
                'specialization' => true,
                'features' => [
                    'Enrôlement biométrique',
                    'KYC/KYB automatisé',
                    'PKI et certificats numériques',
                    'Inclusion financière'
                ],
                'projects' => [
                    'SIBIS (+20M enrôlés)',
                    'MIRKA',
                    'e-CMU',
                    'Auxilium'
                ],
                'achievements' => [
                    '+20 millions d\'individus enrôlés',
                    '99.9% précision déduplication',
                    'Interconnexion multi-systèmes'
                ],
                'route' => 'services/identity'
            ],
            [
                'id' => 'transport',
                'title' => 'Solutions Transport & Mobilité',
                'subtitle' => 'digiTRANS - Nos solutions phares',
                'description' => 'Éditeur de solutions logicielles pour la gestion de flotte et le covoiturage, avec plus de 25 000 utilisateurs.',
                'icon' => 'TruckIcon',
                'color' => 'accent',
                'awards' => true,
                'features' => [
                    'digiTRANS B2B - Gestion 360° de flotte',
                    'digiTRANS B2C - Covoiturage digital',
                    'Géolocalisation et tracking',
                    'Maintenance prédictive'
                ],
                'achievements' => [
                    '+25 000 inscriptions (B2C)',
                    '+200% croissance 2019-2020',
                    'Lauréat France/Afrique 2020',
                    'Awards Mobilité CIV 2020'
                ],
                'websites' => [
                    'digitransb2b.com',
                    'digitrans.com'
                ],
                'route' => '#digitrans'
            ],
            [
                'id' => 'solutions',
                'title' => 'Solutions Technologiques',
                'subtitle' => 'Innovation sur mesure',
                'description' => 'Développement d\'architectures robustes et sécurisées pour vos besoins métiers spécifiques.',
                'icon' => 'CogIcon',
                'color' => 'blue',
                'features' => [
                    'Architectures sur mesure & sécurisées',
                    'Plateformes web & mobile évolutives',
                    'API REST/JSON interopérables',
                    'Chiffrement AES-256'
                ],
                'projects' => [
                    'Orange CI Transformation',
                    'Plateformes gouvernementales',
                    'Solutions IoT industrielles'
                ],
                'route' => 'projets'
            ],
            [
                'id' => 'patrimoine',
                'title' => 'Gestion du Patrimoine FIWARE',
                'subtitle' => 'IoT & Objets Connectés',
                'description' => 'Plateformes open source d\'objets connectés conformes aux standards européens FIWARE.',
                'icon' => 'CircuitBoardIcon',
                'color' => 'dark',
                'features' => [
                    'Solutions IoT FIWARE',
                    'Gestion d\'actifs connectés',
                    'Monitoring temps réel',
                    'Standards européens'
                ],
                'projects' => [
                    'Smart Cities',
                    'Agriculture 4.0',
                    'Industrie connectée'
                ],
                'certifications' => [
                    'Membre fondation FIWARE',
                    'Projets UE financés',
                    'Standards ouverts'
                ],
                'route' => '#firware'
            ]
        ];

        // digiTRANS Solutions (nouvelle section)
        $digiTransSolutions = [
            'title' => 'digiTRANS - Nos Solutions Transport',
            'subtitle' => 'Éditeur de solutions logicielles pour la mobilité en Afrique',
            'description' => 'Au-delà de nos activités de conseil, TECH N\'CHANGE édite des solutions logicielles dans le secteur du transport, récompensées par de multiples awards.',
            'solutions' => [
                [
                    'name' => 'digiTRANS B2B',
                    'type' => 'Gestion de flotte professionnelle',
                    'description' => 'Solution de gestion 360° de flotte de véhicules (Auto, Moto, etc.) pour Entreprises et Administrations. Véritable ERP avec meilleures pratiques de gestion.',
                    'target' => 'Entreprises & Administrations',
                    'website' => 'digitransb2b.com',
                    'features' => [
                        'Géolocalisation temps réel',
                        'Maintenance prédictive',
                        'Gestion carburant',
                        'Reporting automatisé',
                        'Contrôle des coûts'
                    ],
                    'benefits' => [
                        '-30% coûts d\'exploitation',
                        '+40% efficacité flotte',
                        'ROI sous 12 mois'
                    ]
                ],
                [
                    'name' => 'digiTRANS B2C',
                    'type' => 'Covoiturage particuliers',
                    'description' => 'Plateforme 100% digitale de covoiturage pour habitants des grandes métropoles africaines. Transport innovant de particulier à particulier.',
                    'target' => 'Particuliers urbains',
                    'website' => 'digitrans.com',
                    'achievements' => [
                        '+25 000 inscriptions (Passagers/Conducteurs)',
                        '+200% croissance entre Jan 2019 et Jan 2020',
                        'Couverture Grand Abidjan',
                        'Âge moyen utilisateurs : 25-55 ans',
                        '55% femmes utilisatrices'
                    ],
                    'demographics' => [
                        'Population cible' => '~1.5 à 2M habitants',
                        'Secteur emploi' => 'Services/Administration',
                        'Budget transport' => '25 à 60k FCFA/mois',
                        'Heures de pointe' => '5h-9h / 12h-14h / 17h-20h'
                    ]
                ]
            ],
            'awards' => [
                [
                    'title' => 'Lauréat France/Afrique 2020',
                    'description' => 'Concours international avec plus de 53 pays participants',
                    'year' => '2020',
                    'category' => 'Innovation Transport'
                ],
                [
                    'title' => 'Awards de la Mobilité CIV',
                    'description' => 'Lauréat de la 2ème édition en Côte d\'Ivoire',
                    'year' => '2020',
                    'category' => 'Mobilité Urbaine'
                ]
            ],
            'expansion' => [
                'current' => 'Côte d\'Ivoire (Grand Abidjan)',
                'planned' => 'Expansion sous-régionale en cours',
                'partnerships' => [
                    'Burkina Faso' => 'BURCO SARL',
                    'Togo' => 'AFRICA TRACING',
                    'Ghana & Guinée' => 'FROTOCOM',
                    'Liberia' => 'TONBOI'
                ]
            ]
        ];

        // Expansion régionale
        $regionalExpansion = [
            'title' => 'Présence Sous-Régionale',
            'subtitle' => 'Une stratégie de déploiement à travers des partenariats locaux',
            'countries' => [
                [
                    'name' => 'Burkina Faso',
                    'partner' => 'BURCO SARL',
                    'website' => 'burcosa.com/securite-electronique/geolocalisation-gps/',
                    'services' => ['Géolocalisation GPS', 'Sécurité électronique'],
                    'flag' => '🇧🇫'
                ],
                [
                    'name' => 'Togo',
                    'partner' => 'AFRICA TRACING',
                    'website' => 'africatracing.com',
                    'services' => ['Tracking véhicules', 'Solutions mobilité'],
                    'flag' => '🇹🇬'
                ],
                [
                    'name' => 'Ghana & Guinée',
                    'partner' => 'FROTOCOM',
                    'website' => 'frotcom.com/fr-FR/personnalisez-votre-solution',
                    'services' => ['Solutions personnalisées', 'Gestion de flotte'],
                    'flag' => '🇬🇭🇬🇳'
                ],
                [
                    'name' => 'Liberia',
                    'partner' => 'TONBOI',
                    'website' => 'tigliberia.com/t-fr-fr',
                    'services' => ['Solutions transport', 'Technologies'],
                    'flag' => '🇱🇷'
                ]
            ],
            'stats' => [
                'countries_covered' => 5,
                'partnerships' => 4,
                'regional_reach' => 'Afrique de l\'Ouest',
                'strategy' => 'Partenariats locaux'
            ]
        ];
        $featuredProjects = [
            [
                'id' => 'boost-cmu',
                'title' => 'BOOST Couverture Maladie Universelle CI',
                'period' => '2024-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'AMOA',
                'description' => 'Numérisation complète des services de santé avec sécurisation des flux de données et augmentation significative du recouvrement des recettes.',
                'image' => '/images/projects/boost-cmu.jpg',
                'status' => 'En cours',
                'impact' => [
                    [
                        'metric' => '+1 million',
                        'description' => 'de bénéficiaires supplémentaires'
                    ],
                    [
                        'metric' => '-30%',
                        'description' => 'de temps d\'enrôlement'
                    ],
                    [
                        'metric' => '-20%',
                        'description' => 'de coûts opérationnels'
                    ],
                    [
                        'metric' => '99.9%',
                        'description' => 'de disponibilité système'
                    ]
                ],
                'technologies' => ['Biométrie', 'Blockchain', 'API REST', 'Mobile App', 'IA'],
                'category' => 'Santé Publique',
                'scope' => 'National'
            ],
            [
                'id' => 'sibis',
                'title' => 'Système d\'Identification Biométrique In Situ (SIBIS)',
                'period' => '2022-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'Solutions Biométriques',
                'description' => 'Déploiement du plus grand système d\'enrôlement biométrique d\'Afrique de l\'Ouest avec plus de 20 millions d\'individus.',
                'image' => '/images/projects/sibis.jpg',
                'status' => 'Réalisé',
                'impact' => [
                    [
                        'metric' => '+20M',
                        'description' => 'individus enrôlés'
                    ],
                    [
                        'metric' => '99.9%',
                        'description' => 'précision déduplication'
                    ],
                    [
                        'metric' => '2M → 4M',
                        'description' => 'croissance assurés CMU'
                    ],
                    [
                        'metric' => '100%',
                        'description' => 'interconnexion réussie'
                    ]
                ],
                'technologies' => ['Biométrie multimodale', 'IA', 'Big Data', 'Blockchain', 'Sécurité'],
                'category' => 'Identité Numérique',
                'scope' => 'National',
                'certifications' => ['ISO 27001', 'Standards ANSSI']
            ],
            [
                'id' => 'ioc',
                'title' => 'Integrated Operations Center (IOC)',
                'period' => '2024-2025',
                'client' => 'Ministère de la Santé CI',
                'type' => 'AMOA & Solutions',
                'description' => 'Centre de commandement intégré pour la surveillance en temps réel des établissements et du personnel de santé à l\'échelle nationale.',
                'image' => '/images/projects/ioc.jpg',
                'status' => 'En cours',
                'impact' => [
                    [
                        'metric' => '-25%',
                        'description' => 'délais d\'intervention'
                    ],
                    [
                        'metric' => '-15%',
                        'description' => 'interruptions de service'
                    ],
                    [
                        'metric' => '24/7',
                        'description' => 'supervision continue'
                    ],
                    [
                        'metric' => '100%',
                        'description' => 'alertes automatisées'
                    ]
                ],
                'technologies' => ['IoT', 'Géolocalisation', 'Dashboards', 'APIs', 'Machine Learning'],
                'category' => 'Supervision & Monitoring',
                'scope' => 'National'
            ]
        ];

        // Partenaires et clients de référence
        $partners = [
            [
                'name' => 'Orange Côte d\'Ivoire',
                'logo' => '/images/logos/partners/orange.jpg',
                'category' => 'Télécommunications',
                'project' => 'Transformation digitale (+30% achats digitaux)'
            ],
            [
                'name' => 'CNAM',
                'logo' => '/images/logos/partners/cnam.png',
                'category' => 'Santé Publique',
                'project' => 'BOOST CMU, SIBIS, IOC'
            ],
            [
                'name' => 'ANADER',
                'logo' => '/images/logos/partners/anader.png',
                'category' => 'Agriculture',
                'project' => 'Schéma Directeur SI (2023-2025)'
            ],
            [
                'name' => 'BNETD',
                'logo' => '/images/logos/partners/bnetd.jpeg',
                'category' => 'Infrastructure',
                'project' => 'Car Policy & Gestion de flotte'
            ],
            [
                'name' => 'DGCMU',
                'logo' => '/images/logos/partners/dgcmu.png',
                'category' => 'Santé',
                'project' => 'Direction Générale CMU'
            ],
            [
                'name' => 'Ministère Emploi et Protection Sociale',
                'logo' => '/images/logos/partners/meps.jpg',
                'category' => 'Gouvernement',
                'project' => 'WURI - Identification Unique'
            ],
            [
                'name' => 'IBM',
                'logo' => '/images/logos/partners/ibm.png',
                'category' => 'Technologie',
                'project' => 'Silver Partner IT & Telecom'
            ],
            [
                'name' => 'FIWARE Foundation',
                'logo' => '/images/logos/partners/fiware.png',
                'category' => 'IoT',
                'project' => 'Membre fondation - Projets UE'
            ],
            [
                'name' => 'CGECI',
                'logo' => '/images/logos/partners/cgeci.jpg',
                'category' => 'Patronat',
                'project' => 'Confédération Générale des Entreprises'
            ],
            [
                'name' => 'RTI',
                'logo' => '/images/logos/partners/rti.jpg',
                'category' => 'Média',
                'project' => 'Solutions de diffusion'
            ]
        ];

        // Équipe et talents
        $teamHighlights = [
            [
                'name' => 'Yves MAO',
                'role' => 'Directeur Général',
                'expertise' => 'Vision stratégique & Innovation',
                'image' => '/images/team/yves-mao.jpg',
                'experience' => '15+ ans',
                'education' => 'École d\'Ingénieurs'
            ],
            [
                'title' => 'Équipe AMOA',
                'count' => 'Consultants Senior',
                /* 'count' => '4 Consultants Senior', */
                'expertise' => 'Transformation digitale & Gouvernance SI',
                'image' => '/images/team/amoa-team.jpg',
                'certifications' => ['TOGAF', 'ITIL', 'Agile'],
                'projects' => '150+ projets pilotés'
            ],
            [
                'title' => 'Équipe Technique',
                /* 'count' => '12 Développeurs', */
                'count' => 'Développeurs',
                'expertise' => 'Web, Mobile, Blockchain, IA, Big Data',
                'image' => '/images/team/dev-team.jpg',
                'technologies' => ['Vue.js', 'Laravel', 'Node.js', 'Python', 'Blockchain'],
                'certifications' => ['AWS', 'Azure', 'Google Cloud']
            ],
            [
                'title' => 'Équipe Support',
                'count' => 'Spécialistes',
                /* 'count' => '8 Spécialistes', */
                'expertise' => 'Formation, Documentation, Support 24/7',
                'image' => '/images/team/support-team.jpg',
                'languages' => ['Français', 'Anglais', 'Langues locales'],
                'coverage' => 'Afrique de l\'Ouest'
            ]
        ];

        // Processus d'innovation (Design Thinking)
        $innovationProcess = [
            [
                'step' => 1,
                'title' => 'Idées',
                'description' => 'Une idée, notre point de départ',
                'icon' => 'LightBulbIcon',
                'duration' => '1-2 semaines',
                'delivrables' => ['Brainstorming', 'Analyse de faisabilité']
            ],
            [
                'step' => 2,
                'title' => 'Ateliers Collaboratifs',
                'description' => 'Co-création et échange d\'expertises',
                'icon' => 'UsersIcon',
                'duration' => '2-4 semaines',
                'delivrables' => ['Workshops', 'Spécifications fonctionnelles']
            ],
            [
                'step' => 3,
                'title' => 'Conception de Solution',
                'description' => 'Design détaillé des architectures et fonctionnalités',
                'icon' => 'PencilIcon',
                'duration' => '3-6 semaines',
                'delivrables' => ['Architecture technique', 'Maquettes UX/UI']
            ],
            [
                'step' => 4,
                'title' => 'POC / Pilote',
                'description' => 'Tests rigoureux et validation sur le terrain',
                'icon' => 'BeakerIcon',
                'duration' => '4-8 semaines',
                'delivrables' => ['Prototype fonctionnel', 'Tests utilisateurs']
            ],
            [
                'step' => 5,
                'title' => 'Lancement Produit/Service',
                'description' => 'Passage en production du service finalisé',
                'icon' => 'RocketLaunchIcon',
                'duration' => '2-12 semaines',
                'delivrables' => ['Déploiement', 'Formation', 'Support']
            ]
        ];

        // Actualités et popup conditionnel
        $newsPopup = [
            'id' => 'recruitment-2025',
            'show' => $this->shouldShowPopup('recruitment-2025'),
            'type' => 'recruitment',
            'priority' => 'high',
            'title' => '🚀 TECH N\'CHANGE recrute des talents !',
            'message' => 'Nous recherchons des experts en AMOA, développement et identité numérique pour renforcer nos équipes sur des projets d\'envergure nationale.',
            'content' => [
                'Consultants AMOA Senior (2 postes)',
                'Développeurs Full-Stack Vue.js/Laravel (3 postes)',
                'Experts Identité Numérique & Biométrie (2 postes)',
                'Spécialistes IoT/FIWARE (1 poste)'
            ],
            'action' => [
                'text' => 'Découvrir les postes',
                'url' => '/carrieres',
                'type' => 'primary'
            ],
            'secondaryAction' => [
                'text' => 'En savoir plus',
                'url' => '/a-propos/equipe',
                'type' => 'secondary'
            ],
            'expiration' => '2025-08-31',
            'frequency' => 'once_per_week' // once_per_day, once_per_week, always
        ];

        // Certifications et reconnaissances (enrichies)
        $certifications = [
            [
                'title' => 'Lauréat France/Afrique 2020',
                'description' => 'Concours international (+53 pays) - digiTRANS',
                'year' => '2020',
                'category' => 'Innovation',
                'icon' => 'TrophyIcon',
                'priority' => 'high'
            ],
            [
                'title' => 'Awards Mobilité CIV 2020',
                'description' => '2ème édition - Secteur transport urbain',
                'year' => '2020',
                'category' => 'Transport',
                'icon' => 'TrophyIcon',
                'priority' => 'high'
            ],
            [
                'title' => 'Silver Partner IBM',
                'description' => 'Intégration de solutions IT & Telecom',
                'year' => '2018',
                'category' => 'Technologie',
                'icon' => 'BuildingOfficeIcon',
                'priority' => 'medium'
            ],
            [
                'title' => 'Membre CGECI',
                'description' => 'Confédération Générale des Entreprises CI - "Le Patronat Ivoirien"',
                'year' => '2018',
                'category' => 'Patronat',
                'icon' => 'BuildingOfficeIcon',
                'priority' => 'medium'
            ],
            [
                'title' => 'Membre FIWARE Foundation',
                'description' => 'Fondation européenne - Projets financés UE',
                'year' => '2019',
                'category' => 'IoT',
                'icon' => 'GlobeEuropeAfricaIcon',
                'priority' => 'medium'
            ],
            [
                'title' => 'Société constituée',
                'description' => 'RCCM: CI-ABJ-2017-B-1535 | Capital: 10M FCFA',
                'year' => '2017',
                'category' => 'Juridique',
                'icon' => 'DocumentTextIcon',
                'priority' => 'low'
            ]
        ];

        // Informations entreprise (nouvelles)
        $companyInfo = [
            'legal' => [
                'name' => 'TECH N\'CHANGE',
                'legal_form' => 'SAU (Société par Actions Unipersonnelle)',
                'capital' => '10 000 000 FCFA',
                'rccm' => 'CI-ABJ-2017-B-1535',
                'creation_year' => '2017',
                'employees' => 28,
                'address' => 'Cocody, Riviera Attoban, derrière le 30ème arrondissement',
                'postal' => '08 BP 3823 ABIDJAN 08',
                'phone' => ['+225 21 21 32 42 47', '+225 07 89 97 11 13'],
                'email' => 'contact@technchange.net',
                'website' => 'www.technchange.net'
            ],
            'leadership' => [
                'director' => 'Yves MAO',
                'structure' => 'Direction Technique et Innovation, Stratégie et Développement Commercial, Gestion des Moyens',
                'departments' => [
                    'Conseil/AMOA' => 4,
                    'Développement Web/Apps' => 6,
                    'Support et Maintenance IoT' => 4,
                    'Solutions digiTRANS B2B' => 'Binta OUATTARA',
                    'Solutions digiTRANS B2C' => 'Rita BROU'
                ]
            ]
        ];

        // Vision et valeurs
        $vision = [
            'mission' => 'Accompagner la transformation digitale de l\'Afrique en développant des solutions technologiques souveraines, inclusives et durables.',
            'vision' => 'Devenir le partenaire de référence pour la digitalisation des services publics et privés en Afrique de l\'Ouest.',
            'values' => [
                [
                    'name' => 'Innovation',
                    'description' => 'Nous adoptons les technologies de rupture',
                    'icon' => 'SparklesIcon'
                ],
                [
                    'name' => 'Excellence',
                    'description' => 'Nous visons la qualité dans chaque projet',
                    'icon' => 'StarIcon'
                ],
                [
                    'name' => 'Agilité',
                    'description' => 'Nous adaptons nos méthodes aux besoins',
                    'icon' => 'BoltIcon'
                ],
                [
                    'name' => 'Souveraineté',
                    'description' => 'Nous développons des solutions locales',
                    'icon' => 'ShieldCheckIcon'
                ]
            ]
        ];

        return Inertia::render('Home', [
            'stats' => $stats,
            'services' => $services,
            'digiTransSolutions' => $digiTransSolutions,
            'regionalExpansion' => $regionalExpansion,
            'featuredProjects' => $featuredProjects,
            'partners' => $partners,
            'teamHighlights' => $teamHighlights,
            'innovationProcess' => $innovationProcess,
            'newsPopup' => $newsPopup,
            'certifications' => $certifications,
            'companyInfo' => $companyInfo,
            'vision' => $vision,
            'meta' => [
                'title' => 'TECH N\'CHANGE - Transformation Numérique, AMOA & Solutions Transport en Afrique',
                'description' => 'Cabinet de conseil ivoirien spécialisé en AMOA (60%), identité numérique, solutions biométriques, digiTRANS (transport/mobilité) et IoT FIWARE. +25K utilisateurs digiTRANS.',
                'keywords' => 'AMOA, transformation digitale, identité numérique, biométrie, KYC, IoT, FIWARE, digiTRANS, gestion flotte, covoiturage, transport, Côte d\'Ivoire, Afrique'
            ]
        ]);
    }

    /**
     * Détermine si le popup doit être affiché
     */
    private function shouldShowPopup($popupId)
    {
        // Logique pour déterminer l'affichage du popup
        // Peut être basée sur les cookies, session, date, etc.

        $lastShown = session("popup_{$popupId}_last_shown");
        $frequency = session("popup_{$popupId}_frequency", 'once_per_week');

        if (!$lastShown) {
            return true; // Première visite
        }

        $now = now();
        $lastShownDate = \Carbon\Carbon::parse($lastShown);

        switch ($frequency) {
            case 'once_per_day':
                return $now->diffInDays($lastShownDate) >= 1;
            case 'once_per_week':
                return $now->diffInWeeks($lastShownDate) >= 1;
            case 'always':
                return true;
            default:
                return false;
        }
    }

    /**
     * Marquer le popup comme affiché
     */
    public function markPopupShown(Request $request)
    {
        $popupId = $request->input('popup_id');
        session(["popup_{$popupId}_last_shown" => now()]);

        return response()->json(['success' => true]);
    }
}
