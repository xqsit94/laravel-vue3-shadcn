/// <reference types="vite/client" />

import { route as routeFn } from 'ziggy-js'

declare global {
  let route: typeof routeFn
}
