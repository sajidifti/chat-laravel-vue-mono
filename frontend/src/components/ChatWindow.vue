<script setup>
import ChatInput from '@/components/ChatInput.vue';
import { Phone, Video, Info } from 'lucide-vue-next';
</script>

<template>
  <div class="flex h-full flex-1 flex-col bg-slate-50">
    <!-- Chat Header -->
    <div class="flex h-16 items-center justify-between border-b border-slate-200 bg-white px-4 shadow-sm">
      <div class="flex items-center gap-3">
        <div class="relative">
          <img class="h-10 w-10 rounded-full object-cover ring-2 ring-slate-100" src="https://i.pravatar.cc/150?img=2" alt="User Avatar" />
          <span class="absolute bottom-0 right-0 block h-2.5 w-2.5 rounded-full bg-green-500 ring-2 ring-white"></span>
        </div>
        <div>
          <h2 class="font-bold text-slate-900">Jane Smith</h2>
          <p class="text-xs font-medium text-green-600">Active now</p>
        </div>
      </div>
      <div class="flex items-center gap-1">
        <button class="rounded-full p-2 text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition-colors">
          <Phone class="h-5 w-5" />
        </button>
        <button class="rounded-full p-2 text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition-colors">
          <Video class="h-5 w-5" />
        </button>
        <button class="rounded-full p-2 text-slate-500 hover:bg-slate-100 hover:text-indigo-600 transition-colors">
          <Info class="h-5 w-5" />
        </button>
      </div>
    </div>

    <!-- Messages Area -->
    <div class="flex-1 overflow-y-auto p-4 space-y-6">
      <!-- Date Separator -->
      <div class="flex justify-center">
        <span class="rounded-full bg-slate-200 px-3 py-1 text-xs font-medium text-slate-600">Today</span>
      </div>

      <!-- Received Message -->
      <div class="flex items-end gap-2">
        <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white" src="https://i.pravatar.cc/150?img=2" alt="User Avatar" />
        <div class="flex flex-col gap-1 max-w-[70%]">
          <div class="rounded-2xl rounded-bl-none bg-white px-4 py-2 text-slate-800 shadow-sm ring-1 ring-slate-200/50">
            <p>Hey! How are you doing today?</p>
          </div>
          <span class="ml-1 text-xs text-slate-400">10:30 AM</span>
        </div>
      </div>

      <!-- Sent Message -->
      <div class="flex items-end justify-end gap-2">
        <div class="flex flex-col gap-1 items-end max-w-[70%]">
          <div class="rounded-2xl rounded-br-none bg-indigo-600 px-4 py-2 text-white shadow-md">
            <p>I'm doing great, thanks! Just working on this new project.</p>
          </div>
          <span class="mr-1 text-xs text-slate-400">10:32 AM</span>
        </div>
      </div>

      <!-- Received Message -->
      <div class="flex items-end gap-2">
        <img class="h-8 w-8 rounded-full object-cover ring-2 ring-white" src="https://i.pravatar.cc/150?img=2" alt="User Avatar" />
        <div class="flex flex-col gap-1 max-w-[70%]">
          <div class="rounded-2xl rounded-bl-none bg-white px-4 py-2 text-slate-800 shadow-sm ring-1 ring-slate-200/50">
            <p>That sounds exciting! Tell me more about it.</p>
          </div>
          <span class="ml-1 text-xs text-slate-400">10:33 AM</span>
        </div>
      </div>
      
       <!-- Sent Message -->
      <div class="flex items-end justify-end gap-2">
        <div class="flex flex-col gap-1 items-end max-w-[70%]">
          <div class="rounded-2xl rounded-br-none bg-indigo-600 px-4 py-2 text-white shadow-md">
            <p>It's a chat application built with Vue and Laravel. Pretty cool stuff!</p>
          </div>
          <span class="mr-1 text-xs text-slate-400">10:35 AM</span>
        </div>
      </div>
    </div>

    <!-- Input Area -->
    <ChatInput />
  </div>
</template>
