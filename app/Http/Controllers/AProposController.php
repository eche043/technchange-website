<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AProposController extends Controller
{
    //
    public function index()
    {
        // Histoire et informations entreprise
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
            'founding_story' => [
                'year' => 2017,
                'context' => 'Fondée en 2017 en pleine révolution numérique africaine',
                'mission_origin' => 'Accompagner les Entreprises et Administrations dans leur transformation digitale',
                'approach' => 'Adoption et intégration de technologies de rupture (Web/Apps, Blockchain, IA, Big Data)',
                'methodology' => 'Accompagnement agile depuis une idée jusqu\'à la mise en production'
            ]
        ];

        // Mission, Vision et Valeurs
        $vision = [
            'mission' => 'Accompagner la transformation digitale de l\'Afrique en développant des solutions technologiques souveraines, inclusives et durables.',
            'vision' => 'Devenir le partenaire de référence pour la digitalisation des services publics et privés en Afrique de l\'Ouest.',
            'values' => [
                [
                    'title' => 'Vision 360°',
                    'description' => 'De la stratégie à l\'opérationnel, une approche de bout en bout pour votre succès. Notre équipe certifiée assure une expertise globale.',
                    'icon' => 'SparklesIcon'
                ],
                [
                    'title' => 'Solutions Interopérables',
                    'description' => 'Flux API REST/JSON pour une connectivité continue des systèmes. Intégration "plug-and-play" avec les plateformes existantes.',
                    'icon' => 'CogIcon'
                ],
                [
                    'title' => 'Référentiels Métiers',
                    'description' => 'Maîtrise des données de transactions financière, utilisateurs et rôles. Sécurisation centralisée des données cruciales.',
                    'icon' => 'ShieldCheckIcon'
                ],
                [
                    'title' => 'Architectures Robustes',
                    'description' => 'Déploiement de systèmes haute disponibilité et tolérance de panne. Chiffrement AES-256 et audits réguliers garantissent la sécurité.',
                    'icon' => 'BuildingOfficeIcon'
                ],
                [
                    'title' => 'Agilité & Réactivité',
                    'description' => 'Méthodologie agile pour une adaptation continue et des livraisons rapides. Support des workflows hybrides pour toutes les zones.',
                    'icon' => 'BoltIcon'
                ],
                [
                    'title' => 'Engagement Qualité',
                    'description' => 'Respect strict des délais, optimisation des coûts, satisfaction client garantie. Processus automatisés de synchronisation des données.',
                    'icon' => 'TrophyIcon'
                ]
            ]
        ];

        // Équipe de direction et organisation
        $leadership = [
            'director' => [
                'name' => 'Yves MAO',
                'role' => 'Directeur Général',
                'expertise' => 'Vision stratégique & Innovation',
                'image' => '/images/team/yves-mao.jpg',
                'experience' => '15+ ans',
                'education' => 'École d\'Ingénieurs',
                'bio' => 'Visionnaire de la transformation digitale en Afrique, Yves MAO dirige TECH N\'CHANGE avec une approche centrée sur l\'innovation et l\'impact social.'
            ],
            'structure' => [
                'technical_innovation' => 'Direction Technique et Innovation',
                'strategy_commercial' => 'Stratégie et Développement Commercial',
                'operations' => 'Gestion des Moyens et Ressources Humaines'
            ]
        ];

        // Départements et équipes
        $departments = [
            [
                'name' => 'Conseil/AMOA',
                'count' => 4,
                'role' => 'Consultants Senior',
                'expertise' => 'Transformation digitale & Gouvernance SI',
                'image' => '/images/team/amoa-team.jpg',
                'certifications' => ['TOGAF', 'ITIL', 'Agile'],
                'projects' => '150+ projets pilotés',
                'description' => '60% de notre activité - Assistance à maîtrise d\'ouvrage pour projets complexes',
                'icon' => 'ChartBarIcon'
            ],
            [
                'name' => 'Développement Web/Apps',
                'count' => 6,
                'role' => 'Développeurs Full-Stack',
                'expertise' => 'Web, Mobile, Blockchain, IA, Big Data',
                'image' => '/images/team/dev-team.jpg',
                'technologies' => ['Vue.js', 'Laravel', 'Node.js', 'Python', 'React Native'],
                'certifications' => ['AWS', 'Azure', 'Google Cloud'],
                'description' => 'Équipe technique polyvalente maîtrisant les technologies de pointe',
                'icon' => 'CogIcon'
            ],
            [
                'name' => 'Support et Maintenance IoT',
                'count' => 4,
                'role' => 'Spécialistes IoT/FIWARE',
                'expertise' => 'IoT, FIWARE, Monitoring temps réel',
                'image' => '/images/team/iot-team.jpg',
                'technologies' => ['FIWARE', 'IoT', 'Monitoring', 'Standards UE'],
                'certifications' => ['Membre FIWARE Foundation', 'Projets UE financés'],
                'description' => 'Experts en solutions IoT conformes aux standards européens',
                'icon' => 'BuildingOfficeIcon'
            ],
            [
                'name' => 'Solutions digiTRANS',
                'leads' => [
                    [
                        'name' => 'Binta OUATTARA',
                        'role' => 'Chef de projet digiTRANS B2B',
                        'expertise' => 'Gestion de flotte professionnelle',
                        'image' => '/images/team/binta-ouattara.jpg'
                    ],
                    [
                        'name' => 'Rita BROU',
                        'role' => 'Chef de projet digiTRANS B2C',
                        'expertise' => 'Covoiturage & mobilité urbaine',
                        'image' => '/images/team/rita-brou.jpg'
                    ]
                ],
                'description' => 'Équipe dédiée aux solutions transport primées internationalement',
                'achievements' => ['Lauréat France/Afrique 2020', '25K+ utilisateurs'],
                'icon' => 'TruckIcon'
            ],
            [
                'name' => 'Administration & Support',
                'count' => 12,
                'roles' => [
                    'Gestion des Moyens Généraux et Logistique (4)',
                    'Administration, Comptabilité et Finances (3)',
                    'Gestion des Ressources Humaines et Recrutement (3)',
                    'Support Client et Formation (2)'
                ],
                'expertise' => 'Support 24/7, Formation, Documentation',
                'languages' => ['Français', 'Anglais', 'Langues locales'],
                'coverage' => 'Afrique de l\'Ouest',
                'description' => 'Équipe support garantissant la qualité de service',
                'icon' => 'UsersIcon'
            ]
        ];

        // Processus d'innovation Design Thinking
        $innovationProcess = [
            [
                'step' => 1,
                'title' => 'Idées',
                'description' => 'Brainstorming et identification des besoins clients',
                'icon' => 'SparklesIcon',
                'duration' => '1-2 semaines',
                'delivrables' => ['Cahier des charges', 'Analyse de faisabilité']
            ],
            [
                'step' => 2,
                'title' => 'Ateliers',
                'description' => 'Sessions collaboratives de co-création avec les parties prenantes',
                'icon' => 'UsersIcon',
                'duration' => '2-3 semaines',
                'delivrables' => ['Maquettes', 'User stories', 'Architecture']
            ],
            [
                'step' => 3,
                'title' => 'Design de la Solution',
                'description' => 'Conception détaillée et prototypage de la solution',
                'icon' => 'CogIcon',
                'duration' => '3-4 semaines',
                'delivrables' => ['Prototypes', 'Spécifications techniques']
            ],
            [
                'step' => 4,
                'title' => 'POC / Pilote',
                'description' => 'Proof of Concept et tests avec un groupe restreint d\'utilisateurs',
                'icon' => 'BoltIcon',
                'duration' => '4-6 semaines',
                'delivrables' => ['POC fonctionnel', 'Tests utilisateurs']
            ],
            [
                'step' => 5,
                'title' => 'Lancement Produit/Service',
                'description' => 'Déploiement complet avec formation et accompagnement',
                'icon' => 'TrophyIcon',
                'duration' => '2-4 semaines',
                'delivrables' => ['Solution déployée', 'Formation', 'Documentation']
            ]
        ];

        // Statistiques entreprise
        $stats = [
            [
                'label' => 'Années d\'expérience',
                'value' => 8,
                'suffix' => '+',
                'description' => 'Depuis 2017'
            ],
            [
                'label' => 'Collaborateurs',
                'value' => 28,
                'suffix' => '',
                'description' => 'Équipe pluridisciplinaire'
            ],
            [
                'label' => 'Projets réalisés',
                'value' => 250,
                'suffix' => '+',
                'description' => 'Tous secteurs confondus'
            ],
            [
                'label' => 'Clients satisfaits',
                'value' => 50,
                'suffix' => '+',
                'description' => 'Entreprises & Administrations'
            ]
        ];

        // Certifications et reconnaissances
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

        ];

        // Attestations de Bonne Exécution (ABE) - 6 ABE identifiées
        $attestations = [
            [
                'title' => 'ABE ANADER - Schéma Directeur SI',
                'amount' => '120 094 500',
                'currency' => 'FCFA',
                'period' => 'Mars - Décembre 2023',
                'date_emission' => '19 janvier 2024',
                'client' => 'ANADER',
                'client_full' => 'Agence Nationale d\'Appui au Développement Rural',
                'description' => 'Élaboration du schéma directeur informatique de l\'ANADER',
                'status' => 'Réalisé',
                'reference' => 'N° 009 - MEMINADER/DG.ANADER/D2MG.2024/CMH/SA',
                'director' => 'M. CISSE Moustapha Hassan',
                'representative' => 'YVES MAO, Directeur Général',
                'type' => 'Conseil IT',
                'image' => '/images/abe/anader_schema_directeur_2024.pdf',
                'priority' => 'high'
            ],
            [
                'title' => 'ABE Orange CI - Projet Épervier',
                'amount' => '250 000 000',
                'currency' => 'FCFA',
                'period' => 'Mars 2012 - Avril 2013',
                'date_emission' => '29 juillet 2020',
                'client' => 'Orange CI',
                'client_full' => 'Orange Côte d\'Ivoire',
                'description' => 'Conception et mise en œuvre du projet Épervier dans le cadre du programme de transformation du SI commercial (programme UNIQ)',
                'status' => 'Réalisé',
                'reference' => 'ABE Projet Épervier',
                'director' => 'Patrick N\'DOUA, Directeur Adjoint Projets ITN',
                'representative' => 'MAO YAPO YVES, Directeur Exécutif',
                'type' => 'AMOA',
                'image' => '/images/abe/orange_epervier_2020.pdf',
                'priority' => 'high',
                'results' => [
                    'Accès unique aux applications pour les Chargés de Clientèle',
                    'Vision 360° d\'un Client (tout univers confondu)',
                    'Déployé dans toute la zone UEMOA',
                    'Programme de transformation SI commercial réussi'
                ]
            ],
            [
                'title' => 'ABE CNAM - SIBIS AMOA',
                'amount' => 'Montant confidentiel',
                'currency' => '',
                'period' => 'Septembre 2022 - Décembre 2023',
                'date_emission' => '17 janvier 2024',
                'client' => 'CNAM',
                'client_full' => 'Caisse Nationale d\'Assurance Maladie',
                'description' => 'Mission d\'Assistance à la Maîtrise d\'Ouvrage pour l\'accompagnement de la mise en œuvre opérationnelle et la montée en puissance du Système d\'Information Biométrique In Situ (SIBIS)',
                'status' => 'Réalisé',
                'reference' => 'Mission AMOA SIBIS',
                'director' => 'Karim BAMBA, Directeur Général',
                'representative' => 'M. Yves MAO, Directeur Général',
                'type' => 'AMOA',
                'image' => '/images/abe/cnam_sibis_amoa_2024.pdf',
                'priority' => 'high',
                'results' => [
                    'Élaboration du cadre contractuel et fonctionnel',
                    'Opérationnalisation du SIBIS',
                    'Remise des cartes biométriques aux assurés CMU',
                    'Déploiement total du SIBIS à l\'échelle nationale'
                ]
            ],
            [
                'title' => 'ABE ANADER - Car Policy',
                'amount' => '29 500 000',
                'currency' => 'FCFA',
                'period' => 'Décembre 2020 - Juin 2021',
                'date_emission' => '14 octobre 2022',
                'client' => 'ANADER',
                'client_full' => 'Agence Nationale d\'Appui au Développement Rural',
                'description' => 'Élaboration et mise en œuvre de la nouvelle politique de gestion de la flotte de véhicules ANADER',
                'status' => 'Réalisé',
                'reference' => 'N° 128 / MEMINADER/DG.2022/D2MG/CMH/BN',
                'director' => 'M. CISSE Moustapha Hassan',
                'representative' => 'YVES MAO, Directeur Général',
                'type' => 'Car Policy',
                'image' => '/images/abe/anader_car_policy_2022.pdf',
                'priority' => 'high',
                'results' => [
                    'Réduction de 20% des charges courantes',
                    'Diminution de 30% des amendes',
                    'Augmentation de 30% du taux de disponibilité'
                ]
            ],
            [
                'title' => 'ABE CNAM - Car Policy',
                'amount' => '13 600 000',
                'currency' => 'FCFA',
                'period' => '2022',
                'date_emission' => '17 octobre 2022',
                'client' => 'CNAM',
                'client_full' => 'Caisse Nationale d\'Assurance Maladie',
                'description' => 'Élaboration et mise en œuvre de la politique de gestion de la flotte de véhicules de la CNAM',
                'status' => 'Réalisé',
                'reference' => 'Réf. ER-21-ACH',
                'director' => 'Karim BAMBA, Directeur Général',
                'representative' => 'Monsieur MAO YVES',
                'type' => 'Car Policy',
                'image' => '/images/abe/cnam_car_policy_2022.pdf',
                'priority' => 'high'
            ],
            [
                'title' => 'ABE CNAM - Auto-enrôlement CMU',
                'amount' => 'Montant confidentiel',
                'currency' => '',
                'period' => 'Mars 2022 - Décembre 2023',
                'date_emission' => '17 janvier 2024',
                'client' => 'CNAM',
                'client_full' => 'Caisse Nationale d\'Assurance Maladie',
                'description' => 'Mission d\'Assistance à la Maîtrise d\'Ouvrage pour la mise en œuvre du système d\'auto-enrôlement biométrique à la Couverture Maladie Universelle (CMU)',
                'status' => 'Réalisé',
                'reference' => 'Mission AMOA CMU',
                'director' => 'Karim BAMBA, Directeur Général',
                'representative' => 'M. Yves MAO, Directeur Général',
                'type' => 'AMOA',
                'image' => '/images/abe/cnam_auto_enrolement_2024.pdf',
                'priority' => 'high',
                'results' => [
                    'Déploiement système d\'identification électronique',
                    'Solution technologique smartphone',
                    'Cadrage projet complet',
                    'Assistance contractuelle et opérationnelle'
                ]
            ]
        ];

        // Culture d'entreprise
        $culture = [
            'work_environment' => [
                'title' => 'Environnement de travail',
                'description' => 'Espace moderne et collaboratif favorisant l\'innovation et la créativité',
                'features' => ['Open space', 'Salles de réunion équipées', 'Espaces détente', 'Matériel haut de gamme']
            ],
            'benefits' => [
                'title' => 'Avantages sociaux',
                'description' => 'Package complet pour le bien-être de nos collaborateurs',
                'features' => ['Assurance santé', 'Formation continue', 'Télétravail hybride', 'Congés payés étendus']
            ],
            'growth' => [
                'title' => 'Développement professionnel',
                'description' => 'Accompagnement personnalisé dans l\'évolution de carrière',
                'features' => ['Formations certifiantes', 'Mentoring', 'Projets internationaux', 'Participation conférences']
            ]
        ];

        // Localisation et contact
        $location = [
            'headquarters' => [
                'address' => 'Cocody, Riviera Attoban, derrière le 30ème arrondissement',
                'postal' => '08 BP 3823 ABIDJAN 08',
                'city' => 'Abidjan',
                'country' => 'Côte d\'Ivoire',
                'coordinates' => [
                    'lat' => 5.3599517,
                    'lng' => -3.9782057
                ]
            ],
            'contact' => [
                'phone' => ['+225 21 21 32 42 47', '+225 07 89 97 11 13'],
                'email' => 'contact@technchange.net',
                'website' => 'www.technchange.net'
            ]
        ];

        // Méta données SEO
        $meta = [
            'title' => 'À Propos - TECH N\'CHANGE | Cabinet de conseil ivoirien depuis 2017',
            'description' => 'Découvrez TECH N\'CHANGE : 28 collaborateurs, 8 ans d\'expertise, 250+ projets réalisés. Mission, vision, équipe et culture d\'entreprise du leader ivoirien de la transformation digitale.',
            'keywords' => 'à propos, TECH N\'CHANGE, équipe, Yves MAO, cabinet conseil, Côte d\'Ivoire, transformation digitale, histoire entreprise, culture, valeurs',
            'canonical' => url('/a-propos')
        ];

        return Inertia::render('APropos/Index', [
            'companyInfo' => $companyInfo,
            'vision' => $vision,
            'leadership' => $leadership,
            'departments' => $departments,
            'innovationProcess' => $innovationProcess,
            'stats' => $stats,
            'certifications' => $certifications,
            'attestations' => $attestations,
            'culture' => $culture,
            'location' => $location,
            'meta' => $meta
        ]);
    }

    public function equipe()
    {
        // TODO: Page dédiée à l'équipe avec profils détaillés
        return Inertia::render('APropos/Equipe');
    }

    public function histoire()
    {
        // TODO: Page dédiée à l'histoire de l'entreprise
        return Inertia::render('APropos/Histoire');
    }

    public function culture()
    {
        // TODO: Page dédiée à la culture d'entreprise
        return Inertia::render('APropos/Culture');
    }
}
