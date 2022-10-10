<template>
  <Head title="TARM - Pengawasan JT" />
  <section
    class="container mx-auto font-poppins max-w-screen-xl px-4 md:px-6 py-2.5"
  >
    <div class="px-5 py-3 shadow-lg bg-white rounded-lg">
      <div class="flex justify-between items-center py-2">
        <div class="font-bold text-lg my-2 text-gray-800">
          {{ props.judul }}
        </div>

        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
          <div
            class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none"
          >
            <svg
              class="w-5 h-5 text-gray-500 dark:text-gray-400"
              aria-hidden="true"
              fill="currentColor"
              viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd"
              ></path>
            </svg>
          </div>
          <input
            type="text"
            v-model="search"
            class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          />
        </div>
      </div>

      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table
          class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
          <thead class="text-xs text-[#FFC908] uppercase bg-[#000D80]">
            <tr>
              <th scope="col" class="py-3 px-2">INDETITAS WP</th>
              <th scope="col" class="py-3 px-2">
                Kode dan <br />
                Periode Pemeriksaan
              </th>
              <th scope="col" class="py-3 px-2">Detail Pemeriksaan</th>
              <th scope="col" class="py-3 px-2">ket</th>
              <th scope="col" class="py-3 px-2">Pemeriksa</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="tunggakan in tunggakans.data"
              :key="tunggakan.id"
              class="bg-white text-[10px] border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            >
              <td class="py-2 px-2">
                <span class="font-bold">{{ tunggakan.npwp }}</span
                ><br />{{ tunggakan.nama_wp }}
              </td>
              <td class="py-2 px-2 text-left">
                Kode Pemeriksaan :
                <span class="font-bold"> {{ tunggakan.kode_rik }} </span><br />
                Periode Pemeriksaan :
                <span class="font-bold">
                  {{ tunggakan.periode_1 }} - {{ tunggakan.periode_2 }}
                </span>
                <br />
              </td>
              <td class="py-2 px-2">
                <span class="font-bold"> {{ tunggakan.sp2 }} </span><br />

                Tanggal SP2 :
                <span class="font-bold">
                  {{
                    tunggakan.tgl_sp2 != "0000-00-00"
                      ? moment(tunggakan.tgl_sp2).format("DD MMM YYYY")
                      : "SP2 Belum Input"
                  }} </span
                ><br />
                Tanggal SPPL :
                <span class="font-bold">
                  {{
                    tunggakan.tgl_sppl != "0000-00-00"
                      ? moment(tunggakan.tgl_sppl).format("DD MMM YYYY")
                      : "SPPL Belum Input"
                  }} </span
                ><br />
                Jatuh Tempo :
                <span class="font-bold text-red-700">
                  {{
                    tunggakan.jt_daluarsa != "0000-00-00"
                      ? moment(tunggakan.jt_daluarsa).format("DD MMM YYYY")
                      : "JT Belum diset"
                  }}
                </span>
              </td>

              <td class="py-2 px-2">
                {{ tunggakan.ket }}
              </td>
              <td class="py-2 px-2 text-left">
                {{ tunggakan.spv }} <br />
                {{ tunggakan.kt }} <br />
                {{ tunggakan.ang_1 }} <br />
                {{ tunggakan.ang_2 }}
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
import { ref, watch } from "vue";
import Pagination from "../Shared/Pagination";
import { Inertia } from "@inertiajs/inertia";
import moment from "moment";

let props = defineProps({
  tunggakans: Object,
  filters: Object,
  moment: moment,
  judul: Object,
});
let search = ref(props.filters.search);

watch(search, (value) => {
  Inertia.get(
    window.location.pathname,
    { search: value },
    {
      preserveState: true,
    }
  );
});
</script>
