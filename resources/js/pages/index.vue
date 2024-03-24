<script setup lang="ts">
import { ref } from 'vue'
import { Button } from '@/components/ui/button'
import { Input } from '@/components/ui/input'

const message = 'Vue 3 + TypeScript!'
const name = ref<string>('John Doe')

const greet = () => {
  alert(`Welcome, ${name.value}!`)
}
</script>

<template>
  <main class="h-screen flex justify-center items-center">
    <section>
      <div class="font-semibold underline">Hello, {{ message }}</div>
      <div class="text-center my-5 grid gap-3">
        <Input v-model="name" placeholder="Enter your name" />
        <Button @click="greet">Greet</Button>
      </div>
    </section>
  </main>
</template>
