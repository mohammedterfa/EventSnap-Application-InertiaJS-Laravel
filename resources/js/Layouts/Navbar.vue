<template>

</template>

<script>
import { mapState } from 'vuex'

export default {
  name: 'Navbar',
  computed: {
      ...mapState(['sideBarOpen'])
  },
  data() {
      return {
          dropDownOpen: false
      }
  },
  methods: {
      toggleSidebar() {
          this.$store.dispatch('toggleSidebar')
      }
  }
}
</script>
