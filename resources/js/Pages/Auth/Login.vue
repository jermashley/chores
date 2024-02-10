<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3'
import route from 'ziggy-js'

import { Button } from '@/Components/ui/button'
import {
  Card,
  CardContent,
  CardFooter,
  CardHeader,
  CardTitle,
} from '@/Components/ui/card'
import { Checkbox } from '@/Components/ui/checkbox'
import { Input } from '@/Components/ui/input'
import { Label } from '@/Components/ui/label'
import LayoutWrapper from '@/Layouts/LayoutWrapper.vue'

defineProps({
  canResetPassword: {
    type: Boolean,
    required: false,
    default: true,
  },
  status: {
    type: String,
    default: ``,
  },
})

const form = useForm({
  email: ``,
  password: ``,
  remember: false,
})

const submit = () => {
  form
    .transform((data) => ({
      ...data,
      remember: form.remember ? `on` : ``,
    }))
    .post(route(`login`), {
      onFinish: () => form.reset(`password`),
    })
}
</script>

<template>
  <Head title="Log in" />

  <LayoutWrapper>
    <div
      class="flex min-h-screen flex-col items-center justify-center space-y-12 px-8 py-12"
    >
      <Card class="mx-auto w-full max-w-sm shadow-2xl">
        <CardHeader>
          <CardTitle>Log in</CardTitle>
        </CardHeader>

        <CardContent>
          <form
            id="loginForm"
            class="flex flex-col space-y-4"
            @submit.prevent="submit"
          >
            <div class="grid w-full max-w-sm items-center gap-1.5">
              <Label for="email">Email</Label>

              <Input
                id="email"
                v-model="form.email"
                type="email"
                placeholder="amelia@email.com"
                required
                autofocus
                autocomplete="username"
              />
            </div>

            <div class="grid w-full max-w-sm items-center gap-1.5">
              <Label for="password">Password</Label>

              <Input
                id="password"
                v-model="form.password"
                type="password"
                placeholder="••••••••••"
                required
                autocomplete="current-password"
              />
            </div>

            <div class="flex flex-row items-center justify-end space-x-2">
              <Checkbox
                id="remember"
                v-model:checked="form.remember"
                name="remember"
              />

              <Label for="remember" class="text-sm">Remember me</Label>
            </div>
          </form>
        </CardContent>

        <CardFooter
          class="flex flex-col items-stretch justify-start space-y-2 px-6 pb-6"
        >
          <Button variant="link" size="sm" as-child>
            <Link class="opacity-65" :href="route('password.request')">
              Forgot your password?
            </Link>
          </Button>

          <Button type="submit" :disabled="form.processing" form="loginForm">
            Log in
          </Button>
        </CardFooter>
      </Card>
    </div>
  </LayoutWrapper>
</template>
