<x-layout>
    <h2>   {{ $characters->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $characters->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $characters->bio }}</p>
    </div>

    <div class="border-2 border-dashed bg-white px-4 pb-4 my-4 rounded">
        <h3>Faction Information</h3>
        <p><strong>Faction name:</strong> {{ $characters->faction->name }}</p>
        <p><strong>Location:</strong> {{ $characters->faction->location }}</p>
        <p><strong>About the Faction:</strong></p>
        <p>{{ $characters->faction->description }}</p>
    </div>

    <form action="{{ route('characters.destroy', $characters) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn my-4">Delete Character</button>
    </form>
    </x-layout>
