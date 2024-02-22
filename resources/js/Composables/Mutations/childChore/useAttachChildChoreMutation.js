import { useMutation } from '@tanstack/vue-query'
import axios from 'axios'

const attachChildChore = async (childId, choreId) => {
  const data = await axios.post(`/api/childChore/${childId}/attach/${choreId}`)

  return data
}

export const useAttachChildChoreMutation = ({ config = {} } = {}) =>
  useMutation({
    mutationFn: attachChildChore,
    ...config,
  })
