<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;
use App\Mail\ContactMessage;

class ContactController extends Controller
{
    //
    /**
     * Afficher la page de contact
     */
    public function index()
    {
        // Informations de contact de l'entreprise
        $contactInfo = [
            'company' => [
                'name' => 'TECH N\'CHANGE',
                'legal_form' => 'SAU (Société par Actions Unipersonnelle)',
                'address' => 'Cocody, Riviera Attoban, derrière le 30ème arrondissement',
                'postal' => '08 BP 3823 ABIDJAN 08',
                'phones' => ['+225 21 21 32 42 47', '+225 07 89 97 11 13'],
                'email' => 'contact@technchange.net',
                'website' => 'www.technchange.net'
            ],
            'office_hours' => [
                'monday_friday' => '08h00 - 17h30',
                'saturday' => '08h00 - 12h00',
                'sunday' => 'Fermé'
            ],
            'locations' => [
                [
                    'name' => 'Siège Social',
                    'address' => 'Cocody, Riviera Attoban, derrière le 30ème arrondissement',
                    'coordinates' => [
                        'lat' => 5.3364,
                        'lng' => -3.9569
                    ]
                ]
            ]
        ];

        // Types de services pour le formulaire
        $serviceTypes = [
            ['value' => 'conseil_strategie', 'label' => 'Conseil & Stratégie'],
            ['value' => 'solutions_technologiques', 'label' => 'Solutions Technologiques'],
            ['value' => 'integration_deploiement', 'label' => 'Intégration & Déploiement'],
            ['value' => 'formation_accompagnement', 'label' => 'Formation & Accompagnement'],
            ['value' => 'support_maintenance', 'label' => 'Support & Maintenance'],
            ['value' => 'autre', 'label' => 'Autre demande']
        ];

        // Sujets de contact
        $contactSubjects = [
            ['value' => 'devis', 'label' => 'Demande de devis'],
            ['value' => 'information', 'label' => 'Demande d\'information'],
            ['value' => 'support', 'label' => 'Support technique'],
            ['value' => 'partenariat', 'label' => 'Partenariat'],
            ['value' => 'recrutement', 'label' => 'Recrutement'],
            ['value' => 'autre', 'label' => 'Autre']
        ];

        return Inertia::render('Contact/Index', [
            'contactInfo' => $contactInfo,
            'serviceTypes' => $serviceTypes,
            'contactSubjects' => $contactSubjects,
            'meta' => [
                'title' => 'Contactez-nous - TECH N\'CHANGE',
                'description' => 'Contactez TECH N\'CHANGE pour vos projets de transformation digitale. Notre équipe d\'experts vous accompagne dans tous vos défis technologiques.',
                'keywords' => 'contact, tech n\'change, transformation digitale, conseil, développement, abidjan, côte d\'ivoire'
            ]
        ]);
    }

    /**
     * Traiter l'envoi du message de contact
     */
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'nullable|string|max:50',
            'entreprise' => 'nullable|string|max:255',
            'poste' => 'nullable|string|max:255',
            'sujet' => 'required|string|in:devis,information,support,partenariat,recrutement,autre',
            'service_type' => 'nullable|string|in:conseil_strategie,solutions_technologiques,integration_deploiement,formation_accompagnement,support_maintenance,autre',
            'message' => 'required|string|min:10|max:2000',
            'budget_estime' => 'nullable|string|max:100',
            'delai_souhaite' => 'nullable|string|max:100',
            'accepte_rgpd' => 'required|accepted'
        ], [
            'nom.required' => 'Le nom est obligatoire.',
            'prenom.required' => 'Le prénom est obligatoire.',
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'L\'adresse email doit être valide.',
            'sujet.required' => 'Veuillez sélectionner un sujet.',
            'sujet.in' => 'Le sujet sélectionné n\'est pas valide.',
            'message.required' => 'Le message est obligatoire.',
            'message.min' => 'Le message doit contenir au moins 10 caractères.',
            'message.max' => 'Le message ne peut pas dépasser 2000 caractères.',
            'accepte_rgpd.required' => 'Vous devez accepter notre politique de confidentialité.',
            'accepte_rgpd.accepted' => 'Vous devez accepter notre politique de confidentialité.'
        ]);

        try {
            // Préparer les données pour l'email
            $contactData = [
                'nom_complet' => $validated['prenom'] . ' ' . $validated['nom'],
                'email' => $validated['email'],
                'telephone' => $validated['telephone'] ?? 'Non renseigné',
                'entreprise' => $validated['entreprise'] ?? 'Non renseignée',
                'poste' => $validated['poste'] ?? 'Non renseigné',
                'sujet' => $validated['sujet'],
                'service_type' => $validated['service_type'] ?? 'Non spécifié',
                'message' => $validated['message'],
                'budget_estime' => $validated['budget_estime'] ?? 'Non spécifié',
                'delai_souhaite' => $validated['delai_souhaite'] ?? 'Non spécifié',
                'date_envoi' => now()->format('d/m/Y à H:i'),
                'ip_address' => $request->ip()
            ];

            // Envoyer l'email à l'équipe TECH N'CHANGE
            /* Mail::to('contact@technchange.net')
                ->cc(['yves.mao@technchange.net'])
                ->send(new ContactMessage($contactData));

            // Email de confirmation au client
            Mail::to($validated['email'])
                ->send(new ContactMessage($contactData, true)); */

            return back()->with('success', [
                'title' => 'Message envoyé avec succès !',
                'message' => 'Votre demande a été transmise à notre équipe. Nous vous recontacterons dans les plus brefs délais.',
                'type' => 'success'
            ]);

        } catch (\Exception $e) {
            // Log de l'erreur
            /* \Log::error('Erreur lors de l\'envoi du message de contact: ' . $e->getMessage(), [
                'email' => $validated['email'],
                'sujet' => $validated['sujet']
            ]); */

            return back()->withErrors([
                'email' => 'Une erreur est survenue lors de l\'envoi de votre message. Veuillez réessayer ou nous contacter directement.'
            ])->withInput();
        }
    }

    /**
     * Afficher les informations de contact en format JSON (API)
     */
    public function api()
    {
        $contactInfo = [
            'company' => 'TECH N\'CHANGE',
            'address' => 'Cocody, Riviera Attoban, derrière le 30ème arrondissement',
            'postal' => '08 BP 3823 ABIDJAN 08',
            'phones' => ['+225 21 21 32 42 47', '+225 07 89 97 11 13'],
            'email' => 'contact@technchange.net',
            'website' => 'www.technchange.net',
            'coordinates' => [
                'lat' => 5.3364,
                'lng' => -3.9569
            ]
        ];

        return response()->json($contactInfo);
    }
}
