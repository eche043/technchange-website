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
                'route' => 'services.amoa',
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
                'route' => 'services.identity'
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
                'route' => 'services.transport'
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
                'route' => 'services.solutions'
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
                'route' => 'services.patrimoine'
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
}
