<script setup>
import { cn } from '@/Lib/utils'

const props = defineProps({
  class: { type: String, required: false },
})
</script>

<template>
  <caption :class="cn('text-muted-foreground mt-4 text-sm', props.class)">
    <slot />
  </caption>
</template>
