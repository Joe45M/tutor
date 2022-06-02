<div>
    @if($results?->count())
        @foreach($results as $result)
            <x-card class="mb-3 p-10 hover:shadow-2xl">
                <x-title class="mb-5">{{ $result->name }}</x-title>
                <div class="mb-2">
                    @if($result->virtuals->count())
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <div class="self-center">
                                @foreach($result->virtuals as $v)
                                    @if($result->virtuals->count() === 2 && $loop->last)
                                        &
                                    @endif
                                    {{ $v->name }}
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mb-2">
                    @if($result->stages->count())
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                            </svg>
                            <div class="self-center">
                                @foreach($result->stages as $v)
                                    @if($result->stages->count() && $loop->last)
                                        &
                                    @endif
                                    {{ $v->name }}@if($result->stages->count() && !$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="mb-3">
                    @if($result->subjects->count())
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                            <div class="self-center">
                                @foreach($result->subjects as $v)
                                    @if($result->subjects->count() && $loop->last)
                                        &
                                    @endif
                                    {{ $v->name }}@if($result->subjects->count() && !$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="flex justify-end">
                    <x-button>Contact</x-button>
                </div>
            </x-card>
        @endforeach
    @else
        <x-card>
            <p class="p-10">Sorry, there's no results for that search.</p>
        </x-card>
    @endif
</div>
