<x-layout>
    <h2>Available Character</h2>

    <ul>
        @foreach ($character as $character)
            <li>
                <x-card href="/character/{{ $character->id }}" :highlight="$character['skill'] > 70">
                    <h3>{{ $character->name}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>
