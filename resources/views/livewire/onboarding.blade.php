<div>
    <div class="flex justify-center mx-auto lg:w-1/3">
        <x-card x-data="{tab: 'stage'}" class="text-center">
            <div wire:loading>
                <svg version="1.1" id="L9" class="text-blue-500" xmlns="http://www.w3.org/2000/svg"
                     xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 100 100" enable-background="new 0 0 0 0" xml:space="preserve">
    <path fill="currentColor"
          d="M73,50c0-12.7-10.3-23-23-23S27,37.3,27,50 M30.9,50c0-10.5,8.5-19.1,19.1-19.1S69.1,39.5,69.1,50">
        <animateTransform
            attributeName="transform"
            attributeType="XML"
            type="rotate"
            dur="1s"
            from="0 50 50"
            to="360 50 50"
            repeatCount="indefinite"/>
    </path>
</svg>
            </div>
            <div x-show="tab === 'stage'">
                <x-title>What level do you {{ $noun }}?</x-title>
                @foreach($stages as $stage)
                    <label for="{{ $stage->slug }}" class="">
                        <input wire:model="stage.{{ $stage->id }}" id="{{ $stage->slug }}" type="checkbox" class="hidden peer" name="stage"
                               value="{{ $stage->id }}">
                        <div
                            class="peer-checked:bg-blue-500 transition-colors peer-checked:text-white p-3 block mb-3 rounded-sm border border-gray-300">
                            <span>{{ $stage->name }}</span>
                        </div>
                    </label>
                @endforeach
                <div class="flex justify-end">
                    <x-button @click="tab = 'subjects'">Next step</x-button>
                </div>
            </div>
            <div x-show="tab === 'subjects'">
                <x-title>What do you {{ $noun }}?</x-title>
                @foreach($subjects as $subject)
                    <label for="{{ $subject->slug }}" class="">
                        <input wire:model="subject.{{ $subject->id }}" id="{{ $subject->slug }}" type="checkbox" class="hidden peer" name="stage"
                               value="{{ $subject->id }}">
                        <div
                            class="peer-checked:bg-blue-500 transition-colors peer-checked:text-white p-3 block mb-3 rounded-sm border border-gray-300">
                            <span>{{ $subject->name }}</span>
                        </div>
                    </label>
                @endforeach
                <div class="flex justify-between">
                    <x-button @click="tab = 'stage'">Back</x-button>
                    <x-button @click="tab = 'virtuals'">Next step</x-button>
                </div>
            </div>
            <div x-show="tab === 'virtuals'">
                <x-title>How will you {{ $noun }}?</x-title>
                @foreach($virtualities as $virtual)
                    <label for="{{ $virtual->slug }}" class="">
                        <input wire:model="virtuality.{{ $virtual->id }}" id="{{ $virtual->slug }}" type="checkbox" class="hidden peer" name="stage"
                               value="{{ $virtual->id }}">
                        <div
                            class="peer-checked:bg-blue-500 transition-colors peer-checked:text-white p-3 block mb-3 rounded-sm border border-gray-300">
                            <span>{{ $virtual->name }}</span>
                        </div>
                    </label>
                @endforeach
                <div>
                    <div class="flex justify-between">
                        <x-button @click="tab = 'stage'">Back</x-button>
                        <x-button wire:click="save">Next step</x-button>
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</div>
