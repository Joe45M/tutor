<div wire:poll="refreshMessages">
    <a href="{{ route('commitment.index') }}" class="flex mb-3">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 mr-2 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
        Back to all commitments
    </a>
    <x-card>
        <div class="py-3 px-5 border-b-2 border-gray-300 -mx-3 -mt-3">
            <span class="text-3xl">{{ auth()->user()->type == 'student' ? $commitment->tutor->name : $commitment->student->name }}</span>
            <p class="text-lg text-gray-400">Commitment opened {{ $commitment->created_at->format('d/m/y H:i:s') }}</p>
        </div>
        <div class="h-3/4 pt-5">
            <div class="grid grid-cols-5 gap-5">
                <div class="col-span-4">
                    <div class="bg-yellow-50 p-3 mb-3 rounded-sm border border-yellow-500">
                        <p class="text-xl mb-3"> 👋 Begin your conversation</p>
                        <p>Get started by introducing yourself, and asking questions such as availability, lesson prices, and how you can work with them.</p>
                    </div>
                    <div class="h-[60vh] overflow-y-auto">
                        @foreach($commitment->messages as $msg)
                            <div class="flex {{ !$msg->sentByUser ?: 'justify-end' }}">
                                <div class="rounded-sm p-3 inline-block min-w-[20%] flex text-white group relative {{ $msg->sentByUser ? 'bg-gradient-to-br from-blue-400 to-cyan-500' : 'bg-gray-300 ' }}">
                                    {{ $msg->message }}
                                </div>
                            </div>
                            <div class="rounded-sm pt-2 text-gray-400 text-xs mb-5 group relative {{ $msg->sentByUser ? 'text-right' : '' }}">
                                {{ $msg->created_at->format('d/m/y H:i:s') }}
                            </div>
                        @endforeach
                    </div>
                    <div class="border-t-2 -mx-3 w-full border-t-gray-300 -mb-3 ">
                        <input wire:keydown.enter="send" wire:model.defer="message" class="block w-full p-3 border-none" type="text" placeholder="Type your message...">
                    </div>
                </div>
                <div class="bg-gray-50 -mr-3 -mt-5 -mb-3 p-5">
                    @if($commitment->student->id === auth()->id())
                        <div class="font-bold mb-3">{{ $commitment->tutor->name }} teaches</div>
                        <div class="flex mb-5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path fill-rule="evenodd"
                                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                      clip-rule="evenodd"/>
                            </svg>
                            <div class="self-center">
                                @foreach($commitment->tutor->virtuals as $v)
                                    @if($commitment->tutor->virtuals->count() === 2 && $loop->last)
                                        &
                                    @endif
                                    {{ $v->name }}
                                @endforeach
                            </div>
                        </div>
                        <div class="font-bold mb-3">{{ $commitment->tutor->name }} teaches at</div>
                        <div class="flex mb-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4"
                                     viewBox="0 0 20 20"
                                     fill="currentColor">
                                    <path
                                        d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                </svg>
                                <div class="self-center">
                                    @foreach($commitment->tutor->stages as $v)
                                        @if($commitment->tutor->stages->count() && $loop->last && !$loop->first)
                                            &
                                        @endif
                                        {{ $v->name }}@if($commitment->tutor->stages->count() && !$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="font-bold mb-3">{{ $commitment->tutor->name }} knows</div>
                        <div class="flex mb-5">
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                </svg>
                                <div class="self-center">
                                    @foreach($commitment->tutor->subjects as $v)
                                        @if($commitment->tutor->subjects->count() && $loop->last && !$loop->first)
                                            &
                                        @endif
                                        {{ $v->name }}@if($commitment->tutor->subjects->count() && !$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-card>
</div>
