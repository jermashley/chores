<script setup>
import { Link, useForm } from '@inertiajs/vue3'
import route from 'ziggy-js'

import { Button } from '@/Components/ui/button'
import { Card, CardContent, CardHeader, CardTitle } from '@/Components/ui/card'
import { Input } from '@/Components/ui/input'
import { Label } from '@/Components/ui/label'
import AppLayout from '@/Layouts/AppLayout.vue'

const form = useForm({
  name: ``,
})

const submit = () => {
  form.post(route(`child.store`), {
    onFinish: () => form.reset(`name`),
  })
}
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
          class="overflow-hidden bg-white shadow-xl dark:bg-gray-800 sm:rounded-lg"
        >
          <Card class="mx-auto w-full md:max-w-96">
            <CardHeader>
              <CardTitle>Create child</CardTitle>

              <CardDescription>Add a new child to your family.</CardDescription>
            </CardHeader>

            <CardContent>
              <form id="createChildForm" @submit.prevent="submit">
                <div class="grid w-full max-w-sm items-center gap-1.5">
                  <Label for="name">Name</Label>

                  <Input
                    id="name"
                    v-model="form.name"
                    type="text"
                    placeholder="Emmy"
                  />
                </div>
              </form>
            </CardContent>

            <CardFooter class="flex justify-end space-x-2 px-6 pb-6">
              <Button variant="outline" as-child>
                <Link :href="route('child.index')">Cancel</Link>
              </Button>

              <Button
                type="submit"
                :disabled="form.processing"
                form="createChildForm"
                >Create</Button
              >
            </CardFooter>
          </Card>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
