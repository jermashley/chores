<template>
  <AppLayout title="Dashboard">
    <ChildrenTable v-if="data" :data="data" />
  </AppLayout>
</template>

<script setup>
import ChildrenTable from '@/Components/ChildrenTable.vue'
import { useGetChildren } from '@/Composables/Queries/children'
import AppLayout from '@/Layouts/AppLayout.vue'

const { data } = useGetChildren()
</script>
