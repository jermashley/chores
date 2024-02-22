<template>
  <Table class="mx-auto max-w-2xl">
    <TableHeader>
      <TableRow
        v-for="headerGroup in table.getHeaderGroups()"
        :key="headerGroup.id"
      >
        <TableHead v-for="header in headerGroup.headers" :key="header.id">
          <FlexRender
            v-if="!header.isPlaceholder"
            :render="header.column.columnDef.header"
            :props="header.getContext()"
          />
        </TableHead>
      </TableRow>
    </TableHeader>

    <TableBody>
      <template v-if="table.getRowModel().rows?.length">
        <TableRow
          v-for="row in table.getRowModel().rows"
          :key="row.id"
          :data-state="row.getIsSelected() ? 'selected' : undefined"
        >
          <TableCell v-for="cell in row.getVisibleCells()" :key="cell.id">
            <FlexRender
              :render="cell.column.columnDef.cell"
              :props="cell.getContext()"
            />
          </TableCell>
        </TableRow>
      </template>

      <template v-else>
        <TableRow>
          <TableCell :col-span="tableColumns.length" class="h-24 text-center">
            No results.
          </TableCell>
        </TableRow>
      </template>
    </TableBody>
  </Table>
</template>

<script setup>
import { FlexRender, getCoreRowModel, useVueTable } from '@tanstack/vue-table'
import { h } from 'vue'

import EditChildDialog from '@/Components/Feature/Child/EditChildDialog.vue'
import {
  Table,
  TableBody,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/Components/ui/table'

const props = defineProps({
  data: {
    type: Array,
    required: true,
  },
})

const tableColumns = [
  {
    accessorKey: `name`,
    header: `Name`,
    cell: ({ row }) => {
      return h(`div`, { class: `w-full` }, row.getValue(`name`))
    },
  },
  {
    id: `actions`,
    enableHeading: false,
    cell: ({ row }) => {
      return h(
        `div`,
        { class: `flex flex-row justify-end` },
        h(EditChildDialog, { child: row.original, size: `sm` }),
      )
    },
  },
]

const table = useVueTable({
  get data() {
    return props.data
  },
  get columns() {
    return tableColumns
  },
  getCoreRowModel: getCoreRowModel(),
})
</script>
