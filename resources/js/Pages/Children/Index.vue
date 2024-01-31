<script setup>
import { Link } from '@inertiajs/vue3'
import route from 'ziggy-js'

import ChildrenTable from '@/Components/ChildrenTable.vue'
import { Button } from '@/Components/ui/button'
import AppLayout from '@/Layouts/AppLayout.vue'

defineProps({
  children: {
    type: Array,
    required: true,
  },
})
</script>

<template>
  <AppLayout title="Children">
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
          class="overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800"
        >
          <Button as-child class="w-full">
            <Link :href="route('child.create')">Add child</Link>
          </Button>

          <ChildrenTable :data="children" />
        </div>
      </div>
    </div>
  </AppLayout>
</template>
