<div class="book-comments space-y-4" wire:poll.5s>
    <h4 class="text-lg font-semibold">
        Comments ({{ $book->comments->count() }})
        <x-avg-rating :book="$book" />
    </h4>

    @auth
        <form wire:submit="addComment" class="space-y-2">
            <livewire:rating :book="$book" />

            <textarea wire:model="content" class="w-full p-2 border rounded-md focus:ring-2 focus:ring-blue-500 focus:outline-none"
                rows="2" placeholder="Write a comment..." required>
            </textarea>
            @error('content')
                <span class="text-red-500 text-sm">{{ $message }}</span>
            @enderror
            <div class="flex justify-end">
                <button type="submit" wire:loading.attr="disabled" wire:target="addComment"
                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition disabled:opacity-50">
                    <span wire:loading.remove wire:target="addComment">Post Comment</span>
                    <span wire:loading wire:target="addComment">Posting...</span>
                </button>
            </div>

        </form>
    @else
        <p class="text-gray-600">
            <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Login</a> to comment.
        </p>
    @endauth

    <div class="space-y-3">
        @foreach ($book->comments->load('user')->sortByDesc('created_at') as $comment)
            <div class="comment p-4 border rounded-md bg-gray-50">
                <div class="flex justify-between items-start">
                    <div class="flex-1">
                        <strong class="text-gray-800 pr-4">{{ $comment->user->name }}</strong><small
                            class="text-gray-500 text-sm">{{ $comment->created_at->diffForHumans() }}</small>
                        <p class="text-gray-700 mt-1">{{ $comment->content }}</p>
                    </div>
                    {{-- <div class="ml-4">
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($comment->rating >= $i)
                                <i class="bi bi-star-fill text-yellow-400"></i>
                            @else
                                <i class="bi bi-star text-gray-300"></i>
                            @endif
                        @endfor
                        <span class="text-sm text-gray-500 ml-1">({{ $comment->rating }}/5)</span>
                    </div> --}}
                </div>
            </div>
        @endforeach
    </div>


</div>
