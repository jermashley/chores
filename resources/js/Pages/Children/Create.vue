<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import route from 'ziggy-js'

import { Button } from '@/Components/ui/button'
import { Card, CardContent, CardHeader, CardTitle } from '@/Components/ui/card'
import AppLayout from '@/Layouts/AppLayout.vue'

const form = useForm({
  name: ``,
})
</script>

<template>
  <AppLayout title="Create Child">
    <template #header>
      <h2
        class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"
      >
        Create Child
      </h2>
    </template>

    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div
          class="overflow-hidden bg-white shadow-xl sm:rounded-lg dark:bg-gray-800"
        >
          <Card class="mx-auto w-full md:max-w-96">
            <CardHeader>
              <CardTitle>Create child</CardTitle>

              <CardDescription>Add a new child to your family.</CardDescription>
            </CardHeader>

            <CardContent>
              <form @submit.prevent=""></form>
            </CardContent>

            <CardFooter class="flex justify-end space-x-2 px-6 pb-6">
              <Button variant="outline" as-child>
                <Link :href="route('child.index')"> Cancel </Link>
              </Button>

              <Button type="submit">Deploy</Button>
            </CardFooter>
          </Card>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
