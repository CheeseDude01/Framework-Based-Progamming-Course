<x-layout>
  <form action="{{ route('character.store') }}" method="POST">
    <!-- CSRF token for security -->
    @csrf

    <h2>Create a New Characters</h2>

    <!-- ninja Name -->
    <label for="name">Character Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >

    <!-- ninja Strength -->
    <label for="skill">Character Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value="{{ old('skill') }}" 
      required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    >{{ old('bio') }}</textarea>

    <!-- select a dojo -->
    <label for="faction_id">Faction:</label>
    <select id="faction_id" name="faction_id" required>
      <option value="" disabled selected>Select a faction</option>
      @foreach ($factions as $faction)
        <option value="{{ $faction->id }}" {{ $faction->id == old('faction_id') ? 'selected' : '' }}>
          {{ $faction->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Character</button>

    <!-- validation errors -->
    @if ($errors->any())
        <ul class="px-4 py-2 bg-red-200">
            @foreach ($errors->all() as $error)
                <li class="my-2 text-red-600">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
  </form>
</x-layout>
