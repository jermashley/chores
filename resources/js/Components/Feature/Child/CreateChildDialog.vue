<template>
  <Dialog :open="dialogIsOpen">
    <DialogTrigger as-child>
      <Button :size="size" @click="dialogIsOpen = !dialogIsOpen">
        <slot>Create</slot>
      </Button>
    </DialogTrigger>

    <DialogContent>
      <DialogHeader>
        <DialogTitle>Edit {{ child.name }}</DialogTitle>

        <DialogDescription>
          Edit {{ child.name }}'s information.
        </DialogDescription>
      </DialogHeader>

      <div>
        <form id="createChildForm" @submit.prevent="submit">
          <div class="grid w-full max-w-sm items-center gap-1.5">
            <LabelVue for="name">Name</LabelVue>

            <Input
              id="name"
              v-model="form.name"
              type="text"
              placeholder="Emmy"
            />
          </div>
        </form>
      </div>

      <DialogFooter>
        <Button variant="outline" @click="dialogIsOpen = !dialogIsOpen">
          Cancel
        </Button>

        <Button
          type="submit"
          :disabled="form.processing"
          form="createChildForm"
        >
          Save
        </Button>
      </DialogFooter>
    </DialogContent>
  </Dialog>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import route from 'ziggy-js'

import { Button } from '@/Components/ui/button'
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from '@/Components/ui/dialog'
import { Input } from '@/Components/ui/input'

const dialogIsOpen = ref(false)

const props = defineProps({
  child: {
    type: Object,
    required: true,
  },
  size: {
    type: String,
    required: false,
    default: `md`,
  },
})

const form = useForm({
  name: props.child.name,
})

const submit = () => {
  form.put(route(`child.update`, { child: props.child.id }), {
    onFinish: () => {
      form.reset(`name`)
      dialogIsOpen.value = false
    },
  })
}
</script>
