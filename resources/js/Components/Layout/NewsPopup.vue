<!-- resources/js/Components/Layout/NewsPopup.vue -->
<template>
    <Teleport to="body">
      <Transition
        enter-active-class="transition-all duration-300 ease-out"
        enter-from-class="opacity-0 scale-95"
        enter-to-class="opacity-100 scale-100"
        leave-active-class="transition-all duration-200 ease-in"
        leave-from-class="opacity-100 scale-100"
        leave-to-class="opacity-0 scale-95"
      >
        <div
          v-if="show"
          class="fixed inset-0 z-50 flex items-center justify-center p-4"
          @click.self="closePopup"
        >
          <!-- Overlay -->
          <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>

          <!-- Modal -->
          <div class="relative bg-white rounded-2xl shadow-2xl max-w-md w-full max-h-[80vh] overflow-y-auto">
            <!-- Header -->
            <div class="flex items-start justify-between p-6 border-b border-gray-200">
              <div class="flex-1">
                <h3 class="text-xl font-bold text-gray-900 mb-2">
                  {{ news.title }}
                </h3>
                <div
                  v-if="news.priority === 'high'"
                  class="inline-block px-2 py-1 bg-red-100 text-red-800 text-xs font-semibold rounded-full"
                >
                  Urgent
                </div>
              </div>
              <button
                @click="closePopup"
                class="text-gray-400 hover:text-gray-600 transition-colors p-1"
              >
                <XMarkIcon class="w-6 h-6" />
              </button>
            </div>

            <!-- Content -->
            <div class="p-6">
              <p class="text-gray-700 mb-4 leading-relaxed">
                {{ news.message }}
              </p>

              <!-- Liste de contenu si disponible -->
              <ul v-if="news.content?.length" class="space-y-2 mb-6">
                <li
                  v-for="item in news.content"
                  :key="item"
                  class="flex items-start space-x-2 text-gray-600"
                >
                  <CheckIcon class="w-4 h-4 text-green-500 mt-1 flex-shrink-0" />
                  <span class="text-sm">{{ item }}</span>
                </li>
              </ul>

              <!-- Actions -->
              <div class="flex flex-col sm:flex-row gap-3">
                <Link
                  v-if="news.action"
                  :href="news.action.url"
                  class="flex-1 bg-blue-600 hover:bg-blue-700 text-white text-center py-3 px-4 rounded-lg font-semibold transition-colors duration-200"
                  @click="closePopup"
                >
                  {{ news.action.text }}
                </Link>

                <Link
                  v-if="news.secondaryAction"
                  :href="news.secondaryAction.url"
                  class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 text-center py-3 px-4 rounded-lg font-semibold transition-colors duration-200"
                  @click="closePopup"
                >
                  {{ news.secondaryAction.text }}
                </Link>
              </div>

              <!-- Option pour ne plus afficher -->
              <div class="mt-4 text-center">
                <button
                  @click="dontShowAgain"
                  class="text-sm text-gray-500 hover:text-gray-700 transition-colors"
                >
                  Ne plus afficher cette semaine
                </button>
              </div>
            </div>
          </div>
        </div>
      </Transition>
    </Teleport>
  </template>

  <script setup>
  import { ref } from 'vue'
  import { Link } from '@inertiajs/vue3'
  import { XMarkIcon, CheckIcon } from '@heroicons/vue/24/outline'

  const props = defineProps({
    news: {
      type: Object,
      required: true
    }
  })

  const emit = defineEmits(['close'])

  const show = ref(true)

  const closePopup = () => {
    show.value = false
    setTimeout(() => {
      emit('close')
    }, 200)
  }

  const dontShowAgain = () => {
    // Stocker dans localStorage pour ne plus afficher
    localStorage.setItem(`popup_${props.news.id}_last_shown`, new Date().toISOString())
    closePopup()
  }
  </script>
