Om het probleem op te lossen waarbij de tekst die je typt wit is en dus niet leesbaar is, kun je de tekstkleur van de inputvelden aanpassen naar zwart. Hier is de bijgewerkte code:

```html
<x-app-layout>

    <head>
        <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}" />
    </head>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Leverings Product') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">

        <h2 class="text-center text-2xl font-semibold mb-4 text-gray-900">Naam leverancier: {{ $Levering->naam }}</h2>
        <h2 class="text-center text-gray-900">Contactpersoon leverancier: {{ $Levering->contactpersoon }}</h2>
        <h2 class="text-center text-gray-900">Mobiel: {{ $Levering->mobiel }}</h2>

        <div class="center mt-8">
            @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form method="POST" action="{{ route('levering.store', ['id' => $Levering->id]) }}">
                @csrf
                <label for="aantal_producteenheden" class="block text-gray-900">Aantal producteenheden:</label>
                <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-gray-900" type="number" id="aantal_producteenheden" name="aantal_producteenheden" value="{{ old('aantal_producteenheden') }}"><br>
                <label for="datum_eerstvolgende_levering" class="block mt-4 text-gray-900">Datum eerstvolgende levering:</label>
                <input class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 text-gray-900" type="date" id="datum_eerstvolgende_levering" name="datum_eerstvolgende_levering"><br>
                <button type="submit" class="mt-4 bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Sla op</button>
            </form>

            @if (session('message'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                {{ session('message') }}
            </div>
            @endif
        </div>

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
```