<template>
  <!-- give the sidebar z-50 class so its higher than the navbar if you want to see the logo -->
  <!-- you will need to add a little "X" button next to the logo in order to close it though -->

</template>

<script>
import { mapState } from 'vuex'

export default {
  name: 'Sidebar',
  computed: {
      ...mapState(['sideBarOpen'])
  }
}
</script>
