<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid gap-5 grid-cols-4">
                <div class="lg:col-span-1">
                    <x-title class="mb-5">Filters</x-title>
                    <livewire:search-filters></livewire:search-filters>
                </div>
                <div class="lg:col-span-3">
                    <livewire:search-results></livewire:search-results>
                </div>
            </div>
        </div>
        <livewire:search-contact></livewire:search-contact>
    </div>
</x-app-layout>
