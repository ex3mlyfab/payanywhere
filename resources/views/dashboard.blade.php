<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="px-4 sm:p-6 bg-gradient-to-br from-sky-500 to-indigo-500 flex justify-between">
                    <h2 class="text-lg text-center text-white font-bold">Hello {{ auth()->user()->name }}!</h2>
                    <a href="{{ route('deposit') }}"
                        class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                        <span>Make deposit to wallet</span> <svg class="h-5 w-5 text-slate-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.042 21.672L13.684 16.6m0 0l-2.51 2.225.569-9.47 5.227 7.917-3.286-.672zm-7.518-.267A8.25 8.25 0 1120.25 10.5M8.288 14.212A5.25 5.25 0 1117.25 10.5" />
                        </svg>

                    </a>
                </div>
                <div class="px-6 py-2 mx-auto lg:flex lg:items-center lg:gap-12">

                    <div class="relative w-full mt-8 md:w-1/3 lg:mt-0">
                        <img class=" w-full lg:h-[32rem] h-80 md:h-96 rounded-lg object-cover "
                            src="https://images.unsplash.com/photo-1613310023042-ad79320c00ff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80"
                            alt="">
                    </div>
                    <div class="w-full md:w-2/3">

                        {{-- <p class="text-sm font-medium text-blue-500 dark:text-blue-400">404 error</p> --}}
                        <h1 class="mt-3 text-2xl font-semibold text-gray-800 dark:text-white md:text-3xl">Welcome to FMC
                            Pay Anywhere
                        </h1>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">Profile.</p>
                        <div class="border-t border-gray-200">
                            <dl class="grid grid-cols-1 md:grid-cols-2">
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Full name</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        {{ auth()->user()->name }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Patient ID</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        {{ auth()->user()->client_id }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">E mail</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        {{ auth()->user()->email }}</dd>
                                </div>
                                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                    <dt class="text-sm font-medium text-gray-500">Phone Number</dt>
                                    <dd class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                                        {{ auth()->user()->email }}</dd>
                                </div>
                            </dl>
                            <div class="my-4 flex items-center space-x-3">
                                <div class="h-px flex-1 bg-slate-200"></div>
                                <p>Account Details</p>
                                <div class="h-px flex-1 bg-slate-200"></div>
                            </div>

                            <div class="grid grid-cols-2 gap-3 sm:grid-cols-1 sm:gap-5 lg:grid-cols-2">
                                <div class="rounded-lg bg-sky-500 p-4 text-white">
                                    <div class="flex justify-between space-x-1">
                                        <p class="text-xl font-semibold text-slate-700 dark:text-navy-100">
                                            ₦67,000.00
                                        </p>
                                        <svg class="h-5 w-5 text-success-200" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                            class="w-6 h-6">
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
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-success"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                                        </svg>
                                    </div>
                                    <p class="mt-1 text-xs+">Outstanding Bill Balance</p>
                                </div>
                            </div>


                        </div>


                        <div class="flex items-center mt-6 gap-x-3">
                            {{-- <button
                                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:rotate-180">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>


                                <span>Go back</span>
                            </button> --}}

                            <a href="{{ route('deposit') }}"
                                class="w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">
                                Make Deposit to Wallet
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
