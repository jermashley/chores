import { useMutation } from '@tanstack/vue-query'
import axios from 'axios'

const detachChildChore = async (childId, choreId) => {
  const data = await axios.post(`/api/childChore/${childId}/detach/${choreId}`)

  return data
}

export const useDetachChildChoreMutation = ({ config = {} } = {}) =>
  useMutation({
    mutationFn: detachChildChore,
    ...config,
  })
