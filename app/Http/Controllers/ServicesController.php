<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ServicesController extends Controller
{
    //
    public function index()
    {
        // Services principaux avec détails enrichis
        $services = [
            [
                'id' => 'amoa',
                'title' => 'AMOA & Conseil Stratégique',
                'subtitle' => '60% de notre activité',
                'description' => 'Assistance à maîtrise d\'ouvrage pour vos projets de transformation digitale avec une expertise reconnue depuis 8 ans.',
                'icon' => 'ChartBarIcon',
                'percentage' => 60,
                'color' => 'blue',
                'gradient' => 'from-blue-500 to-blue-700',
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
                'achievements' => [
                    '+250 projets pilotés',
                    '99% taux de satisfaction client',
                    '8 ans d\'expertise AMOA'
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
                'color' => 'purple',
                'gradient' => 'from-purple-500 to-purple-700',
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
                'certifications' => [
                    'Standards ANSSI',
                    'ISO 27001',
                    'Certification biométrique'
                ],
                'route' => 'services/identity'
            ],
            [
                'id' => 'transport',
                'title' => 'Solutions Transport & Mobilité',
                'subtitle' => 'digiTRANS - Nos solutions phares',
                'description' => 'Éditeur de solutions logicielles pour la gestion de flotte et le covoiturage, avec plus de 25 000 utilisateurs.',
                'icon' => 'TruckIcon',
                'color' => 'orange',
                'gradient' => 'from-orange-500 to-red-600',
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
                'route' => '/#digitrans'
            ],
            [
                'id' => 'solutions',
                'title' => 'Solutions Technologiques',
                'subtitle' => 'Innovation sur mesure',
                'description' => 'Développement d\'architectures robustes et sécurisées pour vos besoins métiers spécifiques.',
                'icon' => 'CogIcon',
                'color' => 'green',
                'gradient' => 'from-green-500 to-green-700',
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
                'technologies' => [
                    'Vue.js/React',
                    'Laravel/Node.js',
                    'AWS/Azure',
                    'Docker/Kubernetes'
                ],
                'route' => 'projets'
            ],
            [
                'id' => 'patrimoine',
                'title' => 'Gestion du Patrimoine FIWARE',
                'subtitle' => 'IoT & Objets Connectés',
                'description' => 'Plateformes open source d\'objets connectés conformes aux standards européens FIWARE.',
                'icon' => 'CogIcon',
                'color' => 'indigo',
                'gradient' => 'from-indigo-500 to-indigo-700',
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
                'route' => '/#firware'
            ]
        ];

        // Processus de travail en 5 étapes
        $workProcess = [
            [
                'step' => '01',
                'title' => 'Analyse & Cadrage',
                'description' => 'Étude de faisabilité et définition des besoins avec méthodologie agile',
                'icon' => 'SparklesIcon',
                'duration' => '1-2 semaines'
            ],
            [
                'step' => '02',
                'title' => 'Design & Architecture',
                'description' => 'Conception de la solution technique et des interfaces utilisateur',
                'icon' => 'StarIcon',
                'duration' => '2-4 semaines'
            ],
            [
                'step' => '03',
                'title' => 'Développement',
                'description' => 'Implémentation avec livrables réguliers et tests continus',
                'icon' => 'CogIcon',
                'duration' => '4-12 semaines'
            ],
            [
                'step' => '04',
                'title' => 'Déploiement',
                'description' => 'Mise en production avec formation et transfert de compétences',
                'icon' => 'BoltIcon',
                'duration' => '1-2 semaines'
            ],
            [
                'step' => '05',
                'title' => 'Support 24/7',
                'description' => 'Maintenance, évolutions et accompagnement continu',
                'icon' => 'ShieldCheckIcon',
                'duration' => 'Permanent'
            ]
        ];

        // Secteurs d'activité
        $sectors = [
            [
                'name' => 'Santé Publique',
                'description' => 'CNAM, CMU, systèmes hospitaliers',
                'icon' => 'TrophyIcon',
                'projects' => ['BOOST CMU', 'SIBIS', 'IOC'],
                'color' => 'red'
            ],
            [
                'name' => 'Transport & Mobilité',
                'description' => 'Gestion de flotte, covoiturage, logistique',
                'icon' => 'TruckIcon',
                'projects' => ['digiTRANS B2B/B2C'],
                'color' => 'orange'
            ],
            [
                'name' => 'Administration',
                'description' => 'Services publics, e-gouvernance',
                'icon' => 'BuildingOfficeIcon',
                'projects' => ['WURI', 'PBF'],
                'color' => 'blue'
            ],
            [
                'name' => 'Télécommunications',
                'description' => 'Opérateurs, infrastructures réseau',
                'icon' => 'GlobeEuropeAfricaIcon',
                'projects' => ['Orange CI'],
                'color' => 'green'
            ]
        ];

        // Technologies maîtrisées
        $technologies = [
            [
                'category' => 'Frontend',
                'techs' => ['Vue.js', 'React', 'Tailwind CSS', 'TypeScript'],
                'icon' => 'SparklesIcon'
            ],
            [
                'category' => 'Backend',
                'techs' => ['Laravel', 'Node.js', 'Python', 'Java'],
                'icon' => 'CogIcon'
            ],
            [
                'category' => 'Mobile',
                'techs' => ['React Native', 'Flutter', 'Ionic'],
                'icon' => 'TruckIcon'
            ],
            [
                'category' => 'Cloud & DevOps',
                'techs' => ['AWS', 'Azure', 'Docker', 'Kubernetes'],
                'icon' => 'GlobeEuropeAfricaIcon'
            ],
            [
                'category' => 'Data & IA',
                'techs' => ['Python', 'TensorFlow', 'Big Data', 'ML'],
                'icon' => 'ChartBarIcon'
            ],
            [
                'category' => 'Blockchain & Security',
                'techs' => ['Ethereum', 'Hyperledger', 'PKI', 'Biométrie'],
                'icon' => 'ShieldCheckIcon'
            ]
        ];

        // Méta données pour SEO
        $meta = [
            'title' => 'Services - TECH N\'CHANGE | Conseil AMOA, Identité Numérique, Solutions Transport',
            'description' => 'Découvrez nos services de conseil AMOA, solutions d\'identité numérique, digiTRANS transport et développement sur mesure. Expertise depuis 2017 en Côte d\'Ivoire.',
            'keywords' => 'AMOA, conseil stratégique, identité numérique, biométrie, transport, digiTRANS, développement web, mobile, IoT, FIWARE',
            'canonical' => url('/services')
        ];

        return Inertia::render('Services/Index', [
            'services' => $services,
            'workProcess' => $workProcess,
            'sectors' => $sectors,
            'technologies' => $technologies,
            'meta' => $meta
        ]);
    }

    /**
     * Page dédiée AMOA & Conseil Stratégique
     * 60% de notre activité - Assistance à maîtrise d'ouvrage
     */
    public function amoa()
    {
        // Statistiques AMOA
        $stats = [
            /* [
                'label' => 'Projets AMOA pilotés',
                'value' => 250,
                'suffix' => '+',
                'description' => 'Depuis 2017'
            ], */
            [
                'label' => 'Taux de satisfaction',
                'value' => 99,
                'suffix' => '%',
                'description' => 'Client confirmé'
            ],
            [
                'label' => 'Part d\'activité',
                'value' => 60,
                'suffix' => '%',
                'description' => 'Notre cœur de métier'
            ],
            /* [
                'label' => 'Consultants Senior',
                'value' => 4,
                'suffix' => '',
                'description' => 'Équipe dédiée AMOA'
            ] */
        ];

        // Projets AMOA phares
        $featuredProjects = [
            [
                'id' => 'boost-cmu',
                'title' => 'BOOST Couverture Maladie Universelle',
                'period' => '2024-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'AMOA Santé Publique',
                'description' => 'Numérisation des services de santé, sécurisation des flux de données et augmentation significative du recouvrement des recettes.',
                'image' => '/images/projects/boost-cmu.jpg',
                'status' => 'En cours',
                'scope' => 'National',
                'budget' => 'Confidentiel',
                'impact' => [
                    [
                        'metric' => '+1M',
                        'description' => 'bénéficiaires supplémentaires'
                    ],
                    [
                        'metric' => '-30%',
                        'description' => 'temps d\'enrôlement'
                    ],
                    [
                        'metric' => '-20%',
                        'description' => 'coûts opérationnels'
                    ],
                    [
                        'metric' => '99.9%',
                        'description' => 'disponibilité système'
                    ]
                ],
                'services' => [
                    'Définition des besoins et cahier des charges',
                    'Pilotage technique et fonctionnel',
                    'Coordination des parties prenantes',
                    'Gestion des risques et qualité'
                ]
            ],
            [
                'id' => 'ioc',
                'title' => 'Integrated Operations Center (IOC)',
                'period' => '2024-2025',
                'client' => 'Ministère de la Santé CI',
                'type' => 'AMOA Supervision',
                'description' => 'Centre de commandement intégré pour la surveillance en temps réel des établissements et du personnel de santé à l\'échelle nationale.',
                'image' => '/images/projects/ioc.jpg',
                'status' => 'En cours',
                'scope' => 'National',
                'budget' => 'Confidentiel',
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
                'services' => [
                    'Conception architecture technique',
                    'Spécification des tableaux de bord',
                    'Accompagnement au déploiement',
                    'Formation des équipes opérationnelles'
                ]
            ],
            [
                'id' => 'wuri',
                'title' => 'West Africa Unique Identification (WURI)',
                'period' => '2025',
                'client' => 'Ministère Emploi et Protection Sociale',
                'type' => 'AMOA Identité Régionale',
                'description' => 'Authentification sécurisée et souveraine des usagers des systèmes d\'information gouvernementaux (santé, éducation, protection sociale).',
                'image' => '/images/projects/wuri.jpg',
                'status' => 'En contractualisation',
                'scope' => 'Régional CEDEAO',
                'budget' => 'Financement Banque Mondiale',
                'impact' => [
                    [
                        'metric' => '15 pays',
                        'description' => 'CEDEAO concernés'
                    ],
                    [
                        'metric' => '100M+',
                        'description' => 'citoyens impactés'
                    ],
                    [
                        'metric' => '3 secteurs',
                        'description' => 'santé, éducation, social'
                    ],
                    [
                        'metric' => 'Standards',
                        'description' => 'CEDEAO/UEMOA'
                    ]
                ],
                'services' => [
                    'Conception d\'architectures interopérables',
                    'Alignement standards CEDEAO/UEMOA',
                    'Coordination interministérielle',
                    'Gestion du changement à grande échelle'
                ]
            ],
            [
                'id' => 'pbf',
                'title' => 'Performance-Based Financing (PBF)',
                'period' => '2025',
                'client' => 'Ministère de la Santé CI',
                'type' => 'AMOA Paiement Performance',
                'description' => 'Automatisation complète de la saisie, validation, certification et contrôle qualité des indicateurs PBF.',
                'image' => '/images/projects/pbf.jpg',
                'status' => 'En contractualisation',
                'scope' => 'National',
                'budget' => 'Confidentiel',
                'impact' => [
                    [
                        'metric' => '-40%',
                        'description' => 'erreurs de facturation'
                    ],
                    [
                        'metric' => '+35%',
                        'description' => 'satisfaction prestataires'
                    ],
                    [
                        'metric' => '100%',
                        'description' => 'automatisation contrôles'
                    ],
                    [
                        'metric' => 'Temps réel',
                        'description' => 'suivi des performances'
                    ]
                ],
                'services' => [
                    'Portail de vérification automatisée',
                    'Moteur de dénombrement',
                    'Supervision applicative',
                    'Contrôle paiements à la performance'
                ]
            ]
        ];

        // Expertise et domaines d'intervention
        $expertise = [
            [
                'title' => 'Gouvernance Numérique',
                'description' => 'Pilotage des transformations digitales complexes avec une approche structurée et agile.',
                'icon' => 'ChartBarIcon',
                'features' => [
                    'Schémas directeurs SI',
                    'Architecture d\'entreprise (TOGAF)',
                    'Gestion des risques IT',
                    'Alignement stratégique business/IT'
                ]
            ],
            [
                'title' => 'Conduite du Changement',
                'description' => 'Accompagnement humain et organisationnel pour garantir l\'adoption des solutions.',
                'icon' => 'UsersIcon',
                'features' => [
                    'Analyse d\'impact organisationnel',
                    'Formation des utilisateurs',
                    'Communication projet',
                    'Support au démarrage'
                ]
            ],
            [
                'title' => 'Pilotage de Projets',
                'description' => 'Méthodologies éprouvées pour livrer dans les délais, budgets et niveaux de qualité.',
                'icon' => 'CogIcon',
                'features' => [
                    'Méthodologies Agile/Scrum',
                    'Gestion des parties prenantes',
                    'Contrôle qualité continu',
                    'Reporting exécutif'
                ]
            ],
            [
                'title' => 'Systèmes Critiques',
                'description' => 'Expertise sur les systèmes à haute disponibilité et exigences de sécurité.',
                'icon' => 'ShieldCheckIcon',
                'features' => [
                    'Architectures haute disponibilité',
                    'Sécurité et conformité',
                    'Plans de continuité',
                    'Monitoring temps réel'
                ]
            ]
        ];

        // Secteurs d'intervention
        $sectors = [
            [
                'name' => 'Santé Publique',
                'projects' => 4,
                'description' => 'CNAM, Ministère Santé',
                'examples' => ['BOOST CMU', 'IOC', 'SIBIS', 'PBF'],
                'icon' => 'HeartIcon',
                'color' => 'red'
            ],
            [
                'name' => 'Télécommunications',
                'projects' => 2,
                'description' => 'Orange CI, MTN',
                'examples' => ['Transformation SI', 'Épervier'],
                'icon' => 'SignalIcon',
                'color' => 'orange'
            ],
            [
                'name' => 'Agriculture',
                'projects' => 2,
                'description' => 'ANADER, FIRCA',
                'examples' => ['Schéma Directeur', 'Car Policy'],
                'icon' => 'HomeModernIcon',
                'color' => 'green'
            ],
            [
                'name' => 'Protection Sociale',
                'projects' => 1,
                'description' => 'MEPS',
                'examples' => ['WURI'],
                'icon' => 'UserGroupIcon',
                'color' => 'blue'
            ]
        ];

        // Processus AMOA
        $process = [
            [
                'step' => 1,
                'title' => 'Cadrage Stratégique',
                'description' => 'Analyse des enjeux business et définition des objectifs du projet.',
                'duration' => '2-3 semaines',
                'deliverables' => [
                    'Note de cadrage',
                    'Analyse d\'opportunité',
                    'Plan projet macro'
                ],
                'icon' => 'DocumentMagnifyingGlassIcon'
            ],
            [
                'step' => 2,
                'title' => 'Expression des Besoins',
                'description' => 'Recueil détaillé des besoins fonctionnels et techniques.',
                'duration' => '3-4 semaines',
                'deliverables' => [
                    'Cahier des charges fonctionnel',
                    'Spécifications techniques',
                    'Matrice de traçabilité'
                ],
                'icon' => 'PencilSquareIcon'
            ],
            [
                'step' => 3,
                'title' => 'Pilotage Réalisation',
                'description' => 'Suivi de l\'avancement et validation des livrables.',
                'duration' => 'Durée du projet',
                'deliverables' => [
                    'Tableaux de bord',
                    'Rapports d\'avancement',
                    'Validation des jalons'
                ],
                'icon' => 'ChartBarIcon'
            ],
            [
                'step' => 4,
                'title' => 'Recette & Déploiement',
                'description' => 'Tests d\'acceptation et mise en production assistée.',
                'duration' => '2-4 semaines',
                'deliverables' => [
                    'Plans de tests',
                    'Procès-verbaux de recette',
                    'Support au démarrage'
                ],
                'icon' => 'CheckCircleIcon'
            ]
        ];

        // Équipe AMOA
        $team = [
            [
                'name' => 'Mohamed T.',
                'role' => 'Consultant AMOA Senior',
                'experience' => '4 ans chez TECH N\'CHANGE',
                'certifications' => ['TOGAF', 'ITIL', 'PMP'],
                'specialties' => ['Santé publique', 'Systèmes biométriques'],
                'projects' => ['BOOST CMU', 'IOC', 'SIBIS'],
                'image' => '/images/team/mohamed-t.jpg'
            ],
            [
                'name' => 'Fatou K.',
                'role' => 'Consultante AMOA',
                'experience' => '3 ans chez TECH N\'CHANGE',
                'certifications' => ['ITIL', 'Agile'],
                'specialties' => ['Transformation digitale', 'Change management'],
                'projects' => ['WURI', 'Orange CI'],
                'image' => '/images/team/fatou-k.jpg'
            ],
            [
                'name' => 'Kouadio A.',
                'role' => 'Chef de Projet AMOA',
                'experience' => '5 ans chez TECH N\'CHANGE',
                'certifications' => ['PMP', 'PRINCE2'],
                'specialties' => ['Gestion de programmes', 'Gouvernance IT'],
                'projects' => ['PBF', 'ANADER SI'],
                'image' => '/images/team/kouadio-a.jpg'
            ]
        ];

        // Témoignages clients
        $testimonials = [
            [
                'client' => 'CNAM Côte d\'Ivoire',
                'author' => 'Direction Générale',
                'role' => 'Directeur Général',
                'content' => 'L\'accompagnement AMOA de TECH N\'CHANGE sur BOOST CMU a permis de réduire de 30% les temps d\'enrôlement et d\'ajouter 1 million de bénéficiaires. Une expertise remarquable.',
                'project' => 'BOOST CMU',
                'rating' => 5,
                'image' => '/images/testimonials/cnam-dg.jpg'
            ],
            [
                'client' => 'Ministère de la Santé',
                'author' => 'DSI',
                'role' => 'Directeur des Systèmes d\'Information',
                'content' => 'Le pilotage du projet IOC par TECH N\'CHANGE a été exemplaire. Réduction de 25% des délais d\'intervention et supervision temps réel de tout le système de santé.',
                'project' => 'IOC',
                'rating' => 5,
                'image' => '/images/testimonials/msante-dsi.jpg'
            ]
        ];

        // Méta données SEO
        $meta = [
            'title' => 'AMOA & Conseil Stratégique - TECH N\'CHANGE | 60% de notre activité',
            'description' => 'Assistance à maîtrise d\'ouvrage pour projets de transformation digitale. 250+ projets pilotés, 99% satisfaction client. BOOST CMU, IOC, WURI, PBF.',
            'keywords' => 'AMOA, assistance maîtrise ouvrage, conseil stratégique, transformation digitale, gouvernance numérique, pilotage projet, BOOST CMU, IOC, WURI, PBF',
            'canonical' => url('/services/amoa'),
            'og_image' => '/images/services/amoa-og.jpg'
        ];

        return Inertia::render('Services/AMOA', [
            'stats' => $stats,
            'featuredProjects' => $featuredProjects,
            'expertise' => $expertise,
            'sectors' => $sectors,
            'process' => $process,
            'team' => $team,
            'testimonials' => $testimonials,
            'meta' => $meta
        ]);
    }

    /**
     * Page dédiée Identité Numérique & Solutions Biométriques
     * Notre expertise phare - Solutions KYC et inclusion financière
     */
    public function identity()
    {
        // Statistiques Identité Numérique
        $stats = [
            [
                'label' => 'Individus enrôlés',
                'value' => 20,
                'suffix' => 'M+',
                'description' => 'SIBIS - Record Afrique de l\'Ouest'
            ],
            [
                'label' => 'Précision déduplication',
                'value' => 99.9,
                'suffix' => '%',
                'description' => 'Algorithmes IA avancés'
            ],
            [
                'label' => 'Systèmes interconnectés',
                'value' => 5,
                'suffix' => '',
                'description' => 'MIRKA, e-CMU, Auxilium, CMU Light'
            ],
            [
                'label' => 'Temps d\'enrôlement',
                'value' => 3,
                'suffix' => 'min',
                'description' => 'Process optimisé'
            ]
        ];

        // Projets Identité Numérique phares
        $featuredProjects = [
            [
                'id' => 'sibis',
                'title' => 'Système d\'Identification Biométrique In Situ (SIBIS)',
                'period' => '2022-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'Biométrie Multimodale',
                'description' => 'Plus grand système d\'enrôlement biométrique d\'Afrique de l\'Ouest avec 20+ millions d\'individus enrôlés et précision de déduplication de 99.9%.',
                'image' => '/images/projects/sibis.jpg',
                'status' => 'Réalisé',
                'scope' => 'National',
                'budget' => 'Multi-milliards FCFA',
                'impact' => [
                    [
                        'metric' => '20M+',
                        'description' => 'individus enrôlés'
                    ],
                    [
                        'metric' => '99.9%',
                        'description' => 'précision déduplication'
                    ],
                    [
                        'metric' => '100%',
                        'description' => 'interconnexion réussie'
                    ],
                    [
                        'metric' => '2M → 4M',
                        'description' => 'croissance assurés CMU'
                    ]
                ],
                'technologies' => [
                    'Biométrie multimodale (empreintes, iris, visage)',
                    'Intelligence Artificielle pour déduplication',
                    'Blockchain pour sécurité et traçabilité',
                    'APIs RESTful pour interopérabilité',
                    'Solutions mobiles pour enrôlement terrain'
                ],
                'certifications' => ['ISO 27001', 'Standards ANSSI', 'GDPR Compliant'],
                'interconnections' => ['MIRKA', 'e-CMU', 'Auxilium', 'CMU Light', 'BOOST CMU']
            ],
            [
                'id' => 'wuri',
                'title' => 'West Africa Unique Identification (WURI)',
                'period' => '2025',
                'client' => 'Ministère Emploi et Protection Sociale',
                'type' => 'Identité Régionale',
                'description' => 'Authentification sécurisée et souveraine des usagers des systèmes d\'information gouvernementaux à l\'échelle de la CEDEAO.',
                'image' => '/images/projects/wuri.jpg',
                'status' => 'En contractualisation',
                'scope' => 'Régional CEDEAO',
                'budget' => 'Financement Banque Mondiale',
                'impact' => [
                    [
                        'metric' => '15 pays',
                        'description' => 'CEDEAO couverts'
                    ],
                    [
                        'metric' => '100M+',
                        'description' => 'citoyens potentiels'
                    ],
                    [
                        'metric' => '3 secteurs',
                        'description' => 'santé, éducation, social'
                    ],
                    [
                        'metric' => '100%',
                        'description' => 'interopérabilité'
                    ]
                ],
                'technologies' => [
                    'Architecture distribuée multi-pays',
                    'Standards CEDEAO/UEMOA',
                    'PKI (Public Key Infrastructure)',
                    'Authentification forte multi-facteurs',
                    'Governance frameworks'
                ],
                'sectors' => ['Santé', 'Éducation', 'Protection Sociale', 'Services Publics']
            ],
            [
                'id' => 'orange-kyc',
                'title' => 'Orange CI - Solutions KYC',
                'period' => '2018-2020',
                'client' => 'Orange Côte d\'Ivoire',
                'type' => 'KYC Télécoms',
                'description' => 'Identification et authentification de 14+ millions d\'utilisateurs avec augmentation de 30% des transactions en ligne.',
                'image' => '/images/projects/orange-kyc.jpg',
                'status' => 'Réalisé',
                'scope' => 'National + UEMOA',
                'budget' => 'Confidentiel',
                'impact' => [
                    [
                        'metric' => '14M+',
                        'description' => 'utilisateurs identifiés'
                    ],
                    [
                        'metric' => '+30%',
                        'description' => 'transactions en ligne'
                    ],
                    [
                        'metric' => '+25%',
                        'description' => 'CA digitalisé'
                    ],
                    [
                        'metric' => '8 pays',
                        'description' => 'déployement UEMOA'
                    ]
                ],
                'technologies' => [
                    'KYC automatisé via IA',
                    'OCR et reconnaissance documentaire',
                    'Vérification biométrique en temps réel',
                    'APIs d\'authentification',
                    'Monitoring anti-fraude'
                ]
            ]
        ];

        // Technologies et solutions
        $technologies = [
            [
                'category' => 'Biométrie Multimodale',
                'description' => 'Capture et analyse des caractéristiques biométriques uniques pour identification sécurisée.',
                'icon' => 'FingerPrintIcon',
                'color' => 'blue',
                'features' => [
                    'Empreintes digitales (10 doigts)',
                    'Reconnaissance faciale 3D',
                    'Scan de l\'iris',
                    'Reconnaissance vocale',
                    'Analyse comportementale'
                ],
                'useCases' => ['Enrôlement masse', 'Authentification forte', 'Contrôle d\'accès', 'Paiements sécurisés']
            ],
            [
                'category' => 'Intelligence Artificielle',
                'description' => 'Algorithmes avancés pour déduplication, détection de fraude et optimisation des processus.',
                'icon' => 'CpuChipIcon',
                'color' => 'purple',
                'features' => [
                    'Machine Learning pour déduplication',
                    'Deep Learning reconnaissance faciale',
                    'Détection d\'anomalies',
                    'Analyse prédictive',
                    'Auto-amélioration continue'
                ],
                'useCases' => ['Détection doublons', 'Anti-fraude', 'Optimisation UX', 'Scoring risque']
            ],
            [
                'category' => 'Blockchain & Sécurité',
                'description' => 'Infrastructure décentralisée pour traçabilité, intégrité et souveraineté des données.',
                'icon' => 'ShieldCheckIcon',
                'color' => 'green',
                'features' => [
                    'Blockchain privée/consortium',
                    'Smart contracts',
                    'Chiffrement AES-256',
                    'PKI (infrastructure à clés publiques)',
                    'Audit trails immutables'
                ],
                'useCases' => ['Traçabilité identité', 'Conformité RGPD', 'Souveraineté données', 'Audit sécurisé']
            ],
            [
                'category' => 'Interopérabilité',
                'description' => 'APIs et standards pour connexion avec écosystèmes existants et futurs.',
                'icon' => 'LinkIcon',
                'color' => 'orange',
                'features' => [
                    'APIs RESTful standardisées',
                    'Standards ISO/IEC 19794',
                    'Protocoles SAML/OAuth2',
                    'Webhooks temps réel',
                    'SDK multi-plateformes'
                ],
                'useCases' => ['Intégration SI', 'Fédération identité', 'SSO enterprise', 'Mobile apps']
            ]
        ];

        // Secteurs d'application
        $sectors = [
            [
                'name' => 'Santé Publique',
                'description' => 'Identification patients, assurés, gestion CMU',
                'projects' => ['SIBIS', 'BOOST CMU', 'e-CMU'],
                'benefits' => [
                    'Élimination doublons assurés',
                    'Fraude réduite de 40%',
                    'Accès facilité aux soins',
                    'Couverture universelle optimisée'
                ],
                'icon' => 'HeartIcon',
                'color' => 'red',
                'stats' => '20M+ assurés'
            ],
            [
                'name' => 'Services Financiers',
                'description' => 'KYC bancaire, mobile money, inclusion financière',
                'projects' => ['Orange Money', 'Solutions bancaires'],
                'benefits' => [
                    'KYC automatisé 95% plus rapide',
                    'Onboarding digital complet',
                    'Réduction risque fraude',
                    'Inclusion populations rurales'
                ],
                'icon' => 'CreditCardIcon',
                'color' => 'green',
                'stats' => '14M+ comptes'
            ],
            [
                'name' => 'Administration Publique',
                'description' => 'E-gouvernance, état civil, services citoyens',
                'projects' => ['WURI', 'Cartes d\'identité'],
                'benefits' => [
                    'Services 100% digitaux',
                    'Identité souveraine sécurisée',
                    'Interopérabilité régionale',
                    'Lutte contre usurpation'
                ],
                'icon' => 'BuildingOfficeIcon',
                'color' => 'blue',
                'stats' => '15 pays CEDEAO'
            ],
            [
                'name' => 'Éducation',
                'description' => 'Gestion étudiants, certifications, bourses',
                'projects' => ['Systèmes universitaires', 'Bourses d\'État'],
                'benefits' => [
                    'Suivi parcours étudiant',
                    'Authentification diplômes',
                    'Attribution bourses équitable',
                    'Lutte contre fraude académique'
                ],
                'icon' => 'AcademicCapIcon',
                'color' => 'indigo',
                'stats' => 'Universités partenaires'
            ]
        ];

        // Processus d'implémentation
        $implementationProcess = [
            [
                'step' => 1,
                'title' => 'Audit & Analyse',
                'description' => 'Évaluation de l\'existant, définition des besoins et contraintes réglementaires.',
                'duration' => '2-4 semaines',
                'deliverables' => [
                    'Audit sécurité existant',
                    'Analyse réglementaire RGPD',
                    'Cartographie des flux',
                    'Architecture cible'
                ],
                'icon' => 'DocumentMagnifyingGlassIcon'
            ],
            [
                'step' => 2,
                'title' => 'Design & Prototypage',
                'description' => 'Conception UX/UI, prototypage et validation des algorithmes biométriques.',
                'duration' => '4-6 semaines',
                'deliverables' => [
                    'Prototypes interactifs',
                    'Tests algorithmes biométriques',
                    'Spécifications techniques',
                    'Plans de sécurité'
                ],
                'icon' => 'PencilSquareIcon'
            ],
            [
                'step' => 3,
                'title' => 'Développement & Tests',
                'description' => 'Développement solution, tests de charge et certification sécurité.',
                'duration' => '8-12 semaines',
                'deliverables' => [
                    'Solution développée',
                    'Tests de performance',
                    'Certification sécurité',
                    'Documentation technique'
                ],
                'icon' => 'CodeBracketIcon'
            ],
            [
                'step' => 4,
                'title' => 'Pilote & Validation',
                'description' => 'Déploiement pilote, formation utilisateurs et optimisations.',
                'duration' => '4-8 semaines',
                'deliverables' => [
                    'Déploiement pilote',
                    'Formation équipes',
                    'Optimisations performance',
                    'Validation métier'
                ],
                'icon' => 'PlayIcon'
            ],
            [
                'step' => 5,
                'title' => 'Déploiement Production',
                'description' => 'Rollout national, monitoring 24/7 et support utilisateurs.',
                'duration' => '2-12 semaines',
                'deliverables' => [
                    'Déploiement national',
                    'Monitoring 24/7',
                    'Support utilisateurs',
                    'Maintenance évolutive'
                ],
                'icon' => 'RocketLaunchIcon'
            ]
        ];

        // Équipe spécialisée
        $expertTeam = [
            [
                'name' => 'Aminata D.',
                'role' => 'Experte Biométrie Senior',
                'experience' => '6 ans spécialisation biométrie',
                'certifications' => ['Certified Biometric Professional', 'ISO 27001 Lead Auditor'],
                'specialties' => [
                    'Algorithmes biométriques multimodaux',
                    'Systèmes de déduplication IA',
                    'Architectures haute disponibilité',
                    'Standards internationaux biométrie'
                ],
                'projects' => ['SIBIS (20M+ enrôlés)', 'Solutions bancaires', 'Systèmes gouvernementaux'],
                'languages' => ['Français', 'Anglais', 'Python', 'R'],
                'image' => '/images/team/aminata-d.jpg'
            ],
            [
                'name' => 'Koné S.',
                'role' => 'Architecte Solutions Identité',
                'experience' => '8 ans architecture SI',
                'certifications' => ['TOGAF', 'AWS Solutions Architect', 'CISSP'],
                'specialties' => [
                    'Architecture distribuée blockchain',
                    'PKI et cryptographie avancée',
                    'Interopérabilité systèmes',
                    'Conformité RGPD/souveraineté'
                ],
                'projects' => ['WURI CEDEAO', 'Orange KYC', 'Systèmes bancaires'],
                'languages' => ['Français', 'Anglais', 'Java', 'Solidity'],
                'image' => '/images/team/kone-s.jpg'
            ],
            [
                'name' => 'Marie-Claire A.',
                'role' => 'Consultante KYC & Compliance',
                'experience' => '5 ans réglementation financière',
                'certifications' => ['CAMS', 'RGPD DPO', 'ACAMS'],
                'specialties' => [
                    'Réglementations KYC/AML',
                    'RGPD et protection données',
                    'Audit et conformité',
                    'Risk management'
                ],
                'projects' => ['Solutions bancaires', 'Mobile money', 'Assurance'],
                'languages' => ['Français', 'Anglais', 'Compliance'],
                'image' => '/images/team/marie-claire-a.jpg'
            ]
        ];

        // Témoignages clients
        $testimonials = [
            [
                'client' => 'CNAM Côte d\'Ivoire',
                'author' => 'Karim BAMBA',
                'role' => 'Directeur Général',
                'content' => 'TECH N\'CHANGE a livré SIBIS, le plus grand système biométrique d\'Afrique de l\'Ouest. 20 millions d\'assurés enrôlés avec 99.9% de précision. Performance exceptionnelle.',
                'project' => 'SIBIS',
                'rating' => 5,
                'results' => ['20M+ enrôlés', '99.9% précision', '4M assurés CMU'],
                'image' => '/images/testimonials/cnam-dg.jpg'
            ],
            [
                'client' => 'Orange Côte d\'Ivoire',
                'author' => 'Direction IT',
                'role' => 'Directeur Systèmes d\'Information',
                'content' => 'Les solutions KYC de TECH N\'CHANGE ont permis d\'identifier 14M+ utilisateurs et d\'augmenter nos transactions digitales de 30%. ROI exceptionnel.',
                'project' => 'Solutions KYC',
                'rating' => 5,
                'results' => ['14M+ users', '+30% transactions', '+25% CA digital'],
                'image' => '/images/testimonials/orange-dit.jpg'
            ]
        ];

        // Avantages concurrentiels
        $competitiveAdvantages = [
            [
                'title' => 'Expertise Unique en Afrique',
                'description' => 'Seule entreprise africaine maîtrisant l\'ensemble de la chaîne biométrique à cette échelle.',
                'icon' => 'StarIcon',
                'benefits' => [
                    '20M+ individus traités',
                    'Algorithmes optimisés populations africaines',
                    'Connaissance réglementaire locale',
                    'Support dans langues locales'
                ]
            ],
            [
                'title' => 'Souveraineté Technologique',
                'description' => 'Solutions développées localement garantissant souveraineté et sécurité des données.',
                'icon' => 'ShieldCheckIcon',
                'benefits' => [
                    'Données hébergées localement',
                    'Conformité réglementaire totale',
                    'Indépendance technologique',
                    'Contrôle total de la solution'
                ]
            ],
            [
                'title' => 'Interopérabilité Prouvée',
                'description' => 'Capacité démontrée d\'interconnecter multiples systèmes existants.',
                'icon' => 'LinkIcon',
                'benefits' => [
                    '5 systèmes interconnectés',
                    'APIs standardisées',
                    'Migration sans interruption',
                    'Évolutivité garantie'
                ]
            ]
        ];

        // Méta données SEO
        $meta = [
            'title' => 'Identité Numérique & Biométrie - TECH N\'CHANGE | 20M+ enrôlés SIBIS',
            'description' => 'Solutions biométriques et KYC de référence en Afrique. SIBIS : 20M+ enrôlés, 99.9% précision. Orange : 14M+ users, +30% transactions. Expertise unique souveraine.',
            'keywords' => 'identité numérique, biométrie, KYC, SIBIS, enrôlement biométrique, déduplication IA, Orange KYC, inclusion financière, souveraineté numérique, blockchain',
            'canonical' => url('/services/identite-numerique'),
            'og_image' => '/images/services/identity-og.jpg'
        ];

        return Inertia::render('Services/Identity', [
            'stats' => $stats,
            'featuredProjects' => $featuredProjects,
            'technologies' => $technologies,
            'sectors' => $sectors,
            'implementationProcess' => $implementationProcess,
            'expertTeam' => $expertTeam,
            'testimonials' => $testimonials,
            'competitiveAdvantages' => $competitiveAdvantages,
            'meta' => $meta
        ]);
    }
}
