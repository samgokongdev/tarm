<template>
  <header class="font-poppins">
    <nav class="bg-[#000D80] border-gray-200">
      <div
        class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl px-4 md:px-6 py-2.5"
      >
        <a href="https://flowbite.com" class="flex items-center">
          <span
            class="self-center text-xl font-semibold whitespace-nowrap text-white"
            >(TARM) Tax Audit Report & Monitoring</span
          >
        </a>
        <div class="flex items-center">
          <a
            href="tel:5541251234"
            class="mr-6 text-sm font-medium text-white dark:text-white hover:underline"
            >Selamat Datang {{ $page.props.auth.user.username }} ({{
              $page.props.auth.user.nip
            }})</a
          >
          <a
            href="#"
            class="text-xs font-bold text-white px-3 py-2 rounded-lg bg-[#FFC908]"
            >Keluar</a
          >
        </div>
      </div>
    </nav>
    <nav class="bg-[#000D80] text-white">
      <div class="py-3 px-4 mx-auto max-w-screen-xl md:px-6">
        <div class="flex items-center">
          <ul class="flex flex-row mt-0 mr-6 space-x-8 text-sm font-medium">
            <li>
              <Link
                href="/"
                class="hover:underline"
                :class="{ 'text-[#FFC908]': $page.component === 'Home' }"
              >
                Dashboard</Link
              >
            </li>
            <li>
              <Link
                href="/tunggakan"
                class="hover:underline"
                :class="{ 'text-[#FFC908]': $page.component === 'Tunggakan' }"
              >
                Pengawasan JT</Link
              >
            </li>
            <li>
              <Link
                href="/spt"
                class="hover:underline"
                :class="{ 'text-[#FFC908]': $page.component === 'Spt' }"
              >
                Pengawasan SPT</Link
              >
            </li>
            <li>
              <Link
                href="/lhp"
                class="hover:underline"
                :class="{ 'text-[#FFC908]': $page.component === 'Lhp' }"
              >
                Hasil Pemeriksaan</Link
              >
            </li>
            <li>
              <Link
                href="/pkm"
                class="hover:underline"
                :class="{ 'text-[#FFC908]': $page.component === 'Pkm' }"
                >PKM P2
              </Link>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
</template>
<script>
export default {
  components: {},
};
</script>
