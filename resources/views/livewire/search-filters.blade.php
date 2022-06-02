<div x-data="{subjects: true, virtualities: true, stages: true}">
    @foreach(['subjects' => 'subject', 'virtualities' => 'virtuality', 'stages' => 'stage'] as $list => $key)
        <div class="mb-3">
            <button @click="{{ $list }} = !{{ $list }}" class="font-bold mb-2 w-full flex justify-between">{{ $list }}
                <svg x-show="{{ $list }}" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
                </svg>
                <svg x-show="!{{ $list }}" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 15l7-7 7 7"/>
                </svg>
            </button>
            <div x-show="{{ $list }}">
                @foreach($$list as $subject)
                    <x-checkbox wire:model="{{ $key }}.{{ $subject->id }}">{{ $subject->name }}</x-checkbox>
                @endforeach
            </div>
        </div>
    @endforeach
    <hr class="my-3">
    <div class="flex justify-end">
        <x-button wire:click="search">Update results</x-button>
    </div>
</div>
