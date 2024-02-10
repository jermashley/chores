<template>
  <AppLayout title="Edit Child">
    <Card class="mx-auto w-full md:max-w-96">
      <CardHeader>
        <CardTitle>Edit child</CardTitle>

        <CardDescription>Edit a child's information.</CardDescription>
      </CardHeader>

      <CardContent>
        <form id="editChildForm" @submit.prevent="submit">
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

        <Button type="submit" :disabled="form.processing" form="editChildForm">
          Save
        </Button>
      </CardFooter>
    </Card>
  </AppLayout>
</template>

<script setup>
import { Link, router, useForm } from '@inertiajs/vue3'
import route from 'ziggy-js'

import { Button } from '@/Components/ui/button'
import { Card, CardContent, CardHeader, CardTitle } from '@/Components/ui/card'
import { Input } from '@/Components/ui/input'
import { Label } from '@/Components/ui/label'
import AppLayout from '@/Layouts/AppLayout.vue'

const props = defineProps({
  child: {
    type: Object,
    required: true,
  },
})

const form = useForm({
  name: props.child.name,
})

const submit = () => {
  form.put(route(`child.update`, { child: props.child.id }), {
    onFinish: () => form.reset(`name`),
  })
}
</script>
