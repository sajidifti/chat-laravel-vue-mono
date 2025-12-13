<script setup>
import { Plus, Search } from 'lucide-vue-next';
</script>

<template>
  <div class="flex h-full w-80 flex-col border-r border-slate-200 bg-white">
    <!-- Sidebar Header -->
    <div class="flex h-16 items-center justify-between border-b border-slate-200 px-4">
      <h1 class="text-xl font-bold text-slate-800">Chats</h1>
      <button class="rounded-full bg-slate-100 p-2 text-slate-600 hover:bg-slate-200 hover:text-slate-900 transition-colors">
        <Plus class="h-5 w-5" />
      </button>
    </div>

    <!-- Search Bar -->
    <div class="p-4">
      <div class="relative">
        <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
          <Search class="h-4 w-4 text-slate-400" />
        </div>
        <input
          type="text"
          placeholder="Search Messenger"
          class="block w-full rounded-full border-0 bg-slate-100 py-2 pl-10 pr-4 text-slate-900 placeholder:text-slate-500 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
        />
      </div>
    </div>

    <!-- Conversation List -->
    <div class="flex-1 overflow-y-auto">
      <!-- Example Conversation Item -->
      <div class="group flex cursor-pointer items-center gap-3 px-4 py-3 hover:bg-slate-50 transition-colors">
        <div class="relative">
          <img class="h-12 w-12 rounded-full object-cover ring-2 ring-white" src="https://i.pravatar.cc/150?img=1" alt="User Avatar" />
          <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-green-500 ring-2 ring-white"></span>
        </div>
        <div class="flex-1 overflow-hidden">
          <div class="flex justify-between items-baseline">
            <h3 class="truncate font-semibold text-slate-900">John Doe</h3>
            <span class="text-xs text-slate-400">10:30 AM</span>
          </div>
          <p class="truncate text-sm text-slate-500 group-hover:text-slate-600">Hey, how are you doing?</p>
        </div>
      </div>

      <div class="group flex cursor-pointer items-center gap-3 px-4 py-3 bg-indigo-50 hover:bg-indigo-100 transition-colors border-l-4 border-indigo-600">
        <div class="relative">
          <img class="h-12 w-12 rounded-full object-cover ring-2 ring-white" src="https://i.pravatar.cc/150?img=2" alt="User Avatar" />
          <span class="absolute bottom-0 right-0 block h-3 w-3 rounded-full bg-slate-400 ring-2 ring-white"></span>
        </div>
        <div class="flex-1 overflow-hidden">
          <div class="flex justify-between items-baseline">
            <h3 class="truncate font-semibold text-slate-900">Jane Smith</h3>
            <span class="text-xs text-slate-400">Yesterday</span>
          </div>
          <p class="truncate text-sm font-medium text-slate-900">See you tomorrow!</p>
        </div>
      </div>
      
       <div class="group flex cursor-pointer items-center gap-3 px-4 py-3 hover:bg-slate-50 transition-colors">
        <div class="relative">
          <img class="h-12 w-12 rounded-full object-cover ring-2 ring-white" src="https://i.pravatar.cc/150?img=3" alt="User Avatar" />
        </div>
        <div class="flex-1 overflow-hidden">
          <div class="flex justify-between items-baseline">
            <h3 class="truncate font-semibold text-slate-900">Alice Johnson</h3>
            <span class="text-xs text-slate-400">Mon</span>
          </div>
          <p class="truncate text-sm text-slate-500 group-hover:text-slate-600">Can you send me the file?</p>
        </div>
      </div>
    </div>
  </div>
</template>
