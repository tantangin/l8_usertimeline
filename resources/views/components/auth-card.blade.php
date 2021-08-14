<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-black">
  <div>
    {{ $logo }}
  </div>

  <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-700 dark:text-gray-200 shadow-md overflow-hidden sm:rounded-lg">
    {{ $slot }}
  </div>
</div>