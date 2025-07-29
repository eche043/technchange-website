<template>
    <component :is="iconComponent" :class="iconClass" />
  </template>

  <script setup>
  import { computed } from 'vue'
  import {
    ChartBarIcon,
    FingerPrintIcon,
    CogIcon,
    CircuitBoardIcon,
    TruckIcon,
    TrophyIcon,
    BuildingOfficeIcon,
    GlobeEuropeAfricaIcon,
    DocumentTextIcon,
    SparklesIcon,
    StarIcon,
    BoltIcon,
    ShieldCheckIcon
  } from '@heroicons/vue/24/outline'

  const props = defineProps({
    name: {
      type: String,
      required: true
    },
    class: {
      type: String,
      default: 'w-6 h-6'
    }
  })

  const iconComponent = computed(() => {
    const icons = {
      ChartBarIcon,
      FingerPrintIcon,
      CogIcon,
      CircuitBoardIcon,
      TruckIcon,
      TrophyIcon,
      BuildingOfficeIcon,
      GlobeEuropeAfricaIcon,
      DocumentTextIcon,
      SparklesIcon,
      StarIcon,
      BoltIcon,
      ShieldCheckIcon
    }

    return icons[props.name] || CogIcon
  })

  const iconClass = computed(() => props.class)
  </script>
