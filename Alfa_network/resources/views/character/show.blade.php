<x-layout>
    <h2>   {{ $character->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $character->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $character->bio }}</p>
    </div>
    </x-layout>
