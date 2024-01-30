<script setup>
import { cn } from '@/Lib/utils'

const props = defineProps({
  class: {
    type: String,
    default: ``,
  },
})
</script>

<template>
  <div
    :class="
      cn(
        'bg-card text-card-foreground rounded-lg border shadow-sm',
        props.class,
      )
    "
  >
    <slot />
  </div>
</template>
