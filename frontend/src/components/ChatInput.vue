<script setup>
import { Image, Paperclip, Send, Smile } from 'lucide-vue-next';
</script>

<template>
  <div class="border-t border-slate-200 bg-white p-4">
    <div class="flex items-center gap-2">
      <button class="rounded-full p-2 text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition-colors">
        <Image class="h-5 w-5" />
      </button>
      <button class="rounded-full p-2 text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition-colors">
        <Paperclip class="h-5 w-5" />
      </button>
      <div class="relative flex-1">
        <input
          type="text"
          placeholder="Type a message..."
          class="w-full rounded-full border-0 bg-slate-100 py-2.5 pl-4 pr-10 text-slate-900 placeholder:text-slate-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
        />
        <button class="absolute right-2 top-1/2 -translate-y-1/2 rounded-full p-1 text-slate-400 hover:text-slate-600">
          <Smile class="h-5 w-5" />
        </button>
      </div>
      <button class="rounded-full bg-indigo-600 p-2.5 text-white hover:bg-indigo-700 transition-colors shadow-sm">
        <Send class="h-5 w-5" />
      </button>
    </div>
  </div>
</template>
