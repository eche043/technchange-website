<!-- resources/js/Components/UI/CounterAnimation.vue -->
<template>
    <span>{{ displayValue }}{{ suffix }}</span>
  </template>

  <script setup>
  import { ref, onMounted, watch } from 'vue'

  const props = defineProps({
    target: {
      type: Number,
      required: true
    },
    suffix: {
      type: String,
      default: ''
    },
    duration: {
      type: Number,
      default: 2000
    },
    start: {
      type: Number,
      default: 0
    }
  })

  const displayValue = ref(props.start)

  const animateCounter = () => {
    const startTime = Date.now()
    const startValue = props.start
    const endValue = props.target
    const duration = props.duration

    const updateCounter = () => {
      const elapsed = Date.now() - startTime
      const progress = Math.min(elapsed / duration, 1)

      // Fonction d'easing (ease-out)
      const easeOut = 1 - Math.pow(1 - progress, 3)

      displayValue.value = Math.floor(startValue + (endValue - startValue) * easeOut)

      if (progress < 1) {
        requestAnimationFrame(updateCounter)
      } else {
        displayValue.value = endValue
      }
    }

    requestAnimationFrame(updateCounter)
  }

  // Démarrer l'animation au montage du composant
  onMounted(() => {
    // Délai pour déclencher l'animation après l'apparition
    setTimeout(animateCounter, 500)
  })

  // Redémarrer l'animation si la target change
  watch(() => props.target, () => {
    displayValue.value = props.start
    animateCounter()
  })
  </script>
