<!-- resources/js/Components/Layout/Footer.vue -->
<template>
    <footer class="bg-gray-900 text-white">
      <div class="container mx-auto px-6 py-12">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
          <!-- Logo et description -->
          <div class="lg:col-span-2">
            <div class="flex items-center space-x-3 mb-4">
              <img src="/images/logos/technchange-logo-white.svg" alt="TECH N'CHANGE" class="h-10">
              <div class="font-bold text-xl">TECH N'CHANGE</div>
            </div>
            <p class="text-gray-300 mb-4 max-w-md">
              Innovation au service du changement. Accompagnement agile de la conception à la mise en production depuis 2017.
            </p>
            <div class="text-sm text-gray-400">
              <p>08 BP 3823 ABIDJAN 08, Cocody Riviera Attoban</p>
              <p>contact@technchange.net</p>
              <p>(+225) 27 21 32 42 47 / (+225) 07 89 97 11 13</p>
            </div>
          </div>

          <!-- Services -->
          <div>
            <h3 class="font-semibold text-lg mb-4">Services</h3>
            <ul class="space-y-2 text-gray-300">
              <li><Link href="/services/amoa" class="hover:text-white transition-colors">AMOA & Conseil</Link></li>
              <li><Link href="/services/identite-numerique" class="hover:text-white transition-colors">Identité Numérique</Link></li>
              <li><Link href="/services/solutions" class="hover:text-white transition-colors">Solutions Tech</Link></li>
              <li><Link href="/services/patrimoine" class="hover:text-white transition-colors">Patrimoine FIWARE</Link></li>
            </ul>
          </div>

          <!-- Entreprise -->
          <div>
            <h3 class="font-semibold text-lg mb-4">Entreprise</h3>
            <ul class="space-y-2 text-gray-300">
              <li><Link href="/a-propos" class="hover:text-white transition-colors">À propos</Link></li>
              <li><Link href="/carrieres" class="hover:text-white transition-colors">Carrières</Link></li>
              <li><Link href="/projets" class="hover:text-white transition-colors">Projets</Link></li>
              <li><Link href="/contact" class="hover:text-white transition-colors">Contact</Link></li>
            </ul>
          </div>
        </div>

        <div class="border-t border-gray-800 mt-8 pt-8 flex flex-col md:flex-row justify-between items-center">
          <div class="text-gray-400 text-sm">
            © 2025 TECH N'CHANGE. Tous droits réservés.
          </div>
          <div class="flex space-x-4 mt-4 md:mt-0">
            <span class="text-gray-400 text-sm">RCCM: CI-ABJ-2017-B-1535</span>
            <span class="text-gray-400 text-sm">Capital: 10 000 000 FCFA</span>
          </div>
        </div>
      </div>
    </footer>
  </template>

  <script setup>
  import { Link } from '@inertiajs/vue3'
  </script>
