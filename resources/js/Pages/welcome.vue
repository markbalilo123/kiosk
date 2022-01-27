<template>
  <div>Hey {{ name }}, you have progress. continue to learn!</div>
  <Nav />
</template>

<script>
import Nav from "./Components/nav";
export default {
  components: { Nav },
  props: {
    name: String,
  },
  setup() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
</style>
