<!-- resources/js/Components/UI/PartnersCarousel.vue -->
<template>
    <div class="overflow-hidden">
      <div class="flex animate-scroll space-x-8">
        <!-- Première série de logos -->
        <div
          v-for="partner in partners"
          :key="`first-${partner.name}`"
          class="flex-shrink-0 w-32 h-16 flex items-center justify-center bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 group"
        >
          <img
            :src="partner.logo"
            :alt="partner.name"
            class="max-h-16 max-w-30 object-contain transition-all duration-300 group-hover:scale-110"
          >
        </div>

        <!-- Deuxième série (pour l'effet infini) -->
        <div
          v-for="partner in partners"
          :key="`second-${partner.name}`"
          class="flex-shrink-0 w-32 h-16 flex items-center justify-center bg-white rounded-lg shadow-sm hover:shadow-md transition-all duration-300 group"
        >
          <img
            :src="partner.logo"
            :alt="partner.name"
            class="max-h-16 max-w-30 object-contain transition-all duration-300 group-hover:scale-110"
          >
        </div>
      </div>
    </div>
  </template>

  <script setup>
  defineProps({
    partners: {
      type: Array,
      required: true
    }
  })
  </script>

  <style scoped>
  @keyframes scroll {
    0% {
      transform: translateX(0);
    }
    100% {
      transform: translateX(-50%);
    }
  }

  .animate-scroll {
    animation: scroll 30s linear infinite;
  }

  .animate-scroll:hover {
    animation-play-state: paused;
  }
  </style>
