<div id="{{ $id }}" class="fixed inset-0  bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6">
        <div class="flex flex-row mb-4 space-x-3">
            <i class="{{ $icon }} text-4xl text-red-600"></i>
            <h2 class="text-lg font-semibold mb-4">{{ $title }}</h2>
        </div>

        <div class="flex justify-end space-x-3">
            <button onclick="document.getElementById('{{ $id }}').classList.add('hidden')"
                class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
                Cancel
            </button>
            {{ $slot }}
        </div>
    </div>
</div>
