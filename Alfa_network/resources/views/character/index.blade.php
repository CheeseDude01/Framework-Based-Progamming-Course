<x-layout>
    <h2>Available Character</h2>

    <ul>
        @foreach ($characters as $character)
            <li>
                <x-card href="{{ route('characters.show', $character->id) }}" :highlight="$character['skill'] > 70">
                    <h3>{{ $character->name}}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>

    {{ $characters->links() }}
</x-layout>
