<div class="p-4">
    <div class="mb-4">
    @if (session()->has('message'))
        <div class="p-2 text-white bg-blue-600 rounded-lg">
            {{ session('message') }}
        </div>
    @endif
    </div>
    <button 
        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
    wire:click="putInQueue" 
    >
        {{ __('Put In Queue') }}
    </button>
</div>
