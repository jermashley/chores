<script setup>
import { Head, router } from '@inertiajs/vue3'
import route from 'ziggy-js'

import Navbar from '@/Components/Layout/Navbar.vue'

import LayoutWrapper from './LayoutWrapper.vue'

defineProps({
  title: {
    type: String,
    default: ``,
  },
})
</script>

<template>
  <LayoutWrapper>
    <Head :title="title" />

    <Navbar />

    <div class="mx-auto max-w-screen-lg py-32">
      <main
        class="overflow-y-auto rounded border border-zinc-200/75 bg-white px-8 py-12 shadow-lg"
      >
        <slot />
      </main>
    </div>
  </LayoutWrapper>
</template>
