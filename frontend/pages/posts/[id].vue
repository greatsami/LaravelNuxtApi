<script setup lang="ts">
import {BASE_URL, PostService} from "~/services/PostService";

const route = useRoute()

// const post = await PostService().find(route.params.id as string)
const {data} = await useFetch(`${BASE_URL}/posts/${route.params.id as string}`);
const post = data
</script>

<template>
  <div class="bg-white px-6 py-32 lg:px-8">
    <div class="mx-auto max-w-3xl text-base leading-7 text-gray-700">
      <div class="text-base font-semibold leading-7 text-gray-700">
        <p class="text-base font-semibold leading-7 text-indigo-600">Introducing</p>
        <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">{{ post.attributes.title }}</h1>
        <p class="mt-6 text-xl leading-8">
          {{ post.attributes.summary }}
        </p>
        <div class="mt-10 max-w-2xl">
          {{ post.attributes.content }}
        </div>
      </div>
    </div>
  </div>
</template>

<style scoped>

</style>