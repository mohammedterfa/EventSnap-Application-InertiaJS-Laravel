<template>
  <div class="relative">
    <!-- Dropdown button -->
    <button @click="toggleDropdown" class="px-4 py-2 bg-blue-600 text-white rounded-lg">
      {{ selectedOption || 'Select an option' }}
    </button>

    <!-- Dropdown menu -->
    <ul v-if="showDropdown" class="absolute  top-10 right-0 z-10 bg-white border border-gray-300 py-4 rounded-lg shadow">
      <!-- Dropdown items -->
      <li @click="selectOption('Option 1')" class="px-4 py-2 cursor-pointer hover:bg-gray-100">Add</li>
      <li @click="selectOption('Option 2')" class="px-4 py-2 cursor-pointer hover:bg-gray-100">Edit</li>
      <li @click="selectOption('Option 3')" class="px-4 py-2 cursor-pointer hover:bg-gray-100">Delete</li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue';

// State for controlling dropdown visibility and selected option
const showDropdown = ref(false);
const selectedOption = ref(null);

// Function to toggle the dropdown visibility
const toggleDropdown = () => {
  showDropdown.value = !showDropdown.value;
};

// Function to select an option and close the dropdown
const selectOption = (option) => {
  selectedOption.value = option;
  showDropdown.value = false;
};
</script>
