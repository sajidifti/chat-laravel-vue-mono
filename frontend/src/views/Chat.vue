<script setup>
import ChatSidebar from '@/components/ChatSidebar.vue';
import ChatWindow from '@/components/ChatWindow.vue';
</script>

<template>
  <div class="flex h-screen overflow-hidden bg-gray-100">
    <ChatSidebar />
    <ChatWindow />
  </div>
</template>
