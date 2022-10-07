<template>

    <Head title="TARM - Dashboard" />
    <section class="flex flex-col flex-wrap justify-between mx-auto max-w-screen-xl px-4 md:px-6 py-2.5">
        <div class="font-bold text-xl pb-4">
            Summary Pemeriksaan
        </div>
        <div>
            <div class="grid grid-cols-4 gap-4">
                <Link href="/jtnow">
                <div class="w-full bg-[#000D80] justify-center p-3 rounded-lg">
                    <div class="font-bold text-[#FFC908] text-sm">
                        Pemeriksaan JT Bulan Ini
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
            </div>
        </div>

    </section>
</template>

<script setup>
let props = defineProps({
    sp2bulanini: Object,
    sp2beluminputsppl: Object,
    np2beluminputsp2: Object,
    sp2outstanding: Object
})
</script>