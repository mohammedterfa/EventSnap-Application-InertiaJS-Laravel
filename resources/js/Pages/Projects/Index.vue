<script setup>
import Application from '@/Layouts/Application.vue';
import  Container  from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';
import Dropdown from '@/Layouts/Dropdown.vue'
defineProps({
  projects: {
    type: Array,
    required: true,
  }

})
</script>


<template>
  <Application>
    <Container>
      <section class="py-6">
        <div class="border-b border-gray-200 pb-5 sm:flex sm:items-baseline
          justify-between">
            <h3>Create New project</h3>
            <div class="mt-3 sm:ml-4 sm:mt-0">
              <button
              type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                Create Project
              </button>
            </div>
          </div>
      </section>



      <section>
        <!-- component -->


          <div class="pt-5 pr-0 pb-0 pl-0 mt-5 mr-0 mb-0 ml-0" v-for="project in projects" :key="project.id">
            <div class="sm:flex sm:items-center sm:justify-between sm:space-x-5">
              <div class="flex items-center flex-1 min-w-0">
                <img
                    src="https://d34u8crftukxnk.cloudfront.net/slackpress/prod/sites/6/SlackLogo_CompanyNews_SecondaryAubergine_Hero.jpg?d=500x500&amp;f=fill" class="flex-shrink-0 object-cover rounded-full btn- w-10 h-10"/>
                <div class="mt-0 mr-0 mb-0 ml-4 flex-1 min-w-0">
                  <p class="text-lg font-bold text-gray-800 truncate">{{ project.name }}</p>
                  <p class = "text-sm px-1 w-12 text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800">{{ project.status }}</p>
                </div>
              </div>

              <Dropdown />

            </div>


          </div>
      </section>
    </Container>
  </Application>
</template>

<style>
.dropdown:focus-within .dropdown-menu {
  opacity:1;
  transform: translate(0) scale(1);
  visibility: visible;
}
    </style>
