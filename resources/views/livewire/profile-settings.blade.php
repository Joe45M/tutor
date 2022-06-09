<div>
    <x-title class="mb-3">Profile settings</x-title>
    <x-card class="mb-5">
        <div class="grid lg:grid-cols-2 lg:w-2/3 lg:gap-5">
            <label for="name" class="font-bold self-center">Name</label>
            <x-input wire:model="profile.name" type="text"></x-input>
            <div>
                <x-button wire:click="saveProfile">Save profile</x-button>
            </div>
        </div>
    </x-card>

    <x-title class="mb-3">Your transactions</x-title>
    <x-card>
        <div class="grid lg:grid-cols-2 lg:w-2/3 lg:gap-5">
            <label for="name" class="font-bold self-center">Name</label>
            <x-input wire:model="profile.name" type="text"></x-input>
            <div>
                <x-button wire:click="saveProfile">Save profile</x-button>
            </div>
        </div>
    </x-card>
</div>
