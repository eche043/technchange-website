
<!-- resources/js/Components/Layout/Navigation.vue -->
<template>
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md border-b border-gray-200 transition-all duration-300">
      <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-20">
          <!-- Logo -->
          <Link href="/" class="flex items-center space-x-3">
            <img src="/images/logos/technchange-logo.svg" alt="TECH N'CHANGE" class="h-10">
            <div class="font-bold text-xl text-gray-900">TECH N'CHANGE</div>
          </Link>

          <!-- Navigation principale (desktop) -->
          <div class="hidden lg:flex items-center space-x-8">
            <Link
              href="/services"
              class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              Services
            </Link>
            <Link
              href="/projets"
              class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              Projets
            </Link>
            <Link
              href="/a-propos"
              class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              À propos
            </Link>
            <Link
              href="/carrieres"
              class="text-gray-700 hover:text-blue-600 font-medium transition-colors duration-200"
            >
              Carrières
            </Link>
            <Link
              href="/contact"
              class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg font-semibold transition-colors duration-200"
            >
              Contact
            </Link>
          </div>

          <!-- Menu mobile -->
          <button
            @click="toggleMobileMenu"
            class="lg:hidden p-2 text-gray-700"
          >
            <Bars3Icon v-if="!mobileMenuOpen" class="w-6 h-6" />
            <XMarkIcon v-else class="w-6 h-6" />
          </button>
        </div>

        <!-- Menu mobile dropdown -->
        <div
          v-show="mobileMenuOpen"
          class="lg:hidden py-4 border-t border-gray-200"
        >
          <div class="space-y-4">
            <Link href="/services" class="block text-gray-700 hover:text-blue-600 font-medium">
              Services
            </Link>
            <Link href="/projets" class="block text-gray-700 hover:text-blue-600 font-medium">
              Projets
            </Link>
            <Link href="/a-propos" class="block text-gray-700 hover:text-blue-600 font-medium">
              À propos
            </Link>
            <Link href="/carrieres" class="block text-gray-700 hover:text-blue-600 font-medium">
              Carrières
            </Link>
            <Link href="/contact" class="block bg-blue-600 text-white px-4 py-2 rounded-lg font-semibold text-center">
              Contact
            </Link>
          </div>
        </div>
      </div>
    </nav>
  </template>

  <script setup>
  import { ref } from 'vue'
  import { Link } from '@inertiajs/vue3'
  import { Bars3Icon, XMarkIcon } from '@heroicons/vue/24/outline'

  const mobileMenuOpen = ref(false)

  const toggleMobileMenu = () => {
    mobileMenuOpen.value = !mobileMenuOpen.value
  }
  </script>
