<script lang="ts" setup>

// import {postStore} from "~/stores/posts";
//
// const store = postStore();
// const posts = store.index;

import {PostService} from "~/services/PostService";

const posts = await PostService().all()

</script>

<template>
  <div class="container mx-auto max-w-7xl py-12">
    <ul role="list" class="divide-y divide-gray-100">
      <li v-for="post in posts" :key="post.attributes.id" class="flex items-center justify-between gap-x-6 py-2">
        <div class="min-w-20">
          <div class="flex items-start gap-x-3">
            <p class="text-sm font-semibold leading-6 text-gray-900">{{ post.attributes.title }}</p>
          </div>
          <div class="mt-1 flex items-center gap-x-6 text-xs leading-5 text-gray-500">
            <div class="truncate">Created by: {{ post.attributes.summary }}</div>
          </div>
        </div>
        <div class="flex flex-none items-center gap-x-4">
          <NuxtLink :to="`/posts/${post.id}`" :prefetch="true" class="rounded-md bg-white px-2.5 py-1.5 text-sm text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-500 hover:text-white">
            Read more <span class="sr-only">, {{ post.attributes.title }}</span>
          </NuxtLink>
        </div>
      </li>
    </ul>
  </div>
</template>

<style scoped></style>
