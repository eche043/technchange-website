<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ProjetsController extends Controller
{
    //
    public function index()
    {
        // Projets phares avec données réelles de Technchange
        $featuredProjects = [
            [
                'id' => 'sibis',
                'title' => 'Système d\'Identification Biométrique In Situ (SIBIS)',
                'period' => '2022-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'Solutions Biométriques',
                'description' => 'Déploiement du plus grand système d\'enrôlement biométrique d\'Afrique de l\'Ouest avec plus de 20 millions d\'individus enrôlés.',
                'image' => '/images/projects/sibis.jpg',
                'status' => 'Réalisé',
                'scope' => 'National',
                'featured' => true,
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
                'certifications' => ['ISO 27001', 'Standards ANSSI'],
                'achievements' => [
                    'Plus grand système biométrique d\'Afrique de l\'Ouest',
                    'Interconnexion avec MIRKA, e-CMU, Auxilium',
                    'Déduplication supérieure à 99.9%'
                ]
            ],
            [
                'id' => 'boost-cmu',
                'title' => 'BOOST Couverture Maladie Universelle',
                'period' => '2024-2025',
                'client' => 'CNAM Côte d\'Ivoire',
                'type' => 'AMOA & Solutions',
                'description' => 'Numérisation des services de santé, sécurisation des flux de données et augmentation significative du recouvrement des recettes.',
                'image' => '/images/projects/boost-cmu.jpg',
                'status' => 'En cours',
                'scope' => 'National',
                'featured' => true,
                'impact' => [
                    [
                        'metric' => '+1M',
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
                'achievements' => [
                    'Réduction de 30% du temps d\'enrôlement',
                    'Réduction de 20% des coûts opérationnels',
                    '1 million de bénéficiaires supplémentaires'
                ]
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
                'scope' => 'National',
                'featured' => true,
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
                'achievements' => [
                    'Supervision temps réel nationale',
                    'Réduction 25% délais intervention',
                    'Alertes automatisées géolocalisées'
                ]
            ],
            [
                'id' => 'orange-ci',
                'title' => 'Transformation Digitale Orange CI',
                'period' => '2018-2020',
                'client' => 'Orange Côte d\'Ivoire',
                'type' => 'AMOA & Solutions',
                'description' => 'Structuration et supervision de la transformation digitale d\'Orange CI (18 GFCFA/an), identification de plus de 14 millions d\'utilisateurs.',
                'image' => '/images/projects/orange-ci.jpg',
                'status' => 'Réalisé',
                'scope' => 'National',
                'featured' => true,
                'impact' => [
                    [
                        'metric' => '+14M',
                        'description' => 'utilisateurs identifiés'
                    ],
                    [
                        'metric' => '+30%',
                        'description' => 'achats digitaux'
                    ],
                    [
                        'metric' => '+25%',
                        'description' => 'CA digitalisé'
                    ],
                    [
                        'metric' => '18G',
                        'description' => 'FCFA de CA annuel'
                    ]
                ],
                'technologies' => ['Digital Transformation', 'E-commerce', 'Mobile Apps', 'CRM'],
                'category' => 'Télécommunications',
                'achievements' => [
                    'CA de 18 milliards FCFA/an',
                    '30% d\'augmentation achats digitaux',
                    '14 millions d\'utilisateurs identifiés'
                ]
            ],
            [
                'id' => 'digitrans-b2c',
                'title' => 'digiTRANS B2C - Plateforme Covoiturage',
                'period' => '2019-2025',
                'client' => 'TECH N\'CHANGE (Produit propriétaire)',
                'type' => 'Développement Produit',
                'description' => 'Plateforme 100% digitale de covoiturage pour habitants des grandes métropoles africaines avec plus de 25 000 inscriptions.',
                'image' => '/images/projects/digitrans-b2c.jpg',
                'status' => 'En production',
                'scope' => 'Régional',
                'featured' => true,
                'awards' => [
                    'Lauréat France/Afrique 2020',
                    'Awards Mobilité CIV 2020'
                ],
                'impact' => [
                    [
                        'metric' => '+25K',
                        'description' => 'inscriptions utilisateurs'
                    ],
                    [
                        'metric' => '+200%',
                        'description' => 'croissance 2019-2020'
                    ],
                    [
                        'metric' => '55%',
                        'description' => 'utilisatrices femmes'
                    ],
                    [
                        'metric' => '25-55',
                        'description' => 'âge moyen (ans)'
                    ]
                ],
                'technologies' => ['Vue.js', 'Laravel', 'Géolocalisation', 'Mobile App', 'Paiement Mobile'],
                'category' => 'Transport & Mobilité',
                'demographics' => [
                    'Population cible' => '~1.5 à 2M habitants',
                    'Secteur emploi' => 'Services/Administration',
                    'Budget transport' => '25 à 60k FCFA/mois'
                ]
            ],
            [
                'id' => 'pbf',
                'title' => 'Performance-Based Financing (PBF)',
                'period' => '2025',
                'client' => 'Ministère de la Santé CI',
                'type' => 'AMOA & Solutions',
                'description' => 'Automatisation complète de la saisie, validation, certification et contrôle qualité des indicateurs PBF.',
                'image' => '/images/projects/pbf.jpg',
                'status' => 'En contractualisation',
                'scope' => 'National',
                'impact' => [
                    [
                        'metric' => '-40%',
                        'description' => 'd\'erreurs de facturation'
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
                        'metric' => '24/7',
                        'description' => 'supervision continue'
                    ]
                ],
                'technologies' => ['Automatisation', 'Dashboards', 'APIs', 'Contrôle qualité'],
                'category' => 'Santé Publique'
            ],
            [
                'id' => 'wuri',
                'title' => 'West Africa Unique Identification for Regional Integration',
                'period' => '2025',
                'client' => 'Ministère Emploi et Protection Sociale',
                'type' => 'Solutions Biométriques',
                'description' => 'Authentification sécurisée et souveraine des usagers des systèmes d\'information gouvernementaux (santé, éducation, protection sociale).',
                'image' => '/images/projects/wuri.jpg',
                'status' => 'En cours',
                'scope' => 'Régional',
                'impact' => [
                    [
                        'metric' => '100%',
                        'description' => 'authentification sécurisée'
                    ],
                    [
                        'metric' => '5',
                        'description' => 'pays couverts'
                    ],
                    [
                        'metric' => '3',
                        'description' => 'secteurs intégrés'
                    ],
                    [
                        'metric' => 'Souverain',
                        'description' => 'système régional'
                    ]
                ],
                'technologies' => ['Biométrie', 'PKI', 'Interopérabilité', 'Sécurité'],
                'category' => 'Identité Numérique'
            ]
        ];

        // Statistiques globales
        $stats = [
            [
                'label' => 'Projets réalisés',
                'value' => 250,
                'suffix' => '+',
                'description' => 'Depuis 2017'
            ],
            [
                'label' => 'Millions d\'utilisateurs impactés',
                'value' => 20,
                'suffix' => '+',
                'description' => 'À travers nos solutions'
            ],
            [
                'label' => 'Clients de référence',
                'value' => 50,
                'suffix' => '+',
                'description' => 'Entreprises & Administrations'
            ],
            [
                'label' => 'Taux de satisfaction',
                'value' => 99,
                'suffix' => '%',
                'description' => 'Client confirmé'
            ]
        ];

        // Filtres par catégorie
        $categories = [
            'all' => 'Tous les projets',
            'Identité Numérique' => 'Identité Numérique',
            'Santé Publique' => 'Santé Publique',
            'Transport & Mobilité' => 'Transport & Mobilité',
            'Télécommunications' => 'Télécommunications',
            'Supervision & Monitoring' => 'Supervision & Monitoring'
        ];

        // Filtres par statut
        $statuses = [
            'all' => 'Tous les statuts',
            'Réalisé' => 'Réalisé',
            'En cours' => 'En cours',
            'En production' => 'En production',
            'En contractualisation' => 'En contractualisation'
        ];

        // Technologies utilisées
        $technologies = [
            'Biométrie', 'IA', 'Big Data', 'Blockchain', 'Vue.js', 'Laravel',
            'APIs', 'Mobile App', 'IoT', 'Géolocalisation', 'Machine Learning',
            'Automatisation', 'PKI', 'Sécurité', 'Dashboards'
        ];

        // Clients de référence
        $clients = [
            [
                'name' => 'CNAM Côte d\'Ivoire',
                'logo' => '/images/clients/cnam.png',
                'projects' => ['SIBIS', 'BOOST CMU', 'IOC'],
                'sector' => 'Santé Publique'
            ],
            [
                'name' => 'Orange Côte d\'Ivoire',
                'logo' => '/images/clients/orange.png',
                'projects' => ['Transformation Digitale'],
                'sector' => 'Télécommunications'
            ],
            [
                'name' => 'Ministère de la Santé',
                'logo' => '/images/clients/ministere-sante.png',
                'projects' => ['IOC', 'PBF'],
                'sector' => 'Administration'
            ],
            [
                'name' => 'Ministère Emploi et Protection Sociale',
                'logo' => '/images/clients/meps.png',
                'projects' => ['WURI'],
                'sector' => 'Administration'
            ]
        ];

        // Témoignages clients
        $testimonials = [
            [
                'client' => 'CNAM Côte d\'Ivoire',
                'author' => 'Direction Générale',
                'content' => 'TECH N\'CHANGE a su déployer le système biométrique SIBIS avec une précision exceptionnelle de 99.9%. Plus de 20 millions d\'assurés enrôlés avec succès.',
                'project' => 'SIBIS',
                'rating' => 5
            ],
            [
                'client' => 'Orange CI',
                'author' => 'Direction Transformation Digitale',
                'content' => 'L\'accompagnement de TECH N\'CHANGE a permis d\'augmenter nos achats digitaux de 30% et de digitaliser 25% de notre chiffre d\'affaires.',
                'project' => 'Transformation Digitale',
                'rating' => 5
            ]
        ];

        // Méta données SEO
        $meta = [
            'title' => 'Nos Projets - TECH N\'CHANGE | SIBIS, BOOST CMU, digiTRANS, Orange CI',
            'description' => 'Découvrez nos réalisations majeures : SIBIS (20M+ enrôlés), BOOST CMU, IOC, digiTRANS (Awards 2020), transformation Orange CI. Projets d\'envergure nationale.',
            'keywords' => 'projets, réalisations, SIBIS, BOOST CMU, IOC, digiTRANS, Orange CI, biométrie, santé digitale, transport, AMOA',
            'canonical' => url('/projets')
        ];

        return Inertia::render('Projets/Index', [
            'featuredProjects' => $featuredProjects,
            'stats' => $stats,
            'categories' => $categories,
            'statuses' => $statuses,
            'technologies' => $technologies,
            'clients' => $clients,
            'testimonials' => $testimonials,
            'meta' => $meta
        ]);
    }

    public function show($id)
    {
        // TODO: Implémenter la page détaillée d'un projet
        return Inertia::render('Projets/Show', [
            'project' => $this->getProjectById($id)
        ]);
    }

    private function getProjectById($id)
    {
        // Logique pour récupérer un projet spécifique
        // À implémenter selon vos besoins
        return null;
    }
}
