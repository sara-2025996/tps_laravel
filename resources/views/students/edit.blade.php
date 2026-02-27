<h2>Modifier étudiant</h2>

<form method="POST" action="{{ route('students.update',['student' => $student]) }}">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $student->name }}"><br>
    <input type="number" name="age" value="{{ $student->age }}"><br>
    <input type="email" name="email" value="{{ $student->email }}"><br>

    <button type="submit">Update</button>
</form>