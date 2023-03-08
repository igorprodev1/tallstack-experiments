<div class="p-4">
    <div
        class="p-2 mb-2 border rounded-lg"
    >
        @foreach ($messages as $message)
        <div>
            {{ $message['message'] }}
        </div>
        @endforeach
    </div>
    <input
        type="text"
        class="mb-2 rounded-lg"
        wire:model.lazy="message"
    />
    <div>
        <button
            class="p-2 text-white bg-blue-900 rounded-lg"
            wire:click="send"
        >
            {{ __('Send') }}
        </button>
    </div>
</div>