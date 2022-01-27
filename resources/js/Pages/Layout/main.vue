<template>
  <div>
    <Nav />
    <h1>Main Page</h1>
    <slot />
  </div>
</template>

<script>
import Nav from "../Components/nav";
export default {
  components: { Nav },
  setup() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
</style>
