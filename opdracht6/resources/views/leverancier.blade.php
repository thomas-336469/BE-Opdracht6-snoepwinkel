<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Overzicht Leveranciers') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contactpersoon</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Leveranciernummer</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobiel</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal verschillende producten</th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Toon producten</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($leveranciers as $leverancier)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $leverancier->naam }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $leverancier->contactpersoon }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $leverancier->leverancier_nummer }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $leverancier->mobiel }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-gray-900">{{ $leverancier->productPerLeveranciers->unique('product_id')->count() }}</td>
                    <td class="px-6 py-4 whitespace-nowrap"><a href="{{ route('leverancier.producten', $leverancier->id) }}" class="text-blue-500">info</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</x-app-layout>