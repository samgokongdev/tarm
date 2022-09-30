<template>
  <Nav />
  <slot />
</template>
<script>
import Nav from './Nav.vue';

export default {
  components: {
    Nav
  },
};
</script>