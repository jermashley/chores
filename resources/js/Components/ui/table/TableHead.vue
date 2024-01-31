<script setup>
import { cn } from '@/Lib/utils'

const props = defineProps({
  class: { type: String, required: false },
})
</script>

<template>
  <th
    :class="
      cn(
        'text-muted-foreground h-12 px-4 text-left align-middle font-medium [&:has([role=checkbox])]:pr-0',
        props.class,
      )
    "
  >
    <slot />
  </th>
</template>
