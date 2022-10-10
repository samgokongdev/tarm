<template>
  <Head title="TARM - Dashboard" />
  <section
    class="flex flex-col flex-wrap justify-between mx-auto max-w-screen-xl px-4 md:px-6 py-2.5"
  >
    <div>
      <div class="font-bold text-xl pb-4">Pengawasan SP2</div>
      <div>
        <div class="grid grid-cols-4 gap-4">
          <Link href="/jtnow">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 JT Bulan Ini
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2bulanini }} SP2
              </div>
            </div>
          </Link>

          <Link href="/nosppl">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 belum input SPPL
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2beluminputsppl }} SP2
              </div>
            </div>
          </Link>

          <Link href="/np2nosp2">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                NP2 Belum Terbit SP2
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.np2beluminputsp2 }} SP2
              </div>
            </div>
          </Link>

          <Link href="/sp2outstanding">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 Outstanding
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2outstanding }} SP2
              </div>
            </div>
          </Link>

          <!-- <Link href="/sp2permdok">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 Target Peminjaman Dokumen Selesai Bulan Ini
              </div>
  
              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2permdok }} SP2
              </div>
            </div>
          </Link> -->

          <!-- <Link href="/sp2sphp">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 Target SPHP Bulan Ini
              </div>
  
              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2sphp }} SP2
              </div>
            </div>
          </Link> -->

          <!-- <Link href="/sp2lhp">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SP2 Target LHP Bulan Ini
              </div>
  
              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2lhp }} SP2
              </div>
            </div>
          </Link> -->
        </div>
      </div>
    </div>
    <div class="mt-5">
      <div class="font-bold text-xl pb-4">Pengawasan SPT</div>
      <div>
        <div class="grid grid-cols-4 gap-4">
          <Link href="/jtnow">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SPT LB PPN <br />
                Belum Ada Tindakan Pemeriksaan
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2bulanini }} SPT
              </div>
            </div>
          </Link>
          <Link href="/jtnow">
            <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
              <div class="font-bold text-[#FFC908] text-sm">
                SPT LB BADAN <br />
                Belum Ada Tindakan Pemeriksaan
              </div>

              <div class="font-bold text-[#FFC908] text-2xl py-2">
                {{ props.sp2bulanini }} SPT
              </div>
            </div>
          </Link>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
let props = defineProps({
  sp2bulanini: Object,
  sp2beluminputsppl: Object,
  np2beluminputsp2: Object,
  sp2outstanding: Object,
  sp2permdok: Object,
  sp2sphp: Object,
  sp2lhp: Object,
});
</script>
