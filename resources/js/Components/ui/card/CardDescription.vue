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
  <p :class="cn('text-muted-foreground text-sm', props.class)">
    <slot />
  </p>
</template>
