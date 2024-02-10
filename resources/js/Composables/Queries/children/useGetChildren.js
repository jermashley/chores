import { useQuery } from '@tanstack/vue-query'
import axios from 'axios'
import route from 'ziggy-js'

const getChildren = async () => {
  const data = await axios.get(route(`api.children.index`))

  return data
}

export const useGetChildren = ({ config = {} } = {}) =>
  useQuery({
    queryKey: [`children`],
    queryFn: getChildren,
    select: ({ data }) => data,

    staleTime: 1000 * 60 * 5,
    cacheTime: 1000 * 60 * 30,

    refetchOnWindowFocus: false,
    refetchInterval: false,
    refetchIntervalInBackground: false,
    refetchOnReconnect: true,

    ...config,
  })
