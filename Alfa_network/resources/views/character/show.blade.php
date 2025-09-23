<x-layout>
    <h2>   {{ $characters->name }}</h2>

    <div class="bg-gray-200 p-4 rounded">
        <p><strong>Skill level:</strong> {{ $characters->skill}}</p>
        <p><strong>About me:</strong></p>
        <p>{{ $characters->bio }}</p>
    </div>
    </x-layout>
