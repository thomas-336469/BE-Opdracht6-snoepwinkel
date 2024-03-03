<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
        <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Geleverde Producten') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">

        <h2 class="text-center text-2xl font-semibold mb-4">Naam leverancier: {{ $leveranciers->naam }}</h2>
        <h2 class="text-center">Contactpersoon leverancier: {{ $leveranciers->contactpersoon }}</h2>
        <h2 class="text-center">Leverancier nummer: {{ $leveranciers->leverancier_nummer }}</h2>
        <h2 class="text-center">Mobiel: {{ $leveranciers->mobiel }}</h2>

        <table class="min-w-full mt-8">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam Product</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal in magazijn</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Verpakkingseenheid</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Laatste levering</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nieuwe levering</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @if($leveranciers->productPerLeveranciers->isEmpty() || $leveranciers->productPerLeveranciers->first()->product->magazijn->aantal_aanwezig == 0)
                <tr class="text-center">
                    <td colspan="5">Dit bedrijf heeft tot nu toe geen producten geleverd aan Jamin</td>
                </tr>
                @else
                @foreach($leveranciers->productPerLeveranciers as $perProduct)
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm font-medium text-gray-900">{{ $perProduct->product->naam }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">{{ $perProduct->product->magazijn->aantal_aanwezig }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">{{ $perProduct->product->magazijn->verpakkings_eenheid }} kg</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500">{{ $perProduct->datum_levering }}</td>
                    <td class="px-6 py-4 whitespace-no-wrap text-sm text-gray-500"><a href="{{ route('levering.create', $perProduct->id) }}" class="text-blue-500">add</a></td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>

        <div class="text-center mt-8">
            <x-primary-button>
                <a href="{{ route('leverancier') }}">Terug</a>
            </x-primary-button>
            <x-primary-button class="ml-4">
                <a href="{{ route('dashboard') }}">Home</a>
            </x-primary-button>
        </div>

    </div>

</x-app-layout>