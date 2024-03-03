<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leverings Informatie') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">

        @if($products->magazijn->aantal_aanwezig == 0)
        <?php $product = $products->productPerLeveranciers->first(); ?>
        <h2 class="text-center">Er is van dit product op dit moment geen voorraad aanwezig, de verwachte eerstvolgende levering is: {{ $product->datum_eerstvolgende_levering }}</h2>
        <script>
            setTimeout(function() {
                window.location.href = "{{ route('overzicht') }}";
            }, 4000);
        </script>
        @else

        <?php $leverancier = $products->productPerLeveranciers->first()->leverancier; ?>

        <h2 class="text-center">Naam leverancier: {{ $leverancier->naam }}</h2>
        <h2 class="text-center">Contactpersoon leverancier: {{ $leverancier->contactpersoon }}</h2>
        <h2 class="text-center">Leverancier nummer: {{ $leverancier->leverancier_nummer }}</h2>
        <h2 class="text-center">Mobiel: {{ $leverancier->mobiel }}</h2>

        <table class="min-w-full mt-8">
            <thead>
                <tr>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Naam Product</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Datum laatste levering</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aantal</th>
                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Eerstvolgende levering</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($products->productPerLeveranciers as $product)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $product->product->naam }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->datum_levering }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->aantal }}</td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->datum_eerstvolgende_levering }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

</x-app-layout>