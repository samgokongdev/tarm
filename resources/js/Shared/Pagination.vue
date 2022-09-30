<template>
  <div class="mt-6 text-end mb-3">
    <nav aria-label="Page navigation example">
      <ul class="inline-flex -space-x-px">
        <li v-for="link in links">
          <Link :href="link.url" v-html="link.label" :class="{'bg-[#000D80] text-[#FFC908] font-bold' : link.active}"
            class="py-2 px-3 leading-tight   border border-gray-300 hover:bg-gray-200 " />
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
export default {
  props: {
    links: Array
  }
}
</script>