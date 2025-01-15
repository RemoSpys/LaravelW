<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Editing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-8">
                <section class="max-w-lg">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Edit Product Information') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __("Update Products information.") }}
                        </p>
                    </header>

                    <form method="post" action="{{ route('profile.update', $product->id) }}" class="mt-6 space-y-6">
                        @csrf
                        @method('patch')

                        <div>
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $product->name)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div>
                            <x-input-label for="price" :value="__('Price')" />
                            <x-text-input id="price" name="Price" type="text" class="mt-1 block w-full" :value="old('name', $product->price)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <x-text-input id="image" name="Image" type="text" class="mt-1 block w-full" :value="old('name', $product->image)" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea
                            name="description"
                            id="description"
                            cols="30"
                            rows="10"
                            class="border border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm p-2"
                        >{{ old('description', $product->description ?? '') }}</textarea>
                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </section>

            </div>
        </div>
    </div>
</x-app-layout>
