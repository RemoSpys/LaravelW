<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="bg-gray-900 py-10">
                        <table class="mt-6 w-full whitespace-nowrap text-left">
                            <colgroup>
                                <col class="w-full sm:w-4/12">
                                <col class="lg:w-4/12">
                                <col class="lg:w-2/12">
                                <col class="lg:w-1/12">
                                <col class="lg:w-1/12">
                            </colgroup>
                            <thead class="border-b border-white/10 text-sm/6 text-white">
                                <tr>
                                    <th scope="col" class="py-2 pl-4 pr-8 font-semibold sm:pl-6 lg:pl-8">Product</th>
                                    <th scope="col" class="hidden py-2 pl-0 pr-8 font-semibold sm:table-cell">Price
                                    </th>

                                    <th scope="col"
                                        class="hidden py-2 pl-0 pr-8 font-semibold md:table-cell lg:pr-20">Created at
                                    </th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/5">
                                @foreach ($products as $product)
                                <tr>
                                    <td class="py-4 pl-4 pr-8 sm:pl-6 lg:pl-8">
                                        <div class="flex items-center gap-x-4">
                                            <img src="{{ $product->image }}"
                                                alt="" class="size-8 rounded-full bg-gray-800">
                                            <div class="truncate text-sm/6 font-medium text-white">{{ $product->name }}</div>
                                        </div>
                                    </td>
                                    <td class="hidden py-4 pl-0 pr-4 sm:table-cell sm:pr-8">
                                        <div class="flex gap-x-3">
                                            <div class="font-mono text-sm/6 text-gray-400"> {{ Number::currency($product->price, 'EUR', 'et')}} </div>
                                        </div>
                                    </td>

                                    <td class="hidden py-4 pl-0 pr-8 text-sm/6 text-gray-400 md:table-cell lg:pr-20"> {{ $product->created_at->format('d.m.Y')}} </td>
                                    <td class="py-4 pl-0 pr-4 text-right text-sm/6 text-gray-400 sm:pr-6 lg:pr-8">
                                        <div class="grid grid-cols-2 gap-2">
                                            <a href="{{ route('products.edit', $product->id) }}"
                                                class="text-blue-500 hover:text-blue-600">Edit</a>
                                            <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="text-red-500 hover:text-red-600">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endForEach
                            </tbody>
                        </table>
                        <div class="px-4 mt-4">
                        {{$products}}
                    </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
