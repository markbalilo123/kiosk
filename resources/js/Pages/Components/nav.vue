<template>
  <nav>
    <ul class="flex justify-center space-x-5">
      <li>
        <Link href="/" :class="{ 'font-bold undelined': $page.url === '/' }"
          >home</Link
        >
      </li>
      <li>
        <Link
          href="/products"
          preserve-scroll
          :class="{ 'font-bold undelined': $page.url.startsWith('/products') }"
          >Products</Link
        >
      </li>
      <li>
        <Link
          href="/categories"
          preserve-scroll
          :class="{
            'font-bold undelined': $page.url.startsWith('/categories'),
          }"
        >
          Categories</Link
        >
      </li>
      <li><Link href="/logout" method="post" as="button">Logout</Link></li>
    </ul>
  </nav>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
  components: { Link },
  setup() {
    return {};
  },
};
</script>

<style lang="scss" scoped>
</style>
