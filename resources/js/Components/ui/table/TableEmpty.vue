<script setup>
import { cn } from '@/Lib/utils'

import TableCell from './TableCell.vue'
import TableRow from './TableRow.vue'

const props = defineProps({
  class: { type: String, required: false, default: `` },
  colspan: { type: Number, required: false, default: 1 },
})
</script>

<template>
  <TableRow>
    <TableCell
      :class="
        cn(
          'text-foreground whitespace-nowrap p-4 align-middle text-sm',
          props.class,
        )
      "
      :colspan="props.colspan"
    >
      <div class="flex items-center justify-center py-10">
        <slot />
      </div>
    </TableCell>
  </TableRow>
</template>
