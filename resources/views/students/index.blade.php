<h2>Liste des étudiants</h2>

<a href="{{ route('students.create') }}">Ajouter</a>

@foreach($students as $student)
    <p>
        {{ $student->name }} -
        {{ $student->age }} -
        {{ $student->email }}

        <a href="{{ route('students.edit',['student' => $student]) }}">Edit</a>
        <a href="{{ route('students.show',['student' => $student]) }}">show</a>

        <form action="{{ route('students.destroy',['student' => $student]) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </p>
@endforeach