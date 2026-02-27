<h2>Ajouter étudiant</h2>

<form method="POST" action="{{ route('students.store') }}">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="number" name="age" placeholder="Age"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <button type="submit">Save</button>
</form>