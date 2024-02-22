<template>
  <AppLayout title="Home">
    <section v-if="children" class="grid grid-cols-3 gap-4">
      <Card v-for="child in children" :key="child.uuid" class="group">
        <CardHeader class="flex flex-row items-center justify-between">
          <CardTitle>{{ child.name }}</CardTitle>

          <div
            class="opacity-0 transition-all duration-200 group-hover:opacity-100"
          >
            <EditChildDialog :child="child" size="sm">
              <template #trigger>
                Edit
                <!-- <FontAwesomeIcon :icon="faPencilAlt" fixed-width /> -->
              </template>
            </EditChildDialog>
          </div>
        </CardHeader>

        <CardContent>CHORES</CardContent>

        <CardFooter>
          <Button variant="secondary" class="w-full">
            <FontAwesomeIcon class="" :icon="faPlus" fixed-width />
            Assign
          </Button>
        </CardFooter>
      </Card>
    </section>
  </AppLayout>
</template>

<script setup>
import { faPlus } from '@fortawesome/pro-regular-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import EditChildDialog from '@/Components/Feature/Child/EditChildDialog.vue'
import { Button } from '@/Components/ui/button'
import {
  Card,
  CardContent,
  CardFooter,
  CardHeader,
  CardTitle,
} from '@/Components/ui/card'
import { useGetChildren } from '@/Composables/Queries/children'
import AppLayout from '@/Layouts/AppLayout.vue'

const { data: children } = useGetChildren()
</script>
