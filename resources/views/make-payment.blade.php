<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Make Deposit') }}
        </h2>
    </x-slot>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 sm:p-6 bg-gradient-to-br from-sky-500 to-indigo-500">
                    <h2 class="text-lg text-center text-white font-bold">Name:- {{ auth()->user()->name }}</h2>
                    <h2 class="text-lg text-center text-white font-bold">PID:- {{ auth()->user()->client_id }}</h2>
                </div>
                <div class="border-t border-gray-200">
                    <div class="my-4 flex items-center space-x-3">
                        <div class="h-px flex-1 bg-slate-200"></div>
                        <p>Account Details</p>
                        <div class="h-px flex-1 bg-slate-200"></div>
                    </div>

                    <div class="py-2 px-2 grid grid-cols-2 gap-3 sm:grid-cols-1 sm:gap-5 lg:grid-cols-2">
                        <div class="rounded-lg bg-sky-500 p-4 text-white">
                            <div class="flex justify-between space-x-1">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    ₦67,000.00
                                </p>
                                <svg class="h-5 w-5 text-success-200" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 12a2.25 2.25 0 00-2.25-2.25H15a3 3 0 11-6 0H5.25A2.25 2.25 0 003 12m18 0v6a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 18v-6m18 0V9M3 12V9m18 0a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 9m18 0V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v3" />
                                </svg>

                            </div>
                            <p class="mt-1 text-xs+">Current Wallet Balance</p>
                        </div>
                        <div class="rounded-lg bg-sky-500/75 p-4 text-white">
                            <div class="flex justify-between">
                                <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                    ₦00.00
                                </p>
                                <svg class="h-5 w-5 text-success-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                                </svg>

                            </div>
                            <p class="mt-1 text-xs+">Outstanding Bill Balance</p>
                        </div>
                    </div>
                    {{-- <div class="rounded-lg bg-gradient-to-r from-sky-400 to-blue-600 p-1"> --}}
                    <div class="rounded-lg bg-indigo-600 px-4 py-4 shadow-lg shadow-primary/50 sm:px-5">
                        <form onsubmit="makePayment()" id="payment-form">
                            <div>
                                <h2 class="text-lg font-medium tracking-wide line-clamp-1 text-white">
                                    Enter Amount to deposit in wallet
                                </h2>
                            </div>
                            <div class="pt-2">
                                <p>
                                <div>
                                    <label for="price" class="block text-sm font-medium text-gray-700">Price</label>
                                    <div class="relative mt-1 rounded-md shadow-sm text-indigo-900">
                                        <div
                                            class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                            <span class="text-gray-500 sm:text-sm md:text-lg">₦</span>
                                        </div>
                                        <input type="number" name="price" id="price"
                                            class="block w-full rounded-md border-gray-300 pl-7 pr-12 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm md:text-lg"
                                            placeholder="0.00" aria-describedby="price-currency">

                                    </div>
                                </div>
                                </p>

                            </div>
                            
                        </form>
                    </div>


                </div>
            </div>
        </div>
        <script>
            < script >
                function setDemoData() { // Optional. This function is passed when the integration is at the demo stage and can be removed immediately for live.
                    var obj = {
                        firstName: "Jefferson",
                        lastName: "Ighalo",
                        email: "jefferson@ighalo.com",
                        narration: "test payment",
                        amount: "19999"
                    };
                    for (var propName in obj) {
                        document.querySelector('#js-' + propName).setAttribute('value', obj[propName]);
                    }
                }

            function makePayment() {
                var form = document.querySelector("#payment-form");
                var handler = RmPaymentEngine.init({
                    key: "87y87qrknfgkjnsfgiuh57778", // Replace with public key
                    customerId: "jefferson@ighalo.com", // Replace with customer id
                    transactionId: "67897006679100998378", // Replace with transaction id
                    firstName: form.querySelector('input[name="firstName"]').value,
                    lastName: form.querySelector('input[name="lastName"]').value,
                    email: form.querySelector('input[name="email"]').value,
                    amount: form.querySelector('input[name="amount"]').value,
                    narration: form.querySelector('input[name="narration"]').value,
                    extendedData: { // Optional field. Details are available in the table
                        customFields: [{
                            name: "rrr",
                            value: "340007777362"
                        }],
                        recurring: [{
                            "endDate": 1561935600000,
                            "frequency": "MON",
                            "maxUploadLimit": 0,
                            "numberOfTimes": 0,
                            "startDate": 1561478053677
                        }]
                    },
                    onSuccess: function(
                        response) { // Function call for use after the transaction has processed successfully
                        console.log('callback Successful Response', response);
                    },
                    onError: function(response) {
                        Function call
                        for use
                        if the transaction fails
                        console.log('callback Error Response', response);
                    },
                    onClose: function() { // Function call for use if the customer closes the transaction without completion
                        console.log("closed");
                    }
                });
                handler.openIframe();
            }

            window.onload =
                function() { // Optional. This function is passed when the integration is at the demo stage and can be removed immediately for live.
                    setDemoData();
                };
        </script>
</x-app-layout>
