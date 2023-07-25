<script setup>
defineProps({
  heading: {
    type: String,
    required: true,
  },

  message: {
    type: String,
    required: true,

  }
})
</script>
<template>
<div class="border-b border-gray-200 pb-5 sm:flex sm:items-baseline
 justify-between">
  <h3>{{ heading }}</h3>
  <div class="mt-3 sm:ml-4 sm:mt-0">
    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
      {{ message }}
    </button>
  </div>
</div>

</template>
