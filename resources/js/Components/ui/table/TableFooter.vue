<script setup>
import { cn } from '@/Lib/utils'

const props = defineProps({
  class: { type: String, required: false },
})
</script>

<template>
  <tfoot
    :class="cn('bg-primary text-primary-foreground font-medium', props.class)"
  >
    <slot />
  </tfoot>
</template>
