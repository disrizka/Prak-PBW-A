<x-app-layout>
    @slot('title', 'Stores')



    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Stores') }}
        </h2>
    </x-slot>

    <x-container>
        
        <div class="grid grid-cols-2 gap-3">
        @foreach ($stores as $store)

        <x-card class="p-4">
            <img src="{{ \Illuminate\Support\Facades\Storage::url($store->logo) }}" alt="{{ $store->name }}" class="size-16 rounded-lg">
            <x-card.header>
                <x-card.title>{{ $store->name }}</x-card.title>
            <x-card.description>
                {{ $store->description }}
            </x-card.description>

            @if($store->user_id == auth()->user()->id)
                <a href="{{ route('stores.edit', $store) }}" class="underline text-blue-600">
                    Edit 
                </a>

                @endif 
            </x-card.header>
            </x-card>


@endforeach
</div>
        
    </x-container>

</x-app-layout>