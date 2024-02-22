import { useQuery } from '@tanstack/vue-query'
import axios from 'axios'

const getChores = async () => {
  const data = await axios.get(`/api/chores`)

  return data
}

export const useGetChores = ({ config = {} } = {}) =>
  useQuery({
    queryKey: [`chores`],
    queryFn: getChores,
    staleTime: 1000 * 60 * 5,
    cacheTime: 1000 * 60 * 30,

    ...config,
  })
