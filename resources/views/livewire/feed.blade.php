<div>
    <input type="text" wire:model.lazy="postText">
    <button
        class="rounded-full px-8 py-4 bg-slate-500"
        wire:click="addPost"
    >
        Add
    </button>
    <div>
        @forelse($posts as $post)
            <div>{{ $post->text }}</div>
        @empty
            <div>No posts</div>
        @endforelse
    </div>
</div>
