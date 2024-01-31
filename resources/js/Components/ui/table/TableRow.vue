<script setup>
import { cn } from '@/Lib/utils'

const props = defineProps({
  class: { type: String, required: false },
})
</script>

<template>
  <tr
    :class="
      cn(
        'hover:bg-muted/50 data-[state=selected]:bg-muted border-b transition-colors',
        props.class,
      )
    "
  >
    <slot />
  </tr>
</template>
