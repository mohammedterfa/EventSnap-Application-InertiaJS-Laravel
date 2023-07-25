<script setup>
import Application from '@/Layouts/Application.vue';
import  Container  from '@/Components/Container.vue';
import Header from '@/Components/Header.vue';

defineProps({
  projects: {
    type: Array,
    required: true,
  }
})

const statues = {
  active: 'text-green-700 bg-green-50 ring-green-600/20',
  inactive: 'text-yallow-800 bg-yellow-50 ring-yellow-600/20'
}
</script>


<template>
  <Application>
    <Container>
      <section class="py-6">
        <Header
          heading="Your Team Projects"
          message="Create New Project"
        />
      </section>

      <section  class="py-6">
        <ul role="list" class="divide-y divide-gray-100">
          <li v-for="project in projects" :key="project.id" class="flex items-center justify-between">
            <div class="min-w-0">
              <div class="flex items-start gap-x-3">
                <p class="text-sm font-semibold leading-6 text-gray-900">
                  {{ project.name }}
                </p>

                <p
                  class="text-green-700 bg-green-50 ring-green-600/20"
                >
                  {{ project.status }}
                </p>
              </div>

              <div class="mt-1 flex items-center gap-x-2 text-xs leading-5 text-gray-500">
                <p class="whitespace-nowrap">
                  Due on
                  {{ project.dueDate }}
                </p>
              </div>
            </div>
          </li>
        </ul>
      </section>
    </Container>
  </Application>
</template>
