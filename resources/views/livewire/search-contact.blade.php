<div>
    @if($user)

        <!-- Default Modal -->
        <div class="fixed w-screen h-screen bg-black bg-opacity-50 top-0 left-0 flex align-middle justify-center">
            <div id="medium-modal" tabindex="-1" class="overflow-y-auto overflow-x-hidden self-center z-50 md:inset-0 ">
                <div class="relative p-4 w-full max-w-lg h-full md:h-auto">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex justify-between items-center p-5 rounded-t border-b dark:border-gray-600">
                            <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                Contact {{ $user->name }}
                            </h3>
                            <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="medium-modal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-6">
                            <div class="flex">
                                <img src="" alt="" class="h-10 mr-3 w-10 rounded-full bg-gray-500">
                                <div class="self-center">
                                    <x-title class="self-center">Get in touch with {{ $user->name }}!</x-title>
                                </div>
                            </div>

                            <div>
                                <div class="mb-2">
                                    @if($user->virtuals->count())
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path fill-rule="evenodd"
                                                      d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                                      clip-rule="evenodd"/>
                                            </svg>
                                            <div class="self-center">
                                                @foreach($user->virtuals as $v)
                                                    @if($user->virtuals->count() === 2 && $loop->last)
                                                        &
                                                    @endif
                                                    {{ $v->name }}
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-2">
                                    @if($user->stages->count())
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-4"
                                                 viewBox="0 0 20 20"
                                                 fill="currentColor">
                                                <path
                                                    d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                                            </svg>
                                            <div class="self-center">
                                                @foreach($user->stages as $v)
                                                    @if($user->stages->count() && $loop->last)
                                                        &
                                                    @endif
                                                    {{ $v->name }}@if($user->stages->count() && !$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div class="mb-3">
                                    @if($user->subjects->count())
                                        <div class="flex">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-4" fill="none"
                                                 viewBox="0 0 24 24"
                                                 stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                      d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                            </svg>
                                            <div class="self-center">
                                                @foreach($user->subjects as $v)
                                                    @if($user->subjects->count() && $loop->last)
                                                        &
                                                    @endif
                                                    {{ $v->name }}@if($user->subjects->count() && !$loop->last)
                                                        ,
                                                    @endif
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <p>Please submit payment to get in touch with James.</p>
                            <hr class="my-3">
                            <div id="card-element">
                                <!-- Elements will create input elements here -->
                            </div>

                            <!-- We'll put the error messages in this element -->
                            <div id="card-errors" role="alert"></div>

                            <x-button id="payment">capture</x-button>
                        </div>
                        <!-- Modal footer -->
                    </div>
                </div>
            </div>
        </div>

        <script>
            var stripe = Stripe("{{ config('cashier.key') }}");
            var elements = stripe.elements();
            var style = {
                base: {
                    color: "#32325d",
                }
            };

            var card = elements.create("card", {style: style});
            card.mount("#card-element");

            document.querySelector('#payment').addEventListener('click', function () {
                stripe
                    .createPaymentMethod({
                        type: 'card',
                        card: card,
                        billing_details: {
                            name: 'Jenny Rosen',
                        },
                    })
                    .then(function (result) {
                        // Handle result.error or result.paymentMethod
                        console.log(result);
                    @this.process(result.paymentMethod.id);
                    });
            });


        </script>
    @endif
</div>
