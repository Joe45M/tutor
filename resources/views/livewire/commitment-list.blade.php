<div>
    <div class="grid lg:grid-cols-3 gap-5">
        <div>
            <x-title class="mb-3">All commitments</x-title>
            <x-card>
                @foreach($commitments as $commitment)
                    <div class="border-b {{ $loop->last ?: 'mb-3' }}  pb-3 border-b-gray-300 p-3 -m-3 hover:bg-gray-100">
                        <a href="{{ route('commitment.show', $commitment->id) }}" class="relative">
                            <p>{{ auth()->user()->type == 'student' ? $commitment->tutor->name : $commitment->student->name }}</p>
                            <p class="text-sm">{{ \Illuminate\Support\Str::limit($commitment->messages->last()?->message, 45) ?? 'No messages' }}</p>
                            <span class="absolute text-xs text-gray-400 top-0 right-4">{{ $commitment->updated_at->format('d/m/y H:i:s') }}</span>
                        </a>
                    </div>
                @endforeach
            </x-card>
        </div>
    </div>
</div>
