<x-layout>
  <form action="" method="">
    <!-- CSRF token for security -->
    @csrf

    <h2>Create a New Characters</h2>

    <!-- ninja Name -->
    <label for="name">Character Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      required
    >

    <!-- ninja Strength -->
    <label for="skill">Character Skill (0-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    ></textarea>

    <!-- select a dojo -->
    <label for="faction_id">Faction:</label>
    <select id="faction_id" name="faction_id" required>
      <option value="" disabled selected>Select a faction</option>
      @foreach ($factions as $faction)
        <option value="{{ $faction->id }}">
          {{ $faction->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Character</button>

    <!-- validation errors -->
    
  </form>
</x-layout>
