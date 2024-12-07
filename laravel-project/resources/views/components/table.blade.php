@props([
    'header' => ''
])

<div class="flex flex-col">
    <div class="-m-1.5 overflow-x-auto">
      <div class="p-1.5 min-w-full inline-block align-middle">
        <div class="overflow-hidden">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
            <thead>
              <tr>
                {{ $header }}
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                {{ $slot }}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.querySelectorAll('th').forEach(el=>el.classList.add('px-6', 'py-3', 'text-start', 'text-xs', 'font-medium', 'text-gray-500', 'uppercase', 'dark:text-neutral-500'));
    document.querySelectorAll('td').forEach(el => el.classList.add('px-6', 'py-4', 'whitespace-nowrap', 'text-sm', 'text-gray-800', 'dark:text-neutral-200'));
</script>