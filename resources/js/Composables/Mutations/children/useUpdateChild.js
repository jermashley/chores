import { useMutation } from '@tanstack/vue-query'
import axios from 'axios'
import route from 'ziggy-js'

const updateChild = async (id, formData) => {
  const data = await axios.put(route(`api.child.update`, id), formData)

  return data
}

export const useUpdateChild = ({ config = {}, id } = {}) => {
  return useMutation({
    mutationKey: [`child`, id],
    mutationFn: ({ formData = {} } = {}) => updateChild(id, formData),

    ...config,
  })
}
