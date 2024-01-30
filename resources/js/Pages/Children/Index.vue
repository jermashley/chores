<script setup>
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
    <template #header>
      <h2
        class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
      >
        Children
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
          class="overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800"
        >
          Hello
        </div>
      </div>
    </div>
  </AppLayout>
</template>
