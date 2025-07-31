<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CarrieresController extends Controller
{
    //
    public function index()
    {
        // Postes ouverts actuellement
        $openPositions = [
            [
                'id' => 'consultant-amoa-senior',
                'title' => 'Consultant AMOA Senior',
                'department' => 'Conseil & Stratégie',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '5+ ans',
                'positions_available' => 2,
                'posted_date' => '2025-01-15',
                'deadline' => '2025-03-15',
                'featured' => true,
                'salary_range' => '800K - 1.2M FCFA',
                'description' => 'Nous recherchons des consultants AMOA expérimentés pour piloter des projets de transformation digitale d\'envergure nationale comme BOOST CMU et IOC.',
                'responsibilities' => [
                    'Pilotage de projets AMOA complexes (BOOST CMU, IOC, PBF)',
                    'Élaboration de schémas directeurs SI',
                    'Gouvernance numérique et conduite du changement',
                    'Encadrement d\'équipes junior',
                    'Interface client et partie prenantes'
                ],
                'requirements' => [
                    '5+ ans d\'expérience en AMOA/conseil IT',
                    'Certifications TOGAF, ITIL ou équivalent',
                    'Expérience projets administration publique',
                    'Maîtrise méthodologies agiles',
                    'Excellent relationnel et communication'
                ],
                'skills' => ['AMOA', 'TOGAF', 'ITIL', 'Agile', 'Gouvernance SI'],
                'benefits' => [
                    'Participation aux projets d\'envergure nationale',
                    'Formation continue et certifications',
                    'Package salarial attractif',
                    'Télétravail hybride'
                ],
                'icon' => 'ChartBarIcon'
            ],
            [
                'id' => 'developpeur-fullstack',
                'title' => 'Développeur Full-Stack Vue.js/Laravel',
                'department' => 'Développement',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '3+ ans',
                'positions_available' => 3,
                'posted_date' => '2025-01-20',
                'deadline' => '2025-03-20',
                'featured' => true,
                'salary_range' => '600K - 900K FCFA',
                'description' => 'Rejoignez notre équipe technique pour développer des solutions innovantes comme digiTRANS et les plateformes biométriques SIBIS.',
                'responsibilities' => [
                    'Développement applications Vue.js/Laravel',
                    'Conception architectures techniques robustes',
                    'Intégration APIs et services tiers',
                    'Optimisation performances et sécurité',
                    'Mentoring développeurs junior'
                ],
                'requirements' => [
                    '3+ ans d\'expérience Vue.js et Laravel',
                    'Maîtrise des APIs REST/GraphQL',
                    'Expérience bases de données (MySQL, PostgreSQL)',
                    'Connaissances DevOps (Docker, CI/CD)',
                    'Anglais technique requis'
                ],
                'skills' => ['Vue.js', 'Laravel', 'PHP', 'JavaScript', 'MySQL', 'Docker'],
                'benefits' => [
                    'Stack technologique moderne',
                    'Projets open source (FIWARE)',
                    'Formations certifiantes (AWS, Azure)',
                    'Équipement haut de gamme'
                ],
                'icon' => 'CogIcon'
            ],
            [
                'id' => 'expert-identite-numerique',
                'title' => 'Expert Identité Numérique & Biométrie',
                'department' => 'Solutions Spécialisées',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '4+ ans',
                'positions_available' => 2,
                'posted_date' => '2025-01-10',
                'deadline' => '2025-03-10',
                'featured' => true,
                'salary_range' => '700K - 1M FCFA',
                'description' => 'Expertise rare recherchée pour nos solutions biométriques SIBIS (20M+ enrôlés) et projets KYC d\'inclusion financière.',
                'responsibilities' => [
                    'Conception systèmes biométriques à grande échelle',
                    'Algorithmes de déduplication (99.9% précision)',
                    'Intégration PKI et certificats numériques',
                    'Conformité standards ANSSI/ISO 27001',
                    'R&D technologies émergentes'
                ],
                'requirements' => [
                    '4+ ans biométrie/identité numérique',
                    'Expérience systèmes haute disponibilité',
                    'Maîtrise cryptographie et PKI',
                    'Certifications sécurité (CISSP, CISM)',
                    'Expérience projets gouvernementaux'
                ],
                'skills' => ['Biométrie', 'PKI', 'Cryptographie', 'ISO 27001', 'Machine Learning'],
                'benefits' => [
                    'Projets d\'impact social majeur',
                    'Technologies de pointe',
                    'Certifications internationales',
                    'Reconnaissance expertise'
                ],
                'icon' => 'FingerPrintIcon'
            ],
            [
                'id' => 'specialiste-iot-fiware',
                'title' => 'Spécialiste IoT/FIWARE',
                'department' => 'Innovation',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '3+ ans',
                'positions_available' => 1,
                'posted_date' => '2025-01-25',
                'deadline' => '2025-03-25',
                'featured' => false,
                'salary_range' => '650K - 850K FCFA',
                'description' => 'Membre FIWARE Foundation, nous cherchons un expert IoT pour nos solutions Smart Cities et projets européens.',
                'responsibilities' => [
                    'Développement plateformes IoT FIWARE',
                    'Architecture solutions Smart Cities',
                    'Intégration capteurs et objets connectés',
                    'Monitoring temps réel et dashboards',
                    'Support projets financés UE'
                ],
                'requirements' => [
                    '3+ ans développement IoT',
                    'Expérience FIWARE obligatoire',
                    'Maîtrise protocoles IoT (MQTT, CoAP)',
                    'Connaissances cloud (AWS IoT, Azure IoT)',
                    'Anglais courant (projets européens)'
                ],
                'skills' => ['FIWARE', 'IoT', 'MQTT', 'Node-RED', 'MongoDB', 'Docker'],
                'benefits' => [
                    'Projets européens innovants',
                    'Standards ouverts FIWARE',
                    'Participation conférences internationales',
                    'R&D avancée'
                ],
                'icon' => 'BuildingOfficeIcon'
            ],
            [
                'id' => 'chef-projet-digitrans',
                'title' => 'Chef de Projet digiTRANS',
                'department' => 'Transport & Mobilité',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '5+ ans',
                'positions_available' => 1,
                'posted_date' => '2025-02-01',
                'deadline' => '2025-04-01',
                'featured' => false,
                'salary_range' => '750K - 1M FCFA',
                'description' => 'Participez au succès de digiTRANS (25K+ utilisateurs, Awards 2020) en pilotant l\'évolution de nos solutions transport.',
                'responsibilities' => [
                    'Pilotage roadmap produit digiTRANS',
                    'Gestion équipe développement (6 personnes)',
                    'Interface clients B2B et B2C',
                    'Expansion régionale (Afrique de l\'Ouest)',
                    'Innovation produit et UX'
                ],
                'requirements' => [
                    '5+ ans gestion de produit digital',
                    'Expérience secteur transport/mobilité',
                    'Maîtrise méthodes agiles (Scrum)',
                    'Leadership et management d\'équipe',
                    'Vision stratégique produit'
                ],
                'skills' => ['Product Management', 'Agile', 'Transport', 'UX/UI', 'Analytics'],
                'benefits' => [
                    'Produit primé internationalement',
                    'Impact sur la mobilité urbaine',
                    'Équipe produit dédiée',
                    'Expansion internationale'
                ],
                'icon' => 'TruckIcon'
            ],
            [
                'id' => 'business-analyst',
                'title' => 'Business Analyst',
                'department' => 'Conseil & Stratégie',
                'type' => 'CDI',
                'location' => 'Abidjan, Côte d\'Ivoire',
                'experience' => '2+ ans',
                'positions_available' => 1,
                'posted_date' => '2025-02-05',
                'deadline' => '2025-04-05',
                'featured' => false,
                'salary_range' => '500K - 700K FCFA',
                'description' => 'Poste junior pour accompagner nos consultants AMOA senior sur l\'analyse métier et la spécification fonctionnelle.',
                'responsibilities' => [
                    'Analyse des besoins métier clients',
                    'Rédaction spécifications fonctionnelles',
                    'Modélisation processus métier',
                    'Interface utilisateurs finaux',
                    'Support déploiements'
                ],
                'requirements' => [
                    '2+ ans analyse métier/fonctionnelle',
                    'Formation supérieure (Bac+5)',
                    'Maîtrise outils de modélisation',
                    'Excellent relationnel',
                    'Rigueur et méthode'
                ],
                'skills' => ['Analyse métier', 'UML', 'BPMN', 'Cahier des charges', 'Tests'],
                'benefits' => [
                    'Encadrement consultants seniors',
                    'Formation AMOA avancée',
                    'Évolution rapide',
                    'Projets variés'
                ],
                'icon' => 'UsersIcon'
            ]
        ];

        // Statistiques RH attractives
        $stats = [
            [
                'label' => 'Collaborateurs',
                'value' => 20,
                'suffix' => '+',
                'description' => 'Équipe en croissance'
            ],
            [
                'label' => 'Années d\'expérience moyenne',
                'value' => 6,
                'suffix' => '+',
                'description' => 'Expertise confirmée'
            ],
            [
                'label' => 'Taux de rétention',
                'value' => 95,
                'suffix' => '%',
                'description' => 'Fidélité exceptionnelle'
            ],
            [
                'label' => 'Formations par an',
                'value' => 40,
                'suffix' => '+',
                'description' => 'Développement continu'
            ]
        ];

        // Avantages employés
        $benefits = [
            [
                'title' => 'Package Salarial Attractif',
                'description' => 'Salaires compétitifs avec primes de performance et participation aux bénéfices',
                'icon' => 'TrophyIcon',
                'features' => [
                    'Salaires au-dessus du marché',
                    'Primes de performance trimestrielles',
                    '13ème mois garanti',
                    'Participation aux bénéfices'
                ]
            ],
            [
                'title' => 'Formation & Développement',
                'description' => 'Programme complet de formation continue et certifications internationales',
                'icon' => 'SparklesIcon',
                'features' => [
                    'Budget formation 200K FCFA/an/personne',
                    'Certifications AWS, Azure, Google Cloud',
                    'Participation conférences internationales',
                    'Plan de carrière personnalisé'
                ]
            ],
            [
                'title' => 'Environnement de Travail',
                'description' => 'Espaces modernes et équipements haut de gamme pour votre confort',
                'icon' => 'BuildingOfficeIcon',
                'features' => [
                    'Open space moderne (Cocody)',
                    'MacBook Pro / PC haute performance',
                    'Salles de réunion équipées',
                    'Espaces détente et restauration'
                ]
            ],
            [
                'title' => 'Work-Life Balance',
                'description' => 'Flexibilité et équilibre vie professionnelle/personnelle',
                'icon' => 'UsersIcon',
                'features' => [
                    'Télétravail hybride (3j bureau / 2j home)',
                    '30 jours de congés payés',
                    'Horaires flexibles (7h-19h)',
                    'Congés parentaux étendus'
                ]
            ],
            [
                'title' => 'Santé & Bien-être',
                'description' => 'Couverture santé complète et programmes bien-être',
                'icon' => 'ShieldCheckIcon',
                'features' => [
                    'Assurance santé famille (100%)',
                    'Mutuelle dentaire et optique',
                    'Check-up médical annuel',
                    'Activités sportives d\'équipe'
                ]
            ],
            [
                'title' => 'Impact & Reconnaissance',
                'description' => 'Projets d\'envergure avec reconnaissance professionnelle',
                'icon' => 'GlobeEuropeAfricaIcon',
                'features' => [
                    'Projets d\'impact national (20M+ utilisateurs)',
                    'Awards et reconnaissances internationales',
                    'Publications techniques et conférences',
                    'Contribution open source FIWARE'
                ]
            ]
        ];

        // Processus de recrutement
        $recruitmentProcess = [
            [
                'step' => 1,
                'title' => 'Candidature',
                'description' => 'Envoi CV + lettre de motivation via notre plateforme',
                'duration' => '5 minutes',
                'icon' => 'DocumentTextIcon'
            ],
            [
                'step' => 2,
                'title' => 'Présélection',
                'description' => 'Analyse du profil par nos RH et manager technique',
                'duration' => '2-3 jours',
                'icon' => 'SparklesIcon'
            ],
            [
                'step' => 3,
                'title' => 'Test Technique',
                'description' => 'Évaluation compétences techniques (selon poste)',
                'duration' => '1-2 heures',
                'icon' => 'CogIcon'
            ],
            [
                'step' => 4,
                'title' => 'Entretien RH',
                'description' => 'Discussion motivation, projet professionnel, fit culturel',
                'duration' => '45 minutes',
                'icon' => 'UsersIcon'
            ],
            [
                'step' => 5,
                'title' => 'Entretien Technique',
                'description' => 'Échange avec le manager et l\'équipe technique',
                'duration' => '1 heure',
                'icon' => 'BuildingOfficeIcon'
            ],
            [
                'step' => 6,
                'title' => 'Décision & Offre',
                'description' => 'Retour sous 48h et négociation des conditions',
                'duration' => '2-3 jours',
                'icon' => 'TrophyIcon'
            ]
        ];

        // Témoignages employés
        $testimonials = [
            [
                'name' => 'Sarah K.',
                'role' => 'Développeuse Full-Stack',
                'department' => 'Équipe Technique',
                'experience' => '2 ans chez TECH N\'CHANGE',
                'content' => 'Rejoindre TECH N\'CHANGE a été la meilleure décision de ma carrière. Je travaille sur des projets d\'envergure comme SIBIS avec des technologies de pointe et une équipe exceptionnelle.',
                'rating' => 5,
                'image' => '/images/testimonials/sarah-k.jpg'
            ],
            [
                'name' => 'Mohamed T.',
                'role' => 'Consultant AMOA Senior',
                'department' => 'Conseil & Stratégie',
                'experience' => '4 ans chez TECH N\'CHANGE',
                'content' => 'L\'impact de nos projets AMOA sur la société ivoirienne est extraordinaire. Piloter BOOST CMU et voir 1 million de bénéficiaires supplémentaires, c\'est gratifiant !',
                'rating' => 5,
                'image' => '/images/testimonials/mohamed-t.jpg'
            ],
            [
                'name' => 'Aminata D.',
                'role' => 'Experte Biométrie',
                'department' => 'Solutions Spécialisées',
                'experience' => '3 ans chez TECH N\'CHANGE',
                'content' => 'Travailler sur SIBIS avec 20 millions d\'enrôlements et 99.9% de précision, c\'est unique en Afrique. L\'expertise technique ici est remarquable.',
                'rating' => 5,
                'image' => '/images/testimonials/aminata-d.jpg'
            ]
        ];

        // Culture d'entreprise
        $culture = [
            [
                'title' => 'Innovation Continue',
                'description' => 'R&D permanente et adoption des technologies émergentes',
                'icon' => 'SparklesIcon'
            ],
            [
                'title' => 'Impact Social',
                'description' => 'Projets qui transforment la vie de millions d\'Africains',
                'icon' => 'GlobeEuropeAfricaIcon'
            ],
            [
                'title' => 'Excellence Technique',
                'description' => 'Standards élevés et best practices internationales',
                'icon' => 'TrophyIcon'
            ],
            [
                'title' => 'Esprit d\'Équipe',
                'description' => 'Collaboration, entraide et partage de connaissances',
                'icon' => 'UsersIcon'
            ]
        ];

        // Départements qui recrutent
        $departments = [
            [
                'name' => 'Conseil & Stratégie',
                'open_positions' => 3,
                'description' => 'AMOA, Business Analysis, Gouvernance SI',
                'icon' => 'ChartBarIcon'
            ],
            [
                'name' => 'Développement',
                'open_positions' => 3,
                'description' => 'Full-Stack, Mobile, DevOps',
                'icon' => 'CogIcon'
            ],
            [
                'name' => 'Solutions Spécialisées',
                'open_positions' => 2,
                'description' => 'Biométrie, IoT, FIWARE',
                'icon' => 'FingerPrintIcon'
            ],
            [
                'name' => 'Transport & Mobilité',
                'open_positions' => 1,
                'description' => 'Product Management digiTRANS',
                'icon' => 'TruckIcon'
            ]
        ];

        // Méta données SEO
        $meta = [
            'title' => 'Carrières - TECH N\'CHANGE | Rejoignez l\'équipe qui transforme l\'Afrique',
            'description' => 'Rejoignez TECH N\'CHANGE : 9 postes ouverts (AMOA, Développement, Biométrie, IoT). Salaires attractifs, projets d\'envergure, formation continue. Candidatez maintenant !',
            'keywords' => 'carrières, emploi, recrutement, AMOA, développeur, biométrie, IoT, Abidjan, TECH N\'CHANGE, consultant, stage',
            'canonical' => url('/carrieres')
        ];

        return Inertia::render('Carrieres/Index', [
            'openPositions' => $openPositions,
            'stats' => $stats,
            'benefits' => $benefits,
            'recruitmentProcess' => $recruitmentProcess,
            'testimonials' => $testimonials,
            'culture' => $culture,
            'departments' => $departments,
            'meta' => $meta
        ]);
    }

    public function show($id)
    {
        // TODO: Page détaillée d'un poste
        return Inertia::render('Carrieres/Show', [
            'position' => $this->getPositionById($id)
        ]);
    }

    public function apply(Request $request)
    {
        // TODO: Traitement candidature
        $request->validate([
            'position_id' => 'required|string',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'cv' => 'required|file|mimes:pdf|max:5120',
            'cover_letter' => 'nullable|string',
            'portfolio' => 'nullable|url'
        ]);

        // Logique de traitement de candidature
        // Sauvegarde, envoi email, etc.

        return redirect()->back()->with('success', 'Candidature envoyée avec succès !');
    }

    private function getPositionById($id)
    {
        // TODO: Récupérer détails du poste
        return null;
    }
}
