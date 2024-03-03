<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Barcode</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Verpakkingseenheid</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal aanwezig</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Allergene info</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Leverantie info</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $product->barcode }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $product->naam }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $product->magazijn->verpakkings_eenheid }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $product->magazijn->aantal_aanwezig ?? '✗' }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        @if(is_a($product->productperallergeens, 'Illuminate\Database\Eloquent\Collection') && $product->productperallergeens->count() > 0)
                        <a href="{{ route('allergenen.show', $product->id) }}" class="text-red-500"><span class="material-symbols-outlined">close</span></a>
                        @else
                        <span class="text-green-500 material-symbols-outlined">done</span>
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('leverantie.show', $product->id) }}" class="text-blue-500"><span class="material-symbols-outlined">info</span></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>