<template>

  <Head title="TARM - Pengawasan JT" />
  <section class="container mx-auto font-poppins max-w-screen-xl px-4 md:px-6 py-2.5">
    <div class="px-5 py-3 shadow-lg bg-white rounded-lg">
      <div class="flex justify-between items-center py-2">
        <div class="font-bold text-lg my-2 text-gray-800">
          {{props.judul}}
        </div>

        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
          <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
              viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"></path>
            </svg>
          </div>
          <input type="text" v-model="search"
            class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
      </div>

      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-[#FFC908] uppercase bg-[#000D80]">
            <tr>
              <th scope="col" class="py-3 px-2">
                NP2
              </th>
              <th scope="col" class="py-3 px-2">
                NPWP
              </th>
              <th scope="col" class="py-3 px-2">
                Nama Wajib Pajak
              </th>
              <th scope="col" class="py-3 px-2">
                Periode Pemeriksaan
              </th>
              <th scope="col" class="py-3 px-2">
                Kode Pemeriksaan
              </th>
              <th scope="col" class="py-3 px-2">
                Nomor SP2
              </th>
              <th scope="col" class="py-3 px-2">
                Tgl SP2
              </th>
              <th scope="col" class="py-3 px-2">
                Tgl SPPL
              </th>
              <th scope="col" class="py-3 px-2">
                JT
              </th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="tunggakan in tunggakans.data" :key="tunggakan.id"
              class="bg-white text-xs border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
              <td class="py-2 px-2">
                {{tunggakan.np2}}
              </td>
              <td class="py-2 px-2">
                {{tunggakan.npwp}}
              </td>
              <td class="py-2 px-2">
                {{tunggakan.nama_wp}}
              </td>
              <td class="py-2 px-2 text-left">
                {{tunggakan.periode_1}} - {{tunggakan.periode_2}}
              </td>
              <td class="py-2 px-2">
                {{tunggakan.kode_rik}}
              </td>
              <td class="py-2 px-2">
                {{tunggakan.sp2}}
              </td>
              <td class="py-2 px-2">
                {{ moment(tunggakan.tgl_sp2).format("DD-MM-YYYY") }}
              </td>
              <td class="py-2 px-2">
                {{ tunggakan.tgl_sppl = "0000-00-00" ? "SPPL Belum Diinput" :
                moment(tunggakan.tgl_sppl).format("DD-MM-YYYY") }}
              </td>
              <td class="py-2 px-2">
                {{ moment(tunggakan.jt_daluarsa).format("DD-MM-YYYY") }}
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      <Pagination :links="tunggakans.links" />

    </div>



  </section>
</template>
<script setup>
import { ref, watch } from 'vue';
import Pagination from '../Shared/Pagination';
import { Inertia } from '@inertiajs/inertia';
import moment from "moment";

let props = defineProps({
  tunggakans: Object,
  filters: Object,
  moment: moment,
  judul: Object
})
let search = ref(props.filters.search);

watch(search, value => {
  Inertia.get(window.location.pathname, { search: value }, {
    preserveState: true
  });
});

</script>