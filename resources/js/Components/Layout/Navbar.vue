<template>
  <nav
    class="fixed left-0 right-0 top-0 w-full border-b border-b-zinc-50/5 bg-zinc-50/95 backdrop-blur-xl dark:bg-zinc-950/95"
  >
    <section
      class="mx-auto flex max-w-screen-lg flex-row items-center justify-between px-8 py-6 md:px-0"
    >
      <div>
        {{ app.name }}
      </div>

      <DropdownMenu>
        <DropdownMenuTrigger>
          <Avatar>
            <AvatarImage
              v-if="auth.user.profile_photo_url"
              :src="auth.user.profile_photo_url"
            />

            <AvatarFallback>
              {{ auth.user.initials }}
            </AvatarFallback>
          </Avatar>
        </DropdownMenuTrigger>

        <DropdownMenuContent align="end" class="w-56">
          <DropdownMenuLabel>My Account</DropdownMenuLabel>

          <DropdownMenuSeparator />

          <DropdownMenuGroup>
            <DropdownMenuItem as-child>
              <Link :href="route('profile.show')" class="w-full cursor-default">
                <FontAwesomeIcon :icon="faUser" class="mr-2" fixed-width />

                <span>Profile</span>
              </Link>
            </DropdownMenuItem>
          </DropdownMenuGroup>

          <DropdownMenuSeparator />

          <DropdownMenuGroup>
            <DropdownMenuItem @click="logout">
              <FontAwesomeIcon :icon="faSignOut" class="mr-2" fixed-width />
              <span>Logout</span>
            </DropdownMenuItem>
          </DropdownMenuGroup>
        </DropdownMenuContent>
      </DropdownMenu>
    </section>
  </nav>
</template>

<script setup>
import { faSignOut, faUser } from '@fortawesome/pro-duotone-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import { Link, router, usePage } from '@inertiajs/vue3'
import { AvatarImage } from 'radix-vue'
import route from 'ziggy-js'

import { Avatar, AvatarFallback } from '@/Components/ui/avatar'
import {
  DropdownMenu,
  DropdownMenuContent,
  DropdownMenuItem,
  DropdownMenuLabel,
  DropdownMenuSeparator,
  DropdownMenuTrigger,
} from '@/Components/ui/dropdown-menu'

import DropdownMenuGroup from '../ui/dropdown-menu/DropdownMenuGroup.vue'

const { app, auth } = usePage().props

const logout = () => router.post(route(`logout`))
</script>
